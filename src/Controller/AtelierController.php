<?php

namespace App\Controller;

use App\Entity\Atelier;
use App\Form\AtelierType;
use App\Repository\AtelierRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\MesServices\MarkdownAtelier;

#[Route('/atelier')]
class AtelierController extends AbstractController
{

    #[Route('/accueil', name: 'app_atelier_accueil', methods: ['GET'])]
    public function accueil(): Response
    {
        return $this->render('atelier/accueil.html.twig');
    }

    #[Route('/', name: 'app_atelier_index', methods: ['GET'])]
    public function index(AtelierRepository $atelierRepository, MarkdownAtelier $markdownAtelier): Response
    {
        return $this->render('atelier/index.html.twig', [
            'ateliers' => $markdownAtelier->parseArray(
                $atelierRepository->findAll()),
            'apprenti' => ""
        ]);
    }

    #[Route('/new', name: 'app_atelier_new', methods: ['GET', 'POST'])]
    public function new(Request $request, AtelierRepository $atelierRepository): Response
    {
        $atelier = new Atelier();
        $form = $this->createForm(AtelierType::class, $atelier);
        $form->handleRequest($request);

        $error = "";

        if ($this->getUser() === null) {
            $error = "Vous devez être connecté pour créer un nouvel atelier";

        }

        if ($form->isSubmitted() && $form->isValid() && in_array("ROLE_INSTRUCTOR", $this->getUser()->getRoles())) {
            $atelier->setNomInstructeur($this->getUser());
            $atelierRepository->save($atelier, true);

            return $this->redirectToRoute('app_atelier_index', ["apprenti" => ""], Response::HTTP_SEE_OTHER);
        }

        if ($form->isSubmitted() && !in_array("ROLE_INSTRUCTOR", $this->getUser()->getRoles())) {
            $error = "Votre role ne permet pas la création d'un nouvel atelier";

        }

        return $this->renderForm('atelier/new.html.twig', [
            'atelier' => $atelier,
            'form' => $form, 'error' => $error
        ]);
    }

    #[Route('/{id}', name: 'app_atelier_show', methods: ['GET'])]
    public function show(Atelier $atelier): Response
    {
        return $this->render('atelier/show.html.twig', [
            'atelier' => $atelier,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_atelier_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Atelier $atelier, AtelierRepository $atelierRepository): Response
    {
        $form = $this->createForm(AtelierType::class, $atelier);
        $form->handleRequest($request);
        $error = "";

        if ($form->isSubmitted() && $form->isValid() && $this->getUser() == $atelier->getNomInstructeur()) {
            $atelierRepository->save($atelier, true);

            return $this->redirectToRoute('app_atelier_index', ["apprenti" => ""], Response::HTTP_SEE_OTHER);
        }

        if ($form->isSubmitted() && $atelier->getNomInstructeur() != $this->getUser()) {
            $error = "Votre role ne permet pas la modification de cet atelier";

        }

        return $this->renderForm('atelier/edit.html.twig', [
            'atelier' => $atelier,
            'form' => $form,
            'error' => $error
        ]);
    }

    #[Route('/{id}', name: 'app_atelier_delete', methods: ['POST'])]
    public function delete(Request $request, Atelier $atelier, AtelierRepository $atelierRepository): Response
    {
        if ($this->isCsrfTokenValid('delete' . $atelier->getId(), $request->request->get('_token'))) {
            $atelierRepository->remove($atelier, true);
        }

        return $this->redirectToRoute('app_atelier_itri', ["apprenti" => ""], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}/inscrire', name: 'app_atelier_inscrire', methods: ['GET', 'POST'])]
    public function inscrire(Request $request, Atelier $atelier, AtelierRepository $atelierRepository, MarkdownAtelier $markdownAtelier): Response
    {


//        if( !in_array($this->getUser()->getId(),$atelier->getApprentisInscrits()) ){
        $atelier->addApprentiInscrit($this->getUser()->getId());
        $atelierRepository->save($atelier, true);


        return $this->render('atelier/index.html.twig', [
            "apprenti" => "Vous êtes inscrit à l'atelier " . $atelier->getNom(),
            'ateliers' => $markdownAtelier->parseArray(
                $atelierRepository->findAll())

        ]);
    }

    #[Route('/{id}/desinscrire', name: 'app_atelier_desinscrire', methods: ['GET', 'POST'])]
    public function desinscrire(Request $request, Atelier $atelier, AtelierRepository $atelierRepository, MarkdownAtelier $markdownAtelier): Response
    {


//        if( !in_array($this->getUser()->getId(),$atelier->getApprentisInscrits()) ){
        $atelier->removeApprentiInscrit($this->getUser()->getId());
        $atelierRepository->save($atelier, true);


        return $this->render('atelier/index.html.twig', [
            "apprenti" => "Vous êtes désinscrit à l'atelier " . $atelier->getNom(),
            'ateliers' => $markdownAtelier->parseArray(
                $atelierRepository->findAll())

        ]);
    }

    #[Route('/{id}/apprentis', name: 'app_atelier_apprentis', methods: ['GET'])]
    public function listeApprentis(Atelier $atelier, UserRepository $userRepository): Response
    {

        $users = $userRepository->findAll();
        $apprentis = [];
        for ($i = 0; $i < sizeof($users); $i++) {
            if (in_array($users[$i]->getId(), $atelier->getApprentisInscrits())) {
                array_push($apprentis, $users[$i]);
            }
        }
        return $this->render('atelier/apprentis.html.twig', [
            'apprentis' => $apprentis,
            'atelier' => $atelier->getNom()
        ]);

    }

    #[Route('/98/itri', name: 'app_atelier_apprentis1', methods: ['GET'])]
    public function listeApprentisitri(Atelier $atelier, UserRepository $userRepository): Response
    {


        return "itri";

    }






}

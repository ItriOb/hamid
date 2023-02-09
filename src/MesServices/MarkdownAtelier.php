<?php

namespace App\MesServices;

use App\Entity\Atelier;
use cebe\markdown\Markdown;

class MarkdownAtelier
{
    protected $markdown;
    public function __construct(Markdown $markdown)
    {
        $this->markdown = $markdown;
    }

    public function parse(Atelier $atelier) : Atelier
    {
        $parseAtelier = $atelier;
        $parseAtelier ->setDescription($this->markdown->parse($atelier->getDescription()));
        return $parseAtelier;
    }

    public function parseArray(array $ateliers) : array
    {
        $parsedAtelier = [];
        foreach ($ateliers  as $atelier) {
            $parseAtelier = $atelier;
            $parseAtelier ->setDescription($this->markdown->parse($atelier->getDescription()));
            $parsedAtelier[] = $parseAtelier;
        }
        return $parsedAtelier;
    }
}
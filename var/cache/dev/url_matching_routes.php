<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/atelier/accueil' => [[['_route' => 'app_atelier_accueil', '_controller' => 'App\\Controller\\AtelierController::accueil'], null, ['GET' => 0], null, false, false, null]],
        '/atelier' => [[['_route' => 'app_atelier_index', '_controller' => 'App\\Controller\\AtelierController::index'], null, ['GET' => 0], null, true, false, null]],
        '/atelier/new' => [[['_route' => 'app_atelier_new', '_controller' => 'App\\Controller\\AtelierController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/atelier/98/itri' => [[['_route' => 'app_atelier_apprentis1', '_controller' => 'App\\Controller\\AtelierController::listeApprentisitri'], null, ['GET' => 0], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/atelier/([^/]++)(?'
                    .'|(*:189)'
                    .'|/(?'
                        .'|edit(*:205)'
                        .'|inscrire(*:221)'
                        .'|desinscrire(*:240)'
                        .'|apprentis(*:257)'
                    .')'
                    .'|(*:266)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        189 => [[['_route' => 'app_atelier_show', '_controller' => 'App\\Controller\\AtelierController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        205 => [[['_route' => 'app_atelier_edit', '_controller' => 'App\\Controller\\AtelierController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        221 => [[['_route' => 'app_atelier_inscrire', '_controller' => 'App\\Controller\\AtelierController::inscrire'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        240 => [[['_route' => 'app_atelier_desinscrire', '_controller' => 'App\\Controller\\AtelierController::desinscrire'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        257 => [[['_route' => 'app_atelier_apprentis', '_controller' => 'App\\Controller\\AtelierController::listeApprentis'], ['id'], ['GET' => 0], null, false, false, null]],
        266 => [
            [['_route' => 'app_atelier_delete', '_controller' => 'App\\Controller\\AtelierController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

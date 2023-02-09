<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_atelier_accueil' => [[], ['_controller' => 'App\\Controller\\AtelierController::accueil'], [], [['text', '/atelier/accueil']], [], [], []],
    'app_atelier_index' => [[], ['_controller' => 'App\\Controller\\AtelierController::index'], [], [['text', '/atelier/']], [], [], []],
    'app_atelier_new' => [[], ['_controller' => 'App\\Controller\\AtelierController::new'], [], [['text', '/atelier/new']], [], [], []],
    'app_atelier_show' => [['id'], ['_controller' => 'App\\Controller\\AtelierController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/atelier']], [], [], []],
    'app_atelier_edit' => [['id'], ['_controller' => 'App\\Controller\\AtelierController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/atelier']], [], [], []],
    'app_atelier_delete' => [['id'], ['_controller' => 'App\\Controller\\AtelierController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/atelier']], [], [], []],
    'app_atelier_inscrire' => [['id'], ['_controller' => 'App\\Controller\\AtelierController::inscrire'], [], [['text', '/inscrire'], ['variable', '/', '[^/]++', 'id', true], ['text', '/atelier']], [], [], []],
    'app_atelier_desinscrire' => [['id'], ['_controller' => 'App\\Controller\\AtelierController::desinscrire'], [], [['text', '/desinscrire'], ['variable', '/', '[^/]++', 'id', true], ['text', '/atelier']], [], [], []],
    'app_atelier_apprentis' => [['id'], ['_controller' => 'App\\Controller\\AtelierController::listeApprentis'], [], [['text', '/apprentis'], ['variable', '/', '[^/]++', 'id', true], ['text', '/atelier']], [], [], []],
    'app_atelier_apprentis1' => [[], ['_controller' => 'App\\Controller\\AtelierController::listeApprentisitri'], [], [['text', '/atelier/98/itri']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
];

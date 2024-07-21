<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/cinema' => [[['_route' => 'app_cinema_index', '_controller' => 'App\\Controller\\CinemaController::index'], null, ['GET' => 0], null, true, false, null]],
        '/cinema/new' => [[['_route' => 'app_cinema_new', '_controller' => 'App\\Controller\\CinemaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/commande' => [[['_route' => 'app_commande_index', '_controller' => 'App\\Controller\\CommandeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/commande/new' => [[['_route' => 'app_commande_new', '_controller' => 'App\\Controller\\CommandeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/film' => [[['_route' => 'app_film_index', '_controller' => 'App\\Controller\\FilmController::index'], null, ['GET' => 0], null, true, false, null]],
        '/film/new' => [[['_route' => 'app_film_new', '_controller' => 'App\\Controller\\FilmController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [
            [['_route' => 'app_home_index', '_controller' => 'App\\Controller\\HomeController::number'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'Accueil', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null],
        ],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/salle' => [[['_route' => 'app_salle_index', '_controller' => 'App\\Controller\\SalleController::index'], null, ['GET' => 0], null, true, false, null]],
        '/salle/new' => [[['_route' => 'app_salle_new', '_controller' => 'App\\Controller\\SalleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/seance' => [[['_route' => 'app_seance_index', '_controller' => 'App\\Controller\\SeanceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/seance/new' => [[['_route' => 'app_seance_new', '_controller' => 'App\\Controller\\SeanceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/Commande' => [[['_route' => 'Commande', '_controller' => 'App\\Controller\\CommandeController::index'], null, null, null, false, false, null]],
        '/Commande/new' => [[['_route' => 'Commande_New', '_controller' => 'App\\Controller\\CommandeController::new'], null, null, null, false, false, null]],
        '/Cinema' => [[['_route' => 'Cinema', '_controller' => 'App\\Controller\\CinemaController::index'], null, null, null, false, false, null]],
        '/Salle' => [[['_route' => 'Salle', '_controller' => 'App\\Controller\\SalleController::index'], null, null, null, false, false, null]],
        '/Film' => [[['_route' => 'Film', '_controller' => 'App\\Controller\\FilmController::index'], null, null, null, false, false, null]],
        '/Film/new' => [[['_route' => 'Film_New', '_controller' => 'App\\Controller\\FilmController::new'], null, null, null, false, false, null]],
        '/User' => [[['_route' => 'User', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/Seance' => [[['_route' => 'Seance', '_controller' => 'App\\Controller\\SeanceController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/c(?'
                    .'|inema/([^/]++)(?'
                        .'|(*:29)'
                        .'|/edit(*:41)'
                        .'|(*:48)'
                    .')'
                    .'|ommande/([^/]++)(?'
                        .'|(*:75)'
                        .'|/edit(*:87)'
                        .'|(*:94)'
                    .')'
                .')'
                .'|/film/([^/]++)(?'
                    .'|(*:120)'
                    .'|/edit(*:133)'
                    .'|(*:141)'
                .')'
                .'|/s(?'
                    .'|alle/([^/]++)(?'
                        .'|(*:171)'
                        .'|/edit(*:184)'
                        .'|(*:192)'
                    .')'
                    .'|eance/([^/]++)(?'
                        .'|(*:218)'
                        .'|/edit(*:231)'
                        .'|(*:239)'
                    .')'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:266)'
                    .'|/edit(*:279)'
                    .'|(*:287)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:327)'
                    .'|wdt/([^/]++)(*:347)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:393)'
                            .'|router(*:407)'
                            .'|exception(?'
                                .'|(*:427)'
                                .'|\\.css(*:440)'
                            .')'
                        .')'
                        .'|(*:450)'
                    .')'
                .')'
                .'|/C(?'
                    .'|ommande/(\\d+)(*:478)'
                    .'|inema/(\\d+)(*:497)'
                .')'
                .'|/S(?'
                    .'|alle/(\\d+)(*:521)'
                    .'|eance/(\\d+)(*:540)'
                .')'
                .'|/Film/(\\d+)(*:560)'
                .'|/Profile/(\\d+)(*:582)'
                .'|/User/(\\d+)/remove(*:608)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        29 => [[['_route' => 'app_cinema_show', '_controller' => 'App\\Controller\\CinemaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        41 => [[['_route' => 'app_cinema_edit', '_controller' => 'App\\Controller\\CinemaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        48 => [[['_route' => 'app_cinema_delete', '_controller' => 'App\\Controller\\CinemaController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        75 => [[['_route' => 'app_commande_show', '_controller' => 'App\\Controller\\CommandeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        87 => [[['_route' => 'app_commande_edit', '_controller' => 'App\\Controller\\CommandeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        94 => [[['_route' => 'app_commande_delete', '_controller' => 'App\\Controller\\CommandeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        120 => [[['_route' => 'app_film_show', '_controller' => 'App\\Controller\\FilmController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        133 => [[['_route' => 'app_film_edit', '_controller' => 'App\\Controller\\FilmController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        141 => [[['_route' => 'app_film_delete', '_controller' => 'App\\Controller\\FilmController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        171 => [[['_route' => 'app_salle_show', '_controller' => 'App\\Controller\\SalleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        184 => [[['_route' => 'app_salle_edit', '_controller' => 'App\\Controller\\SalleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        192 => [[['_route' => 'app_salle_delete', '_controller' => 'App\\Controller\\SalleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        218 => [[['_route' => 'app_seance_show', '_controller' => 'App\\Controller\\SeanceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        231 => [[['_route' => 'app_seance_edit', '_controller' => 'App\\Controller\\SeanceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        239 => [[['_route' => 'app_seance_delete', '_controller' => 'App\\Controller\\SeanceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        266 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        279 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        287 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        327 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        347 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        393 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        407 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        427 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        440 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        450 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        478 => [[['_route' => 'Commande_Show', '_controller' => 'App\\Controller\\CommandeController::show'], ['id'], null, null, false, true, null]],
        497 => [[['_route' => 'Cinema_Show', '_controller' => 'App\\Controller\\CinemaController::show'], ['id'], null, null, false, true, null]],
        521 => [[['_route' => 'Salle_Show', '_controller' => 'App\\Controller\\SalleController::show'], ['id'], null, null, false, true, null]],
        540 => [[['_route' => 'Seance_Show', '_controller' => 'App\\Controller\\SeanceController::show'], ['id'], null, null, false, true, null]],
        560 => [[['_route' => 'Film_Show', '_controller' => 'App\\Controller\\FilmController::show'], ['id'], null, null, false, true, null]],
        582 => [[['_route' => 'Profile', '_controller' => 'App\\Controller\\UserController::show'], ['id'], null, null, false, true, null]],
        608 => [
            [['_route' => 'User_Remove', '_controller' => 'App\\Controller\\UserController::remove'], ['id'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

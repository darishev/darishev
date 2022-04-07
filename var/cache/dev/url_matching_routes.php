<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/command-scheduler/list' => [[['_route' => 'dukecity_command_scheduler_list', '_controller' => 'Dukecity\\CommandSchedulerBundle\\Controller\\ListController::indexAction'], null, null, null, false, false, null]],
        '/command-scheduler/monitor' => [[['_route' => 'dukecity_command_scheduler_monitor', '_controller' => 'Dukecity\\CommandSchedulerBundle\\Controller\\ApiController::monitorAction'], null, null, null, false, false, null]],
        '/command-scheduler/api/list' => [[['_route' => 'dukecity_command_scheduler_api_list', '_controller' => 'Dukecity\\CommandSchedulerBundle\\Controller\\ApiController::listAction'], null, null, null, false, false, null]],
        '/command-scheduler/api/console_commands' => [[['_route' => 'dukecity_command_scheduler_api_console_commands', '_controller' => 'Dukecity\\CommandSchedulerBundle\\Controller\\ApiController::getConsoleCommands'], null, null, null, false, false, null]],
        '/command-scheduler/detail/edit' => [[['_route' => 'dukecity_command_scheduler_detail_new', '_controller' => 'Dukecity\\CommandSchedulerBundle\\Controller\\DetailController::edit'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\ConferenceController::index'], null, null, null, false, false, null]],
        '/conference_header' => [[['_route' => 'conference_header', '_controller' => 'App\\Controller\\ConferenceController::conferenceHeader'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/co(?'
                    .'|mmand\\-scheduler/(?'
                        .'|a(?'
                            .'|pi/(?'
                                .'|console_commands_details(?:/([^/]++))?(*:81)'
                                .'|trans_cron_expression/([^/]++)(?:/([^/]++))?(*:132)'
                            .')'
                            .'|ction/(?'
                                .'|toggle/([^/]++)(*:165)'
                                .'|remove/([^/]++)(*:188)'
                                .'|execute/([^/]++)(*:212)'
                                .'|unlock/([^/]++)(*:235)'
                            .')'
                        .')'
                        .'|detail/edit/([^/]++)(*:265)'
                    .')'
                    .'|nference/([^/]++)(*:291)'
                .')'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:317)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:363)'
                            .'|router(*:377)'
                            .'|exception(?'
                                .'|(*:397)'
                                .'|\\.css(*:410)'
                            .')'
                        .')'
                        .'|(*:420)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:455)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        81 => [[['_route' => 'dukecity_command_scheduler_api_console_commands_details', '_controller' => 'Dukecity\\CommandSchedulerBundle\\Controller\\ApiController::getConsoleCommandsDetails', 'commands' => 'all'], ['commands'], null, null, false, true, null]],
        132 => [[['_route' => 'dukecity_command_scheduler_api_translate_cron_expression', '_controller' => 'Dukecity\\CommandSchedulerBundle\\Controller\\ApiController::translateCronExpression', 'lang' => 'en'], ['cronExpression', 'lang'], null, null, false, true, null]],
        165 => [[['_route' => 'dukecity_command_scheduler_action_toggle', '_controller' => 'Dukecity\\CommandSchedulerBundle\\Controller\\ListController::toggleAction'], ['id'], null, null, false, true, null]],
        188 => [[['_route' => 'dukecity_command_scheduler_action_remove', '_controller' => 'Dukecity\\CommandSchedulerBundle\\Controller\\ListController::removeAction'], ['id'], null, null, false, true, null]],
        212 => [[['_route' => 'dukecity_command_scheduler_action_execute', '_controller' => 'Dukecity\\CommandSchedulerBundle\\Controller\\ListController::executeAction'], ['id'], null, null, false, true, null]],
        235 => [[['_route' => 'dukecity_command_scheduler_action_unlock', '_controller' => 'Dukecity\\CommandSchedulerBundle\\Controller\\ListController::unlockAction'], ['id'], null, null, false, true, null]],
        265 => [[['_route' => 'dukecity_command_scheduler_detail_edit', '_controller' => 'Dukecity\\CommandSchedulerBundle\\Controller\\DetailController::edit'], ['id'], null, null, false, true, null]],
        291 => [[['_route' => 'conference', '_controller' => 'App\\Controller\\ConferenceController::show'], ['slug'], null, null, false, true, null]],
        317 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        363 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        377 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        397 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        410 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        420 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        455 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

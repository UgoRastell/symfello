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
    'app_board_index' => [[], ['_controller' => 'App\\Controller\\BoardController::index'], [], [['text', '/']], [], [], []],
    'app_board_new' => [[], ['_controller' => 'App\\Controller\\BoardController::new'], [], [['text', '/new']], [], [], []],
    'app_board_show' => [['id'], ['_controller' => 'App\\Controller\\BoardController::show'], [], [['variable', '/', '[^/]++', 'id', true]], [], [], []],
    'app_board_edit' => [['id'], ['_controller' => 'App\\Controller\\BoardController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true]], [], [], []],
    'app_board_delete' => [['id'], ['_controller' => 'App\\Controller\\BoardController::delete'], [], [['variable', '/', '[^/]++', 'id', true]], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\LoginController::index'], [], [['text', '/auth/login']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/auth/register']], [], [], []],
    'app_task_index' => [[], ['_controller' => 'App\\Controller\\TaskController::index'], [], [['text', '/task/']], [], [], []],
    'app_task_new' => [[], ['_controller' => 'App\\Controller\\TaskController::new'], [], [['text', '/task/new']], [], [], []],
    'app_task_show' => [['id'], ['_controller' => 'App\\Controller\\TaskController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/task']], [], [], []],
    'app_task_edit' => [['id'], ['_controller' => 'App\\Controller\\TaskController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/task']], [], [], []],
    'app_task_delete' => [['id'], ['_controller' => 'App\\Controller\\TaskController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/task']], [], [], []],
    'app_task_list_index' => [[], ['_controller' => 'App\\Controller\\TaskListController::index'], [], [['text', '/taskList/']], [], [], []],
    'app_task_list_new' => [[], ['_controller' => 'App\\Controller\\TaskListController::new'], [], [['text', '/taskList/new']], [], [], []],
    'app_task_list_show' => [['id'], ['_controller' => 'App\\Controller\\TaskListController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/taskList']], [], [], []],
    'app_task_list_edit' => [['id'], ['_controller' => 'App\\Controller\\TaskListController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/taskList']], [], [], []],
    'app_task_list_delete' => [['id'], ['_controller' => 'App\\Controller\\TaskListController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/taskList']], [], [], []],
    'app_logout' => [[], [], [], [['text', '/auth/logout']], [], [], []],
];
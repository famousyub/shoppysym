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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin_admin', '_controller' => 'App\\Controller\\Admin\\AdminController::index'], null, null, null, true, false, null]],
        '/admin/category' => [[['_route' => 'category_index', '_controller' => 'App\\Controller\\Admin\\CategoryController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/category/new' => [[['_route' => 'category_new', '_controller' => 'App\\Controller\\Admin\\CategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/comment' => [[['_route' => 'admin_comment_index', '_controller' => 'App\\Controller\\Admin\\CommentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/comment/new' => [[['_route' => 'admin_comment_new', '_controller' => 'App\\Controller\\Admin\\CommentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/image' => [[['_route' => 'admin_image_index', '_controller' => 'App\\Controller\\Admin\\ImageController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/messages' => [[['_route' => 'admin_messages_index', '_controller' => 'App\\Controller\\Admin\\MessagesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/messages/new' => [[['_route' => 'admin_messages_new', '_controller' => 'App\\Controller\\Admin\\MessagesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/product' => [[['_route' => 'admin_product_index', '_controller' => 'App\\Controller\\Admin\\ProductController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/product/new' => [[['_route' => 'admin_product_new', '_controller' => 'App\\Controller\\Admin\\ProductController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/setting' => [[['_route' => 'setting_index', '_controller' => 'App\\Controller\\Admin\\SettingController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/setting/new' => [[['_route' => 'setting_new', '_controller' => 'App\\Controller\\Admin\\SettingController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/user' => [[['_route' => 'admin_user_index', '_controller' => 'App\\Controller\\Admin\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/user/new' => [[['_route' => 'admin_user_new', '_controller' => 'App\\Controller\\Admin\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'home_about', '_controller' => 'App\\Controller\\HomeController::abouts'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'home_contact', '_controller' => 'App\\Controller\\HomeController::contact'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/newuser' => [[['_route' => 'new_user', '_controller' => 'App\\Controller\\HomeController::newuser'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/image' => [[['_route' => 'user_image_index', '_controller' => 'App\\Controller\\ImageController::index'], null, ['GET' => 0], null, true, false, null]],
        '/order/detail' => [[['_route' => 'order_detail_index', '_controller' => 'App\\Controller\\OrderDetailController::index'], null, ['GET' => 0], null, true, false, null]],
        '/order/detail/new' => [[['_route' => 'order_detail_new', '_controller' => 'App\\Controller\\OrderDetailController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/orders' => [[['_route' => 'orders_index', '_controller' => 'App\\Controller\\OrdersController::index'], null, ['GET' => 0], null, true, false, null]],
        '/orders/new' => [[['_route' => 'orders_new', '_controller' => 'App\\Controller\\OrdersController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/product' => [[['_route' => 'user_product_index', '_controller' => 'App\\Controller\\ProductController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/product/new' => [[['_route' => 'user_product_new', '_controller' => 'App\\Controller\\ProductController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/sample' => [[['_route' => 'sample', '_controller' => 'App\\Controller\\SampleController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/loginuser' => [[['_route' => 'login_user', '_controller' => 'App\\Controller\\SecurityController::loginuser'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/shopcart' => [[['_route' => 'shopcart_index', '_controller' => 'App\\Controller\\ShopcartController::index'], null, ['GET' => 0], null, true, false, null]],
        '/shopcart/new' => [[['_route' => 'shopcart_new', '_controller' => 'App\\Controller\\ShopcartController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/comments' => [[['_route' => 'user_comments', '_controller' => 'App\\Controller\\UserController::comments'], null, ['GET' => 0], null, false, false, null]],
        '/user/products' => [[['_route' => 'user_products', '_controller' => 'App\\Controller\\UserController::products'], null, ['GET' => 0], null, false, false, null]],
        '/user/orders' => [[['_route' => 'user_orders', '_controller' => 'App\\Controller\\UserController::orders'], null, ['GET' => 0], null, false, false, null]],
        '/user/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/userpanel' => [[['_route' => 'userpanel', '_controller' => 'App\\Controller\\Userpanel\\UserpanelController::index'], null, null, null, true, false, null]],
        '/userpanel/edit' => [[['_route' => 'userpanel_edit', '_controller' => 'App\\Controller\\Userpanel\\UserpanelController::edit'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/userpanel/show' => [[['_route' => 'userpanel_show', '_controller' => 'App\\Controller\\Userpanel\\UserpanelController::show'], null, ['GET' => 0], null, false, false, null]],
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
                .'|/admin(?'
                    .'|/(?'
                        .'|orders/(?'
                            .'|([^/]++)(*:200)'
                            .'|show/([^/]++)(*:221)'
                        .')'
                        .'|c(?'
                            .'|ategory/([^/]++)(?'
                                .'|(*:253)'
                                .'|/edit(*:266)'
                                .'|(*:274)'
                            .')'
                            .'|omment/([^/]++)(?'
                                .'|(*:301)'
                                .'|/edit(*:314)'
                                .'|(*:322)'
                            .')'
                        .')'
                        .'|image/(?'
                            .'|new/([^/]++)(*:353)'
                            .'|([^/]++)(?'
                                .'|(*:372)'
                                .'|/(?'
                                    .'|edit(*:388)'
                                    .'|([^/]++)(*:404)'
                                .')'
                            .')'
                        .')'
                        .'|messages/([^/]++)(?'
                            .'|(*:435)'
                            .'|/edit(*:448)'
                            .'|(*:456)'
                        .')'
                        .'|product/([^/]++)(?'
                            .'|(*:484)'
                            .'|/edit(*:497)'
                            .'|(*:505)'
                        .')'
                        .'|setting/([^/]++)(?'
                            .'|(*:533)'
                            .'|/edit(*:546)'
                            .'|(*:554)'
                        .')'
                        .'|user/([^/]++)(?'
                            .'|(*:579)'
                            .'|/edit(*:592)'
                            .'|(*:600)'
                        .')'
                    .')'
                    .'|order/([^/]++)/update(*:631)'
                .')'
                .'|/product/([^/]++)(*:657)'
                .'|/user/(?'
                    .'|image/(?'
                        .'|new/([^/]++)(*:695)'
                        .'|([^/]++)(?'
                            .'|(*:714)'
                            .'|/edit(*:727)'
                            .'|(*:735)'
                        .')'
                    .')'
                    .'|product/([^/]++)(?'
                        .'|(*:764)'
                        .'|/edit(*:777)'
                        .'|(*:785)'
                    .')'
                    .'|([^/]++)(?'
                        .'|(*:805)'
                        .'|/edit(*:818)'
                        .'|(*:826)'
                    .')'
                    .'|newcomment/([^/]++)(*:854)'
                .')'
                .'|/order(?'
                    .'|/detail/([^/]++)(?'
                        .'|(*:891)'
                        .'|/edit(*:904)'
                        .'|(*:912)'
                    .')'
                    .'|s/([^/]++)(?'
                        .'|(*:934)'
                        .'|/edit(*:947)'
                        .'|(*:955)'
                    .')'
                .')'
                .'|/shopcart/([^/]++)(?'
                    .'|(*:986)'
                    .'|/(?'
                        .'|edit(*:1002)'
                        .'|del(*:1014)'
                    .')'
                    .'|(*:1024)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        200 => [[['_route' => 'admin_orders_index', '_controller' => 'App\\Controller\\Admin\\AdminController::orders'], ['slug'], null, null, false, true, null]],
        221 => [[['_route' => 'admin_orders_show', '_controller' => 'App\\Controller\\Admin\\AdminController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        253 => [[['_route' => 'category_show', '_controller' => 'App\\Controller\\Admin\\CategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        266 => [[['_route' => 'category_edit', '_controller' => 'App\\Controller\\Admin\\CategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        274 => [[['_route' => 'category_delete', '_controller' => 'App\\Controller\\Admin\\CategoryController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        301 => [[['_route' => 'admin_comment_show', '_controller' => 'App\\Controller\\Admin\\CommentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        314 => [[['_route' => 'admin_comment_edit', '_controller' => 'App\\Controller\\Admin\\CommentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        322 => [[['_route' => 'admin_comment_delete', '_controller' => 'App\\Controller\\Admin\\CommentController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        353 => [[['_route' => 'admin_image_new', '_controller' => 'App\\Controller\\Admin\\ImageController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        372 => [[['_route' => 'admin_image_show', '_controller' => 'App\\Controller\\Admin\\ImageController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        388 => [[['_route' => 'admin_image_edit', '_controller' => 'App\\Controller\\Admin\\ImageController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        404 => [[['_route' => 'admin_image_delete', '_controller' => 'App\\Controller\\Admin\\ImageController::delete'], ['id', 'pid'], ['DELETE' => 0], null, false, true, null]],
        435 => [[['_route' => 'admin_messages_show', '_controller' => 'App\\Controller\\Admin\\MessagesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        448 => [[['_route' => 'admin_messages_edit', '_controller' => 'App\\Controller\\Admin\\MessagesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        456 => [[['_route' => 'admin_messages_delete', '_controller' => 'App\\Controller\\Admin\\MessagesController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        484 => [[['_route' => 'admin_product_show', '_controller' => 'App\\Controller\\Admin\\ProductController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        497 => [[['_route' => 'admin_product_edit', '_controller' => 'App\\Controller\\Admin\\ProductController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        505 => [[['_route' => 'admin_product_delete', '_controller' => 'App\\Controller\\Admin\\ProductController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        533 => [[['_route' => 'setting_show', '_controller' => 'App\\Controller\\Admin\\SettingController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        546 => [[['_route' => 'setting_edit', '_controller' => 'App\\Controller\\Admin\\SettingController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        554 => [[['_route' => 'setting_delete', '_controller' => 'App\\Controller\\Admin\\SettingController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        579 => [[['_route' => 'admin_user_show', '_controller' => 'App\\Controller\\Admin\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        592 => [[['_route' => 'admin_user_edit', '_controller' => 'App\\Controller\\Admin\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        600 => [[['_route' => 'admin_user_delete', '_controller' => 'App\\Controller\\Admin\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        631 => [[['_route' => 'admin_orders_update', '_controller' => 'App\\Controller\\Admin\\AdminController::order_update'], ['id'], ['POST' => 0], null, false, false, null]],
        657 => [[['_route' => 'product_show', '_controller' => 'App\\Controller\\HomeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        695 => [[['_route' => 'user_image_new', '_controller' => 'App\\Controller\\ImageController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        714 => [[['_route' => 'user_image_show', '_controller' => 'App\\Controller\\ImageController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        727 => [[['_route' => 'user_image_edit', '_controller' => 'App\\Controller\\ImageController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        735 => [[['_route' => 'user_image_delete', '_controller' => 'App\\Controller\\ImageController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        764 => [[['_route' => 'user_product_show', '_controller' => 'App\\Controller\\ProductController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        777 => [[['_route' => 'user_product_edit', '_controller' => 'App\\Controller\\ProductController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        785 => [[['_route' => 'user_product_delete', '_controller' => 'App\\Controller\\ProductController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        805 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        818 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        826 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        854 => [[['_route' => 'user_new_comment', '_controller' => 'App\\Controller\\UserController::newcomment'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        891 => [[['_route' => 'order_detail_show', '_controller' => 'App\\Controller\\OrderDetailController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        904 => [[['_route' => 'order_detail_edit', '_controller' => 'App\\Controller\\OrderDetailController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        912 => [[['_route' => 'order_detail_delete', '_controller' => 'App\\Controller\\OrderDetailController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        934 => [[['_route' => 'orders_show', '_controller' => 'App\\Controller\\OrdersController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        947 => [[['_route' => 'orders_edit', '_controller' => 'App\\Controller\\OrdersController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        955 => [[['_route' => 'orders_delete', '_controller' => 'App\\Controller\\OrdersController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        986 => [[['_route' => 'shopcart_show', '_controller' => 'App\\Controller\\ShopcartController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1002 => [[['_route' => 'shopcart_edit', '_controller' => 'App\\Controller\\ShopcartController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1014 => [[['_route' => 'shopcart_del', '_controller' => 'App\\Controller\\ShopcartController::del'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1024 => [
            [['_route' => 'shopcart_delete', '_controller' => 'App\\Controller\\ShopcartController::delete'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

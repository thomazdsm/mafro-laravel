<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | Here you can change the default title of your admin panel.
    |
    | For detailed instructions you can look the title section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'title' => 'MAfroEduc',
    'title_prefix' => '',
    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Favicon
    |--------------------------------------------------------------------------
    |
    | Here you can activate the favicon.
    |
    | For detailed instructions you can look the favicon section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_ico_only' => true,
    'use_full_favicon' => false,

    /*
    |--------------------------------------------------------------------------
    | Google Fonts
    |--------------------------------------------------------------------------
    |
    | Here you can allow or not the use of external google fonts. Disabling the
    | google fonts may be useful if your admin panel internet access is
    | restricted somehow.
    |
    | For detailed instructions you can look the google fonts section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'google_fonts' => [
        'allowed' => true,
    ],

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    | For detailed instructions you can look the logo section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'logo' => '<b>MAfro</b>Educ',
    'logo_img' => 'blog/img/mafro_logo_branco.png',
    'logo_img_class' => 'brand-image img-circle elevation-3',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'MAfroEduc Logo',

    /*
    |--------------------------------------------------------------------------
    | Authentication Logo
    |--------------------------------------------------------------------------
    |
    | Here you can setup an alternative logo to use on your login and register
    | screens. When disabled, the admin panel logo will be used instead.
    |
    | For detailed instructions you can look the auth logo section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'auth_logo' => [
        'enabled' => false,
        'img' => [
            'path' => 'blog/img/mafro_logo.png',
            'alt' => 'Auth Logo',
            'class' => '',
            'width' => 50,
            'height' => 50,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Preloader Animation
    |--------------------------------------------------------------------------
    |
    | Here you can change the preloader animation configuration.
    |
    | For detailed instructions you can look the preloader section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'preloader' => [
        'enabled' => true,
        'img' => [
            'path' => 'blog/img/mafro_logo.png',
            'alt' => 'MAfroEduc Preloader Image',
            'effect' => 'animation__shake',
            'width' => 60,
            'height' => 60,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Menu
    |--------------------------------------------------------------------------
    |
    | Here you can activate and change the user menu.
    |
    | For detailed instructions you can look the user menu section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'usermenu_enabled' => true,
    'usermenu_header' => false,
    'usermenu_header_class' => 'bg-primary',
    'usermenu_image' => false,
    'usermenu_desc' => false,
    'usermenu_profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Here we change the layout of your admin panel.
    |
    | For detailed instructions you can look the layout section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => null,
    'layout_fixed_navbar' => null,
    'layout_fixed_footer' => null,
    'layout_dark_mode' => null,

    /*
    |--------------------------------------------------------------------------
    | Authentication Views Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the authentication views.
    |
    | For detailed instructions you can look the auth classes section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_auth_card' => 'card-outline card-primary',
    'classes_auth_header' => '',
    'classes_auth_body' => '',
    'classes_auth_footer' => '',
    'classes_auth_icon' => '',
    'classes_auth_btn' => 'btn-flat btn-primary',

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For detailed instructions you can look the admin panel classes here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_body' => '',
    'classes_brand' => '',
    'classes_brand_text' => '',
    'classes_content_wrapper' => '',
    'classes_content_header' => '',
    'classes_content' => '',
    'classes_sidebar' => 'sidebar-dark-danger elevation-4',
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-white navbar-light',
    'classes_topnav_nav' => 'navbar-expand',
    'classes_topnav_container' => 'container',

    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar of the admin panel.
    |
    | For detailed instructions you can look the sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'sidebar_mini' => 'lg',
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => false,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 300,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we can modify the right sidebar aka control sidebar of the admin panel.
    |
    | For detailed instructions you can look the right sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'right_sidebar' => false,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'dark',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => true,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For detailed instructions you can look the urls section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_route_url' => false,
    'dashboard_url' => '/',
    'logout_url' => 'logout',
    'login_url' => 'login',
    'register_url' => 'register',
    'password_reset_url' => 'password/reset',
    'password_email_url' => 'password/email',
    'profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Laravel Mix
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Laravel Mix option for the admin panel.
    |
    | For detailed instructions you can look the laravel mix section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'enabled_laravel_mix' => false,
    'laravel_mix_css_path' => 'css/app.css',
    'laravel_mix_js_path' => 'js/app.js',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'menu' => [
        // Navbar items:
        [
            'type'         => 'fullscreen-widget',
            'topnav_right' => true,
        ],

        // Sidebar items:
        [
            'type' => 'sidebar-menu-search',
            'text' => 'Pesquisar',
        ],
        [
            'text'        => 'Dashboard',
            'can'         => ['admin', 'professor', 'aluno', 'visitante'],
            'url'         => 'admin',
            'icon'        => 'fas fa-tachometer-alt',
            'label_color' => 'success',
        ],
        ['header' => 'CONFIGURAÇÕES DE USUÁRIO'],
        [
            'text' => 'Meu Perfil',
            'can'  => ['admin', 'professor', 'aluno', 'visitante'],
            'route'  => 'users.profile',
            'icon' => 'fas fa-fw fa-user',
        ],
        [
            'text' => 'Lista de Usuários',
            'can'  => ['admin'],
            'route'  => 'users.index',
            'icon' => 'fas fa-users-cog',
        ],
        [
            'header' => 'CONFIGURAÇÕES DO BLOG',
            'can'    => ['admin']
        ],
        [
            'text' => 'Informações Básicas',
            'can'  => ['admin'],
            'url'  => 'admin/blog',
            'icon' => 'fas fa-fw fa-info',
        ],
        [
            'text'    => 'Observatório',
            'can'     => ['admin'],
            'icon'    => 'fas fa-microscope',
            'submenu' => [
                [
                    'text' => 'Criar Post',
                    'can'  => ['admin'],
                    'url'  => 'admin/posts/create',
                ],
                [
                    'text' => 'Lista de Posts',
                    'can'  => ['admin'],
                    'url'  => 'admin/posts',
                ],
            ],
        ],
        [
            'text'    => 'Biblioteca',
            'can'     => ['admin'],
            'icon'    => 'fas fa-book',
            'submenu' => [
                [
                    'text' => 'Adicionar Livro',
                    'can'  => ['admin'],
                    'url'  => 'admin/biblioteca/create',
                ],
                [
                    'text' => 'Lista de Livros',
                    'can'  => ['admin'],
                    'url'  => 'admin/biblioteca',
                ],
                [
                    'text' => 'Adicionar Categoria',
                    'can'  => ['admin'],
                    'url'  => 'admin/categorias/create',
                ],
                [
                    'text' => 'Lista de Categorias',
                    'can'  => ['admin'],
                    'url'  => 'admin/categorias',
                ],
            ],
        ],
        [
            'text'    => 'Contato',
            'can'     => ['admin'],
            'icon'    => 'fas fa-phone',
            'submenu' => [
                [
                    'text'   => 'Visualizar Contato',
                    'can'    => ['admin'],
                    'route'  => 'contato.index',
                ],
                [
                    'text'   => 'Adicionar Contato',
                    'can'    => ['admin'],
                    'route'  => 'contato.create',
                ],
            ],
        ],
        [
            'header' => 'CONFIGURAÇÕES DOS EVENTOS',
            'can'    => ['admin', 'professor', 'aluno', 'visitante'],
        ],
        [
            'text'    => 'Eventos',
            'can'     => ['admin'],
            'icon'    => 'fas fa-calendar-check',
            'submenu' => [
                [
                    'text' => 'Criar',
                    'can'  => ['admin'],
                    'route'  => 'evento.create',
                ],
                [
                    'text' => 'Listar',
                    'can'  => ['admin'],
                    'route'  => 'evento.index',
                ],
                [
                    'text' => 'Vínculos',
                    'can'  => ['admin'],
                    'url'  => '#',
                ],
            ],
        ],
        [
            'text'    => 'Tipos de Evento',
            'can'     => ['admin'],
            'icon'    => 'fas fa-cog',
            'submenu' => [
                [
                    'text' => 'Criar',
                    'can'  => ['admin'],
                    'route'  => 'tipo_evento.create',
                ],
                [
                    'text' => 'Listar',
                    'can'  => ['admin'],
                    'route'  => 'tipo_evento.index',
                ]
            ],
        ],
        [
            'text'    => 'Certificados',
            'can'     => ['admin', 'professor', 'aluno'],
            'icon'    => 'fas fa-award',
            'submenu' => [
                [
                    'text' => 'Criar',
                    'can'  => ['admin'],
                    'route'  => 'certificado.create',
                ],
                [
                    'text' => 'Listar',
                    'can'  => ['admin'],
                    'route'  => 'certificado.index',
                ],
                [
                    'text' => 'Autorizar',
                    'can'  => ['admin', 'professor'],
                    'url'  => '#',
                ],
                [
                    'text' => 'Emitir',
                    'can'  => ['admin', 'professor', 'aluno'],
                    'url'  => '#',
                ],
            ],
        ],
        [
            'text'    => 'Transmissão',
            'can'     => ['admin'],
            'icon'    => 'fas fa-microphone',
            'submenu' => [
                [
                    'text' => 'Criar',
                    'can'  => ['admin'],
                    'route'  => 'transmissao.create',
                ],
                [
                    'text' => 'Listar',
                    'can'  => ['admin'],
                    'route'  => 'transmissao.index',
                ]
            ],
        ],
        [
            'text'    => 'Tipos de Transmissão',
            'can'     => ['admin'],
            'icon'    => 'fas fa-cog',
            'submenu' => [
                [
                    'text' => 'Criar',
                    'can'  => ['admin'],
                    'route'  => 'tipo_transmissao.create',
                ],
                [
                    'text' => 'Listar',
                    'can'  => ['admin'],
                    'route'  => 'tipo_transmissao.index',
                ]
            ],
        ],
        [
            'text' => 'Material de Leitura',
            'can'  => ['admin', 'professor', 'aluno', 'visitante'],
            'url'  => '#',
            'icon' => 'fas fa-list-ol',
        ],
        [
            'header' => 'ACESSO RÁPIDO',
            'can'    => ['admin', 'professor', 'aluno', 'visitante'],
        ],
        [
            'text'       => 'Blog',
            'can'        => ['admin', 'professor', 'aluno', 'visitante'],
            'icon_color' => 'red',
            'route'      => 'blog.home',
        ],
        [
            'text'       => 'Eventos',
            'can'        => ['admin', 'professor', 'aluno', 'visitante'],
            'icon_color' => 'yellow',
            'route'      => 'evento.home',
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For detailed instructions you can look the menu filters section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For detailed instructions you can look the plugins section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Plugins-Configuration
    |
    */

    'plugins' => [
        'Datatables' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
                ],
            ],
        ],
        'Chartjs' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        'Sweetalert2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
                ],
            ],
        ],
        'Pace' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
        'bs-custom-file-input' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/bs-custom-file-input/bs-custom-file-input.js',
                ],
            ],
        ],
        'toastr' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => 'vendor/toastr/toastr.css',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/toastr/toastr.min.js',
                ],
            ],
        ],
        'select2' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => 'vendor/select2/css/select2.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/select2/js/select2.full.js',
                ],
            ],
        ],
        'select2-bootstrap4' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => 'vendor/select2-bootstrap4-theme/select2-bootstrap4.min.css',
                ],
            ],
        ],
        'inputmask' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => true,
                    'location' => 'vendor/inputmask/jquery.inputmask.js',
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | IFrame
    |--------------------------------------------------------------------------
    |
    | Here we change the IFrame mode configuration. Note these changes will
    | only apply to the view that extends and enable the IFrame mode.
    |
    | For detailed instructions you can look the iframe mode section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/IFrame-Mode-Configuration
    |
    */

    'iframe' => [
        'default_tab' => [
            'url' => null,
            'title' => null,
        ],
        'buttons' => [
            'close' => true,
            'close_all' => true,
            'close_all_other' => true,
            'scroll_left' => true,
            'scroll_right' => true,
            'fullscreen' => true,
        ],
        'options' => [
            'loading_screen' => 1000,
            'auto_show_new_tab' => true,
            'use_navbar_items' => true,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Livewire
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Livewire support.
    |
    | For detailed instructions you can look the livewire here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'livewire' => false,
];

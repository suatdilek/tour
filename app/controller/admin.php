<?php

if (!isset($route[1])){
    $route[1] = 'index';
}

if (!file_exists(admin_controller(route(1)))){
    $route[1] = 'index';
}

if (!session('user_rank') || session('user_rank') == 3){
    $route[1] = 'login';
}

$menus = array (
    'index' => array (
        'title' => 'Anasayfa',
        'icon' => 'gi gi-home',
        'permissions' => [
            'show' => 'Görüntüleme'
        ]
    ),
    'users' => array (
        'title' => 'Üyeler',
        'icon' => 'gi gi-user',
        'permissions' => [
            'show' => 'Görüntüleme',
            'edit' => 'Düzenleme',
            'delete' => 'Silme'
        ]
/*        'submenu' => array (
            'add-user' => 'Üye Ekle',
            'users' => 'Üyeleri Liste'
        )*/
    ),
    'contact' => [
        'title' => 'İletişim Mesajları',
        'icon' => 'fa fa-envelope',
        'permissions' => [
            'show' => 'Görüntüleme',
            'send' => 'Gönderme',
            'edit' => 'Düzenleme',
            'delete' => 'Silme'
        ]
    ],
    'posts' => [
        'title' => 'Konular',
        'icon' => 'fa fa-rss',
        'permissions' => [
            'show' => 'Görüntüleme',
            'add' => 'Ekleme',
            'edit' => 'Düzenleme',
            'delete' => 'Silme'
        ]
    ],
    'tags' => [
        'title' => 'Etiketler',
        'icon' => 'fa fa-tag',
        'permissions' => [
            'show' => 'Görüntüleme',
            'add' => 'Ekleme',
            'edit' => 'Düzenleme',
            'delete' => 'Silme'
        ]
    ],
    'categories' => [
        'title' => 'Kategoriler',
        'icon' => 'fa fa-folder',
        'permissions' => [
            'show' => 'Görüntüleme',
            'add' => 'Ekleme',
            'edit' => 'Düzenleme',
            'delete' => 'Silme'
        ]
    ],
    'comments' => [
        'title' => 'Yorumlar',
        'icon' => 'fa fa-comments',
        'permissions' => [
            'show' => 'Görüntüleme',
            'edit' => 'Düzenleme',
            'delete' => 'Silme'
        ]
    ],
    'pages' => [
        'title' => 'Sayfalar',
        'icon' => 'fa fa-file',
        'permissions' => [
            'show' => 'Görüntüleme',
            'add' => 'Ekleme',
            'edit' => 'Düzenleme',
            'delete' => 'Silme'
        ]
    ],
    'menu' => array (
        'title' => 'Menü Yönetimi',
        'icon' => 'fa fa-bars',
        'permissions' => [
            'show' => 'Görüntüleme',
            'add' => 'Ekleme',
            'edit' => 'Düzenleme',
            'delete' => 'Silme'
        ]
    ),
    'settings' => array (
        'title' => 'Ayarlar',
        'icon' => 'gi gi-settings',
        'permissions' => [
            'show' => 'Görüntüleme',
            'edit' => 'Düzenleme'
        ]
    ),
    'logout' => array (
        'title' => 'Çıkış',
        'icon' => 'gi gi-exit',
        'permissions' => [
            'show' => 'Görüntüleme'
        ]
    )
);

require admin_controller(route(1));

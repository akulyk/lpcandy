<?

$config = array(
    'invites_enabled' => false,
    'domain' => [
        'ru_RU' =>'lpcandy.ru',
        'en_EN' =>'en.lpcandy.ru',
    ],
    'acl' => [
        'project_editor_group' => [
            'users' => [1,11],
            'res' => ['project_editor']
        ]
    ],
    'smtp' => [
        'host' => 'localhost',
        'port' => '25',
        'username' => '',
        'password' => ''
    ]
);
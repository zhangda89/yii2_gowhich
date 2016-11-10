<?php

return [
    ''                        => 'site/index',
    'admin'                   => 'admin/site/login',
    'admin/logout'            => 'admin/site/logout',

    'blog'                    => 'site/index',
    'blog/<id:\d+>'           => 'site/view',
    'blog/view/id/<id:\d+>'   => 'site/view',
    'blog/view'               => 'site/view',
    'blog/<id:.*?>'           => 'site/view',
    'category'                => 'category/index',
    'category/<category:.*?>' => 'category/view',
    'tag'                     => 'tag/view',
    'tag/<tag:.*?>'           => 'tag/index',
    'search/'                 => 'search/index',
    'type/search/<id:\d+>'    => 'search/index',
    'author/<author:.*?>'     => 'author/index',
    'author'                  => 'author/view',
];

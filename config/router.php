<?php

return [
    ''                                => 'site/index',
    'admin'                           => 'admin/site/login',
    'admin/logout'                    => 'admin/site/logout',

    'blog'                            => 'site/index',
    'blog/<id:\d+>'                   => 'blog/view',
    'blog/view/id/<id:\d+>'           => 'blog/view',
    'blog/view'                       => 'blog/view',
    'blog/<id:.*?>'                   => 'blog/view',
    'category'                        => 'category/index',
    'category/<category:.*?>'         => 'category/view',
    'tag'                             => 'tag/index',
    'tag/<tag:.*?>'                   => 'tag/view',
    'search/'                         => 'search/index',
    'type/search/<id:\d+>'            => 'search/index',
    'author/<author:.*?>'             => 'author/view',
    'author'                          => 'author/index',
    'archives/<year:.*?>/<month:.*?>' => 'archives/view',
    'archives/<year:.*?>'             => 'archives/view',
    'archives'                        => 'archives/index',

    'feed/'                           => 'site/feed',
    'sitemap.xml/'                    => 'sitemap/index',
    'sitemap.xsl/'                    => 'sitemap/xsl',

    'video/'                          => 'site/video',
    'resource/'                       => 'site/resource',
    'about/'                          => 'site/about',
    'social/'                         => 'site/social',

    '/<t:.*?>'                        => 'site/index',
];

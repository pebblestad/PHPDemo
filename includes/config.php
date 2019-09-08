<?php

/**
 * Used to store website configuration information.
 *
 * @var string or null
 */
function config($key = '')
{
    $config = [
        'name' => 'Johnathan Stadtmueller',
        'pretty_uri' => false,
        'site_url' => 'https://assignmentonejohnathan.herokuapp.com',
        'nav_menu' => [
            '' => 'Home',
            'about-me' => 'About Me',
            'bonnaroo' => 'Bonnaroo'
        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'version' => 'v4.1',
    ];
    return isset($config[$key]) ? $config[$key] : null;
}

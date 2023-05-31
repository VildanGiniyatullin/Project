<?php

declare(strict_types=1);

$uriParts = parse_url($_SERVER["REQUEST_URI"]);

switch ($uriParts['path'] ?? '') {
    case '':
    case '/':
        require_once __DIR__ . DIRECTORY_SEPARATOR . 'main.php';
        break;
    case '/diphthongs.html':
        require_once __DIR__.DIRECTORY_SEPARATOR . 'diphthongs.html';
        break;
    case '/index.html':
        require_once __DIR__.DIRECTORY_SEPARATOR . 'index.html';
        break;
    case '/consonants.html':
        require_once __DIR__.DIRECTORY_SEPARATOR . 'consonants.html';
        break;
    case '/alfavit.html':
        require_once __DIR__.DIRECTORY_SEPARATOR . 'alfavit.php';
        break;
    case '/sounds.html':
        require_once __DIR__.DIRECTORY_SEPARATOR . 'sounds.html';
        break;
    case '/vowels.html':
        require_once __DIR__.DIRECTORY_SEPARATOR . 'vowels.html';
        break;
    default:
        http_response_code(404);
        require_once __DIR__.DIRECTORY_SEPARATOR . '404.php';
}
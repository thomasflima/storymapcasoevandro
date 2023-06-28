<?php

// Endereço do Site
if ($_SERVER["HTTP_HOST"] == 'localhost') {
    define('WEB_HOST', 'http://' . $_SERVER["HTTP_HOST"] . '/thomas');
} else {
    if ($_SERVER["REQUEST_SCHEME"] == 'https') {
        define('WEB_HOST', 'https://thomasflima.com');
    } else {
        define('WEB_HOST', 'http://thomasflima.com');
    }
}

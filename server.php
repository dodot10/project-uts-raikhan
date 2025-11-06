<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?? ''
);

// This file allows us to emulate Apache's "mod_rewrite" functionality from the
// built-in PHP web server. This provides a convenient way to test a Laravel
// application without having installed a "real" web server software here.

// If the request is for a file that exists in the public directory,
// serve it directly (for CSS, JS, images, fonts, etc.)
if ($uri !== '/' && file_exists(__DIR__.'/public'.$uri)) {
    return false;
}

// Otherwise, pass the request to Laravel's front controller
require_once __DIR__.'/public/index.php';
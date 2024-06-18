<?php
$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$url = isset($requestUri) ? $requestUri : '/';
$routes = [
    '/' => 'home.php',
    '/terms-and-conditions' => 'terms.php',
    '/privacy-policy'=>'privacy.php',
    '/about'=>'about.php',
    '/features'=>'features.php',
    '/pricing'=>'pricing.php',
    '/testimonials'=>'testimonials.php',
    '/acceptable-use'=>'acceptable-use.php',
    '/cookie-policy'=>'cookie-policy.php',
    '/accessibility'=>'accessibility.php'
];

if (array_key_exists($url, $routes)) {
    $targetPage = $routes[$url];
    include './views/pages/' . $targetPage;
    // if (!isset($_SESSION['payment_success']) || $_SESSION['payment_success'] !== true) {
    //     header('Location: /pricing');
    //     exit;
    // }
} else {
        include './views/pages/404.php';
}



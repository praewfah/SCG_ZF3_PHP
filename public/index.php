<?php
try
{  
    set_time_limit(1800);
    
    error_reporting(E_ALL|E_STRICT);
    ini_set('display_errors', '1');
    ini_set('memory_limit', '-1');
    
    date_default_timezone_set('Asia/Bangkok');
    mb_internal_encoding("UTF-8");
    
    header("Content-Type: text/html; charset=utf-8");
    header("cache-control: must-revalidate");
    $offset = 60 * 60;
    $expire = "expires: " . gmdate("D, d M Y H:i:s", time() + $offset) . " GMT";
    header($expire);
    header('Vary: Accept-Encoding');
    header("Access-Control-Allow-Origin: *");
    
    define('CONFIG_PATH', dirname(__FILE__) . '/../module/Application/config/');
    
    /**
     * This makes our life easier when dealing with paths. Everything is relative
     * to the application root now.
     */
    chdir(dirname(__DIR__));
    // Decline static file requests back to the PHP built-in webserver
    if (php_sapi_name() === 'cli-server' && is_file(__DIR__ . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH))) {
        return false;
    }
    
    // Setup autoloading
    require_once dirname(__FILE__) . '/../init_autoloader.php';
    
    // Run the application!
    Zend\Mvc\Application::init(require_once dirname(__FILE__) . '/../config/application.config.php')->run();
}
catch (\Exception $e)
{
    print_r($e);
}
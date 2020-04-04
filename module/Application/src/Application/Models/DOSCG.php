<?php
namespace Application\Models;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Db\Adapter\Adapter;
use Zend\Db\ResultSet\ResultSet;
use Zend\Cache\StorageFactory;
use Zend\Cache\Storage\Adapter\Memcached;
use Zend\Cache\Storage\StorageInterface;
 
class DOSCG
{ 
    public static function todo_api() 
    {
        return array(
            'model' => "Create a new controller and Model called \"DOSCG\"",
            'xyz'   => "X, Y, 5, 9, 15, 23, Z - Please create a new function for finding X, Y, Z value",
            'bc'    => "If A=21, A+B=23, A+C=-21 - Please create a new function for finding B and C value",
            'google'=> "Please use \"Google API\" for finding the best way to go to Central World from SCG Bangsue",
            'line'  => "Please create a small project using Line messaging API for getting "
            . "a notification when your Line Bot can not answer a question to the customer more than 10 second"
        );
    }
    
    public static function todo_web() 
    {
        return array(
            "Create a new router called \"DOSCG\"",
            "Please use Bootstrap V4 for CSS",
            "Please create Top bar, body, and footer for every page components",
            "Please create a new page for showing results from your API (separate router by each API)",
            "One simple static page for your CV"
        );
    }
    
    public static function fileGetContents($filename, $use_include_path=false)
    {
        $timeout= 1800;
        $stream_context = stream_context_create(array(
            'http' => array(
                'method' => 'GET',
                'timeout' => $timeout,
                'header' => 'User-Agent: Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.10 (KHTML, like Gecko) Chrome/8.0.552.28 Safari/534.10'."\r\n",
            ),
        ));
        
        $return = file_get_contents($filename, $use_include_path, $stream_context);
        
        return trim($return);
    }
}
    
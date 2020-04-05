<?php
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Db\Adapter\Adapter;
use Zend\Db\ResultSet\ResultSet;
use Application\Models\DOSCG;
use Zend\Json\Json;
use Zend\View\Model\JsonModel;

use Zend\Cache\StorageFactory;
use Zend\Cache\Storage\Adapter\Memcached;
use Zend\Cache\Storage\StorageInterface;
use Zend\Cache\Storage\AvailableSpaceCapableInterface;
use Zend\Cache\Storage\FlushableInterface;
use Zend\Cache\Storage\TotalSpaceCapableInterface;

class DOSCGController extends AbstractActionController
{
    public function __construct()
    {
        $this->cacheTime = 36000;
        $this->now = date("Y-m-d H:i:s");
        $this->config = include __DIR__ . '../../../../config/module.config.php';
    }

    public function basic()
    {
        $view = new ViewModel();
        $view->action = $this->params()->fromRoute('action', 'index');
        $view->id = $this->params()->fromRoute('id', '');
        $view->todo_api = DOSCG::todo_api();
        $view->todo_web = DOSCG::todo_web();
        return $view;       
    } 
    
    public function indexAction() 
    {
        try
        {
            $view = $this->basic();
            return $view;
        }
        catch( Exception $e )
        {
            print_r($e);
        }
    }

    public function apiAction() 
    {
        try
        {
            $view = $this->basic();
            switch ($view->id) {
                case 'xyz':
                    $view->data = $this->find_xyz();
                    break;
                case 'bc':
                    $view->data = $this->find_ac();
                    break;
                default :
                    $view->data = ($view->id);
            }
            
            return $view;
        }
        catch( Exception $e )
        {
            print_r($e);
        }
    }
    
    public function googleAction() 
    {
        try
        {
            $key = 'AIzaSyDjoHelMpE5RdVWUPQyDNknQpyxRQGBQpg';
            $view = $this->basic();
            
            $act = $this->params()->fromRoute('act', '');
            if ($act) {
                $mode = $avoid = null;
                
                $q = $this->params()->fromQuery();
                $from = trim(rawurlencode($q['from']));
                $to = trim(rawurlencode($q['to']));
                
                if (isset($q['mode']) && $q['mode']) 
                    $mode = '&mode='.trim(rawurlencode($q['mode']));;
                if (isset($q['avoid']) && $q['avoid']) 
                    $avoid = '&avoid=tolls|highways|ferries';
                
                echo 'https://www.google.com/maps/embed/v1/directions?key='
                    .$key.'&origin='.$from.'&destination='.$to.$mode.$avoid;
                die();
            } else {
                $from = rawurlencode("SCG+บางซื้อ");
                $to = rawurlencode("เซ็นทรัลเวิลด์");
                $src = 'https://www.google.com/maps/embed/v1/directions?key='.$key.'&origin='.$from.'&destination='.$to;
            }
            
            $view->data = $src;
            return $view;
        }
        catch( Exception $e )
        {
            print_r($e);
        }
    }
    
    public function lineAction() 
    {
        try
        {
            $view = $this->basic();
            $view->data = 'lineAction';
            
            return $view;
        }
        catch( Exception $e )
        {
            print_r($e);
        }
    }
    
    public function cvAction() 
    {
        try
        {
            $view = $this->basic();
            $view->data = 'My CV';
            
            return $view;
        }
        catch( Exception $e )
        {
            print_r($e);
        }
    }
    
    public function find_ac() 
    {
        ob_start();
        $a = 21;
        $b = null;
        $c = null;
        
        $ab = 23;       // A+B = 23
        $ac = -21;      // A+C = -21
        $b = ($ab-$a);  // B = 23 - 21
        $c = ($ac-$a);  // C = -21 - 21
        
        echo "B = " . $b ;
        echo "<br/>C = " . $c ;
        
        echo "<pre style=\"background-color: #f3f3f3; padding: 1em\"><small>"
        . show_source(__DIR__ . '/../View/Sources/bc.php', 1) . ""
        . "Output<br/>Return : " . implode( ", ", array($b, $c))."</small></pre>";
        
        return ob_get_clean();
    }
    
    public function find_xyz() 
    {
        ob_start();
        $array = ['X', 'Y', 5, 9, 15, 23, 'Z'];
         
        foreach ($array as $key => $arr) {
            if (is_numeric($arr)) { 
                if (isset($array[($key-1)]) && is_string($array[($key-1)])) { 
                    echo $array[($key-1)];
                    $array[($key-1)] = $arr-(2*($key-1));
                    echo ' = ' . $array[($key-1)]."<br/>";
                } 
            } else {
                echo $arr;
                if (is_string($array[$key]) && isset($array[($key+1)]) && is_numeric($array[($key+1)])) {  
                    $array[$key] = $array[($key+1)]-(2*$key);
                } elseif (is_string($array[$key]) && isset($array[($key-1)]) && is_numeric($array[($key-1)])) {
                    $array[$key] = $array[($key-1)]+(2*($key-1));
                } elseif (is_string($array[$key])) { // It's a nigntmare
                    $array[$key] = $array[($key+2)]+(2*($key-1));
                }
                echo ' = ' . $array[$key]."<br/>";
            }
        }
        
        echo "<pre style=\"background-color: #f3f3f3; padding: 1em\"><small>"
        . show_source(__DIR__ . '/../View/Sources/xyz.php', 1) . ""
        . "Output<br/>Series number : " . implode(", ", $array)."</small></pre>";
        return ob_get_clean();
    }
    
    function send_reply_message($url, $post_header, $post_body)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $post_header);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_body);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        $result = curl_exec($ch);
        curl_close($ch);

        return $result;
    }
}
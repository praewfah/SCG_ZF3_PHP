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
        $API_URL = 'https://api.line.me/v2/bot/message';
        $ACCESS_TOKEN = 'ImA/O8DANkia3D92DOiVmgGSTJFm7eS8lBOYvvAtbWwDLtA+MldskioK35tHe/8zON9C2nY4mQGoyMA7TBho/UVEty89wzFUg/kRP07JOoBurzugod8HQrP7RyLCiOYo+IxS3U8t8z6slSgt1PRBSwdB04t89/1O/w1cDnyilFU='; 
        //$channelSecret = '6a10fdc099372a28cad25444df6affc1';

        $POST_HEADER = array('Content-Type: application/json', 'Authorization: Bearer ' . $ACCESS_TOKEN);

        $request = file_get_contents('php://input');   // Get request content
        $request_array = json_decode($request, true);   // Decode JSON to Array

        if ((is_array($request_array['events']) || is_object($request_array['events'])) 
                && sizeof($request_array['events']) > 0 ) {

            foreach ($request_array['events'] as $event) {

                $reply_message = '';
                $reply_token = $event['replyToken'];


                $data = [
                    'replyToken' => $reply_token,
                    'messages' => [['type' => 'text', 'text' => json_encode($request_array)]]
                ];
                $post_body = json_encode($data, JSON_UNESCAPED_UNICODE);

                $send_result = send_reply_message($API_URL.'/reply', $POST_HEADER, $post_body);

                echo "Result: ".$send_result."\r\n";

            }
        }

        echo "OK";
        die();
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
        $ab = 23;
        $ac = -21;
        
        echo "B = " . $b = ($ab+-$a) ;
        echo "<br/>C = " . $c = ($ac+-$a) ;
        
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
                    echo ' = ' . $array[($key-1)].", ";
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
                echo ' = ' . $array[$key].", ";
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
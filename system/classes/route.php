<?php 
use system\library\error as err;
class  route
{

    private $controller = 'welcome';
    private $method = 'index';
    private $params = array();
    public $error;

    public function __construct()
    { 
        $this->error = new err\err(); 
        $url = $this->url(); 
        if(!empty($url))
        { 
            if(file_exists('../application/controllers/'.$url[0].'.php'))
            {
                $this->controller = $url[0];
                
                unset($url[0]);
            }
            else
            {
               $this->error->show("Controller ".$url[0]." not found") ;    
            }
        }
        else
        { 
            if(file_exists('../application/controllers/'.$this->controller.'.php'))
            {
              $this->controller;
            }
            else
            { 
                $this->error->show("Controller ".$url[0]." not found") ;      
            } 
        }
        
        require_once "../application/controllers/".$this->controller.".php";
        $this->controller = new $this->controller;

        if(isset($url[1]) && !empty($url[1]))
        {
            if(method_exists($this->controller, $url[1]))
            {
                $this->method = $url[1];
                unset($url[1]);
            }
            else
            { 
                $this->error->show("Method ".$url[1]." not found") ;                   
            }
        } 
        if($url)
        {   
            if(array_key_exists('1',$url) & !empty($url[1]))
            {
                $this->params = $url[1];
            }
            else
            {
                $this->params = array();
            }
        }
        else
        {
            $this->params = array();
        }
        call_user_func_array([$this->controller, $this->method],$this->params);        
    }

    public function url()
    {
        if(isset($_GET['url']))
        {
            $url = $_GET['url'];
            $url = rtrim($url);
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
 


}


?>
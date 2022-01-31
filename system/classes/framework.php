<?php
use system\library\error as err;
class framework
{
    public $error;
    function __construct()
    { 
        $this->error = new err\err();
    }

    public function view($view = '',$data=[])
    {
        if(file_exists('../application/views/'.$view.'.php'))
        { 
            require_once '../application/views/'.$view.'.php';
        }
        else
        {
            $this->error->show("View ".$view." not found") ;                
        }
    }

    public function model($model='')
    {
        if(file_exists('../application/models/'.$model.'.php'))
        {
            require_once '../application/models/'.$model.'.php';
            return new $model;
        }
        else
        {
            $this->error->show('Model '.$model.' not found');
        }
    }

    public function input($val)
    {
        if($_SERVER['REQUEST_METHOD']=='post' || $_SERVER['REQUEST_METHOD']=='POST')
        {
            return trim($_POST[$val]);
        }
        elseif ($_SERVER['REQUEST_METHOD']=='get' || $_SERVER['REQUEST_METHOD']=='GET') { 
            return trim($_GET[$val]);
        }
    }
    public function validation( array $val)
    {
        if($_SERVER['REQUEST_METHOD']=='post' || $_SERVER['REQUEST_METHOD']=='POST')
        {
            $error = array();

            foreach($val as $key => $validation)
            {
                if(empty($_POST[$key]) || $_POST[$key] =='')
                {
                    $error[] = $key;
                }
            }            
            $_SESSION["error"] = $error;
        }  
        else
        {
            $error = array();
        }       
        // echo 0;
        return $error;
    }

   
}

<?php 
class login extends framework
{  

    protected $properties;
    function __construct()
    {
        parent::__construct();
        $this->properties = $this->model('property'); 
    }   
    
    public function index($data='')
    {  
        $this->view('login');
    }

    public function store()
    {
        $error = $this->validation([
            'email'=>'required',
            'password'=>'required',
        ]);
        redirect("login"); 
    }
}
?>
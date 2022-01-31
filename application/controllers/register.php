<?php 
use system\library\hash as Hash;
class register extends framework
{  

    protected $properties;
    function __construct()
    {
        parent::__construct();
        $this->properties = $this->model('property'); 
    }   
    
    public function index($data='')
    {  
 
        $this->view('register'); 

    }

    public function store()
    {
        $this->validation([
            'email'=>'required',
            'password'=>'required',
            'name'=>'required',
            'mobile'=>'required',
        ]);
        $data = array(
            'name'=>$this->input('name'),
            'email'=>$this->input('email'),
            'mobile'=>$this->input('mobile'),
            'password'=>$this->input('password'),
        );
        if(!empty($data))
        {
            $this->properties->insertProperties('users',$data);
        }
        redirect("register"); 
    }
}
?>
 
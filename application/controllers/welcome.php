<?php 
class welcome extends framework
{  

    protected $properties;
    function __construct()
    {
        parent::__construct();
        $this->properties = $this->model('property'); 
    }
    // public function index($data='')
    // {
    //     $data = [ 
    //         "title"=>"title",
    //         "slug"=>"slug",
    //         "price"=>"price",
    //         "address"=>"address",
    //         "banner"=>"banner",
    //         "user_id"=>"user_id",
    //         "features"=>"features", 
    //     ];        
    //     $property = $this->properties->insertProperties('properties', $data);  
    //     print_r($property);
    //     $this->view('index',compact('property'));
    // }   

    public function index($data='')
    {
        $data = [ 
                 'where'=>[
                    "status"=>1,                     
                 ],  
        ];        
        $property = $this->properties->getProperties('properties',$data);   
        $this->view('index',compact('property'));
    }     
}
?>
<?php
use system\library\error as err;
class model{

    public $host = HOST;
    public $user = USER;
    public $password = PASSWORD;
    public $dbname = DB;
    public $con;
    public $error;

    public function __construct()
    {
        $this->error = new err\err();
        try{  
            $this->con = new mysqli($this->host, $this->user, $this->password, $this->dbname); 
        }
        catch(Exception $e)
        {
            $this->error->show("Database Error".$e->getMessage());
        }
    }

    public function db()
    { 
        if ($this->con->connect_error)
        {
            die("Connection failed: " . $con->connect_error);
        }
        else
        {
            return $this;
        } 
    }

    public function insert($table, $data)
    { 
        $keys = implode(', ', array_keys($data)); 
        $data = implode('", "', $data); 
        $insert = 'insert into '.$table.'('.$keys.') value ("'.$data.'")';
        $result = $this->con->query($insert);
        return $result;
    }
    
    public function insert_id()
    {
         return $this->con->insert_id;
    }
    
    public function select($table, $arg)
    {
        $query = "select * from $table";
        if(!empty($arg['where']))
        {
            $query .= ' where ';
            $a = 0;$pre='';
            foreach($arg['where'] as $key => $value)
            {
                if($a>0){ $pre = ' and '; }else{ '  ';} 
                $query .= $pre.$key.'='.$value;
                $a++;
            }
        }
        $result  = $this->con->query($query);
        $result  = $result->fetch_all(MYSQLI_ASSOC);
        return $result;
    }
    public function rowCount($result)
    {
        return count($result);
    }
}

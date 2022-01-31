<?php 
class property extends model
{
    public function insertProperties($table, $data)
    {

        $this->db()->insert($table,$data);
        return $this->db()->insert_id();
    }
    public function getProperties($table, $arg)
    {
        return $this->db()->select($table, $arg);
        // return $this->db()->rowCount($result);
    }
 
}
?>
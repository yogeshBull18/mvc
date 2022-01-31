<?php 
function base_url($data='')
{
    $prefix = '/';
    $str = $data;
    $str = preg_replace('/^' . preg_quote($prefix, '/') . '/', '', $str);
    echo base_url.'/'.$str; 
}

function error()
{
    if(isset($_SESSION["error"]))
    {
        foreach($_SESSION["error"] as $key => $error)
        {
            echo "<p>Field ".$error." is required. </p>";
        }
        unset($_SESSION["error"]); 
        // echo 1;               
    }
}
function redirect($url)
{ 
    header("Location: ".base_url.'/'.$url."/"); 
}
?>
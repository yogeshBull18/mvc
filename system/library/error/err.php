<?php
namespace system\library\error;
class err
{
    function show($data='')
    {
        echo "<div class='alert alert-danger'>".$data." </div>";
    }
}
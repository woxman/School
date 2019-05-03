<?php
function Get_Hash($str)
{
    $salt="Hekta";
    $hash=hash('sha256',$salt.$str);
    return($hash);
}

echo Get_Hash("13wek79hox");
?>
<?php

$server_name = $_SERVER['SERVER_NAME'];
$brand="YourBrand";
$domain="YourDomain.com";

if(!filter_var($server_name, FILTER_VALIDATE_IP)){
        $arr_dom=explode(".",$server_name);
        if(count($arr_dom)== 3   ){
                $domain=($arr_dom[1].".".$arr_dom[2]);
                $brand=($arr_dom[1]);
        }
        elseif (count($arr_dom)== 3 || 4) {
                $domain=($arr_dom[1].".".$arr_dom[2].".".$arr_dom[3]);
                $brand=($arr_dom[1]);
        }
        else{
                $domain=(str_replace("wwww.","",$server_name));
                $arr_dom=explode(".",$domain);
                $brand=$arr_dom[0];  
               
        }
        
}



?>
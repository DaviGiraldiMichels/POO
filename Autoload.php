<?php

function autoLoad($className){
    require _once(__DIR__ ."/".$className.".php");
}

spl_autoload_register("autoLoad");
<?php

//  ="backend" == defult
// '/'.config($moduleName.'.module-name' prefix it to prevent conflict 

 function buildPrefix(string $moduleName ,string $type ="backend")
{
   return config($moduleName.'.prefix.'.$type,config('module.prefix.'.$type)).'/'.config($moduleName.'.module-name');
}

function buildControllerNamespace($moduleName){
   return ucfirst($moduleName).'\Http\Controllers'; 
}
<?php 

function viewPath(string $moduleName ,string $type ,string $viewName){

    return view($moduleName.'::'.$type.'.'.$viewName);
}
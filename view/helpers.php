<?php
namespace quiz\view;
class helpers
{
    public static function render ($template, $data =[])
    {
        $path = __DIR__ . '/' . $template . ".php";
        
        if (file_exists($path))
        {
            
            extract($data);
            require($path);
        }
    }
}
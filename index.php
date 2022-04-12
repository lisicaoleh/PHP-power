<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');

    if(isset($_GET['page'])){
    $page = $_GET['page'];
    }else{
    $page = "index";
    }
    $path = "pages/$page.php";
    
    if(file_exists($path)){
        $content = file_get_contents($path);
    }else{
        $content = file_get_contents("pages/404.php");
        header("HTTP/1.1 404 Not Found");
    }
        $titleP = "#\{\{title:(.*?)\}\}#";
        if(preg_match("$titleP", $content, $match)){
            $title = $match[1];
            $content = trim(preg_replace($titleP, '', $content));
        }else{
            $title = '';
        }
        
        $descP = "#/{/{desc:(.*?)/}/}#";
        if(preg_match($descP, $content, $match)){
            $description = $match[1];
            $content = trim(preg_replace($descP, '', $content));
        }else{
            $description = '';
        }
include 'layout.php';

<?php

function currentDomain()
{
    $httpProtocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === "on") ? "https://" : "http://";
    $currentUrl = $_SERVER['HTTP_HOST'];
    return $httpProtocol.$currentUrl;
}

function asset($src)
{
    return currentDomain() . ("/" . trim($src, "/ "));
}


function redirect($url = null)
{
    trim($url, " /");

    $portocol = strpos($_SERVER['SERVER_PROTOCOL'], 'http') ? "https://" : 'http://';
    return header("Location:" . $portocol . $_SERVER['HTTP_HOST'] . $url);
}

function back()
{
    return header("Location:". $_SERVER['HTTP_REFERER']);
}

function view($address, $variable = null)
{

    $address = str_replace('.', '/', $address);
    $path = realpath(__DIR__) . "/../../resources/view/" . $address . ".php";
    $variable != null ? extract($variable) : null;
    require_once $path;
}

function limitCharacter($text, $length){
    return substr($text,'0',$length);
}

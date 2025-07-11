<?php

/**
 * URL
 * 
 * Response methods
 */
class Url 
{
/**
 * Redirect to another URL on the same site 
 * 
 * @param string $path The path to redirect to 
 * 
 * @return void
 */

 public static function redirect($path)
 {
     if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {
         $protocol = 'https';
     } else {
         $protocol = 'http';
     }
     //This is because the files are in the ~miguel95/MA# directly. Otherwise you will get a file cannot be found
     header("Location: $protocol://" . $_SERVER['HTTP_HOST'] . "/~miguel95" . $path);
     exit;
 }
}
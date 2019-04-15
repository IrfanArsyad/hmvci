<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


if ( ! function_exists('debug'))
{
	function debug($str = '')
	{
		echo '<pre>';
		print_r($str);
		echo '</pre>';
	}
}

if ( ! function_exists('dd'))
{
    function dd($str = '')
    {
        echo '<pre>';
        print_r($str);
        echo '</pre>';
        die();
    }
}


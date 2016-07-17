<?php
namespace App\Controllers;
defined("APPPATH") OR die("Access denied");

use \Core\View,
    \App\Models\User as Users,
    \Core\Controller;

class Profile extends Controller
{
    public function index()
    {
        echo __CLASS__;
    }

    public function get($id)
    {
        echo $id;
    }
}

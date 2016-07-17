<?php
namespace App\Controllers;
defined("APPPATH") OR die("Access denied");

use \Core\View,
    \App\Models\User as Users,
    \Core\Controller;

class Home extends Controller
{

    public function index()
    {
        View::set("msg", "Hello World!!");
        View::render("home/index");
    }

    /**
     * [test description]
     * @param  [type] $user [description]
     * @param  [type] $age  [description]
     * @return [type]       [description]
     */
    public function test($user, $age)
    {
        View::set("user", $user);
        View::set("title", "Custom MVC");
        View::render("home");
    }

    public function admin($name)
    {
        $users = Users::getAll();
        View::set("users", $users);
        View::set("title", "Custom MVC");
        View::render("admin");
    }

    public function user($id = 1)
    {
        $user = Users::getById($id);
        print_r($user);
    }
}

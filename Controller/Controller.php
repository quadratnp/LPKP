<?php
require_once "Controller/services/view.php";
require_once "Controller/services/mysqlDB.php";

class Controller
{
    public function view_index()
    {
        return view::createView('homepage.php', []);
    }
    public function view_about()
    {
        return view::createView('aboutUs.php', []);
    }
    public function view_program()
    {
        return view::createView('ourProgram.php', []);
    }
}

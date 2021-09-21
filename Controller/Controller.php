<?php
require_once "Controller/services/view.php";
require_once "Controller/services/mysqlDB.php";

class Controller
{
    public function view_index()
    {
        return view::createView('ourProgram.php', []);
    }
}

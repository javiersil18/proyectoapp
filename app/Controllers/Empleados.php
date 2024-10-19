<?php

namespace App\Controllers;

class Empleados extends BaseController
{
    public function index()
    {
        echo "<h1>Empleados<h1>";
    }

    public function show()
    {
        return "<h2>ID_Empleado<h2>";
    }
}

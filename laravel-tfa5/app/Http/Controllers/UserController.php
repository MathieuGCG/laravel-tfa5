<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            ['id' => 1, 'username' => 'admin', 'full_name' => 'System Administrator', 'role' => 'Manager'],
            ['id' => 2, 'username' => 'cashier1', 'full_name' => 'Pedro Penduko', 'role' => 'Cashier'],
            ['id' => 3, 'username' => 'cashier2', 'full_name' => 'Gabriela Silang', 'role' => 'Cashier'],
            ['id' => 4, 'username' => 'inventory1', 'full_name' => 'Juan Luna', 'role' => 'Inventory Staff'],
            ['id' => 5, 'username' => 'supervisor', 'full_name' => 'Melchora Aquino', 'role' => 'Supervisor'],
        ];

        return view('users.index', compact('users'));
    }
}
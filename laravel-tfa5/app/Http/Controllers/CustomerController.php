<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            ['id' => 1, 'full_name' => 'Juan Dela Cruz', 'email' => 'juan@example.com', 'phone' => '09171234567'],
            ['id' => 2, 'full_name' => 'Maria Clara', 'email' => 'maria@example.com', 'phone' => '09182345678'],
            ['id' => 3, 'full_name' => 'Jose Rizal', 'email' => 'jose@example.com', 'phone' => '09193456789'],
            ['id' => 4, 'full_name' => 'Andres Bonifacio', 'email' => 'andres@example.com', 'phone' => '09204567890'],
            ['id' => 5, 'full_name' => 'Apolinario Mabini', 'email' => 'apolinario@example.com', 'phone' => '09215678901'],
        ];

        return view('customers.index', compact('customers'));
    }
}
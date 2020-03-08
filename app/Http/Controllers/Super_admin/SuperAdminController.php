<?php

namespace App\Http\Controllers\Super_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:super_admin');
    }
    public function super_dashboard()
    {
        return view('super_admin.home');
    }
}

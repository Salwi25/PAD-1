<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index() {
        $data_user = User::all();
        $no = 0;
        return view('user.data', compact('data_user', 'no'));
    }
}

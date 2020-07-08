<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class HomeController extends Controller
{
    
    public function __construct()
    {
        $this->checkLogin();
    }

    public function index(){
        return view('admin.home',[
            'title' => 'Admin Login',
            'loginRoute' => 'admin.login',
            'forgotPasswordRoute' => 'admin.password.request',
        ]);
    }

    private function checkLogin(){        
        if(!Auth::guard('admin')->check()){
    
        }
    }
}

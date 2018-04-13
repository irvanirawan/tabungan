<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use User;
use App\Role;
use App\Permission;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use Zizaco\Entrust\EntrustPermission;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function tes()
    {
        return view('home');
    }
}

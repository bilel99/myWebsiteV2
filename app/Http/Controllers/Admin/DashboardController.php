<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function __construct()
    {
    }

    public static function instanced_date(){
        $date = new \App\Helpers\DatesSecondary();
        return $date;
    }

    public function index(){
        return view('admin.dashboard.index');
    }
}

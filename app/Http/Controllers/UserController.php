<?php

namespace App\Http\Controllers;

use App\Exports\ExportUser;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function home(Request $request){
        return view('home');
    }

    public function exportUsers(Request $request){
        return Excel::download(new ExportUser, 'users.xlsx');
    }
}

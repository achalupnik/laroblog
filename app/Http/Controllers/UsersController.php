<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Datatables;
use Redirect,Response,DB,Config;


class UsersController extends Controller
{
    public function getUsersListDBTables() {
        $users = DB::table('users')->select('*');
        return datatables()->of($users)->make(true);
    }
}

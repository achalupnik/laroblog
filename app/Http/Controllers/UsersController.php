<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Datatables;
use Redirect,Response,DB,Config;
use App\Repositories\UsersRepository;


class UsersController extends Controller
{
    public function getUserListTable() {
        $users = Users::paginate(8);
        //$users = DB::table('users')->select('*')->get();
        //file_put_contents('r_1.txt', print_r($users, true));
        return view('admin.users-list-table', ['users' => $users]);
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: TrungVH
 * Date: 5/10/2018
 * Time: 4:45 PM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController
{
    function index(){
        return view('admin.users');
    }

    function add(Request $request){
    return view('admin.add');
    }

    function edit(Request $request){
        return view('admin.edit');
    }

    function delete($id){
        return view('admin.users');
    }

}
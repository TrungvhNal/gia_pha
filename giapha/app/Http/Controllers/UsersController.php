<?php
/**
 * Created by PhpStorm.
 * User: TrungVH
 * Date: 5/10/2018
 * Time: 4:45 PM
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    function index(){

        $users = User::all();
        return view('admin.users', ['users'=> $users]);
    }

    function getAdd(){
        $users = User::all();
        return view('admin.add', ['users'=>$users]);
    }

    function postAdd(Request $request){

        if($request->get('optionsRadiosInline')==1)
        {
            $idwfie_husband = $request->get('txtBoMeVoChong');
            $idPerant = null;
        }
        else
        {
            $idPerant = $request->get('txtBoMeVoChong');
            $idwfie_husband = null;
        }

        if($request->get('txtBirthday'))
        {
            $txtBirthday = date('Y-m-d', strtotime(trim($request->get('txtBirthday'))));
        }
        else
        {
            $txtBirthday = null;
        }

        if($request->get('txtDieDate'))
        {
            $txtDieDate = date('Y-m-d', strtotime(trim($request->get('txtDieDate'))));
        }
        else
        {
            dd("xxx");
            $txtDieDate = null;
        }
        $data = [
            'idwfie_husband' => $idPerant,
            'idPerant' => $idwfie_husband,
            'name' => $request->get('txtFullName'),
            'address' => $request->get('txtNameShort'),
            'url_photo' => $request->get('txtFile'),
            'birthday' => $txtBirthday,
            'diedate_at' => $txtDieDate,
            'phone' => $request->get('txtPhoneNumber'),
            'email' => $request->get('txtEmail'),
            'address' => $request->get('txtAddress'),
            'description' => $request->get('txtDescription'),
            'password' => '123456',
            'sexy'=> $request->get('sexy'),
            'idRoles' =>'2'
        ];

        $this->create($data);

        return view('admin.add', ['sucsseful'=>'Thêm thành viên thành công!']);
    }

    function getEdit($id){
        $users = User::all();
        $user = User::find($id);
        return view('admin.edit', ['users'=>$users]);
    }

    function postEdit($id){
        $users = User::all();
        $user = User::find($id);
        return view('admin.edit', ['users'=>$users, 'user'=>$user]);
    }

    function delete($id){
        return view('admin.users');
    }

    //Create user
    protected function create(array $data)
    {
        return User::create([
            'idwfie_husband' => $data['idwfie_husband'],
            'idPerant' => $data['idPerant'],
            'name' => $data['name'],
            'address' => $data['address'],
            'url_photo' => $data['url_photo'],
            'birthday' => $data['birthday'],
            'diedate_at' => $data['diedate_at'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'address' => $data['address'],
            'description' => $data['description'],
            'password' => Hash::make($data['password']),
            'sexy'=>'',
            'idRoles' =>'2'
        ]);
    }
}
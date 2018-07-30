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
use DateTime,File,Input,DB;

class UsersController extends Controller
{
    function index(){

        $users = User::all();
        return view('admin.users', ['users'=> $users]);
    }

    function getAdd(){
        $users = User::all();
        return view('admin.add', ['users'=>$users, 'successful' => null]);
    }

    function postAdd(Request $request)
    {
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

        if($request->get('txtBirthday')!== null)
        {
            $txtBirthday = date('Y-m-d', strtotime(trim($request->get('txtBirthday'))));
        }
        else
        {
            $txtBirthday = null;
        }

        if($request->get('txtDieDate')!== null)
        {
            $txtDieDate = date('Y-m-d', strtotime(trim($request->get('txtDieDate'))));
        }
        else
        {
            $txtDieDate = null;
        }

        if ($request->hasFile('txtFile')) {
            //get img and save to local
            //$filname = $request->get('txtFile');
            $photo = $request->file('txtFile')->getClientOriginalName();
            $filename = time().'_'.$photo;
            $destination = base_path() . '/public/uploads';
            $request->file('txtFile')->move($destination, $filename);

        }

        $gender = $request->get('gender');
        $data = [
            'idwfie_husband' => $idPerant,
            'idPerant' => $idwfie_husband,
            'name' => $request->get('txtFullName'),
            'address' => $request->get('txtNameShort'),
            'images' => $filename,
            'birthday' => $txtBirthday,
            'diedate_at' => $txtDieDate,
            'phone' => $request->get('txtPhoneNumber'),
            'email' => $request->get('txtEmail'),
            'address' => $request->get('txtAddress'),
            'description' => $request->get('txtDescription'),
            'password' => '0974839268',

            'gender' => $gender,
            'idRoles' =>'2'
        ];

        $users = User::all();
        if($this->create($data))
        {
            return view('admin.add', ['successful'=>'Thêm thành viên thành công!', 'users'=>$users]);
        }

        return view('admin.add', ['users'=>$users]);
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
            'images' => $data['images'],
            'birthday' => $data['birthday'],
            'diedate_at' => $data['diedate_at'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'address' => $data['address'],
            'description' => $data['description'],
            'password' => Hash::make($data['password']),
            'gender'=> $data['gender'],
            'idRoles' =>'2'
        ]);
    }
}
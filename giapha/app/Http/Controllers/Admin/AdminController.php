<?php
/**
 * Created by PhpStorm.
 * User: TrungVH
 * Date: 5/30/2018
 * Time: 2:22 PM
 */

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\http\Controllers\Controller;
use Hash;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }
}
<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Hash;

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
    public function index($show = '')
    {
        $user = new User();
        $userIndex = $user->getMembersIndex();

        $allUsers = $user->getAllMembers();
        //dd($allUsers);

        if($show == 'show-ho')
        {
            return view('tree-ho', ['userIndex' => $userIndex, 'allUsers' => $allUsers]);
        }

        if ($show == 'show-name')
        {
            return view('tree-name', ['userIndex' => $userIndex, 'allUsers' => $allUsers]);
        }

        if($show == 'show-full')
        {
            return view('tree-full', ['userIndex' => $userIndex, 'allUsers' => $allUsers]);
        }

        return view('home');
    }


    public function showListMembers($userAll, $parent_id = 0)
    {
        echo '<ul>';
        foreach ($userAll as $key => $item)
        {
            // Nếu là chuyên mục con thì hiển thị
            if ($item['idPerant'] == $parent_id)
            {
                echo '<li>';
                echo '<a href="/home/'.$item['id'].'/detail">';
                echo '<div>';
                echo '<img src="/uploads/'.$item['images'].'" style="width: 100px; height: 125px"><br><p>';
                echo  $item['name'];
                echo '</p>';
                echo '</div>';

                echo $this->showWifeHusband($item['id']);

                echo '</a>';

                echo '</li>';
                // Xóa chuyên mục đã lặp
                unset($userAll[$key]);
                // Tiếp tục đệ quy để tìm chuyên mục con của chuyên mục đang lặp
                $this->showListMembers($userAll, $item['id']);
            }
        }



        echo '</ul>';
    }

    public function showWifeHusband($id)
    {
        $wife = $this->getWifeHusband($id);
        //dd($wife);
        // show wife and husband
        if($wife)
        {
            foreach ($wife as $k => $it)
            {
                echo '<div>';
                echo '<img src="/uploads/'. $it['images'] .'" style="width: 100px; height: 125px"><br><p>';
                echo $it['name'];
                echo '</p>';
                echo '</div>';
            }
        }
    }

    public function getMembersIndex()
    {
            $uIndex = new User();
            $allUsers = $uIndex->getIndexMember();

        return $allUsers;
    }

    public function getChild($idPerant)
    {
        $user = new User();
        $userChild = $user->getChildMemeber($idPerant);
        return $userChild;
    }

    public function getWifeHusband($idPerant)
    {
        $user = new User();
        $wifeHusband = $user->getHusbandWife($idPerant);
        return $wifeHusband;
    }

    public function detail($id=''){
        return view('detail.detail');
    }
}

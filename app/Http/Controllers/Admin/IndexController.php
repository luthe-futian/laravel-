<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\AuthRule;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //切换深蓝色主题时菜单栏会用到
    public function index(AuthRule $authRule)
    {
        $menulist = $authRule->status()->isMenu()->display()->get()->toArray();
        $tree = list_tree(filedSort($menulist, 'pid'));
       return view('admin.index.index',compact('tree'));
    }



}

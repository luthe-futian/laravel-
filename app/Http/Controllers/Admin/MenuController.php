<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\AuthRule;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(AuthRule $authRule, Request $request)
    {
        $limit = $request->input('limit', 10);
        $keyword = $request->input('searKey', '');
        $menus =  $authRule
            ->where(function ($sql) use ($keyword) {
                if (!empty($keyword)) {
                    return $sql->where('title', 'like', '%' . $keyword . '%');
                }
            })
            ->paginate($limit);
        if ($request->ajax()) {
           return $menus;
        }
        return view('admin.menu.index',compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(AuthRule $authRule)
    {
        $tree = $authRule->status()->get()->toArray();
        $tree = filedSort($tree, 'pid', SORT_ASC, SORT_DESC);
        $tree = $authRule->tree($tree);

        $treeOption = $authRule->optionHtml($tree);
        return view('admin.menu.create',compact('treeOption'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,AuthRule $authRule)
    {
        $message = [
            'name.required' => '规则不能为空',
            'name.unique'   => '规则已经存在',
            'title.required' => '描述不能为空'
        ];
        $this->validate($request, [
            'name' => 'required|unique:auth_rules',
            'title' => 'required',
        ],$message);
        $authRule->create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(AuthRule $menu)
    {
        $tree = $menu->status()->get()->toArray();
        $tree = filedSort($tree, 'pid', SORT_ASC, SORT_DESC);
        $tree = $menu->tree($tree);
        $tree = $menu->optionHtml($tree);
        return view('admin.menu.edit', compact('menu','tree'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AuthRule $menu)
    {
        $message = [
            'name.required' => '规则不能为空',
            'name.unique'   => '规则已经存在',
            'title.required' => '描述不能为空'
        ];
        $this->validate($request, [
            'name' => [
                'required',
                Rule::unique('auth_rules')->ignore($menu->id)], //不判断自己的唯一
            'title' => 'required',
        ],$message);
        $menu->fill($request->all())->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(AuthRule $menu)
    {
        $menu->delete();
    }

    public function status(AuthRule $menu, $value)
    {
        $menu->status = $value;
        $menu->save();

    }
    public function menu(AuthRule $menu,$value)
    {
        $menu->isMenu = $value;
        $menu->save();
    }
    public function display(AuthRule $menu,$value)
    {
        $menu->display = $value;
        $menu->save();
    }
}

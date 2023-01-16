<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Groups;

class GroupsController extends Controller
{
    public function index()
    {
        $group=Groups::all();
        return view('admin.groups.index',compact('group'));
    }
    
    public function add()
    {
        return view('admin.groups.add');
    }
    public function insert(Request $request)
    {
        $group=new Groups();
        $group->name=$request->name;
        $group->matches=$request->matches;
        $group->disGoals=$request->disGoals;
        $group->points=$request->points;
        $group->goals=$request->goals;
        $group->typeGroup=$request->typeGroup;
        $group->save();
        return redirect('/admin/groups');
    }
    public function delete($id)
    {
        $group=Groups::find($id);
        $group->delete();
        return redirect('/admin/groups');

    }
    public function edit($id)
    {
        $group=Groups::find($id);
        return view('admin.groups.edit',compact('group'));
    }
    public function update(Request $request,$id)
    {
        $group=Groups::find($id);
        $group->name=$request->name;
        $group->matches=$request->matches;
        $group->disGoals=$request->disGoals;
        $group->points=$request->points;
        $group->goals=$request->goals;
        $group->typeGroup=$request->typeGroup;
        $group->update();
        return redirect('/admin/groups');
    }
}

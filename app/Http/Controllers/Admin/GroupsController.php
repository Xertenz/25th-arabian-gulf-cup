<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Groups;
use Illuminate\Support\Facades\Validator;

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
        $roles=[
            'name'=>'required|max:191',
            'matches'=>'required|max:191',
            'disGoals'=>'required|max:191',
            'points'=>'required|max:191',
            'goals'=>'required|max:191',
            'typeGroup'=>'required|max:191',


        ];
        $message=[
            'name.required'=>'الاسم مطلوب',
            'matches.required'=>'عدد مباريات مطلوب',
            'disGoals.required'=>'الاهداف عليه مطلوب',
            'points.required'=>'النقاط مطلوب',
            'goals.required'=>'الاسم مطلوب',
            'typeGroup.required'=>'نوع المجموعة مطلوب',

        ];
        $validator=Validator::make($request->all(),$roles,$message);
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }
        else{
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
        $roles=[
            'name'=>'required|max:191',
            'matches'=>'required|max:191',
            'disGoals'=>'required|max:191',
            'points'=>'required|max:191',
            'goals'=>'required|max:191',
            'typeGroup'=>'required|max:191',


        ];
        $message=[
            'name.required'=>'الاسم مطلوب',
            'matches.required'=>'عدد مباريات مطلوب',
            'disGoals.required'=>'الاهداف عليه مطلوب',
            'points.required'=>'النقاط مطلوب',
            'goals.required'=>'الاسم مطلوب',
            'typeGroup.required'=>'نوع المجموعة مطلوب',

        ];
        $validator=Validator::make($request->all(),$roles,$message);
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }
        else
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
}

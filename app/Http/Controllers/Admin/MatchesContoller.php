<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Matches;
use Illuminate\Support\Facades\File;
class MatchesContoller extends Controller
{
    public function index()
    {
        $matches=Matches::all();
        return view('admin.matches.index',compact('matches'));
    }
    public function add()
    {
        return view('admin.matches.add');
    }
    public function insert(Request $request)
    {
        $matches=new Matches();
        $matches->team1=$request->team1;
        $matches->team2=$request->team2;
        $matches->scour1=$request->scour1;
        $matches->scour2=$request->scour2;
        $matches->date=$request->date;
        $matches->groups=$request->groups;

        if($request->hasFile('img1')){
            $file=$request->file('img1');
            $ext=$file->getClientOriginalExtension();
            $fileName=time().'.'.$ext;
            $file->move('uploads/img',$fileName);
            $matches->img1=$fileName;
        }


        if($request->hasFile('img2')){
            $file=$request->file('img2');
            $ext=$file->getClientOriginalExtension();
            $fileName=time().'.'.$ext;
            $file->move('uploads/img2',$fileName);
            $matches->img2=$fileName;
        }

        $matches->save();
        return redirect('admin/matches');

    }
    public function delete($id)
    {
        $match=Matches::find($id);
        $match->delete();
        return redirect('/admin/matches');
    }
    public function edit($id)
    {
        $match=Matches::find($id);
        return view('admin.matches.edit',compact('match'));
    }
    public function update(Request $request,$id)
    {
        
        $matches=Matches::find($id);
        $matches->team1=$request->team1;
        $matches->team2=$request->team2;
        $matches->scour1=$request->scour1;
        $matches->scour2=$request->scour2;
        $matches->date=$request->date;
        $matches->groups=$request->groups;

        if($request->hasFile('img1')){
            if(File::exists('img1')){
                File::delete('img1');
            }
            $file=$request->file('img1');
            $ext=$file->getClientOriginalExtension();
            $fileName=time().'.'.$ext;
            $file->move('uploads/img',$fileName);
            $matches->img1=$fileName;
        }


        if($request->hasFile('img2')){
            if(File::exists('img2')){
                File::delete('img2');
            }
            $file=$request->file('img2');
            $ext=$file->getClientOriginalExtension();
            $fileName=time().'.'.$ext;
            $file->move('uploads/img2',$fileName);
            $matches->img2=$fileName;
        }

        $matches->update();
        return redirect('admin/matches');
    }
}

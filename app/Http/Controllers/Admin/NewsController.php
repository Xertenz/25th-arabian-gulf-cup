<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\File;

class NewsController extends Controller
{
    public function index()
    {
        $news=News::all();
        return view('admin.news.index',compact('news'));
    }
    public function add()
    {
        return view('admin.news.add');
    }
    public function insert(Request $request)
    {
        $news=new News();
        $news->name=$request->name;
        $news->date=$request->date;
        $news->description=$request->description;
        if($request->hasFile('img')){
            $file=$request->file('img');
            $ext=$file->getClientOriginalExtension();
            $fileName=time().'.'.$ext;
            $file->move('uploads/img',$fileName);
            $news->img=$fileName;
        }
        $news->save();
        return redirect('/admin/news');
        
    }
    public function delete($id)
    {
        $news=News::find($id);
        $news->delete();
        return redirect('admin/news');
    }
    public function edit($id)
    {
        $news=News::find($id);
        return view('admin.news.edit',compact('news'));
    }
    public function update(Request $request,$id)
    {
        $news=News::find($id);
        $news->name=$request->name;
        $news->date=$request->date;
        $news->description=$request->description;
        if($request->hasFile('img')){
            if(File::exists('img')){
                File::delete('img');
            }
            $file=$request->file('img');
            $ext=$file->getClientOriginalExtension();
            $fileName=time().'.'.$ext;
            $file->move('uploads/img',$fileName);
            $news->img=$fileName;
        }
        $news->update();
        return redirect('/admin/news');
        
    }
}

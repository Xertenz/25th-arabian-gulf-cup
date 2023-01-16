<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Groups;
use App\Models\Matches;
use App\Models\News;



class HomeController extends Controller
{
    public function groups()
    {
        $group1=Groups::where('typeGroup',1)->get();
        $group2=Groups::where('typeGroup',2)->get();

        return view('pages.groups',compact('group1','group2'));
    }
    
    public function watches()
    {
        $matches=Matches::all();
        return view('pages.watches',compact('matches'));
    }
    public function news()
    {
        $news=News::all();
        return view('pages.news',compact('news'));
    }
}

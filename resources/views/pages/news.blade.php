@extends('pages.master')

@section('content')


<div class="news-title-wrapper">
      <div class="container">
        <h1 class="title">أخر الأخبار</h1>
      </div>
    </div>
    <div class="news-content">
      <div class="container">
        <div class="news-items">
          @foreach($news as $n)
          <a class="news-item" href="#">
            <div class="news-item-img"><img src="{{url('uploads/img/'.$n->img)}}" alt="First News Item"></div>
            <div class="news-item-info">
              <h3 class="news-item-title">{{$n->name}}</h3>
              <p class="news-item-description">{{$n->description}}</p>
              <p class="news-item-date">{{$n->date}}</p>
            </div>
          </a>
            @endforeach
          </div>
      </div>
      <!-- <script src="js/navbar.js"></script> -->
    </div>

@endsection
@extends('layout.app')

@section('content')
  <div class="container">
    <h1 style="alig:center">Blog</h1>
    <br><br>
     @if(count($articles) > 0)

         @foreach ($articles as $article)

            <div class="well">
                <h3><a href="./article/{{$article->id}}">{{$article->title}}</a></h3>
            </div>
            <div>
                <p>Written on: {{$article->created_at}}
            </div>
         @endforeach
     @else
        <p>No Articles</p>
     @endif
  </div>
@endsection


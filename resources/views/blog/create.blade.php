@extends('layout.app')
@section('content')
<div class="container">
    <h1 class="Title"> Add New Article</h1>
    <br>
        <div class="entry-meta">
        <form class="needs-validation" action="{{ url('article') }}" method="PUT" novalidate>
            <div class="form-goup">
                <label class="form-label" for='title'>Title</label>
                <input  class="form-control" type='text' name='title' required/>
            </div>
            <br>
            <div class="form-goup ">
                <label class="form-label" for='editor'>Content</label>
                <textarea class="form-control" id='editor' name='contents' cols=20 rows=10 required>

                </textarea>
            </div>
            <br>
            <div class="form-goup">
                <input class="btn btn-primary form-control" type='submit' value='Add Post' />
            </div>
            <br>
            <br>
        </form>
        <hr>
        </div>
</div>

@endsection

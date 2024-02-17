@extends('layouts.standard')

@section('title')Написать блог@endsection

@section('content')
    <h1>Написать блог</h1>
    <form class="{{ route('blog-create') }}" method="post">
        @csrf
    <div class="form-group" style="margin-left: 10%">
        <textarea name="message" style="width: 500px; height: 200px; margin-left: -1%" id="message" class="form-control" placeholder="Блогыңызды жазыңыз"></textarea>
    </div>
    <br>
    <button type="submit" class="btn btn-success" style="margin-left: 10%">Сақтау</button>
    </form>
@endsection

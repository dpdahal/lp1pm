@extends('master')

@section('content')

    <h1> Contact</h1>

    <form action="" method="post">
        @csrf
        <input type="text" name="name" placeholder="enter your name"> <br><br>
        <input type="text" name="email" placeholder="email">
        <br><br>

        <button>Add</button>
    </form>

@stop
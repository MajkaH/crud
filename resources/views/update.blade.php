@extends('master')
@section('content')
<form method="post" action="{{action('UserController@updateAction', ['id'=>$user->id])}}">
    Meno:<br>
    <input type="text" name="firstname" value="{{$user->meno}}"><br>
    Priezvisko:<br>
    <input type="text" name="lastname" value="{{$user->priezvisko}}"><br>
    Email:<br>
    <input type="text" name="email" value="{{$user->email}}"><br>
    Heslo:<br>
    <input type="password" name="password" value="{{$user->heslo}}"><br>
    Vek:<br>
    <input type="number" name="age" value="{{$user->vek}}"><br>
    <input type="submit" value="Upravit">
    {{csrf_field()}}
</form>
@endsection

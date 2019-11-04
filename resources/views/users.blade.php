@extends('master')
@section('content')
<table class="table table-dark">
<th><a href="{{action("UserController@getAddUserForm")}}">Pridať</a></th>
@foreach($users as $user)

    <tr>
    
        <td>{{$user->meno}} {{$user->priezvisko}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->heslo}}</td>
        <td>{{$user->vek}}</td>
        <td><a href="{{action("UserController@showAction",['id'=>$user->id])}}">editovať</a></td>
        <td><a href="{{action("UserController@deleteAction",['id'=>$user->id])}}">zmazať</a></td>
    </tr>
    @endforeach
</table>
@endsection
@extends('master')
@section('content')
<form method="post" action="{{action('UserController@insertAction')}}">

Meno:<br>
<input type ="text" name="firstname" value=""> <br>
Priezvisko:<br>
<input type ="text" name="lastname" value=""> <br>
E-mail:<br>
<input type ="text" name="email" value="@"> <br>
Heslo:<br>
<input type="password" name="password" value=""><br>
Vek:<br>
<input type ="number" name="age" value=""> <br><br>
<input type ="submit" value="Odoslať">
    {{csrf_field()}}
</form>
@endsection
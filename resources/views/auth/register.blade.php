@extends('layout.app')

@section('content')
<h1> Registeration form </h1> 
<form action="/register", method="post">
    @csrf
    <label> Name: </label> 
    <br/>
    <input type="text" name="name">
    <br> 
    <label> E-Mail </label> 
    <br/> 
    <input type="email" name="email"> 
    <br/> 
    <label> Password: </label> 
    <br/>
    <input type="password" name="password"> 
    <br/> 
    <label> Confirm Password: </label> 
    <br/> 
    <input type="password" name="password_confirmation"> 
    </br> 
    <button type="submit"> Register </button> 
</form> 
@endsection
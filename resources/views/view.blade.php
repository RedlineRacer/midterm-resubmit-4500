@extends('adminlte::page')

@section('title', 'title')

@section('content_header')
<h1>Add Views</h1>
<form action="add" method="POST">
    @csrf
    <input type="text" name="manufac" placeholder="Enter Manufacturer"> <br> </br>
    <input type="text" name="category" placeholder="Enter Category"> <br> </br>
    <input type="text" name="user" placeholder="Enter User"> <br> </br>
<button type="submit">Add Manufacturer</button>
</form>
@stop

@section('content')
    <p>Manufacturer: Category: User:</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
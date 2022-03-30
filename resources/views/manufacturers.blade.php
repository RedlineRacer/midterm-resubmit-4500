@extends('adminlte::page')

@section('title', 'Manufacturer Info')

@section('content_header')
<h1>Add Manufacturer</h1>
<form action="add" method="POST">
    @csrf
    <input type="text" name="manufacturer" placeholder="Enter Manufacturer"> <br> </br>
    <input type="text" name="salescontact" placeholder="Enter Sales Contact Info"> <br> </br>
    <input type="text" name="techcontact" placeholder="Enter Tech Contact Info"> <br> </br>
<button type="submit">Add Manufacturer</button>
</form>
@stop

@section('content')
    <p>Manufacturer:       Sales Contact:        Tech Contact:</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
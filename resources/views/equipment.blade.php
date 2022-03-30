@extends('adminlte::page')

@section('title', 'Equipment Info')

@section('content_header')
<h1>Add Equipment</h1>
<form action="add" method="POST">
    @csrf
    <input type="text" name="specs" placeholder="Enter Hardware Specs"> <br> </br>
    <input type="text" name="purchaseinfo" placeholder="Enter Purchase Info"> <br> </br>
    <input type="text" name="userinfo" placeholder="Enter User Info"> <br> </br>
    <input type="text" name="notes" placeholder="Enter Notes"> <br> </br>
<button type="submit">Add Manufacturer</button>
</form>
@stop

@section('content')
    <p>Specs: Purchase Info: User Info: Notes:</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
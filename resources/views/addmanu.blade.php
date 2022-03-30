<h1>Add Manufacturer</h1>
<form action="" method="POST">
    @csrf
    <input type="text" name="manufacturer" placeholder="Enter Manufacturer"> <br> </br>
    <input type="text" name="salescontact" placeholder="Enter Sales Contact Info"> <br> </br>
    <input type="text" name="techcontact" placeholder="Enter Tech Contact Info"> <br> </br>
<button type="submit">Add Manufacturer</button>
</form>
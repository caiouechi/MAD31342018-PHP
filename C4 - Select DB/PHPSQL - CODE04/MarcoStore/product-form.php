<?php include("header.php"); ?>

<h1>Product Form</h1>
<form action="add-product.php">
    <table class="table">
        <tr>
            <td>Name</td>
            <td><input class="form-control" type="text" name="name" /></td>
        </tr>
        <tr>
            <td>Price</td>
            <td><input class="form-control" type="number" name="price" /></td>
        </tr>
        <tr>
            <td><button class="btn btn-primary" type="submit">Add</button></td>
        </tr>
    </table>
</form>

<?php include("footer.php"); ?>

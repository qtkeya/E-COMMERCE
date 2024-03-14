<?php
include('../includes/connect.php');

if (isset($_POST['insert_brand'])) {
    $brand_title = $_POST['brand_title'];

    // Check for duplicate brand
    $select_query = "SELECT * FROM `brands` WHERE brand_title='$brand_title'"; 
    $result_select = mysqli_query($con, $select_query);

    if (mysqli_num_rows($result_select) > 0) {
        echo "<script>alert('This brand is already present in the database!')</script>";
    } else {
        // Insert brand if unique
        $insert_query = "INSERT INTO brands (brand_title) VALUES ('$brand_title')";
        $result = mysqli_query($con, $insert_query);

        if ($result) {
            echo "<script>alert('Brand has been inserted successfully!')</script>";
        } else {
            echo "Error inserting brand: " . mysqli_error($con);
        }
    }
}
?>
<style>
.text-center2 {
    text-align: center;
    font-size: 1.5em;
    color:black;
    user-select: none;
    text-decoration-color: #000;
    font-weight: 900;
    font-family: Georgia;
    font-style: italic;
    text-shadow: #000;
    padding: 0px;
    margin-bottom: 5px;
    text-shadow: black;
}
</style>
<h2 class="text-center2">Insert Brands</h2>
<form action="" method="post" class="mb-2">
    <div class="input-group w-90 mb-2">
  <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-recipt"></i> </span>
  <input type="text" class="form-control" name="brand_title"placeholder="Insert Brands" 
  aria-label="brands" aria-describedby="basic-addon1">
</div>
<div class="input-group w-10 mb-2 m-auto">
  
<input type="submit" class="bg-info border-0 p-2 my-3" name="insert_brand" value="Insert brands">

</div>
</form>
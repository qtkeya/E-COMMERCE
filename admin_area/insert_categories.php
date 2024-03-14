<?php
include('../includes/connect.php');

if (isset($_POST['insert_cat'])) {
    $category_title = $_POST['cat_title'];

    // Check for duplicate category
    $select_query = "SELECT * FROM `categories` WHERE category_title='$category_title'"; 
    $result_select = mysqli_query($con, $select_query);

    if (mysqli_num_rows($result_select) > 0) {
        echo "<script>alert('This category is already present in the database!')</script>";
    } else {
        // Insert category if unique
        $insert_query = "INSERT INTO categories (category_title) VALUES ('$category_title')";
        $result = mysqli_query($con, $insert_query);

        if ($result) {
            echo "<script>alert('Category has been inserted successfully!')</script>";
        } else {
            echo "Error inserting category: " . mysqli_error($con);
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
<h2 class="text-center2">Insert Categories</h2>
<form action="" method="post" class="mb-2">
    <div class="input-group w-90 mb-2">
  <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-recipt"></i> </span>
  <input type="text" class="form-control" name="cat_title"placeholder="Insert Categories" 
  aria-label="Categories" aria-describedby="basic-addon1">
</div>
<div class="input-group w-10 mb-2 m-auto">
  
 <input type="submit" class="bg-info border-0 p-2 my-3" name="insert_cat" value="Insert Categories">
 
</div>
</form>
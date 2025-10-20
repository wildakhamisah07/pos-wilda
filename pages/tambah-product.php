<?php


$selectCategory = mysqli_query($koneksi, "SELECT id, category_name FROM categories");
$categories = mysqli_fetch_all($selectCategory, MYSQLI_ASSOC);


if (isset($_POST['simpan'])) {
  $c_id = $_POST['category_id'];
  $p_name = $_POST['product_name'];
  $p_price = $_POST['product_price'];
  $p_description = $_POST['product_description'];
  $p_photo = $_FILES['product_photo'];


  $filePath = "assets/uploads/" . time() . "-" . $p_photo['name'];
  move_uploaded_file($p_photo['tmp_name'], $filePath);

  $insertProduct = mysqli_query($koneksi, "INSERT INTO products 
  (category_id,product_name,product_price,product_description,product_photo)
   VALUES('$c_id','$p_name','$p_price','$p_description','$filePath')");

  if ($insertProduct) {
    header("location:?page=product");
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div class="card">
    <div class="card-header">
      <div class="card-header">Tambah Product</div>
    </div>
    <div class="card-body">
      <form action="" method="post" enctype="multipart/form-data">
        <div class="w-50">
          <label for="" class="form-label">Category Name</label><br>
          <select class="form-select" name="category_id" required>
            <option value="">--Pilih Kategori--</option>
            <?php
            foreach ($categories as $c) {
            ?>
              <option value="<?php echo $c['id'] ?>"><?php echo $c['category_name'] ?></option>
            <?php
            }
            ?>
          </select>
          <label for="form-label">Product Name</label>
          <input class="form-control" name="product_name" required>
          <label for="form-label">Photo</label>
          <input class="form-control" type="file" name="product_photo">
          <label for="form-label">Price</label>
          <input class="form-control" type="number" name="product_price" required>
          <label for="form-label">Description</label>
          <textarea class="form-control" name="product_description" cols="30" rows="5"></textarea>
          <button type="submit" name="simpan" class="btn btn-primary mt-2">ADD</button>


        </div>
      </form>
    </div>
  </div>

</body>

</html>
<?php


$selectCategory = mysqli_query($koneksi, "SELECT id, category_name FROM categories");
$categories = mysqli_fetch_all($selectCategory, MYSQLI_ASSOC);
// var_dump($categories);
//product:
$id = isset($_GET['edit']) ? $_GET['edit'] : '';
$s_product = mysqli_query($koneksi, "SELECT * FROM products WHERE id='$id'");
$p = mysqli_fetch_assoc($s_product);
// var_dump($product);

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
if (isset($_POST['update'])) {
  $c_id = $_POST['category_id'];
  $p_name = $_POST['product_name'];
  $p_price = $_POST['product_price'];
  $p_description = $_POST['product_description'];
  $p_photo = $_FILES['product_photo'];
  //jika ada foto baru:
  $cek_foto = mysqli_query($koneksi, "SELECT product_photo FROM products WHERE id =$id");
  $row = mysqli_fetch_assoc($cek_foto);
  $oldFile = $row['product_photo'];
  $filePath = $oldFile;
  if (!empty($p_photo['name'])) {
    $dir = "assets/uploads/";
    // if (!is_dir($dir)) {
    //   mkdir($dir, 0777, true);
    // }
    if (file_exists(($oldFile))) {
      unlink($oldFile);
    }
    $filePath = "assets/uploads/" . time() . "-" . $p_photo['name'];
    move_uploaded_file($p_photo['tmp_name'], $filePath);
  }
  $update = mysqli_query($koneksi, "UPDATE products SET category_id='$c_id',product_name='$p_name',product_price='$p_price',product_description='$p_description',product_photo ='$filePath' WHERE id=$id");
  if ($update) {
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
              <option <?php echo isset($_GET['edit']) && $p['category_id'] == $c['id'] ? 'selected' : '' ?> value="<?php echo $c['id'] ?>"><?php echo $c['category_name'] ?></option>
            <?php
            }
            ?>
          </select>
          <label for="form-label">Product Name</label>
          <input class="form-control" name="product_name" value="<?php echo $p ? $p['product_name'] : '' ?>" required>
          <label for="form-label">Photo</label>
          <br>
          <?php

          if ($p) {
            echo "<img src=" . $p['product_photo'] . " width='115'>";
          }
          ?>

          <input class="form-control" value="<?php echo $p ? intval($p['product_price']) : '' ?>" type="file"
            name="product_photo">
          <label for="form-label">Price</label>

          <input class="form-control" type="number" name="product_price" required>
          <label for="form-label">Description</label>
          <textarea class="form-control" name="product_description" cols="30" rows="5" required>
            <?php echo $p['product_description'] ?? '' ?></textarea>
          <button type="submit" name="<?php echo isset($_GET['edit']) ? 'update' : 'simpan' ?>" class="btn btn-primary mt-2"><?php echo isset($_GET['edit']) ? 'Edit' : 'ADD' ?></button>


        </div>
      </form>
    </div>
  </div>

</body>

</html>
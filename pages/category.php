<?php
// require_once 'config/koneksi.php';
$q_categories = mysqli_query($koneksi, "SELECT * FROM categories");
$categories = mysqli_fetch_all($q_categories, MYSQLI_ASSOC);
// var_dump($categories);
if (isset($_GET['delete'])) {
  $id = $_GET['delete'];
  $q_categories = mysqli_query($koneksi, "DELETE FROM categories WHERE id = $id");
  header("location:?page=category");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Category</title>
</head>

<body>

  <div class="row">
    <div class="col sm-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">
            Data Categories</h3>
        </div>
        <div class="card-body">
          <div align="d-flex justify-content-end m-2">
            <a href="?page=tambah-category" class="btn btn-primary">Add Categori</a>
            <table class="table table-bordered">

              <tr>
                <th>No</th>
                <th>Category Name</th>
                <th>Actions</th>
              </tr>
              <?php
              foreach ($categories as $key => $category) {
              ?>
                <tr>
                  <td><?php echo $key + 1 ?></td>
                  <td><?php echo $category['category_name'] ?></td>
                  <td>
                    <a href="?page=tambah-category&edit=<?php echo $category['id'] ?>" class="btn btn-success">Edit</a>
                    <form class="d-inline" action="?page=category&delete=<?php echo $category['id'] ?>" method="post" onclick="return confrim('Apakah Anda Ingin Menghapusnya?')">
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                  </td>
                <?php
              }
                ?>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
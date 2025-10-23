<?php
include '../config/koneksi.php';
//lebih dr 1
$queryCat = mysqli_query($koneksi, "SELECT * FROM categories");
$fetchCats = mysqli_fetch_all($queryCat, MYSQLI_ASSOC);

//queryproduct
$queryProducts = mysqli_query($koneksi, "SELECT c.category_name,
p.* FROM products p LEFT JOIN categories c ON c.id = p.category_id");
$fetchProducts = mysqli_fetch_all($queryProducts, MYSQLI_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Point Of Sale</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/wilda.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
    <div id="card">
        <!-- <h3>Nama Product</h3>
        <p>Description Product</p> -->
    </div>
    <!-- container-fluid -->
    <div class="container-fluid container-pos">
        <div class="row h-100">
            <div class="col-md-7 product-section">
                <div class="mb-4">
                    <h4 class="mb-3" id="product-title">
                        <i class="fas fa-store"></i>
                        Product
                    </h4>
                    <input type="text" id="searchProduct" class="form--control search-box" placeholder="Find Product...">
                </div>

                <div class="mb-5">
                    <button class="btn btn-primary category-btn active" onclick="filterCategory('all',this)">All menu</button>
                    <?php foreach ($fetchCats as $cat): ?>
                        <button class="btn btn-outline-primary category-btn" onclick="filterCategory('<?php echo $cat['category_name'] ?>',this)"><?php echo $cat['category_name'] ?></button>
                        <!-- this = penganti button utk diriny sendiri -->
                    <?php endforeach ?>
                    <button class="btn btn-outline-primary category-btn ">Drink</button>
                    <button class="btn btn-outline-primary category-btn ">Snack</button>
                </div>
                <div class="row" id="productGrid">

                </div>
            </div>
            <div class="col-md-5 cart-section">
                <div class="cart-header">
                    <h4>Shopping cart</h4>
                    <small>Order # <span class="OrderNumber">001</span></small>
                </div>
                <div class="cart-items" id="cartItems">
                    <div class="text-center text-muted mt-5">
                        <i class="bi bi-cart mb-3"></i>
                        <p>basket is still empty</p>
                    </div>
                </div>
                <div class="cart-footer">
                    <div class="total-section">
                        <div class="d-flex justify-content-between mb-2">
                            <span>Subtotal</span>
                            <span id="subtotal">Rp. 100.000,-</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Pajak (10%)</span>
                            <span id="subtotal">Rp. 10.000,-</span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Total</span>
                            <span id="Total">Rp. 110.000,-</span>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col-md-6">
                            <button class="btn btn-outline-danger w-100">
                                <i class="bi-bi-trash"></i>Clear Cart
                            </button>
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-checkout btn-primary w-100">
                                <i class="bi-bi-cash"></i>Proses Payment
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"
        integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y"
        crossorigin="anonymous"></script>

    <script>
        const products = <?php echo json_encode(($fetchProducts)) ?>
    </script>

    <script src="../assets/js/wilda.js"></script>
</body>

</html>
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

    <!-- container-fluid -->
    <div class="container-fluid container-pos">
        <div class="row h-100">
            <div class="col-md-7 product-section">
                <div class="mb-4">
                    <h4 class="mb-3">
                        <i class="fas fa-store"></i>
                        Product
                    </h4>
                    <input type="text" id="searchProduct" class="form--control search-box" placeholder="Find Product...">
                </div>
                <div class="mb-4">
                    <button class="btn btn-primary category-btn active">All menu</button>
                    <button class="btn btn-outline-primary category-btn ">Food</button>
                    <button class="btn btn-outline-primary category-btn ">Drink</button>
                    <button class="btn btn-outline-primary category-btn ">Snack</button>
                </div>
                <div class="row" id="productGrid">
                    <div class="col-md-4 col-sm-6">
                        <div class="card product-card">
                            <div class="product-img">
                                <img src="../assets/img/mie 1.jpg" alt="" width="100%">
                            </div>
                            <div class="card-body">
                                <span class="badge bg-secondary badge-category">Makanan</span>
                                <h6 class="card-title mt-2 mb-2">Mie Bangladesh</h6>
                                <p class="card-text text-primary fw-bold">Rp. 25.000,-</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="card product-card">
                            <div class="product-img">
                                <img src="../assets/img/rendang.jpg" alt="" width="100%">
                            </div>
                            <div class="card-body">
                                <span class="badge bg-secondary badge-category">Makanan</span>
                                <h6 class="card-title mt-2 mb-2">Rendang</h6>
                                <p class="card-text text-primary fw-bold">Rp. 35.000,-</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="card product-card">
                            <div class="product-img">
                                <img src="../assets/img/Asal_usul_gudeg.jpg" alt="" width="100%">
                            </div>
                            <div class="card-body">
                                <span class="badge bg-secondary badge-category">Makanan</span>
                                <h6 class="card-title mt-2 mb-2">Gudeg</h6>
                                <p class="card-text text-primary fw-bold">Rp. 30.000,-</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="card product-card">
                            <div class="product-img">
                                <img src="../assets/img/matcha.jpg" alt="" width="100%">
                            </div>
                            <div class="card-body">
                                <span class="badge bg-secondary badge-category">Minuman</span>
                                <h6 class="card-title mt-2 mb-2">Matcha</h6>
                                <p class="card-text text-primary fw-bold">Rp. 15.000,-</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="card product-card">
                            <div class="product-img">
                                <img src="../assets/img/red velvet.jpg" alt="" width="100%">
                            </div>
                            <div class="card-body">
                                <span class="badge bg-secondary badge-category">Makanan</span>
                                <h6 class="card-title mt-2 mb-2">Red Velvet</h6>
                                <p class="card-text text-primary fw-bold">Rp. 15.000,-</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="card product-card">
                            <div class="product-img">
                                <img src="../assets/img/coklat.jpg" alt="" width="100%">
                            </div>
                            <div class="card-body">
                                <span class="badge bg-secondary badge-category">Minuman</span>
                                <h6 class="card-title mt-2 mb-2">coklat</h6>
                                <p class="card-text text-primary fw-bold">Rp. 18.000,-</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="card product-card">
                            <div class="product-img">
                                <img src="../assets/img/jus mangga.jpg" alt="" width="100%">
                            </div>
                            <div class="card-body">
                                <span class="badge bg-secondary badge-category">Minuman</span>
                                <h6 class="card-title mt-2 mb-2">Jus Mangga</h6>
                                <p class="card-text text-primary fw-bold">Rp. 18.000,-</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="card product-card">
                            <div class="product-img">
                                <img src="../assets/img/airline.jpg" alt="" width="100%">
                            </div>
                            <div class="card-body">
                                <span class="badge bg-secondary badge-category">Minuman</span>
                                <h6 class="card-title mt-2 mb-2">Ariline</h6>
                                <p class="card-text text-primary fw-bold">Rp. 18.000,-</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="card product-card">
                            <div class="product-img">
                                <img src="../assets/img/semangka.jpg" alt="" width="100%">
                            </div>
                            <div class="card-body">
                                <span class="badge bg-secondary badge-category">Minuman</span>
                                <h6 class="card-title mt-2 mb-2">Semangka Juice</h6>
                                <p class="card-text text-primary fw-bold">Rp. 18.000,-</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="card product-card">
                            <div class="product-img">
                                <img src="../assets/img/kepiting.jpg" alt="" width="100%">
                            </div>
                            <div class="card-body">
                                <span class="badge bg-secondary badge-category">Makanan</span>
                                <h6 class="card-title mt-2 mb-2">Kepiting Saus Padang</h6>
                                <p class="card-text text-primary fw-bold">Rp. 58.000,-</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="card product-card">
                            <div class="product-img">
                                <img src="../assets/img/burgerking.jpg" alt="" width="100%">
                            </div>
                            <div class="card-body">
                                <span class="badge bg-secondary badge-category">Makanan</span>
                                <h6 class="card-title mt-2 mb-2">Burger King</h6>
                                <p class="card-text text-primary fw-bold">Rp. 30.000,-</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="card product-card">
                            <div class="product-img">
                                <img src="../assets/img/seblak.jpg" alt="" width="100%">
                            </div>
                            <div class="card-body">
                                <span class="badge bg-secondary badge-category">Makanan</span>
                                <h6 class="card-title mt-2 mb-2">Seblak</h6>
                                <p class="card-text text-primary fw-bold">Rp. 10.000,-</p>
                            </div>
                        </div>
                    </div>
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
        // javascript variable : let,var, const
        // php variable : $, define, const

        let nama = "Wilda Khamisah";
        var name = "Tedy Pratama P";
        const fullname = "arza";
        //const sifatnya tetap , tidak berubah nilai

        //echo jvsc 
        // console.log(name); // ini yg sering d jvsc
        //ini kalau menampilkan 2 objek sekaligus
        // console.log({
        //     "name": name,
        //     "fullname": fullname
        // });
        // 

        //operator
        let angka1 = 10;
        let angka2 = 20;
        console.log(angka1 + angka2);
        console.log(angka1 - angka2);
        console.log(angka1 / angka2);
        console.log(angka1 * angka2);
        console.log(angka1 % angka2);
        console.log(angka1 ** angka2);

        //operator penuganasan
        let x = 10;
        x += 5; //15
        console.log(x);

        //operator pembandingan
        // >, <, =, ===, !==
        let a = 1;
        let b = 1;
        if (a === b) {
            console.log("ya")
        } else {
            console.log("tidak");
        }
        // a = 2;
        // b = 1;
        console.log(a > b)
        console.log(a < b)


        //operator logika
        //&&, AND, OR, ||, ! =Not
        let umur = 20;
        let punySim = true;
        if (umur >= 17 && punySim) {
            console.log("boleh balapan");
        } else {
            console.log("tidak boleh balapan");
        }

        //array = sebuah tipe data yang bisa memiliki nilainya lebih dari 1
        let buah = ['pisang', 'salak', 'semangka'];
        //   0         1        2
        console.log("buah dikeranjang", buah);
        console.log("saya mau buah:", buah[0]);
        buah[1] = "nanas";
        console.log("buah baru:", buah);
        console.log("saya mau buah:", buah[2]);
        //menambahkan buah
        buah.push('sirsak');
        console.log("buah", buah);
        //menghapus index terakhir
        buah.pop();
        console.log("buah", buah);
    </script>
</body>

</html>
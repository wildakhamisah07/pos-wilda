 // javascript variable : let,var, const
        // php variable : $, define, const

        // let nama = "Wilda Khamisah";
        // var name = "Tedy Pratama P";
        // const fullname = "arza";
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
        // let angka1 = 10;
        // let angka2 = 20;
        // console.log(angka1 + angka2);
        // console.log(angka1 - angka2);
        // console.log(angka1 / angka2);
        // console.log(angka1 * angka2);
        // console.log(angka1 % angka2);
        // console.log(angka1 ** angka2);

        //operator penuganasan
        // let x = 10;
        // x += 5; //15
        // console.log(x);

        //operator pembandingan
        // >, <, =, ===, !==
        // let a = 1;
        // let b = 1;
        // if (a === b) {
        //     console.log("ya")
        // } else {
        //     console.log("tidak");
        // }
        // a = 2;
        // b = 1;
        // console.log(a > b)
        // console.log(a < b)


        //operator logika
        //&&, AND, OR, ||, ! =Not
        // let umur = 20;
        // let punySim = true;
        // if (umur >= 17 && punySim) {
        //     console.log("boleh balapan");
        // } else {
        //     console.log("tidak boleh balapan");
        // }

        //array = sebuah tipe data yang bisa memiliki nilainya lebih dari 1
        // let buah = ['pisang', 'salak', 'semangka'];
        //   0         1        2
        // console.log("buah dikeranjang", buah);
        // console.log("saya mau buah:", buah[0]);
        // buah[1] = "nanas";
        // console.log("buah baru:", buah);
        // console.log("saya mau buah:", buah[2]);
        //menambahkan buah
        // buah.push('sirsak');
        // console.log("buah", buah);
        //menghapus index terakhir
        // buah.pop();
        // console.log("buah", buah);
        //========================================================================================================
        //DAY 2 BELAJAR JS +DEMO
        //========================================================================================================

           // ->: php
            // . = js
            //iner html (memasukan html ke h4 )
        // document.getElementById("product-title").innerHTML="<p>Data Product didalam Element P</p>";
        //inner text (memasukan text aja) = sama aja
        // document.getElementById("product-title").innerText="Data Product";

        //terserah pilih yg mana antara diatas dn d bawh bedany kalau selektor pake #
        // document.querySelector("#product-title");

        //BAGAIMANA MENGAKSES CLASS KE JS
        // let btn = document.getElementsByClassName("category-btn");
        // btn[2].style.color ="red";
        // btn[0].style.color ="brown";
        // btn[1].style.color ="black";
        //ini wrna button seluruhnya, terserah milih yg mana
        // console.log("ini button", btn);
        // let buttons = document.querySelectorAll(".category-btn");
        // button.forEach(function(btn){});
//         buttons.forEach((btn)=>{
//             btn.style.color="brown";
//         console.log(btn);
// });
//         let card =document.getElementById("card");
//         let h3 = document.createElement("h3"); //<h3></h3>
//         let textH3 = document.createTextNode("Selamat Datang");
//         h3.textContent = "selamat datang dengan textcontent";

//         let p = document.createElement("p");
//         p.innerText ="rawwr";
//         p.textContent="Nuallll jadi";
        //nambahin element dalam card
        // card.appendChild(h3);
        // card.appendChild(p);

        //terserah ppilih yg mana
        // document.querySelector(".category-btn");

        let currentCategory = "all"
        function filterCategory(category,event){
            currentCategory=category;
            let buttons = document.querySelectorAll(".category-btn");
            buttons.forEach((btn)=>{
                btn.classList.remove("active");
                btn.classList.remove("btn-primary");
                btn.classList.add("btn-outline-primary");
                
            })
            event.classList.add("active");
            event.classList.remove("btn-outline-primary");
            event.classList.add("btn-primary");
            
            console.log({currentCategory: currentCategory,category:category,event:event});

            renderProducts();
        }

        function renderProducts(searchProduct=""){
            const productGrid= document.getElementById("productGrid");
            productGrid.innerHTML="";

            //filter
            const filtered = products.filter((p)=>{
                //shorthand/ternery
                const matchCategory = currentCategory === "all" || p.category_name === currentCategory;
                const matchSearch = p.product_name.toLowerCase().includes(searchProduct);
                return matchCategory && matchSearch;
            });


            //munculin data dr produtcs
            filtered.forEach((product)=>{
                const col = document.createElement("div");
                col.className = "col-md-4 col-sm-6";
                col.innerHTML=`<div class="card product-card">
                <div class="product-img">
                <img src="../${product.product_photo}" alt="" width="100%">
                </div>
                <div class="card-body">
                <span class="badge bg-secondary badge-category">Makanan</span>
                <h6 class="card-title mt-2 mb-2">${product.product_name}</h6>
                <p class="card-text text-primary fw-bold">${product.product_price}</p>
                </div>
                </div>`;

                productGrid.appendChild(col);
            });

            // console.log(products);
            
        }

        //delotdiawal react = useEffect(() ={
        //},[])

        //DomContentloaded : akan meload function pertama kali.
        //kalau tdk pake dom jg gpp. pake aja functionnya
        renderProducts();
        ///nambah input pas d ketik nama maka muncul
        document.getElementById('searchProduct').addEventListener('input',function(e){
            const searchProduct =e.target.value.toLowerCase();
            renderProducts(searchProduct);
            
        });

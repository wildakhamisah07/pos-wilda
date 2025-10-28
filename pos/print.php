<?php

session_start();
include '../config/koneksi.php';
$query = mysqli_query($koneksi, "SELECT * FROM orders ORDER BY id DESC LIMIT 1");
$row = mysqli_fetch_assoc($query);

// Cek apakah data pesanan ditemukan
if ($row) {

    $order_id = $row['id'];
    $queryDetails = mysqli_query($koneksi, "SELECT p.product_name, od.* FROM order_details od LEFT JOIN products p ON p.id = od.product_id WHERE order_id = '$order_id'");
    $rowDetails = mysqli_fetch_all($queryDetails, MYSQLI_ASSOC);
    $sub_total = 0;
    foreach ($rowDetails as $item) {
        $sub_total += ($item['order_price'] * $item['qty']);
    }
    $grand_total = $row['order_amount'];
} else {
    $order_id = null;
    $rowDetails = [];
    $sub_total = 0;
    $grand_total = 0;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Struk Payment</title>
    <style>
        body {
            font-family: 'Courier New', monospace;
            font-size: 12px;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            background: white;
            margin: 0;
            padding: 0;
            height: 100vh;
        }

        .struck-page {
            width: 80mm;
            max-width: 300px;
            text-align: center;
            margin: 0 auto;
            padding: 5px;
        }

        .header img {
            width: 60px;
            height: 60px;
            object-fit: contain;
            margin-bottom: 5px;
        }

        .header h2 {
            margin: 0;
            font-weight: bold;
        }

        .info,
        .items,
        .payment {
            text-align: left;
            margin: 10px 0;
        }

        .info-row,
        .item,
        .total-row {
            display: flex;
            justify-content: space-between;
        }

        .item-name {
            flex: 1;
        }

        .item-qty {
            margin: 0 10px;
        }

        .item-price {
            text-align: right;
            min-width: 80px;
        }

        .separator {
            border-top: 1px dashed #000;
            margin: 6px 0;
        }

        .total-row.grand {
            font-weight: bold;
            font-size: 16px;
            margin: 10px 0;
        }

        .footer {
            text-align: center;
            font-size: 11px;
            margin-top: 10px;
        }

        /* Bagian penting agar struk selalu di tengah saat print */
        @media print {
            @page {
                size: 80mm auto;
                margin: 0;
            }

            body {
                display: flex;
                justify-content: center;
                align-items: flex-start;
                background: white;
            }

            .struck-page {
                margin: 0 auto;
                box-shadow: none;
            }
        }
    </style>
</head>

<body onload="window.print()">
    <div class="struck-page">
        <div class="header">
            <img src="../assets/img/logo kopi.jpg" alt="Logo Wilda CoffeeTimes">
            <h2>Wilda CoffeeTimes</h2>
            <p>087-7833-2323</p>
            <p>Jl. Kopi Bahagia No. 10, Jakarta</p>
        </div>

        <div class="separator"></div>

        <div class="info">
            <?php if ($row) : ?>
                <div class="info-row">
                    <?php
                    $date = date("d-m-Y", strtotime($row['order_date']));
                    $time = date("H:i:s", strtotime($row['order_date']));
                    ?>
                    <span><?php echo $date ?></span>
                    <span><?php echo $time ?></span>
                </div>
                <div class="info-row">
                    <span>Transaction ID</span>
                    <span><?php echo $row['order_code'] ?></span>
                </div>
            <?php endif; ?>
            <div class="info-row">
                <span>Cashier</span>
                <span><?php echo $_SESSION['NAME'] ?? 'Kasir' ?></span>
            </div>
        </div>

        <div class="separator"></div>

        <div class="items">
            <?php
            foreach ($rowDetails as $item):
            ?>
                <div class="item">
                    <span class="item-name"><?php echo $item['product_name'] ?></span>
                    <span class="item-qty"><?php echo $item['qty'] ?></span>
                    <span class="item-price">Rp. <?php echo number_format($item['order_price'] * $item['qty']) ?></span>
                </div>
            <?php endforeach ?>
        </div>

        <div class="separator"></div>

        <div class="totals">
            <div class="total-row">
                <span>Sub Total</span>
                <span>Rp <?php echo number_format($sub_total) ?></span>
            </div>
            <div class="total-row">
                <span>PPN (Include)</span>
                <span>-</span>
            </div>
        </div>

        <div class="separator"></div>

        <div class="payment">
            <div class="total-row grand">
                <span>Total</span>
                <span>Rp. <?php echo number_format($grand_total) ?></span>
            </div>
            <!-- <div class="total-row">
                <span>Cash</span>
                <span>Rp 100.000</span>
            </div>

            <div class="total-row">
                <span>Change</span>
                <span>Rp 30.000</span>
            </div> -->
            <div class="separator"></div>

            <div class="footer">
                <p>Terima kasih telah berkunjung ☕</p>
                <p>Follow kami di Instagram: <b>@WildaCoffeeTimes</b></p>
                <p>Semoga harimu menyenangkan 💛</p>
            </div>
        </div>
    </div>
    </div>

</body>

</html>
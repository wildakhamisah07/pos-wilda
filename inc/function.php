<?php

//isset = ada/tdk kosong
//!isset kalau pake ini = kosong/belum login
//jika session kosong
function checkLogin()
{
    if (!isset($_SESSION['ID'])) {
        header("location:index.php?access=failed");
    }
}

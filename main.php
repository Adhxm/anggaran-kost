<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>perhitungan pengeluaran untuk anak kost</title>
    <link rel="stylesheet" href="style.cssm">
    <style>
    *{
    margin: 0;
    padding: 0;
    }
    html{
        height:659px;
    }
    nav{
        display: flex;
        justify-content: space-between;
        background-color: blue;
        position: relative;
        width: 100%;
        height: 60px;
    }
    nav .logo a{
        color: aqua;
        text-decoration: none;
    }
    .inputan{
        margin-top: 5px;
    }
    </style>
</head>
<body>
    <div class="contrainer">

        <nav>
            <div class="logo">
                <a href="#">Program kalkulasi pengeluaran sederhana</a>
                <br>
                <a href="#">untuk anak kost</a>
            </div>
        </nav>



        <div class="inputan">
            <form method="post" action="main.php">
            <label> Nama :
                <input type="text" name="nama" placeholder="Masukkan nama anda" required> <br>
            </label>
            <label> isi dompet :
                <input type="number" name="uang" placeholder="Masukkan nominal anda" required> <br>
            </label>
            <label> Harga kost perBulan :
                <input type="number" name="harga_kost_perbulan" placeholder="Masukkan nominal anda" required> <br>
            </label>
            <label> Pengeluaran perhari :<br>
                <input type="number" name="makan" placeholder="Biaya makan perhari" required> <br>
                <input type="number" name="uang_parkir" placeholder="Biaya parkir perhari" required> <br>
                <input type="number" name="jajan" placeholder="Biaya jajan perhari" required> <br>
                <input type="number" name="lain" placeholder="Biaya lain perhari" required> <br>
            </label>
            <label> Pengeluaran perminggu :<br>
                <input type="number" name="galon_air_minum" placeholder="Harga galon air minum" required> <br>
                <input type="number" name="sabun_mandi" placeholder="Harga sabun mandi" required> <br>
            </label>
            <label> Pengeluaran perbulan :<br>
                <input type="number" name="pasta_gigi" placeholder="Harga pasta gigi" required> <br>
                <input type="number" name="shampo" placeholder="Harga shampo per renteng" required> <br>
                <input type="number" name="listrik" placeholder="Harga token listrik" required> <br>
                <input type="number" name="air" placeholder="Harga token air" required> <br>
                <input type="number" name="sabun_cuci_baju" placeholder="Harga sabun cuci baju" required> <br>
                <input type="number" name="kuota" placeholder="Harga kuota internet" required> <br>
            </label>
            <label>
                <input type="submit" name="submit"> <br>
            </label>
            </form>
        </div>
    </div>
    <br>
    <h3>Hasil perhitungan</h3>
    
    <?php
    //perhitungan pengeluaran dan pemasukan untuk anak kost kostan
    
    //variabel
    $nama = $_POST['nama'];
    $uang = $_POST['uang'];

    //perhari
    $makan = $_POST['makan'];
    $uang_parkir = $_POST['uang_parkir'];
    $jajan = $_POST['jajan'];
    $biaya_lain = $_POST['lain'];
    
    //perminggu
    $galon = $_POST['galon_air_minum'];
    $sabun_mandi = $_POST['sabun_mandi'];
    
    //perbulan
    $pasta_gigi = $_POST['pasta_gigi'];
    $shampo = $_POST['shampo'];
    $listrik = $_POST['listrik'];
    $air = $_POST['air'];
    $sabun_cuci_baju = $_POST['sabun_cuci_baju'];
    $harga_kost_perbulan = $_POST['harga_kost_perbulan'];
    $kuota = $_POST['kuota'];

    //kalkulasi
    $total_pengeluaran_perhari = $makan + $uang_parkir + $jajan + $biaya_lain;
    $total_pengeluaran_perminggu = $galon + $sabun_mandi ;
    $total_pengeluaran_perbulan = $shampo + $listrik + $air + $sabun_cuci_baju + $pasta_gigi + $kuota;
    $total_biaya_perbulan = $harga_kost_perbulan + $total_pengeluaran_perhari + $total_pengeluaran_perminggu + $total_pengeluaran_perbulan;
    $tagihan = $uang - $total_biaya_perbulan;

    echo("<br>");
    echo("jumlah uang anda adalah : $uang").("<br>");
    echo("total pengeluaran perhari adalah : $total_pengeluaran_perhari").("<br>");
    echo("total pengeluaran perminggu adalah : $total_pengeluaran_perminggu").("<br>");
    echo("total pengeluaran perbulan adalah : $total_pengeluaran_perbulan").("<br>");
    echo("total semua pengeluaran perbulan adalah : $total_biaya_perbulan").("<br>");
    echo("uang anda tersisa : $tagihan");
    ?>
</body>
</html>
<?php include 'header.php'; ?>

<div class="container mt-3">
    <h1>Halaman Produk</h1>
    <p>Berikut produk yang kami jual.</p>
    <!-- Isi konten produk di sini -->
</div>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="styleproduct.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1 Tabel Harga Barang Elektronik</title>
</head>

<body>
    <table>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama Barang</th>
            <th class="text-center">Harga</th>
            <th class="text-center">Jumlah</th>
            <th class="text-center">Sub Total</th>
        </tr>
        <?php
        $barang = array(
            array("No" => 1, "Kode" => "B001", "Nama Barang" => "Laptop Asus", "Harga" => 9000000, "Jumlah" => 3),
            array("No" => 2, "Kode" => "B002", "Nama Barang" => "Keyboard Logitech", "Harga" => 850000, "Jumlah" => 4),
            array("No" => 3, "Kode" => "B003", "Nama Barang" => "Speaker", "Harga" => 500000, "Jumlah" => 6),
            array("No" => 4, "Kode" => "B004", "Nama Barang" => "Printer Epson", "Harga" => 3000000, "Jumlah" => 7),
        );

        function subtotal($harga_barang, $jumlah)
        {
            $total = $harga_barang * $jumlah;
            return $total;
        }

        $total = 0;
        ?>

        <?php
        foreach ($barang as $subAray) {
            ?>
        <tr>
            <td>
                <?php echo $subAray["No"]; ?>
            </td>
            <td>
                <?php echo $subAray["Kode"]; ?>
            </td>
            <td>
                <?php echo $subAray["Nama Barang"]; ?>
            </td>
            <td class="text-right">
                Rp. <?php echo $subAray["Harga"]; ?>
            </td>
            <td class="text-center">
                <?php echo $subAray["Jumlah"]; ?>
            </td>
            <td class="text-right">
                Rp. <?= $subTotal = subTotal($subAray["Harga"], $subAray["Jumlah"]) ?>
            </td>
        </tr>
        <?php $total += $subTotal ?>
        <?php
        }
        ?>
        <tr>
            <th colspan="5" class="text-right">TOTAL</th>
            <td class="text-right">
                    Rp. <?= $total ?>
            </td>
        </tr>
    </table>
</body>
</html>

<?php include 'footer.php'; ?>

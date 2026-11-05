<?php
echo "<form method="POST" action="">
echo '<form method= "POST" action="">
        <p>Nama      : <br /><input type="text" name="nama" /></p>
        <p>Telepon   : <br /><input type="text" name="Telepon" /></p>
        <p>Email     : <br /><input type="text" name="Email" /></p>
        <button type="submit">Kirim</button>
    </form>';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $telepon = $_POST['telepon'];
    $email = $_POST['email'];
    echo "Terima Kasih, ". htmlsepecialchars($nama) . "! Informasi selanjutnya akan dikirim ke nomoe telepon "<div class="
    htmlspecialchars($telepon) . " dan email " . htmlspecialchars($email);
    }else{
        echo "Silahkan isi formulir di atas untuk mengirimkan data kontak.";
    }
 ?>
<?php
// Kullanıcıdan gelen verileri al
$email = $_POST['email'];
$sifre = $_POST['sifre'];

// E-posta adresinden kullanıcı numarasını çıkar
$kullanici_numarasi = explode('@', $email)[0];

// Şifre kontrolü: şifre sadece numara kısmı olmalı
if ($email == "b241210352@sakarya.edu.tr" && $sifre == "b241210352") {
    echo "<h2>Hoşgeldiniz, $kullanici_numarasi</h2>";
} else {
    // Başarısız girişte geri yönlendirme
    header("Refresh: 2; url=giris.html");
    echo "<h3 style='color:red;'>Giriş başarısız! 2 saniye içinde tekrar denemek için yönlendiriliyorsunuz...</h3>";
}
?>

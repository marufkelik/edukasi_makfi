<?php
// Ambil data JSON dari body request
$data = json_decode(file_get_contents("php://input"), true);

if ($data) {
    $name = htmlspecialchars($data['name']);
    $phone = htmlspecialchars($data['phone']);
    $email = htmlspecialchars($data['email']);
    $message = htmlspecialchars($data['message']);

    // Simpan ke file (bisa juga ke database)
    $entry = "Nama: $name\nNomor HP: $phone\nEmail: $email\nPesan: $message\n\n";
    file_put_contents("kritik_saran.txt", $entry, FILE_APPEND);

    echo "Ahay, berhasil dikirim gaes";
} else {
    echo "Data ada yang miss nih pasti.";
}
?>

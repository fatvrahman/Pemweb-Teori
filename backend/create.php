<?php

require './../config/db.php';

if (isset($_POST['submit'])) {
    global $db_connect;

    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_FILES['image']['name'];
    $tempImage = $_FILES['image']['tmp_name'];

    $randomFilename = time() . '-' . md5(rand()) . '-' . $image;

    // Perbaikan path ke folder upload
    $uploadPath = $_SERVER['DOCUMENT_ROOT'] . '/web-programming-course-pertemuan-7/upload/' . $randomFilename;

    $upload = move_uploaded_file($tempImage, $uploadPath);

    if ($upload) {
        $query = "INSERT INTO products (name, price, image) VALUES ('$name', '$price', '/web-programming-course-pertemuan-7/upload/$randomFilename')";
        mysqli_query($db_connect, $query);
        
        // Redirect ke halaman sukses
        header("Location: ../success.php?name=" . urlencode($name));
        exit();
    } else {
        echo "Gagal mengunggah produk. Coba lagi.";
    }
}

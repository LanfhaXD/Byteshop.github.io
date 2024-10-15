<?php
session_start();
$conn = mysqli_connect("127.0.0.1", "root", "", "project");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // ตรวจสอบข้อมูลผู้ใช้จากฐานข้อมูล
    $sql = "SELECT * FROM customer WHERE cus_email = '$email' AND cus_pass = '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        // เก็บชื่อผู้ใช้ในเซสชัน
        $_SESSION['username'] = $row['cus_name'] . ' ' . $row['cus_sur']; // นามสกุล
        header("Location: index.php"); // เปลี่ยนไปหน้า index.php
        exit();
    } else {
        echo "อีเมลหรือรหัสผ่านไม่ถูกต้อง";
    }
}

mysqli_close($conn);
?>

<?php

if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];
    $results = select("SELECT * FROM accounts WHERE account_name = '$name'");
    if ($results) {
        foreach ($results as $result) :
            if ($password == $result['password']) {
                if ($result['role'] == "admin") {
                    session_start();
                    $_SESSION['username'] = $result['account_name'];
                    $_SESSION['role'] = $result['role'];
                    header("Location: /pages/admin/dashboard.php");
                } else if ($result['role'] == "class lead") {
                    session_start();
                    $_SESSION['username'] = $result['account_name'];
                    $_SESSION['role'] = "Ketua Tingkat";
                    header("Location: /pages/user.php");
                } else if ($result['role'] == "student") {
                    session_start();
                    $_SESSION['username'] = $result['account_name'];
                    $_SESSION['role'] = "Mahasiswa";
                    header("Location: /pages/user.php");
                }
            } else {
                echo "<script>Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    confirmButtonColor: '#000',
                    showClass: {
                        popup: 'animate__animated animate__headShake'
                    },
                    text: 'Password salah!'
                });</script>";
            }
        endforeach;
    } else {
        echo "<script>Swal.fire({
            icon: 'question',
            title: 'Oops...',
            confirmButtonText: 'Buat Akun',
            showCancelButton: true,
            confirmButtonColor: '#000',
            showClass: {
                popup: 'animate__animated animate__headShake'
            },
            text: 'Akun tidak ditemukan!'
        }).then((result) => {
            if (result.isConfirmed) {
                $('#form-container').load('/components/auth/register.php');
            }
        });</script>";
    }
}

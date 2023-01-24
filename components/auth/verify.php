<?php
$login = 0;
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];
    $results = select("SELECT * FROM accounts WHERE account_name = '$name'");
    if ($results) {
        foreach ($results as $result):
            if ($password == $result['password']) {
                if ($result['role'] == "admin") {
                    session_start();
                    $_SESSION['username'] = $result['account_name'];
                    $_SESSION['role'] = $result['role'];
                    header("Location: /admin/dashboard.php");
                } else if ($result['role'] == "class lead") {
                    session_start();
                    $_SESSION['username'] = $result['account_name'];
                    $_SESSION['role'] = $result['role'];
                    header("Location: /components/dynamic/user.php");
                } else if ($result['role'] == "student") {
                    session_start();
                    $_SESSION['username'] = $result['account_name'];
                    $_SESSION['role'] = $result['role'];
                    header("Location: /components/dynamic/user.php");
                }
            } else {
                echo "<script>Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Wrong Password!'
                });</script>";
            }
        endforeach;
    } else {
        echo "<script>Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Account Not Found!'
        });</script>";
    }
}
?>
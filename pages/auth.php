<?php

$status = $_POST['stat'];
// var_dump($status);
session_start();

if ((($_SESSION['role'] == 'Ketua Tingkat') || ($_SESSION['role'] == 'Mahasiswa')) && ($status != 'auth')) {
    header("Location: /pages/user.php");
} else {
    session_destroy();
}

include '../controller/controller.php';
include '../components/auth/verify.php';

?>

<div class="w-full h-screen flex bg-[#fafafa]">
    <div class="w-1/2 h-full bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 flex items-center justify-center">
        <div class="w-3/4 h-4/6 backdrop-filter backdrop-blur-md bg-opacity-50 rounded-3xl bg-[#14121e] text-[#fafafa] flex items-end">
            <div class="flex flex-col pb-10 pl-10">
                <p class="text-2xl font-light">Selamat datang di</p>
                <p class="text-7xl font-semibold">LearNt</p>
                <p class="">Learning Note untuk kelasmu</p>
            </div>
        </div>
    </div>

    <div id="form-container" class="w-1/2"></div>
</div>

<script>
    $(document).ready(function() {
        $("#form-container").load('../components/auth/login.php')

    });

    $(document).on("click", ".regist-btn", function(e) {
        e.preventDefault()
        $("#form-container").load('../components/auth/register.php')
    });

    $(document).on("click", ".login-btn", function(e) {
        e.preventDefault()
        $("#form-container").load('../components/auth/login.php')
    });
</script>
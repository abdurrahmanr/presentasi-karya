<?php
session_start();
?>

<div class="w-full flex">
    <div class="w-full h-screen pt-12 px-12">
        <div class="flex items-center justify-between">
            <p class="title text-2xl font-bold font">Kelas</p>
            <div id="profile" class="cursor-pointer flex items-center gap-5 justify-end">
                <div class="leading-tight">
                    <p class="font-bold"><?= $_SESSION['username'] ?></p>
                    <p><?= $_SESSION['role'] ?></p>
                </div>
                <img class="w-12 h-12 rounded-2xl" src="../assets/img/profile.png" alt="">
            </div>
        </div>

        <div class="grid grid-cols-2 gap-5 pt-12">
            <?php include '../components/class-card.php' ?>
            <?php include '../components/class-card.php' ?>
            <?php include '../components/class-card.php' ?>
        </div>
    </div>
</div>
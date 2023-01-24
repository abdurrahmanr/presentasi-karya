<div class="w-full flex flex-col">
    <div class="w-full pt-12 px-12">
        <div class="flex items-center justify-between">
            <p class="title text-2xl font-bold font">Beranda</p>
            <div id="profile" class="cursor-pointer flex items-center gap-5 justify-end">
                <div class="leading-tight">
                    <p class="font-bold">Abdurrahman Rahim</p>
                    <p>Mahasiswa</p>
                </div>
                <img class="w-12 h-12 rounded-2xl" src="../assets/img/profile.png" alt="">
            </div>
        </div>
    </div>

    <div class="flex">
    <div class="w-1/2 h-full pt-12 pl-12 pr-12">
        <div class="flex flex-col gap-5">
            <p class="title text-lg font-bold font">Kelas Hari Ini</p>
            <?php include '../components/card.php' ?>
            <?php include '../components/card.php' ?>
            <?php include '../components/card.php' ?>
        </div>
    </div>
    <div class="w-1/2 h-full pt-12 pr-12 relative">

        <!-- <div class="flex items-center justify-between">
            <p class="title text-2xl font-bold font">Tugas Mendatang</p>
            <a href="" class="">Lihat Semua</a>
        </div> -->
        <div class="flex flex-col gap-5">
            <p class="title text-lg font-bold font">Tugas Mendatang</p>
            <?php include '../components/deadline-card.php' ?>
            <?php include '../components/deadline-card.php' ?>
        </div>
    </div>
    </div>
</div>
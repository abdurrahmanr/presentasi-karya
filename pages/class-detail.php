<?php
session_start();

include '../controller/controller.php';

if (isset($_POST['task'])) {
    if (create($_POST) > 0) {
        echo "<script>
        Swal.fire(
            'Good job!',
            'Tugas berhasil ditambahkan!',
            'success'
          )
        </script>";
    } else {
        echo "gagal";
    }
}

if (isset($_POST['deleteId'])) {
    if (deleteData($_POST['deleteId']) > 0) {
        echo "<script>
        Swal.fire(
            'Good job!',
            'Tugas berhasil dihapus!',
            'success'
          )
        </script>";
    } else {
        echo "gagal";
    }
}

if (isset($_POST['checkId'])) {
    if (checkTask($_POST['checkId']) > 0) {
        echo 'checked';
    }
}

$assigned = select("SELECT * FROM tasks WHERE `status` = '0'");
$completed = select("SELECT * FROM tasks WHERE `status` = '1'");
?>

<div class="w-full flex">
    <div class="w-full h-fit rounded-l-2xl bg-[#fafafa] pt-12 pl-12 pr-12">
        <div class="flex items-center justify-between h-12">
            <div class="flex items-center h-full">
                <a href="" class="back-btn bg-[#14121e] rounded-full h-3/4 flex items-center">
                    <i class="bi bi-arrow-left back-button"></i></a>
                <!-- <p class="title text-2xl font-bold font">Statistika & Probabilitas</p> -->
            </div>
            <div id="profile" class="cursor-pointer flex items-center gap-5 justify-end">
                <div class="leading-tight">
                    <p class="font-bold"><?= $_SESSION['username'] ?></p>
                    <p><?= $_SESSION['role'] ?></p>
                </div>
                <img class="w-12 h-12 rounded-2xl" src="../assets/img/profile.png" alt="">
            </div>
        </div>

        <div class="flex pt-10 pb-10">
            <div class="flex flex-col w-2/4">
                <div class="flex items-center justify-between">
                    <ul class="selection flex gap-5 text-base relative w-fit">
                        <div id="marker"></div>
                        <li class="selected cursor-pointer" data-id="1">Diberikan</li>
                        <li class="cursor-pointer" data-id="2">Selesai</li>
                    </ul>
                    <p id="add-task" class="py-1 px-2 rounded-xl text-white bg-[#14121e]">Tambah</p>
                </div>
                <div class="tab pt-10">
                    <div class="tab-content active-tab flex flex-col gap-4" data-content="1">
                        <?php
                        foreach ($assigned as $res) {
                            include '../components/task-detail.php';
                        }
                        ?>
                    </div>
                    <div class="tab-content flex flex-col gap-4" data-content="2">
                        <?php
                        foreach ($completed as $res) {
                            include '../components/task-detail.php';
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div class="pt-10 w-1/2 flex flex-col items-center">
                <div class="w-5/6 bg-[#f4f5f6] rounded-xl">
                    <div class="pl-10 py-10 w-full">
                        <p class="font-bold">Deskripsi Kelas</p>
                        <p>Pengajar : Nama</p>
                        <p>Jumlah Siswa : 12</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    var marker = document.querySelector("#marker");
    var item = document.querySelectorAll(".selection li");
    // var active = document.querySelector(".selected")

    function indicator(e) {
        marker.style.left = e.offsetLeft + "px";
        marker.style.width = e.offsetWidth + "px";
    }

    item.forEach(link => {
        link.addEventListener("click", (e) => {
            document.querySelector('.selected').classList.remove('selected');
            link.classList.toggle("selected");
            indicator(e.target);
        })
    })
</script>
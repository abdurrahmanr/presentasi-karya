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
                    <p class="font-bold">Abdurrahman Rahim</p>
                    <p>Mahasiswa</p>
                </div>
                <img class="w-12 h-12 rounded-2xl" src="../assets/img/profile.png" alt="">
            </div>
        </div>

        <div class="flex pt-10 pb-10">
            <div class="flex flex-col w-3/4">
                <ul class="selection flex gap-5 text-base relative w-fit">
                    <div id="marker"></div>
                    <li class="selected cursor-pointer" data-id="1">Diberikan</li>
                    <li class="cursor-pointer" data-id="2">Selesai</li>
                </ul>
                <div class="tab pt-10">
                    <div class="tab-content active flex flex-col gap-4" data-content="1">
                        <?php include '../components/task-detail.php' ?>
                        <?php include '../components/task-detail.php' ?>
                        <?php include '../components/task-detail.php' ?>
                    </div>
                    <div class="tab-content flex flex-col gap-4" data-content="2">
                        <?php include '../components/task-detail.php' ?>
                    </div>
                </div>
            </div>

            <div class="pt-10">
                <p class="font-bold">Deskripsi Kelas</p>
                <p>Pengajar: Nama</p>
                <p>Jumlah Siswa: 12</p>
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
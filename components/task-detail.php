<div id="" class="w-full h-fit shadow flex flex-col items-center rounded-xl duration-300 ease-in-out">
    <div class="h-16 w-full relative flex items-center justify-between bg-[#ffefe2] rounded-xl shadow-md accordion-head">
        <p class="pl-10 font-bold text-sm relative w-full"><?= $res['task_name'] ?></p>
        <?php
        if ($_SESSION["role"] == "Ketua Tingkat") {
        ?>
            <div class="absolute right-28 flex gap-4 items-center justify-between w-2/12 text-white">
                <p id="edit-task" class="bg-black px-3 py-1 pb-2 rounded-full shadow">Edit</p>
                <p id="delete-task" data-id="<?= $res['task_id'] ?>" class="bg-red-600 py-1 px-3 pb-2 rounded-full shadow">Hapus</p>
            </div>
        <?php } ?>
        <span class="material-symbols-outlined absolute right-5">expand_more</span>
    </div>
    <div class="accordion-body p-5 hidden">
        <p><strong>Judul : </strong><?= $res['task_name'] ?></p>
        <!-- <p><strong>Deadline :</strong></p> -->
        <strong>Deskripsi :</strong>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt, sed.</p>
        <div class="w-full pt-2">
            <p id="button-status" class="bg-black cursor-pointer w-fit text-white px-2 pt-1 pb-2 rounded-full" data-status="<?= $res['task_id'] ?>">Selesaikan</p>
        </div>
    </div>
</div>
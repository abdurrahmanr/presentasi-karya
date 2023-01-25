<div id="" class="w-full h-fit shadow flex flex-col items-center rounded-xl duration-300 ease-in-out">
    <div class="h-16 w-full relative flex items-center justify-between bg-[#ffefe2] rounded-xl shadow-md accordion-head">
        <p class="pl-10 font-bold text-sm relative w-full"><?= $res['task_name'] ?></p>
        <?php
        if ($_SESSION["role"] == "Ketua Tingkat") {
        ?>
            <div class="absolute right-16 flex items-center justify-between w-2/12">
                <p id="edit-task">edit</p>
                <p id="delete-task" data-id="<?= $res['task_id'] ?>" class="">hapus</p>
            </div>
        <?php } ?>
        <span class="material-symbols-outlined absolute right-5">expand_more</span>
    </div>
    <div class="accordion-body p-5 hidden">
        <p><strong>Judul :</strong> Lorem ipsum dolor sit.</p>
        <!-- <p><strong>Deadline :</strong></p> -->
        <strong>Deskripsi :</strong>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt, sed.</p>
    </div>
</div>
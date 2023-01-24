<div class="relative flex flex-row items-center h-24 gap-10 text-black duration-300 ease-in-out w-4/5 rounded-xl">
    <img class="w-2/12" src="https://img.icons8.com/3d-fluency/188/null/3d-fluency-database.png" />
    <div class="text-left course-desc">
        <h1 class="w-40 font-bold break-normal">
            <?= $course[$i] ?>
        </h1>
        <p class="text-[#a2a7c4]">Lorem ipsum dolor sit amet.</p>
    </div>
    <div
        class="absolute course-student right-5 bg-red-500 px-2 rounded-xl shadow-[6px_6px_10px_-1px_rgba(0,0,0,0.15),-6px_-6px_10px_-1px_rgba(255,255,255,0.8)]">
        <p class="text-white">
            <?= $time['a'] . ' days left' ?>
        </p>
    </div>
</div>
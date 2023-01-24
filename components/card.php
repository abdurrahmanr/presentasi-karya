<div id="card"
    class="relative flex flex-row items-center text-white duration-300 ease-in-out h-24 w-10/12 bg-[#ffefe2] rounded-xl hover:scale-95"
    data-id=<?= $result['course_id'] ?>>
    <img class="absolute h-full left-1" src="./src/img/<?= $image[$i] ?>" alt="">
    <div class="text-left course-desc ml-36">
        <h1 class="w-24 font-bold break-normal text-<?= $color[$i] ?>"><?= $result['course_name'] ?></h1>
        <!-- <p class="break-normal w-36 text-black font-medium"><?= $result['lecturer_name']; ?></p> -->
    </div>
    <div class="absolute course-student flex flex-col items-center right-6">
        <p class="p-2 font-bold w-10 text-<?= $color[$i] ?> bg-white rounded-xl">12</p>
    </div>
</div>
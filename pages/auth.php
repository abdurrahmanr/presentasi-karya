<div class="w-full h-screen flex bg-[#fafafa]">
    <div
        class="w-1/2 h-full bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 flex items-center justify-center">
        <div
            class="w-3/4 h-4/6 backdrop-filter backdrop-blur-md bg-opacity-50 rounded-3xl bg-[#14121e] text-[#fafafa] flex items-end">
            <div class="flex flex-col pb-10 pl-10">
                <p class="text-2xl font-light">Selamat datang di</p>
                <p class="text-7xl font-semibold">LearNt</p>
                <p class="">Learning Note untuk kelasmu</p>
            </div>
        </div>
    </div>

    <div id="form" class="w-1/2"></div>
</div>

<script>
    $(document).ready(function () {
        $("#form").load('../components/auth/login.php')

    });

    $(document).on("click", ".regist-btn", function (e) {
        e.preventDefault()
        $("#form").load('../components/auth/register.php')
    });

    $(document).on("click", ".login-btn", function (e) {
        e.preventDefault()
        $("#form").load('../components/auth/login.php')
    });
</script>
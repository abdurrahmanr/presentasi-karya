$(document).ready(function () {
    $("#main").load("/pages/auth.php")
});

$(document).on("click", ".sidebar-menu, .logout", function (e) {
    e.preventDefault();

    $.fn.navchange = function (i) {
        $("#bar").remove();
        $(".sidebar-menu:eq(" + i + ")").append($('<span id="bar" class="text-white absolute h-10 rounded-lg bg-white w-2 -right-[2px]">&nbsp;</span>'));
        $(".sidebar-menu").removeClass("active");
        $(".sidebar-menu").removeClass("active");
        $(".sidebar-menu:eq(" + i + ")").addClass("active");
    };
    var selected = $(this).data("val");
    var arr = ["home", "classes", "schedule", "syllabus", "auth"];

    $.each(arr, function (i, val) {
        if (selected == arr[i]) {
            if (selected == "auth") {
                $(this).navchange(1);
                // $("#main").load("/components/dynamic/auth.php");
                $.post("/pages/auth.php", {
                    stat: selected,
                }).done(function (data) {
                    $("#main").html(data);
                });
            } else {
                $(this).navchange(i + 1);
                $("#content").load("pages/" + val + ".php");
            }
        }
    });
});

$(document).on("click", "#card", function () {
    $("#bar").remove();
    $(".sidebar-menu[data-val='classes']").append($('<span id="bar" class="text-white absolute h-10 rounded-lg bg-white w-2 -right-[2px]">&nbsp;</span>'));
    $(".sidebar-menu").removeClass("active");
    $(".sidebar-menu[data-val='classes']").addClass("active");

    $id = $(this).data("id");
    $.post("pages/class-detail.php", {
        id: $id,
    }).done(function (data) {
        $("#content").html(data);
    });
});

$(document).on("click", ".selection li", function () {
    const id = $(this).data('id');
    if (!$(this).hasClass('active')) {
        $(".selection li").removeClass('active');
        $(this).addClass('active');

        $('.tab-content').hide();
        $(`[data-content=${id}]`).fadeIn();
    }
});

$(document).ready(function () {
    $(document).on("click", ".back-btn", function (e) {
        e.preventDefault();
        $("#content").load("../pages/classes.php")
    });
});

$(document).ready(function () {
    $(document).on("click", ".accordion-head", function () {
        if ($(this).next(".accordion-body").hasClass("active")) {
            $(this).next(".accordion-body").removeClass("active").slideUp();
            $(this).children("span").text("expand_more");
        } else {
            $(".accordion-body").removeClass("active").slideUp();
            $(".accordion-head span").text("expand_more");
            $(this).next(".accordion-body").addClass("active").slideDown();
            $(this).children("span").text("expand_less");
        }
    });
});

$(document).on("submit", "#form", function (e) {
    e.preventDefault();
    $name = $("input[placeholder=username]").val();
    $password = $("input[placeholder=password]").val();
    $.post("/pages/auth.php", {
        name: $name,
        password: $password,
    }).done(function (data) {
        // $("nav").show();
        // $("nav").css("width", "");
        // $("#main").css("margin-left", "");
        $("#main").html(data);
    });
});

$(document).on("click", "#add-task", function (e) {
    Swal.fire({
        html: "<input id='input-add' placeholder='name' required>"
    }).then(function () {
        $.post("pages/class-detail.php", {
            task: $("input[placeholder=name]").val()
        }).done(function (data) {
            $("#content").html(data);
        })
    });
});

$(document).on("click", "#delete-task", function (e) {
    var deleteId = $(this).data("id");
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.post("pages/class-detail.php", {
                deleteId: deleteId
            }).done(function (data) {
                $("#content").html(data);
            })
        }
    });
});
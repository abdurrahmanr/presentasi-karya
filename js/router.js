$(document).ready(function () {
    $("#main").load("../pages/user.php")
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
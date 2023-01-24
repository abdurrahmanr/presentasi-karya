<?php

include '../components/navbar.php';

?>

<div id="content" class="ml-[200px] h-screen rounded-l-2xl bg-[#fafafa]"></div>

<script type="text/javascript">
    $(document).ready(function () {
        $("#content").load("pages/home.php");
    });
</script>
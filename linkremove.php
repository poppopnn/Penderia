<?php 
    session_start();
    array_splice($_SESSION['cloth_id'], $_GET['index'], 1);
    array_splice($_SESSION['cloth_image'], $_GET['index'], 1);
    array_splice($_SESSION['cloth_name'], $_GET['index'], 1);
    array_splice($_SESSION['cloth_totalPrice'], $_GET['index'], 1);
    array_splice($_SESSION['cloth_size'], $_GET['index'], 1);
    array_splice($_SESSION['cloth_quantity'], $_GET['index'], 1);
    array_splice($_SESSION['cloth_day'], $_GET['index'], 1);
    array_push($_SESSION['cloth_return'],date('Y-m-d',strtotime("$_POST[fromdate],+$_POST[day] day" )));


    echo "<script>window.location.href='basket.php'</script>";
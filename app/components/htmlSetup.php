<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title_page'] ?></title>

    <!--============ CSS ============-->
    <link rel="stylesheet" href="<?=ASSETS?>pomoro/css/output.css">

    <!--============ MUSIC ============-->
    <audio width="100%" class="landing" controls autoPlay hidden loop> <source src="<?=ASSETS?>pomoro/music/home1.mp3" type="video/mp4"></audio> <script> $( window ).load(function() { $( '.landing' ).get(0).play(); });</script>

    <!--============ POPPINS ============-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!--============ FAVICON ============-->
    <link rel="icon" href="<?=ASSETS?>pomoro/img/favicon.png">

    <!--=============== BOXICONS ===============-->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

</head>

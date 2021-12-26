<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $data['title_page'] ?></title>
    <!--============ CSS ============-->
    <link rel="stylesheet" href="<?=ASSETS?>pomoro/css/output.css">

    <!--============ POPPINS ============-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!--============ FAVICON ============-->
    <link rel="icon" href="ASSETS?>pomoro/img/favicon.png">

    <!--=============== BOXICONS ===============-->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>
<style>
    *{
        box-sizing: border-box;
        padding: 0;
        margin: 0;
    }

    html {
        scroll-behavior: smooth;
    }

    body {
        margin: 10px 0 0 0;
    }

    .show-menu {
        top: 0;
    }
    .release {
        color: transparent;
        transition: 0.4s;
    }
</style>
<body>
   <!--==================== HEADER  ====================-->
   <header id="header" class="w-full fixed top-0 left-0 z-20">
        <nav id="nav-container" class="h-12 flex justify-between items-center">
            <a href="#" id="nav-logo" class="flex items-center columns-1 font-medium pl-4">
                <img src="<?= ASSETS?>/pomoro/img/favicon.png" alt="" id="nav-logo" class="w-8">
                <h1 class="text-xl">omoro</h1>
            </a>
            
            <div id="nav-menu" class="fixed bg-grey-50 -top-full left-0 w-full pt-12 rounded-bl-3xl rounded-br-3xl shadow-md" style="transition:0.4s;">
                <ul id="nav-list" class="flex flex-col items-center gap-y-6">
                    <li id="nav-item">
                        <a href="#home" id="nav-link" class="text-black font-medium transition duration-200 hover:text-red-600">Home</a>
                    </li>
                    <li id="nav-item">
                        <a href="#home" id="nav-link" class="text-black font-medium transition duration-200 hover:text-red-600">Home</a>
                    </li>
                    <li id="nav-item">
                        <a href="#home" id="nav-link" class="text-black font-medium transition duration-200 hover:text-red-600">Home</a>
                    </li>
                    <li id="nav-item">
                        <a href="#home" id="nav-link" class="text-black font-medium transition duration-200 hover:text-red-600">Home</a>
                    </li>
                </ul>

                <div id="nav-close" class="text-4xl absolute top-2 right-4 cursor-pointer">
                    <i class="bx bx-x"></i>
                </div>

            </div>

            <div id="nav-toggle" class="inline-flex mr-4 text-3xl cursor-pointer">
                <i id="nav-toggle-button" class="bx bx-grid-alt"></i>
            </div>
            
        </nav>
    </header>

    <!--==================== MAIN  ====================-->
    <main id="main">
        <div id="container">

        </div>
    </main>

    <!--==================== FOOTER  ====================-->
    <footer id="footer">
        <div id="social-media"></div>
        <div id="description-footer"></div>
    </footer>

    <!--==================== HEADER  ====================-->
    <script src="<?=ASSETS ?>/pomoro/javascript/main.js"></script>
</body>
</html>
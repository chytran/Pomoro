<?php
    require_once '../app/components/header.php';
?>


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
    <link rel="icon" href="<?=ASSETS?>pomoro/img/favicon.png">
    
</head>



<body>


    <!-- Navbar goes here -->
		<nav class="bg-white shadow-lg">
			<div class="max-w-screen-2xl mx-auto px-4">
				<div class="flex justify-between">
					<div class="flex space-x-7">
						<!-- Primary Navbar items -->
						<div class="hidden md:flex items-center space-x-1">
							<a href="" class="py-4 px-2 text-red-500 border-b-4 border-red-500 font-semibold ">Home</a>
							<a href="" class="py-4 px-2 text-gray-500 font-semibold hover:text-red-500 transition duration-300">Our Business</a>
							<a href="" class="py-4 px-2 text-gray-500 font-semibold hover:text-red-500 transition duration-300">Our Impact</a>
							<a href="" class="py-4 px-2 text-gray-500 font-semibold hover:text-red-500 transition duration-300">Investors</a>
						</div>
					</div>
					<!-- Secondary Navbar items -->
					<div class="hidden md:flex items-center space-x-3 ">
						<a href="" class="py-2 px-2 font-medium text-gray-500 rounded hover:bg-redred-500 hover:text-red-500 transition duration-300">Log In</a>
						<a href="" class="py-2 px-2 font-medium text-gray-500 bg-redred-500 rounded hover:bg-red-500 transition duration-300">Sign Up</a>
					</div>
                    
					<!-- Mobile menu button -->
					<div class="md:hidden flex items-center">
						<button class="outline-none mobile-menu-button">
						<svg class=" w-6 h-6 text-gray-500 hover:text-red-500 "
							x-show="!showMenu"
							fill="none"
							stroke-linecap="round"
							stroke-linejoin="round"
							stroke-width="2"
							viewBox="0 0 24 24"
							stroke="currentColor"
						>
							<path d="M4 6h16M4 12h16M4 18h16"></path>
						</svg>
					</button>
					</div>
				</div>
			</div>
			<!-- mobile menu -->
			<div class="hidden mobile-menu">
				<ul class="">
					<li class="active"><a href="index.html" class="block text-sm px-2 py-4 text-white bg-red-500 font-semibold">Home</a></li>
					<li><a href="#services" class="block text-sm px-2 py-4 hover:bg-red-500 transition duration-300">Our Business</a></li>
					<li><a href="#about" class="block text-sm px-2 py-4 hover:bg-red-500 transition duration-300">Our Impact</a></li>
					<li><a href="#contact" class="block text-sm px-2 py-4 hover:bg-red-500 transition duration-300">Investors</a></li>
				</ul>
			</div>
			<script>
				const btn = document.querySelector("button.mobile-menu-button");
				const menu = document.querySelector(".mobile-menu");

				btn.addEventListener("click", () => {
					menu.classList.toggle("hidden");
				});
			</script>
		</nav>
		<h1 class="text-white text-center text-2xl md:text-3xl lg:text-4xl font-bold p-4 bg-red-700" style="font-family: poppins, sans-serif;">404 Error</h1>

        <script src="<?=ASSETS ?>"></script>

		<div id="left" class="grid place-items-center h-screen absolute w-full">
                    <div class="bg-white relative w-6/12 h-3/6 object-cover">
                        <div class="text-red-500 text-6xl left-44 absolute">Oops! Page not found</div>
						<div class="text-red-500 text-2xl top-24 left-4 absolute text-center">The page you're looking for doesn't exist, or an error has occurred. Go back, or try refreshing your page.</div>
                    </div>
                </div>


        </body>
</html>
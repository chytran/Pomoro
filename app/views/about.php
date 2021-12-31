<?php
    require_once '../app/components/header.php';
?>

    <!-- Navbar goes here -->
		<nav class="bg-white shadow-lg">
			<div class="max-w-6xl mx-auto px-4">
				<div class="flex justify-between">
					<div class="flex space-x-7">
						<div>
							<!-- Website Logo -->
							<a href="#" class="flex items-center py-4 px-2">
                            <img src="<?= ASSETS?>/pomoro/img/favicon.png" alt="" id="nav-logo" class="w-8">
								<span class="font-semibold text-gray-500 text-lg">omoro</span>
							</a>
						</div>
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
		<h1 class="text-white text-center text-2xl md:text-3xl lg:text-4xl font-bold p-4 bg-red-700" style="font-family: poppins, sans-serif;">About Pomoro</h1>

        <script src="<?=ASSETS ?>"></script>

        <div id="left" class="absolute h-full w-full">
                    <img src="<?=ASSETS?>pomoro/img/Happy-Person.jpg" alt="" id="login-image" class="absolute left-0 w-full h-4/6 object-cover">
                    <div id="login-left-content" class=" relative z-20 flex flex-col items-start text-center  h-4/5 left-20 top-20 w-2/4 sm:w-2/4">
                        <h1 class="text-red-600 text-6xl font-semibold sm:text-6xl sm:-ml-10 md:-ml-6 lg:text-6xl lg:-ml-0" style="font-family: poppins, sans-serif;">How we do</h1>
                        <h1 class="text-red-700 text-7xl font-semibold sm:text-6xl sm:-ml-10 md:-ml-6 lg:text-7xl lg:-ml-0" style="font-family: poppins, sans-serif;">Business.</h1>
                        <span class="text-red-500 text-left text-3xl mt-3 sm:w-full sm:-ml-4 lg:-ml-0">Learn about how we operate</span>
                    </div>
                    <div class="bg-red-700 relative left-40 w-3/12 h-2/6 object-cover">
                        <div class="text-white text-4xl absolute bottom-36 left-11">Our Q4 Financial Report</div>
                    </div>
                    <div id="login-left-content" class=" relative z-20 flex flex-col items-start text-center  h-4/5 left-20 top-20 w-2/4 sm:w-2/4">
                        <h1 class="text-red-600 text-3xl text relative left-28 sm:text-3xl sm:-ml-10 md:-ml-6 lg:text-3xl lg:-ml-0" style="font-family: poppins, sans-serif;">Take a look at our finances</h1>
                        <h1 class="text-red-600 text-3xl text relative left-48 sm:text-3xl sm:-ml-10 md:-ml-6 lg:text-3xl lg:-ml-0" style="font-family: poppins, sans-serif;">for this quarter.</h1>
                    </div> 
                </div>


</body>
</html>
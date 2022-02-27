
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
    .transitioning {
        transition: width 2s, height 2s, transform 2s;
    }
</style>
<body>
   <!--==================== HEADER  ====================-->
   <header id="header" class="w-full fixed top-0 left-0 z-20">
        <nav class="bg-white shadow-lg" style="transition:0.3s;">
            <div class="max-w-7xl mx-auto px-4">
                <div class="flex justify-between">
                    <div class="flex space-x-7">
                        <div class="pr-50">
                            <!-- Website Logo -->
                            <a href="#" class="flex items-center py-4 px-2">
                            <img src="<?= ASSETS?>/pomoro/img/favicon.png" alt="" id="nav-logo" class="w-8">
                                <span class="font-semibold text-gray-500 text-lg">omoro</span>
                            </a>
                        </div>
                        <!-- Primary Navbar items -->
                        <div class="hidden md:flex items-center space-x-1">
                            <a href="ecommerceHome/0/1" style="padding-top:0.3rem;" class="px-2 text-gray-500 border-b-4 border-white hover:border-red-500 hover:text-red-500 font-semibold ">Home</a>
                            <a href="../../home" style="padding-top:0.3rem;" class="px-2 text-gray-500 font-semibold border-b-4 border-white hover:border-red-500 hover:text-red-500 transition duration-300">Bank</a>
                            
                            <?php if(isset($_SESSION['user_name1'])): ?>
                                <!-- <a href="home" style="padding-top:0.3rem;" class="px-2 text-gray-500 font-semibold border-b-4 border-white hover:border-red-500 hover:text-red-500 transition duration-300">Bank</a> -->
                                <!-- <a href="account" style="padding-top:0.3rem;" class="px-2 text-gray-500 font-semibold border-b-4 border-white hover:border-red-500 hover:text-red-500 transition duration-300">Account</a> -->
                            <?php else: ?>

                            <?php endif; ?>
                            <a href="about" style="padding-top:0.3rem;" class="px-2 text-gray-500 font-semibold border-b-4 border-white hover:border-red-500 hover:text-red-500 transition duration-300">About</a>
                        </div>
                    </div>
                    <!-- Secondary Navbar items -->
                    <div class="hidden md:flex items-center space-x-3 ">
                        <?php if(isset($_SESSION['user_name1'])): ?>
                            <h1 class="py-2 px-2 font-medium text-gray-600 rounded transition duration-300">Hello, <?= $_SESSION['email'] ?></h1>
                        <?php else: ?>
                            <a href="../../login" class="py-2 px-2 font-medium text-gray-500 rounded hover:bg-redred-500 hover:text-red-500 transition duration-300">Log In</a>
                            <a href="../../signup" class="py-2 px-2 font-medium text-gray-500 bg-redred-500 rounded hover:bg-red-500 transition duration-300">Sign Up</a>
                        <?php endif; ?>
                            
                        <?php if(isset($_SESSION['user_name1'])): ?>
                            <a href="../../signout" class="py-2 px-2 font-medium text-gray-500 bg-redred-500 rounded hover:bg-red-500 transition duration-300">Signout</a>   
                        <?php else: ?>

                        <?php endif; ?>
                        
                    </div>
                    
                    <!-- Mobile menu button -->
                    <div class="md:hidden flex items-center">
                        <button class="outline-none mobile-menu-button ">
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
            <div style="transition: 0.7s;" class="opacity-0 hidden md:hidden mobile-menu transform -translate-y-full md:relative md:translate-y-0 sm:relative sm:translate-y-0 transition duration-75 ease-in-out" style="transition: all 1s ease-in">
                <ul class="" style="transition:0.4s;">
                    <li class="active"><a href="index.html" class="block text-sm px-2 py-4 text-white bg-red-500 font-semibold">Home</a></li>
                    <!-- <li><a href="#services" class="block text-sm px-2 py-4 hover:bg-red-500 transition duration-300">Register New Card</a></li> -->
                    <li><a href="home" class="block text-sm px-2 py-4 hover:bg-red-500 transition duration-300">Bank</a></li>
                    <li><a href="about" class="block text-sm px-2 py-4 hover:bg-red-500 transition duration-300">About</a></li>
                </ul>
            </div>
            <script>
                const btn = document.querySelector("button.mobile-menu-button");
                const menu = document.querySelector(".mobile-menu");

                btn.addEventListener("click", () => {
                    menu.classList.toggle("hidden");
                    menu.classList.add("opacity-100");
                    menu.classList.add("duration-75");
                    menu.classList.add("transition");
                    menu.classList.add("ease-linear");
                    setTimeout(() => {
                        menu.classList.toggle("-translate-y-full");
                    }, (1*1));
                });
            </script>
        </nav>
    </header>
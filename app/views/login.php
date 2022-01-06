<?php
    include_once '../app/components/htmlSetup.php';
?>
<body>
    <!--============ login hero ============-->
    <div class="hero mx-auto max-w-7xl h-screen w-screen">
        <div class="flex flex-col justify-center items-center h-screen w-full ">
            <!-- <img src="/dist/img/red-login.jpg" alt="" class="absolute top-0 left-0 w-full h-full opacity-90 object-cover duration-300 ease-in z-0"> -->
            <div class="bg-gradient-to-r from-red-200 to-red-600 absolute top-0 left-0 w-full h-full opacity-90 object-cover duration-300 ease-in z-0"></div> <!-- Background -->
            <div class="h-4/5 w-full relative z-10 opacity-100 rounded-2xl lg:w-full md:w-4/5 sm:w-3/4 bg-gray-100 grid grid-cols-2 shadow-2xl">
                <!--============ Left side ============-->             
                <div id="left" class="relative h-full w-full mx-w-xl z-5">
                    <img src="<?=ASSETS?>pomoro/img/left-login.jpg" alt="" id="login-image" class="absolute top-0 left-0 w-full h-full object-cover rounded-tl-2xl rounded-bl-2xl z-5">
                    <div id="login-left-content" class=" relative z-20 flex flex-col items-start text-center  h-4/5 left-20 top-20 w-2/4 sm:w-2/4">
                        <h1 class="text-white text-6xl font-semibold sm:text-6xl sm:-ml-10 md:-ml-6 lg:text-6xl lg:-ml-0" style="font-family: poppins, sans-serif;">Hello</h1>
                        <h1 class="text-white text-7xl font-semibold sm:text-6xl sm:-ml-10 md:-ml-6 lg:text-7xl lg:-ml-0" style="font-family: poppins, sans-serif;">World.</h1>
                        <span class="text-white opacity-90 text-left mt-3 sm:w-full sm:-ml-4 lg:-ml-0">Lorem Ipsum dolor sit amet, consec tetur dipisicing</span>
                    </div> 
                </div>
                <!--============ Right Side============-->
                <form method="POST" class="w-100%">
                    <?php check_message(); ?>
                    <div id="right" class="bg-grey-50 z-10 flex items-center justify-center">
                        <div id="right-container" class="w-4/5 h-4/5 grid grid-cols-1 justify-center gap-1 place-items-center border-black z-15 ">
                            <div id="login-title-container" class="w-4/5 text-left -mb-4 pl-3 sm:-ml-4">
                                <h1 class="text-3xl font-semibold" style="font-family: Poppins, sans-serif;">Login</h1>
                            </div>
                            <div id="username" class="w-4/5 text-center flex ">
                                <span style="font-family: Poppins, sans-serif;" class="border-b-2 cursor-pointer w-2/6 font-medium sm:text-xs sm:w-4/6 md:text-sm md:w-2/6 lg:w-2/6 lg:-ml-4 lg:text-xs">USERNAME</span>
                                <input name="username" type="text" class="bg-transparent border-b-2 cursor-pointer w-full outline-none">
                            </div>
                            <div id="password" class="w-4/5 text-center flex">
                                <span style="font-family: Poppins, sans-serif;" class="border-b-2 cursor-pointer w-2/6 font-medium -ml-2 sm:-ml-0 sm:text-xs sm:w-4/6 md:text-sm md:w-2/6 lg:w-2/6 lg:-ml-3 lg:text-xs">PASSWORD</span>
                                <input name="password" type="password" class="bg-transparent border-b-2 cursor-pointer hover:border-b-8 w-full outline-none">
                            </div>
                            <div id="checkbox" class="-mt-6 w-4/5 relative text-left pl-2 mb-5 sm:-ml-4">
                                <input type="radio">
                                <span class="pl-2 opacity-90 text-sm" style="font-family: Poppins, sans-serif;">Remember me</span>
                            </div>   
                            <div id="button-container-login" class="w-4/5 text-center -mt-4">
                                <button id="sign-in" class="w-32 h-10 rounded-3xl bg-red-500 text-white hover:opacity-70 transition duration-200 ease-in cursor-pointer">Login</button>
                            </div>     
                            <div id="signup-container">                        
                                <span class="opacity-90 text-sm sm:text-xs" style="font-family: Poppins, sans-serif;">Don't have an account?</span>
                                <a class="font-semibold text-base underline transition duration-200 ease-in sm:text-sm hover:opacity-80" style="font-family: Poppins, sans-serif;" href="signup">Sign Up</a>
                            </div>   
                        </div>
                    </div>
                </form> 
            </div>
        </div>
    </div>
    <script src="<?=ASSETS ?>"></script>
</body>
</html>
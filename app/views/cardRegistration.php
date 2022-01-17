<?php
    require_once '../app/components/htmlSetup.php';
?>
<?php
    require_once '../app/components/header1.php';
?>
<!-- </header>  -->

<!--============ login hero ============-->
<div class="hero mx-auto max-w-7xl h-screen w-screen">
    <div class="flex flex-col justify-center items-center h-screen w-full ">
        <!-- <img src="/dist/img/red-login.jpg" alt="" class="absolute top-0 left-0 w-full h-full opacity-90 object-cover duration-300 ease-in z-0"> -->
        <div class="bg-gradient-to-bl from-black to-red-300 absolute top-0 left-0 w-full h-full opacity-90 object-cover duration-300 ease-in z-0"></div> <!-- Background -->
        <div class="h-4/5 w-full relative z-10 opacity-100 rounded-2xl lg:w-full md:w-4/5 sm:w-3/4 bg-gray-100 grid grid-cols-2 shadow-2xl">
            <!--============ Left side ============-->             
            <div id="left" class="relative h-full w-full mx-w-xl z-5">
                <img src="<?=ASSETS?>pomoro/img/left-card.jpg" alt="" id="login-image" class="absolute top-0 left-0 w-full h-full object-cover rounded-tl-2xl rounded-bl-2xl z-5">
                <div id="login-left-content" class=" relative z-20 flex flex-col items-start text-center  h-4/5 left-20 top-20 w-2/4 sm:w-2/4">
                    <h1 class="text-white text-6xl font-semibold sm:text-6xl sm:-ml-10 md:-ml-6 lg:text-6xl lg:-ml-0" style="font-family: poppins, sans-serif;">Hello</h1>
                    <h1 class="text-white text-7xl font-semibold sm:text-6xl sm:-ml-10 md:-ml-6 lg:text-7xl lg:-ml-0" style="font-family: poppins, sans-serif;">World.</h1>
                    <span class="text-white opacity-90 text-left mt-3 sm:w-full sm:-ml-4 lg:-ml-0">Lorem Ipsum dolor sit amet, consec tetur dipisicing</span>
                </div> 
            </div>
            <!--============ Right Side============-->
            <form method="POST" class="w-100%">
                <div id="right" class="bg-grey-50 z-10 flex items-center justify-center h-full">
                    <div id="right-container" class="w-4/5 h-4/5 grid grid-cols-1 justify-center gap-1 place-items-center border-black z-15 ">
                        <div id="login-title-container" class="w-4/5 text-left -mb-4 pl-3 sm:-ml-4">
                            <h1 class="text-3xl font-semibold" style="font-family: Poppins, sans-serif;">Card Registration</h1>
                        </div>
                        <div id="email" class="w-4/5 text-center flex ">
                            <span style="font-family: Poppins, sans-serif;" class="border-b-2 cursor-pointer w-1/6 font-medium -ml-4 sm:text-xs sm:w-4/6 md:text-sm md:w-2/6 md:-ml-2 lg:w-1/6 lg:-ml-1 lg:text-xs pt-1" required>EMAIL</span>
                            <input name="email1" type="text" class="bg-transparent border-b-2 cursor-pointer w-full outline-none pb-2" required>
                        </div>
                        <!-- <div id="amount" class="w-4/5 text-center flex ">
                            <span style="font-family: Poppins, sans-serif;" class="border-b-2 cursor-pointer w-1/6 font-medium -ml-4 sm:text-xs sm:w-4/6 md:text-sm md:w-2/6 md:-ml-2 lg:w-1/6 lg:-ml-1 lg:text-xs">AMOUNT</span>
                            <input name="amount" type="text" class="bg-transparent border-b-2 cursor-pointer w-full outline-none">
                        </div> -->
                        <div id="creditCard" class="w-4/5 text-center flex">
                            <span style="font-family: Poppins, sans-serif;" class="border-b-2 cursor-pointer w-1/6 font-medium sm:ml-2 sm:text-xs sm:w-4/6 md:text-sm md:w-3/6 md:-ml-2 lg:w-2/6 lg:-ml-3 lg:text-xs pt-1">Credit Card</span>
                            <select required name="creditCard" id="creditCardSelect" class="bg-transparent border-b-2 cursor-pointer hover:border-b-8 w-full outline-none pb-2" select>
                                <option value>-- --</option>
                                <option class="text-xs" value="Silver">Silver Card</option>
                                <option class="text-xs" value="Gold">Gold Card</option>
                                <option class="text-xs" value="Platinum">Platinum Card</option>
                            </select>
                        </div>
                        <!-- <div id="checkbox" class="-mt-6 w-4/5 relative text-left pl-2 mb-5 sm:-ml-4">
                            <input name="confirmation" value="confirmed" type="radio">
                            <span class="pl-2 opacity-90 text-sm" style="font-family: Poppins, sans-serif;">I accept the registration</span>
                        </div>    -->
                        <div id="button-container-login" class="w-4/5 text-center -mt-4">
                            <button id="sign-in" class="w-32 h-10 rounded-3xl bg-red-500 text-white hover:opacity-70 transition duration-200 ease-in cursor-pointer">Sign up</button>
                        </div>  
                        <!-- <div id="signup-container">                        
                            <span class="opacity-90 text-sm sm:text-xs" style="font-family: Poppins, sans-serif;">Don't have an account?</span>
                            <a class="font-semibold text-base underline transition duration-200 ease-in sm:text-sm hover:opacity-80" style="font-family: Poppins, sans-serif;" href="#">Sign In</a>
                        </div>   -->
                    </div>
                </div>
            </form>    
        </div>
    </div>
</div>
<script src="<?=ASSETS ?>"></script>

<!-- </body> -->

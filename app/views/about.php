<?php
    require_once '../app/components/header1.php';
?>
<html>
    <body>
    
		<h1 class="text-white text-center text-2xl md:text-3xl lg:text-4xl font-bold p-4 bg-red-700" style="font-family: poppins, sans-serif;">About Pomoro</h1>

        <script src="<?=ASSETS ?>"></script>

        <div id="left" class="absolute h-full w-full z-10">
        <img src="<?=ASSETS?>pomoro/img/Happy-Person.jpg" alt="" id="login-image" class="absolute left-0 w-full h-4/6 object-cover">
        <div id="login-left-content" class=" relative z-20 flex flex-col items-start text-center  h-4/5 left-20 top-20 w-2/4 sm:w-2/4">
            <h1 class="text-red-600 text-6xl font-semibold sm:text-6xl sm:-ml-10 md:-ml-6 lg:text-6xl lg:-ml-0" style="font-family: poppins, sans-serif;">How we do</h1>
            <h1 class="text-red-700 text-7xl font-semibold sm:text-6xl sm:-ml-10 md:-ml-6 lg:text-7xl lg:-ml-0" style="font-family: poppins, sans-serif;">Business.</h1>
            <span class="text-red-500 text-left text-3xl mt-3 sm:w-full sm:-ml-4 lg:-ml-0">Learn about how we operate</span>
        </div>
        <div class="grid grid-rows-3 grid-cols-3 bottom-20 relative p-5">
        <div class="bg-red-600 text-transparent text-8xl relative left-40 w-7/12 " style="background-image: url(<?=ASSETS?>pomoro/img/Bank-Quarter-Report.jpg)">stuff stuff stuff  </div>
        <div class="bg-cover text-transparent relative left-40 w-7/12" style="background-image: url(<?=ASSETS?>pomoro/img/Happy-Couple.jpg)">stuff stuff </div>
        <div class="bg-cover text-transparent relative left-40 w-7/12" style="background-image: url(<?=ASSETS?>pomoro/img/Aerial-City-View.jpg)">stuff stuff </div>
        <div class="bg-cover text-red-500 relative text-2xl text-center top-6 left-40 w-7/12" >Q4 2021 Financial Results </div>
        <div class="bg-cover text-red-500 relative text-2xl text-center top-6 left-40 w-7/12" >Sustainable Future </div>
        <div class="bg-cover text-red-500 relative text-2xl text-center top-6 left-40 w-7/12" >Growing Business</div>
        <div class="bg-cover relative text-xl text-center bottom-52 left-40 w-7/12" >Pomoro reports financial results for the fourth quarter of 2021.</div>
        <div class="bg-cover relative text-xl text-center bottom-52 left-40 w-7/12" >Creating a better and more prosperable future for all is going to take combined efforts of governments, nonprofits, and the private sector. We're contributing our resources to help.</div>
        <div class="bg-cover relative text-xl text-center bottom-52 left-40 w-7/12" >Pomoro is continually expanding. Over the course of this year, we aim to add over 30 branches across the US. Stay tuned as we provide more info in the future.</div>
            <!--<div class="text-white text-4xl absolute bottom-36 left-11">Our Q4 Financial Report</div>
            <div class="text-red-500 text-4xl absolute bottom-36 left-11">Our Q4 Financial Report</div>-->
        </div>
        
        <!--<div id="login-left-content" class=" relative z-20 flex flex-col items-start text-center  h-4/5 left-20 top-20 w-2/4 sm:w-2/4">
            <h1 class="text-red-600 text-3xl text relative left-28 sm:text-3xl sm:-ml-10 md:-ml-6 lg:text-3xl lg:-ml-0" style="font-family: poppins, sans-serif;">Take a look at our finances</h1>
            <h1 class="text-red-600 text-3xl text relative left-48 sm:text-3xl sm:-ml-10 md:-ml-6 lg:text-3xl lg:-ml-0" style="font-family: poppins, sans-serif;">for this quarter.</h1>
        </div>--->
    </div>

    <script src="<?=ASSETS ?>/pomoro/javascript/main.js"></script>

</body>
</html>
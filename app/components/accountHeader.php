<div id="container-account" class="w-full h-screen relative z-10">
    <div id="adjustment" class="flex flex-row w-full h-screen">
        <div id="left" style="transition: 0.3s;" class="z-20 absolute md:ml-0 transition flex flex-row justify-center items-center pl-6 sm:pl-0 w-56 sm:w-72 md:w-96 lg:w-96 h-screen bg-red-700 ">
            <div id="text-container" class="relative h-3/5 mt-24 font-bold flex flex-col">
                <div id="link-container" class="relative w-11/12 rounded-xl hover:bg-red-100 transition duration-200 ease-in h-12 text-center flex flex-row justify-center md:ml-4">
                    <a href="" class="text-white pt-3 pr-2 sm:l w-11/12 rounded-xl relative  hover:text-red-700 transition duration-200 sm:pl-10 md:text-xl md:pr-10">Dashboard</h1>
                </div>
                <div class="relative w-11/12 rounded-xl hover:bg-red-100 transition duration-200 ease-in h-12 text-center flex flex-row justify-center -mt-3 md:ml-4">
                    <a href="" style="padding-right: 4.5rem;" class="text-white pt-3 pr-16 sm:l w-11/12 rounded-xl relative  hover:text-red-700 transition duration-200 sm:pl-10 md:text-xl md:pl-0 md:mr-16">Cards</a>
                </div>
                <div class="relative w-11/12 rounded-xl hover:bg-red-100 transition duration-200 ease-in h-12 text-center flex items-center flex-row justify-center md:ml-4">
                    <a href="" class="text-white pt-0 sm:l hover:text-green-700 transition duration-200 sm:pl-10 md:text-xl md:pr-8">Deposits/Withdraw</a>
                </div>
                <div class="relative w-11/12 rounded-xl hover:bg-red-100 transition duration-200 ease-in h-12 text-center flex flex-row justify-center md:ml-4">
                    <a href="" class="text-white pt-3 sm:l hover:text-green-700 transition duration-200 sm:pl-10 md:text-xl md:pr-7">History</h1>
                </div>
                <div class="relative w-11/12 rounded-xl hover:bg-red-100 transition duration-200 ease-in h-12 text-center flex flex-row justify-center -mt-3 md:ml-4">
                    <a href="" class="text-white pt-3 sm:l hover:text-green-700 transition duration-200 sm:pl-10 md:text-xl md:pl-0 md:mr-12">Fund Transfer</a>
                </div>      
            </div>
            <!-- button navbar -->
            <div id="button" class=" md:invisible w-4 relative h-screen bg-red-500 ml-8 z-20 flex ">
                <button id="side-button" class="cursor-pointer">
                    <i class='bx bxs-circle-half text-3xl text-red-400'></i>
                </button>
            </div>
            
            <script>
                const bar = document.getElementById("left");
                const button = document.getElementById("button");
            
                button.addEventListener("click", ()=> {
                    bar.classList.toggle("-ml-52");
                })
            </script>
        </div>

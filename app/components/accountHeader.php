<div id="container-account" class="w-full h-screen relative z-10">
    <div id="adjustment" class="flex flex-row w-full h-screen">
        <div id="left" style="transition: 0.3s;" class="z-20 sm:relative absolute md:ml-0 transition flex flex-row justify-center items-center pl-6 sm:pl-0 w-56 sm:w-72 md:w-96 lg:w-96 h-screen bg-red-700 ">
            <div id="text-container" class="relative h-3/5 mt-24 font-bold">
                <div class="grid grid-flow-row auto-rows-auto align-middle">
                    <div id="link-container" class="relative w-11/12 rounded-xl hover:bg-red-100 bg-center transition duration-200 ease-in h-12 text-center ">
                        <a href="dashboard" class="text-white  sm:l w-11/12 rounded-xl relative  hover:text-red-700 transition duration-200  md:text-xl">Dashboard</h1>
                    </div>
                    <div class="relative w-11/12 rounded-xl hover:bg-red-100 bg-center transition duration-200 ease-in h-12 text-center ">
                        <a href="card" style="padding-right: 0rem;" class="text-white sm:l rounded-xl relative hover:text-red-700 transition duration-200  md:text-xl">Cards</a>
                    </div>
                    <div class="relative w-11/12 rounded-xl hover:bg-red-100 bg-center transition duration-200 ease-in h-12 text-center ">
                        <a href="transaction" class="text-white sm:l hover:text-green-700 transition duration-200 md:text-xl">Deposits/Withdraw</a>
                    </div>
                    <div class="relative w-11/12 rounded-xl hover:bg-red-100 bg-center transition duration-200 ease-in h-12 text-center align-middle">
                        <a href="history" style="padding-left: 0rem;" class="text-white  sm:l hover:text-green-700 transition duration-200  md:text-xl">History</h1>
                    </div>
                    <div class="relative w-11/12 rounded-xl hover:bg-red-100 bg-center transition duration-200 ease-in h-12 text-center ">
                        <a href="fundTransfer" style="padding-right: 0rem;" class="text-white sm:l hover:text-green-700 transition duration-200  md:text-xl">Fund Transfer</a>
                    </div> 
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
                    bar.classList.toggle("-ml-56");
                })
            </script>
        </div>

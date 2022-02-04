<?php
    require_once '../app/components/htmlSetup.php';
?>
<?php
    require_once '../app/components/header1.php';
?>
<!-- </header>  -->

<main class="overflow-x-hidden">
        <div id="container" class="h-screen relative m-auto w-screen bg-gradient-to-t from-red-100 to-red-400">
            <div id="gridsetup" class="grid sm:grid-cols-2 gap-3 md:grid-cols-3 lg:grid-cols-4">
                <?php if(is_array($data['products'])): ?>
                    <?php foreach($data['products'] as $row):?>
                        <div class="flex flex-col justify-center items-center rounded-xl border-2 border-black bg-red-100 hover:bg-white transition duration-200 ease-in">
                            <h1 style="font-family: poppins, sans-serif; text-indent: 5px;" class="text-black font-semi-bold text-lg"><?=$row->name?></h1>
                            <img class="object-cover w-64 h-64" src="<?=ASSETS?>pomoro/img/product<?=$row->id?>.png" alt="image of <?=$row->name?>"/>
                            <div style="font-family: poppins, sans-serif;" class="text-black pt-2 text-md " id="price">$<?=$row->price?></div>
                            <div style="font-family: poppins, sans-serif;" class="text-black pt-2 text-sm " id="description"><?=$row->description?></div>
                            <div class="text-white bg-red-500 hover:bg-red-800 transition duration-200 ease-in cursor-pointer w-full h-9 rounded-none mt-4 flex justify-center items-center" id="add-cart"><a href="#" class="text-sm">Add to Cart</a></div>
                        </div>
                    <?php endforeach;?>
                <?php endif; ?>
            </div>
        </div>

        <div id="advertisement" class="h-full w-full bg-black">

        </div>
    </main>

<script src="<?=ASSETS?>/pomoro/javascript/main.js"></script>
<?php
    include_once '../app/components/footer.php';
?>
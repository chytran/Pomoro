<?php
    require_once '../app/components/htmlSetup.php';
?>
<?php
    require_once '../app/components/header1.php';
?>
<!-- </header>  -->

<!-- <main class="overflow-hidden hover:overflow-scroll">
    <div id="container" class="mt-12 flex flex-col justify-center items-center relative w-screen bg-gradient-to-t from-red-100 to-red-400">
        <div id="gridsetup" class="my-5 w-11/12 grid sm:grid-cols-2 gap-3 md:grid-cols-3 lg:grid-cols-4">
            <?php if(is_array($data['products'])) {
                for ($i = (0 + $data['pageOffset']); $i < ($data['productsPerPage'] + $data['pageOffset']); $i++) {
                    if (!is_null($data['products'][$i]->id)) {
                    echo '<div class="flex flex-col justify-between items-center rounded-xl border-2 border-black bg-red-100 hover:bg-white transition duration-200 ease-in">';
                    echo '<h1 style="font-family: poppins, sans-serif;" class="text-black font-semi-bold text-lg">' . $data['products'][$i]->name . '</h1>';
                    echo '<img class="object-contain w-64 h-64" src="' . ASSETS . 'pomoro/img/product' . $data['products'][$i]->id . '.png" alt="image of <?=$row->name?>"/>';
                    echo '<div style="font-family: poppins, sans-serif;" class="text-black pt-2 text-md" id="price">$' . $data['products'][$i]->price . '</div>';
                    echo '<div style="font-family: poppins, sans-serif;" class="text-black pt-2 text-sm mx-1" id="description">' . $data['products'][$i]->description . '</div>';
                    echo '<div class="text-white bg-red-500 hover:bg-red-800 transition duration-200 ease-in cursor-pointer w-11/12 h-9 rounded-full mt-3 mb-1 flex justify-center items-center" id="add-cart"><a href="#" class="text-sm">Add to Cart</a></div>';
                    echo '</div>';
                    }
                }
            } ?>
        </div>

        <div id="pageNavigation" class="bg-red-500 w-1/4 h-9 mb-5 flex justify-center items-center">
            <div id="previousPage" style="font-family: poppins, sans-serif;" class="text-white bg-red-500 hover:bg-red-800 transition duration-200 ease-in cursor-pointer w-1/3 h-full text-center">
                <a class="text-xl">←</a>
            </div>
            <div id="pageNumber" class="w-1/3 text-white text-center mx-3">
                <p style="font-family: poppins, sans-serif;" class="text-xl">test</p>
            </div>
            <div id="nextPage" style="font-family: poppins, sans-serif;" class="text-white bg-red-500 hover:bg-red-800 transition duration-200 ease-in cursor-pointer w-1/3 h-full text-center">
                <a class="text-xl">→</a>
            </div>
        </div>

    </div>

    <div id="advertisement" class="h-full w-full bg-black">

    </div>
</main> -->

<script src="<?=ASSETS?>/pomoro/javascript/main.js"></script>

<?php
    include_once '../app/components/footer.php';
?>
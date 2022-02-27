<?php
    require_once '../app/components/htmlSetup.php';
?>
<?php
    require_once '../app/components/ecommerceHeader.php';
?>
<!-- </header>  -->

<main class="overflow-hidden hover:overflow-scroll">
    <div id="container" class="mt-12 flex flex-col justify-center items-center relative w-screen bg-gradient-to-t from-red-100 to-red-400">

    </div>
    <div id="container" class="flex flex-col justify-center items-center relative w-screen bg-gradient-to-t from-red-100 to-red-400">
        <div class="bg-red-500 w-1/3 h-12 flex justify-center items-center">
            <?php if(isset($_SESSION['user_name1'])) {
            echo '<div style="font-family: poppins, sans-serif;" class="flex justify-center items-center h-full text-white bg-red-500 hover:bg-red-800 transition w-1/2 duration-200 ease-in cursor-pointer text-center"><a href="../0/1">All Products</a></div>';
            echo '<div style="font-family: poppins, sans-serif;" class="flex justify-center items-center h-full text-white bg-red-500 hover:bg-red-800 transition w-1/2 duration-200 ease-in cursor-pointer text-center"><a href="ecommerceCart">Cart</a></div>';
            } else { 
            echo '<div style="font-family: poppins, sans-serif;" class="flex justify-center items-center h-full text-white bg-red-500 hover:bg-red-800 transition duration-200 ease-in cursor-pointer text-center"><a href="../0/1">All Products</a></div>';
            } ?>
        </div>
        <div class="bg-red-500 w-full h-12 flex justify-center items-center">
            <?php if(is_array($data['categories'])) {
                //link back to show products from all categories; helps with testing out pagination
                //echo '<div style="font-family: poppins, sans-serif;" class="text-white bg-red-500 hover:bg-red-800 transition w-1/7 duration-200 ease-in cursor-pointer h-full text-center"><a href="../../0/1/">All</a></div>';
                //SELECT COUNT statements aren't working so I'm manually setting the fraction for w- to justify each link on the top
                //echo '<p> ' . $data['numOfCategories'] . ' ' . $data['numOfProducts'] . '</p>';
                foreach($data['categories'] as $row) {
                    //echo '<div style="font-family: poppins, sans-serif;" class="text-white bg-red-500 hover:bg-red-800 transition w-1/' . $data['numOfCategories'] . ' duration-200 ease-in cursor-pointer h-full text-center"><a href="../../' . $row->id . '/1/">' . $row->name . '</a></div>';
                    echo '<div style="font-family: poppins, sans-serif;" class="flex justify-center items-center h-full text-white bg-red-500 hover:bg-red-800 transition w-1/6 duration-200 ease-in cursor-pointer text-center"><a href="../' . $row->id . '/1">' . $row->name . '</a></div>';
                }
            } ?>
        </div>
        <form method="POST">    
            <div id="gridsetup" class="my-5 w-11/12 grid sm:grid-cols-2 gap-3 md:grid-cols-3 lg:grid-cols-4">
                <?php if(is_array($data['products'])) {
                    foreach($data['products'] as $row) {
                        if (!is_null($row->id) && isset($_SESSION['user_name1'])) {
                            echo '<div class="flex flex-col justify-between items-center rounded-xl border-2 border-black bg-red-100 hover:bg-white transition duration-200 ease-in">';
                            echo '<h1 style="font-family: poppins, sans-serif;" class="text-black font-semi-bold text-lg">' . $row->name . '<input name="product" type="hidden" value="' . $row->id . '"><input name="username" type="hidden" value="' . $_SESSION['user_name1'] . '"></h1>';
                            echo '<img class="object-contain w-64 h-64" src="' . ASSETS . 'pomoro/img/product' . $row->id . '.png" alt="image of <?=$row->name?>"/>';
                            echo '<div style="font-family: poppins, sans-serif;" class="text-black pt-2 text-md">$' . $row->price . '</div>';
                            echo '<div style="font-family: poppins, sans-serif;" class="text-black pt-2 text-sm mx-1">' . $row->description . '</div>';
                            echo '<button class="text-white bg-red-500 hover:bg-red-800 transition duration-200 ease-in cursor-pointer w-11/12 h-9 rounded-full mt-3 mb-1 flex justify-center items-center">Add to Cart</button>';
                            echo '</div>';
                        } else {
                            echo '<div class="flex flex-col justify-between items-center rounded-xl border-2 border-black bg-red-100 hover:bg-white transition duration-200 ease-in">';
                            echo '<h1 style="font-family: poppins, sans-serif;" class="text-black font-semi-bold text-lg">' . $row->name . '</h1>';
                            echo '<img class="object-contain w-64 h-64" src="' . ASSETS . 'pomoro/img/product' . $row->id . '.png" alt="image of <?=$row->name?>"/>';
                            echo '<div style="font-family: poppins, sans-serif;" class="text-black pt-2 text-md">$' . $row->price . '</div>';
                            echo '<div style="font-family: poppins, sans-serif;" class="text-black pt-2 text-sm mx-1">' . $row->description . '</div>';
                            echo '<div class="text-white bg-red-500 hover:bg-red-800 transition duration-200 ease-in cursor-pointer w-11/12 h-9 rounded-full mt-3 mb-1 flex justify-center items-center" type="application/javascript" onclick="signincheck()">Add to Cart</div>';
                            echo '</div>';
                        }
                    }
                } ?>
            </div>
        </form>
        <div id="pageNavigation" class="bg-red-500 w-1/4 h-9 mb-5 flex justify-center items-center">
            <?php 
            if(is_numeric($data['pageNumber']) && ($data['pageNumber'] > 1)) {
                echo '<div id="previousPage" style="font-family: poppins, sans-serif;" class="text-white bg-red-500 hover:bg-red-800 transition duration-200 ease-in cursor-pointer w-1/3 h-full text-center">';
                echo '<a class="text-xl" href="' . ($data['pageNumber'] - 1) .'">←</a>';
            } else {
                echo '<div id="previousPage" style="font-family: poppins, sans-serif;" class="text-white bg-red-500 w-1/3 h-full text-center">';
            }
            echo '</div>'; ?>
            <div id="pageNumber" class="w-1/3 text-white text-center mx-3">
                <p style="font-family: poppins, sans-serif;" class="text-lg"><?php echo $data['pageNumber']; ?></p>
            </div>
            <div id="nextPage" style="font-family: poppins, sans-serif;" class="text-white bg-red-500 hover:bg-red-800 transition duration-200 ease-in cursor-pointer w-1/3 h-full text-center">
                <a class="text-xl" href="<?php echo intval($data['pageNumber'] + 1) ?>">→</a>
            </div>
        </div>

    </div>

    <!-- <div id="advertisement" class="h-full w-full bg-black">

    </div> -->
</main>

<script src="<?=ASSETS?>/pomoro/javascript/main.js"></script>

<?php
    include_once '../app/components/footer.php';
?>

<script type="application/javascript">
    function signincheck() {
        alert('You must be signed in to add to your cart');
    }
</script>
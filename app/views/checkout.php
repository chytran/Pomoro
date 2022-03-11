<?php
    require_once '../app/components/htmlSetup.php';
?>
<?php
    require_once '../app/components/ecommerceHeader.php';
?>
<body>
    <div id="main-container" class="mt-24 pb-10 flex justify-center items-center w-screen h-full bg-gradient-to-t ">
        <div id="horizontal-container" class="px-24 py-8 w-full h-full flex flex-col justify-center items-center md:flex-row">
            <!-- 4/6 -->
            <div id="left" class="h-full w-full md:w-1/3 pr-6">
                <div id="vertical-container-left" class="flex flex-col justify-center items-start">
                    <div id="items-container" class="w-full flex flex-col justify-start items-start">
                        <h1 class="text-2xl font-bold"><?php echo $_SESSION['user_name1'] ?>'s Cart</h1>
                        <!-- Copy Item -->
                        <?php
                            $subtotal = floatval(0.00);
                            $numItems = 0; 
                            $cartEmpty = 0;
                            if ($data['cartItems'] != false) {
                                foreach($data['cartItems'] as $row) {
                                        echo '<div id="individual-items-container" class="w-full h-3/6">';
                                            echo '<div id="item" class="w-full flex flex-row justify-between items-center gap-2">';
                                                echo '<img src="' . ASSETS . 'pomoro/img/product' . $row->productID . '.png" alt="" class="w-24 h-24"';
                                                echo '<div id="item-detail-container" class="w-full">';
                                                    echo '<div id="title-price" class="flex flex-row justify-between items-start w-3/4">';
                                                        echo '<h1 class="font-semibold w-1/2">' . $row->name . '</h1><h1 class="w-1/2">$' . $row->price . '</h1>';
                                                        $subtotal += floatval($row->price);
                                                        $numItems += 1;
                                                    echo '</div>';
                                            echo '</div>';
                                        echo '</div>';                            
                                }
                            } else {
                                $cartEmpty = 1;
                                echo '<h1 class="font-semibold w-1/2">Your cart is empty.</h1>';
                            }
                        ?>
                        <!-- <div id="individual-items-container" class="w-full h-3/6">
                            <div id="item" class="w-full flex flex-row justify-between items-center gap-2">
                                <img src="<?=ASSETS?>pomoro/img/shoes.jpg" alt="" class="w-24 h-24 ">
                                <div id="item-detail-container" class="w-full">
                                    <div id="title-price" class="flex flex-row justify-between items-start">
                                        <h1 class="font-semibold">NikeCourt Air Max Volley</h1>
                                        <h1>$90.00</h1>
                                    </div>
                                    
                                    <span class="text-gray-500">Women's Hard Court Tennis Shoe</span>
                                    <span class="text-gray-500">Black/White/Metallic Red Bronze</span>
                                    <div id="quantity-container" class="text-gray-500">
                                        <div id="size-container" class="">
                                            <span class="">Size</span>
                                            <select name="" id="" class="">
                                                <option value="" class="">1</option>
                                                <option value="" class="">2</option>
                                                <option value="" class="">3</option>
                                                <option value="" class="">4</option>
                                            </select>
                                        </div>
                                        <div id="quantity-container" class="">
                                            <span class="">Quantity</span>
                                            <select name="" id="" class="">
                                                <option value="" class="">1</option>
                                                <option value="" class="">2</option>
                                                <option value="" class="">3</option>
                                                <option value="" class="">4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div id="favorite-remove" class="text-gray-500">
                                        <a href="" class="underline">Move to Favorite</a>
                                        <a href="" class="underline">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        -->
                        <!-- Copy Item -->
                        
                        <!-- <div id="shipping-details" class="w-full h-2/6">
                            <h1 class="text-black font-bold">Shipping</h1>
                            <h2 class="text-black font-semibold">Arrives Tue, Jul 20 - Thu, Jul 22</h2>
                            <h1 class="text-black font-bold">Pickup</h1>
                            <a href="" class="text-black font-semibold underline">Find a Store</a>
                        </div>
                        <div id="alert-items" class="text-yellow-600 w-full h-1/6 flex flex-row justify-start items-center pt-4 pb-6 md:pt-10 gap-4 border-b-2">
                            <div id="icon-alert-items" class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M17.618 5.968l1.453-1.453 1.414 1.414-1.453 1.453a9 9 0 1 1-1.414-1.414zM12 20a7 7 0 1 0 0-14 7 7 0 0 0 0 14zM11 8h2v6h-2V8zM8 1h8v2H8V1z" fill="rgba(202,138,4,1)"/></svg></div>
                            <span class="">Just a few left. Order soon</span>
                        </div>
                        -->

                    </div>
                    <!-- dynamically display empty cart button -->
                    <div class="mt-8">
                        <a href="shoppingCart"><button class="text-white h-8 bg-black rounded-full px-5"><input name="cartID" type="hidden" value="a">Edit Cart</button></a>
                    </div>
                </div>
            </div> <!-- left -->

            <!-- 2/6 -->
            <div id="right" class="w-full h-full mt-10 md:mt-0 md:w-2/3">
                <div id="vertical-container-right-setup" class="w-full h-full">
                    <form method="POST">
                        <div id="vertical-container-right" class="flex flex-col justify-start items-start">
                            <h1 class="text-2xl font-bold">Payment</h1>
                            <div id="total-container" class="flex flex-row justify-start items-start pt-4 w-5/6 border-b-2 pb-4">
                                <div id="total-container-left" class="w-2/3">
                                    <h1 class="font-bold text-black">Total (after Shipping and Tax)</h1>
                                </div>
                                
                                <div id="total-container-right" class="w-1/3">
                                    <h1 class="">$<?php echo $_SESSION['orderTotal'];?></h1>
                                </div>
                            </div> <!-- total-container end -->
                            <div id="checkout-paypal" class="w-5/6 h-full">
                                <!-- dynamically display cards, else ask to register card -->
                                    <?php if(is_array($data['cards'])) {
                                    echo '<div class="which__card__container w-5/6 flex mr-3 py-5">';
                                        echo '<span style="font-family: Poppins, sans-serif;" class="border-b-2 cursor-pointer w-full font-medium -ml-4 text-sm sm:text-sm sm:w-4/6 md:text-sm md:w-4/6 md:-ml-2 lg:w-3/6 lg:-ml-1 lg:text-sm pt-1" required>Select Card:</span>';
                                        echo '<select required name="creditCard" id="creditCardSelect" class="bg-transparent border-b-2 cursor-pointer hover:border-b-8 w-full outline-none pb-2" select>';
                                    foreach($data['cards'] as $row) {
                                        echo '<option value="' . $row->creditCard . '">' . $row->creditCard . ' Card</option>';
                                        }
                                        echo '</select>';
                                    echo '</div>';
                                    
                                    echo '<div id="email" class="w-5/6 flex mr-3">';
                                        echo '<span style="font-family: Poppins, sans-serif;" class="border-b-2 cursor-pointer w-full font-medium -ml-4 text-sm sm:text-sm sm:w-full md:text-sm md:w-5/6 md:-ml-2 lg:w-3/6 lg:-ml-1 lg:text-sm pt-1" required>Confirm Email:</span>';
                                        echo '<input name="email" type="text" class="bg-transparent border-b-2 cursor-pointer w-full outline-none pb-2" required>';
                                    echo '</div>';
                                    echo '<a href=""><button id="checkout-button" class="text-white w-full h-16 bg-black rounded-full">Purchase</button></a>';

                                    } else {
                                        echo '<h1 style="font-family: Poppins, sans-serif;" class="border-b-2 w-full font-medium -ml-4 text-sm sm:text-sm sm:w-4/6 md:text-sm md:w-4/6 md:-ml-2 lg:w-3/6 lg:-ml-1 lg:text-sm pt-1" required>You must register a card to checkout your items.</h1>';
                                    } ?>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php
    include_once '../app/components/footer.php'
?>
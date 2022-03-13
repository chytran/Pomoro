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
                                        echo '<input name="email5" type="text" class="bg-slate-300 border-b-2 cursor-pointer w-full pb-2" required>';
                                    echo '</div>';
                                    echo '<a href=""><button id="checkout-button" class="text-white w-full h-16 bg-black rounded-full mt-5">Purchase</button></a>';

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
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
            <div id="left" class="h-full w-full md:w-4/6 pr-6">
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
                                    echo '<form method="POST">';
                                        echo '<div id="individual-items-container" class="w-full h-3/6">';
                                            echo '<div id="item" class="w-full flex flex-row justify-between items-center gap-2">';
                                                echo '<img src="' . ASSETS . 'pomoro/img/product' . $row->productID . '.png" alt="" class="w-24 h-24"';
                                                echo '<div id="item-detail-container" class="w-full">';
                                                    echo '<div id="title-price" class="flex flex-row justify-between items-start w-1/3">';
                                                        echo '<h1 class="font-semibold w-1/2">' . $row->name . '</h1><h1 class="w-1/2">$' . $row->price . '</h1>';
                                                        $subtotal += floatval($row->price);
                                                        $numItems += 1;
                                                    echo '</div>';
                                                    echo '<span class="text-black w-1/2">' . $row->description . '</span>';
                                                    echo '<div id="favorite-remove" class="text-black w-1/6">';
                                                        echo '<button class="text-white bg-red-500 hover:bg-red-800 transition duration-200 ease-in cursor-pointer w-full h-9 rounded-full mx-1 flex justify-center items-center"><input name="cartID" type="hidden" value="' . $row->id . '">Remove</button>';
                                                    echo '</div>';
                                            echo '</div>';
                                        echo '</div>';
                                    echo '</form>';                               
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
                    <?php if ($cartEmpty == 0) {
                        echo '<div class="mt-8">';
                            echo '<form method="POST">';
                                echo '<button class="text-white h-16 bg-black rounded-full px-5"><input name="cartID" type="hidden" value="a">Empty Cart</button>';
                            echo '</form>';
                        echo '</div>';
                    } ?>
                </div>
            </div> <!-- left -->

            <!-- 2/6 -->
            <div id="right" class="w-full h-full mt-10 md:mt-0 md:w-2/6">
                <div id="vertical-container-right-setup" class="w-full h-full">
                    <div id="vertical-container-right" class="flex flex-col justify-start items-start">
                        <h1 class="text-2xl font-bold">Summary</h1>
                        <div id="cost-container" class="w-5/6 border-b-2 pt-2 pb-5">
                            <div id="promo-code" class="w-full flex flex-row justify-start items-start text-black font-semibold gap-2 pt-2">
                                <h2 class="">Do you have a Promo Code?</h2>
                                <div id="arrow-down-icon" class=""></div>
                                <div id="question-icon" class="pt-1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm-1-7v2h2v-2h-2zm2-1.645A3.502 3.502 0 0 0 12 6.5a3.501 3.501 0 0 0-3.433 2.813l1.962.393A1.5 1.5 0 1 1 12 11.5a1 1 0 0 0-1 1V14h2v-.645z"/></svg></div>
                            </div>
                            <div id="subtotal-container" class="flex flex-row justify-start items-start pt-3">
                                <div id="subtotal-left-container" class="w-2/3 flex flex-row justify-start items-center">
                                    <h3 class="text-black font-medium">Subtotal</h3>
                                    <div id="question-icon" class="pl-1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm-1-7v2h2v-2h-2zm2-1.645A3.502 3.502 0 0 0 12 6.5a3.501 3.501 0 0 0-3.433 2.813l1.962.393A1.5 1.5 0 1 1 12 11.5a1 1 0 0 0-1 1V14h2v-.645z"/></svg></div>
                                </div>
                                <div id="subtotal-right-container" class="w-1/3">
                                    <div id="subtotal-price" class="">$<?php echo $subtotal; ?></div>
                                </div>
                                
                            </div>
                            <div id="estimate-shipping-container" class="flex flex-row justify-start items-start pt-3">
                                <div id="estimate-shipping-left-container" class="w-2/3 flex flex-row justify-start items-center">
                                    <h3 class="text-black font-medium">Estimated Shipping & Handling</h3>
                                </div>
                                <div id="subtotal-right-container" class="w-1/3">
                                    <div id="estimate-shipping-price" class="">$<?php try{$shipping = $numItems * 2; echo $shipping;} catch(Exception $e) { echo 0.00; } ?></div>
                                </div>
                            </div>
                            <div id="estimate-tax-container" class="flex flex-row justify-start items-start pt-3">
                                <div id="estimate-tax-left-container" class="w-2/3 flex flex-row justify-start items-center">
                                    <h3 class="text-black font-medium">Estimated Tax</h3>
                                    <div id="question-icon" class=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm-1-7v2h2v-2h-2zm2-1.645A3.502 3.502 0 0 0 12 6.5a3.501 3.501 0 0 0-3.433 2.813l1.962.393A1.5 1.5 0 1 1 12 11.5a1 1 0 0 0-1 1V14h2v-.645z"/></svg></div>
                                </div>
                                <div id="estimate-tax-right-container" class="w-1/3">
                                    <h1 class="">--</h1>
                                </div>
                            </div>
                        </div> <!-- cost container end -->
                        <div id="total-container" class="flex flex-row justify-start items-start pt-4 w-5/6 border-b-2 pb-4">
                            <div id="total-container-left" class="w-2/3">
                                <h1 class="font-bold text-black">Total</h1>
                            </div>
                            
                            <div id="total-container-right" class="w-1/3">
                                <h1 class="">$<?php $orderTotal = $subtotal + $shipping; $_SESSION['orderTotal']  = $orderTotal; echo $_SESSION['orderTotal'];?></h1>
                            </div>
                            <input type="hidden" value="<? $_SESSION['orderTotal']; ?>">
                        </div> <!-- total-container end -->

                        <div id="checkout-paypal" class="w-5/6 h-full pt-8">
                            <a href="checkout"><button id="checkout-button" class="text-white w-full h-16 bg-black rounded-full">Purchase</button></a>
                            <!-- <button id="Paypal-button" class="text-white w-full h-16 bg-gray-200 rounded-full mt-5"><span class="text-blue-800 font-bold">Pay</span><span class="text-blue-500 font-bold">Pal</span></button> -->
                        </div> <!--check-paypal end-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php
    include_once '../app/components/footer.php'
?>
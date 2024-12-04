<div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
    <div class="container">
        <h1 class="page-title">Shopping Cart<span>Shop</span></h1>
    </div><!-- End .container -->
</div><!-- End .page-header -->
<nav aria-label="breadcrumb" class="breadcrumb-nav">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?act=home">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
        </ol>
    </div><!-- End .container -->
</nav><!-- End .breadcrumb-nav -->
<?php if(isset($_COOKIE['msg1'])): ?>
<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
    <strong><?php echo htmlspecialchars($_COOKIE['msg1']); ?></strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php endif; ?>
<div class="page-content">
    <div class="cart">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">

                    <table class="table table-cart table-mobile">
                        <form id="cartForm" action="?act=checkout" method="GET">
                            <thead>
                                <tr>
                                    <th><input type="checkbox" onchange="selectAllCheckboxes()" name="select-all"
                                            id="select-all"></th>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
							if (isset($cartItems)) {
                                $tong = 0;
                                $shipping = 20000;
                                $_SESSON['shipping'] = $shipping;
                                
								foreach ($cartItems as $value) {
                                    $ttien=$value['product_price']*$value['quantity'];
                                    $tong+=$ttien; 
                                    $checkout = $tong + $shipping;
                            ?>
                                <tr>
                                    <td>
                                        <input type="checkbox" name="cart_items[]" id="<?=$value['cart_item_id']?>"
                                            class="checkboxes" value="<?=$value['cart_item_id']?>">
                                    </td>
                                    <td class="product-col">
                                        <label for="<?=$value['cart_item_id']?>">
                                            <div class="product">
                                                <figure class="product-media">
                                                    <img src="uploaded/<?=$value['product_img']?>" alt="Product image">
                                                </figure>

                                                <h3 class="product-title">
                                                    <a
                                                        href="?act=product&id=<?=$value['pro_id']?>"><?= $value['product_name'] ?></a>
                                                </h3><!-- End .product-title -->
                                            </div><!-- End .product -->
                                        </label>
                                    </td>
                                    <td class="price-col"><label
                                            for="<?=$value['cart_item_id']?>"><?=number_format($value['product_price'],0,",",".")?>
                                            đ</label></td>
                                    <td class="quantity-col">
                                        <div class="cart-product-quantity">
                                            <input type="number" class="form-control" value="<?= $value['quantity'] ?>"
                                                min="1" max="10" step="1" data-decimals="0" required>
                                        </div><!-- End .cart-product-quantity -->
                                    </td>
                                    <td class="total-col"><label
                                            for="<?=$value['cart_item_id']?>"><?=number_format($ttien,0,",",".")?>
                                            đ</label></td>
                                    <td class="remove-col"><a class="btn-remove"
                                            href="?act=cart&xuli=delete&product_id=<?= $value['pro_id'] ?>"><i
                                                class="icon-close"></i></a>
                                    </td>
                                </tr>
                                <?php }
							} else{?>
                                <tr>
                                    <td colspan="5" class="text-center">No products in the cart.</td>
                                </tr>
                                <?php
                            }
                            ?>
                            </tbody>
                    </table><!-- End .table table-wishlist -->

                    <div class="cart-bottom">
                        <a href="#" class="btn btn-outline-dark-2"><span>UPDATE CART</span><i
                                class="icon-refresh"></i></a>
                    </div><!-- End .cart-bottom -->
                </div><!-- End .col-lg-9 -->
                <aside class="col-lg-3">
                    <div class="summary summary-cart">
                        <h3 class="summary-title">Cart Total</h3><!-- End .summary-title -->

                        <table class="table table-summary">
                            <tbody>
                                <tr class="summary-subtotal">
                                    <td>Subtotal:</td>
                                    <td><?=number_format($tong,0,",",".")?> đ</td>
                                </tr><!-- End .summary-subtotal -->
                                <tr class="summary-shipping">
                                    <td>Shipping:</td>
                                    <td>&nbsp;</td>
                                </tr>

                                <tr class="summary-shipping-row">
                                    <td>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="free-shipping" name="shipping"
                                                class="custom-control-input">
                                            <label class="custom-control-label" for="free-shipping">Shipping</label>
                                        </div><!-- End .custom-control -->
                                    </td>
                                    <td><?=number_format($shipping,0,",",".")?> đ</td>
                                </tr><!-- End .summary-shipping-row -->

                                <tr class="summary-shipping-row">
                                    <td>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="standart-shipping" name="shipping"
                                                class="custom-control-input">
                                            <label class="custom-control-label"
                                                for="standart-shipping">Standart:</label>
                                        </div><!-- End .custom-control -->
                                    </td>
                                    <td>$10.00</td>
                                </tr><!-- End .summary-shipping-row -->

                                <tr class="summary-shipping-row">
                                    <td>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="express-shipping" name="shipping"
                                                class="custom-control-input">
                                            <label class="custom-control-label" for="express-shipping">Express:</label>
                                        </div><!-- End .custom-control -->
                                    </td>
                                    <td>$20.00</td>
                                </tr><!-- End .summary-shipping-row -->

                                <tr class="summary-shipping-estimate">
                                    <td>Estimate for Your Country<br> <a href="dashboard.html">Change address</a></td>
                                    <td>
                                        <?php
                                            if($address){
                                                    ?>
                                        <li><?=$address['address_name']?> - <?=$address['address_city']?>,
                                            <?=$address['address_street']?></li>
                                        <?php
                                                }
                                            
                                        ?>
                                    </td>
                                </tr><!-- End .summary-shipping-estimate -->

                                <tr class="summary-total">
                                    <td>Total:</td>
                                    <td><?=number_format($checkout,0,",",".")?> đ</td>
                                </tr><!-- End .summary-total -->
                            </tbody>
                        </table><!-- End .table table-summary -->

                        <input type="hidden" name="act" value="checkout">
                        <input type="hidden" name="shipping" value="<?=$shipping?>">
                        <button type='submit' class="btn btn-outline-primary-2 btn-order btn-block">PROCEED TO
                            CHECKOUT</button>
                        </form>
                    </div><!-- End .summary -->

                    <a href="?act=shop" class="btn btn-outline-dark-2 btn-block mb-3"><span>CONTINUE
                            SHOPPING</span><i class="icon-refresh"></i></a>
                </aside><!-- End .col-lg-3 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .cart -->
</div><!-- End .page-content -->
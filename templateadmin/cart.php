
<?php include('inc.header.php')?>

<style type="text/css">
	
	/*-------- 14. Shopping cart ----------*/
h1.cart-heading {
    color: #252525;
    font-size: 25px;
    margin-bottom: 25px;
    text-transform: uppercase;
}
.cart-title-area {
    padding-top: 30px;
}
.car-header-title h2 {
    font-size: 20px;
    margin: 0;
    text-transform: uppercase;
}
.table-content table {
    background: #fff none repeat scroll 0 0;
    border-color: #e5e5e5;
    border-radius: 0;
    border-style: solid;
    border-width: 1px 0 0 1px;
    margin: 0 0 50px;
    text-align: center;
    width: 100%;
    border: none;
}
.wishlist .table-content table {
    margin: 0 0 0px;
}
.table-content.wish table {
    margin: 0 0 0px;
}
.table-content table th {
    border-top: medium none;
    color: #555;
    font-size: 16px;
    font-weight: normal;
    padding: 15px 10px 12px;
    text-align: center;
    text-transform: uppercase;
    vertical-align: middle;
    white-space: nowrap;
}
.table-content table td {
    border-top: medium none;
    padding: 40px 10px;
    vertical-align: middle;
    font-size: 13px;
}
.table-content table td input {
    background: #e5e5e5 none repeat scroll 0 0;
    border: medium none;
    border-radius: 3px;
    color: #6f6f6f;
    font-size: 15px;
    font-weight: normal;
    height: 40px;
    padding: 0 5px 0 10px;
    width: 60px;
}
.table-content table td.product-subtotal {
    color: #555;
    font-size: 15px;
    width: 120px;
}
.table-content table td.product-name a {
    color: #6f6f6f;
    font-size: 15px;
    margin-left: 10px;
}
.table-content table td.product-name a:hover {
    color: #050035;
}
.table-content table td.product-name {
    width: 270px;
}
.table-content table td.product-thumbnail {
    width: 130px;
}
.table-content table td.product-remove i {
    color: #919191;
    display: inline-block;
    font-size: 35px;
    height: 40px;
    line-height: 40px;
    text-align: center;
    width: 40px;
}
.table-content table .product-price .amount {
    color: #555;
    font-size: 15px;
}
.table-content table td.product-remove i:hover {
    color: #050035;
}
.table-content table td.product-quantity {
    width: 180px;
}
.table-content table td.product-remove {
    width: 150px;
}
.table-content table td.product-price-cart {
    width: 130px;
}
thead {
    background-color: #f6f6f6;
}
.coupon input {
    background-color: transparent;
    border: 1px solid #ddd;
    color: #555;
    font-size: 13px;
    height: 42px;
    width: 120px;
}
.coupon2 input {
    width: inherit;
}
.coupon-all input.button {
    background-color: #333;
    border: 0 none;
    border-radius: 2px;
    color: #fff;
    display: inline-block;
    font-size: 13px;
    font-weight: 700;
    height: 42px;
    letter-spacing: 1px;
    line-height: 42px;
    padding: 0 25px;
    text-transform: uppercase;
    transition: all 0.3s ease-in-out 0s;
    width: inherit;
}
.coupon-all input.button:hover {
    background-color: #050035;
    border: medium none;
    color: #fff;
}
.coupon-all {
    margin-top: 30px;
}
.coupon {
    float: left;
}
.coupon2 {
    float: right;
}
.cart-page-total {
    float: right;
    width: 35%;
}
.cart-page-total > ul {
    border: 1px solid #ddd;
}
.cart-page-total li {
    border-bottom: 1px solid #ddd;
    color: #555;
    font-size: 15px;
    font-weight: bold;
    padding: 10px 30px;
}
.cart-page-total li:last-child {
    border-bottom: none;
}
.cart-page-total {
    padding-top: 50px;
}
.cart-page-total > a {
    background-color: #f97eb5;
    /*border: 1px solid #333;*/
    color: #fff;
    display: inline-block;
    margin-top: 30px;
    padding: 9px 20px;
    text-transform: capitalize;
    transition: all 0.3s ease 0s;
}
.cart-page-total > a:hover {
    background-color: #01b3e3;
    text-decoration: none;
    color: #fff;
    /*border: 1px solid #050035;*/
}
.cart-page-total > h2 {
    font-size: 25px;
    font-weight: 700;
    margin-bottom: 20px;
    text-transform: capitalize;
}


.tot{

	border: 1px solid;
    padding: 1em;
}


</style>


 <div class="cart-main-area pt-95 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h1 class="cart-heading">Cart</h1>
                        <form action="#">
                            <div class="table-content table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            
                                            <th>images</th>
                                            <th>Product</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Total</th>
                                            <th>remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            
                                            <td class="product-thumbnail">
                                                <a href="#"><img src="images/cart/1.jpg" alt=""></a>
                                            </td>
                                            <td class="product-name"><a href="#">Wooden Furniture </a></td>
                                            <td class="product-price-cart"><span class="amount">KD 100.00</span></td>
                                            <td class="product-quantity">
                                                <input value="1" type="number">
                                            </td>
                                            <td class="product-subtotal">KD 100.00</td>
                                            <td class="product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                                        </tr>
                                        <tr>
                                            
                                            <td class="product-thumbnail">
                                                <a href="#"><img src="images/cart/2.jpg" alt=""></a>
                                            </td>
                                            <td class="product-name"><a href="#">Vestibulum dictum</a></td>
                                            <td class="product-price-cart"><span class="amount">KD 100.00</span></td>
                                            <td class="product-quantity">
                                                <input value="1" type="number">
                                            </td>
                                            <td class="product-subtotal">KD 100.00</td>
                                            <td class="product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                                        </tr>
                                        <tr>
                                            
                                            <td class="product-thumbnail">
                                                <a href="#"><img src="images/cart/3.jpg" alt=""></a>
                                            </td>
                                            <td class="product-name"><a href="#">Vestibulum dictum</a></td>
                                            <td class="product-price-cart"><span class="amount">KD 100.00</span></td>
                                            <td class="product-quantity">
                                                <input value="1" type="number">
                                            </td>
                                            <td class="product-subtotal">KD 100.00</td>
                                            <td class="product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12" style="padding-bottom: 3em;">
                                    <div class="cart-page-total">
                                        <h2>Cart totals</h2>


                                        <div class="row tot">
                                        	<div class="col-sm-6">
                                        		Subtotal
                                        	</div>

                                        	<div class="col-sm-6">
                                        		400.00
                                        	</div>


                                        </div>
                                        
                                        
                                        
                                        
                                        <div class="row tot">
                                        	<div class="col-sm-6">
                                        		Delivery charge
                                        	</div>

                                        	<div class="col-sm-6">
                                        		10.00
                                        	</div>


                                        </div> 
                                        
                                        
                                        
                                        <div class="row tot">
                                        	<div class="col-sm-6">
                                        		Total KD
                                        	</div>

                                        	<div class="col-sm-6">
                                        		410.00
                                        	</div>


                                        </div>









                                        
                                        <!-- <ul>
                                            <li>Subtotal<span style="float: right;">100.00</span></li>
                                            <li>Total<span>100.00</span></li>
                                        </ul> -->
                                        <a href="products.php">Continue Shoping</a>
                                        <a href="checkout.php">Proceed to checkout</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

         
<?php include('inc.footer.php')?>

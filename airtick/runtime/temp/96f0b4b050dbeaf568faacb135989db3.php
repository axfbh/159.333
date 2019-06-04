<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"E:\xampp\htdocs\airtick\public/../application/index\view\cost\payment.html";i:1558716254;}*/ ?>
<html>
    <head>
        <link rel="stylesheet" type="text/css"  href="__CSS__/payment.css"/>
        <script type="text/javascript" src="__JS__/jquery-1.10.2.min.js"></script>
    </head>
    <body>
         <div class="main">
             <div class="contain">
                 <form action="<?php echo url('costFee'); ?>" method="POST">
                    <div class="title">
                        <h1>Payment</h1><h2>express</h2>
                    </div>
                    <div class="checkout">
                            <div class="ctitle">
                                <h2>Payment Checkout</h2>
                            </div>
                            <div class="fee">
                                <span class="fee-amout">Amount</span><span class="fees"><dfn>$<dnf></span>
                            </div>
                    </div>
                    <div class="card-pay">
                            <div class="ctitle">
                                    <h2>Payment Checkout</h2>
                            </div>
                            <div class="card">
                                <div class="card-cover">
                                    <span class="num">Card Number:</span>
                                    <div class="input-cover">
                                            <input type="text">
                                    </div>
                                </div>
                                <div class="card-cover">
                                        <span class="num">Name On Card:</span>
                                        <div class="input-cover">
                                                <input type="text">
                                        </div>
                                </div>
                                <div class="card-cover">
                                        <span class="num">Expiry Date:</span>
                                        <div class="input-cover">
                                                <input type="text">
                                        </div>
                                </div>
                                <div class="card-cover">
                                        <span class="num">CVC:</span>
                                        <div class="input-cover">
                                                <input type="text">
                                        </div>
                                </div>
                            </div>
                    </div>

                    <div >
                        <button type="submit">submit</button>
                    </div>
                </form>
             </div>
         </div>
    </body>
</html>
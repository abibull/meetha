<div class="container">
    <div class="col-md-3">

        <div class="panel panel-default sidebar-menu">

            <div class="panel-heading">
                <h3 class="panel-title">Customer section</h3>
            </div>

            <div class="panel-body">

                <ul class="nav nav-pills nav-stacked">
                    <li class="active">
                        <?php echo $this->Html->link('<i class="fa fa-list"></i> My orders' , array('controller'=>'products','action'=>'ordershistory'),array('escape'=>false));?>
                    </li>
                    <li>
                        <?php echo $this->Html->link('<i class="fa fa-heart"></i> My wishlist' , array('controller'=>'products','action'=>'wishlist'),array('escape'=>false));?>
                    </li>
                    <li>
                        <?php echo $this->Html->link('<i class="fa fa-user"></i> My account' , array('controller'=>'users','action'=>'accountupdate'),array('escape'=>false));?>
                    </li>
                    <li>
                        <?php echo $this->Html->link('<i class="fa fa-sign-out"></i> Logout' , array('controller'=>'users','action'=>'logout'),array('escape'=>false));?>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-md-9" id="customer-order">
        <div class="box">
            <h1>Order #1735</h1>

            <p class="lead">Order #1735 was placed on <strong>22/06/2016</strong> and is currently <strong>Being prepared</strong>.</p>
            <p class="text-muted">If you have any questions, please feel free to <a href="">contact us</a>, our customer service center is working for you 24/7.</p>

            <hr>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th colspan="2">Product</th>
                            <th>Quantity</th>
                            <th>Unit price</th>
                            <th>Discount</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <a href="#">
                                    <img src="" alt="">
                                </a>
                            </td>
                            <td><a href="#">Kaju Masala</a>
                            </td>
                            <td>2</td>
                            <td><i class="fa fa-inr"></i> 1000</td>
                            <td><i class="fa fa-inr"></i> 0.00</td>
                            <td><i class="fa fa-inr"></i> 2000</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="5" class="text-right">Order subtotal</th>
                            <th><i class="fa fa-inr"></i> 2000</th>
                        </tr>
                        <tr>
                            <th colspan="5" class="text-right">Shipping and handling</th>
                            <th><i class="fa fa-inr"></i> 10.00</th>
                        </tr>
                        <tr>
                            <th colspan="5" class="text-right">Tax</th>
                            <th><i class="fa fa-inr"></i> 0.00</th>
                        </tr>
                        <tr>
                            <th colspan="5" class="text-right">Total</th>
                            <th><i class="fa fa-inr"></i> 2000</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.table-responsive -->

            <div class="row addresses">
                <div class="col-md-6">
                    <h2>Invoice address</h2>
                    <p>Rohit Sharma
                        <br>Mendu Gate Chauraha
                        <br>Hathras
                        <br>204101
                        <br>Uttar Pradesh
                        <br>India
                    </p>
                </div>
                <div class="col-md-6">
                    <h2>Shipping address</h2>
                    <p>Mohit Sharma
                        <br>Basant Bagh Colony
                        <br>Hathras
                        <br>204101
                        <br>Uttar Pradesh
                        <br>India
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
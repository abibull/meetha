<div class="container">
    <div class="row">
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
                            <?php echo $this->Html->link('<i class="fa fa-sign-out"></i> Logout' , array('controller'=>'products','action'=>'index'),array('escape'=>false));?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="row products">

                <div class="col-md-3 col-sm-4">
                    <div class="product">
                        <div class="flip-container">
                            <div class="flipper">
                                <div class="front">
                                    <a href="">
                                        <img src="img/product1.jpg" alt="" class="img-responsive">
                                    </a>
                                </div>
                                <div class="back">
                                    <a href="detail.html">
                                        <img src="img/product1_2.jpg" alt="" class="img-responsive">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a href="detail.html" class="invisible">
                            <img src="img/product1.jpg" alt="" class="img-responsive">
                        </a>
                        <div class="text">
                            <h3><a href="detail.html">Kaju Masala</a></h3>
                            <p class="price"><i class="fa fa-inr"></i> 1000</p>
                            <p class="buttons">
                                <?php echo $this->Html->link('View' , array('controller'=>'products' ,'action'=> 'orderhistory'), array('class'=>'btn btn-primary btn-sm'));?>
                                <?php echo $this->Html->link('<i class="fa fa-shopping-cart"></i> Add to cart' , array('controller'=>'' ,'action'=> ''), array('escape'=> false, 'class'=>'btn btn-default btn-sm'));?>
                            </p>
                        </div>
                        <!-- /.text -->
                    </div>
                    <!-- /.product -->
                </div>
            </div>
            <!-- /.products -->
        </div>
    </div>
 </div>
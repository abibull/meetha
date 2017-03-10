<div class="container">
    <div class="col-md-12">
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
                                <?php echo $this->Html->link('<i class="fa fa-heart"></i> My wishlist' , array('controller'=>'','action'=>''),array('escape'=>false));?>
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
                <div class="box">
                    <h1>My orders</h1>

                    <p class="lead">Your orders on one place.</p>
                    <p class="text-muted">If you have any questions, please feel free to <a href="">contact us</a>, our customer service center is working for you 24/7.</p>

                    <hr>

                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Order</th>
                                    <th>Date</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th># 1735</th>
                                    <td>22/06/2016</td>
                                    <td><i class="fa fa-inr"></i> 2000.00</td>
                                    <td><span class="label label-info">Being prepared</span>
                                    </td>
                                    <td><!--a href="customer-order.html" class="btn btn-primary btn-sm">View</a-->
                                    <?php echo $this->Html->link('View' , array('controller'=>'products' ,'action'=> 'orderhistory'), array('class'=>'btn btn-primary btn-sm'));?>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
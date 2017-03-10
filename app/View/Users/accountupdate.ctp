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
                                <?php echo $this->Html->link('<i class="fa fa-list"></i> My orders' , array('controller'=>'products','action'=>'orderhistory'),array('escape'=>false));?>
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
                    <h1>My account</h1>
                    <p class="lead">Change your personal details or your password here.</p>
                    <h3>Change password</h3>

                    <?php echo $this->Session->flash(); ?>
                    <?php echo $this->Form->create('User' , array('class' => 'form' , 'inputDefaults' => array('label' => false))); ?>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="password_old">Old password</label>
                                    <?php echo $this->Form->input('oldpassword',array('class'=>'form-control' ,'type' => 'password', 'name' => 'oldpassword'));?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="password_1">New password</label>
                                    <?php echo $this->Form->input('password',array('class'=>'form-control'));?>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="password_2">Retype new password</label>
                                    <?php echo $this->Form->input('repassword',array('class'=>'form-control' ,'type' => 'password', 'name' => 'repassword'));?>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->

                        <div class="col-md-6">
                            <div class="form-group">
                                <?php echo $this->Form->submit('Save new password',array( 'class'=>'btn btn-primary'));?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <?php echo $this->Html->link('Cancel' , array('controller' => 'products' , 'action' => 'index'),array('class'=>"btn btn-danger"));?>
                            </div>
                        </div>
                    <?php echo $this->Form->end(); ?>

                    <hr>

                    <h3>Personal details</h3>
                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="firstname">Firstname</label>
                                    <input type="text" class="form-control" id="firstname">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="lastname">Lastname</label>
                                    <input type="text" class="form-control" id="lastname">
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="company">Company</label>
                                    <input type="text" class="form-control" id="company">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="street">Street</label>
                                    <input type="text" class="form-control" id="street">
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->

                        <div class="row">
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label for="city">Company</label>
                                    <input type="text" class="form-control" id="city">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label for="zip">ZIP</label>
                                    <input type="text" class="form-control" id="zip">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label for="state">State</label>
                                    <select class="form-control" id="state"></select>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label for="country">Country</label>
                                    <select class="form-control" id="country"></select>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="phone">Telephone</label>
                                    <input type="text" class="form-control" id="phone">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email">
                                </div>
                            </div>
                            <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save changes</button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
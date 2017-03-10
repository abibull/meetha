<div class="container">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6">
                <div class="box">
                    <h1>New Account</h1>
                    <p class="text-muted">If you have any questions, please feel free to
                    <?php echo $this->Html->link('contact us' , array('controller' => 'products' , 'action' => 'contact'));?>
                    </p>
                    <p class="text-muted">If Already you are registerd customer.
                    <?php echo $this->Html->link('Go To Login' , array('controller' => 'users' , 'action'=>'login'));?>
                    </p>
                    <hr>
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Please Sign Up</h3>
                        </div>
                        <div class="panel-body">
                            <?php echo $this->Session->flash(); ?>
                            <?php echo $this->Form->create('User',array('class'=>'form-horizontal','inputDefaults'=>array('label'=>false)));?>

                                <div class="form-group">
                                    <div class="col-md-12">
                                    <label>* First Name</label>
                                    <?php echo $this->Form->input('fname',array('class'=>'form-control' , 'placeholder'=>"" , 'autofocus'=>'autofocus'));?>
                                </div></div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                    <label>Last Name</label>
                                    <?php echo $this->Form->input('lname',array('class'=>'form-control' , 'placeholder'=>"" ));?>
                                </div></div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                    <label for="">* Mobile no. (Don't include +91)</label>
                                    <?php echo $this->Form->input('mob',array('class'=>'form-control' , 'placeholder'=>""));?>
                                </div></div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                    <label>* Email </label>
                                    <?php echo $this->Form->input('email',array('class'=>'form-control' , 'placeholder'=>"(eg : xyz@abcde.com)"));?>
                                </div></div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                    <label>Password</label>
                                    <?php echo $this->Form->input('password',array('class'=>'form-control' , 'placeholder'=>""));?>
                                </div></div>

                                <!-- Change this to a button or input when using this as a form -->
                                <?php echo $this->Form->submit('Register',array('class'=>'btn btn-primary btn-block'));?>

                            <?php echo $this->Form->end();?>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
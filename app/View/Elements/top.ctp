<div id="top">
    <div class="container">
        <div class="col-md-6 offer" data-animate="fadeInDown">
            <a href="#" class="btn btn-success btn-sm" data-animate-hover="shake">Offer of the day</a>
            <a href="#">Get flat 10% off on orders over<i class="fa fa-inr"></i>100!</a>
        </div>
        <div class="col-md-6" data-animate="fadeInDown">
            <ul class="menu">
                <li><a data-animate="flash">Quick Order Call : +91 9650099469</li></a>

                <?php if(!$this->Session->check('Auth.User')) : ?>
                <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a>
                </li>
                <li><a href="/meetha/users/signup">Register</a>
                </li>
                <?php endif ; ?>

                <li><a href="/meetha/products/contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
        <div class="modal-dialog modal-sm">

            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="Login">Customer login</h4>
                </div>
                <div class="modal-body">
                    <?php echo $this->Session->flash(); ?>
                    <?php echo $this->Form->create('User',array('url' => array('controller' => 'users' , 'action' => 'login') ,'class'=>'form-horizontal','inputDefaults'=>array('label'=>false)));?>
                      <div class="form-group">
                          <div class="col-md-12">
                          <?php echo $this->Form->input('mob',array('class'=>'form-control' , 'placeholder'=>"Mobile No.",'autofocus'=>'autofocus'));?>
                      </div></div>
                      <div class="form-group">
                          <div class="col-md-12">
                          <?php echo $this->Form->input('password',array('class'=>'form-control' , 'placeholder'=>"Password"));?>
                      </div></div>

                      <!-- Change this to a button or input when using this as a form -->
                    <?php echo $this->Form->submit('Login',array('class'=>'btn btn-primary btn-block'));?>
                    <?php echo $this->Form->end();?>
                    <p class="text-center text-muted">Not registered yet?</p>
                    <p class="text-center text-muted"><?php echo $this->Html->link('Register Now' , array('controller' => 'users', 'action'=>'signup'));?>
                    ! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- *** TOP BAR END *** -->

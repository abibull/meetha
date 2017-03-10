<div class="container">
    <div class="col-md-6">
        <div class="box">
          <h1>Log In</h1>
          <p class="lead">Already our customer? If Not Yet then <?php echo $this->Html->link('Register',array('controller'=>'users','action'=>'signup'));?></p>
          <hr>
          <div class="login-panel panel panel-default">
              <div class="panel-heading">
                  <h3 class="panel-title">Please Sign In</h3>
              </div>
              <div class="panel-body">
                  <?php echo $this->Session->flash(); ?>
                  <?php echo $this->Form->create('User',array('class'=>'form-horizontal','inputDefaults'=>array('label'=>false)));?>
                      <div class="form-group">
                          <div class="col-md-12">
                          <?php echo $this->Form->input('mob',array('class'=>'form-control' , 'placeholder'=>"Mobile Number (9945784578)",'autofocus'=>'autofocus'));?>
                      </div></div>
                      <div class="form-group">
                          <div class="col-md-12">
                          <?php echo $this->Form->input('password',array('class'=>'form-control' , 'placeholder'=>"Password"));?>
                      </div></div>

                      <!-- Change this to a button or input when using this as a form -->
                      <?php echo $this->Form->submit('Login',array('class'=>'btn btn-primary btn-block'));?>

                  <?php echo $this->Form->end();?>
              </div>
          </div>
      </div>
    </div>
</div>
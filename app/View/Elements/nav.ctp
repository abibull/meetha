<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a class="navbar-brand home" href="/meetha" data-animate-hover="bounce">
                <?php echo $this->Html->image('logo.png',array('class'=>'hidden-xs')) ;?>
                <?php echo $this->Html->image('logo-small.png',array('class'=>'visible-xs')) ;?>
            </a>

            <!--button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button-->
            <div class="navbar-buttons">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="fa fa-align-justify"></i>
                </button>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                    <span class="sr-only">Toggle search</span>
                    <i class="fa fa-search"></i>
                </button>
                <?php echo $this->Html->link('<i class="fa fa-shopping-cart"></i>  <span class="hidden-xs"></span>',array('controller'=>'','action'=>''),array('escape'=>false,'class'=>'btn btn-default navbar-toggle'));?>
            </div>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navigation">
            <ul class="nav navbar-nav">
                <li>
                    <?php echo $this->Html->link('Home' , array('controller'=> 'products' , 'action'=>'index'));?>
                </li>
                <li>
                    <?php echo $this->Html->link('Sweets' , array('controller'=> 'products' , 'action'=>'index'));?>
                </li>
                <li>
                    <?php echo $this->Html->link('Namkeens' , array('controller'=> 'products' , 'action'=>'namkeen'));?>
                </li>

                <?php if($this->Session->read('Auth.User.type')== 'admin') : ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-delay="200">
                        <i class="fa fa-plus fa-fw"></i>Add <b class="caret"></b></a>
                        <ul class="dropdown-menu dropdown-messages ">
                            <li class="dropdown">
                                <!--?php echo $this->Html->link('Sweet <b class="caret"></b>' , array('data-hover'=>'dropdown'),array('escape'=>false));?-->
                                <a href="#" class="dropdown-toggle" data-hover="dropdown">
                                Sweet <b class="caret"></b></a>
                                <ul class="dropdown-menu dropdown-messages">
                                    <li>
                                        <?php echo $this->Html->link('Add Sweet Item' , array('controller'=>'products','action'=>'addswt'));?>
                                    </li>
                                    <li>
                                        <?php echo $this->Html->link('Sweet Items List' , array('controller'=>'products','action'=>'swtlst'));?>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-hover="dropdown">
                                Namkeen <b class="caret"></b></a>
                                <ul class="dropdown-menu dropdown-messages">
                                    <li>
                                        <?php echo $this->Html->link('Add Namkeen Item' , array('controller'=>'products','action'=>'addswt'));?>
                                    </li>
                                    <li>
                                        <?php echo $this->Html->link('Namkeen Items List' , array('controller'=>'products','action'=>'nmklst'));?>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                <?php endif;?>

                <?php if($this->Session->check('Auth.User')) : ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
                    <i class="fa fa-user fa-fw"></i><?php echo $this->Session->read('Auth.User.fname');?><b class="caret"></b></a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <?php echo $this->Html->link(__('<i class="fa fa-archive fa-fw"></i> Orders history'),array('controller'=>'products','action'=>'ordershistory' ) ,array('escape'=>false) );?>
                        </li>
                        <li>
                            <?php echo $this->Html->link(__('<i class="fa fa-heart fa-fw"></i> Wishlist'),array('controller'=>'products','action'=>'wishlist' ) ,array('escape'=>false) );?>
                        </li>
                        <li>
                            <?php echo $this->Html->link(__('<i class="fa fa-edit fa-fw"></i> Account / change password'),array('controller'=>'users','action'=>'accountupdate' ) ,array('escape'=>false) );?>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <?php echo $this->Html->link(__('<i class="fa fa-sign-out fa-fw"></i> Logout'),array('controller'=>'users','action'=>'logout'),array('escape'=>false) );?>
                        </li>
                    </ul>
                </li>
                <?php endif ; ?>
            </ul>
        </div>

        <!---------------------------------------  SEARCH and CART ------------------------------------------>

        <div class="navbar-collapse collapse right">			
		
            <?php
				$count = $this->requestAction(array('controller' => 'carts', 'action' => 'showitemsincart'));
				#echo $count;
                echo $this->Html->link('<i class="fa fa-shopping-cart"></i><span class="hidden-sm">'.$count.' items in cart</span>',
                array('controller'=>'','action'=>''),array('escape'=>false,'class'=>'btn btn-primary nav-btn'));
            ?>
        </div>
    </div>
    <!------- container ---------->
</nav>


<!--script>
	$.ajax({
		url: '/carts/showitemsincart',
		success: function (result) {
			$('#myelement').html(result);
		}		
	});
</script-->
<?php
	    echo $this->Html->script('jquery.min');
	    echo $this->Html->script('owl.carousel.min');
?>
<div id="bgbk">
<div id="owl-demo" class="owl-carousel owl-theme">
   <?php foreach($list as $lst) : ?>
       <div ><?php echo $this->Html->image($lst['Picture'][0]['smimg'], array("class"=>"item"));?></div>
   <?php endforeach ;?>
</div>
</div>

<div id="all">

	<div id="content">
		<div class="container">
			<div class="box text-center" >
			    <h2>MAKING FINEST INDIAN SWEETS FOR GENERATIONS</h2>
			    <p> DEVENDRA MITHAI WALA from HATHRAS. Hathras city is famous in the region for its sweets made from Desi Ghee.
			        In our shop sweets are mainly prepared from Deshi ghee, Milk and Dryfruits. share sweets on celebrations and used,
			        as gifts on special occasions. People living in the region love sweets and traditionally consume sweets in
			        their day-to-day life.
                </p>
            </div>
            <div class="row products">

            <?php foreach($list as $lst) : ?>
                <div class="col-md-4 col-sm-6">
                    <div class="product">
                        <div class="flip-container">
                            <div class="flipper">
                                <div class="front">
                                    <?php $i=0 ; ?>

                                    <?php
                                    $img = $this->Html->image($lst['Picture'][$i]['mdimg'],array('class'=>'img-responsive'));
                                    echo $this->Html->link($img, array('controller'=>'products' , 'action'=>'detail',$lst['Product']['id']),array('escape'=>false));
                                    ?>
                                </div>
                                <div class="back">
                                    <?php
                                    $img = $this->Html->image($lst['Picture'][$i]['mdimg'],array('class'=>'img-responsive'));
                                    echo $this->Html->link($img, array('controller'=>'products' , 'action'=>'detail',$lst['Product']['id']),array('escape'=>false));
                                    ?>
                                </div>
                            </div>
                        </div>
                        <a href="detail.html" class="invisible">
                            <?php echo $this->Html->image($lst['Picture'][$i]['mdimg'],array('class'=>'img-responsive')) ;?>
                        </a>
                        <div class="text">
                            <h3><?php echo $this->Html->link($lst['Product']['title'] , array('controller'=>'products','action'=>'detail',$lst['Product']['id']));?></h3>
                            <p class="price"><i class="fa fa-inr"></i> <?php echo $lst['Product']['price'];?></p>
                            <p class="buttons">
                                <?php echo $this->Html->link('View detail',array('controller'=>'products','action'=>'detail',$lst['Product']['id']),array('class'=>'btn btn-default'));?>
                                <?php echo $this->Html->link('<i class="fa fa-shopping-cart"></i> Add to cart' , array('controller'=>'carts','action'=>'addcrt',$lst['Product']['id']),array('escape'=>false,'class'=>'btn btn-primary'));?>
                            </p>
                        </div>
                        <!-- /.text -->
                    </div>
                    <!-- /.product -->
                </div>
            <?php endforeach;?>
            </div>
		</div>
	</div>
    <!-- /#content -->
</div>


<script>
$(document).ready(function() {

  var owl = $("#owl-demo");

  owl.owlCarousel({
        items : 4, //10 items above 1000px browser width
        itemsDesktop : [700,2], //5 items between 1000px and 901px
        itemsDesktopSmall : [600,2], // betweem 900px and 601px
        itemsTablet: [300,1], //2 items between 600 and 0
        itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option
  });
  owl.trigger('owl.play',2000);

});
</script>

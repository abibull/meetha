<?php
	    echo $this->Html->script('jquery.min');
	    echo $this->Html->script('owl.carousel.min');
?>
<div id="bgbk">
<div id="owl-demo" class="owl-carousel owl-theme">
    <div ><?php echo $this->Html->image('badam.png' , array("class"=>"item1"));?></div>
    <div ><?php echo $this->Html->image('kajumasala.png' , array("class"=>"item1"));?></div>
    <div ><?php echo $this->Html->image('kajunamak.png' , array("class"=>"item1"));?></div>
    <div ><?php echo $this->Html->image('badam.png' , array("class"=>"item1"));?></div>
    <div ><?php echo $this->Html->image('kajumasala.png' , array("class"=>"item1"));?></div>
    <div ><?php echo $this->Html->image('kajunamak.png' , array("class"=>"item1"));?></div>
    <div ><?php echo $this->Html->image('badam.png' , array("class"=>"item1"));?></div>
    <div ><?php echo $this->Html->image('kajumasala.png' , array("class"=>"item1"));?></div>
    <div ><?php echo $this->Html->image('kajunamak.png' , array("class"=>"item1"));?></div>
    <div ><?php echo $this->Html->image('badam.png' , array("class"=>"item1"));?></div>
    <div ><?php echo $this->Html->image('kajumasala.png' , array("class"=>"item1"));?></div>
    <div ><?php echo $this->Html->image('kajunamak.png' , array("class"=>"item1"));?></div>
    <div ><?php echo $this->Html->image('badam.png' , array("class"=>"item1"));?></div>
    <div ><?php echo $this->Html->image('kajumasala.png' , array("class"=>"item1"));?></div>
    <div ><?php echo $this->Html->image('kajunamak.png' , array("class"=>"item1"));?></div>
</div>
</div>

<div id="all">

	<div id="content">
		<div class="container">
			<div class="">
				<div class="row products">

					<div class="col-md-4 col-sm-6">
						<div class="product">
							<div class="flip-container">
								<div class="flipper">
									<div class="front">
										<a href="/meetha/products/detail">

											<?php echo $this->Html->image('kajumasala_md.png',array('class'=>'img-responsive')) ;?>
										</a>
									</div>
									<div class="back">
										<a href="/meetha/products/detail">
											<?php echo $this->Html->image('kajumasala_md.png',array('class'=>'img-responsive')) ;?>
										</a>
									</div>
								</div>
							</div>
							<a href="detail.html" class="invisible">
								<?php echo $this->Html->image('kajumasala_md.png',array('class'=>'img-responsive')) ;?>
							</a>
							<div class="text">
								<h3><a href="/meetha/products/detail">Kaju Masala</a></h3>
								<p class="price"><del><i class="fa fa-inr"></i>1100</del> <i class="fa fa-inr"></i>1000 / KG</p>
								<p class="buttons">
									<a href="/meetha/products/detail" class="btn btn-default">View detail</a>
									<a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
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
        <!-- /#content -->
</div>


<script>
$(document).ready(function() {

  var owl = $("#owl-demo");

  owl.owlCarousel({
        items : 6, //10 items above 1000px browser width
        itemsDesktop : [1000,4], //5 items between 1000px and 901px
        itemsDesktopSmall : [900,4], // betweem 900px and 601px
        itemsTablet: [600,2], //2 items between 600 and 0
        itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option
  });
  owl.trigger('owl.play',2000);

});
</script>

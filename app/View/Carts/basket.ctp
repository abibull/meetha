<div id="all">

	<div id="content">
		<div class="container">               
			<div class="col-md-9" id="basket">

				<div class="box">

					<form method="post" action="checkout1.html">

						<h1>Shopping cart</h1>
						<p class="text-muted">You currently have 3 item(s) in your cart.</p>
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th colspan="2">Product</th>
										<th>Quantity</th>
										<th>Unit price</th>
										<th>Discount</th>
										<th colspan="2">Total</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach($contents as $content)  : ?>
									<tr>
										<td>                                                                                                    
											<?php 
												$img = $this->Html->image($content['Picture'][0]['smimg']);
												echo $this->Html->link($img,array('controller'=>'products','action'=>'detail',$content['Product']['id']),array('escape'=>false,'class'=>''));
											?>                                               
										</td>
										<td><?php echo $content['Product']['title'];?>
										</td>
										<td>
											<input type="number" value="2" class="form-control">
										</td>
										<td><?php echo $content['Product']['price'];?></td>
										<td>$0.00</td>
										<td>$246.00</td>
										<td>
										<!--a href="#"><i class="fa fa-trash-o"></i></a-->
										<?php echo $this->Html->link('<span class="fa fa-trash-o"></span>',array('controller'=>'Carts','action'=>'delete',$content['Product']['id']),array('escape'=>false));?>
										</td>
									</tr>
									<?php endforeach;?>
								</tbody>
								<tfoot>
									<tr>
										<th colspan="5">Total</th>
										<th colspan="2">$446.00</th>
									</tr>
								</tfoot>
							</table>

						</div>
						<!-- /.table-responsive -->

						<div class="box-footer">
							<div class="pull-left">								
								<?php echo $this->Html->link('<i class="fa fa-chevron-left"></i> Continue shopping',array('controller'=>'products','action'=>'index'),array('escape'=>false,'class'=>'btn btn-default'));?>
							</div>
							<div class="pull-right">
								<button class="btn btn-default"><i class="fa fa-refresh"></i> Update basket</button>
								<button type="submit" class="btn btn-primary">Proceed to checkout <i class="fa fa-chevron-right"></i>
								</button>
							</div>
						</div>

					</form>

				</div>
				<!-- /.box -->				

			</div>
			<!-- /.col-md-9 -->

			<div class="col-md-3">
				<div class="box" id="order-summary">
					<div class="box-header">
						<h3>Order summary</h3>
					</div>
					<p class="text-muted">Shipping and additional costs are calculated based on the values you have entered.</p>

					<div class="table-responsive">
						<table class="table">
							<tbody>
								<tr>
									<td>Order subtotal</td>
									<th>$446.00</th>
								</tr>
								<tr>
									<td>Shipping and handling</td>
									<th>$10.00</th>
								</tr>
								<tr>
									<td>Tax</td>
									<th>$0.00</th>
								</tr>
								<tr class="total">
									<td>Total</td>
									<th>$456.00</th>
								</tr>
							</tbody>
						</table>
					</div>
				</div>


				<div class="box">
					<div class="box-header">
						<h4>Coupon code</h4>
					</div>
					<p class="text-muted">If you have a coupon code, please enter it in the box below.</p>
					<form>
						<div class="input-group">

							<input type="text" class="form-control">

							<span class="input-group-btn">

								<button class="btn btn-primary" type="button"><i class="fa fa-gift"></i></button>

							</span>
						</div>
						<!-- /input-group -->
					</form>
				</div>

			</div>
			<!-- /.col-md-3 -->

		</div>
		<!-- /.container -->
	</div>
	<!-- /#content -->
</div>
    <!-- /#all -->
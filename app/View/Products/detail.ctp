<div class="container">
    <div class="col-md-12">
        <div class="row" id="productMain">
            <?php foreach($lists as $list) : ?>
            <!------------------------------ SWEET IMAGE ---------------------------->
            <div class="col-sm-8">
                <div id="">
                    <?php echo $this->Html->image($list['Picture'][0]['lgimg'],array('class'=>'img-responsive')) ;?>
                </div>
            </div>

            <!----------------------------- DETAIL ------------------------------------>

            <div class="col-sm-4">
                <div class="box">

                    <h1 class="text-center"><?php echo $list['Product']['title'];?></h1>
                    <h4 class="text-center"><?php echo $list['Product']['packsizeingm'];?>gm - <i class="fa fa-inr"></i> <?php echo $list['Product']['price'];?></h4>
					
                    <p class="text-center buttons">
						<?php echo $this->Html->link('ADD TO CART',array('controller'=>'carts','action'=>'addcrt',$list['Product']['id']),array('class'=>'btn btn-primary'));?>
                        <?php echo $this->Html->link('BUY NOW', array('controller'=>'','action'=>''),array('class'=>'btn btn-warning'));?>						                       
                    </p>
                    <h5>Check Availability & COD</h5>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Enter PIN" aria-describedby="basic-addon2">
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="button">Check</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!------------------------------ DESCRIPTION ---------------------------------->
        <div class="box">
            <h4>Product Detail</h4>
            <p class="capitalize"><strong><?php echo $list['Product']['description'];?></strong></p>
            <h4>Ingredients</h4>
            <p><?php echo $list['Product']['ingredients'];?></p>

            <div class="row">
                <div class="col-md-6">
                    <h4>Description</h4>
                    <p>Nutritional Values Per 100G :</p>
                    <ul>
                        <li>Calories : 382 Kcal</li>
                        <li>Carbohydrates : 64.28 G</li>
                        <li>Total Fat : 10.71G</li>
                        <li>Protein : 7.14G</li>
                        <li>Fiber : 3.57G</li>
                        <li>Cholesterol : Nil</li>
                    </ul>
                </div>

                <div class="col-md-6">
                    <h4>Additional Information</h4>
                    <table class="table">
                        <tr>
                            <th>Pack Size</th>
                            <td><?php echo $list['Product']['packsizeingm'];?> gm</td>
                        </tr>
                        <tr>
                            <th>Product Life</th>
                            <td><?php echo $list['Product']['productlife'];?></td>
                        </tr>
                    </table>
                </div>
                <?php endforeach ; ?>
            </div>
        </div>
    </div>
</div>
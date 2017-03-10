<div id="container">
	<div class="row">
        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-info">
                <div class="panel-heading">
                    Add Sweet
                </div>
                <div class="panel-body">
                    <div class="row">

                        <?php echo $this->Session->flash(); ?>
                        <?php echo $this->Form->create('Product' , array('class' => 'form' , 'inputDefaults' => array('label' => false))); ?>
                            <div class="col-lg-6">

                                <div class="form-group">
                                    <label class="control-label">Title</label>
                                    <?php echo $this->Form->input('title' , array('class' => 'form-control', 'id' => 'name'));?>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" >Description</label>
                                    <?php echo $this->Form->input('description' , array('class' => 'form-control', 'id' => 'description'));?>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Pack Size Availabel (gm)</label>
                                    <?php echo $this->Form->input('packsizeingm' , array('class'=>'form-control' ));?>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" >Price </label>
                                    <?php echo $this->Form->input('price' , array('class' => 'form-control'));?>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="control-label" >Ingredients</label>
                                    <?php echo $this->Form->input('ingredients' , array('class' => 'form-control'));?>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Product Life</label>
                                    <?php echo $this->Form->input('productlife' , array('class'=>'form-control' ,
                                    'options'=> array('Under 15 Days'=>'Under 15 Days','1 Month'=>'1 Month','2 Months'=>'2 Months')));?>
                                </div>

                                <div class="form-group">
                                    <?php echo $this->Form->submit('Create',array('class'=>'btn btn-primary btn-block'));?>
                                </div>
                                <div class="form-group">
                                    <?php echo $this->Html->link('Show Sweet List',array('controller'=>'products','action'=>'swtlst'),array('class'=>'btn btn-info btn-block'));?>
                                </div>
                            </div>
                        <?php echo $this->Form->end(); ?>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
	<!-- /#page-wrapper -->
</div>

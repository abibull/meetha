<div id="container">
	<div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-info">
                <div class="panel-heading">
                    Update Picture for sweet
                </div>
                <div class="panel-body">
                    <div class="row">
                        <?php echo $this->Session->flash(); ?>
                        <?php echo $this->Form->create('Picture' , array('class' => 'form' ,'enctype' => 'multipart/form-data', 'inputDefaults' => array('label' => false))); ?>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" >SM (280*200)</label>
                                    <?php echo $this->Form->input('smimg' , array('type' => 'file','class' => 'form-control'));?>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" >MD (643*313)</label>
                                    <?php echo $this->Form->input('mdimg' , array('type' => 'file','class' => 'form-control'));?>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" >LG (700*320)</label>
                                    <?php echo $this->Form->input('lgimg' , array('type' => 'file','class' => 'form-control'));?>
                                </div>
                                <div class="form-group">
                                    <?php echo $this->Form->submit('Update',array('class'=>'btn btn-block btn-primary'));?>
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

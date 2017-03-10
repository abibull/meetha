<?php echo $this->Html->script('jquery.min'); ?>

<div class="container-fluid box">
    <div class="">
        <?php if(!empty($list)) : ?>
            <div class="panel panel-info">
                <div class="panel-heading">
                   Created Product (Sweet) List

                   <?php if($this->Session->read('Auth.User.type') == 'admin') : ?>
                   <div class="form-group" style="margin-right:10px; float:right;">
                       <?php echo $this->Html->link(__('<i class="fa fa-plus fa-fw"></i> Add Product(Sweet)'),array(
                                   'controller'=>'products','action'=>'addswt') ,array('escape'=>false) );
                       ?>
                   </div>
                   <?php endif; ?>

                </div>
                <!-- panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables">
                            <thead>
                                <tr>
                                    <th data-sortable="false"></th>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Ingredients</th>
                                    <th>Price</th>
                                    <th>Pack Size</th>
                                    <th>Product Life</th>
                                    <th>Created</th>
                                    <th>Modified</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($list as $lst): ?>
                                <tr>
                                    <td><div class="form-group">
                                        <?php echo $this->HTML->link('',array('controller'=>'products','action'=>'viewswt',$lst['Product']['id']),array('class'=>'fa fa-eye fa-fw','title'=>'View'));?>
                                        <?php echo $this->HTML->link('',array('controller'=>'products','action'=>'editswt',$lst['Product']['id']),array('class'=>'fa fa-edit fa-fw', 'title'=>'Edit'));?>
                                        <?php echo $this->Html->link('',array('controller'=>'pictures','action'=>'add',$lst['Product']['id']),array('class'=>'fa fa-camera fa-fw', 'title'=>'Picture'));?>
                                        <?php echo $this->Form->postLink('',array('controller'=>'products','action'=>'deleteswt',$lst['Product']['id']),array('confirm'=>'Are you sure You want to delete this Product','class'=>'fa fa-trash fa-fw','rel'=>'tooltip','title'=>'Delete'));?>
                                    </div></td>
                                    <td><?php echo $lst['Product']['id'];?></td>
                                    <td><?php echo $lst['Product']['title'];?></td>
                                    <td><?php echo $lst['Product']['description'];?></td>
                                    <td><?php echo $lst['Product']['ingredients'];?></td>
                                    <td><?php echo $lst['Product']['price'];?></td>
                                    <td><?php echo $lst['Product']['packsizeingm'];?></td>
                                    <td><?php echo $lst['Product']['productlife'];?></td>
                                    <td><?php echo $lst['Product']['created'];?></td>
                                    <td><?php echo $lst['Product']['modified'];?></td>
                                    <!--td><?php echo $this->Time->timeAgoInWords($lst['Product']['modified']);?></td-->
                                </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        <?php
        else :
            echo "<center><h3>No data available</h3></center> ";
        endif;?>
    </div>
    <!-- /.col-lg-12 -->
</div>

<script>
$(document).ready(function(){
    $('#dataTables').DataTable({
        responsive : true,
        'order' : [[ 1 , 'desc']]
    });
});
</script>

<div class="grid_12">
<?php echo $this->Form->create('Group', array('url' => array( 'admin' => true ) ) ); ?>
<?php echo $this->Form->input('Group.name', array('label' => __( 'Name', true))); ?>
<?php echo $this->Form->end(__( 'Save', true)); ?>
</div>
<div class="clear"></div>

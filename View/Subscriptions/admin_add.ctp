<div class="grid_12">
<?php echo $this->Form->create('Subscription', array('url' => array( 'admin' => true ) ) ); ?>
<?php echo $this->Form->input('Subscription.name', array('label' => __( 'Name', true))); ?>
<?php echo $this->Form->input('Subscription.email', array('label' => __( 'Email', true))); ?>
<?php // echo $this->Form->input('Group', array('selected' => $siteGroup)) ?>
<?php echo $this->Form->input('Group',array('type'=>'select'))?>
<?php echo $this->Form->end(__( 'Save', true)); ?>
</div>
<div class="clear"></div>

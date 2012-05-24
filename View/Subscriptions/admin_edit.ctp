<div class="grid_12">
<?php $session->flash(); ?>
<?php echo $this->Form->create('Subscription', array('url' => $html->url(array('admin' => true, $this->data['Subscription']['id'])))); ?>
<?php echo $this->Form->input('Subscription.id'); ?>
<?php echo $this->Form->input('Subscription.name', array('label' => __('Name', true))); ?>
<?php echo $this->Form->input('Subscription.email', array('label' => __('Email', true))); ?>
<?php echo $this->Form->input('Group', array('type'=>'select')) ?>
<?php echo $this->Form->end(__( 'Save', true)); ?>
<?php echo $this->Html->link(__( 'Go back', true), array('action' => 'index', 'admin' => true)); ?>
</div>
<div class="clear"></div>

<div class="grid_12">
<?php $this->Session->flash(); ?>
<?php echo $this->Form->create('Group', array('url' => $this->Html->url(array('admin' => true, $this->data['Group']['id'])))); ?>
<?php echo $this->Form->input('Group.id'); ?>
<?php echo $this->Form->input('Group.name', array('label' => __('Name', true))); ?>
<?php echo $this->Form->end(__( 'Save', true)); ?>
<?php echo $this->Html->link(__( 'Go back', true), array('action' => 'index', 'admin' => true)); ?>
</div>
<div class="clear"></div>

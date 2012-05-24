<?php echo $this->Html->script("jquery.min.js"); ?>

<?php $this->Session->flash(); ?>
<?php //echo $this->Element('tinymce',array('preset' => 'basic')); ?>
<?php echo $this->Form->create('Mail', array('url' => $this->Html->url(array('admin' => true, $this->data['Mail']['id'])))); ?>
<?php echo $this->Form->input('Mail.id'); ?>
<?php echo $this->Form->input('Mail.from', array('label' => __( 'From', true))); ?>
<?php echo $this->Form->input('Mail.from_email', array('label' => __( 'From Email', true))); ?>
<?php echo $this->Form->input('Mail.subject', array('label' => __( 'Subject', true))); ?>
<?php echo $this->Form->input('Group') ?>
<?php echo $this->Form->input('Mail.content', array('label' => __( 'Content', true), 'class' => 'fullHtmlEditor')); ?>
<?php echo $this->Form->end(__( 'Save', true)); ?>
<?php echo $this->Html->link(__( 'Go back', true), array('action' => 'index', 'admin' => true)); ?>

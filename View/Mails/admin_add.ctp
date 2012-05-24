<?php //echo $this->Element('tinymce',array('preset' => 'basic')); ?>
<?php echo $this->Form->create('Mail', array('url' => array( 'admin' => true ) ) ); ?>
<?php echo $this->Form->input('Mail.from',array('value'=>Configure::read('Newsletter.from'),'type' => 'hidden')); ?>
<?php echo $this->Form->input('Mail.from_email',array('value'=>Configure::read('Newsletter.from_email'),'type' => 'hidden')); ?>
<?php echo $this->Form->input('Mail.subject', array('label' => __( 'Subject', true))); ?>
<?php echo $this->Form->input('Group') ?>
<?php echo $this->Form->input('Mail.content', array('label' => __( 'Content', true), 'class' => 'fullHtmlEditor')); ?>
<?php echo $this->Form->end(__( 'Save', true)); ?>

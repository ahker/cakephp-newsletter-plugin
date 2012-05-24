<hr />
<div class="message" ><? echo $this->Session->flash(); ?></div>
<div class="news index">
<?php echo $this->Form->create('Subscription', array('url' => '/newsletter/subscriptions/subscribe' ) ); ?>
<?php echo $this->Form->input('Subscription.name', array('label' => __( 'Name', true))); ?>
<?php echo $this->Form->input('Subscription.email', array('label' => __( 'Email', true))); ?>
<?php echo $this->Form->end(__( 'Subscribe', true)); ?>
</div>

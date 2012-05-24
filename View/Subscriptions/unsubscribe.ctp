<hr />
<div class="news index">
<?php echo $this->Form->create('Subscription', array('url' => '/newsletter/subscriptions/unsubscribe' ) ); ?>
<?php echo $this->Form->input('Subscription.email', array('label' => __( 'Email', true))); ?>
<?php echo $this->Form->end(__( 'Unsubscribe', true)); ?>
</div>

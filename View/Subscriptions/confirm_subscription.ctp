<hr />
<br />
<div class="news index"><br />
<? if(!empty($subscribed)) { ?>
    <p><b>Name:</b> <?php echo $subscribed['Subscription']['name'] ?></p>
    <p><b>Email:</b> <?php echo $subscribed['Subscription']['email'] ?></p><br>
    <div class="message" >You have successfully subscribed to our newsletter</div>
<? } ?>
</div>

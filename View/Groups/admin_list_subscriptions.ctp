<div class="grid_12">
<?php $this->Paginator->url(array('admin' => true)); ?>

<div class="block">
    <h3><span><?php echo __( 'View subscriptions in group: ').$group['Group']['name']; ?></span></h3>
    <table cellspacing="0">
        <thead>
            <tr>
                <th><?php echo $this->Paginator->sort(__( 'Email', true), 'name'); ?></th>
                <th><?php echo $this->Paginator->sort(__( 'Name', true), 'name'); ?></th>
                <th><?php echo $this->Paginator->sort(__( 'Created on', true), 'created'); ?></th>
	              <th><?php echo $this->Paginator->sort(__( 'Modified on', true), 'modified'); ?></th>
            </tr>
        </thead>

        <tbody>
            <?php $i = 0; foreach($subscriptions as $subcription) : ?>
            <tr<?php echo is_int($i / 2) ? ' class="alt"' : ''; ?>>
                <td><?php echo $this->Html->link($subcription['Subscription']['email'], array('controller' => 'subscriptions', 'action' => 'edit', 'admin' => true, $subcription['Subscription']['id'])); ?></td>
                <td><?php echo $subcription['Subscription']['name']; ?></td>
                <td><?php echo $this->Time->niceShort($subcription['Subscription']['created']); ?></td>
	              <td><?php echo $this->Time->niceShort($subcription['Subscription']['modified']); ?></td>
            </tr>
            <?php $i++; endforeach; ?>
        </tbody>
    </table>
</div>

<?php echo $this->Element('admin_pagination'); ?>
</div>
<div class="clear"></div>

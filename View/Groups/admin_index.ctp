<div class="grid_12">
<?php $this->Paginator->url(array('admin' => true)); ?>

<ul class="actions">
  <li><?php echo $this->Html->link(__('Add group', true), '/admin/newsletter/groups/add', array('class' => 'button add')); ?></li>
</ul>

<div class="block">
    <h3><span><?php __( 'View groups'); ?></span></h3>
    <table cellspacing="0">
        <thead>
            <tr>
                <th><?php echo $this->Paginator->sort(__( 'Name', true), 'name'); ?></th>
                <th></th>
                <th><?php echo $this->Paginator->sort(__( 'Created on', true), 'created'); ?></th>
	              <th><?php echo $this->Paginator->sort(__( 'Modified on', true), 'modified'); ?></th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            <?php $i = 0; foreach($groups as $group) : ?>
            <tr<?php echo is_int($i / 2) ? ' class="alt"' : ''; ?>>
                <td><?php echo $this->Html->link($group['Group']['name'], array('action' => 'edit', 'admin' => true, $group['Group']['id'])); ?></td>
                <td><?php echo $this->Html->link(__('list subscriptions',true), array('action' => 'list_subscriptions', 'admin' => true, $group['Group']['id'])); ?></td>
                <td><?php echo $this->Time->niceShort($group['Group']['created']); ?></td>
	              <td><?php echo $this->Time->niceShort($group['Group']['modified']); ?></td>
                <td><?php echo $this->Html->link(__( 'Delete', true), array('action' => 'delete', 'admin' => true, $group['Group']['id'])); ?></td>
            </tr>
            <?php $i++; endforeach; ?>
        </tbody>
    </table>
</div>
</div>
<div class="clear"></div>

<?php echo $this->Element('admin_pagination'); ?>

<?php $this->Paginator->url(array('admin' => true)); ?>

<ul class="actions">
  <li><?php echo $this->Html->link(__('Add mail', true), '/admin/newsletter/mails/add', array('class' => 'button add')); ?></li>
</ul>

<div class="block">
    <h3><span><?php __( 'View mails'); ?></span></h3>
    <table cellspacing="0">
        <thead>
            <tr>
                <th><?php echo $this->Paginator->sort(__( 'Subject', true), 'name'); ?></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th><?php echo $this->Paginator->sort(__( 'Created on', true), 'created'); ?></th>
	              <th><?php echo $this->Paginator->sort(__( 'Modified on', true), 'modified'); ?></th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            <?php $i = 0; foreach($mails as $mail) : ?>
            <tr<?php echo is_int($i / 2) ? ' class="alt"' : ''; ?>>
                <td><?php echo $this->Html->link($mail['Mail']['subject'], array('action' => 'edit', 'admin' => true, $mail['Mail']['id'])); ?></td>
                <td><?php echo $this->Html->link(__('show', true), array('action' => 'show', 'admin' => true, $mail['Mail']['id']), array('target' => '_blank')); ?></td>
                <td><?php echo $this->Html->link(__('send', true), array('action' => 'send', 'admin' => true, $mail['Mail']['id'])); ?></td>
             <td><?php echo $this->Html->link(__('reset', true), array('action' => 'reset', 'admin' => true, $mail['Mail']['id'])); ?></td>
                <td><?php echo $this->Html->link(__('statistics', true), array('action' => 'statistics', 'admin' => true, $mail['Mail']['id'])); ?></td>
                <td><?php echo $this->Time->niceShort($mail['Mail']['created']); ?></td>
	              <td><?php echo $this->Time->niceShort($mail['Mail']['modified']); ?></td>
                <td><?php echo $this->Html->link(__( 'Delete', true), array('action' => 'delete', 'admin' => true, $mail['Mail']['id'])); ?></td>
            </tr>
            <?php $i++; endforeach; ?>
        </tbody>
    </table>
</div>

<?php echo $this->Element('admin_pagination'); ?>

<div class="transactions view">
<h2><?php echo __('Transaction'); ?></h2>
	<dl>
		<dt><?php echo __('Guid'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['guid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Currency Guid'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['currency_guid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Num'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['num']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post Date'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['post_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Enter Date'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['enter_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Transaction'), array('action' => 'edit', $transaction['Transaction']['guid'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Transaction'), array('action' => 'delete', $transaction['Transaction']['guid']), array(), __('Are you sure you want to delete # %s?', $transaction['Transaction']['guid'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Transactions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Transaction'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Splits'), array('controller' => 'splits', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Split'), array('controller' => 'splits', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Splits'); ?></h3>
	<?php if (!empty($transaction['Split'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Guid'); ?></th>
		<th><?php echo __('Tx Guid'); ?></th>
		<th><?php echo __('Account Guid'); ?></th>
		<th><?php echo __('Memo'); ?></th>
		<th><?php echo __('Action'); ?></th>
		<th><?php echo __('Reconcile State'); ?></th>
		<th><?php echo __('Reconcile Date'); ?></th>
		<th><?php echo __('Value Num'); ?></th>
		<th><?php echo __('Value Denom'); ?></th>
		<th><?php echo __('Quantity Num'); ?></th>
		<th><?php echo __('Quantity Denom'); ?></th>
		<th><?php echo __('Lot Guid'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($transaction['Split'] as $split): ?>
		<tr>
			<td><?php echo $split['guid']; ?></td>
			<td><?php echo $split['tx_guid']; ?></td>
			<td><?php echo $split['account_guid']; ?></td>
			<td><?php echo $split['memo']; ?></td>
			<td><?php echo $split['action']; ?></td>
			<td><?php echo $split['reconcile_state']; ?></td>
			<td><?php echo $split['reconcile_date']; ?></td>
			<td><?php echo $split['value_num']; ?></td>
			<td><?php echo $split['value_denom']; ?></td>
			<td><?php echo $split['quantity_num']; ?></td>
			<td><?php echo $split['quantity_denom']; ?></td>
			<td><?php echo $split['lot_guid']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'splits', 'action' => 'view', $split['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'splits', 'action' => 'edit', $split['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'splits', 'action' => 'delete', $split['id']), array(), __('Are you sure you want to delete # %s?', $split['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Split'), array('controller' => 'splits', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

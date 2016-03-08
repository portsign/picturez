<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Quote'), ['action' => 'edit', $quote->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Quote'), ['action' => 'delete', $quote->id], ['confirm' => __('Are you sure you want to delete # {0}?', $quote->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Quotes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Quote'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="quotes view large-9 medium-8 columns content">
    <h3><?= h($quote->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $quote->has('user') ? $this->Html->link($quote->user->id, ['controller' => 'Users', 'action' => 'view', $quote->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Quotes Pic') ?></th>
            <td><?= h($quote->quotes_pic) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($quote->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($quote->created) ?></td>
        </tr>
    </table>
</div>

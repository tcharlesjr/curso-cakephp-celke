<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Artigo[]|\Cake\Collection\CollectionInterface $artigos
 */
?>
<div class="artigos index content">
    <?= $this->Html->link(__('New Artigo'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Artigos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('cats_artigo_id') ?></th>
                    <th><?= $this->Paginator->sort('titulo') ?></th>
                    <th><?= $this->Paginator->sort('slug') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($artigos as $artigo): ?>
                <tr>
                    <td><?= $this->Number->format($artigo->id) ?></td>
                    <td><?= $artigo->has('cats_artigo') ? $this->Html->link($artigo->cats_artigo->id, ['controller' => 'CatsArtigos', 'action' => 'view', $artigo->cats_artigo->id]) : '' ?></td>
                    <td><?= h($artigo->titulo) ?></td>
                    <td><?= h($artigo->slug) ?></td>
                    <td><?= h($artigo->created) ?></td>
                    <td><?= h($artigo->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $artigo->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $artigo->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $artigo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $artigo->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>

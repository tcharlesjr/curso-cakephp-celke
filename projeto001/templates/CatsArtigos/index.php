<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CatsArtigo[]|\Cake\Collection\CollectionInterface $catsArtigos
 */
?>
<div class="catsArtigos index content">
    <?= $this->Html->link(__('New Cats Artigo'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Cats Artigos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nome_cat_artigo') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($catsArtigos as $catsArtigo): ?>
                <tr>
                    <td><?= $this->Number->format($catsArtigo->id) ?></td>
                    <td><?= h($catsArtigo->nome_cat_artigo) ?></td>
                    <td><?= h($catsArtigo->created) ?></td>
                    <td><?= h($catsArtigo->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $catsArtigo->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $catsArtigo->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $catsArtigo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $catsArtigo->id)]) ?>
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

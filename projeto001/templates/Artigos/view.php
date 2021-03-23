<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Artigo $artigo
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Artigo'), ['action' => 'edit', $artigo->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Artigo'), ['action' => 'delete', $artigo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $artigo->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Artigos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Artigo'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="artigos view content">
            <h3><?= h($artigo->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Cats Artigo') ?></th>
                    <td><?= $artigo->has('cats_artigo') ? $this->Html->link($artigo->cats_artigo->id, ['controller' => 'CatsArtigos', 'action' => 'view', $artigo->cats_artigo->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Titulo') ?></th>
                    <td><?= h($artigo->titulo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Slug') ?></th>
                    <td><?= h($artigo->slug) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($artigo->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($artigo->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($artigo->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Conteudo') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($artigo->conteudo)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>

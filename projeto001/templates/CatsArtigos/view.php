<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CatsArtigo $catsArtigo
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Cats Artigo'), ['action' => 'edit', $catsArtigo->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Cats Artigo'), ['action' => 'delete', $catsArtigo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $catsArtigo->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Cats Artigos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Cats Artigo'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="catsArtigos view content">
            <h3><?= h($catsArtigo->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome Cat Artigo') ?></th>
                    <td><?= h($catsArtigo->nome_cat_artigo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($catsArtigo->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($catsArtigo->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($catsArtigo->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Artigos') ?></h4>
                <?php if (!empty($catsArtigo->artigos)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Cats Artigo Id') ?></th>
                            <th><?= __('Titulo') ?></th>
                            <th><?= __('Conteudo') ?></th>
                            <th><?= __('Slug') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($catsArtigo->artigos as $artigos) : ?>
                        <tr>
                            <td><?= h($artigos->id) ?></td>
                            <td><?= h($artigos->cats_artigo_id) ?></td>
                            <td><?= h($artigos->titulo) ?></td>
                            <td><?= h($artigos->conteudo) ?></td>
                            <td><?= h($artigos->slug) ?></td>
                            <td><?= h($artigos->created) ?></td>
                            <td><?= h($artigos->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Artigos', 'action' => 'view', $artigos->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Artigos', 'action' => 'edit', $artigos->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Artigos', 'action' => 'delete', $artigos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $artigos->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $catsArtigo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $catsArtigo->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Cats Artigos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="catsArtigos form content">
            <?= $this->Form->create($catsArtigo) ?>
            <fieldset>
                <legend><?= __('Edit Cats Artigo') ?></legend>
                <?php
                    echo $this->Form->control('nome_cat_artigo');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

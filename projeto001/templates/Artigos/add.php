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
            <?= $this->Html->link(__('List Artigos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="artigos form content">
            <?= $this->Form->create($artigo) ?>
            <fieldset>
                <legend><?= __('Add Artigo') ?></legend>
                <?php
                    echo $this->Form->control('cats_artigo_id', ['options' => $catsArtigos]);
                    echo $this->Form->control('titulo');
                    echo $this->Form->control('conteudo');
                    echo $this->Form->control('slug');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

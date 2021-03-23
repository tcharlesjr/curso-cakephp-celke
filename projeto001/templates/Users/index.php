
<div>
    <?= $this->Html->link(('Cadastrar Usuário'), ['action' => 'add']); ?>
</div>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php if (isset($usuarios)) {
            foreach ($usuarios as $usuario) { ?>
                <tr>
                    <td><?= $usuario->id ?></td>
                    <td><?= $usuario->name ?></td>
                    <td><?= $usuario->email ?></td>
                    <td>
                          <?= $this->Html->link(('Ver'), ['action' => 'view', $usuario->id ]); ?>
                        | <?= $this->Html->link(('Editar'), ['action' => 'edit', $usuario->id ]); ?>
                        | <?= $this->Form->postLink(('Apagar'), ['action' => 'delete', $usuario->id ],
                                                                ['confirm' => 'Realmente deseja apagar o usuário?', $usuario->id]); ?>
                    </td>
                </tr>
            <?php }
        } ?>
    </tbody>
</table>

<div class="paginator">
    <ul class="pagination">
        <?php echo $this->Paginator->first('<<'); ?>
        <?php echo $this->Paginator->prev('<'); ?>
        <?php echo $this->Paginator->numbers(); ?>
        <?php echo $this->Paginator->next('>'); ?>
        <?php echo $this->Paginator->last('>>'); ?>
    </ul>
    <p>
        <?php echo $this->Paginator->counter("Página {{page}} de {{pages}},
                mostrando {{current}} registro(s) do total de {{count}}"); ?>
    </p>
</div>


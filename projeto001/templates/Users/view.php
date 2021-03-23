<div class="users view large-12 medium-12 columns content">
    <h3><?= 'Detalhes do Usuário: ' . $usuario->name ?></h3>
    <table class="vertical-table">
        <tr>
            <th>ID</th>
            <td><?= $usuario->id; ?></td>
        </tr>
        <tr>
            <th>Nome</th>
            <td><?= $usuario->name; ?></td>
        </tr>
        <tr>
            <th>E-mail</th>
            <td><?= $usuario->email; ?></td>
        </tr>
        <tr>
            <th>Usuário</th>
            <td><?= $usuario->username; ?></td>
        </tr>
        <tr>
            <th>Cadastrado</th>
            <td><?= $usuario->created; ?></td>
        </tr>
        <tr>
            <th>Atualizado</th>
            <td><?= $usuario->modified?></td>
        </tr>
    </table>

<?= $this->Html->link(('Lista de Usuários'), ['controller' => 'users', 'action' => 'index']); ?>

</div>


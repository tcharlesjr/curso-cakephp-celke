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
                    <td>Ver | Editar</td>
                </tr>
            <?php }
        } ?>
	</tbody>
</table>


<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>name</th>
			<th>address</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($students as $st): ?>
		<tr>
			<td><?= $st->id?></td>
			<td>
				<a href="detail?id=<?= $st->id ?>" title="">
					<?= $st->name?>
				</a>
			</td>
			<td><?= $st->address?></td>
		</tr>
			
		<?php endforeach ?>
	</tbody>
</table>
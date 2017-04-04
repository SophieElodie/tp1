<?php
$app = App::getInstance();
$utilisateurs = $app->getTable('utilisateur')->allWithService();


?>

<h2> Liste de tout les utilisateurs </h2>
<table class ="table table-bordered"> 
<thead>
	<tr>
		<th>NOM , Prenom</th>
		<th>Âge</th>
		<th>Adresse compléte</th>
		<th>Telephone</th>
		<th>Services</th>		
	</tr>
</thead>
<tbody>
	<?php foreach ($utilisateurs as $utilisateur): ?>
		<tr>
			<td> <?= $utilisateur->nom.' '.$utilisateur->prenom ?></td>
			<td><?= $utilisateur->date_de_naissance ?></td>
			<td><?= $utilisateur->adresse.' '.$utilisateur->code_postal ?></td>
			<td><?= $utilisateur->numero_de_telephone ?></td>
			<td><?= $utilisateur->service ?></td>
		</tr>
	<?php endforeach; ?>
</tbody>
</table>

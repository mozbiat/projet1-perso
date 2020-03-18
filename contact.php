<?php
$titre = 'Contact - Yann Bauduin - Web Designer';
include('header.php'); ?>

  <div id="formulaire">
	<section class="cadre80">
            <h3>Formulaire de contact</h3>
		<form action="form-contact.php" enctype="multipart/form-data" id="form" method="post" name="form">
			<table>
				<tr>
					<td>
                                                <label for="nom">Nom :</label>
						<input required name="nom" type="text">
					</td>
				</tr>

				<tr>
					<td>
                                                <label for="prenom">Prénom :</label>
						<input required name="prenom" type="text">
					</td>
				</tr>

				<tr>
					<td>
                                                <label for="email">Email :</label>
						<input required  name="mail" type="email">
					</td>
				</tr>

				<tr>
					<td>
                                                <label for="objet">Objet :</label>
						<input required name="objet" type="text">
					</td>
				</tr>

				<tr>
					<td>
                                            <label for="message">Message :</label>
                                            <textarea required name="commentaire"></textarea>
					</td>
				</tr>

				<tr>
					<td class="button">
                                            <input type="reset" value="Annuler"/>
                                            <input type="submit" value="Envoyer"/>
					</td>
				</tr>
			</table>
		</form>
	</section>


 <?php include('footer.php'); ?>

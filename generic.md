---
layout: post
title: Contact
description: Lorem ipsum dolor est
image: assets/images/pic11.jpg
nav-menu: true
---

<!-- Content -->
<h2 id="content">Formulaire de contact</h2>
<p>Si vous souhaitez échanger avec moi, je vous propose ce petit formulaire de contact,facilitant notre premier échange: </p>

<form method="post" action="assets/php/envoyer_email.php">
	<div class="row uniform">
		<div class="4u 12u$(xsmall)">
			<input type="text" name="lastname" id="lastname" value="" placeholder="Nom" />
		</div>
        <div class="3u 12u$(xsmall)">
			<input type="text" name="firstname" id="firstname" value="" placeholder="Prénom" />
		</div>
		<div class="5u$ 12u$(xsmall)">
			<input type="email" name="email" id="email" value="" placeholder="Email" />
		</div>
		<!-- Break -->
		<div class="6u 12u$(small)">
			<input type="checkbox" id="copy" name="copy">
			<label for="copy">Recevoir une copie</label>
		</div>
		<!-- Break -->
		<div class="12u$">
			<textarea name="message" id="message" placeholder="Insérer ici votre message" rows="6"></textarea>
		</div>
		<!-- Break -->
		<div class="12u$">
			<ul class="actions">
				<li><input type="submit" value="Envoyer" class="special" /></li>
			</ul>
		</div>
	</div>
</form>

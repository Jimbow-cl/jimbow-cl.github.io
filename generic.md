---
layout: post
title: Contact
description:
image: assets/images/pic11.jpg
nav-menu: true
---

<!-- Content -->
<h2 id="content">Formulaire de contact</h2>
<p>Si vous souhaitez échanger avec moi, je vous propose ce petit formulaire de contact,facilitant notre premier échange: </p>

<form method="post" action="#">
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
        <li><input type="submit" value="Envoyer" class="special" onclick="generateMailToLink(event)" /></li>
      </ul>
    </div>
  </div>
</form>

<script>
function generateMailToLink(event) {
  event.preventDefault();
  
  var lastname = document.getElementById("lastname").value;
  var firstname = document.getElementById("firstname").value;
  var email = document.getElementById("email").value;
  var copy = document.getElementById("copy").checked ? "Oui" : "Non";
  var message = document.getElementById("message").value;

  var subject = "Nouveau message du formulaire de contact";
  var body = "Nom : " + lastname + "\n";
  body += "Prénom : " + firstname + "\n";
  body += "Email : " + email + "\n";
  body += "Recevoir une copie : " + copy + "\n\n";
  body += "Message :\n" + message;

  var mailtoLink = "mailto:cart-lamy.jimmy@live.fr" +
    "?subject=" + encodeURIComponent(subject) +
    "&body=" + encodeURIComponent(body);

  if (copy == "Oui") {
    mailtoLink += "&cc=" + encodeURIComponent(email);
  }

  window.location.href = mailtoLink;
  document.location.href="/";
}
</script>



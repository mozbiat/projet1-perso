
<?php
$titre = 'Contact - Yann Bauduin - Web Designer';
include('header.php'); ?>

<?php

// Envoi du message sur ma boite mail
  if(!empty($_POST)) {
    $email = htmlspecialchars($_POST['mail']);
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $objet = htmlspecialchars($_POST['objet']);
    $commentaire = htmlspecialchars($_POST['commentaire']);

    $sujet="Contact via bauduin.yann.ovh";
    $mailDestinataire="bauduin.yann.59@gmail.com";

    $from = "From: ".$prenom." ".$nom."<".$email."> \nMime-Version:\n";
    $from .= " 1.0\nContent-Type: text/html; charset=UTF-8\n";

    $messageMail = "Formulaire de contact depuis le site <a href='bauduin.yann.ovh'>Bauduin.yann.ovh</a><br><br>
              Nom : ".$nom."<br>
              Prénom : ".ucfirst($prenom)."<br>
              Email : ".$email."<br><br>

              Objet : ".$objet."<br>
              Message : ".$commentaire."";


    mail($mailDestinataire, $sujet, $messageMail, $from);

    echo '<table id="form-contact">
            <tr>
              <td align="center">Votre demande <br>
              est bien prise en compte.<br>
              <br>
              Une r&eacute;ponse vous sera envoy&eacute;e prochainement.<br /> <strong>Merci, &agrave; bient&ocirc;t</strong><br /><br /><a href="../index.php">Retour vers le site</a></td>
            </tr>
          </table>';
        } else {
          echo '<table id="form-contact">
                    <tr>
                        <td align="center">Ah ah, interdit</td>
                    </tr>
                </table>';
        }

        include('footer.php');
        ?>



<?php
require_once 'requette.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--lien mobile style.css-->
    <link rel="stylesheet" href="css/style.css">
    <!--lien ordinateur style.css-->
    <link rel="stylesheet" href="css/pcstyle.css">
    <!--lien js-->
    <script src="js/script.js" defer></script>
    <!--lien fonction js-->
    <script src="fonction/fonction.js" defer></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Portfolio Xavier</title>
</head>

<body>
    <header>
        <!--js pour le menu-->
        <nav>
            <!--photo profil-->
            <img src="images/xav (1).jpg" class="moi" alt="photo-profil">

            <!--Menu burger-->
            <!--Js pour-> id="open" -->
            <a href="#" id="open">
                <!-- texte ou image ou svg -->
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="Color" class="bi bi-list-nested burger" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.5 11.5A.5.5 0 0 1 5 11h10a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zm-2-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm-2-4A.5.5 0 0 1 1 3h10a.5.5 0 0 1 0 1H1a.5.5 0 0 1-.5-.5z" />
                </svg>
                <ul>
                    <!--lien ancre ( #Profil) va à (<p/h1/.. id="Profil")-->
                    <li><a href="index.php" title="Accueil" class="centre">Accueil</a></li>
                    <li><a href="#Profil" title="Profil" class="centre">Profil</a></li>
                    <li><a href="#Compétences" title="Compétences" class="centre">Compétences</a></li>
                    <li><a href="#Portfolio" title="Potfolio" class="centre">Portfolio</a></li>
                    <li><a href="#Contact" title="Contact" class="centre">Contact</a></li>
                </ul>
            </a>
        </nav>
        <!--mon nom/prénom+ image de fond en CSS-->
        <div class="fond-header">
            <h1>Xavier Paqueriaud</h1>
            <h2>En Formation Web Développeur - JavaScript</h2>
            <!--bouton à voir plus tard-->
        </div>
    </header>
    <main>
        <!--A propos de moi+lien ancre-->
        <section>
            <h1 id="Profil">A PROPOS DE MOI</h1>
            <P>Bonjour, je m' appelle Xavier Paqueriaud, j' ai 38 ans j' habite Pont de Vaux dans le département de l' ain.
                J' ai travaillé de nombreuses année sur une plateforme logistique agroalimentaire où j' ai fait différent services,
                de la préparation de commande, agent de quai, cariste..., ce qui ma permis d' acquérir de nombreuses compétences
                telles quel' organisation, la rigeur, le travail d' équipe et l' autonomie.
                J' ai toujours été passioné par les métiers du numérique mais je n 'ai jamais pris le temps de me former.
                Aujourd' hui en reconversion proffessionelle suite à une inaptitude de travail, c' était pour moi l' occasion de me lançer.
                Je suis actuellement en formation Web Développeur chez Webforce 3.
            </P>
        </section>
        <div class="espace">
            <h2>Actuellement :</h2>
            <!--lien site de formation-->
            <p>En Formation chez Webforce3 : <a href="https://www.wf3.fr/centre/dijon/" title="lien">ici</a></p>
        </div>
        <section>
            <!--lien ancre Compétences+cv(+fond à voir.CSS)-->
            <h1 id="Compétences">Compétences</h1>
            <!--graphique de Compétence-->
            <p>Je suis en constante amélioration, car Je débute depuis très peux de temps,
                mais ma curiositer et la passion du metier éguise mes connaissances chaque jours.
            </p>
            <!--faire des graphiques à finir en css-->
            <div class="taille">
                <h3>BACK-END</h3>
                <p class="php">PHP</p>
                <p class="sql">SQL</p>
                <p class="symfony">SYMFONY</p>
                <p class="angular">ANGULAR</p>
                <h3>FRONT-END</h3>
                <p class="html">HTML</p>
                <p class="css">CSS</p>
                <p class="javascript">JAVASCRIPT/JQUERY</p>
                <h3>CMS</h3>
                <p class="wordpress">WORDPRESS</p>
                <p class="bootstrap">BOOTSTRAP</p>
                <!--cv+ lien de télécharegent cv-->
            </div>
            <img src="images/Paqueriaud Xavier.png" alt="mon-cv" class="mon-cv">
            <a href="images/Paqueriaud Xavier1.pdf" download="Paqueriaud Xavier1.pdf" title="télécharger-pdf">
                Télécharger CV
            </a>
        </section>
        <section>
            <!--lien ancre Portfolio-->
            <div class="espace">
                <h1 id="Portfolio">Portfolio</h1>

                <!--message d'erreur si le formulaire est pas remplie-->
                <p>Voici quelques exemples de réalisations effectuées durant la formation :</p>
                <!--En attente de Pojet-->
            </div>
        </section>
    </main>
    <footer>
        <div class="contact">
            <!--contact-moi avec formulaire-->
            <!--lien ancre Contact-->
            <h1 id="Contact">CONTACTEZ-MOI</h1>
            <P>N'hésitez pas à me contacter, je vous répondrais dans les plus brefs délais</P>
            <p class="errors" id="lastnameError">Message d'erreur</p>
            <p class="errors" id="firstnameError">Message d'erreur</p>
            <p class="errors" id="emailError">Message d'erreur</p>
            <p class="errors" id="phoneError">Message d'erreur</p>
            <p class="errors" id="commentaireError">Message d'erreur</p>
            <!--accepte terme-->
            <!---Message d'erreur--->
            <p class="errors" id="invalidCheckError">Message d'erreur</p>
            <?php if ($error !== null) : ?>
                <div class="alert alert-danger">
                    <?php echo $error; ?></div>
            <?php endif; ?>
            <!--formulaire-->
            <div class="container">
                <!--rajout form-->

                <form method="post">
                    <div class="row">
                        <div class="col-12">
                            <!--nom-->
                            
                            <label for="lastname" value="<?php echo $contact['lastname']; ?>" class="form-label">Nom*</label>
                            <input type="text" class="form-control form-control-sm" id="lastname" name="lastname">

                        </div>
                        <div class="col-12">
                            <!--prénom-->
                            <label for="firstname" value="<?php echo $contact['firstname']; ?>" class="form-label">Prénom*</label>
                            <input type="text" class="form-control form-control-sm" id="firstname" name="firstname">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <!--E-mail-->
                            <label for="email" value="<?php echo $contact['email']; ?>" class="form-label">E-Mail*</label>
                            <input type="email" class="form-control form-control-sm" id="email" name="email">
                        </div>
                        <div class="col-12">
                            <!--téléphone-->
                            <label for="phone" value="<?php echo $contact['phone']; ?>">Téléphone*</label><!---varchar---->
                            <input type="tel" class="form-control form-control-sm" id="phone" maxlength="10" name="phone" name="phone">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <!--message-->
                            <label for="exampleFormControlTextarea1" value="<?php echo $contact['commentaire']; ?>" class="form-label">Commentaire*</label>
                            <textarea class="form-control form-control-sm" id="commentaire" name="commentaire" maxlength="250" rows="3"></textarea>
                            </label>
                        </div>
                    </div>
                    <input class="form-check-input but" type="checkbox" value="invalidCheck" id="invalidCheck" name="invalidCheck">

                    <label class="form-check-label" for="invalidCheck">
                        <!--bouton d' envoi formulaire CSS :hover logo SVG-->
                        <button type="submit" id="submit" name="submit" class="btn btn-primary">ENVOYER</button>
                </form>

                <!-- Accepter les termes et les conditions-->


                <p>En soumettant ce formulaire, j'accepte que mes donner personelles soient utilisées
                    pour me recontacter.Aucun autre traitement ne sera effectué avec mes informations.
                </p>



                <!--lien téléphone-mail-lieux-->
                <div class="adresse">
                    <ul>
                        <!--lien mail-->
                        <li><a href="mailto:paqueraudxavier@gmail.com" title="mail"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="BlackColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                </svg> paqueraudxavier@gmail.com</a></li>
                        <!--lien téléphone-->
                        <li><a href="tel:0605148071" title="téléphone"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="BlackColor" class="bi bi-telephone-inbound" viewBox="0 0 16 16">
                                    <path d="M15.854.146a.5.5 0 0 1 0 .708L11.707 5H14.5a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 1 0v2.793L15.146.146a.5.5 0 0 1 .708 0zm-12.2 1.182a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                </svg> 06 05 14 80 71</a>
                            <!--Adresse postal-->
                        <li><a href="https://www.google.com/maps/place/11+Pl.+Bertin,+01190+Pont-de-Vaux/@46.4336269,4.9339978,17z/data=!3m1!4b1!4m5!3m4!1s0x47f314e6869a60e3:0xa0ebc1b2d0e05561!8m2!3d46.4336269!4d4.9361865" title="maison"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="BlackColor" class="bi bi-house" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                                    <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                                </svg> 01190 Pont-de-Vaux</a></li>
                        <!--Linkedin-->
                        <li><a href="https://www.linkedin.com/in/paqueriaud-xavier-/" title="linkedin"><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="CurrentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                    <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                                </svg></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--retour haut de page-->
        <div class="fondufooter">
            <a href="index.php" title="Haut-de-page">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="BlackColor" class="bi bi-chevron-double-up chevron" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M7.646 2.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 3.707 2.354 9.354a.5.5 0 1 1-.708-.708l6-6z" />
                    <path fill-rule="evenodd" d="M7.646 6.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 7.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z" />
                </svg>
            </a>
            <div class="copy">&copy; Copyright 2022 - XAVIER PAQUERIAUD. Tous droits réservés</div>
        </div>
    </footer>
</body>

</html>
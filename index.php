

<?php
$titre = 'Accueil - Yann Bauduin - Web Designer';
include('header.php'); ?>
<!-- début du bloc prensentation -->
<main class="container-sm">
     <section id="presentation">
        <h3 class="col-sm-12">Présentation</h3>
        <article class="row">
            <p class="col-sm-6">
                Après plusieurs années d'études et d'expériences professionnelles dans le secteur de la vente, j'ai décidé de changer de profession.<br><br>
                Je me suis alors tourné vers ce qui n'était qu'un loisir, une passion le web design.<br><br>
                En mars 2017, j'intègre l'organisme M2I afin d'éffectuer une formation dîplomante de Designer Web, ainsi mon loisir devient mon métier.<br><br>
                En mars 2020, je décide de poursuivre mes études dans le web, ainsi je m'engage avec la Wild code school pour devenir développeur PHP/Symfony.<br><br>
            </p>
            <figure class="col-sm-6">
                <img class="image-fluid" src="images/moi.jpg" alt="Photo Yann Bauduin" />
                <figcaption>Yann Bauduin</figcaption>
            </figure>
        </article>
    </section>
    <!-- fin du bloc presentation -->
    <!-- Début du bloc apercu -->
    <section id="apercu" class="col-sm-12">
        <article>
            <h3>Aperçu graphique</h3>
            <!-- premiere ligne -->
            <article class="row col-sm-12">
                <?php
                    $img = [0 => '<a href="images/scarlette.jpg" data-toggle="lightbox" data-gallery="example-gallery"><img alt="Montage Photo - Scarlette Johanson" src="images/image1.jpg"></a>
                                    <figcaption> Montage Photo - Scarlette Johanson</figcaption>',
                        1 => '<a href="images/eurecam.jpg" data-toggle="lightbox" data-gallery="example-gallery"><img alt="Homepage Euerecam" src="images/image2.jpg"></a>
                                <figcaption>Homepage - Eurecam</figcaption>',
                        2 => '<a href="images/faktory.jpg" data-toggle="lightbox" data-gallery="example-gallery"><img alt="Mise en situation d\'un logo" src="images/image3.jpg"></a>
                                        <figcaption>Mise en situation du logo Faktory</figcaption>',
                        3 => '<a href="images/article-lunette.jpg" data-toggle="lightbox" data-gallery="example-gallery"><img alt="article lunette" src="images/image4.jpg"></a>
                                        <figcaption> Article lunette </figcaption>',
                        4 => '<a href="images/leffe.jpg" data-toggle="lightbox" data-gallery="example-gallery"><img alt="homepage leffe" src="images/image5.jpg"></a>
                              <figcaption>Homepage Leffe</figcaption>',
                        5 => '<a href="images/test-dividom.jpg" data-toggle="lightbox" data-gallery="example-gallery"><img alt="Maquette Dividom" src="images/image6.jpg"></a>
                              <figcaption>Maquette Dividom</figcaption>'];

                    foreach ($img as $key){
                        echo '<figure>' . $key .'</figure>';
                    };
?>
            </article>
            <a class="yb-btn" href="creation.php">Voir toutes mes créations</a>
        </article>
    </section>
    <!-- fin du bloc apercu -->
    <!-- début de la partie formation -->
    <section id="formation" class="col-sm-12">
            <h3>Formations</h3>
            <div class="row">
                <div class="card">
                    <img src="images/picto-dev-web_0-01.svg" class="card-img-top" alt="Picto Web Développeur">
                    <div class="card-body">
                        <p class="card-text">Web Développeur PHP/Symfony <br>(niveau bac +2)</p>
                    </div>
                </div>
                <div class="card">
                    <img src="images/edit-tool.svg" class="card-img-top" alt="Picto Web Développeur">
                    <div class="card-body">
                        <p class="card-text">Web Designer <br>(niveau bac +2)</p>
                    </div>
                </div>
                <div class="card">
                    <img src="images/picto-caisse.svg" class="card-img-top" alt="Picto Web Développeur">
                    <div class="card-body">
                        <p class="card-text">Hôte de caisse</p>
                    </div>
                </div>
                <div class="card">
                    <img src="images/picto-vente.svg" class="card-img-top" alt="Picto Web Développeur">
                    <div class="card-body">
                        <p class="card-text">Bep: Vente Action Marchande</p>
                    </div>
                </div>
            </div>
    </section>
    <!-- fin de la partie formation -->
    <!-- debut du bloc competences -->
    <section id="competences" class="col-sm-12">
            <h3>Compétences</h3>
        <article class="row">
            <figure>
                <img alt="#" src="images/pictos/Photoshop.gif" title="#">
                <figcaption>
                    Photoshop
                </figcaption>
            </figure>
            <figure>
                <img alt="#" src="images/pictos/illustrator.gif" title="#">
                <figcaption>
                    Illustrator
                </figcaption>
            </figure>
            <figure>
                <img alt="#" src="images/pictos/indesign.gif" title="#">
                <figcaption>
                    Indesign
                </figcaption>
            </figure>
            <figure>
                <img alt="#" src="images/pictos/after.gif" title="#">
                <figcaption>
                    After Effect
                </figcaption>
            </figure>
            <figure>
                <img alt="#" src="images/pictos/animate.gif" title="#">
                <figcaption>
                    Animate
                </figcaption>
            </figure>
            <figure>
                <img alt="#" src="images/pictos/html.gif" title="#">
                <figcaption>
                    Html & Css
                </figcaption>
            </figure>
            <figure>
                <img alt="#" src="images/pictos/javascript.gif" title="#">
                <figcaption>
                    Javascript
                </figcaption>
            </figure>
            <figure>
                <img alt="#" src="images/pictos/jquery.gif" title="#">
                <figcaption>
                    Jquery
                </figcaption>
            </figure>
            <figure>
                <img alt="#" src="images/pictos/php.gif" title="#">
                <figcaption>
                    Php
                </figcaption>
            </figure>
            <figure>
                <img alt="#" src="images/pictos/wordpress.gif" title="#">
                <figcaption>
                    Wordpress
                </figcaption>
            </figure>
        </article>
    </section>
    <!-- fin du bloc cometences -->
    <!-- debut de la apartie experiences -->
    <section id="experiences" class="col-sm-12">
            <h3>Experiences</h3>
            <div class="timeline">
                <div class="container left">
                    <div class="content">
                        <h2>2019</h2>
                        <p>Conseiller clientèle - La halle aux chaussures</p>
                    </div>
                </div>
                <div class="container right">
                    <div class="content">
                        <h2>2018</h2>
                        <p>Employé polyvalent - Picard</p>
                    </div>
                </div>
                <div class="container left">
                    <div class="content">
                        <h2>2017</h2>
                        <p>Web Designer - Dividom</p>
                    </div>
                </div>
                <div class="container right">
                    <div class="content">
                        <h2>2015</h2>
                        <p>Fusilier Commando - Armée de l'air</p>
                    </div>
                </div>
                <div class="container left">
                    <div class="content">
                        <h2>2014</h2>
                        <p>Employé libre service - Auchan</p>
                    </div>
                </div>
                <div class="container right">
                    <div class="content">
                        <h2>2014</h2>
                        <p>Barman - La marmitte de piérrot </p>
                    </div>
                </div>
                <div class="container left">
                    <div class="content">
                        <h2>2013</h2>
                        <p>Employé polyvalent - Casino</p>
                    </div>
                </div>
                <div class="container right">
                    <div class="content">
                        <h2>2012</h2>
                        <p>Vente a domicile - JCCFC</p>
                    </div>
                </div>
                <div class="container left">
                    <div class="content">
                        <h2>2011</h2>
                        <p>Vendeur en prêt a porter - Star folies</p>
                    </div>
                </div>
            </div>
    </section>
    <!-- fin de la partie exeperience -->
    <!-- debut de la partie contact -->
    <section id="contact" class="col-sm-12">
        <article>
            <a href="contact.php">Contactez-moi</a>
        </article>
    </section>
    <!-- fin de la partie contact -->
</main>
<?php include('footer.php'); ?>


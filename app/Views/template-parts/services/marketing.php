<?php $uri = service('uri'); ?>
<section>
    <div class="service-back">
        <div class="service-title">
            <h1>Marketing digital <i class="fa fa-laptop facode"></i></h1>
        </div>
        <div class="picto"></div>
    </div>
    <div class="serv-col">

        <div class="servcol01">
            <div class="mask">
                <ul>
                    <li class="serv-title">Nos services</li>
                    <li><a href="<?php echo base_url('development'); ?>" class="<?= ($uri->getSegment(1) === "development") ? 'active' : null; ?>">Développement web</a></li>
                    <li><a href="<?php echo base_url('marketing'); ?>" class="<?= ($uri->getSegment(1) === "marketing") ? 'active' : null; ?>">Marketing digital</a></li>
                    <li><a href="<?php echo base_url('design'); ?>" class="<?= ($uri->getSegment(1) === "design") ? 'active' : null; ?>">Création graphique</a></li>
                    <li><a href="<?php echo base_url('print'); ?>"class="<?= ($uri->getSegment(1) === "print") ? 'active' : null; ?>">Création de supports</a></li>
                </ul>
            </div>
        </div>
        
        <div class="serv-container">
            <div class="les-services">

                <div class="service-det01">
                    <div class="sur-mesure">
                        <h2 class="green-title02">Site vitrine</h2>
                        <p>
                            A cette ère du digital, une présence sur le web est incontournable pour les entreprises, institutions, associations ou autres entités. A de simples fins de communication, pour faire connaître, et pour permettre à votre public ou à vos prospects de vous trouver sur internet, un simple site vitrine peut faire l'affaire. <br>
                            Contactez-nous pour recevoir un devis en 24h.
                        </p>
                    </div>
                    <div class="vide01"></div>
                </div>

                <div class="service-det02">
                    <div class="vide02"></div>
                    <div class="e-commerce">
                        <h2 class="green-title02">Site e-commerce</h2>
                        <p>
                            Sur une année d'exercice, le coût de la conception et de la maintenance d'un site e-commerce équivaut approximativement à 10% des charges fixes pour une boutique physique. Cependant, il pourrait jouer une part toute aussi importante dans les ventes, la génération de flux dans les points de vente et le développement des chiffres d'affaires. 
                        </p>
                    </div>
                </div>

                <div class="service-det03">
                    <div class="site-vitrine">
                        <h2 class="green-title02">Site sur-mesure</h2>
                        <p>
                            Selon votre type et domaine d'activité, vous pourriez avoir des besoins spécifiques pour la conception de votre site web : gestion de planning, gestion de réservations, gestion de données, carte interactive, ... N'hésitez pas à nous contacter, nous étudierons votre projet avec plaisir avec vous.
                        </p>
                    </div>
                    <div class="vide03"></div>
                </div>

                <div class="service-det04">
                    <div class="vide04"></div>
                    <div class="applications">
                        <h2 class="green-title02">Applications desktop et mobile</h2>
                        <p>
                            Boostez votre productivité avec des applications desktop spécifiques. Améliorez l'expérience de vos utilisateurs et clients avec des applications mobile. Notre équipe vous accompagne dans l'étude et la création d'applications desktop et applications pour smartphone selon votre type d'activité.
                        </p>
                    </div>
                </div>

            </div>

            <section>
                <div class="choisir-container">
                    <div class="choisir-image">
                        <img src="<?php //echo base_url('image/resized/icons.png') ?>" alt="" class="choisir-img01">
                    </div>
                    <div class="choisir-text">
                        <h2>Pourquoi nous choisir ?</h2>
                        <p>
                            Notre équipe chez Axel est composée par des développeurs, marketeurs, designers, et spécialistes du digital. Nous sommes passionnés par ce que nous faisons. Un chef de projet est désigné pour prendre en charge votre besoin, et sera votre interlocuteur durant toute la réalisation du projet. <br><br>
                            Ce qui nous différencie ? Nous sommes à l'écoute. Nous sommes à votre écoute, et nous analysons votre besoin dans ses moindres détails, afin d'apporter des conseils, des solutions techniques, selon les réalités sur terrain, mais aussi de notre expertise dans le domaine. 
                            Avec Axel, vous avez la certitude d'une bonne prise en main et d'une garantie sur le dicton : "Satisfait ou remboursé".
                        </p>
                    </div>



                </div>
                
                <div class="demand-form">
                    <h2 class="green-title02" style="text-align:center;">Poser une question</h2>
                    <form action="" method="post" class="clientname">
                        <label for="nom">Votre nom</label>
                        <input type="text" name="nom" id="">
                                                
                        <textarea name="" id="" cols="30" rows="10" placeholder="Votre message, ici ..."></textarea>

                        <label for="email">Votre e-mail</label>
                        <input type="email" name="email" id="">
                        

                        <input type="submit" value="Envoyer">
                    </form>
                </div>
            </section>



        </div>
        
        <div class="servcol03">
            <div class="img-contain">
                <img src="<?php echo base_url('image/resized/webdev.jpg'); ?>" alt="développement web">
            </div>
        </div>
    </div>
    
    
</section>
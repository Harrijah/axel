<section>
    <div class="service-back">
        <div class="service-title">
            <h1>Création graphique <i class="fa fa-pencil facode"></i></h1>
        </div>
        <div class="picto"></div>
    </div>
    <div class="serv-col">

        <div class="servcol01">
            <div class="mask">
                <ul>
                    <li class="serv-title">Nos services</li>
                    <li><a href="<?php echo base_url('development'); ?>" class="  <?=  ($maclasse == 'development')? $maclasse:null ; ?> ">Développement web</a></li>
                    <li><a href="<?php echo base_url('marketing'); ?>" class="  <?=  ($maclasse == 'marketing')? $maclasse:null ; ?> ">Marketing digital</a></li>
                    <li><a href="<?php echo base_url('design'); ?>" class="  <?=  ($maclasse == 'design')? $maclasse:null ; ?> ">Création graphique</a></li>
                    <li><a href="<?php echo base_url('print'); ?>"class="  <?=  ($maclasse == 'print')? $maclasse:null ; ?> ">Crétaion de supports</a></li>
                </ul>
            </div>
        </div>
        
        <div class="serv-container">
            <div class="les-services">

                <div class="service-det01">
                    <div class="sur-mesure">
                        <h2 class="green-title02">Design et charte graphique</h2>
                        <p>
                            Afin de réussir dans la communication, votre entreprise doit avoir une image unique et cohérente qui reflète vos valeurs et vos ambitions. C'est ainsi que nous vous proposons nos services dans l'élaboration de votre charte graphique. Création ou refonte de votre logo, illustrations, web design, font entre autres partie de nos spécialités.<br>
                        </p>
                    </div>
                    <div class="design01"></div>
                </div>

                <div class="service-det02">
                    <div class="design02"></div>
                    <div class="e-commerce">
                        <h2 class="green-title02">Création de visuels</h2>
                        <p>
                            Nous répondons avec plaisir à vos demandes pour tous vos besoins ponctuels ou réguliers en création de visuels. A partir de votre charte graphique, d'après votre vision, et dans les règles de l'art, nous réalisons vos bannières, visuels publicitaires, brochures, carte de visite, etc. Nous vous proposons également nos services dans l'integration de maquettes et mise en page de documents sur InDesign.
                        </p>
                    </div>
                </div>

                <div class="service-det03">
                    <div class="site-vitrine">
                        <h2 class="green-title02">Montage vidéo et animation 3D</h2>
                        <p>
                            Notre équipe est composée de spécialistes dans le traitement d'images, de vidéos, motion design et l'animation 3D. Nous accordons un respect strict dans k'application de vos consignes tout en étant force de proposition dans les éventuels axes d'amélioration sur le rendu final. Contactez-nous afin d'étudier ensemble votre projet.
                        </p>
                    </div>
                    <div class="design03"></div>
                </div>

                <div class="service-det04">
                    <div class="design04"></div>
                    <div class="applications">
                        <h2 class="green-title02">Plans architecturaux</h2>
                        <p>
                            Nous travaillons en étroite collaboration avec nos clients pour créer des plans architecturaux sur mesure, répondant à leurs besoins spécifiques et respectant les normes en vigueur. Nous prenons en compte tous les aspects du projet, depuis les contraintes techniques jusqu'aux préférences esthétiques de nos clients. Nous sommes également en mesure de réaliser des rendus 3D pour une visualisation plus réaliste de votre projet. 
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
                        <input type="text" name="nom" id=""  class="myname">
                                                
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
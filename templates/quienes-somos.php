<?php
    /* Template Name: Quienes Somos */ 
    get_header();
?>
<!-- Add your site or application content here -->        

<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>        
        
        <section id="who">            
                <div class="flex">
                    <div class="sin-padding columna fondo"></div>
                    <div class="columna">
                        <h2>¿Quiénes somos?</h2>
                        <p>Somos la Asociación de Health Coaches Unidos de México (AHCUM),  acreditamos y reúnimos a los profesionales de esta área con el objetivo de  comunicar con claridad las actividades y funciones de un health coach y su relación de apoyo con otras áreas: Médicos, Nutriólogos,  Psicólogos,  entre otros.</p>
                        <p>
                        Constituida como  ORG en enero de 2018,  la AHCUM pretende ampliar el alcance, reconocimiento y  awareness (conciencia)  de la profesión, para brindar a sus asociados mejores oportunidades laborales y finalmente inspirar el cambio de hábitos de estilo de vida de los mexicanos. </p>
                        
                        <p>Somos un grupo de coaches de salud integral de INN Health entusiastas, comprometidos y profesionales que persiguen <b>un sueño común</b>:</p>
                        <p class="blue">"Ayudar a las personas a transformar sus vidas, inspirar cambio de hábitos y expandir la conciencia"</p>
                        
                    </div>
                </div>
            
        </section>
        
        <section id="mision-vision">
                <div class="flex">
                    
                    <div class="columna">
                       <div class="contenido">
                          <h2>Misión</h2>
                        <p>Inspirar y contribuir a un México más saludable y feliz. Nuestra comunidad de Health Coaches se compromete a elevar el bienestar general de los mexicanos mediante el fomento de cambios en los hábitos de vida. También nos dedicamos a apoyar el desarrollo profesional de los asociados y trabajar en el posicionamiento de la práctica del Coaching de Salud como un elemento clave para mantener una salud integral.</p>
                        
                        <h2>Visión</h2>
                        <p>Ser la principal comunidad de Health coaches en México responsable de acreditar la buena práctica del Coaching de Salud, logrando así el reconocimiento de la sociedad y los profesionales de la salud como aliados en materia de prevención y bienestar en nuestro país.</p>
                       </div>
                                           
                    </div>
                    
                    <div class="columna fondo"></div>
                </div>
        </section>
        
        <section id="valores">
            <div class="blue-line"></div>
            <div class="flex center-h">
                <h2>Nuestros Valores</h2>
            </div>
            
            <div class="center">
                <div class="flex">
                    <div class="columna center">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quienes/stars-medal.png" alt="Honestidad e Integridad">
                    </div>
                    <div class="columna center">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quienes/check-direction.png" alt="Ética y disrupción">
                    </div>
                </div>

                <div class="flex">
                    <div class="columna center">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quienes/respeto-responsabilidad.png" alt="Respeto y responsabilidad">
                    </div>
                    <div class="columna center">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quienes/heart-people.png" alt="Compromiso social con unidad y cooperación">
                    </div>   
                </div>
            </div>
            
            <div class="blue-line"></div>
        </section>
        
        <section id="contact">
           <div class="center"><h2>¡Contáctanos y únete a esta comunidad en pro del bienestar! </h2></div>
            <div class="flex">
                <div class="columna"> 
                    <?php echo do_shortcode('[caldera_form id="CF5b0348dd99b2a"]'); ?> 
                    
                    <?php echo do_shortcode('[caldera_form id="CF5ad15a1cc0472"] '); ?>             
                </div>
                
                
                <div class="columna">
                
                <div>
                    <div class="flex ">
                        <div class="contacto center">
                            <i class="far fa-clock"></i>
                        </div>

                        <div class="columna-contacto">
                            <p>
                            De Lunes a Viernes<br> 
                            de 9:00 am a 5:00 pm </p>
                        </div>
                    </div>
                    
                    <div class="flex ">
                        <div class="contacto center">
                            <i class="fas fa-mobile-alt"></i>
                        </div>

                        <div class="columna-contacto">
                            <p>(55) 53700915</p>
                        </div>
                    </div>
                       
                    <div class="flex">   
                        <div class="contacto center">
                            <i class="fas fa-envelope"></i>
                        </div>
                    
                        <div class="columna-contacto">
                            <p>info@healthcoachesunidos.org</p>
                        </div>
                     </div>
                    
                    <div class="flex">
                        <div class="contacto center">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>

                        <div class="columna-contacto">
                            <p>Tlaxcala 127. Interior 702.<br>
                            Colonia Roma Srur,<br>
                            Cuauhtémoc CDMX.  CP. 06760</p>
                        </div>
                     </div>
                </div>
                    
                      <div class="border"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.1130081232277!2d-99.16927548571853!3d19.407522646512515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff15506f39d1%3A0x41e0928200a8464b!2sInterior+702%2C+Tlaxcala+127%2C+Roma+Sur%2C+06760+Ciudad+de+M%C3%A9xico%2C+CDMX!5e0!3m2!1ses-419!2smx!4v1526334482238" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                      </div>
                </div>
            </div>
        </section>
<?php 
    get_footer();
?>
<?php
    /* Template Name: Principal */ 
    get_header();
?>
<!-- Add your site or application content here -->
        <header>
            <img id="logo" src="img/logo.png" alt="center">
        </header>
        
        <section id="intro">
        	<img class="hide-desktop" src="<?php echo get_stylesheet_directory_uri(); ?>/img/responsive/slide.jpg" alt="">
        </section>
        
        <section id="mision">            
                <div class="flex">
                    <div class="sin-padding columna fondo"></div>
                    <div class="columna">
                        <h2>Misión</h2>
                        <p>
                            Somos una comunidad de Health Coaches comprometidos a elevar el bienestar integral de los mexicanos a través de cambios de hábitos en el estilo de vida.
                        </p>
                        <p>
                            Dedicados a apoyar el desarrollo profesional de los asociados en México y trabajar en el posicionamiento de la práctica de Health Coaching como un elemento clave para mantener la salud integral.
                        </p>
                    </div>
                </div>
            
        </section>
        
        <section id="vision">
                <div class="flex">
                    
                    <div class="columna">
                       <div class="contenido">
                          <h2>Visión</h2>
                        <p>
                            Ser la comunidad líder de Health Coaches en México responsable de acreditar la buena práctica de Health Coaching logrando así el reconocimiento de la sociedad y profesionales de salud como aliados en materia de prevención y bienestar en nuestro país.
                        </p> 
                       </div>
                                           
                    </div>
                    
                    <div class="columna fondo"></div>
                </div>
        </section>
        
        <section id="banner">
            <div class="flex">
                <div class="columna sin-padding">
                	<img class="hide-desktop" src="<?php echo get_stylesheet_directory_uri(); ?>/img/responsive/logo-evento.jpg" alt="">

                	 <img class="banner-pc hide-movil" src="<?php echo get_stylesheet_directory_uri(); ?>/img/banner.jpg" alt="">
                </div>
                <div class="columna">                   

                    <div class="movil">
                    	<h2>El primer gran foro de Salud Integral en México</h2>

                    	<ul>
                    		<li>Nutrición holística</li>
                    		<li>Alimentación consciente - Mindfulness</li>
                    		<li>Clean eating</li>
                    		<li>Cambio de hábitos</li>
                    		<li>Salud emocional</li>
                    		<li>Fitness</li>
                    		<li>Talleres de sanación holística: Yoga, meditación</li>
                    		<li>Talleres de cocina saludable</li>
                    	</ul>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="contacto">
            <div class="contenedor">
                <h2>¡Únete a esta comunidad en pro del bienestar!</h2>
                <p>Para mayor información sobre como afiliarte, por favor deja tus datos.</p>
                <?php 
                    echo do_shortcode('[caldera_form id="CF5ad15a1cc0472"]');
                 ?>
           

            
             </div>

             <div class="full">
             	<div class="contenedor">
             		
             	
             	<div class="info-contact flex">
            	<div class="columna">
            		<a href="https://api.whatsapp.com/send?phone=5553700915">
            		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/whatsapp.svg" alt="">
            		<p>
            			(55) 53700915
            		</p>
            		</a>
            	</div>
            	<div class="columna">
            		<a href="mailto:info@healthcoachesunidos.org">
            		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/email.svg" alt="">
						<p>info@healthcoachesunidos.org</p>
            		</a>
            	</div>
            	<div class="columna">
            		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/address.svg" alt="">
            		<p>
            			Tlaxcala 127 interior 702 <br>
						Roma Sur <br>
						Cuauhtémoc CDMX <br>
						CP 06760.
            		</p>
            	</div>
            </div>
            </div>
             </div>
        </section>
<?php 
    get_footer();
?>
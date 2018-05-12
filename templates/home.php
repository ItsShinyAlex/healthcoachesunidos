<?php
    /* Template Name: Principal */ 
    get_header();
?>
<!-- Add your site or application content here -->
        <header>
            <img id="logo" src="img/logo.png" alt="center">
        </header>
        
        <section id="intro">
        	<div class="contenedor-center">
        	    <h1>Únete a la Asociación de Health Coaches </h1>
        	    <p class="white big-p">Sé parte de esta comunidad. Avala tu práctica profesional en México y recibe todos los beneficios. </p>
        	    <a class="btn-purple" href="#">ME INTERESA</a>
        	</div>
        </section>
        
        <section id="mision">            
                <div class="flex">
                    <div class="sin-padding columna fondo"></div>
                    <div class="columna">
                        <h2>Afíliate y disfruta los <br>
                        siguientes beneficios:</h2>
                        <ul>
                            <li>
                                Recibirás tu distintivo oficial de miembro avalado en su calidad de práctica.
                            </li>
                            <li>
                                Tendrás un perfil en el directorio de Health Coaches avalados y podrás publicar los enlaces de tus redes sociales.
                            </li>
                            <li>
                                Acceso, descuentos y trato preferencial en eventos de networking organizados por Asociación.
                            </li>
                            <li>
                                Acceso a entrenamientos, talleres, conferencias presenciales o en la plataforma on line para actualización de tu práctica y habilidades.
                            </li>
                            <li>
                                Recepción de newsletters con información actualizada y relevante para la práctica.
                            </li>
                            <li>
                                Posibilidad de publicación de tu contenido con créditos y re dirección a su sitio web (sólo personas registradas).
                            </li>
                            <li class="blue">
                                Y 2 boletos de acceso al primer "Health Coaching Weekend" a celebrarse el 20 y 21 de octubre de 2018
                            </li>
                        </ul>
                    </div>
                </div>
            
        </section>
        
        <section id="vision">
                <div class="flex">
                    
                    <div class="columna">
                       <div class="contenido">
                          <h2>Requisitos para<br>
                            afiliarte:</h2>
                        <ul>
                            <li>Ser graduado de INN </li>
                            <li>Certificado de Health Coach</li>
                            <li>Validar tu certificado</li>
                        </ul>
                        
                        <a href="#" class="btn-purple">¿CÓMO VALIDAR?</a>
                       </div>
                                           
                    </div>
                    
                    <div class="columna fondo"></div>
                </div>
        </section>
        
        <section id="123">
            <div class="green-line"></div>
            <div class="flex center-h">
                <h2>Afíliate en 3 sencillos pasos</h2>
            </div>
            <div class="flex">
                <div class="columna">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/1p.png" alt="PayPal">
                    <p class="white bigger">Realiza tu pago vía Paypal, Transferencia o depósito </p>
                </div>
                <div class="columna">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/2mail.png" alt="Mail">
                    <p class="white bigger">Envía el comprobante
                    (si pagas con Paypal, no es necesario)</p>
                </div>
                <div class="columna">
                    <p class="white bigger">Recibe en tu email y descarga tu kit de bienvenida</p>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/3download.png" alt="Descarga">
                </div>
            </div>
            <div class="green-line"></div>
        </section>
        
        <section id="descuento">
            <div class="flex">
                <div class="columna">                
                </div>
                <div class="columna flex center-h">
                    <h2>Aprovecha este descuento especial<br> 
                    ¡Afíliate ya por $1,499 pesos! </h2>
                    <p class="gray">(Descuento válido para los primeros<br>    
                    100 Health Coaches)</p> 
                    <a href="#" class="btn-purple">AFILIARME</a>
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
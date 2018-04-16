<?php
    /* Template Name: Principal */ 
    get_header();
?>
<!-- Add your site or application content here -->
        <header>
            <img id="logo" src="img/logo.png" alt="center">
        </header>
        
        <section id="intro"></section>
        
        <section id="mision">            
                <div class="flex">
                    <div class="columna fondo"></div>
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
                <div class="columna"></div>
                <div class="columna">
                    <img src="img/foro.png" alt="">
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
        </section>
<?php 
    get_footer();
?>
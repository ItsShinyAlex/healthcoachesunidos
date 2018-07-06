<?php
    /* Template Name: weekend coaching */ 
    get_header();
?>

<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</head>
<section id="weekend">
    <div class="container">
        <div class="r-allign">
            <h1>1er Health Coaching
            Weekend en México</h1>
            <p class="purple">¡Vive la experiencia de salud y bienestar<br> este 20 y 21 de Octubre!</p>
            <div class="flex">
                <div class="col"><a class="btn-blue" href="#reserva">ASISTIR</a></div>
                <div class="col"><a class="btn-purple" href="#que-tendras">SABER MÁS</a></div>
            </div>
        </div>
    </div>
</section>

<section id="blue-ahcum">
   <div class="green-line"></div>
    <div class="container center">
        <p class="pad-top">Creado por la Asociación de Health Coaching Unidos de México (AHCUM).</p>
        <p class="pad-bot">El Health Coaching Weekend reúne a los mejores Health Coachs certificados para brindarte toda una experiencia de bienestar en un sólo lugar.</p>
    </div>
   <div class="green-line"></div>
</section>

<section id="que-tendras">            
    <div class="flex">
        <div class="sin-padding columna fondo"></div>
        <div class="columna">
            <h2>¿Qué tendrás en Health 
            <br>Coaching Weekend?</h2>
            <ul>
                <li>
                    Conferencias magistrales y workshops con expertos en salud integral, medicina funcional y nutrición.
                        
                </li>
                <li>
                    Sesiones gratuitas de 20 minutos con health coaches expertos en diversos temas de salud integral.

                </li>
                <li>
                    Yoga y meditación.
                </li>
                <li>
                    Increíbles talleres de cocina con Chefs reconocidos  en alimentación saludable. 
                </li>
                <li>
                    La mejor selección de marcas y productos saludables de México. 
                </li>
            </ul>
        </div>
    </div>
</section>


<section id="speakers">
   <div class="blue-line"></div>
    <div class="container flex flex-center center">
        <h2>
            Speakers
        </h2>
        <div class="flex">
            <div class="col"><a class="btn-blue" href="#">20 DE OCTUBRE</a></div>
            <div class="col"><a class="btn-purple" href="#">21 DE OCTUBRE</a></div>
        </div>
    
        
        <div class="hc">
            <div class="flex">
                <div class="col small">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/weekend/mujer1.png" alt="Irma Mejía">
                </div>
                <div class="col big">
                    <h3>¿Por qué necesitamos un Health Coach?</h3>
                    <p>Conferencista: Irma Mejía, IIN Health Coach</p>
                    <div class="flex icons">
                        <div class="i-col">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="i-col">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="i-col">
                            <i class="fab fa-facebook-square"></i>
                        </div>
                        <div class="i-col">
                            <i class="fab fa-instagram"></i>
                        </div>
                        <div class="i-col">
                            <i class="fas fa-globe-asia"></i>
                        </div>
                    </div>
                    <div class="flex horarios">
                        <div class="i-col"><i class="far fa-clock"></i></div>
                        <div class="t-col"><p>9:00 - 9:45 HRS.	</p></div>
                        <div class="i-col"><i class="fas fa-users"></i></div>
                        <div class="t-col"><p># de afiliación: 1</p></div>
                    </div>
                    
                    <h4>Tema:
                    <br>Concientizar como hemos ido perdiendo la posibilidad de vivir plenos, felices y abundantes y cómo podemos recobrarla. </h4>
                </div>
            </div>
            
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script>
            $(document).ready(function(){
                $("#show1").click(function(){
                    $("#c1").toggleClass("info");
                    $("#f1").toggleClass("rotate");
                });
                
                $("#show2").click(function(){
                    $("#c2").toggleClass("info");
                    $("#f2").toggleClass("rotate");
                });
                
                $("#show3").click(function(){
                    $("#c3").toggleClass("info");
                    $("#f3").toggleClass("rotate");
                });
            });
            </script>

            
            <div class="info" id="c1">
                <p>Health coach desde el 2013, múltiples estudios en Medicina alternativa y desarrollo del ser.</p>
                <p>Coach en la escuela de nutrición mas grande del mundo.</p>
                <p>Creadora del Diplomado en Nutrición Integral (4 generaciones) talleres de cocina saludable y nutrición integral, programa de radio semanal Viviendo en Balance, conferencista, capacitadora y actualmente Presidenta de la AHCUM</p>
            </div>
            
            <div id="show1" class="right">
                <a><img id="f1" class="rotate" src="<?php echo get_stylesheet_directory_uri(); ?>/img/weekend/a1.png" alt="Mostrar más"></a>
            </div>
            
            
        </div>
        
        
  
        
        <div class="hc">
            <div class="flex">
                <div class="col small">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/weekend/coach1.png" alt="Alex Palombo">
                </div>
                <div class="col big">
                    <h3>Alimentación Natural + Colónicos = Salud</h3>
                    <p>Conferencista: Alex Palombo, IIN Health Coach</p>
                    <div class="flex icons">
                        <div class="i-col">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="i-col">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="i-col">
                            <i class="fab fa-facebook-square"></i>
                        </div>
                        <div class="i-col">
                            <i class="fab fa-instagram"></i>
                        </div>
                        <div class="i-col">
                            <i class="fas fa-globe-asia"></i>
                        </div>
                    </div>
                    <div class="flex horarios">
                        <div class="i-col"><i class="far fa-clock"></i></div>
                        <div class="t-col"><p>11:00 - 11:50 HRS.	</p></div>
                        <div class="i-col"><i class="fas fa-users"></i></div>
                        <div class="t-col"><p># de afiliación: 2</p></div>
                    </div>
                    
                    <h4>Tema:
                    <br>Bioindividualidad + Alimentación + Hidroterapia de Colon </h4>
                </div>
            </div>
            <div class="info" id="c2">
                <p>Miembro fundador de la Asociación de HealthCoaches Unidos por México, A.C.
                Pionero en Colónicos® en México y fundador del Centro Internacional de Hidroterapia de Colon, S.A. de C.V. (www.colonicos.com). Con experiencia en ello desde el año 2000. Involucrado en el mundo del bienestar desde 1994. Pionero también en Halo®Terapia desde el 2015.</p>
               
                <p>Reconocido como el experto en Hidroterapia de Colon en nuestro país. Es fundador y director de 4 clínicas, en proceso de apertura de la 5ª, ahora bajo el esquema de licencia de uso de marca.</p>
                
                <p>Ha lanzado al mercado productos de talla internacional al igual que da conferencias y capacitaciones, escribe un libro o actúa en teatro. No le bastó ser franquiciatario de un gimnasio para mujeres y terminó volviéndose franquiciante de un nuevo modelo de gimnasios basado en equipos de vibración, al desarrollar y luego presentar la franquicia VibraGym en la Feria Internacional de Franquicias en la Ciudad de México. </p>
                
                <p>
                    Su misión es la de mejorar la vida de cientos de miles de personas alrededor del mundo y sabe que no puede hacerlo solo, por lo que siempre está haciendo alianzas estratégicas para lograrlo.
                </p>
            </div>
            
            <div id="show2" class="right">
                <a><img id="f2" class="rotate" src="<?php echo get_stylesheet_directory_uri(); ?>/img/weekend/a1.png" alt="Mostrar más"></a>
            </div>
            
        </div>
        
        <div class="hc">
            <div class="flex">
                <div class="col small">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/weekend/mujer2.png" alt="Mariana García Sarquiz">
                </div>
                <div class="col big">
                    <h3>Alimentación Limpia</h3>
                    <p>Conferencista: Mariana García Sarquiz, Nutrióloga y Health Coach</p>
                    <div class="flex icons">
                        <div class="i-col">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="i-col">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="i-col">
                            <i class="fab fa-facebook-square"></i>
                        </div>
                        <div class="i-col">
                            <i class="fab fa-instagram"></i>
                        </div>
                        <div class="i-col">
                            <i class="fas fa-globe-asia"></i>
                        </div>
                    </div>
                    <div class="flex horarios">
                        <div class="i-col"><i class="far fa-clock"></i></div>
                        <div class="t-col"><p>13:00 - 13:30 HRS.	</p></div>
                        <div class="i-col"><i class="fas fa-users"></i></div>
                        <div class="t-col"><p># de afiliación: (no especificado)</p></div>
                    </div>
                    
                    <h4>Tema:
                    <br>¿Qué es la alimentación limpia? y 10 minutos para preguntas y respuestas. </h4>
                </div>
            </div>
            <div class="info" id="c3">
                <p>
                    Estudió la Carrera de Nutrición y Ciencia de los Alimentos en la Universidad Iberoamericana Campus Sta. Fe. Ciudad de México.
                </p>
                <p>
                    Hizo su Internado y Tesis en el Instituto Nacional de Perinatología, y posteriormente trabajé en la Clínica de Reproducción y Genética AGN (Hospital Ángeles del Pedregal Ciudad de México)  por cinco años, donde era la Nutrióloga encargada.
                </p>
                <p>
                    En el año 2016 se certificó como Health Coach por el Institute for Integrative Nutrition en Nueva York (IIN).
                    Hoy radica con sus tres hijos y su esposo en el Estado de Morelos donde es la Directora de Asesoría Nutricional y se dedica a dar asesoría en sus redes sociales y por medio de sus NUTRIRETOS, los cuales son programas de 21 días, donde a base de su Sistema Clean de Alimentación Balanceada les ayuda a lograr sus metas.
                </p>
            </div>
            
            <div id="show3" class="right">
                <a><img id="f3" class="rotate" src="<?php echo get_stylesheet_directory_uri(); ?>/img/weekend/a1.png" alt="Mostrar más"></a>
            </div>
        </div>
        
    </div>
    <div class="blue-line"></div>
</section>

<section id="reserva">
    <div class="container">
       
        <div class="flex">
            <div class="col"> 
               <div class="pad-left">
                    <h2>¿Cómo llegar?</h2>
                    <p>Gran Recinto. Tlalnepantla.
                    <br>Estado de México.</p>
               </div>
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3760.3726602875645!2d-99.22847678593696!3d19.525608086831564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d21d974c6fd2ab%3A0x58e69addf026501c!2sTeatro+Gran+Recinto!5e0!3m2!1ses-419!2smx!4v1530825494813" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            
            <div class="col p-col">
                <h2>Reserva tu lugar
                <br> hoy mismo</h2>
                
                <h3 class="green">PRECIO ESPECIAL PREVENTA</h3>
                <p class="white">$249 pesos.  
                <br>(Incluye ambos días) </p>
                
                <p class="white">
                    Iniciamos el:
                    <br>Sábado, 20 de octubre de 2018.
                    <br>A las 11:00am
                </p>
                
                <a href="#" class="btn-green">COMPRAR AHORA</a>
            </div>
        </div>
    </div>
</section>

<?php 
    get_footer();
?>
//smooth scroll
jQuery(function ($) {

    $('.box').on('click', function (e) {
        e.preventDefault();
        var perfil = $(this).data('perfil');
        console.log(perfil)
        $(perfil).addClass('active');
        $('.shadow').addClass('active');

        $('.cerrar, .shadow').on('click', function (e) {
            e.preventDefault();
            $(perfil).removeClass('active');
            $('.shadow').removeClass('active');
        });

        $(document).on('keyup', function (evt) {
            if (evt.keyCode == 27) {
                $(perfil).removeClass('active');
                $('.shadow').removeClass('active');
            }
        });

    });

    
    
    // JavaScript
window.sr = ScrollReveal({ reset: false });


      var hero = {
        origin   : "top",
        distance : "24px",
        duration : 900,
        scale    : 1.05,
      }
      
      
      var clientes = {
        origin   : "top",
        distance : "24px",
        duration : 1200,
        scale    : 1.05,
        delay    : 900,
      }

      var intro = {
        origin   : "bottom",
        distance : "64px",
        duration : 900,
        delay    : 800,
        scale    : 1,
      }

      var resaltado = {
        origin   : "left",
        distance : "32px",
        duration : 1200,
        delay    : 400,
        scale    : 0,
      }

      
      var aplicaciones = {
        origin   : "top",
        distance : "24px",
        duration : 1000,
        scale    : 1.05,
        delay    : 900
      }

      
      var titulo = {
        origin   : "bottom",
        distance : "32px",
        duration : 1000,
        delay    : 0,
        scale    : 0,
      }
      
       var subtituloH3 = {
        origin   : "bottom",
        distance : "32px",
        duration : 900,
        delay    : 200,
        scale    : 0,
      }
       
       var subtituloH4 = {
        origin   : "bottom",
        distance : "32px",
        duration : 900,
        delay    : 300,
        scale    : 0,
      }
      
      var imagenes = {
        origin   : "left",
        distance : "32px",
        duration : 800,
        delay    : 400,
        scale    : 0,
      }
      
    var contenido = {
        origin   : "bottom",
        distance : "32px",
        duration : 1000,
        delay    : 400,
        scale    : 0,
      }

             
        //Animación en general
        sr.reveal('h1, h2', titulo);
        //sr.reveal('h3', subtituloH3);
        //sr.reveal('h4', subtituloH4);
        sr.reveal('.box img, #footer img', imagenes);
        sr.reveal('p', contenido);
        sr.reveal('.btn-green', contenido);
    
    
});

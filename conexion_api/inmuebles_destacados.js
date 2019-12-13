// Requiere archivo token.js
// Requiere archivo validadores.js
// Requiere archivo modelo_inmueble.js

// valor random


$.ajax({
    url: 'https://www.simi-api.com/ApiSimiweb/response/v21/inmueblesDestacados/total/1/limit/0',
     type: 'GET',
     beforeSend: function (xhr) {
     xhr.setRequestHeader(
        'Authorization',
        'Basic ' + btoa('Authorization:'+TOKEN));
     },
     'dataType': "json",
     success:function(data){
         console.log(data);
         var totalInmuebles = data.infoAdd.totalInmuebles;
         $.ajax({
               url: 'https://www.simi-api.com/ApiSimiweb/response/v21/inmueblesDestacados/total/'+totalInmuebles+'/limit/0',
                type: 'GET',
                beforeSend: function (xhr) {
                xhr.setRequestHeader(
                   'Authorization',
                   'Basic ' + btoa('Authorization:'+TOKEN));
                },
                'dataType': "json",
                success:function(inmuebles){
                console.log(inmuebles);
                  if(inmuebles == "Sin resultados"){
                        contenedor_inmueble += '<h1 class="text-center pb-4 mb-4" >No hay Inmuebles destacados </h1>';
                         $("#propiedades_destacadas").append(contenedor_inmueble);
                  }else if(totalInmuebles == 1){
                     modelo_inmueble_destacados(inmuebles, totalInmuebles);
                     $("#propiedades_destacadas").append(contenedor_inmueble);
                     $('#columna-destacadas').removeClass('col-md-10');
                     $('#columna-destacadas').addClass('col-md-4');
                     var carouselDestacadas = () => {
                        $('#propiedades_destacadas').owlCarousel({
                        loop:true,
                        margin:10,
                        nav:true,
                        autoplay:false,
                        autoplayTimeout:0,
                        autoplayHoverPause:false,
                        responsive:{
                            0:{
                                items:1
                            },
                            728:{
                                items:1
                            },
                            1000:{
                                items:1
                            },
                            1400:{
                                items:1
                            }
                        }
                        
                        })}
                     setTimeout(carouselDestacadas(),500);
                  }else if(totalInmuebles == 2){
                    modelo_inmueble_destacados(inmuebles, totalInmuebles);
                     $("#propiedades_destacadas").append(contenedor_inmueble);
                     $('#columna-destacadas').removeClass('col-md-10');
                     $('#columna-destacadas').addClass('col-md-7');
                     var carouselDestacadas = () => {
                        $('#propiedades_destacadas').owlCarousel({
                        loop:true,
                        margin:10,
                        nav:true,
                        autoplay:false,
                        autoplayTimeout:0,
                        autoplayHoverPause:false,
                        responsive:{
                            0:{
                                items:1
                            },
                            728:{
                                items:2
                            },
                            1000:{
                                items:2
                            },
                            1400:{
                                items:2
                            }
                        }
                        
                        })}
                     setTimeout(carouselDestacadas(),500);
                  }else{
                    modelo_inmueble_destacados(inmuebles, totalInmuebles);
                    $("#propiedades_destacadas").append(contenedor_inmueble);
                    var carouselDestacadas = () => {
                       $('#propiedades_destacadas').owlCarousel({
                       loop:true,
                       margin:10,
                       nav:true,
                       autoplay:false,
                       autoplayTimeout:0,
                       autoplayHoverPause:false,
                       responsive:{
                           0:{
                               items:1
                           },
                           728:{
                               items:2
                           },
                           1000:{
                               items:3
                           },
                           1400:{
                               items:3
                           }
                       }
                       
                       })}
                    setTimeout(carouselDestacadas(),500);
                  }
                }              
            });
     }});
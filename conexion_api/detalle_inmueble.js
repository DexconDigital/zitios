if (codigoInmueble != null || codigoInmueble != 0) {
   $.ajax({
      url: 'https://www.simi-api.com/ApiSimiweb/response/v2/inmueble/codInmueble/' + codigoInmueble,
      async: true,
      type: 'GET',
      beforeSend: function (xhr) {
         xhr.setRequestHeader(
            'Authorization',
            'Basic ' + btoa('Authorization:' + TOKEN));
      },
      'dataType': "json",
      success: function (data) {
         if (data.msn == "Inmueble NO Disponible") {
            alert("No se encontro inmueble");
         } else {
            //   Valida informacion que se trae del API
            existeElemento(data.Administracion, '#administracion');
            if (!existeElemento(data.video, '#video')) {
               $('#contenedor_video').removeClass("col-8").addClass("col-12");
            }else{
               $("#videosrc").attr("src", data.video);
            }
            // Fin de validador informacion
            var carrousel = '', caracteristicasExternas = '', caracteristicasInternas;
            var carrouselImagen = () =>{
               validarImagenDetalleInmueble(data);
               carrousel += '<div class="carousel-item active">' +
                  '<img src="' + data.fotos[0].foto + '">' +
                  '</div>'
               for (var i = 1; i < Object.keys(data.fotos).length; i++) {
                  carrousel += '<div class="carousel-item">' +
                     '<img  src="' + data.fotos[i].foto + '">' +
                     '</div>';
            }
            
            }
            setTimeout(carrouselImagen(), 300)
            // Recorrer caracteristicas inmuebles
            if (data.caracteristicasExternas != undefined){
               for (var x = 0; x < Object.keys(data.caracteristicasExternas).length; x++) {
                  caracteristicasExternas += '<li>' + data
                  .caracteristicasExternas[x].Descripcion + '</li>';
               }
            } else{
               $("#caracteristicas_externas").css("display", "none");
            }
            if (data.caracteristicasInternas != undefined) {
               for (var x = 0; x < Object.keys(data.caracteristicasInternas).length; x++) {
                  if (data.caracteristicasInternas[x].cantidad != 0) {
                     caracteristicasInternas += '<li>' + data.caracteristicasInternas[x].cantidad + data
                        .caracteristicasInternas[x].Descripcion + '</li>';
                  }
                  caracteristicasInternas += '<li>' + data.caracteristicasInternas[x].Descripcion + '</li>';
               }
            }else{
               $("#caracteristicas_internas").css("display", "none");
            }
            var caracteristicasInternas = caracteristicasInternas.replace(/undefined/i, " ");
            var caracteristicasExternas = caracteristicasExternas.replace(/undefined/i, " ");
            $(".carousel-inner").append(carrousel);
            $('#ubicacion').append(data.ciudad + ', ' + data.depto + ', ' + data.barrio);
            $('#gestion').append(data.oper);
            $('#precio').append("hola");
            $('#areaConstruida').append(Math.trunc(data.AreaConstruida) + 'mts<sup>2</sup>');
            $('#areaTotal').append(Math.trunc(data.AreaLote) + 'mts<sup>2</sup>');
            $('#alcobas').append(data.alcobas); 
            $('#banos').append(data.banos);
            $('#tipo_inmueble').append(data.Tipo_Inmueble);
            $('#administracion').append(data.Administracion);
            $('#descripcion').append(data.descripcionlarga);
            $('#video').append(data.video);
            $('#lista_caracteristicas_internas').append(caracteristicasInternas);
            $('#lista_caracteristicas_externas').append(caracteristicasExternas);
            
            // datos asesor
            var asesor ="", correo_asesor ="";
            if(data.asesor[0] != undefined){
               asesor += '<h4>'+data.asesor[0].ntercero+'</h4>'+
               '<span class="mt-4 mb-4">Agente inmobiliario</span><br>'+
               '<a href="+57'+data.asesor[0].celular+'" class="mb-4"><i class="fas fa-phone mr-3"></i> '+data.asesor[0].celular+'</a><br>'+
               '<a href="wa.me/57'+data.asesor[0].celular+'" class="mb-4"><i class="fab fa-whatsapp mr-3"></i> '+data.asesor[0].celular+'</a>';
               correo_asesor+='<input type="hidden" id="correo" name="correo" value="'+data.asesor[0].correo+'">';
            }
            $('#agente').append(asesor);
            $('#formulario').append(correo_asesor);
         }
      }
   });
}
// Se deben crear unas variables que reciban los datos de la consulta por PHP para que filtre por ciudad y inmuebles

const ARRIENDO = 'Arriendo';
const ARRIENDO_VENTA ="Arriendo/venta";

$.ajax({
    url: 'https://www.simi-api.com/ApiSimiweb/response/v2.1.3/filtroInmueble/limite/0/total/4/departamento/0/ciudad/'+idCiudad+'/zona/0/barrio/0/tipoInm/'+idInmueble+'/tipOper/0/areamin/0/areamax/0/valmin/0/valmax/0/campo/0/order/0/banios/0/alcobas/0/garajes/0/sede/0/usuario/0',
    type: 'GET',
    beforeSend: function (xhr) {
    xhr.setRequestHeader(
        'Authorization',
        'Basic ' + btoa('Authorization:'+TOKEN));
    },
    'dataType': "json",
    success:function(data)
    {   
        if(data != "Sin resultados"){
            // Si es sin resultados traera solo por Tipo Inmueble
            console.log('No encontre resultados por Ciudad y TipoInmueble, voy a buscar por solo tipoInmueble');
            $.ajax({
                url: 'https://www.simi-api.com/ApiSimiweb/response/v2.1.3/filtroInmueble/limite/0/total/4/departamento/0/ciudad/0/zona/0/barrio/0/tipoInm/'+idInmueble+'/tipOper/0/areamin/0/areamax/0/valmin/0/valmax/0/campo/0/order/0/banios/0/alcobas/0/garajes/0/sede/0/usuario/0',
                type: 'GET',
                beforeSend: function (xhr) {
                xhr.setRequestHeader(
                    'Authorization',
                    'Basic ' + btoa('Authorization:'+TOKEN));
                },
                'dataType': "json",
                success:function(data){
                    if(data != "Sin resultados"){
                        // si esto no da resultado buscar por Tipo Iciudad
                        console.log('No encontre resultados por TipoInmueble, voy a buscar por solo Ciudad');
                        $.ajax({
                            url: 'https://www.simi-api.com/ApiSimiweb/response/v2.1.3/filtroInmueble/limite/0/total/4/departamento/0/ciudad/'+idCiudad+'/zona/0/barrio/0/tipoInm/0/tipOper/0/areamin/0/areamax/0/valmin/0/valmax/0/campo/0/order/0/banios/0/alcobas/0/garajes/0/sede/0/usuario/0',
                            type: 'GET',
                            beforeSend: function (xhr) {
                            xhr.setRequestHeader(
                                'Authorization',
                                'Basic ' + btoa('Authorization:'+TOKEN));
                            },
                            'dataType': "json",
                            success:function(data){
                                if(data == "Sin resultados"){
                                    // Si nada de esto da resultado, traer lo que sea
                                    console.log('No Encontre nada, voy a traer los primeros inmuebles que encuentre');
                                    $.ajax({
                                        url: 'https://www.simi-api.com/ApiSimiweb/response/v2.1.3/filtroInmueble/limite/0/total/4/departamento/0/ciudad/0/zona/0/barrio/0/tipoInm/0/tipOper/0/areamin/0/areamax/0/valmin/0/valmax/0/campo/0/order/0/banios/0/alcobas/0/garajes/0/sede/0/usuario/0',
                                        type: 'GET',
                                        beforeSend: function (xhr) {
                                        xhr.setRequestHeader(
                                            'Authorization',
                                            'Basic ' + btoa('Authorization:'+TOKEN));
                                        },
                                        'dataType': "json",
                                        success:function(data){
                                            if(data == "Sin resultados"){
                                                propiedad_similar += '<h4>Sin Resultados</h4>';
                                                $("#p_similares").append(propiedad_similar);
                                            }else{
                                                var similares = data.Inmuebles;
                                                // console.log(similares);
                                                setTimeout(propiedades_similares(similares),100);
                                                $("#p_similares").append(propiedad_similar);
                                            }
                                        }
                                    });
                                }else{
                                    var similares = data.Inmuebles;
                                    // console.log(similares);
                                    setTimeout(propiedades_similares(similares),100);
                                    $("#p_similares").append(propiedad_similar);
                                }
                            }});
                    }else{
                        var similares = data.Inmuebles;
                        // console.log(similares);
                        setTimeout(propiedades_similares(similares),100);
                        $("#p_similares").append(propiedad_similar);
                    }
                }
            });
        }else{
        console.log("Encontre por ambos filtros !Imprimir!");
        var similares = data.Inmuebles;
        // console.log(similares);
        setTimeout(propiedades_similares(similares),100);
        $("#p_similares").append(propiedad_similar);
        }
    }             
   });

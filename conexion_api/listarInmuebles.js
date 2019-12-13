

function paginador(actual) {
    var reemplazar = '&&pag='+pagina;
    url = url.replace(reemplazar, "");
    if (actual == 'ant') {
        pagina--;
        location.href = url+'&&pag='+pagina;
    }
    if (actual == 'sig') {
        pagina++;
        location.href = url+'&&pag='+pagina;
    }
}

if(pagina == 0 || pagina == null || pagina == undefined || pagina ==""){
    pagina = 1;
}

$.ajax({
    url: 'https://www.simi-api.com/ApiSimiweb/response/v2.1.3/filtroInmueble/limite/'+pagina+'/total/9/departamento/0/ciudad/'+ciudad+'/zona/0/barrio/'+barrio+'/tipoInm/'+tipo_inmueble+'/tipOper/'+gestion+'/areamin/'+aremin+'/areamax/'+aremax+'/valmin/'+min+'/valmax/'+max+'/campo/0/order/desc/banios/'+banos+'/alcobas/'+alcobas+'/garajes/0/sede/0/usuario/0',
    type: 'GET',
    beforeSend: function (xhr) {
    xhr.setRequestHeader(
        'Authorization',
        'Basic ' + btoa('Authorization:'+TOKEN));
    },
    'dataType': "json",
    success:function(data)
    {   
        var inmuebles = data.Inmuebles;
        var paginas = data.datosGrales;
        modelo_inmueble(inmuebles);
        validarpagina(pagina, cantidadPaginas(paginas.totalPagina, paginas.totalInmuebles));
        // paginador
        // fin paginador
        $("#inm").append(contenedor_inmueble);
    }     
   });

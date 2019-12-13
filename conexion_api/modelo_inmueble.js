var contenedor_inmueble = " ", propiedad_similar =" " , pag =" ";
var modelo_inmueble = function(inmuebles){
    for(var pos=0; pos <inmuebles.length; pos++){
        //Validar si trae imagenes
        validarImagenInmueble(inmuebles[pos]);
        validarUbicacionPrecio(inmuebles[pos]);
         contenedor_inmueble += '<div class="col-sm-12 col-md-6 col-lg-4">'+
            '<div class="card ml-md-4 ml-sm-0">'+
            '<div class=contenedor-img>'+
            '<a href="detalle-inmueble.php?co='+inmuebles[pos].Codigo_Inmueble+'">'+
            '<img src="'+inmuebles[pos].foto1+'" class="card-img-top" alt="...">'+
            '</a>'+
            '<div class="description-inmueble">'+
            '<div class="leo-extra">'+
            '<label class="control-label leo-sqft">'+
            '<span class="label-tooltip">Codigo: '+inmuebles[pos].Codigo_Inmueble+'</span>'+
            '</label>'+
            '<label class="control-label leo-bedrooms">'+
            '<span class="label-tooltip"><i class="fas fa-bed"></i> '+inmuebles[pos].Alcobas+'</span>'+
            '</label>'+
            '<label class="control-label leo-bathrooms">'+
            '<span class="label-tooltip"><i class="fas fa-bath"></i> '+inmuebles[pos].banios+'</span>'+
            '</label>'+
            '<label class="control-label leo-admin">'+
            '<span class="label-tooltip"><i class="fas fa-ruler"></i> '+inmuebles[pos].AreaConstruida+'mt<sup>2</sup></span>'+
            '</label>'+
            '</div>';

            if(inmuebles[pos].Gestion != 'Arriendo/venta'){
                contenedor_inmueble +=
                '<ul class="product-flags">'+
                '<li class="product-flag rent">'+inmuebles[pos].Gestion+'</li>'+
                '</ul>'+
                '<ul class="product-flags2">'+
                '<li class="product-flag rent">$ '+inmuebles[pos].Canon+'</li>'+
                '</ul>';
            }else{
                contenedor_inmueble +=
                '<ul class="product-flags">'+
                '<li class="product-flag rent">ARRIENDO</li>'+
                '</ul>'+
                '<ul class="product-flags2">'+
                '<li class="product-flag rent">$ '+inmuebles[pos].Canon+'</li>'+
                '</ul>'+
                '<ul class="product-flags4">'+
                '<li class="product-flag rent">VENTA</li>'+
                '</ul>'+
                '<ul class="product-flags3">'+
                '<li class="product-flag rent">$ '+inmuebles[pos].Venta+'</li>'+
                '</ul>';
            }
            contenedor_inmueble +=
            '</div>'+
            '</div>'+
            '<div class="card-body">'+
            '<h5 class="card-tittle">'+inmuebles[pos].Tipo_Inmueble+'</h5>'+
            '<h6 class="card-subtitle">'+inmuebles[pos].Barrio+', '+inmuebles[pos].Zona+'</h6>'+
            '<p class="card-text">'+inmuebles[pos].Ciudad+', '+inmuebles[pos].Departamento+'</p>'+
            '<a href="detalle-inmueble.php?co='+inmuebles[pos].Codigo_Inmueble+'" class="btn btn-light btn-lg btn-block text-left">Ver más'+
            '<i class="fas fa-arrow-right float-right mt-1"></i></a>'+
            '</div>'+
            '</div>'+
            '</div>';
    }
            return contenedor_inmueble;
}
var modelo_inmueble_destacados = function(inmuebles, totalinmuebles){
        var totalInmuebles = totalinmuebles-1;
        var maximoPropiedas = 9;
        var numerostop= totalInmuebles - maximoPropiedas;
        var pos = totalInmuebles;
        for(var pos; pos > numerostop; pos--){
            //Validar si trae imagenes
            validarImagenInmueble(inmuebles[pos]);
            validarUbicacionPrecio(inmuebles[pos]);
             contenedor_inmueble += '<div class="item">'+
                '<div class="card ml-md-4 ml-sm-0">'+
                '<div class=contenedor-img>'+
                '<a href="detalle-inmueble.php?co='+inmuebles[pos].Codigo_Inmueble+'">'+
                '<img src="'+inmuebles[pos].foto1+'" class="card-img-top" alt="...">'+
                '</a>'+
                '<div class="description-inmueble">'+
                '<div class="leo-extra">'+
                '<label class="control-label leo-sqft">'+
                '<span class="label-tooltip">Codigo: '+inmuebles[pos].Codigo_Inmueble+'</span>'+
                '</label>'+
                '<label class="control-label leo-bedrooms">'+
                '<span class="label-tooltip"><i class="fas fa-bed"></i> '+inmuebles[pos].Alcobas+'</span>'+
                '</label>'+
                '<label class="control-label leo-bathrooms">'+
                '<span class="label-tooltip"><i class="fas fa-bath"></i> '+inmuebles[pos].banios+'</span>'+
                '</label>'+
                '<label class="control-label leo-admin">'+
                '<span class="label-tooltip"><i class="fas fa-ruler"></i> '+inmuebles[pos].AreaConstruida+'mt<sup>2</sup></span>'+
                '</label>'+
                '</div>';
    
                if(inmuebles[pos].Gestion != 'Arriendo/venta'){
                    contenedor_inmueble +=
                    '<ul class="product-flags">'+
                    '<li class="product-flag rent">'+inmuebles[pos].Gestion+'</li>'+
                    '</ul>'+
                    '<ul class="product-flags2">'+
                    '<li class="product-flag rent">$ '+inmuebles[pos].Canon+'</li>'+
                    '</ul>';
                }else{
                    contenedor_inmueble +=
                    '<ul class="product-flags">'+
                    '<li class="product-flag rent">ARRIENDO</li>'+
                    '</ul>'+
                    '<ul class="product-flags2">'+
                    '<li class="product-flag rent">$ '+inmuebles[pos].Canon+'</li>'+
                    '</ul>'+
                    '<ul class="product-flags4">'+
                    '<li class="product-flag rent">VENTA</li>'+
                    '</ul>'+
                    '<ul class="product-flags3">'+
                    '<li class="product-flag rent">$ '+inmuebles[pos].Venta+'</li>'+
                    '</ul>';
                }
                contenedor_inmueble +=
                '</div>'+
                '</div>'+
                '<div class="card-body">'+
                '<h5 class="card-tittle">'+inmuebles[pos].Tipo_Inmueble+'</h5>'+
                '<h6 class="card-subtitle">'+inmuebles[pos].Barrio+', '+inmuebles[pos].Zona+'</h6>'+
                '<p class="card-text">'+inmuebles[pos].Ciudad+', '+inmuebles[pos].Departamento+'</p>'+
                '<a href="detalle-inmueble.php?co='+inmuebles[pos].Codigo_Inmueble+'" class="btn btn-light btn-lg btn-block text-left">Ver más'+
                '<i class="fas fa-arrow-right float-right mt-1"></i></a>'+
                '</div>'+
                '</div>'+
                '</div>';
        }
        return contenedor_inmueble;
    }

var propiedades_similares= function(inmuebles){
        for(var pos=0; pos < inmuebles.length; pos++){
                //Validar si trae imagenes
                validarImagenInmueble(inmuebles[pos]);
                propiedad_similar+=
                '<div class="card mb-4">'+
                '<div class=contenedor-img>'+
                '<a href="detalle-inmueble.php?co='+inmuebles[pos].Codigo_Inmueble+'">'+
                '<img src="'+inmuebles[pos].foto1+'" class="card-img-top" alt="...">'+
                '</a>'+
                '<div class="description-inmueble">'+
                '<div class="leo-extra">'+
                '<label class="control-label leo-sqft">'+
                '<span class="label-tooltip">Codigo: '+inmuebles[pos].Codigo_Inmueble+'</span>'+
                '</label>'+
                '<label class="control-label leo-bedrooms">'+
                '<span class="label-tooltip"><i class="fas fa-bed"></i> '+inmuebles[pos].Alcobas+'</span>'+
                '</label>'+
                '<label class="control-label leo-bathrooms">'+
                '<span class="label-tooltip"><i class="fas fa-bath"></i> '+inmuebles[pos].banios+'</span>'+                
                '</label>'+
                '</div>'+
                '<ul class="product-flags">'+
                '<li class="product-flag rent">'+inmuebles[pos].Gestion+'</li>'+
                '</ul>'+
                '</div>'+
                '</div>'+
                '<div class="card-body">'+
                '<h5 class="card-tittle">'+inmuebles[pos].Tipo_Inmueble+'</h5>'+
                '<h6 class="card-subtitle">'+inmuebles[pos].Barrio+', '+inmuebles[pos].Zona+'</h6>'+
                '<p class="card-text">'+inmuebles[pos].Ciudad+', '+inmuebles[pos].Departamento+'</p>'+
                '<p class="card-text">'+inmuebles[pos].valorFiltro+'</p>'+
                '<a href="detalle-inmueble.php?co='+inmuebles[pos].Codigo_Inmueble+'" class="btn btn-danger btn-lg btn-block text-left">Ver más'+
                '<i class="fas fa-arrow-right float-right mt-1"></i></a>'+
                '</div>'+
                '</div>';
        }
        return propiedad_similar;
}
                

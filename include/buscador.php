<form action="">
    <div class="box-search">
        <div class="row">
            <div class="form-group linea col-md-3">
                <label for="">Tipo de Gestión</label>
                <div class="form-group input-group">
                    <select class="form-control box-text" id="tipo_gestion_buscar">
                        <option selected disabled value="0">Tipo de Gestión</option>
                    </select>
                </div>
            </div>
            <div class="form-group linea col-md-3">
                <label for="">Tipo de Inmueble</label>
                <div class="form-group input-group">
                    <select class="form-control box-text" id="tipo_inmueble_buscar">
                        <option selected disabled value="0">Tipo de Inmueble</option>
                    </select>
                </div>
            </div>
            <div class="form-group linea col-md-2">
                <label for="">Ciudad</label>
                <div class="form-group input-group">
                    <select class="form-control box-text" id="ciudad_buscar">
                        <option selected disabled value="null">Ciudad</option>
                    </select>
                </div>
            </div>
            <div class="form-group linea col-md-2">
                <label for="">Barrio</label>
                <div class="form-group input-group">
                    <select class="form-control box-text" id="barrio_buscar">
                        <option selected disabled value="0">Barrio</option>
                    </select>
                </div>
            </div>
            <div class="form-group col-md-2">
                <br>
                <button type="button" class="btn btn-danger btn-md btn-block" id="buscar">Buscar</button>
            </div>
            <div class="form-group col-md-10"></div>
        </div>
    </div>
    <div class="row d-block">
        <div class="collapse" id="collapseExample">
            <div class="card card-body opciones-avanzadas">
                <div class="container borde">
                    <div class="row">
                        <div class="form-group col-12 col-md-6">
                            <label for="">Codigo</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text indicador">940 -</div>
                                </div>
                                <input type="number" class="form-control box-text" id="codigo_buscar" placeholder="Codigo">
                            </div>
                        </div>
                        <div class="form-group col-12 col-md-6 row">
                            <div class="form-group col-12 col-md-6">
                                <label for="">Precio Mínimo:</label>
                                <input type="number" class="form-control box-text" placeholder="Precio Mínimo"  id="precio_minimo_buscar" >
                            </div>
                            <div class="form-group col-12 col-md-6">
                                <label for="">Precio Máximo:</label>
                                <input type="number"  class ="form-control box-text" placeholder="Precio Mximo" id="precio_maximo_buscar" >
                            </div>  
                        </div>
                        <div class="form-group linea col-md-3">
                            <label for="">Baños</label>
                            <input type="number" class="form-control box-text" id="banos_buscar" placeholder="Baños">
                        </div>
                        <div class="form-group linea col-md-3">
                            <label for="">Alcobas</label>
                            <input type="number" class="form-control box-text" id="alcobas_buscar" placeholder="Alcobas">
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label for="">Area</label>
                            <div id="slider-range2"></div>
                            <div class="slider-labels d-flex">
                                <div class="caption">
                                    <strong>Min:</strong>
                                    <span id="slider-range-area"></span>
                                    mts<sup>2</sup>
                                </div>
                                <div class="caption ml-auto">
                                    <strong>Max:</strong>
                                    <span id="slider-range-area1"></span> 
                                    mts<sup>2</sup>
                                </div>
                            </div>
                            <input type="hidden"  id="area_min_buscar" value="">
                            <input type="hidden"  id="area_max_buscar" value="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="busqueda-avanzada" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            Busqueda Avanzada
        </a>
    </div>
</form>
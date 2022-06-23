<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Agregar Docente</title>

</head>

<body class="bg-gray">
    <div class="h-100 d-flex align-items-center justify-content-center">



        <form method="POST" action="{{ url('/agregar_docente') }}">
            @csrf
            <h2 class="font-weight-light">------Registre un nuevo docente------</h2>
            <a class="btn btn-primary m-2" data-toggle="collapse" href="/docentes_a_jubilar" role="button" aria-expanded="false" aria-controls="collapseExample">
                Ver docentes Proximos a Jubilarse
            </a>
            <a class="btn btn-primary m-2" data-toggle="collapse" href="/docentes" role="button" aria-expanded="false" aria-controls="collapseExample">
                Ver todos los docentes
            </a>

            <div class="form-group">
                <label for="full_name_id" class="control-label">Nombres</label>
                <input type="text" class="form-control" id="nombres" name="nombres" placeholder="{{ __('nombres') }}">
            </div>

            <div class="form-group">
                <label for="street1_id" class="control-label">Apellidos</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="{{ __('apellidos') }}">
            </div>

            <div class="form-group">
                <label for="street2_id" class="control-label">Genero</label>
                <select class="form-control" name="genero" id="genero">
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                </select>
            </div>

            <div class="form-group">
                <label for="street2_id" class="control-label">Estado Civil</label>
                <select class="form-control" name="estado_civil" id="estado_civil">
                    <option value="Soltero/a">Soltero/a</option>
                    <option value="Casado/a">Casado/a</option>
                    <option value="Divorciado/a">Divorciado/a</option>
                    <option value="Viudo/a">Viudo/a</option>
                </select>
            </div>

            <div class="form-group">
                <label for="street2_id" class="control-label">Fecha Nacimiento</label>
                <input class="form-control" type="date" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="{{ __('fecha_nacimiento') }}">
            </div>

            <div class="form-group">
                <label for="street2_id" class="control-label">Edad</label>
                <input type="number" class="form-control" id="edad" name="edad" placeholder="{{ __('edad') }}">
            </div>

            <div class="form-group">
                <label for="city_id" class="control-label">DUI</label>
                <input type="text" class="form-control" id="dui" name="dui" placeholder="{{ __('dui') }}">
            </div>

            <div class="form-group">
                <label for="city_id" class="control-label">NIT</label>
                <input type="text" class="form-control" id="nit" name="nit" placeholder="{{ __('nit') }}">
            </div>

            <div class="form-group">
                <label for="city_id" class="control-label">Carnet AFP</label>
                <input type="text" class="form-control" id="carnet_afp" name="carnet_afp" placeholder="{{ __('carnet_afp') }}">
            </div>

            <div class="form-group">
                <label for="city_id" class="control-label">Carnet Seguro</label>
                <input type="text" class="form-control" id="carnet_seguro" name="carnet_seguro" placeholder="{{ __('carnet_seguro') }}">
            </div>

            <div class="form-group">
                <label for="state_id" class="control-label">Profesion</label>
                <select class="form-control" name="id_profesion" id="id_profesion">
                    <option value="">Seleccione una profesion</option>
                    @foreach($profesiones as $pr)
                    <option value="{{ $pr['id_profesion'] }}">{{ $pr['nombre_profesion'] }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="zip_id" class="control-label">Correo</label>
                <input type="text" class="form-control" id="correo" name="correo" placeholder="{{ __('correo') }}">
            </div>

            <div class="form-group">
                <label for="zip_id" class="control-label">Nacionalidad</label>
                <input type="text" class="form-control" id="nacionalidad" name="nacionalidad" placeholder="{{ __('nacionalidad') }}">
            </div>

            <div class="form-group">
                <label for="zip_id" class="control-label">Fecha Ingreso</label>
                <input class="form-control" type="date" id="fecha_ingreso" name="fecha_ingreso" placeholder="{{ __('fecha_ingreso') }}">
            </div>

            <div class="form-group">
                <label for="zip_id" class="control-label">Años de servicio</label>
                <input type="number" class="form-control" id="anios_servicio" name="anios_servicio" placeholder="{{ __('anios_servicio') }}">
            </div>

            <div class="form-group">
                <label for="zip_id" class="control-label">Tipo de Contrato</label>
                <select class="form-control" name="tipo_contrato" id="tipo_contrato">
                    <option value="Plaza_fija">Plaza Fija</option>
                    <option value="Por_contrato">Por Contrato</option>
                    <option value="Horas_clase">Horas Clase</option>
                    <option value="Eventual">Eventual</option>
                </select>
            </div>

            <div class="form-group">
                <label for="zip_id" class="control-label">Salario</label>
                <input type="number" step="any" class="form-control" id="salario" name="salario" placeholder="{{ __('salario') }}">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Enviar!</button>
            </div>

        </form>

    </div>
</body>

</html>
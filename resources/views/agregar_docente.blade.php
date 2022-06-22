<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Majestic Admin</title>

</head>

<body>
    <h4>Docente</h4>
    <h6 class="font-weight-light">Registre un nuevo docente</h6>
    <form role="form" method="POST" action="{{ url('/agregar_docente') }}">
        <input type="text" id="nombres" name="nombres" placeholder="{{ __('nombres') }}">
        <input type="text" id="apellidos" name="apellidos" placeholder="{{ __('apellidos') }}">
        <input type="text" id="genero" name="genero" placeholder="{{ __('genero') }}">
        <input type="text" id="estado_civil" name="estado_civil" placeholder="{{ __('estado_civil') }}">
        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="{{ __('fecha_nacimiento') }}">
        <input type="text" id="edad" name="edad" placeholder="{{ __('edad') }}">
        <input type="text" id="dui" name="dui" placeholder="{{ __('dui') }}">
        <input type="text" id="nit" name="nit" placeholder="{{ __('nit') }}">
        <input type="text" id="carnet_afp" name="carnet_afp" placeholder="{{ __('carnet_afp') }}">
        <input type="text" id="carnet_seguro" name="carnet_seguro" placeholder="{{ __('carnet_seguro') }}">
        <select name="id_profesion" id="id_profesion">
            <option value="">Seleccione una profesion</option>
            @foreach($profesiones as $pr)
            <option value="{{ $pr['id_profesion'] }}">{{ $pr['nombre_profesion'] }}</option>
            @endforeach
        </select>
        <input type="text" id="correo" name="correo" placeholder="{{ __('correo') }}">
        <input type="text" id="nacionalidad" name="nacionalidad" placeholder="{{ __('nacionalidad') }}">
        <input type="date" id="fecha_ingreso" name="fecha_ingreso" placeholder="{{ __('fecha_ingreso') }}">
        <input type="text" id="anios_servicio" name="anios_servicio" placeholder="{{ __('anios_servicio') }}">
        <input type="text" id="tipo_contrato" name="tipo_contrato" placeholder="{{ __('tipo_contrato') }}">
        <input type="text" id="salario" name="salario" placeholder="{{ __('salario') }}">
        @csrf
        <div class="mt-3">
            <button type="submit">SAVE</button>
        </div>
    </form>
</body>

</html>
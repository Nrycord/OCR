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
    <h6 class="font-weight-light">Please add the important data.</h6>
    <form role="form" method="POST" action="{{ url('/agregar_docente') }}">
        <input type="text" id="barcode" name="barcode" placeholder="{{ __('Bar Code') }}">
        <input type="text" id="description" name="description" placeholder="{{ __('Description') }}">
        <input type="text" id="category" name="category" placeholder="{{ __('Category') }}">
        <input type="text" id="measure" name="measure" placeholder="{{ __('Measure') }}">
        <input type="text" id="stock" name="stock" placeholder="{{ __('Starting Stock') }}">
        @csrf
        <div class="mt-3">
            <button type="submit">SAVE</button>
        </div>
    </form>

</body>

</html>
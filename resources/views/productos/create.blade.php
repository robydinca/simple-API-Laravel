@extends ('layouts.plantilla')



@section('content')
    <h1>Crear Nuevo Producto</h1>
    <form action="{{ route('producto.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="clase">Clase:</label>
            <select name="clase" id="clase" class="form-control" required>
                <option value="tornillería">Tornillería</option>
                <option value="herramientas">Herramientas</option>
                <option value="cocina">Cocina</option>
                <option value="otros">Otros</option>
            </select>
        </div>
        <div class="form-group">
            <label for="proveedor">Proveedor:</label>
            <input type="text" name="proveedor" id="proveedor" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="precio">Precio:</label>
            <input type="number" name="precio" id="precio" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar Producto</button>
    </form>
@endsection
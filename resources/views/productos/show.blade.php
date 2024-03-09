@extends ('layouts.plantilla')


@section('content')
    <h1>Detalles del Producto</h1>
    <p><strong>Nombre:</strong> {{ $producto->nombre }}</p>
    <p><strong>Clase:</strong> {{ $producto->clase }}</p>
    <p><strong>Proveedor:</strong> {{ $producto->proveedor }}</p>
    <p><strong>Precio:</strong> {{ $producto->precio }}</p>
      <form action="{{ route('producto.destroy', $producto->id) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este producto?')">Eliminar</button>
    </form>
@endsection

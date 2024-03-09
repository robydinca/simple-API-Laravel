@extends ('layouts.plantilla')

@section('title', 'Cursos')

@section('content')
  <h1>pagina de productos</h1>

  @foreach ($productos as $producto)
                <tr>
                    <td>{{ $producto->id }}</td><br>
                    <td>{{ $producto->nombre }}</td><br>
                    <td>{{ $producto->clase }}</td><br>
                    <td>{{ $producto->proveedor }}</td>
                    <td>{{ $producto->precio }}</td>
                    <td>
                        <a href="{{ route('producto.show', $producto->id) }}" class="btn btn-info">Detalles</a>
                    </td>
@endforeach
@endsection


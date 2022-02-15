@extends('layouts.default')
@section('content')
    <table class="table table-hover">
        <tr class="table-primary">
            <th colspan=3><br>
                <h2>La tiendecita</h2>
            </th>
            <th><a class="btn btn-primary" href="cesta">CESTA<br>{{ $_SESSION['cantidad'] }}Prod</th>
        </tr>
        <tr>
            <th scope="col">Producto</th>
            <th scope="col">Precio</th>
            <th scope="col">Imagen</th>
            <th scope="col"></th>
        </tr>

        @foreach ($products as $product)

            <tr>
                <td scope="row">{{$product->name}}</td>
                <td>{{ $product->price}}</td>
                <td><a href="detalle/{{$product->id}}"><img style="width:100px" src="{{ $product->image }}" /></td>
                <td>

                    <a class="btn btn-success" href="meteCarro/{{$product->id}}">Comprar</a>

                </td>
            </tr>
        @endforeach
    </table>

    {{$products->links()}}
@endsection

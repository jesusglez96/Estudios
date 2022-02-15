@extends("layouts.default")

@section("content")
    <table class="table table-hover">
        <tr class="table-primary">
            <th colspan="4"><h3>PRODUCTOS EN TU CESTA</h3></th>
        </tr>
    @foreach ($products as $product)
     <?php
        $cantidad = $_SESSION["enCesta"][$product->id];
        if ($cantidad > 0) {
        ?>
            <tr>
                <td scope="row">{{$product->name}}</td>
                <td>{{$cantidad}}</td>
                <td>
                    <img style="width:100px" src="./{{$product->image}}"/>
                    <br>
                    {{$product->price}} euros
                </td>
                <td>
                    <a class="btn btn-danger" href="./quitaCarro/{{$product->id}}">Eliminar</a>
                </td>
            </tr>
        <?php
            }
         ?>

    @endforeach
    <tr>
        <td scope="row">Total</td>
        <td>{{$_SESSION['cantidad']}}</td>
        <td>{{$_SESSION['total']}}</td>
        <td><a class="btn btn-warning" href="./">Cerrar</a></td>
    </tr>
</table>


@endsection

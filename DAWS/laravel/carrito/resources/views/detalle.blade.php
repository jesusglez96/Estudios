@extends("layouts.default")

@section("content")


    <div class="row justify-content-center" style="margin:10px">

        <div class="col-auto card" style="width: 18rem;">
        <img class="card-img-top" src="../{{$product->image}}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">{{$product->name}}</h5>
            <p class="card-text"><strong>Descripcion: </strong>{{$product->description}}</p>
            <p class="card-text"><strong>Precio: </strong>{{$product->price}}</p>
            <p class="card-text"><strong>Stock: </strong>{{$product->stock}}</p>
            <a class="btn btn-success" href="../meteCarro/{{$product->id}}">Comprar</a>
            </div>
        </div>
    </div>
<a class="btn btn-warning" href="../">VOLVER</a>

@endsection

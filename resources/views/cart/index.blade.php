@extends('app')
@section('content')
    <div class="d-flex row gap-6 justify-content-center">
        @foreach ($carts as $cart)
        <div class="col-3 mt-2 mb-1">
            <div class="card text-bg-light mb-3 mt-3" style="max-width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $cart->product->name }} </h5><br>
                    <p class="card-text text-muted my-1"> Jumlah Produk : {{$cart->qty}}</p>
                    <button type="button" class="btn btn-outline-primary">+</button>
                    <button type="button" class="btn btn-outline-danger">-</button>
                </div>
        </div>
    </div>
    @endforeach

  </div>
@endsection



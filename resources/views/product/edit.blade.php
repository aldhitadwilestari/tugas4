@extends('app')

@section('title', 'Edit')

@section('content')
    <form action="/product/{{ $product->id }}" method="POST">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Produk</label>
            <input type="text" class="form-control @error ('product_name') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="product_name" value="{{$product->name}}">
            <div id="emailHelp" class="form-text">Produk tidak boleh lebih dari 255</div>
            @error('product_name')
            <div class="invalid-feedback">
                Nama produk tidak boleh kosong
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Harga</label>
            <input type="text" class="form-control @error ('price_product') is-invalid @enderror" id="exampleInputPassword1" name="price_product" value="{{$product->price}}">
            @error('product_name')
            <div class="invalid-feedback">
                Harga tidak boleh kosong
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Deskripsi</label>
            <input type="text" class="form-control @error ('product_descripstion') is-invalid @enderror" id="exampleInputPassword1" name="product_descripstion" value="{{$product->description}}">
            @error('product_name')
            <div class="invalid-feedback">
                Deskripsi tidak boleh kosong
            </div>
            @enderror
        </div>
        <label for="exampleInputEmail1" class="form-label">Kategori</label>
        <select class="form-select @error ('category_id') is-invalid @enderror" aria-label="Default select example" name="category_id" value="{{$product->name}}">
            <option selected>Pilih Kategori Produk</option>
            @foreach ($categories as $category)
                                                {{-- ternary --}}
            <option value="{{ $category->id }}" {{$product->category_id == $category->id ? 'selected': ''}}>
                {{$category->name}}
            </option>
            @endforeach
          </select>
          @error('product_name')
            <div class="invalid-feedback">
                Pilih salah satu kategori
            </div>
            @enderror
        <button type="submit" class="btn btn-warning mt-3">Edit</button>
    </form>
@endsection

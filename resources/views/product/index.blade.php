@extends('app')

@section('title', 'Index')

@section('content')
<div class="d-flex ">
    <a href="{{ url('product.add')}}" class="btn btn-primary mt-3" type="button">+ Tambah Produk</a>
 </div>

      <table class="table table-hover text-light">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Harga</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Kategori</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($products as $item)
          <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->name}}</td>
            <td>{{$item->price}}</td>
            <td>{{$item->description}}</td>
            <td>{{$item->category->name}}</td>
            <td>
                <a href="{{url('product/'. $item->id)}}" class="btn btn-info">Read</a>
                <a href="/product/{{$item->id}}/edit" class="btn btn-warning">Edit</a>
                <a href="/product/{{$item->id}}/delete" class="btn btn-danger">Hapus</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

@endsection

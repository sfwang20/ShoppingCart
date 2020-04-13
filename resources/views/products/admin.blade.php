@extends('layouts.app')

@section('page-title')
<section class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="text-uppercase">Shop Admin</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="/orders/admin">Order Admin Panel</a>
                    </li>
                    <li class="breadcrumb-item active">Shop Admin Panel</li>
                </ol>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<div class="page-content">
  <div class="toolbox">
    <a href="/products/create" class="btn btn-primary">create product</a>
  </div>
  <ul class="list-group">
    @foreach ($products as $key => $product)
      <li class="list-group-item clearfix">
        <div class="float-left">
          <div class="title">{{ $product->name }}</div>
        </div>
        <span class="float-right">
          <a href="/products/show/{{ $product->id }}" class="btn btn-secondary">View</a>
          <a href="/products/{{ $product->id}}/edit" class="btn btn-primary">Edit</a>
          <button class="btn btn-danger" onclick="deleteProduct({{ $product->id }})">Delete</button>
        </span>
      </li>
    @endforeach
  </ul>
  </div>
</div>

@endsection

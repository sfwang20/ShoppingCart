@extends('layouts.app')

@section('page-title')
<section class="page-title">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h4 class="text-uppercase">Shop Single</h4>
        <ol class="breadcrumb">
          <li><a href="/">Home</a>
          </li>
          <li class="active"><a href="/products/admin">Shop Admin Panel</a>
          </li>
          <li class="active">Shop Single</li>
        </ol>
      </div>
    </div>
  </div>
</section>
@endsection

@section('content')
<div class="page-content">
  <div class="container">
    <h1>{{ $product->name }}</h1>
    <h2>US$ {{ $product->price }}</h2>
    <h3>{{ $product->size }} X {{ $product->stock}}</h3>
    <div class="toolbox">
      <a href="/products/{{ $product->id }}/edit" class="btn btn-primary">Edit</a>
      <button class="btn btn-danger" onclick="deleteProduct({{ $product->id }})">Delete</button>
    </div>
    <img width="640" src="{{ $product->image }}" alt="thumbnail">
    <div class="content">
      {{ $product->description }}
    </div>
  </div>
</div>
@endsection

@extends('layouts.app')

@section('page-title')
<section class="page-title">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h4 class="text-uppercase">Shop Single</h4>
        <ol class="breadcrumb">
          <li><a href="/">Home/</a>
          </li>
          <li class="active"><a href="/products/admin">Shop Admin Panel/</a>
          </li>
          <li class="active">Edit</li>
        </ol>
      </div>
    </div>
  </div>
</section>
@endsection

@section('content')
<div class="page-content">
  <div class="container">

    <form method="post" action="/products/{{ $product->id }}" enctype="multipart/form-data">
      @csrf
      <input type="hidden" name="_method" value="put">
      <div class="form-group row">
        <label for="name" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Origin Price</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="price_origin" name="price_origin" value="{{ $product->price_origin }}">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Price</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="price" name="price" value="{{ $product->price }}">
        </div>
      </div>
      <fieldset class="form-group">
        <div class="row">
          <legend class="col-form-label col-sm-2 pt-0">Size</legend>
          <div class="col-sm-10">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="size" id="size1" value="S" checked>
              <label class="form-check-label" for="size1">
                S
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="size" id="size2" value="M">
              <label class="form-check-label" for="size2">
                M
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="size" id="size3" value="L">
              <label class="form-check-label" for="size3">
                L
              </label>
            </div>
          </div>
        </div>
      </fieldset>
      <div class="form-group row">
        <label for="stock" class="col-sm-2 col-form-label">Stock</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="stock" name="stock" value="{{ $product->stock }}">
        </div>
      </div>
      <div class="form-group row">
        <label for="image" class="col-sm-2 col-form-label">Image</label>
        <div class="col-sm-10">
          <input type="file" class="form-control" id="image" name="image" value="{{ $product->image }}">
        </div>
      </div>
      <div class="form-group row">
        <label for="image" class="col-sm-2 col-form-label">Image alt</label>
        <div class="col-sm-10">
          <input type="file" class="form-control" id="image_alt" name="image_alt" value="{{ $product->image_alt }}">
        </div>
      </div>
      <div class="form-group row">
        <label for="description" class="col-sm-2 col-form-label">Description</label>
        <div class="col-sm-10">
          <textarea class="form-control" name="description" rows="8" cols="80">{{ $product->description }}
          </textarea>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="button" class="btn btn-default" onclick="window.history.back()">Cancel</button>
        </div>

      </div>
    </form>

  </div>
</div>
@endsection

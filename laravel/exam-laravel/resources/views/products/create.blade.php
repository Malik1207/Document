@extends('products.layout')

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

     <div class="my-3">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong style="color: black">Name:</strong>
                <input type="text" name="name" class="form-control my-1" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong style="color: black">Category:</strong>
                {{--  <input type="text" name="category" class="form-control my-1" placeholder="Category">  --}}
                <select class="form-select my-1" aria-label="Default select example" name="category" value="{{ old('category')}}" >
                    <option>Mesin Makanan</option>
                    <option>Mesin Minuman</option>
                    <option>Mesin Industri</option>
                    <option>Mesin Limbah</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong style="color: black">Type:</strong>
                {{--  <input type="text" name="type" class="form-control my-1" placeholder="Type">  --}}
                <select class="form-select my-1" aria-label="Default select example" name="type" value="{{ old('type')}}" >
                    <option>A0001</option>
                    <option>A0002</option>
                    <option>A0003</option>
                    <option>A0004</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong style="color: black">Price:</strong>
                <input type="number" name="price" class="form-control my-1" placeholder="Price">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong style="color: black">Detail:</strong>
                <textarea class="form-control my-1" style="height:150px" name="detail" placeholder="Detail"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong style="color: black">Image:</strong>
                <input type="file" name="image" class="form-control my-1" placeholder="image">
            </div>
        </div>
        <div class="mx-3">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a class="btn btn-success" href="{{ route('products.index') }}"> Back</a>
        </div>
        {{--  <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>  --}}
    </div>

</form>
@endsection

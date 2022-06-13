@extends('articles.layout')

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

    <form action="{{ route('articles.update',$article->id) }}" method="POST" enctype="multipart/form-data" class="my-3">
        @csrf
        @method('PUT')

        <div class="my-3">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong style="color: black">Title:</strong>
                    <input type="text" name="title" value="{{ $article->title }}" class="form-control my-1" placeholder="Title">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong style="color: black">Content:</strong>
                    <textarea class="form-control my-1" style="height:150px" name="content" placeholder="Content">{{ $article->content }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong style="color: black">Article Image:</strong>
                    <input type="file" name="article_image" class="form-control my-4" placeholder="Article Image" >
                    <img src="/article_image/{{ $article->article_image }}" width="120px">
                </div>
            </div>
            <div class="pull-left mx-3 mb-5">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-success" href="{{ route('articles.index') }}">Back</a>
            </div>
        </div>

    </form>
@endsection

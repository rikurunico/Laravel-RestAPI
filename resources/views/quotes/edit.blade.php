@extends('quotes.Layout.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edit Quotes</h1>
                <form action="{{ route('tulisan.update', $tulisan->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-3">
                        <label for="quote">Quote</label>
                        <textarea name="quote" id="quote" cols="30" rows="10" class="form-control">{{ $tulisan->quote }}</textarea>
                        @error('quote')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="author">Author</label>
                        <input type="text" name="author" id="author" class="form-control" value="{{ $tulisan->author }}">
                        @error('author')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('tulisan.index') }}" class="btn btn-danger">Kembali</a>
                </form>
            </div>
        </div>
    </div>
@endsection
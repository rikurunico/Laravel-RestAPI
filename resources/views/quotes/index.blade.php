@extends('quotes.Layout.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Quotes</h1>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Quote</th>
                            <th>Author</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $quote)
                            <tr>
                                <td>{{ $quote->quote }}</td>
                                <td>{{ $quote->author }}</td>
                                <td>
                                    <a href="{{ route('tulisan.show', $quote->id) }}" class="btn btn-primary">View</a>
                                    <a href="{{ route('tulisan.edit', $quote->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('tulisan.destroy', $quote->id) }}" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="{{ route('tulisan.create') }}" class="btn btn-success mb-4">Create</a>
            </div>
        </div>
    </div>
@endsection
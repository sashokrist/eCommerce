@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

                <div class="col-md-8">
                    <h1>Product page</h1>
                    <table>
                        <tr>
                            <th>name</th>
                            <th>description</th>
                            <th>price</th>
                            <th>image</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        @foreach($products as $product)
                            <tr>
                                <td> {{ $product->name }}</td>
                                <td> {{ $product->description }}</td>
                                <td> {{ $product->price }}</td>
                                <td><img src="{{ $product->image }}" width="100px" height="100px" alt=""> </td>
                                <td>
                                    <a href="{{ route('products.edit', ['id' => $product->id]) }}" class="btn btn-primary">Edit</a>
                                </td>
                                <td>
                                    <form action="{{ route('products.destroy', ['id' => $product->id]) }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>

                </div>

        </div>
    </div>
    @endsection

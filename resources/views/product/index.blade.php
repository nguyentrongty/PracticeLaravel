@extends('layouts.app')
@section('content')
    <br>
    @if(isset($products))
    @foreach($products as $product)
        <form action="edit/{{$product->id}}" method="post" enctype="multipart/form-data">
            <tr>
                id: <td>{{ $product->id }}</td><br>
                Name: <td>{{ $product->name }}</td><br>
                Description: <td>{{ $product->description }}</td><br>
                Price: <td>{{ $product->price }}</td><br>
                <a href="{{ route('edit') }}"><input type="submit" value="edit"></a><br>
                <a href=""><button> delte</button></a><br>
                <br>
            </tr>
        </form>
    @endforeach
    @endif
@endsection

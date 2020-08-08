@extends('layouts.app')
@section('content')
    <h2>Mời bạn nhập thông tin</h2>
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        Name:        <input type="text" name="name"><br>
        Description: <input type="text" name="description"><br>
        Price:       <input type="number" name="price"><br>
        <input type="submit" value="submit"> <a href="{{ route('home') }}">back</a>
    </form>
@endsection

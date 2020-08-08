@extends('layouts.app')
@section('content')
    <p>hello</p>
    <a href="{{ route('home') }}"><input type="submit" value="back"></a>
{{--    @if(isset($products))--}}
{{--    <h2>Mời bạn nhập thông tin cần cập nhật</h2>--}}
{{--    <form action="" method="post" enctype="multipart/form-data">--}}
{{--        @csrf--}}
{{--        Name:        <input type="text" name="name"><br>--}}
{{--        Description: <input type="text" name="description"><br>--}}
{{--        Price:       <input type="number" name="price"><br>--}}
{{--        <input type="submit" value="submit"> <a href="{{ route('home') }}">back</a>--}}
{{--    </form>--}}
{{--    @endif--}}
@endsection

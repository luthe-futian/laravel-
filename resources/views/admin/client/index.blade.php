@extends('layouts.'.skin())
@section('title','客户端列表')
@section('content')
    <div id="index">
        <passport-clients></passport-clients>
    </div>
@endsection
@section('script')
    <script>
        new Vue({
            el:'#index'
        })
    </script>
@endsection
@extends('bloglayouts.master')

@section('content')

<div class="col-sm-8 blog-main">

@foreach($posts as $post)

@include('blogpost.post')
@endforeach

</div>


@endsection

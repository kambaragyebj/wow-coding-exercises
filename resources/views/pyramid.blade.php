
@extends('layout')
@section('content')

<div class="panel panel-default">
    <div class="panel-body"><h3> Pyramid </h3></div>
</div>
{{-- Please enter update the numbers of rows in the function.   --}}
{{-- {{ \App\Exercises\Pyramid::printPyramid(int $rows) }} --}}
{{ \App\Exercises\Pyramid::printPyramid(3) }}

@stop
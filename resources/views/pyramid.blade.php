
@extends('layout')
@section('content')

<div class="panel panel-default">
    <div class="panel-body"><h3> Pyramid </h3></div>
</div>
{{-- Please enter update the numbers of rows in the function.   --}}
{{-- {{ \App\Exercises\Pyramid::printPyramid(int $rows) }} --}}
<pre>{{  \App\Exercises\Pyramid::printPyramidWithBorderLine(3) }} </pre>

@stop

@extends('layout')
@section('content')

<div class="panel panel-default">
    <div class="panel-body">  <button type="button" class="btn btn-success">{{ $numbersOfVowels }} number of vowels : in {{ $string }}</button></div>
</div>

{{-- {{ \App\Exercises\Vowels::count('Hello!') }} --}}

@stop
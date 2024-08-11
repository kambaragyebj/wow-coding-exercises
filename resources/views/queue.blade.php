@extends('layout')
@section('content')

<div class="panel panel-default">
    <div class="panel-body"><h3> Create a queue </h3></div>
</div>
<table class="table table-striped table-hover">
    <thead class="thead-dark">
      <tr>
        <th scope="col">$queue1->peek()</th>
        <th scope="col">$queue1->remove()</th>
        <th scope="col">Queue::zip(queue1, queue2)</th>
      </tr>
    </thead>
    <tbody>
          <tr>
            <td>{{$queues['peek']}}</td>
            <td>{{$queues['remove'] }}</td>
            <td> @dump($queues['zip'])</td>
          </tr>
    </tbody>
</table>
@stop
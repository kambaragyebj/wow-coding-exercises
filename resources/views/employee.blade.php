@extends('layout')
@section('content')

<div class="panel panel-default">
    <div class="panel-body"><h3> Print out Employee Data</h3></div>
</div>
 <pre>
  <code>
  '[
       {
           "name": "Eryn Bryan",
           "age": "23",
           "company": "Fishnix"
       },
       {
           "name": "Hasnain O\'Ryan",
           "age": "32",
           "company": "Floataris"
       },
       {
           "name": "Briony Mathews",
           "age": "40",
           "company": "Swishterix"
       }
   ]';
   </code>
</pre>

@if(empty($employees))
   Please check the logs for error !
@else 
  <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Name</th>
          <th scope="col">Age</th>
          <th scope="col">Company</th>
        </tr>
      </thead>
      <tbody>
  @foreach($employees as  $employee)
            <tr>
              <td>{{ $employee['name'] }}</td>
              <td>{{ $employee['age'] }}</td>
              <td>{{ $employee['company'] }}</td>
            </tr>
  @endforeach
  </tbody>
  </table>
@endif

@stop
@extends('layouts.app')

@section('content')
<center>
<h2>LIST OF APPLICATION FORMS </h2> 
</center>
<br>
<table class="table" style='width:100%'>
  <thead class="column">
    <tr>
      <th >S.No.</th>
      <th >Application No</th>
      <th >Application Date</th>
      <th >Period</th>
    </tr>
  </thead>
  <tbody >

  @foreach($application_forms as $application_form)
 
    <tr >
     <td>{{$loop->index+1}}</td>
      <td><a href="/info/{{$application_form->id}}"> {{$application_form->Application_No}}</a></td>
      <td>{{$application_form->Application_date}}</td>
      <td>1day</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
  
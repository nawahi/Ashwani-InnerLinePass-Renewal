@extends('layouts.app')
@section('content')
<form action="{{ url('/autofill') }}" method="get">
  @csrf
    <input type="search" name="autofill" placeholder="Search Applicant">
    <button type="submit" class="btn btn-primary">SearcH</button>
    </form>



   


<center>
<h2>LIST OF APPLICATION FORMS </h2> 
</center>
<br>
<table class="table" style='width:100%'>
  <thead class="column">
    <tr>
      <th >S.No.</th>
      <th >Application No</th>
      <th >Applicant_Name</th>
      <th >Application Date</th>
      <th >ACK</th>
      <th >certi</th>

    </tr>
  </thead>
  <tbody >

  @foreach($Applicant_Name as $item)
 
    <tr >
     <td>{{$loop->index+1}}</td>
      <td><a href="/info/{{$item->id}}"> {{$item->Application_No}}</a></td>
      <td>{{$item->Applicant_Name}}</td>
      <td>{{$item->Application_date}}</td>
     
    @if($item->Remarks_from_adc=="Accepted")
    <td> 
        <a href="ack/{{$item->id}}" > acknowledgement</a>
    </td>
    <td> 
        <a href="ceti/{{$item->id}}" > cetificate</a>
    </td>

    @endif
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
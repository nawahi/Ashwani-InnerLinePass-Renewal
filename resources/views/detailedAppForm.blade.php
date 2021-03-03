
@extends('layouts.ash')

<link rel="shortcut icon" href="img/mseg.ico" type="image/x-icon">
@section('content')
 
    <center>

           
    <div class="table">
        <div class="nav_form">
          <h2 class="navbar"><center>Application Form No. :{{$application_forms->Application_No}}</center></h2>
        </div>
        <table>
            <tr>
                <th>Application date : </th>
                <td>{{$application_forms->Application_date}}</td>
            </tr>
            <tr>
                <th>Applicant Name*: </th>

                <td>{{$application_forms->Applicant_Name}}</td>
            </tr>
            <tr>
                <th>EPIC / UID No.* :</th>
                <td>{{$application_forms->EPIC_UID_No}}</td>
            </tr>
            <tr>
                <th>Date of Birth* :</th>
                <td>{{$application_forms->DOB}}</td>
            </tr>
            <tr>
                <th>Gender* :</th>
                <td>{{$application_forms->gender}}</td>
            </tr>
            <tr>
                <th>Age* :</th>
                <td>{{$application_forms->Age}}</td>
            </tr>
            <tr>
                <th>Religion* :</th>
                <td>{{$application_forms->Religion}}</td>
            </tr>
            <tr>
                <th>Occupation* :</th>
                <td>{{$application_forms->Occupation}}</td>
            </tr>
            <tr>
                <th>Education* :</th>
                <td>{{$application_forms->Education}}</td>
            </tr>
            <tr>
                <th>Identification Mark :</th>
                <td>{{$application_forms->IdentificationMark}}</td>
            </tr>
            <tr>
                <th>Email :</th>
                <td>{{$application_forms->Email}}</td>
            </tr>
            <tr>
                <th>Contact No* :</th>
                <td>{{$application_forms->Contact_No}}</td>
            </tr>
            <tr>
                <th>Father’s Name* :</th>
                <td>{{$application_forms->Fathers_Name}}</td>
            </tr>
            <tr>
                <th>House no.* :</th>
                <td>{{$application_forms->Present_Address_Hno}}</td>
            </tr>
            <tr>
                <th>Sub locality 1* :</th>
                <td>{{$application_forms->Present_Address_Sub_locality1}}</td>
            </tr>
            <tr>
                <th>Sub locality 2 :</th>
                <td>{{$application_forms->Present_Address_Sub_locality2}}</td>
            </tr>
            <tr>
                <th>Location* :</th>
                <td>{{$application_forms->Present_Address_Location}}</td>
            </tr>
            <tr>
                <th>Sub District* :</th>
                <td>{{$application_forms->Present_Address_Sub_District}}</td>
            </tr>
            <tr>
                <th>District* :</th>
                <td>{{$application_forms->Present_Address_District}}</td>
            </tr>
            <tr>
                <th>State* :</th>
                <td>{{$application_forms->Present_Address_State}}</td>
            </tr>
            <tr>
                <th>Pin code* :</th>
                <td>{{$application_forms->Present_Address_pin_code}}</td>
            </tr>
            <tr>
                <th>Country* :</th>
                <td>{{$application_forms->Present_Address_Country}}</td>
            </tr>
            <tr>
                <th>Police Station* :</th>
                <td>{{$application_forms->Present_Address_Police_Station}}</td>
            </tr>
            <tr>
                <th>Post office* :</th>
                <td>{{$application_forms->Present_Address_Post_office}}</td>
            </tr>
            <tr>
                <th>House no.* :</th>
                <td>{{$application_forms->Permanent_Address_Hno}}</td>
            </tr>
            <tr>
                <th>Sub_locality1 :</th>
                <td>{{$application_forms->Permanent_Address_Sub_locality1}}</td>
            </tr>
            <tr>
                <th>Sub locality 2 :</th>
                <td>{{$application_forms->Permanent_Address_Sub_locality2}}</td>
            </tr>
            <tr>
                <th>Location* :</th>
                <td>{{$application_forms->Permanent_Address_Location}}</td>
            </tr>
            <tr>
                <th>Sub District* : </th>
                <td>{{$application_forms->Permanent_Address_Sub_District}}</td>
            </tr>
            <tr>
                <th>District* :</th>
                <td>{{$application_forms->Permanent_Address_District}}</td>
            </tr>
            <tr>
                <th>State* :</th>
                <td>{{$application_forms->Permanent_Address_State}}</td>
            </tr>
            <tr>
                <th>Pin code* : </th>
                <td>{{$application_forms->Permanent_Address_pin_code}}</td>
            </tr>
            <tr>
                <th>Country* :</th>
                <td>{{$application_forms->Permanent_Address_Country}}</td>
            </tr>
            <tr>
                <th>Police Station* :</th>
                <td>{{$application_forms->Permanent_Address_Police_Station}}</td>
            </tr>
            <tr>
                <th>Post office* :</th>
                <td>{{$application_forms->Permanent_Address_Post_office}}</td>
            </tr>
            <tr>
                <th>E/Roll Sl.No: </th>
                <td>{{$application_forms->E_Roll_SlNo}}</td>
            </tr>
            <tr>
                <th>Part No:</th>
                <td>{{$application_forms->Part_No}}</td>
            </tr>
            <tr>
                <th>Constituency: </th>
                <td>{{$application_forms->Constituency}}</td>
            </tr>
            <tr>
                <th>Sponsor Name :</th>
                <td>{{$application_forms->Sponsor_Name}}</td>
            </tr>
            <tr>
                <th>Father name of sponsor :</th>
                <td>{{$application_forms->Sponsors_Father_name}}</td>
            </tr>
            <tr>
                <th>EPIC/UID No. of Sponsor (copy enclosed):</th>
                <td>{{$application_forms->Sponsors_EPIC_UID_No}}</td>
            </tr>
            <tr>
                <th>>No. of Non Mizos Presently Sponsored: </th>
                <td>{{$application_forms->No_of_Non_Mizos_Presently_Sponsored}}</td>
            </tr>
            <tr>
                <th>Provisional Pass No.(Copy enclosed) :</th>
                <td>{{$application_forms->Provisional_Pass_No}}</td>
            </tr>
            <tr>
                <th>House no.* : </th>
                <td>{{$application_forms->sponsor_address_Hno}}</td>
            </tr>
            <tr>
                <th>Sub locality 1* : </th>
                <td>{{$application_forms->sponsor_address_Sub_locality1}}</td>
            </tr>
            <tr>
                <th>Sub locality 2 : </th>
                <td>{{$application_forms->sponsor_address_Sub_locality2}}</td>
            </tr>
            <tr>
                <th>Sub District* : </th>
                <td>{{$application_forms->sponsor_address_Sub_District}}</td>
            </tr>
            <tr>
                <th>District* :</th>
                <td>{{$application_forms->sponsor_address_District}}</td>
            </tr>
            <tr>
                <th>State* : </th>
                <td>{{$application_forms->sponsor_address_State}}</td>
            </tr>
            <tr>
                <th>Pin code* :</th>
                <td>{{$application_forms->sponsor_address_pin_code}}</td>
            </tr>

            <tr>
                <th>Police Station* :</th>
                <td>{{$application_forms->sponsor_address_Police_Station}}</td>
            </tr>
            <tr>
                <th>Post office* :</th>
                <td>{{$application_forms->sponsor_address_Post_office}}</td>
            </tr>
            <tr>
                <th>Purpose of stay : </th>
                <td>{{$application_forms->Purpose_of_stay}}</td>
            </tr>
            <tr>
                <th>Need for labour :</th>
                <td>{{$application_forms->Need_for_labour}}</td>
            </tr>
            <tr>
                <th>Regd.No. (in case of Workshop/Industries, etc.) :</th>
                <td>{{$application_forms->Regd_No}}</td>
            </tr>
            <tr>
                <th>L.S.C No. (in case of Construction works) :</th>
                <td>{{$application_forms->LSC_No}}</td>
            </tr>
            <tr>
                <th>Skilled/Semi-Skilled/Unskilled :</th>
                <td>{{$application_forms->Skilled_SemiSkilled_Unskilled}}</td>
            </tr>
            <tr>
                <th>Validity Period :</th>
                <td>{{$application_forms->Validaty_Period}}</td>
            </tr>
            <tr>
                <th>Remarks :</th>
                <td>{{$application_forms->Remark}}</td>
            </tr>
            <tr>
            <tr>
                <th>Reason_For_Extension:</th>
                <td>{{$application_forms->Reason_For_Extension}}</td>
            </tr>
            <tr>
                <th><h3>List of Scanned supporting Documents :</h3></th>
                <td></td>
            </tr>
            </tr>
            <tr>
                <th>EPIC/UID No. of Sponsor :</th>
                <td><a href="/storage/documents_1/{{$application_forms->doc1}}"  target="_blank"><button class="btn btn-info">Click here to view</button></a></td>
                <td><a href="/download1/{{$application_forms->id}}" ><button class="btn btn-warning">Download Here</button></td>
            </tr>
            <tr>
                <th>Provisional Pass No:</th>
                <td><a href="/storage/documents_2/{{$application_forms->doc2}}"  target="_blank"><button class="btn btn-info">Click here to view</button></td>
                <br>
                <td><a href="/download2/{{$application_forms->id}}" ><button class="btn btn-warning">Download Here</button></td>
            </tr>
        </table>    
        <!-- Due date for decision on Application :
            <br>
            <form action="/remarksByForwarder/{{$application_forms->id}}" method="post">
            @csrf
                <button type="submit" name="Accept"class="submit_btn">Accept</button>
                <button type="submit" name="Reject"class="submit_btn">Reject</button>
            </form> -->
    </div>
          
            <a href="/gettingback/{{$application_forms->id}}" class="btn btn-primary">Edit</a>
    </center>
    @endsection
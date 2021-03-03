<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="STYLE/ilp.css"> -->
    <title>Document1</title>
    <style>
.ILP-page{
    
    margin: 8px;
    padding: 10px;
    z-index: 999;
    background-repeat: no-repeat;
    background-size: 60rem;
    background-position:center;
    border:3px solid black;


}
.head_er{
    background-color: #fff;
    text-align: center;
    font-size: 20px;
}
.pagedetail{
    
    display: flex;
    flex-direction: column;
    font-display: space;
    font-size: 17px;

}
.Address_c{
    display: flex;

}
.sp{
    padding: 0 24px;
    width:50%;
}
.sign{
    text-align: right;

}
.copy{
    font-size:13px;
}
.row{
    display:flex;
}
.note{
    font-size:13px;
}

br{
    padding:5px;
}
.fieldset{
    border-radius: rounded;
}

    </style>
</head>
<body>


        <div class="ILP-page">
        <!-- <img class="img"src="{{public_path('photo/ashoka_pillar_logo.jpg')}}" width="140" height="140"> -->
        <div class="head_er">
            <div class="head-line-1">Form-B</div>
            <div class="head-line-2"><b> INNER LINE PASS</b></div>
            <div class="head-line-3">(See Sub paragraph(1)of Paragraph 3)</div>
            <div class="head-line-4"><i>(In Accordance with the provision of Bengali Eastern Frontier)</i></div>
            <hr>
            <br>
        </div>
        <!-- <div class="pagedetail"> -->
        <div><b>Pass No :</b><u>{{$status->Pass_No}}</u> 
        <b>Name of Pass holder : </b><u>{{$status->Applicant_Name}}</u>
        <br><b>Father's Name : </b><u>{{$status->Fathers_Name}}</u>
        <b>Age : </b><u>{{$status->Age}}</u>
        <br><b>  Identity mark of pass holder :</b><u>{{$status->IdentificationMark}}</u>
        <br><b>P.S : </b><u></u>
        <b>House No : </b><u>{{$status->Present_Address_Hno}}</u>
        <br><b>Dist : </b><u>{{$status->Present_Address_District}}</u>
        <b>P.O : </b><u>{{$status->Present_Address_Post_office}}</u>
        <br><b>E/Roll : </b><u>{{$status->E_Roll_SlNo}}</u>
        <b>Part No: </b><u>{{$status->Part_No}}</u>
        <br><b>Constituency: </b><u>{{$status->Constituency}}</u>
        <br><b>Name Of Sponsor :</b><u>{{$status->Sponsor_Name}}</u>
        <b>  Father's Name of Sponsor: </b><u>{{$status->Sponsors_Father_name}}</u>
        <!-- <div class="Address_c"><b>Address of Sponsor: </b> -->
        <br> 
        <div class="sp">
             <fieldset class='field set'>
             <legend> <b>Private Sponsor</b></legend>
             <b> House No.:</b><u>{{$status->sponsor_address_Hno}}</u>
             <br><b> P.O.:</b><u>{{$status->sponsor_address_Post_office}}</u>
             <br><b> Locatity:</b><u>{{$status->sponsor_address_Location}}</u>
             <br><b> District:</b><u>{{$status->sponsor_address_District}}</u>
             <br><b> Epic No:</b><u>{{$status->Sponsors_EPIC_UID_No}}</u>  
             </fieldset>
         </div> 
         <!-- <div class="sp">
             <fieldset><legend><b>Official Sponsor</b></legend>
             <br><b> Desig.:</b>
             <br><b> Addr.:</b>
             <br><b> Dept.: </b>
             <br><b> Dist.: </b>
             </fieldset>     
         </div> -->
            
            <br><b>  Purpose of Stay :</b><u>{{$status->Purpose_of_stay}}</u>
            <br><b>  Validity:</b><u>{{$status->Validaty_Period}}</u>
            <i><center> (This Pass is issued on conditions and restrictions as may be seen overleaf)</center></i>
            <b>  D.C. Order Dated :</b><u>{{$status->Officer_UpdatedAt}}</u>
            <b>  Memo No.: </b><u></u>
            <br><b>  Dated:</b><u>{{$status->Application_date}}</u>
            <b>  Signature of Pass Holder : </b><u></u>
            <div class="row"><div class="copy"><b>  Copy to: </b>
            <ol>
                <li>Shri/Smt.  SAKTHI</li>
                <li>Sponsor    FG</li>
                <li>President, V.C,</li>
                <li>O/C , Bawngkawn PS</li>
                <li>D.C., Aizawl District.</li>
            </ol>
            </div>
            <div>
                <p class="sign"> (SAGCHHIN CHINZAH)<br>Additional Deputy Commissioner(G)<br>Aizawl District , Aizawl</p>
            </div>
            </div>
            <div class="note"><b><u> NOTE:</u></b>
                <ol>
                    <li>This order is digitally signed and therefore needs no physical signature .</li>
                    <li>Authenticity of this order can be verified from https://edistrict.mizoram.gov.in .This order is legally valid as per the Information Technology Act 2000 and its subsequent amendments</li>
                    <li>Tampering of this order will attract Penal Action.</li>
                </ol>
            </div>
        </div>
           
            
        </div>
        <br>
          
    </div>
    
</body>
</html>
<style>
    .btn{
        
    }
</style>
<button class="btn btn-success"><a href="/ilp/{{$status->id}}"> download</a></button>
<button class="btn btn-danger"><a href="/List"> back to homepage</a></button>
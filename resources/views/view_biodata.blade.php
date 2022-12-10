<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/view.css">



</head>

<body>
    <div><img src="images/template/2.png" alt="" class="img-1"></div>
    <div class=" container" >
        <div class="title">BIODATA</div>
        
			<div class="row">
            	<h1 class="title1">Personal Detail</h1>
            	<div><span class="col-2 info" style="padding-right:177px">Name</span><span class="colon">:</span><span class="col-3 data">{{$data[0]->name}}</span></div>
            	<div><span class="col-2 info " style="padding-right:108px">Date Of Birth</span><span class="colon">:</span><span class="col-3 data">{{$data[0]->dob}}</span></div>
            	<div><span class="col-2 info" style="padding-right:108px">Place of birth</span><span class="colon">:</span><span class="col-3 data">{{$data[0]->place}}</span></div>
            	<div><span class="col-2 info" style="padding-right:178px">Rashi</span><span class="colon">:</span><span class="col-3 data">{{$data[0]->rashi}}</span></div>
            	<div><span class="col-3 info"style="padding-right:171px" >Height</span><span class="colon">:</span><span class="col-3 data">{{$data[0]->height}}</span></div>
            	<div><span class="col-3 info" style="padding-right:162px">religion</span><span class="colon">:</span><span class="col-3 data">{{$data[0]->religion}}</span></div>
            	<div><span class="col-3 info" style="padding-right:180px">Caste</span><span class="colon">:</span><span class="col-3 data">{{$data[0]->caste}}</span></div>
            	<div><span class="col-3 info" style="padding-right:140px">Sub-Caste</span><span class="colon">:</span><span class="col-3 data">{{$data[0]->sub_caste}}</span></div>
            	<div><span class="col-3 info" style="padding-right:178px">Gotra</span><span class="colon">:</span><span class="col-3 data">{{$data[0]->gotra}}</span></div>
            	<div><span class="col-3 info" style="padding-right:140px">Nakshatra</span><span class="colon">:</span><span class="col-3 data">{{$data[0]->nakshatra}}</span></div>
            	<div><span class="col-3 info" style="padding-right:157px">Manglik</span><span class="colon">:</span><span class="col-3 data">{{$data[0]->manglik}}</span></div>
            	<div><span class="col-3 info" style="padding-right:142px">Education</span><span class="colon">:</span><span class="col-3 data">{{$data[0]->education}}</span></div>
            	<div><span class="col-3 info" style="padding-right:168px">College</span><span class="colon">:</span><span class="col-3 data">{{$data[0]->college}}</span></div>
            	<div><span class="col-3 info" style="padding-right:121px">Employed In</span><span class="colon">:</span><span class="col-3 data">{{$data[0]->employed}}</span></div>
            	<div><span class="col-3 info" style="padding-right:120px">Organization</span><span class="colon">:</span><span class="col-3 data">{{$data[0]->organizate}}</span></div>
            	<h1 class="title1">Family Detail</h1>
            	<div><span class="col-3 info" style="padding-right:110px">Father Name&nbsp;&nbsp;</span><span class="colon">:</span><span class="col-3 data">{{$data[0]->father_name}}</span></div>
            	<div><span class="col-3 info" style="padding-right:71px" >Father Occupation</span><span class="colon">:</span><span class="col-3 data">{{$data[0]->father_occupation}}</span></div>
            	<div><span class="col-3 info" style="padding-right:71px" >Number of Brother</span><span class="colon">:</span><span class="col-3 data">{{$data[0]->brother}}</span></div>
            	<div><span class="col-3 info" style="padding-right:90px" >Number of Sister</span><span class="colon">:</span><span class="col-3 data">{{$data[0]->sister}}</span></div>
            	<div><span class="col-3 info" style="padding-right:15px">Number of Married Sister</span><span class="colon">:</span><span class="col-3 data">{{$data[0]->married_sister}}</span></div>
            	<h1 class="title1">Contact Detail</h1>
            	<div><span class="col-3 info" style="padding-right:185px">Phone</span><span class="colon">:</span><span class="col-3 data">{{$data[0]->phone}}</span></div>
            	<div><span class="col-3 info" style="padding-right:1px">Address</span><span class="colon">:</span><span class="col-3 data">{{$data[0]->address}}</span></div>
          </div>
          
        </div>
      
    </div>
    

    

</body>

</html>

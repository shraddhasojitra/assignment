<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="css/profile_style.css" rel="stylesheet">

    <title>user_profile</title>
    
        <style>
        body
        {
            margin: 0px;
            padding: 0px;
            background-color: #711f8f;
        }
        .profile
        {
            font-size: large;
            padding: 20px;
        }
        .btn
        {
            background-color: #711f8f;
        }  
        .frm
        {
            padding: 20px;
        }
       

        
        </style>
   
</head>
<body>
    <div class="container mt-5 bg-light shadow-lg">
        <div class="row p-2">
            <div class="col-md-3 text-center shadow ">
                <img src="img/profile.jpg" class="img-fluid mx-auto mt-4 rounded-circle">
                <div>
                    <b>shraddha patel</b> 
                    <br>
                    sojitrashraddha6@gmail.com
                </div> 
            </div>
            <div class="col-md-5 shadow "> 
                <b class="profile">Profile settings</b>
            </br>
                <form method="post" id="userform" class="frm">
                    <div class="row">
                        <div class="col-md-6">
                            <label >Name</label>
                            <input type="text" placeholder="first name"  class="form-control form-control-sm">
                        </div>
                        <div class="col-md-6">
                            <label>Surname</label>
                            <input type="text" placeholder="Surname"  class="form-control form-control-sm">
                        </div>
                    </div>
                    <label>Phone Number</label>
                    <input tytpe="number" placeholder="enter phone number" class="form-control form-control-sm">
                    <label> Address</label>
                    <input tytpe="text" placeholder="enter address" class="form-control form-control-sm">
                    <label> Email-Id</label>
                    <input tytpe="text" placeholder="enter email-id" class="form-control form-control-sm">
                    <label> Education</label>
                    <input tytpe="text" placeholder="education" class="form-control form-control-sm">
                    <div class="row">
                        <div class="col-md-6">
                            <label >Country</label>
                            <input type="text" placeholder="country"  class="form-control form-control-sm">
                        </div>
                        <div class="col-md-6">
                            <label>State/Region</label>
                            <input type="text" placeholder="state"  class="form-control form-control-sm">
                        </div>
                    </div>  
                    <div class="form-group text-center btn-sm mx-auto mt-1 ">
                        
                        <input type="submit" value="save profile" class="btn text-white">
                    </div>

                </form>
            </div>  
            <div class="col-md-4  shadow ">
                <div class="col-md ">
                    Edit Experiance
                    
                    <label class="offset-md-3 border px-3 py-1">experiance</label>
                </div>
                <form class="frm">
                    <label class="form-label">Experiance in designing</label>
                    <input type="text" placeholder="experiance" class="form-control form-control-sm ">
                    
                    <label class="form-label">Additional details</label>
                    <input type="text" placeholder="additional details" class="form-control form-control-sm">
                   
                </form>
            </div>
        </div>
    </div>
</body>
</html>
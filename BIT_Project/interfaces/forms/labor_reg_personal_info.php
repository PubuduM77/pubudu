<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Labor Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <style>
        /* .container{
            width: 600px;
        } */
        .row{
            margin-top: 10px;
        }
    </style>

</head>
<body>
    <div class="container">
        
        <h3>Labor Registration</h3>
         
            <div class="card text-center">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="true" href="#">Personal Information</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="labor_reg_project_history.php">Project History</a>
                    </li>
                    </ul>
                </div>
                        
                <div class="card-body">
                    <form action="" method="" class="g-3">
                        <div class="row">
                            <div class="col-xs-1 col-sm-3 col-md-2">   <!-- xs-1 issue has -->
                              <select id="title" class="form-select">
                                <option selected>Title...</option>
                                <option>Mr.</option>
                                <option>Miss</option>
                                <option>Ms</option>
                                <option>Mrs.</option>
                              </select>
                            </div>
                            <div class="col-xs-12 col-sm-10 col-md-4">
                              <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Full Name:"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-8 col-md-3">
                              <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name:"/>
                            </div>
                            <div class="col-xs-12 col-sm-8 col-md-3">
                              <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name:"/>
                            </div>
                        </div>
                        <div class="row">        <!-- do we need the calendar picture to attached-->
                            <div class="col-2">
                                <input placeholder="Date of Birth:" class="textbox-n form-control" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="dob"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <input type="text" class="form-control" id="nicPP" name="nicPP" placeholder="NIC / Passport No:"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-1">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="male" value="male"/>
                                    <label class="form-check-label" for="male">Male</label>
                                </div>
                            </div>
                            <div class="col-1">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="female" value="female"/>
                                    <label class="form-check-label" for="female">Female</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-8 col-md-2">
                              <input type="text" class="form-control" id="personalTel" name="personalTel" placeholder="Personal Tel. No:"/>
                            </div>
                            <div class="col-xs-12 col-sm-8 col-md-2">
                              <input type="text" class="form-control" id="homeTel" name="homeTel" placeholder="Home Tel. No:"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <input type="text" class="form-control" id="address1" name="address1" placeholder="Address Line 1:"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <input type="text" class="form-control" id="address2" name="address2" placeholder="Address Line 2: (optional)"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-8 col-md-3">
                              <input type="text" class="form-control" id="cityTown" name="cityTown" placeholder="City/Town:"/>
                            </div>
                            <div class="col-xs-12 col-sm-8 col-md-3">
                                <select id="district" class="form-select">
                                    <option selected>District...</option>
                                    <option>Ampara</option>
                                    <option>Anuradhapura</option>
                                    <option>Badulla</option>
                                    <option>Batticaloa</option>
                                    <option>Colombo</option>
                                    <option>Galle</option>
                                    <option>Gampaha</option>
                                    <option>Hambantota</option>
                                    <option>Jaffna</option>
                                    <option>Kalutara</option>
                                    <option>Kandy</option>
                                    <option>Kegalle</option>
                                    <option>Kilinochchi</option>
                                    <option>Kurunegala</option>
                                    <option>Mannar</option>
                                    <option>Matale</option>
                                    <option>Matara</option>
                                    <option>Monaragala</option>
                                    <option>Mullaitivu</option>
                                    <option>Nuwara Eliya</option>
                                    <option>Polonnaruwa</option>
                                    <option>Puttalam</option>
                                    <option>Ratnapura</option>
                                    <option>Trincomalee</option>
                                    <option>Vavuniya</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-3">
                                <input class="form-control" type="file" id="formFile"/>
                                <!-- <img src="profile image placeholder.png" alt="profile picture" class="img-thumbnail" style="height: 50px;"/> -->
                            </div>
                            <div class="col-2">
                                <input class="btn btn-warning" type="reset" value="Reset" style="width: 120px;"/>
                            </div>
                            <div class="col-2">
                                <a class="btn btn-primary" href="labor_reg_project_history.php" role="button" style="width: 120px;">Next&raquo;</a>
                            </div>
                        </div>

                    </form>   
                </div>
            </div>
    </div>
</body>
</html>
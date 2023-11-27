<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <style>
        .row{
            margin-top: 10px;
        }
    </style>

</head>
<body>
    <div class="container">
        
        <h3>Employee Registration</h3>
         
            <div class="card text-center">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link" href="emp_reg_personal_info.php">Personal Information</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="true" href="#">Professional Qualification</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="emp_reg_academic_qualifi.php">Academic Qualification</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="emp_reg_project_history.php">Project History</a>
                    </li>
                    </ul>
                </div>
                        
                <div class="card-body">
                    <form action="" method="" class="g-3">
                        <div class="row">
                            <div class="col-6">
                                <input type="text" class="form-control" id="companyName" name="companyName" placeholder="Name of the Company:"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2">
                                <input placeholder="Employment From:" class="textbox-n form-control" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="empFrom"/>
                            </div>
                            <div class="col-2">
                                <input placeholder="Employment To:" class="textbox-n form-control" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="empTo"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <input type="text" class="form-control" id="designation" name="designation" placeholder="Designation:"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-3">
                                <input class="form-control" type="file" id="formFile"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <textarea class="form-control" id="remarks" rows="3" placeholder="Remarks:"></textarea>
                                  </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">

                            </div>
                            <div class="col-2">
                                <a class="btn btn-primary" href="#" role="button" style="width: 120px;margin-bottom: 10px;">Add another</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2">
                                <input class="btn btn-warning" type="reset" value="Reset" style="width: 120px;"/>
                            </div>
                            <div class="col-2">
                                <a class="btn btn-primary" href="emp_reg_personal_info.php" role="button" style="width: 120px;">&laquo;Previous</a>
                            </div>
                            <div class="col-2">
                                <a class="btn btn-primary" href="emp_reg_academic_qualifi.php" role="button" style="width: 120px;">Next&raquo;</a>
                            </div>
                        </div>
                    </form>   
                </div>
            </div>
    </div>
</body>
</html>
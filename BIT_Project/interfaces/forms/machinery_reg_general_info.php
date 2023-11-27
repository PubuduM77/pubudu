<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Machinery Registration</title>
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
    <div class="container">                         <!-- responsive must -->
        
        <h3>Machinery Registration</h3>
         
            <div class="card text-center">        <!-- size reduce must -->
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="true" href="#">General Information</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="machinery_reg_project_history.php">Project History</a>
                    </li>
                    </ul>
                </div>
                        
                <div class="card-body">
                    <form action="" method="" class="g-3">
                        <div class="row">
                            <div class="col-xs-3 col-sm-3 col-md-3">   <!-- xs-1 issue has -->
                              <select id="machineCategory" class="form-select">
                                <option selected>Machine Category...</option>
                                <option>Earth Work</option>
                                <option>Lifting</option>
                                <option>Loading</option>
                                <option>Road</option>
                                <option>Transport</option>
                                <option>Heavy</option>
                                <option>Tools and Equipment</option>
                                <option>Other</option>
                              </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-8 col-md-3">
                              <input type="text" class="form-control" id="regNumber" name="regNumber" placeholder="Vehicle Reg. Number: ex:- AB-1234, H-123"/>
                            </div>
                            <div class="col-xs-12 col-sm-8 col-md-3">
                              <input type="text" class="form-control" id="model" name="model" placeholder="Model: ex:- Excavator"/>
                            </div>
                        </div>
                        <div class="row">        <!-- do we need the calendar picture to attached-->
                            <div class="col-2">
                                <input placeholder="Registered Date:" class="textbox-n form-control" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="regDate"/>
                            </div>
                        </div>
                        <div class="row">
                            <!-- <div class="mb-3 col-3">
                                <input class="form-control" type="file" id="formFile"/>
                                <img src="profile image placeholder.png" alt="profile picture" class="img-thumbnail" style="height: 50px;"/>
                            </div> -->
                            <div class="col-2">
                                <input class="btn btn-warning" type="reset" value="Reset" style="width: 120px;"/>
                            </div>
                            <div class="col-2">
                                <a class="btn btn-primary" href="machinery_reg_project_history.php" role="button" style="width: 120px;">Next&raquo;</a>
                            </div>
                        </div>

                    </form>   
                </div>
            </div>
    </div>
</body>
</html>
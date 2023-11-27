<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billing Form</title>
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
        
        <h3>Billing Form</h3>
         
            <div class="card text-center">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link" href="billing_general_info.php">General Information</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="true" href="#">Entries</a>
                    </li>
                    </ul>
                </div>
               
                <div class="card-body">
                    <form action="" method="" class="g-3">
                        <div class="row">
                            <div class="col-xs-1 col-sm-3 col-md-3">   <!-- add a datalist maybe -->
                                <select id="billCategory" class="form-select">
                                    <option selected>Billing Category...</option>
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="col-xs-1 col-sm-3 col-md-5">       <!-- or a dropdown -->
                                <input class="form-control" list="datalistOptions" id="billDescription" placeholder="Type to search Billing Description..."/>
                                    <datalist id="datalistOptions">
                                        <option value="...">
                                        <option value="...">
                                        <option value="...">
                                        <option value="...">
                                        <option value="...">
                                    </datalist>
                            </div>
                        </div>
                        <div class="row">  
                            <div class="col-xs-12 col-sm-10 col-md-2">
                                <input type="text" class="form-control" id="qty" name="qty" placeholder="Quantity:"/>
                            </div>
                            <div class="col-xs-1 col-sm-3 col-md-2">   <!-- add a datalist maybe -->
                                <select id="unit" class="form-select">
                                    <option selected>Unit...</option>
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="col-xs-12 col-sm-10 col-md-2">   <!-- rates stays as a input/table no need maybe/send for approvals later nisa ok -->
                                <input type="text" class="form-control" id="rate" name="rate" placeholder="Rate:"/>
                            </div>
                            <div class="col-xs-12 col-sm-10 col-md-2">
                                <input type="text" class="form-control" id="amount" name="amount" placeholder="Amount:"/>      <!--disable or lock maybe-->
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
                                <a class="btn btn-secondary" href="#" role="button" style="width: 120px;">Cancel</a>
                            </div>
                            <div class="col-2">
                                <a class="btn btn-primary" href="billing_general_info.php" role="button" style="width: 120px;">&laquo;Previous</a>
                            </div>
                            <div class="col-2">
                                <input class="btn btn-success" type="submit" value="Save" style="width: 120px;"/>
                            </div>
                        </div>
                    </form>   
                </div>
            </div>
    </div>
</body>
</html>
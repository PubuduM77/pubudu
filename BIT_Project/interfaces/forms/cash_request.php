<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cash Request Form</title>
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
        
        <h3>Cash Request Form</h3>
         
            <div class="card text-center">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="true" href="#">Cash Request</a>
                    </li>
                    </ul>
                </div>
                        
                <div class="card-body">
                    <form action="" method="" class="g-3">
                        <div class="row">
                            <div class="col-xs-1 col-sm-3 col-md-2">   <!-- add a datalist maybe -->
                                <select id="project" class="form-select">
                                    <option selected>Project...</option>
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">        <!-- do we need the calendar picture to attached-->
                            <div class="col-2">
                                <input placeholder="Cash Requesting Date:" class="textbox-n form-control" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="cashRequestingDate"/>
                            </div>
                            <div class="col-xs-12 col-sm-10 col-md-2">
                                <input type="text" class="form-control" id="cashRequestingAmount" name="cashRequestingAmount" placeholder="Cash Requesting Amount:"/>
                            </div>
                        </div>
                        <div class="row">        <!-- do we need the calendar picture to attached-->
                            <div class="col-2">
                                <input placeholder="Cash Approved Date:" class="textbox-n form-control" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="cashApprovedDate"/>
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
                            <div class="col-2">
                                <input class="btn btn-warning" type="reset" value="Reset" style="width: 120px;"/>
                            </div>
                            <div class="col-2">
                                <a class="btn btn-secondary" href="#" role="button" style="width: 120px;">Cancel</a>
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
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ExpenseTracker - AddExpense</title>

  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/ExpenseTracker.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-AddExpense mx-auto mt-5">
      <div class="card-header">Add Expense</div>
      <div class="card-body">
        <form>
          <div class="form-group">
          <div class="form-row">
                <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="Name" class="form-control" placeholder="ADD Your Expense Name" required="required" autofocus="autofocus">
                  <label for="Name">Expense Name</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
          <div class="form-row">
                <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="type" class="form-control" placeholder="Add Your Expense Type" required="required">
                  <label for="type">Expense Type</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
          <div class="form-row">
                <div class="col-md-6">
                <div class="form-label-group">
                  <input type="" id="cost" class="form-control" placeholder="Add Your Expense Cost" required="required">
                  <label for="cost">Cost</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
          <div class="form-row">
                <div class="col-md-6">
                <div class="form-label-group">
                  <input type="date" id="date" class="form-control" placeholder="Select Your Date" required="required">
                  <label for="date">Date</label>
                </div>
              </div>

            </div>
          </div>
          <a class="btn btn-primary btn-block" href="AddExpense.php">Submit</a>
          <a class="btn btn-primary btn-block" href="AddExpense.php">Reset</a>
        </form>

      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
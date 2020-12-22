<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Calculator</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="addition.php">Addition</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="subtraction.php">Subtraction</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="multiplication.php">Multiplication</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="division.php">Division</a>
              </li>
             
            </ul>
          </div>
        </div>
      </nav>
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                <table class="table table-borderless">
                    <tr>
                        <td>Enter First Number</td>
                        <td><input id="num1" type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Enter Second Number</td>
                        <td><input id="num2" type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><Button onclick="addition()" class="btn btn-success">ADD</Button></td>
                    </tr>
                    <tr>
                        <td>Result</td>
                        <td> <p id="result"> </p></td>
                    </tr>
                </table>
                

            </div>
        </div>
    </div>
    <script>
        function addition(){
            var getNum1=parseInt(document.getElementById("num1").value)
            var getNum2=parseInt(document.getElementById("num2").value)
            var res=getNum1+getNum2
            document.getElementById("result").innerHTML=res
            console.log(res)
            

        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    
</body>
</html>
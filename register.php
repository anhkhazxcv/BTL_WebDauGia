<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Register</title>
</head>
<body>
<form action = "registerfetch.php" method="post" enctype= "multipart/form-data" name = "formRegister">
  <div class="mb-3">
    <label for="fname" class="form-label">First Name</label>
    <input type="text" class="form-control" id="fname" name ="fname" >
  </div>
  <div class="mb-3">
    <label for="lname" class="form-label">Last Name</label>
    <input type="text" class="form-control" id="lname" name ="lname" >
  </div>
  <div class="mb-3">
    <label for="cname" class="form-label">Code Name</label>
    <input type="text" class="form-control" id="cname" name = "cname" aria-describedby="cnameHelp">
    <div id="cnameHelp" class="form-text">Others only know you as code name for security.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name = "email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="phone" class="form-label">Phone Number</label>
    <input type="tel" class="form-control" id="phone" name ="phone" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name ="password" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary" name ="register">Submit</button>
</form>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
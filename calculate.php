<html>
    <head>
        <link rel="stylesheet" href="bootstrap.min.css">
    </head>
    <body>
    <form action="handle-calculate.php" class="w-75 bg-danger p-5 text-white m-auto" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">first number</label>
    <input type="number" name="first_number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">second number</label>
    <input type="number" name="second_number" class="form-control" id="exampleInputPassword1">
  </div>

 
  <select name="oper" id="">
      <option value="add">+</option>
      <option value="subtract">-</option>
      <option value="multiply">*</option>
      <option value="divide">/</option>

  </select>
    <br>
 

  <button type="submit" name="submit" class="btn btn-primary mt-3">Submit</button>
</form>
<div class="w-25 text-white bg-danger mx-auto text-center mt-5">
   <h1><?php echo $_GET['result'] ?></h1>
</div>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<h1>Welcome to Backend, ini login!</h1>
  <h2>Vertical (basic) form</h2>
  <form action="<?= $this->url->get('login/login') ?>" method="post">
    <div class="form-group">
      <label >Username:</label>
      <input type="text" class="form-control" placeholder="Enter text" name="username">
    </div>
    <div class="form-group">
      <label >Password:</label>
      <input type="password" class="form-control" name="password" placeholder="Enter password">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
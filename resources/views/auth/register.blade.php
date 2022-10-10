<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

    @if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
</div>
@endif
@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
</div>
@endif
<div class="container">
  <h2>User Registration</h2>
  <form action="{{route('user.store')}}" method="POST">
    @csrf
    <div class="form-group">
        <label><b>Name:</b></label>
        <input type="text" class="form-control" placeholder="Enter name" name="name">
        @error('name')
        <label class="text-danger">{{$message}}</label>
        @enderror  
    </div>
    <div class="form-group">
      <label><b>Email:</b></label>
      <input type="text" class="form-control" placeholder="Enter email" name="email">
      @error('email')
      <label class="text-danger">{{$message}}</label>
      @enderror
    </div>
    <div class="form-group">
      <label><b>Password:</b></label>
      <input type="password" class="form-control" placeholder="Enter password" name="password">
      @error('password')
        <label class="text-danger">{{$message}}</label>
        @enderror  
    </div>
    <button type="submit" class="btn btn-success"><b>Submit</b></button>
  </form>
</div>

</body>
</html>

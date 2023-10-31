<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 Form Example Tutorial</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      Student Register
    </div>
    <div class="card-body">
      <form name="student_register" id="student_register" method="post" action="{{route('student_register.store')}}">
       @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" id="name" name="name" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input type="email" id="email" name="email" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Address</label>
          <textarea name="address" id="address" name="address" class="form-control" required=""></textarea>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Pin Code</label>
          <input type="number" id="pincode" name="pincode" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Mobile Number</label>
          <input type="number" id="mobileNumber" name="mobileNumber" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Password</label>
          <input type="password" id="password" name="password" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>  
</body>
</html>
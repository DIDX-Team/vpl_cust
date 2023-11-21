@extends('layout')

@section('content')
<br>
<br>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Buy Number Form</title>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<!-- Optional custom CSS -->
<style>
.btn-circle {


display: flex; /* Enables flexbox */
justify-content: center; /* Centers horizontally */
align-items: center; /* Centers vertically */
width: 10px;
height: 80px;
border-radius: 50%; /* Rounds the corners to make a circle */
background-color: #007bff; /* Bootstrap's primary color */
color: white; /* Text/icon color */  

}

.form-section {
background-color: #ffffff; /* White background color */
padding: 20px;
border-radius: 5px;
}
.or-divider {
margin-top: 15px;
margin-bottom: 15px;
}
.or-divider:before,
.or-divider:after {
content: "";
flex: 1;
border-bottom: 1px solid #dee2e6;
}
.or-divider:before {
margin-right: .25em;
}
.or-divider:after {
margin-left: .25em;
}
.video-link {
display: flex;
justify-content: space-between;
align-items: center;
}
</style>
</head>
<body>

<div class="container">
<div class="row justify-content-center align-items-center">
<!-- Video button now taking less space -->
<div class="col-md-auto mb-2 mb-md-0">
<button class="btn btn-primary btn-circle btn-lg">
<i class="fa fa-play" aria-hidden="true"  class=""></i>
</button>
</div>

<!-- Title and link now taking less space and closer to the video button -->
<div class="col-md-auto text-center">
<h2>How to Buy a Number?</h2>
<a href="#" class="d-block">Watch Video Tutorial</a>
</div>
</div>




<div class="row">
<div class="col-md-8 col-lg-6 mx-auto">
<div class="form-section">
<form>
<div class="form-group">
<input type="text" class="form-control" placeholder="Phone Number (e.g., 1567 or 4420123456789)">
</div>
<div class="or-divider d-flex align-items-center">
<div></div>
<span class="px-2">OR</span>
<div></div>
</div>
<div class="form-group">
<select class="form-control">
<option selected>Select Country</option>
<!-- Add country options here -->
</select>
</div>
<div class="text-center">
<button type="submit" class="btn btn-primary">Search</button>
</div>

</form>

</div>
</div>
</div>
</div>
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-body">
<table class="table table-bordered">
<thead>
<tr>
<th scope="col">Phone Number</th>
<th scope="col">Country</th>
<th scope="col">State</th>
<th scope="col">Rate Center</th>
<th scope="col">Free Incoming Minutes</th>
<th scope="col">Setup</th>
<th scope="col">Rate Per Minute*</th>
<th scope="col">Monthly Charges</th>
<th scope="col">Annual Charges</th>
</tr>
</thead>
<tbody>
<td>1-305-722-1333</td>
<td>USA</td>
<td>Florida FL</td>
<td>MIAMI</td>
<td>3000</td>
<td>$7.99</td>
<td>$0.02</td>
<td>$7.99</td>
<td>$95.88</td>
</tbody>
</table>
</div>
</div>
</div>

</div>

</div>

<!-- Bootstrap JS and its dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
@endsection
@extends('layout')
@section('pakage_plan')
@section('title', 'Package Plan')

<div class="container ticket-container mt-5 table">

<form>

<div class="form-group row div-line">
<label for="fromInput" style="padding-left:5%;" class="col-sm-2 col-form-label">Order Id</label>
<div class="col-sm-10">
<!-- <a href="#" style="margin-left:40%;" ></a> -->
<input type="text" style="margin-left:40%;" readonly class="form-control-plaintext" id="fromInput" value="1005729">

</div>
</div>
<!-- Sender Information -->
<div class="form-group row div-line">
<label for="fromInput"  style="padding-left:5%;" class="col-sm-2 col-form-label">Virtual Phone Number
</label>
<div class="col-sm-10">
<input type="text" style="margin-left:40%;" readonly class="form-control-plaintext" id="fromInput" value="12025521553">
</div>
</div>

<!-- Ticket Information -->
<div class="form-group row div-line">
<label for="ticketNumber" style="padding-left:5%;" class="col-sm-2 col-form-label">Current Package</label>
<div class="col-sm-10">
<input type="text" style="margin-left:40%;" readonly class="form-control-plaintext" id="ticketNumber" value="Pay-As-You-Go">
</div>
</div>


<!-- Date -->

<div class="form-group row div-line">
<label for="ticketNumber" style="padding-left:5%;" class="col-sm-2 col-form-label">Select New Package</label>

</div>

<!-- Status -->
<div class=" text-center row div-line">
<h6>By selecting new package, current package will be removed permanently, however you could still be able to change package, any time later.</h6>
</div>

</form>

<table class="table">
    <thead>
      <tr>
        <th scope="col">Package</th>
        <th scope="col">Setup Cost</th>
        <th scope="col">Monthly Cost</th>
        <th scope="col">Annual Cost</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td> <input type="radio" name="radio" id=""> <a href="{{ route('plan_details') }}"> Unlimited US & Canada</a></td>
        <td></td>
        <td>$0.00</td>
        <td>$19.95</td>
      </tr>
      <tr>
        <td><input type="radio" name="radio" id=""><a href="{{ route('plan_details') }}"> China Unlimited</a></td>
        <td></td>
        <td>$10.00</td>
        <td>$25.00</td>
      </tr>
      <tr>
        <td><input type="radio" name="radio" id=""> <a href="{{ route('plan_details') }}"> UK Land Line</a></td>
        <td></td>
        <td>$10.00</td>
        <td>$20.00</td>
      </tr> 
        <tr>
        <td><input type="radio" name="radio" id=""> <a href="{{ route('plan_details') }}"> Pakistan 50 Incoming Minutes</a></td>
        <td></td>
        <td>$0.00</td>
        <td>$10.00</td>
      </tr>
      <tr>
        <td><input type="radio" name="radio" id=""> <a href="{{ route('plan_details') }}"> Unlimited Minutes</a></td>
        <td></td>
        <td>$0.00</td>
        <td>$25.00</td>
      </tr>
      <tr>
        <td><input type="radio" name="radio" id=""> <a href="{{ route('plan_details') }}"> India Unlimited</a></td>
        <td></td>
        <td>$5.00</td>
        <td>$25.00</td>
      </tr>
      <tr>
        <td><input type="radio" name="radio" id=""> <a href="{{ route('plan_details') }}"> India Unlimited Calling</a></td>
        <td></td>
        <td>$0.00</td>
        <td>$20.00</td>
      </tr>
      <tr>
        <td><input type="radio" name="radio" id=""> <a href="{{ route('plan_details') }}"> India</a></td>
        <td></td>
        <td>$0.00</td>
        <td>$5.20</td>
      </tr>
      <tr>
        <td><input type="radio" name="radio" id=""> <a href="{{ route('plan_details') }}"> India Plan</a></td>
        <td></td>
        <td>$0.00</td>
        <td>$10.00</td>
      </tr>
    </tbody>
  </table>
  <div class="text-center mb-5 mt-4">
    <input class="btn btn-primary" type="submit" value="Submit">
    <input class="btn btn-primary"  type="submit" value="Cancel">

  </div>

</div>

@endsection
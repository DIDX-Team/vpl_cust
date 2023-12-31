@extends('layout')
@section('my_cart')
@section('title', 'My Cart')
<style>
 .table thead th
 {
    font-size:10px;
    font-weight:900;

 }   
 
</style>
<br>
<br>
<br>
<div class="container shadow rounded p-5 ">
<h2 style="font-weight:500;">My Cart</h2>
    <hr>
    <table class="table table-responsive">
  <thead style="color:black;background-color:#F8F8F8;" class="text-capitalize">
    <tr>
      <th scope="col">Phone No </th>
      <th scope="col">area</th>
      <th scope="col">country</th>
      <th scope="col">billing type</th>
      <th scope="col">1 type setup charge</th>
      <th scope="col">monthly charge</th>
      <th scope="col">annual charge</th>
      <th scope="col">talk time</th>
      <th scope="col">plan monthly</th>
      <th scope="col">plan setup</th>
      <th scope="col">total charges</th>
      <th scope="col">user documents</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>34-91-003-6526</td>
      <td>Madrid</td>
      <td>Spain</td>
      <td>Annual</td>
      <td>1</td>
      <td>0</td>
      <td>77</td>
      <td>0</td>
      <td>0</td>
      <td>0</td>
      <td>78</td>
      <td>Pending Approval</td>
      <td><a href="#" style="color:red;">Remove</a></td>
    </tr>

    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>

    <tr>
      <td class="font-weight-bolder">Total</td>
      <td></td>
      <td></td>
      <td></td>
      <td class="font-weight-bolder">$1</td>
      <td class="font-weight-bolder">$0</td>
      <td class="font-weight-bolder">$77</td>
      <td class="font-weight-bolder">$0</td>
      <td class="font-weight-bolder">$0</td>
      <td class="font-weight-bolder">$0</td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </tbody>

</table>

<hr>

<div class="container-fluid p-3">
<div class="row">
    <div class="col-md-6 text-left">
        <h5 class="font-weight-bolder">Grand Total</h5>
        <h5 class="font-weight-bolder">Available funds in your account</h5>
        <h5 class="font-weight-bolder">Total Amount To Pay</h5>
        <p class="text-muted">You will not be able to buy any number that requires documents approval. <br> 	 
        The Number will be added to your account automatically once your provided documents are approved. <br>
        If document does not get an approval, you will be notified by an email and it will not be added to your account.
        </p>
    </div>


    <div class="col-md-6 text-right">
        <h5 class="font-weight-bolder">$73</h5>
        <h5 class="font-weight-bolder">$136.34</h5>
        <h5 class="font-weight-bolder">$78</h5>
    </div>

                        </thead>
                        <tbody>

  

</div>
<a href="#" type="button" class="btn btn-default" style="color:white;background-color:#0088cc;display-flex;float:right;">Checkout</a>
</div>    


</div>


                @endsection


@extends('layout')
@section('sms_setting')
@section('title', 'SMS Setting')
<br>
<br>
<div class="container mt-0"> <!-- Reduce top margin for the container -->
<form>
  <div class="row">
    <div class="col-md-11 mx-auto">
      <div class="card rounded">
        <div class="card-header text-center bg-white mt-2">
          <h3>Sms Setting</h3>
        </div>
        <div class="card-body text-center">
          <div class="form-group row">
          <!-- Right-align labels by adding text-end class -->
          <div class="form-group row mb-0">
            <label for="company" class="col-sm-3 col-form-label text-end">Send Me SMS on</label>
            <div class="col-sm-9">
              <input class="form-control col-md-6 mx-auto" type="number" id="company" placeholder="i.e. +923322950760">
            </div>
          </div>
          <!-- Right-align labels by adding text-end class -->
          <div class="form-group row mb-0">
            <label for="password" class="col-sm-3 col-form-label text-end">Call URL</label>
            <div class="col-sm-9">
              <input class="form-control col-md-6 mx-auto" type="text" id="password" placeholder="i.e. www.yoursite.com">
            </div>
          </div>
          <!-- Right-align labels by adding text-end class -->

          <div class="text-center mb-4">
            <input class="btn btn-primary mt-2" type="submit" value="UPDATE">
          </div>
        </div>
      </div>
    </div>
  </div>
</form>

      <div class="row mt-4 ">
          <div class="col-md-11 mx-auto">
            <div class=" rounded mb-0">
              <div class="card-header">
                Affiliate Program:
              </div>
              <div class="mt-2"> <!-- h-auto class added for automatic height adjustment -->
                <div class=" d-flex justify-content-between">
                  <p class="card-text ml-3">Your Affiliate Link</p>
                  <p class="card-text mr-4">virtualphoneline.com/signup/?affilation=vJgwiFoOCF1005729</p>
                </div>
                <hr class="my-1 mx-3">
              </div>
            </div>
          </div>
        </div>

        <div class="row mt-3">
          <div class="col-md-11 mx-auto">
            <div class=" rounded mb-0">
              <div class="card-header">
                Document Management:
              </div>
              <div class="mt-2"> <!-- h-auto class added for automatic height adjustment -->
                <div class=" d-flex justify-content-between">
                  <p class="card-text ml-3">Here you will see any uploaded documents including authorization forms and personal <br> identification documents.</p>
                  <p class="card-text mr-4">(no documents uploaded)</p>
                </div>
                <hr class="my-1 mx-3">
                <div class="text-end mr-4">
                  <p><a href="#" class="a_tag">Upload Document</a></p>
                </div>
                <hr class="my-1 mx-3">
              </div>
            </div>
          </div>
        </div>


        <div class="row mt-3 ">
          <div class="col-md-11 mx-auto">
            <div class=" rounded mb-0">
              <div class="card-header">
              Manage Open IDs:
              </div>
              <div class="mt-2"> <!-- h-auto class added for automatic height adjustment -->
                <div class=" d-flex justify-content-between">
                  <p class="card-text ml-3">Facebook ID Management	</p>
                  <p class="card-text mr-4">Your current profile is not linked to facebook. <br> <a href="#" class="a_tag">Click here to link to your facebook account.</a></p>
                </div>
                <hr class="my-1 mx-3">
                <div class=" d-flex justify-content-between mt-0">
                     <p class="card-text ml-3">Facebook ID Management	</p>
                   <div class="media mr-5 card-text mr-5 ">
                        <img src="images/icons/gmail_icon.png" class="mr-3" alt="Image 1" height="60px">
                        <div class="media-body mt-1">
                        <p class="">Watch Video Tutorial <br> <a class="a_tag" href="#">How to change Ring to Number?</a> </p> 
                        <hr class="my-1 mx-3">
                     </div>
                 </div>
                </div>
                <hr class="my-1 mx-3 mt-2">
              </div>
            </div>
          </div>
        </div>


        <div class="row mt-3 ">
          <div class="col-md-11 mx-auto">
            <div class=" rounded mb-0">
              <div class="card-header">
              Public Profile Settings:	             
             </div>
              <div class="mt-2"> <!-- h-auto class added for automatic height adjustment -->
                <div class=" d-flex justify-content-between">
                  <p class="card-text ml-3">Enable Public Profile	</p>
                  <p class="card-text mr-4"> <input class="mr-1" type="checkbox">https://www.virtualphoneline.com/profile/any of your telephone number. </p>
                </div>
                <hr class="my-1 mx-3">
                <div class=" d-flex justify-content-between">
                  <p class="card-text ml-3">Show in Profile	</p>
                  <p class="card-text mr-4"> <input class="mr-1" type="checkbox">Picture <input class="mr-1" type="checkbox">My Location <input class="mr-1" type="checkbox">My Number <input class="mr-1" type="checkbox">Voicemails <input class="mr-1" type="checkbox">Dialer (let anybody call my number)</p>
                </div>
                <hr class="my-1 mx-3">
                <div class=" d-flex justify-content-between mt-2">
                  <p class="card-text ml-3">Select Public Profile		</p>
                  <p class="card-text mr-4"> https://www.virtualphoneline.com/profile/</p>
                  <p class="card-text mr-4"> <input type="text" class="form-control" style="width: 150px;"> <br> <p class=" card-text mr-5">Maximum 10 Characters</p> </p>
                  <p class="card-text mr-5"> <input class="mr-5 " type="submit" value="Save"></p>
                </div>
                <hr class="my-1 mx-3 mt-0">
                <div class=" d-flex justify-content-between">
                  <p class="card-text ml-3">	</p>
                  <p class="card-text mr-4"> <input class="mr-1" type="submit" value="Save"></p>
                </div>
                <hr class="my-1 mx-3 mt-2">
              </div>
            </div>
          </div>
        </div>


        <div class="row mt-2 ">
          <div class="col-md-11 mx-auto">
            <div class=" rounded mb-0">
              <div class="card-header">
              Change forwarding Address via SMS:
              </div>
              <div class="mt-2"> <!-- h-auto class added for automatic height adjustment -->
                <div class=" d-flex justify-content-between">
                  <p class="card-text ml-3">You can change forwarding address to any mobile number. Just send your SMS confirmation code below from any mobile to +447860034130 and your forwarding address will be set automatically to sending mobile number.</p>
                </div>
                <hr class="my-1 mx-3">
                <div class=" d-flex justify-content-between mt-2">
                  <p class="card-text ml-3">	</p>
                  <p class="card-text mr-4"> SMS Confirmation Code</p>
                  <p class="card-text ml-3">	<input type="text" class="form-control" placeholder="678974419744" readonly></p>
                  <p class="card-text ml-5"> <a class="mr-4 a_tag" href="#">Send On My Mobile </a> <a class="mr-5 a_tag" href="#">Reset Code</a>	</p>
                </div>
                <hr class="my-1 mx-3">
              </div>
            </div>
          </div>
        </div>

        <div class="row mt-2 ">
          <div class="col-md-11 mx-auto">
            <div class=" rounded mb-0">
              <div class="card-header">
              Usage News Feed <a  class="a_tag" href="#">[?]:</a>
              </div>
              <div class="mt-2"> <!-- h-auto class added for automatic height adjustment -->
                <div class=" d-flex justify-content-between">
                  <p class="card-text ml-3">Today (22-Nov-2023)</p>
                </div>
                <hr class="my-1 mx-3">
              </div>
              <hr class="my-1 mx-3 mt-2">
              <div class=" d-flex justify-content-between">
                  <p class="card-text ml-3"><span style="color:#0088cc;"> 02:05</span> uploaded document for the number <a class="a_tag" href="#"> 34910036526</a></p>
                </div>
                <hr class="my-1 mx-3">
            </div>
            <hr class="my-1 mx-3 mt-2">
            <div class=" d-flex justify-content-between">
                  <p class="card-text ml-3"><a class="a_tag" href="#">Show more</a></p>
                </div>
                <hr class="my-1 mx-3 mt-2">
          </div>
        </div>


        <div class="row mt-2 ">
          <div class="col-md-11 mx-auto">
            <div class=" rounded mb-0">
              <div class="card-header">
              Back Orders:
              </div>
              <table class="table sm">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Order Date</th>
                    <th>Country</th>
                    <th>Area</th>
                    <th>RateCenter</th>
                    <th>Quantity</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td></td>
                    <!-- need more -->
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>


        <div class="row mt-3">
          <div class="col-md-11 mx-auto">
            <div class=" rounded mb-0">
              <div class="card-header">
              Reports:
              </div>
              <div class="mt-2"> <!-- h-auto class added for automatic height adjustment -->
                <div class=" d-flex justify-content-between">
                  <p class="card-text ml-3"><a class="a_tag" href="#">Annual Reports</a></p>
                  <p class="card-text mr-4"></p>
                  <p class="card-text mr-4"><a class="a_tag" href="#">Annual Reports</a></p>
                  <p class="card-text mr-4"></p>
                </div>
                <hr class="my-1 mx-3">
              </div>
              <hr class="my-1 mx-3 mt-4">
              <div class=" d-flex justify-content-between">
                  <p class="card-text ml-3">Virtual Phone Line is a trade mark of Super Technologies inc. United States. All rates on this web site are in US Dollars. <br> �Copyrights Super Technologies Inc. 2020-2021. <a class="a_tag" href="#">Feedback</a></p>
                </div>
            </div>
          </div>
        </div>

</div>  


@endsection




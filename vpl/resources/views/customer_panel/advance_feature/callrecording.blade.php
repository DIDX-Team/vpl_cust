@extends('layout')
@section('callrecording')
@section('title', 'Call Recording')
<br>
<br>


<div class="container shadow rounded ">


  <form class="form-horizontal">
    <div class="form-group row mt-4">
      <label class="col-md-4 col-form-label text-right align-self-center" style="padding-left: 30px;">Call Recording</label>
      <div class="col-md-6 d-flex align-items-center justify-content-center">
        <p class="form-control-static mt-3">On</p>
      </div>
    </div>
    <hr>
    <div class="form-group row mt-4">
      <label class="col-md-4 col-form-label text-right align-self-center" style="padding-left: 30px;">Monthly Quota Allowed</label>
      <div class="col-md-6 d-flex align-items-center justify-content-center">
        <p class="form-control-static mt-3">30 min.</p>
      </div>
    </div>
    <hr>
    <div class="form-group row mt-4">
      <label class="col-md-4 col-form-label text-right align-self-center" style="padding-left: 30px;">Consumed This Month Nov-2023</label>
      <div class="col-md-6 d-flex align-items-center justify-content-center">
        <p class="form-control-static mt-3  ">0 min.</p>
      </div>
    </div>
  </form>
</div>





@endsection
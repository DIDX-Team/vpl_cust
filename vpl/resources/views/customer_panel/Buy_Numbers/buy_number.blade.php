@extends('layout')
@section('title', 'Buy Number')

@section('buy_number')
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<br>
<br>
<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="container-fluid">
            <div class="row m-3">
                <div class="col-md-12 mt-0 mx-auto equal-width">
                    <div class="card rounded">
                        <div class="card-body mt-2 mb-1 mx-auto">
                            <div class="media mr-5">
                                <img src="images/play.png" class="mr-5" alt="Image 1" height="100px">
                                <div class="media-body mt-3">
                                    <h3 class="mt-0">Watch Video Tutorial</h3>
                                    <h3 class="text-center"><a class="a_tag " href="#">How to Buy a Number?</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-lg-6 mx-auto">
                <div class="form-section">
                    <form id="searchForm" action="{{ url('api/get-did-area-data')}}" method="GET">
                        @csrf
                        <div class="form-group custom-dropdown">
                            <input type="text" class="form-control" id="dynamicOptionsInput" name="dynamicOptionsInput"
                                placeholder="Phone number">
                            <div id="dynamicOptionsContainer"></div>
                        </div>
                        <div class="or-divider d-flex align-items-center">
                            <div></div>
                            <span class="px-2">OR</span>
                            <div></div>
                        </div>
                        <div class="form-group">
                            <select class="form-select" id="countrySelect" name="countrySelect" required>
                                <option value="" selected>Select Country</option>
                                @foreach ($countries as $country)
                                <option value="{{ $country->code }}" data-show-form="{{ $country->code }}">
                                    {{ $country->code }} - {{ $country->name }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary" onclick="searchClicsked()">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="container pt-3 " id="secondFormContainer" style="display:;">
        <div class="row">
            <div class="col-md-12">

            <table class="table table-bordered originalTable" id="originalTable">
    <thead>
        <tr>
            <th scope="col">Area Code</th>
            <th scope="col">City/Area</th>
        </tr>
    </thead>
    <tbody>

    @php
    $countryId = $_GET['countrySelect'] ?? '';
    @endphp

        @if(is_array($AreaCode))
            @foreach($AreaCode as $key => $value)
                @if($key != 0 && is_array($value))
                <tr>
                    <td><a href="javascript:void(0);" onclick="submitAreaRequest('{{ $countryId }}', '{{ $value[0] }}')">{{$countryId }}-{{$value[0]}}</a></td>
                    <td><a href="javascript:void(0);" onclick="submitAreaRequest('{{ $countryId }}', '{{ $value[0] }}')">{{$value[1] ?? 'No City Found'}}</a></td>
                </tr>
                @endif
            @endforeach
        @endif
    </tbody>
</table>
<br>
<br>

<!-- Your existing HTML table structure -->
<table class="table table-bordered originalTable">
    <thead>
        <tr>
            <th><input type="checkbox" name="" id="selectAll"></th>
            <th scope="col">Number</th>
            <th scope="col">Area</th>
            <th scope="col">Country</th>
            <th scope="col">Monthly Charges</th>
            <th scope="col">Setup Cost</th>
            <th scope="col">Per Minute Charges</th>
            <th scope="col">Rating</th>
        </tr>
    </thead>
    <tbody>

    @if(is_array($apiData))
            @foreach($apiData as $key => $value)
                @if($key != 0 && is_array($value))
                <tr>
                    <td><input type="checkbox" class="checkbox"></td>
                    <td>{{$value[0]}}</td>
                    <td>{{$value[6]}}</td>
                    <td>{{$value[5]}}</td>
                    <td>{{$value[2]}}</td>
                    <td>{{$value[1]}}</td>
                    <td>{{$value[3]}}</td>
                    <td>{{$value[4]}}</td>
                </tr>
                @endif
            @endforeach
        @endif
        <tr>
    <td colspan="12" class="text-center">
      <div class="d-flex justify-content-right align-items-center">
        <input name="mm"type="radio"> &nbsp;&nbsp;Monthly
        <input  name="mm" class="ml-2" type="radio"> &nbsp;&nbsp;Annually
        <button class="btn btn-primary ml-4">Add Selected to Shopping Cart</button>
      </div>
    </td>
  </tr>
  <tr style="bgcolor:;">
          <td class="simple" style="align:left;" colspan="12">* Per Minute Receiving Charges After Free Minutes</td>
        </tr>
        <tr style="bgcolor:;">
          <td class="simple" style="align:left;" colspan="12">** (cannot be purchased in batch)</td>
        </tr>
           
    </tbody>
</table>

            </div>
        </div>
    </div>
</div>



<script>
    function submitAreaRequest(areaValue1, areaValue2) {
        // Create a dynamic form
        var form = document.createElement('form');
        form.method = 'post';
        form.action = '{{ url('/api/get-available-numbers') }}'; // Replace with your desired URL

        // Create a hidden input field for the first area value
        var areaInput1 = document.createElement('input');
        areaInput1.type = 'hidden';
        areaInput1.name = 'areaValue1';
        areaInput1.value = areaValue1;

        // Create a hidden input field for the second area value
        var areaInput2 = document.createElement('input');
        areaInput2.type = 'hidden';
        areaInput2.name = 'areaValue2';
        areaInput2.value = areaValue2;

        // Append the hidden inputs to the form
        form.appendChild(areaInput1);
        form.appendChild(areaInput2);

        // Append the form to the document body
        document.body.appendChild(form);

        // Submit the form
        form.submit();
    }
</script>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Select all checkbox
        const selectAllCheckbox = document.getElementById('selectAll');
        const checkboxes = document.querySelectorAll('.checkbox');

        // Function to toggle all checkboxes
        function toggleCheckboxes() {
            checkboxes.forEach(function(checkbox) {
                checkbox.checked = selectAllCheckbox.checked;
            });
        }

        // Event listener for select all checkbox
        selectAllCheckbox.addEventListener('change', function() {
            toggleCheckboxes();
        });

        // Event listener for individual checkboxes
        checkboxes.forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {
                // Check if all checkboxes are checked
                const allChecked = [...checkboxes].every(function(cb) {
                    return cb.checked;
                });

                // Update select all checkbox state
                selectAllCheckbox.checked = allChecked;
            });
        });
    });
</script>

@endsection

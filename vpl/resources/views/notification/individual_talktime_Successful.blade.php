<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>

<script>
    @if($paymentSuccess)
        swal({
            title: "Successful",
            text: "TalkTime Individual Number Added!",
            icon: "success",
            closeOnClickOutside: false,
        }).then((value) => {
            window.location.href = "{{ route('view_all_numbers') }}";
        });
    @else
        swal({
            title: "Error",
            text: "Not successful Please Add funds to your account!",
            icon: "error",
            closeOnClickOutside: false,
        }).then((value) => {
            window.location.href = "{{ route('add_funds') }}";
        });
    @endif
</script>

</body>
</html>

{{-- HEAD  --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>OC - Online Course</title>
    <meta name="robots" content="index, follow" />
    <meta name="description" content="Outeli Fashion eCommerce Bootstrap 5 Template is a stunning e-commerce website template that is the best choice for any online store.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}">

    <!-- All CSS is here
	============================================ -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/proximanova.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/line-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/slick.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/slinky.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/easyzoom.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/select2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/aos.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <script>
        function showMe () {
        var checkbox = document.getElementsByName("sertif");
        var counter=0;
        for(var i=0;i<checkbox.length;i++) {
            if(checkbox[i].checked){
                counter++;
            }
            if(counter==checkbox.length)
            {
                document.getElementById('sertifikat').style.display = "block";
            }
        }
}
    </script>
    <!-- CSS only -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> --}}
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
   <link href="{{ asset('css/payslip.css') }}" rel="stylesheet">

</head>
<body>
@include('components.header')
<div class="main-content">
<div style="margin-top: -1.2%;" class="row">
<div class="col-3 sidebar">
@include('components.sidebar')
</div>
<div class="col-3"></div>
<div class="col-9  content">
<!-- SET Dashboard-->
@include('components.flash')

@yield('body')
</div>
</div>
</div>
 <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>   
</body>
</html>
<style> 
        ::-webkit-scrollbar{
            display: none;
        }
        .content{
            overflow-x: hidden;
            overflow-y: scroll;
        } 
        header{
            position:fixed;
            left:0; 
            top: 0;
            width: 100%;
            z-index: 100;
        }
        .sidebar{
            position:fixed;
            left:0; 
            top: 12.5% !important;
            height: 100%;
            padding-left: 0 !important;
        }
        .content{
            margin-top: 8%;
            margin-left:-0.5%;
            padding-bottom: 3%;
        }
    </style>

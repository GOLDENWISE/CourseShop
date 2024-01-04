<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <title>{{ $title }}</title>
  
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  @auth
    
    @if(Auth::user()->admin->status)
  
      <link href="{{  asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
      <link rel="stylesheet" href="{{ asset('css/sb-admin-2.min.css') }}" type="text/css"> 
      <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
      <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
      <link href="<?php echo asset('vendor/datatables/dataTables.bootstrap4.min.css')?>" rel="stylesheet">

      @if(Request::routeIs(['purchase-data', 'user-data']))

        <style>
          #wrapper {
              transition: all 0.3s ease-in-out;
          }
        </style>

      @endif  
    
    @endif
  
  @endauth

</head>
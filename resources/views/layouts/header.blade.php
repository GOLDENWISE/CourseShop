<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <title>{{ $title }}</title>
  
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  @auth
    
    @if(Request::routeIs(['admin.index', 'course.edit','course.create','purchase-data', 'course-data']))
  
      <link rel="stylesheet" href="{{ asset('css/sb-admin-2.min.css') }}" type="text/css"> 
      <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
      <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
      <link href="{{  asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

      @if(Request::routeIs(['purchase-data', 'user-data']))

        <style>
          #wrapper {
              transition: all 0.3s ease-in-out;
          }
        </style>

      @endif  
    
    @elseif(Request::routeIs('langganan.store'))

      <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}"></script>

    @endif
  
  @endauth

</head>
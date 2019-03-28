<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @if(Auth()->user())
    <title> {{env('APP_NAME')}} | {{Auth()->user()->name}} </title>
    @else
    <title>{{env('APP_NAME')}}</title>
    @endif

    <!-- Bootstrap -->
    <link href="{{asset('backend/plugins/bootstrap/dist/css/bootstrap.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('backend/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('backend/plugins/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('backend/plugins/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{asset('backend/css/custom.css')}}" rel="stylesheet">
    <link href="{{asset('backend/plugins/iCheck/skins/all.css')}}" rel="stylesheet">
    <link href="{{asset('backend/plugins/toastr/toastr.css')}}" rel="stylesheet">
    <link href="{{asset('backend/plugins/wiked/wickedcss.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/plugins/animate.css/animate.min.css')}}" rel="stylesheet">
    @yield('scripts')

</head>

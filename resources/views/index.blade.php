@extends('layouts.master')

@section('content')
    @if (! Auth::check())
        <h1>Project Management App</h1>

        <p>Let's Manage the project.</p>

        <p><img src="{{ asset('images/projectmanagement.gif') }}" style="width:30%;height:30%;margin-left:30%" /></p>
        
        <a class="btn btn-large btn-info" href="/auth/register" style="margin-left: 30%;">Sign Up</a>

        <p class="login" style="margin-left: 30%;">Already signed up? <a class="btn btn-large btn-info" href="/auth/signin">Login</a></p>
    @endif

 
@if ( Auth::check())
        <div class="container-fluid">
          <div class="row">
            @include('layouts.partial.sidebar')
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
              <h1 class="page-header">Dashboard</h1>

              <h2 class="sub-header">Projects</h2>
              <a class="btn btn-info" href="{{ route('projects.create') }}">New Project</a>
            </div>
          </div>
        </div>
    @endif
@stop
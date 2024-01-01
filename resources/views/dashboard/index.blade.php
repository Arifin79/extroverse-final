@extends('dashboard.layout.main')

@section('content')

<input type="checkbox" id="check">
    <div class="sidebar">
      <div class="profile_info">
        <img src="{{ URL::to('img/profile.jpeg') }}" class="profile_image" alt="">
        <h4>Arifin</h4>
      </div>
      <li class="{{ set_active(['dashboard']) }}"> <a href="{{ route('dashboard') }}"><i class="fa fa-home" style="color: #0066FF;"></i> <span>Dashboard</span></a> </li>
      <li class="{{ set_active(['assignment']) }}"> <a href="{{ route('assignment') }}"><i class="fa fa-inbox" style="color: #0066FF;"></i> <span>Assignment</span></a> </li>
      <li class="{{ set_active(['information']) }}"> <a href="{{ route('information') }}"><i class="fa fa-envelope" style="color: #0066FF;"></i> <span>Information</span></a> </li>
      <li class="{{ set_active(['team']) }}"> <a href="{{ route('team') }}"><i class="fa fa-users" style="color: #0066FF;"></i> <span>Teams</span></a> </li>
      <li class="{{ set_active(['profile']) }}"> <a href="{{ route('profile') }}"><i class="fa fa-user" style="color: #0066FF;"></i> <span>Profile</span></a> </li>
</div>

{{-- <div class="text-wrapper-6">Tugas</div>
    <div class="frame">
      <div class="group">
        <div class="overlap-group">
          <div class="text-wrapper">Search Here...</div>
          <img class="vector" src="img/profile.png" />
        </div>
      </div>
      <div class="overlap-wrapper">
        <div class="overlap">
          <img class="image-wrapper" src="img/pp.jpeg"/>
          <div class="div">#001 Desain Prototype</div>
          <div class="text-wrapper-2">Himatif Polindra</div>
          <div class="text-wrapper-3">Deadline 12/11/2023</div>
          <img class="clock" src="img/1.png" />
        </div>
      </div>
    <div class="text-wrapper-7">130 Results</div>
</div> --}}

@endsection

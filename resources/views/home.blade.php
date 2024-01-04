@extends('layouts.app')

@section('content')

<input type="checkbox" id="check">
    <div class="sidebar">
      <div class="profile_info">
        <img src="{{ asset('images/' . Auth::user()->image)}}" class="profile_image" alt="">
        <h4>{{ Auth::user()->name }}</h4>
      </div>
      <li class="{{ set_active(['dashboard']) }}"> <a href="{{ route('dashboard') }}"><i class="fa fa-home" style="color: #0066FF;"></i> <span>Dashboard</span></a> </li>
      <li class="{{ set_active(['assignment']) }}"> <a href="{{ route('assignment') }}"><i class="fa fa-inbox" style="color: #0066FF;"></i> <span>Assignment</span></a> </li>
      <li class="{{ set_active(['information']) }}"> <a href="{{ route('information') }}"><i class="fa fa-envelope" style="color: #0066FF;"></i> <span>Information</span></a> </li>
      <li class="{{ set_active(['team']) }}"> <a href="{{ route('team') }}"><i class="fa fa-users" style="color: #0066FF;"></i> <span>Teams</span></a> </li>
      <li class="{{ set_active(['profile']) }}"> <a href="{{ route('profile') }}"><i class="fa fa-user" style="color: #0066FF;"></i> <span>Profile</span></a> </li>
</div>

<div class="dasboard">
    <div class="div">
        <div class="frame">
            <div class="overlap-group">
            <div class="rectangle"></div>
            <div class="text-wrapper">Tugas</div>
            @if ($assignment->isNotEmpty())
            <div class="text-wrapper-4">{{ $assignment->first()->id }}</div>
            @endif
            </div>
            <div class="overlap">
            <div class="text-wrapper-3">Informasi</div>
            <div class="rectangle-2"></div>
            @if ($information->isNotEmpty())
            <div class="text-wrapper-4">{{ $information->first()->id }}</div>
            @endif
            </div>

            <div class="overlap-2">
            <div class="text-wrapper">Karyawan</div>
            <div class="rectangle"></div>
            <div class="text-wrapper-2">{{ Auth::user()->id }}</div>
            </div>
            </div>
        <div class="text-wrapper-5">Dashboard</div>
    </div>
</div>

@endsection

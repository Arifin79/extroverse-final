@extends('admin.profile.layout.main')

@section('content')

<div class="text-wrapper-6">Profile</div>
    <div class="frame">
      <div class="group">
        <div class="overlap-group">
          <div class="rectangle"></div>
          <div class="div"></div>
          <div class="text-wrapper">{{ Auth::user()->name }}</div>
        </div>
        <div class="text-wrapper-2">Your Name</div>
      </div>
      <div class="group-2">
        <div class="overlap-group">
          <div class="rectangle"></div>
          <div class="div"></div>
          <div class="text-wrapper-3">{{ Auth::user()->job_desc }}</div>
        </div>
        <div class="text-wrapper-2">Job Position</div>
      </div>
      <div class="group-3">
        <div class="overlap-group">
          <div class="rectangle"></div>
          <div class="div"></div>
          <div class="text-wrapper">{{ Auth::user()->email }}</div>
        </div>
        <div class="text-wrapper-2">Email Address</div>
      </div>
      <div class="group-4">
        <div class="overlap-group">
          <div class="rectangle"></div>
          <div class="div"></div>
          <div class="text-wrapper">{{ Auth::user()->phone }}</div>
        </div>
        <div class="text-wrapper-2">Phone</div>
      </div>
      <div class="overlap"><img class="account" src="{{ asset('images/' . Auth::user()->image)}}"/></div>
      <div class="overlap-wrapper">
        <div class="div-wrapper"><div class="text-wrapper-4">Upload a picture</div></div>
      </div>
      <div class="group-5">
        <div class="div-wrapper"><div class="text-wrapper-6">Save</div></div>
      </div>
</div>

@endsection

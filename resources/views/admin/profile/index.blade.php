@extends('admin.profile.layout.main')

@section('content')

<div class="text-wrapper-6">Profile</div>
    <div class="frame">
    <form method="post" action="{{ route('admin.profile.update',auth()->id()) }}" enctype="multipart/form-data"
        class="needs-validation"
        role="form"
        novalidate>
      <div class="group">
        <div class="overlap-group">
          <div class="rectangle"></div>
          <div class="div"></div>
          <input class="div" type="text" id="name" name="name" value="{{ Auth::user()->name }}">
        </div>
        <div class="text-wrapper-2">Your Name</div>
      </div>
      <div class="group-2">
        <div class="overlap-group">
          <div class="rectangle"></div>
          <div class="div"></div>
          <input class="div" type="text" name="name" value="{{ Auth::user()->job_desc }}">
        </div>
        <div class="text-wrapper-2">Job Position</div>
      </div>
      <div class="group-3">
        <div class="overlap-group">
          <div class="rectangle"></div>
          <div class="div"></div>
          <input class="div" value="{{ Auth::user()->email }}">
        </div>
        <div class="text-wrapper-2">Email Address</div>
      </div>
      <div class="group-4">
        <div class="overlap-group">
          <div class="rectangle"></div>
          <div class="div"></div>
          <input class="div" value="{{ Auth::user()->phone }}">
        </div>
        <div class="text-wrapper-2">Phone</div>
      </div>
      <div class="overlap"><img class="account" src="{{ asset('images/' . Auth::user()->image)}}"/></div>
      <div class="overlap-wrapper">
        <button class="div-wrapper"><div class="text-wrapper-4">Upload a picture</div></button>
      </div>
      <div class="group-5">
        <button type="submit" class="div-wrapper"><div class="text-wrapper-6">Save</div></button>
      </div>
    </form>
</div>

@endsection

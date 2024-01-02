@extends('dashboard.layout.main')

@section('content')

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

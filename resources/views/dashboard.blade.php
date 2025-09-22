@extends('layouts.app')

@section('content')
<div class="grid justify-items-center w-screen bg-white">
  <div class="relative w-[1440px] h-[1024px] bg-white">

    <!-- Top Navbar -->
    <div class="absolute w-[1157px] h-20 top-0 left-[283px]">
      @include('components.top-navbar')
    </div>
    
    <!-- Sidebar -->
    <div class="absolute top-10 left-7">
      @include('components.sidebar')
    </div>

    <!-- Main Content -->
    <div class="absolute top-[103px] left-[301px]">
      @include('components.main-content')
    </div>

    <!-- Notification -->
    <div class="absolute top-[103px] left-[950px]">
      @include('components.notification')
    </div>
  </div>
</div>
@endsection

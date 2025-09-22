@extends('layouts.app')

@section('content')
<div class="min-h-screen w-screen bg-white flex justify-center items-start">
  {{-- Container untuk sidebar + main content --}}
  <div class="flex w-full max-w-[1440px]">
    {{-- Sidebar --}}
    <div class="w-[260px]">
      @include('components.sidebar')
    </div>

    {{-- Main area --}}
    <div class="flex-1 flex flex-col bg-white">
      {{-- Top Navbar --}}
      <div class="h-20">
        @include('components.top-navbar')
      </div>    

      {{-- Content --}}
      <div class="flex-1 p-6 overflow-auto">
        <x-main-card>
            <x-breadcrumbs :items="['Lapangan Usaha','Unggah Tabel']" />
            <x-header-section />
            <x-tab-navigation :tabs="['Distribusi','Indeks Implisit','Laju Implisit','YtoY','QtQ','CtoC']" />
            <x-upload-area />
            <x-upload-queue />
        </x-main-card>
      </div>
    </div>
  </div>
</div>
@endsection

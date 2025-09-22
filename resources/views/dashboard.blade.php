@extends('layouts.app')

@section('content')
<div class="flex w-full min-h-screen bg-white">
  {{-- Sidebar kiri --}}
  <aside class="w-64 bg-gradient-to-b from-[#0C2556] to-[#005C97] text-white shadow-xl">
    @include('components.sidebar')
  </aside>

  {{-- Kolom kanan --}}
  <div class="flex-1 flex flex-col">
    {{-- Top Navbar --}}
    <header class="h-20 bg-white shadow flex items-center px-6">
      @include('components.top-navbar')
    </header>

    {{-- Konten utama --}}
    <main class="flex-1 overflow-auto px-6 py-4">
      {{-- Breadcrumbs dsb --}}
      <x-main-card>
      </x-main-card>
    </main>

    {{-- Notification kalau perlu di bawah konten --}}
    <div class="px-6 py-4">
      @include('components.notification')
    </div>
  </div>
</div>
@endsection

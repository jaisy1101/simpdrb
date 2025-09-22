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
            {{-- Breadcrumbs --}}
            <x-breadcrumbs :items="['Lapangan Usaha','Daftar Tabel']" />

            {{-- Header Section --}}
            <x-header-section />

            {{-- Tab Navigation --}}
            <x-tab-navigation :tabs="['Distribusi','Indeks Implisit','Laju Implisit','YtoY','QtQ','CtoC']" />

            {{-- Table Section --}}
            <div class="overflow-x-auto mt-4">
                <table class="min-w-full border border-gray-300 rounded-lg overflow-hidden">
                    <thead class="bg-[#0a3d62] text-white text-sm">
                        <tr>
                            <th class="px-4 py-2 text-left">Kategori</th>
                            <th class="px-4 py-2 text-center">I</th>
                            <th class="px-4 py-2 text-center">II</th>
                            <th class="px-4 py-2 text-center">III</th>
                            <th class="px-4 py-2 text-center">IV</th>
                            <th class="px-4 py-2 text-center">Total</th>
                        </tr>
                    </thead>
                    <tbody class="text-sm bg-white divide-y divide-gray-200">
                        <tr class="font-bold bg-gray-100">
                            <td class="px-4 py-2">A. Pertanian, Kehutanan, dan Perikanan</td>
                            <td colspan="5"></td>
                        </tr>
                        <tr>
                            <td class="px-6 py-2">1. Pertanian, Peternakan, Perburuan dan Jasa Pertanian</td>
                            <td colspan="5"></td>
                        </tr>
                        <tr>
                            <td class="px-8 py-2">a. Tanaman Pangan</td>
                            <td colspan="5"></td>
                        </tr>
                        <tr>
                            <td class="px-8 py-2">b. Tanaman Hortikultura Semusim</td>
                            <td colspan="5"></td>
                        </tr>
                        {{-- Tambahkan baris lain sesuai kebutuhan --}}
                    </tbody>
                </table>
            </div>
        </x-main-card>
      </div>
    </div>
  </div>
</div>
@endsection

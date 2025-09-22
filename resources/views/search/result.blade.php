@extends('layouts.app')

@section('content')
<div class="p-6">
  <h1 class="text-xl font-bold">Hasil Pencarian</h1>
  @if ($keyword)
    <p class="mt-2">Kamu mencari: <span class="font-semibold text-blue-600">{{ $keyword }}</span></p>
  @else
    <p class="mt-2 text-gray-500">Belum ada kata kunci.</p>
  @endif
</div>
@endsection

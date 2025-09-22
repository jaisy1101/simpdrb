<div 
    x-data="{ pengeluaranExpanded: false, lapanganUsahaExpanded: false }" 
    class="w-[250px] h-[950px] rounded-[40px] overflow-hidden shadow-[0px_21px_21px_1px_#2d1c4787] 
            bg-gradient-to-b from-[#003e5e] to-[#0081c4] text-white"
>
  <!-- Logo -->
  <div class="w-[133px] h-20 mx-auto mt-10">
    <img 
      src="{{ asset('images/pngegg-4.png') }}" 
      alt="Logo" 
      class="w-[133px] h-20 object-cover mx-auto" 
    />
  </div>

  <!-- Title -->
  <div class="text-white font-extrabold text-[13px] text-center mt-6">
    BPS Provinsi Sulawesi Selatan
  </div>

  <!-- Menu Sidebar -->
  <nav class="mt-8 flex flex-col gap-2 px-4">

    <!-- Dashboard -->
    <a href="{{ route('dashboard') }}" 
      class="flex items-center gap-3 px-3 py-2 rounded hover:bg-[#334155] transition">
        <img src="{{ asset('icons/beranda.svg') }}" alt="Dashboard" class="w-6 h-6"/>
        <span>Dashboard</span>
    </a>

    <!-- PENGELUARAN -->
    <div class="mt-2">
        <button 
            @click="pengeluaranExpanded = !pengeluaranExpanded"
            class="flex items-center justify-between w-full px-3 py-2 rounded hover:bg-[#334155] transition"
        >
            <span class="flex items-center gap-3">
                <img src="{{ asset('icons/pengeluaran.svg') }}" alt="Pengeluaran" class="w-6 h-6"/>
                <span>Pengeluaran</span>
            </span>
            <span>
                <img src="{{ asset('icons/arrow.svg') }}" alt="Expand" class="w-3 h-3 transition-transform duration-200" :class="{ 'rotate-90': pengeluaranExpanded }"/>
            </span>
        </button>

        <div x-show="pengeluaranExpanded" x-transition class="ml-8 mt-2 flex flex-col gap-2">
            <a href="{{ route('pengeluaran.upload') }}" class="flex items-center gap-2 px-3 py-1 hover:text-blue-400">
                <span class="w-2.5 h-2.5 rounded-full bg-[#2D95C9]"></span>
                <span>Upload Tabel Pokok</span>
            </a>
            <a href="{{ route('pengeluaran.daftar') }}" class="flex items-center gap-2 px-3 py-1 hover:text-orange-400">
                <span class="w-2.5 h-2.5 rounded-full bg-[#E18939]"></span>
                <span>Daftar Tabel Pokok</span>
            </a>
            <a href="{{ route('pengeluaran.perubahan') }}" class="flex items-center gap-2 px-3 py-1 hover:text-green-400">
                <span class="w-2.5 h-2.5 rounded-full bg-[#75B547]"></span>
                <span>Perubahan Nilai</span>
            </a>
            <a href="{{ route('pengeluaran.hasil') }}" class="flex items-center gap-2 px-3 py-1 hover:text-red-400">
                <span class="w-2.5 h-2.5 rounded-full bg-[#FF0000]"></span>
                <span>Hasil Konserda</span>
            </a>
        </div>
    </div>

    <!-- LAPANGAN USAHA -->
    <div class="mt-2">
        <button 
            @click="lapanganUsahaExpanded = !lapanganUsahaExpanded"
            class="flex items-center justify-between w-full px-3 py-2 rounded hover:bg-[#334155] transition"
        >
            <span class="flex items-center gap-3">
                <img src="{{ asset('icons/lapangan_usaha.svg') }}" alt="Lapangan Usaha" class="w-6 h-6"/>
                <span>Lapangan Usaha</span>
            </span>
            <span>
                <img src="{{ asset('icons/arrow.svg') }}" alt="Expand" class="w-3 h-3 transition-transform duration-200" :class="{ 'rotate-90': lapanganUsahaExpanded }"/>
            </span>
        </button>

        <div x-show="lapanganUsahaExpanded" x-transition class="ml-8 mt-2 flex flex-col gap-2">
            <a href="{{ route('lapangan.upload') }}" class="flex items-center gap-2 px-3 py-1 hover:text-blue-400">
                <span class="w-2.5 h-2.5 rounded-full bg-[#2D95C9]"></span>
                <span>Unggah Tabel</span>
            </a>
            <a href="{{ route('lapangan.daftar') }}" class="flex items-center gap-2 px-3 py-1 hover:text-orange-400">
                <span class="w-2.5 h-2.5 rounded-full bg-[#E18939]"></span>
                <span>Daftar Tabel</span>
            </a>
            <a href="{{ route('lapangan.perubahan') }}" class="flex items-center gap-2 px-3 py-1 hover:text-green-400">
                <span class="w-2.5 h-2.5 rounded-full bg-[#75B547]"></span>
                <span>Perubahan Nilai</span>
            </a>
            <a href="{{ route('lapangan.hasil') }}" class="flex items-center gap-2 px-3 py-1 hover:text-red-400">
                <span class="w-2.5 h-2.5 rounded-full bg-[#FF0000]"></span>
                <span>Hasil Konserda</span>
            </a>
        </div>
    </div>

    <!-- Monitoring -->
    <a href="{{ route('monitoring') }}" 
      class="flex items-center gap-3 px-3 py-2 rounded hover:bg-[#334155] transition">
        <img src="{{ asset('icons/monitoring.svg') }}" alt="Monitoring" class="w-6 h-6"/>
        <span>Monitoring</span>
    </a>

    <!-- Forum -->
    <a href="{{ route('forum') }}" 
      class="flex items-center gap-3 px-3 py-2 rounded hover:bg-[#334155] transition">
        <img src="{{ asset('icons/forum.svg') }}" alt="Forum" class="w-6 h-6"/>
        <span>Forum</span>
    </a>

    <!-- Operator -->
    <a href="{{ route('operator') }}" 
      class="flex items-center gap-3 px-3 py-2 rounded hover:bg-[#334155] transition">
        <img src="{{ asset('icons/operator.svg') }}" alt="Operator" class="w-6 h-6"/>
        <span>Operator</span>
    </a>
  </nav>
</div>

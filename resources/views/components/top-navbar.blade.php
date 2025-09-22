<header class="relative w-[1157px] h-20 bg-white rounded-[50px_40px_40px_50px]" role="banner">
  <!-- Time & Date -->
  <div class="absolute w-[309px] h-[18px] top-[31px] left-[37px]">
    <time class="absolute w-[90px] h-[18px] top-0 left-[218px] font-semibold text-[#00000099] text-[15.2px] whitespace-nowrap"
          datetime="{{ now()->format('H:i:s') }}">
      {{ now()->format('H:i:s') }}
    </time>

    <time class="absolute w-[234px] h-[18px] top-0 left-0 font-semibold text-[#00000099] text-[15.2px] whitespace-nowrap"
          datetime="{{ now()->toDateString() }}">
      {{ now()->translatedFormat('l, d F Y') }}
    </time>
  </div>

  <!-- Search -->
  <div class="absolute w-[502px] h-8 top-[25px] left-[369px]">
        <form class="absolute w-[502px] h-8 top-0 left-0" role="search" method="GET" action="{{ route('search') }}">
        <div class="relative w-[500px] h-8 bg-[#e6e6e6] rounded-[5px]">
            <label for="search-input" class="sr-only">Cari</label>
            <input
            id="search-input"
            type="search"
            name="q"    
            placeholder="Cari"
            class="absolute w-full h-full top-0 left-0 bg-transparent pl-[50px] pr-4 opacity-60 
                    font-semibold text-[#000000b2] text-xs tracking-[0.50px] leading-[13px] 
                    placeholder:text-[#000000b2] focus:outline-none focus:ring-2 
                    focus:ring-blue-500 focus:ring-opacity-50 rounded-[5px]"
            />
        </div>
        </form>


    <div class="absolute w-[13px] h-4 top-2 left-2 opacity-70 pointer-events-none" aria-hidden="true">
      <div class="relative w-3.5 h-[18px] -top-px -left-px">
        <img class="absolute w-3 h-[15px] top-0 left-0" src="{{ asset('images/Icon.svg') }}" alt="">
      </div>
    </div>
  </div>

  <!-- User Navigation -->
  <nav class="inline-flex items-center gap-3 absolute top-5 left-[882px]" role="navigation" aria-label="User navigation">
    <div class="flex w-[156px] items-center justify-end gap-[12.63px]">
      <span class="font-medium text-[#000000b2] text-[15.2px]">Halo BPS</span>
      <img class="w-[60]px] h-[35px] object-cover rounded-full" src="{{ asset('images/ellipse-1.svg') }}" alt="User profile">
    </div>

    <button class="w-[28px] h-[35px] bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500 rounded transition-colors duration-200"
            aria-label="Notifications" type="button">
      <img class="w-[27px] h-[35px]" src="{{ asset('images/Setting.svg') }}" alt="Notifications">
    </button>

    <img 
    src="{{ asset('images/logout-04.svg') }}" 
    alt="Logout" 
    class="w-[35px] h-[35px] hover:opacity-80 cursor-pointer"
    />

    </form>
  </nav>
</header>

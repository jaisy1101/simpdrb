<nav class="flex space-x-4 bg-gray-200 rounded-lg p-2 mb-4">
    @foreach ($tabs as $tab)
        <button class="px-4 py-2 rounded-md hover:bg-white hover:shadow">
            {{ $tab }}
        </button>
    @endforeach
</nav>

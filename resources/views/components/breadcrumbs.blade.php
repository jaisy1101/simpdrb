<nav class="text-sm text-gray-600 mb-4">
    <ol class="flex space-x-2">
        @foreach ($items as $item)
            <li>
                <span>{{ $item }}</span>
                @if (!$loop->last)
                    <span class="mx-1">/</span>
                @endif
            </li>
        @endforeach
    </ol>
</nav>

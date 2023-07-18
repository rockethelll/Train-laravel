<div class="inline-block relative">
    <input class="bg-gray-200 text-gray-700 border-2 focus:outline-none placeholder-gray-400 pl-3 pr-10 py-1
    rounded-full mr-3 w-56"
           placeholder="Rechercher une mission ..." wire:model="query">
    <svg class="w-5 h-5 text-gray-400 absolute top-0 right-0 mr-5 mt-2"
         xmlns="http://www.w3.org/2000/svg"
         fill="none"
         viewBox="0 0 24 24"
         stroke-width="1.5"
         stroke="currentColor"
         >
        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
    </svg>

    <div class="absolute rounded bg-gray-100 text-base w-56 mt-1">
    @if (strlen($query) > 2)
        @if (count($jobs) > 0)
            @foreach($jobs as $index => $job)
                <p class="p-1 {{ $index === $selectedIndex ? 'text-green-500' : '' }}">{{ $job->title }}</p>
            @endforeach
        @else
            <span class="text-orange-500 p-1">0 résultat pour "{{ $query }}"</span>
        @endif
    @endif
    </div>
</div>

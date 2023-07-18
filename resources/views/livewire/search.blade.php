<div class="inline-block relative">
    <input class="bg-gray-200 text-gray-700 border-2 focus:outline-none placeholder-gray-400 pl-3 pr-10 py-1
    rounded-full mr-3"
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

    @if (strlen($query) > 2)
    <div>
        @if (count($jobs) > 0)
            @foreach($jobs as $job)
                <p>{{ $job->title }}</p>
            @endforeach
        @else
            <span>0 résultat pour {{ $query }}</span>
        @endif
    </div>
    @endif
</div>

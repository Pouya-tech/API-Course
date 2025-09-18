    {{-- Header --}}
    <header class="bg-slate-500 text-white">
        @if (request()->is(['items/*']))
            <div class="flex justify-center px-4 py-4">
                <header class="antialiased font-bold">لیست محصولات</header>
            </div>
        @endif
    </header>

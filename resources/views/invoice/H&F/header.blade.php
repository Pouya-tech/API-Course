    {{-- Header --}}
    <header class="bg-slate-500 text-white">
        @if (!request()->is(['invoice/show/*']))
            <div class="flex justify-center px-4 py-4">
                <header class="antialiased font-bold">فرم فاکتور</header>
            </div>
        @endif
    </header>

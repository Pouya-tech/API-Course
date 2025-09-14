    {{-- Header --}}
    <header class="bg-blue-600 text-white">



        <div class="container mx-auto px-4 py-4 flex justify-between items-center border-b-2">

            @if (request()->is(['invoice/index']))
            <p>محصولات</p>
            @endif

        </div>
    </header>

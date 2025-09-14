    {{-- Footer --}}
    <footer class="bg-gray-900 text-white py-4">
        @if (!request()->is(['invoice/show']))
            <div class="text-center text-sm">&copy; {{ date('Y') }} Users. All rights reserved.</div>
        @endif
    </footer>

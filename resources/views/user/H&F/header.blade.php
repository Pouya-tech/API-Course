    {{-- Header --}}
    <header class="bg-blue-600 text-white">



        <div class="container mx-auto px-4 py-4 flex justify-between items-center">

            <h1 class="text-lg font-bold">
                {{ request()->is('user/register') ? 'کاربر' : ' ' }}
            </h1>


            @if (!request()->is(['user/register', 'user/login']))
                <form action="{{ route('user.logout') }}" method="POST" class="ml-auto">
                    @csrf
                    <button type="submit"
                        class="bg-red-600 text-slate-200 px-4 py-2 rounded shadow hover:bg-gray-100 transition">
                        خروج
                    </button>
                </form>
            @endif


            @if (!request()->is('user/index'))
                <a href="{{ route('user.register') }}"
                    class="bg-white text-blue-600 px-4 py-2 rounded shadow hover:bg-gray-100 transition">
                    ساخت اکانت</a>
            @endif

        </div>
    </header>

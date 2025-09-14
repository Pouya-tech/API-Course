            <div class="{{ $LayoutClass ?? '' }}">

                @if ($lable)
                    <label  class="block font-semibold text-gray-700">{{ $lable }}</label>
                    <textarea name="content" rows="5"  {{ $attributes->merge(['class' => 'w-full mt-1 px-4 py-2 border rounded focus:ring']) }}>  </textarea>
                @endif

            </div>

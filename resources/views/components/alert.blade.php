<div class="rounded-md {{ $type === 'success' ? 'bg-green-800' : ''}} , {{ $type === 'error' ? 'bg-red-800' : '' }} p-4">
    <div class="flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50"
        role="alert">
        <svg class="w-5 h-5 me-2" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd"
                d="M10 18a8 8 0 100-16 8 8 0 000 16zm-1.293-6.707a1 1 0 011.414 0L13 13.586l2.293-2.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0L9 12.414a1 1 0 010-1.414z"
                clip-rule="evenodd" />
        </svg>
        <span class="sr-only">Success</span>
        <div>
            <span class="font-medium">Success!</span> Your action was completed successfully.
        </div>
    </div>
</div>

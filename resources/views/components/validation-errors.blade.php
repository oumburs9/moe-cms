<div x-data="{ showAlert: {{ $errors->any() ? true : false }} }" class="absolute inset-x-auto z-50 top-3 right-3">
    <div x-cloak x-show="showAlert" x-init="setTimeout(() => showAlert = false, 6000)"
        class="relative px-5 py-3 mb-4 rounded-lg shadow-sm bg-red-50"
        x-transition:enter="transition ease-out duration-300 translate-x-full"
        x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100 translate-x-0"
        x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-90 translate-x-full">
        <button class="absolute z-20 flex items-center p-1 bg-white border rounded top-3 right-3 "
            @click="showAlert = false" aria-label="Close">
            <i class="flex text-sm fi fi-rr-cross text-mred/90"></i>
        </button>

        <div class="font-semibold text-mred">
            {{ __('Whoops! Something went wrong.') }}
        </div>

        <ul class="mt-3 text-sm list-disc list-inside text-mred/90">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>

        <span class="absolute inset-x-0  top-0 h-1.5 bg-mred animate-life rounded-t-lg"></span>
    </div>
</div>
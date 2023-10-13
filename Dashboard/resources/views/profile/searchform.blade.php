<x-jet-form-section submit="SearchForm">
    <h1 class="text-3xl text-slate-800 dark:text-slate-100 font-bold mb-6">{{ __('Confirm access') }} ✨</h1>
    <div >
        
        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('two-factor.login') }}">
            @csrf
            <div class="space-y-4">
             
                <div x-show="search">
                    <x-jet-label for="recovery_code" value="{{ __('Recovery Code') }}" />
                    <x-jet-input id="recovery_code" type="text" name="recovery_code" x-ref="recovery_code" autocomplete="one-time-code" />
                </div>
            </div>
            
        </form>
    </div>
</x-app-layout>

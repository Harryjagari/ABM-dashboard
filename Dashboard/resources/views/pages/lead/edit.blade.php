
<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                @if (session('status'))
                    <h6 class="alert alert-success">{{ session('status') }}</h6>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h4>Edit & Update 
                            <a href="{{ url('lead.view') }}" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                    <form method="POST" action="{{ route('leads.update', ['id' => $record->id]) }}">
                            <x-slot name="form">
                                    @csrf
                                    @method('PUT')
                                    <!-- Name -->
                                    <div class="">
                                        <div class="col-span-2 sm:col-span-2 justify-center">
                                            <x-jet-label for="Name" :value="__('Name')" />
                                            <x-jet-input id="Name" class="block mt-1 w-6/12" type="text" name="Name" :value="old('Name')" required autofocus autocomplete="Name" />
                                            <x-jet-input-error for="Name" class="mt-2" />
                                        </div>

                                        <!-- Email Address -->
                                        <div class="col-span-6 sm:col-span-4 justify-center">
                                            <x-jet-label for="Email" :value="__('Email')" />
                                            <x-jet-input id="Email" class="block mt-1 w-6/12" type="email" name="Email" :value="old('Email')" required autocomplete="Email" />
                                            <x-jet-input-error for="Email" class="mt-2" />
                                        </div>
                                        <!-- Email Address -->
                                        <div class="mt-4">
                                            <x-jet-label for="Address" :value="__('Address')" />
                                            <x-jet-input id="Address" class="block mt-1 w-6/12" type="text" name="Address" :value="old('Address')" required autocomplete="Address" />

                                        </div>        


                                        <!-- Email Address -->
                                        <div class="mt-4">
                                            <x-jet-label for="Phone" :value="__('Phone')" />
                                            <x-jet-input id="Phone" class="block mt-1 w-6/12" type="text" name="Phone" :value="old('Phone')" required autocomplete="Phone" />

                                        </div>

                                        <!-- Email Address -->
                                        <div class="mt-4">
                                            <x-jet-label for="Mobile" :value="__('Mobile')" />
                                            <x-jet-input id="Mobile" class="block mt-1 w-6/12" type="text" name="Mobile" :value="old('Mobile')" required autocomplete="Mobile" />

                                        </div>

                                        <!-- Email Address -->
                                        <div class="mt-4">
                                            <x-jet-label for="Website" :value="__('Website')" />
                                            <x-jet-input id="Website" class="block mt-1 w-6/12" type="text" name="Website" :value="old('Website')" required autocomplete="Website" />

                                        </div>

                                        <!-- Email Address -->
                                        <div class="mt-4">
                                            <x-jet-label for="Company" :value="__('Company')" />
                                            <x-jet-input id="Company" class="block mt-1 w-6/12" type="text" name="Company" :value="old('Company')" required autocomplete="Company" />

                                        </div>

                                        <!-- Email Address -->
                                        <div class="mt-4">
                                            <x-jet-label for="Inquiry_for" :value="__('Inquiry_for')" />
                                            <x-jet-input id="Inquiry_for" class="block mt-1 w-6/12" type="text" name="Inquiry_for" :value="old('Inquiry_for')" required autocomplete="Inquiry_for" />

                                        </div> 
                            </div>

                                    <div class="flex items-center justify-end mt-4">
                                        <x-jet-button class="ml-4">
                                            {{ __('Save') }}
                                        </x-jet-button>
                                    </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
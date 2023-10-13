<x-app-layout>

 
<div class="col-span-full xl:col-span-8 bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">
    <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">
        <h2 class="font-semibold text-slate-800 dark:text-slate-100">{{ __('Leads View') }}</h2>
    </header>
    <div class="p-3">

        <!-- Table -->
        <!-- <div class="overflow-x-auto">
            <form action="{{ route('leads.search') }}" method="GET"class="c955z">
                <label class="relative block">
                    <span class="sr-only">Search</span>
                    <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                        <svg class="h-5 w-5 fill-slate-300" viewBox="0 0 20 20"><!-- ... --></svg>
                    <!-- </span>
                    <input class="placeholder:italic placeholder:text-slate-400 block bg-white w-full border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="Search for anything..." type="text" name="search"/>
                </label>
            </form> --> 
           
            @if ($leads->count() > 0)
            <table class="table-auto w-full dark:text-slate-300">
                <!-- Table header -->
                <thead class="text-xs uppercase text-slate-400 dark:text-slate-500 bg-slate-50 dark:bg-slate-700 dark:bg-opacity-50 rounded-sm">
                    <tr>
                        <th class="p-2">
                            <div class="font-semibold text-left">Id</div>
                        </th>
                        <th class="p-2">
                            <div class="font-semibold text-center">Name</div>
                        </th>
                        <th class="p-2">
                            <div class="font-semibold text-center">Email</div>
                        </th>
                        <th class="p-2">
                            <div class="font-semibold text-center">Address</div>
                        </th>
                        <th class="p-2">
                            <div class="font-semibold text-center">Mobile</div>
                        </th>
                        <th class="p-2">
                            <div class="font-semibold text-center">Phone</div>
                        </th>
                        <th class="p-2">
                            <div class="font-semibold text-center">Website</div>
                        </th>
                        <th class="p-2">
                            <div class="font-semibold text-center">Company</div>
                        </th>
                        <th class="p-2">
                            <div class="font-semibold text-center">Inquiry for</div>
                        </th>
                        <th class="p-2">
                            <div class="font-semibold text-center">Action</div>
                        </th>
                    </tr>
                </thead>
                <!-- Table body -->
                <tbody class="text-sm font-medium divide-y divide-slate-100 dark:divide-slate-700">
                    <!-- Row -->
                    @foreach ($leads as $lead)
                    <tr>
                        <td class="p-2">
                            <div class="flex items-center">
                                <div class="text-slate-800 dark:text-slate-100">{{ $lead->id }}</div>
                            </div>
                        </td>
                        <td class="p-2">
                            <div class="text-center text-sky-500">{{ $lead->Name }}</div>
                        </td>
                        <td class="p-2">
                            <div class="text-center text-emerald-500">{{ $lead->Email }}</div>
                        </td>
                        <td class="p-2">
                            <div class="text-center text-sky-500">{{ $lead->Address }}</div>
                        </td>
                        <td class="p-2">
                            <div class="text-center text-sky-500">{{ $lead->Mobile }}</div>
                        </td>
                        <td class="p-2">
                            <div class="text-center text-sky-500">{{ $lead->Phone }}</div>
                        </td>
                        <td class="p-2">
                            <div class="text-center text-sky-500">{{ $lead->Website }}</div>
                        </td>
                        <td class="p-2">
                            <div class="text-center text-sky-500">{{ $lead->Company }}</div>
                        </td>
                        <td class="p-2">
                            <div class="text-center text-sky-500">{{ $lead->Inquiry_for }}</div>
                        </td>
                        <td class="p-2">
                            <div class="text-center text-sky-500">
                            <a href="{{route('leads.edit', $lead->id)}}">Edit</a> 
                            <a href="{{ route('leads.destroy', $lead->id) }}" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $lead->id }}').submit();">Delete</a>
                            <form id="delete-form-{{ $lead->id }}" action="{{ route('leads.destroy', $lead->id) }}" method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>


                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
                <p>No leads found.</p>
            @endif
        </div>
    </div>
</div>
</x-app-layout>

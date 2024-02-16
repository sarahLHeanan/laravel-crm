@include('partials.session-status')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Companies
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

            <div class="flex justify-end py-6">
                <a href="companies/create">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-4">
                        Add Company
                    </button>
                </a>
            </div>

            <div class="p-6 text-gray-900 dark:text-gray-100">
                @if(!$companies->isEmpty())
                    <!-- Uses https://tailwindcomponents.com/component/responsive-table -->
                    <table class="border-collapse w-full mb-4">
                        <thead>
                            <tr>
                                <th class="p-3 font-bold uppercase text-white bg-gray-800 border-b border-gray-300 hidden lg:table-cell">&nbsp;</th>
                                <th class="p-3 font-bold uppercase text-white bg-gray-800 border-b border-gray-300 hidden lg:table-cell">Company Name</th>
                                <th class="p-3 font-bold uppercase text-white bg-gray-800 border-b border-gray-300 hidden lg:table-cell">Email</th>
                                <th class="p-3 font-bold uppercase text-white bg-gray-800 border-b border-gray-300 hidden lg:table-cell">Website</th>
                                <th class="p-3 font-bold uppercase text-white bg-gray-800 border-b border-gray-300 hidden lg:table-cell">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($companies as $company)
                            <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                                <td class="w-full lg:w-auto text-white bg-gray-700 text-center py-2 lg:py-0 border-b block lg:table-cell relative lg:static">
                                    @if(isset($company->logo))
                                        <img width="150" height="150" class="m-0 m-auto" src="{{ $company->logo_full_path ?? ''}}" />
                                    @else
                                        No logo added
                                    @endif
                                </td>  
                                <td class="w-full lg:w-auto p-3 text-white bg-gray-700 text-center border-b block lg:table-cell relative lg:static"> 
                                    {{ $company->name ?? ''}}
                                </td>                                    
                                <td class="w-full lg:w-auto p-3 text-white bg-gray-700 text-center border-b block lg:table-cell relative lg:static"> 
                                    {{ $company->email ?? ''}}
                                </td>                                    
                                <td class="w-full lg:w-auto p-3 text-white bg-gray-700 text-center border-b block lg:table-cell relative lg:static"> 
                                    {{ $company->website ?? ''}}
                                </td>
                                <td class="w-full lg:w-auto p-3 text-white bg-gray-700 text-center border-b text-center block lg:table-cell relative lg:static">
                                    <div class="flex justify-center bg-gray-700">
                                        <a href="companies/{{ $company->id }}/edit">
                                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-4">
                                                Edit
                                            </button>
                                        </a>
                                        @include('company.delete')                                        
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <div class="pagination">
                        {{ $companies->links() }}
                    </div>
                @else
                    <p>No companies to display</p>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>

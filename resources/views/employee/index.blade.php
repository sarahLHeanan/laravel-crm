@include('partials.session-status')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Employees
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

            <div class="flex justify-end py-6">
                <a href="employees/create">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-4">
                        Add Employee
                    </button>
                </a>
            </div>

            <div class="p-6 text-gray-900 dark:text-gray-100">
                @if(!$employees->isEmpty())
                    <!-- Uses https://tailwindcomponents.com/component/responsive-table -->
                    <table class="border-collapse w-full mb-4">
                        <thead>
                            <tr>
                                <th class="p-3 font-bold uppercase text-white bg-gray-800 border-b border-gray-300 hidden lg:table-cell">First Name</th>
                                <th class="p-3 font-bold uppercase text-white bg-gray-800 border-b border-gray-300 hidden lg:table-cell">Last Name</th>
                                <th class="p-3 font-bold uppercase text-white bg-gray-800 border-b border-gray-300 hidden lg:table-cell">Company</th>
                                <th class="p-3 font-bold uppercase text-white bg-gray-800 border-b border-gray-300 hidden lg:table-cell">Email</th>
                                <th class="p-3 font-bold uppercase text-white bg-gray-800 border-b border-gray-300 hidden lg:table-cell">Phone</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($employees as $employee)
                            <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
                                <td class="w-full lg:w-auto p-3 text-white bg-gray-700 text-center border-b block lg:table-cell relative lg:static"> 
                                    {{ $employee->first_name ?? ''}}
                                </td>                                    
                                <td class="w-full lg:w-auto p-3 text-white bg-gray-700 text-center border-b block lg:table-cell relative lg:static"> 
                                    {{ $employee->last_name ?? ''}}
                                </td>                                    
                                <td class="w-full lg:w-auto p-3 text-white bg-gray-700 text-center border-b block lg:table-cell relative lg:static"> 
                                    {{ $employee->company->name ?? 'No company assigned'}}
                                </td>                                
                                <td class="w-full lg:w-auto p-3 text-white bg-gray-700 text-center border-b block lg:table-cell relative lg:static"> 
                                    {{ $employee->email ?? ''}}
                                </td>                                
                                <td class="w-full lg:w-auto p-3 text-white bg-gray-700 text-center border-b block lg:table-cell relative lg:static"> 
                                    {{ $employee->phone ?? ''}}
                                </td>
                                <td class="w-full lg:w-auto p-3 text-white bg-gray-700 text-center border-b text-center block lg:table-cell relative lg:static">
                                    <div class="flex justify-center bg-gray-700">
                                        <a href="employees/{{ $employee->id }}/edit">
                                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-4">
                                                Edit
                                            </button>
                                        </a>
                                        @include('employee.delete')                                        
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <div class="pagination">
                        {{ $employees->links() }}
                    </div>
                @else
                    <p>No employees to display</p>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>

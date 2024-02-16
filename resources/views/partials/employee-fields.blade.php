
<!-- Uses https://tailwindui.com/components/application-ui/forms/form-layouts -->

<div class="space-y-12">
    @include('partials.employee-errors')

    <div class="border-b border-gray-900/10 pb-12">
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

        <div class="sm:col-span-3">
            <label for="first-name" class="block text-sm font-medium leading-6 text-gray-100">First Name</label>
            <div class="mt-2">
                <input 
                    type="text" 
                    name="first_name" 
                    id="first-name" 
                    value="{{ $employee->first_name ?? '' }}"
                    autocomplete="first-name" 
                    class="block w-full text-gray-700 p-4 rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        </div>           
        
        <div class="sm:col-span-3">
            <label for="last-name" class="block text-sm font-medium leading-6 text-gray-100">Last Name</label>
            <div class="mt-2">
                <input 
                    type="text" 
                    name="last_name" 
                    id="last-name" 
                    value="{{ $employee->last_name ?? '' }}"
                    autocomplete="last-name" 
                    class="block w-full text-gray-700 p-4 rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        </div>              
        

        <div class="sm:col-span-3">
            <label for="email" class="block text-sm font-medium leading-6">Email address</label>
            <div class="mt-2">
                <input 
                    id="email" 
                    name="email" 
                    type="email"
                    value="{{ $employee->email ?? ''}}" 
                    autocomplete="email" 
                    class="block w-full text-gray-700 p-4 rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        </div>     

        <div class="sm:col-span-3">
            <label for="phone" class="block text-sm font-medium leading-6 text-gray-100">Phone Number</label>
            <div class="mt-2">
                <input 
                    type="text" 
                    name="phone" 
                    id="phone" 
                    value="{{ $employee->phone ?? '' }}"
                    autocomplete="phone" 
                    class="block w-full text-gray-700 p-4 rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        </div>                                
        
        <div class="sm:col-span-3">
            <label for="company_id" class="block text-sm font-medium leading-6">Company</label>
            <div class="mt-2">
                <select id="company" name="company_id" autocomplete="company-id" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-full sm:text-sm sm:leading-6">
                    <option value="">Select a company</option>
                    @if($companies)
                        @foreach($companies as $company)
                            <option value="{{ $company->id }}" {{ isset($employee) && ($company->id == $employee->company_id)  ? 'selected' : '' }}>{{ $company->name ?? ''  }}</option>
                        @endforeach
                    @endif
                </select>
            </div>
        </div>
    </div>

    <div class="mt-6 flex items-center justify-end gap-x-6">
        <a href="/employees">
            <button type="button" class="text-sm font-semibold leading-6">Cancel</button>
        </a>
        <button type="submit" class="rounded-md bg-blue-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
    </div>
</div

<!-- Uses https://tailwindui.com/components/application-ui/forms/form-layouts -->

<div class="space-y-12">
    @include('partials.company-errors')

    <div class="border-b border-gray-900/10 pb-12">
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

        <div class="col-span-full">

            <label for="logo" class="block text-sm font-medium leading-6 text-gray-100 text-center">Logo</label>
            <div class="mt-2 flex place-content-center rounded-lg border border-dashed border-gray-900/25 px-6 py-6">
                <div class="text-center">
                    @if(isset($company) && !is_null($company->logo))
                        <img width="150" height="150" class="m-0 m-auto" src="{{ $company->logo_full_path ?? ''}}" />
                    @else
                        <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                        </svg>
                    @endif

                    <div class="mt-4 flex justify-center text-sm leading-6 text-gray-100">
                        <label for="file-upload" class="flex relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                            <span class="px-2">Upload a file</span>
                            <input id="file-upload" name="logo" type="file" class="sr-only">
                        </label>
                        <p id="file-name" class="text-sm px-2"></span>
                    </div>
                </div>
                
            </div>
        </div>

        <div class="sm:col-span-3">
            <label for="name" class="block text-sm font-medium leading-6 text-gray-100">Company name</label>
            <div class="mt-2">
                <input 
                    type="text" 
                    name="name" 
                    id="company-name" 
                    value="{{ $company->name ?? '' }}"
                    autocomplete="company-name" 
                    class="block w-full text-gray-700 p-4 rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
            </div>
        </div>

        <div class="sm:col-span-3">
            <label for="email" class="block text-sm font-medium leading-6">Email address</label>
            <div class="mt-2">
                <input 
                    id="email" 
                    name="email" 
                    type="email"
                    value="{{ $company->email ?? ''}}" 
                    autocomplete="email" 
                    class="block w-full text-gray-700 p-4 rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        </div>                                
        
        <div class="sm:col-span-3">
            <label for="website" class="block text-sm font-medium leading-6">Website</label>
            <div class="mt-2">
                <input 
                    id="website" 
                    name="website" 
                    type="website" 
                    value="{{ $company->website ?? '' }}" 
                    autocomplete="website" 
                    class="block w-full text-gray-700 p-4 rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        </div>
    </div>

    <div class="mt-6 flex items-center justify-end gap-x-6">
        <a href="/companies">
            <button type="button" class="text-sm font-semibold leading-6">Cancel</button>
        </a>
        <button type="submit" class="rounded-md bg-blue-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
    </div>
</div
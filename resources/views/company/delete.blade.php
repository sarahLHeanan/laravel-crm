<form method="POST" action="/companies/{{$company->id}}">
    @csrf       
    @method('delete')

    <div class="form-group">
        <input 
            type="submit" 
            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" 
            onclick="return confirm('Are you sure?')" 
            value="Delete">
    </div>
</form>

@error('first_name')
    <div class="alert alert-danger text-red-600">{{ $message }}</div>
@enderror
@error('last_name')
    <div class="alert alert-danger text-red-600">{{ $message }}</div>
@enderror
@error('company_id')
    <div class="alert alert-danger text-red-600">{{ $message }}</div>
@enderror
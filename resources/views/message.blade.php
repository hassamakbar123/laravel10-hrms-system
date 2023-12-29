@if (!empty(session('success')))
<div class="alert alert-success" role="alert">{{ session('succcess') }}</div>
@endif

@if (!empty(session('error')))
<div class="alert alert-success" role="alert">{{ session('error') }}</div>
@endif

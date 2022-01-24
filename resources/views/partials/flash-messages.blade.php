@if (session('message'))
<div class="alert alert-success">
    {{ session('message') }}
</div>
@endif

@if (session('status'))
<div class="alert alert-info">
    {{ session('status') }}
</div>
@endif

@if (session('warning'))
<div class="alert alert-warning">
    {{ session('warning') }}
</div>
@endif

@if (session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif
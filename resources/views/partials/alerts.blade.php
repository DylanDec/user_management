@if(session('success'))
<div class="column">
    <div class="notification is-primary is-light">
        {{ session('success') }}
    </div>
</div>
@endif

@if(session('warning'))
<div class="column">
    <div class="notification is-warning is-light">
        {{ session('warning') }}
    </div>
</div>
@endif

@if(session('danger'))
<div class="column">
    <div class="notification is-danger is-light">
        <i class="mdi mdi-alert"></i>
        {{ session('danger') }}
    </div>
</div>
@endif

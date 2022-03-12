@if (session('status'))
<div class="alert alert-success mt-76 fixed-top position-absolute w-100" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    {{ session('status') }}
</div>
@endif

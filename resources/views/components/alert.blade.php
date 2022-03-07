@if ($message = Session::get('alert-message'))
    <div class="alert alert-{{Session::get('alert-type')}} d-flex align-items-center alert-dismissible fade show mt-2" role="alert">
        {{$message}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

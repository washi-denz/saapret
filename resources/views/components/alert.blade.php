<div {{ $attributes->merge(['class'=>'alert alert-dismissible fade show']) }} role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    {{ $slot }}
</div>

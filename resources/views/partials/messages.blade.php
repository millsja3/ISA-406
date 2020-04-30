<style>
    .alert-warning{
        color: black;
        text-transform: uppercase;
        background-color: #FEBC4A;
        font-weight: bold;
        font-size: 20px;
        border-color: black;
    }
</style>

@foreach (['info', 'warning', 'danger', 'failure', 'success'] as $msg)
    @if(isset($messages[$msg]))
        <div class="alert alert-{{ $msg }}" role="alert">
            <span class="alert-text">
                {!!  $messages[$msg] !!}
            </span>
        </div>
    @endif
@endforeach
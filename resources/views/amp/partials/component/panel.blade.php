@php
    $limit = 15;
@endphp

<div class="panel">
    <div class="panel__head">
        <span>
            read more news below
        </span>
    </div>

    <div class="panel__body">
        @for($i = 0; $i < $limit; $i++)
            @include('amp.partials.add-on.board')
        @endfor
    </div>
</div>

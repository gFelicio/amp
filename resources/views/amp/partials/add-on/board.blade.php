@php
    $num = rand(1, 9);
@endphp

<div class="board">
    <div class="board__head">
        <a href="https://github.com/gFelicio/agenda">
            <amp-img src="{{ asset('img/img_' . $num . '.png') }}"  width="400" height="300" layout="responsive">
            </amp-img>
        </a>
    </div>
    <div class="board__body">
        <span>
            let's talk a little bit about this link I am linking here, so, ok, let's begin.
        </span>
    </div>
    <div class="board__foot">
        <a href="https://www.youtube.com/watch?v=4co-d81mS7k">
            cowabunga
        </a>
        <a href="https://www.youtube.com/watch?v=fM7qNm_Mmrw">
            you're tearing me apart
        </a>
    </div>
</div>

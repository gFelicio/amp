@php
    $link = rand(10, 14);

    if($link == 10)
    {
        $link = 'https://github.com/gFelicio/cms';
    }
    elseif($link == 11)
    {
        $link = 'https://github.com/gFelicio/cssflex';
    }
    elseif($link == 12)
    {
        $link = 'https://github.com/gFelicio/UuidGuid';
    }
    elseif($link == 13)
    {
        $link = 'https://github.com/gFelicio/sggulp';
    }
    else
    {
        $link = 'https://github.com/gFelicio/colours';
    }

    $num = rand(1, 9);
@endphp

<div class="board">
    <div class="board__head">
        <a href="{{ $link }}">
            <amp-img src="{{ asset('img/img_' . $num . '.png') }}"  width="400" height="300" layout="responsive">
            </amp-img>
        </a>
    </div>
    <div class="board__body">
        <span>
            check out my other repositories here on gitHub
        </span>
    </div>
    <div class="board__foot">
        <a href="https://www.youtube.com/watch?v=4co-d81mS7k">
            cowabunga
        </a>
        <a href="https://www.youtube.com/watch?v=fM7qNm_Mmrw">
            you're tearing me apart!
        </a>
    </div>
</div>

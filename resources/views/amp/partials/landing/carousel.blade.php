<div class="txtDiv">
    <p>
        Another web page component that devs love to implement in their page (I don't know why, because it sucks in many ways), is the carousel. You know, that thing that changes images every X seconds, with the arrows where you can control the pace of these images and so on. Yu know this stuff, right?
    </p>
    <p>
        Anyway, AMP created a SEPARATE component so web devs can implement these carousels in their pages. Even though I don't really like this component, either created by devs or by AMP, I know there are people that like them, their functionality and also that a lot of pages use it to advertise their own articles or any other thing they want. So, basically, keep in mind, people love this stuff. They use it in their stuff and all.
    </p>
    <p>
        So it is really weird (for a lack of a better word) that AMP butchered this component in ANOTHER JS library with over 1100 lines (about 500 minified). I'm saying this because I am not even close to being an OK web developer, but even I once created a carousel component script that used only 40 lines of code or so. So what is the benefit of using the AMP component?
    </p>
</div>

<div class="carDiv">
    <amp-carousel width="400" height="300" layout="responsive" type="slides" autoplay delay="5000">
        <amp-img src="{{ asset('img/img_1.png') }}" width="400" height="300" layout="responsive"></amp-img>

        <amp-img src="{{ asset('img/img_2.png') }}" width="400" height="300" layout="responsive"></amp-img>

        <amp-img src="{{ asset('img/img_3.png') }}" width="400" height="300" layout="responsive"></amp-img>

        <amp-img src="{{ asset('img/img_4.png') }}" width="400" height="300" layout="responsive"></amp-img>

        <amp-img src="{{ asset('img/img_5.png') }}" width="400" height="300" layout="responsive"></amp-img>

        <amp-img src="{{ asset('img/img_6.png') }}" width="400" height="300" layout="responsive"></amp-img>

        <amp-img src="{{ asset('img/img_7.png') }}" width="400" height="300" layout="responsive"></amp-img>

        <amp-img src="{{ asset('img/img_8.png') }}" width="400" height="300" layout="responsive"></amp-img>

        <amp-img src="{{ asset('img/img_9.png') }}" width="400" height="300" layout="responsive"></amp-img>
    </amp-carousel>
</div>

<div class="txtDiv">
    <p>
        Well, basically, speed. AMP loads pages with amazing speed (even if it has a lot of JavaScript embedded in it), which, in return, is good for the page indexing in Google's search engine. As I said before, here is where the controversy lies, because everyone wants a good result position when someone searches for something that your page has, and one of the pillars of this good positioning is if the page is fast or not. Google's algorithm will automatically push down a page's positioning if it isn't fast, if it isn't mobile friendly and now AMP is here to boost this.
    </p>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
</div>

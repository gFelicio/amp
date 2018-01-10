<div class="txtDiv">
    <h2>
        Let's talk numbers
    </h2>
    <p>
        Exactly how fast is AMP fast? I think is fast enough to take AMP into consideration.
    </p>
    <p>
        Consider that I will talk about numbers in the first fold, which is the content that appears when the page first loads. Also notice that this number might vary according to specs. Another thing worth noticing is the header that I am using, which is a placeholder header that is basically a horizontal line with something written in it. Taking into consideration that nowadays most headers contain, at least, one image, be it a SVG, a PNG or even a JPG, the load time of this first fold will be not exactly real-world accurate. Another thing that most web pages have nowadays is any kind of navbar below the header, usually with images, and I am not even counting the extra columns that most pages have nowadays, which, usually, comes with some extra images. So keeep in mind that this is a really simple website template with a few images thrown in the body.
    </p>
    <p>
        I'll write about the load time using Chrome's native <span class="tags">DevTools Network Console</span>, which you can access by pressing <span class="tags">F12</span> in your keyboard or right clicking anywhere on the page and selecting the <span class="tags">Inspect</span> or something similar. If you're going to run your own tests, which I hope you do, remember to always clear the browser's cache, by right clicking in any element in the <span class="tags">Network</span> tab and selecting the options <span class="tags">Clear Browser cookies</span> and <span class="tags">Clear browser cache</span> and always refresh the page to run another test using <span class="tags">CTRL + F5</span>.
    </p>
    <p>
        Before we begin, right now the file for the page is closing in on 40KB, which, I think, is a reasonable size given that it is a simple page. Please notice that i created as many HTML elements as I could, kind of exagerating everything.
    </p>
    <p>
        Let's begin now.
    </p>
    <p>
        Simulating an Online page load (this means connected to a high speed Wi-Fi), the first fold loads in 1.28 seconds and finishes at 6.29 seconds. It means that I have content shown for me practically instantaneously. That's REALLY fast, but keep in mind that the first fold doesn't have much content to load.
    </p>
    <p>
        Simulating a Fast 3G connection we have a drop in the load speed, which is reasonable and also expected. The page loads in 3.34 seconds and finishes at 9.12 seconds. Still pretty fast, in my opinion, given that users are more inclined to leave your page if it takes over 10 seconds to load.
    </p>
    <p>
        When we simulate a Slow 3G connection, these numbers drop a lot, which is expected, remember. The page loads
    </p>
</div>

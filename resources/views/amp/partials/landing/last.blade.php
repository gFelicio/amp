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
        Before we begin, right now the file for the page is closing in on 41KB, which, I think, is a reasonable size given that it is a simple page. Please notice that I created as many HTML elements as I could, kind of exagerating everything.
    </p>
    <p>
        Let's begin now.
    </p>
    <p>
        Simulating an Online page load (this means connected to a high speed Wi-Fi), the first fold loads in 641 milliseconds and finishes at 5.67 seconds. It means that I have content shown for me practically instantaneously, given that the browser window loads the elements in less than 50 milliseconds. That's REALLY fast, but keep in mind that the first fold doesn't have much content to load.
    </p>
    <p>
        Simulating a Fast 3G connection we have a drop in the load speed, which is reasonable and also expected. The page loads in 3.20 seconds and finishes at 8.95 seconds, with content shown at less than 820 milliseconds. Still pretty fast, in my opinion, given that users are more inclined to leave your page if it takes over 10 seconds to load.
    </p>
    <p>
        When we simulate a Slow 3G connection, these numbers drop a lot, which is expected, remember. The page loads in 12.31 seconds and finishes at 20.29 seconds. That's a little bit high, seeing that the first fold is poor. But, if you check what the browser is requesting, you'll see that it pre-loads the page up until the first video (YouTube embedded). Also notice that the content is shown in the page in less than 3 seconds. Pretty fast.
    </p>
    <p>
        Keep in mind everything I said before and also this: I wrote this bit before finishing the project entirely. I made a few tweaks at the code after I wrote these numbers, so I am pretty certain that RIGHT NOW we have smaller load times, seeing that I optimized it a little bit.
    </p>
</div>

<div class="txtDiv">
    <h2>
        Final considerations
    </h2>
    <p>
        AMP works. It does load your page faster, provides a similar UX throughout pages, helps in keeping browsing users in your page and helps with your ranking on Google Search.
    </p>
    <p>
        BUT Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
</div>

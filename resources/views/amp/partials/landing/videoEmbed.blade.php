<div class="vidDiv">
    <div class="subTitle">
        <h2>
            Another video, but this time embedded directly from our server.
        </h2>
    </div>

    {{-- <amp-video controls layout="responsive" width="800" height="450" poster="https://www.ampproject.org/examples/images/amp.jpg" src="{{ asset('vid/amp_big_video.mp4') }}" type="video/mp4">
        <div fallback>
            <p>
                This browser does not support the video element.
            </p>
        </div>
    </amp-video> --}}

    <div class="caption">
        <span>
            So, this is the video. Download <a href="https://www.youtube.com/watch?v=a5X_Ot-R6lo">this video</a> and embed it here. Go to the original file and just rename it to the same name it has in the tag and you're good to go test it.I took a very big video on purpose so we could check the load time. Open your browser console and check it. Also, remember: Github doesn't accept files with ++100MB, so if you're going to up your repo with your test, ignore the video file.
        </span>
    </div>

    <div class="txtDiv">
        <p>
            An important thing to note about embedding videos directly from server: if you noticed, I am using the Laravel Framework, which is a kinda flexible framework. It uses the Artisan tool so you can use a lot of commands, one of them lets you boot up a local server so you can see and test your work. If you are reading this in a browser, then you know this already.
        </p>

        <div class="imgDiv">
            <amp-img src="{{ asset('img/img_2.png') }}" width="500" height="400" layout="responsive"></amp-img>
        </div>

        <p>
            To boot up your test server, you type into command line <span class="tags">php artisan serve</span> and the tool will take care of resolving the url and the port it will use. Usually, it will be <span class="tags">localhost:8000</span> or some equivalent to that.
        </p>
        <p>
            BUT you can edit a bit of this command and boot up your server so you can test your work in your mobile phone. All you have to do is <span class="tags">php artisan serve --host=xxx.xxx.x.xxx</span>, where the <span class="tags">--host</span> flag must be followed by your IP. The tool will take care of taking up the default <span class="tags">:8000</span> port. You write this command and you're good to go and test everything in your mobile.
        </p>
        <p>
            It's a shame that you can't test Google AMP's local video feature on your mobile, because it only accepts videos embedded either from an <span class="tags">https</span> address or from <span class="tags">localhost</span> ONLY. So I only tested the video above on a desktop browser, and everything seems fine.
        </p>
        <p>
            OF COURSE you can edit a few files, mess up a bit with your configuration and whatnot and make your localhost server boot up directly in a way you can test it in a mobile, but I am not interested in that, seeing that this is only a test page to check how to use and set up Google AMP, but if you feel like mobile testing this local video embed component, feel free to mess up stuff. Tell me how it went afterwards. =D
        </p>

        <div class="imgDiv">
            <amp-img src="{{ asset('img/img_6.png') }}" width="500" height="400" layout="responsive"></amp-img>
        </div>

        <p>
            Another thing that happened was that the <span class="tags">amp-video</span> element threw an error in console that says <span class="error">The tag 'amp-story >> amp-video' may only appear as a descendant of tag 'amp-story'.</span>. I honestly don't know how to fix that, except commenting out the tag. So, go to origin file and uncomment the <span class="tags">amp-video</span> tag so you can see the error and help me fix it.
        </p>
        <p>
            Also, notice I am NOT using the <span class="tags">amp-story</span> tag, so I really don't know how this error is coming up.
        </p>
        <p>
            Another thing to notice (last one, I guess), is that the component for <span class="tags">amp-story</span> is the only one (that I used) that throws an error in console. If the extension is loaded, but can't find any <span class="tags">amp-story</span> element in the page, the console will read <span class="error">The extension 'amp-story' was found on this page, but is unused. Please remove this extension.</span>.
        </p>
        <p>
            If you check the origin file, you'll see I loaded the form extension so Google AMP allows me to use forms in my page (because, you know, forms aren't useful for web pages AT ALL) and there are no forms on my page (because I either haven't implemented any, commented them out or they simply don't exist on this page) and the extension didn't throw an error. So, weird stuff that I can't fix and I haven't found any type of help, either online or with fellow web devs.
        </p>

        <div class="imgDiv">
            <amp-img src="{{ asset('img/img_1.png') }}" width="500" height="400" layout="responsive"></amp-img>
        </div>

        <p>
            <div class="quote">
                But, dude! I uncommented the video and it is playing, even with that error. What's the problem, anyway?
            </div>
        </p>
        <p>
            Well, the thing is that if you have an error using Google AMP, you won't be able to use/exploit its most attractive promise: the top search page carousel.
        </p>
        <p>
            As I said before, pages with perfect Google AMP are featured in the top carousel when, well, the search matches the site's SEO and stuff. But it can only happen if a page has a perfect implementation of Google AMP, which means that the page can't have any error caused by the tool.
        </p>
    </div>
</div>

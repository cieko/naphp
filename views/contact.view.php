<?php require('views/partials/html-head.php'); ?>

<div>

    <main id="contact">
        <!-- BANNER -->
        <section id="banner"></section>

        <!-- CONTACT FORM -->
        <section class="form">
            <h1 class="contact-title text-3xl">Contact Us</h1>

            <form method="post" id="submitForm">
                <div class="fieldinput">
                    <label for="name">Name</label><span class="colon">:</span>
                    <div class="w-full relative">
                        <input type="text" id="name-input" name="name" placeholder="Your Name" autocomplete="off" onchange="">
                        <p class="ml-4 text-rose-700 flex items-center gap-2 absolute" id="error__name"><span></span></p>
                    </div>
                </div>

                <div class="fieldinput">
                    <label for="email">Email</label><span class="colon">:</span>
                    <div class="w-full relative">
                        <input type="email" id="email-input" name="email" placeholder="Your Email Address" autocomplete="off">
                        <p class="w-full ml-4 text-rose-700 flex items-center gap-2 absolute" id="error__email"><span></span></p>
                    </div>
                </div>

                <div class="fieldinput textarea">
                    <label for="query">Your Query</label><span class="colon">:</span>
                    <div class="w-full relative">
                        <textarea id="query" name="message" placeholder="Type your query" autocomplete="off"></textarea>
                        <p class="ml-4 text-rose-700 flex items-center gap-2 absolute" id="error__query"><span></span></p>
                    </div>
                </div>

                <button type="submit">Submit Query</button>
            </form>

            <div class="response-msg" style="display:none;">
                <span class="success">
                    <span></span>
                </span>
            </div>


        </section>
    </main>

</div>

<?php require('views/partials/html-foot.php'); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title> Grandfatheredly Help Center</title>
    <meta name="viewport" content="width=device-width, maximum-scale=1" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="" />
    <meta name="author" content=" Grandfatheredly" />
    <link rel="canonical" href="" />



    <link rel="stylesheet" href="{{ static_asset('assets/frontend/help/main.css') }}">
    <link rel="stylesheet" href="{{ static_asset('assets/frontend/help/style.css') }}">




    <link rel="apple-touch-icon-precomposed"
        href="//d33v4339jhl8k0.cloudfront.net/docs/assets/5a7dea9c2c7d3a4a4198fe11/images/5f06286304286306f8066115/apple-touch-icon-152x152.jpeg">
    <link rel="shortcut icon" type="image/png"
        href="//d33v4339jhl8k0.cloudfront.net/docs/assets/5a7dea9c2c7d3a4a4198fe11/images/5f0628632c7d3a10cbaa3994/favicon.ico">


</head>

<body>
    <script>
        window.onload = function() {
                $("#searchBar input.search-query" ).focus();
            };
    </script>

    <header id="mainNav" class="navbar">
        <div class="navbar-inner">
            <div class="container-fluid">
                <a class="brand" href="#">


                    <img src="//d33v4339jhl8k0.cloudfront.net/docs/assets/5a7dea9c2c7d3a4a4198fe11/images/60b8c2adafcffb2419360f59/AppSumo-logo-1180px.png"
                        alt=" Grandfatheredly Help Center" width="484" height="75">



                </a>

                <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <div class="nav-collapse collapse">
                    <nav role="navigation">
                        <!-- added for accessibility -->
                        <ul class="nav">

                            <li id="home" class="active"><a href="/">Home <b class="caret"></b></a></li>




                            <li id="contact"><a href="#contactModal" data-toggle="modal" class="contactUs">Contact</a>
                            </li>
                            <li id="contactMobile"><a href="/contact" class="contactUs">Contact</a></li>

                        </ul>
                    </nav>
                </div>
                <!--/.nav-collapse -->
            </div>
            <!--/container-->
        </div>
        <!--/navbar-inner-->
    </header>
    <section id="docsSearch">



        <form action="/search" method="GET" id="searchBar" autocomplete="off">

            <input type="text" name="query" title="search-query" class="search-query"
                placeholder="Search the knowledge base" aria-labelledby="Search the knowledge base" value="">
            <button type="submit" aria-labelledby="Search"><i class="icon-search lp"></i><span>Search</span></button>
            <div id="serp-dd" style="display:none;">
                <ul class="result"></ul>
            </div>

        </form>

    </section>
    <!--/docsSearch-->
    <section id="contentArea" class="container-fluid">




        <div id="noResults" style="display:none;">No results found</div>

        <!-- Site has only one collection -->



        <section class="category-list">


            <a class="category" id="category-8" href="/category/8-general-info">
                <h3>General Info</h3>
                <p>Find out how to contact us, partner with us, and abide by our TOS.</p>
                <p class="article-count">

                    <span class="notranslate">4</span> articles

                </p>
            </a><!-- /category -->



            <a class="category" id="category-9" href="/category/9-account-management">
                <h3>Account Management</h3>
                <p>All things account. Email, password, username, your beautiful selfie, and more.</p>
                <p class="article-count">

                    <span class="notranslate">8</span> articles

                </p>
            </a><!-- /category -->



            <a class="category" id="category-10" href="/category/10-payment-central">
                <h3>Payment Central</h3>
                <p>See accepted forms of payment, invoices, and how to get a refund.</p>
                <p class="article-count">

                    <span class="notranslate">7</span> articles

                </p>
            </a><!-- /category -->



            <a class="category" id="category-11" href="/category/11-deals-products-explained">
                <h3>Deals &amp; Products Explained</h3>
                <p>You’ve got questions about deals and products and we’ve got answers.</p>
                <p class="article-count">

                    <span class="notranslate">12</span> articles

                </p>
            </a><!-- /category -->



            <a class="category" id="category-89" href="/category/89-marketplace">
                <h3>Partners</h3>
                <p>Find out all about being an  Grandfatheredly partner here!</p>
                <p class="article-count">

                    <span class="notranslate">13</span> articles

                </p>
            </a><!-- /category -->



            <a class="category" id="category-103" href="/category/103-licenses">
                <h3>Licenses</h3>
                <p>A new alternative to code-based products!</p>
                <p class="article-count">

                    <span class="notranslate">6</span> articles

                </p>
            </a><!-- /category -->



            <a class="category" id="category-12" href="/category/12-rewards-credits">
                <h3>Rewards &amp; Credits</h3>
                <p>Learn about the free money we give away and how you can get in on the fun.</p>
                <p class="article-count">

                    <span class="notranslate">5</span> articles

                </p>
            </a><!-- /category -->



            <a class="category" id="category-13" href="/category/13-appsumo-plus-faq">
                <h3> Grandfatheredly Plus FAQ</h3>
                <p>Here is where benefit-loving Sumo-lings find answers about  Grandfatheredly Plus.</p>
                <p class="article-count">

                    <span class="notranslate">7</span> articles

                </p>
            </a><!-- /category -->



            <a class="category" id="category-14" href="/category/14-briefcase">
                <h3>Briefcase FAQ</h3>
                <p>Get help with our monthly subscription that&#x27;s loaded with a ton of tools here.</p>
                <p class="article-count">

                    <span class="notranslate">12</span> articles

                </p>
            </a><!-- /category -->


        </section><!-- /category-list -->





        <footer class="center">


            <p>&copy;

                <a href="#"> Grandfatheredly</a>

                2022. <span>Powered by <a rel="nofollow noopener noreferrer"
                        href="https://www.helpscout.com/knowledge-base/?utm_source=docs&utm_medium=footerlink&utm_campaign=Docs+Branding"
                        target="_blank">Help Scout</a></span>




            </p>

        </footer>
    </section>
    <!--/.fluid-container-->




    <section id="contactModal" class="modal hide" tabindex="-1">
        <h2>Contact Us</h2>
        <a href="#" id="closeBtn" data-dismiss="modal"><i class="icon-close"></i></a>
        <div class="modal-body">
            <form data-parsley-validate novalidate method="post" action="/contact" enctype="multipart/form-data"
                class="form-horizontal contact">
                <div class="control-group">
                    <label for="md-name" class="control-label">Name</label>
                    <div class="controls">
                        <input type="text" name="name" id="md-name" placeholder="(optional)">
                    </div>
                    <!--/controls-->
                </div>
                <!--/control-group-->
                <div class="control-group">
                    <label for="md-email" class="control-label">Email</label>
                    <div class="controls">
                        <input type="email" name="email" id="md-email" data-parsley-required="true"
                            data-parsley-type="email" data-parsley-notblank="true" data-parsley-trigger="change"
                            data-parsley-required-message="Email is required">
                        <input type="text" name="phone" id="phone" value="">
                    </div>
                    <!--/controls-->
                </div>
                <!--/control-group-->
                <div class="control-group">
                    <label for="md-subject" class="control-label">Subject</label>
                    <div class="controls">
                        <input type="text" name="subject" id="md-subject" data-parsley-required="true"
                            data-parsley-notblank="true" data-parsley-required-message="Subject is required">
                    </div>
                    <!--/controls-->
                </div>
                <!--/control-group-->
                <div class="control-group">
                    <label for="md-message" class="control-label">Message</label>
                    <div class="controls">
                        <textarea name="message" id="md-message" data-parsley-required="true"
                            data-parsley-notblank="true" data-parsley-required-message="Message is required"></textarea>
                    </div>
                    <!--/controls-->
                </div>
                <!-- /control-group -->
                <div class="control-group">
                    <label for="file-upload" class="control-label">Upload file</label>
                    <div class="controls">
                        <input id="file-upload" type="file" name="upload" data-parsley-max-file-size="10" />
                    </div>
                </div>
                <!--/control-group-->
                <div class="form-actions">

                    <div class="g-recaptcha" data-sitekey=6LdhmSQTAAAAAMdAtrGjQeyN1HWWWAc5iN8FZ_MD></div>

                    <input type="submit" class="btn" value="Send">
                </div>
                <!--/form-actions-->
            </form>
        </div>
        <!--/modal-body-->
    </section>




    <script src="{{ static_asset('assets/frontend/help/script.css') }}"></script>

    <script>
        // keep iOS links from opening safari
if(("standalone" in window.navigator) && window.navigator.standalone){
// If you want to prevent remote links in standalone web apps opening Mobile Safari, change 'remotes' to true
var noddy, remotes = false;
document.addEventListener('click', function(event) {
noddy = event.target;
while(noddy.nodeName !== "A" && noddy.nodeName !== "HTML") {
noddy = noddy.parentNode;
}

if('href' in noddy && noddy.href.indexOf('http') !== -1 && (noddy.href.indexOf(document.location.host) !== -1 || remotes)){
event.preventDefault();
document.location.href = noddy.href;
}

},false);
}
$('#contactModal').on('shown', function () {
  $('#md-name').focus();
});
    </script>
</body>

</html>
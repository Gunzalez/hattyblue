<!doctype html>
<html>
<head>
    <title>Hatty Blue - Contact</title>
    <?php include_once('includes/resources.php'); ?>
</head>
<body>
    <div class="page">

        <div class="header">

            <?php include_once('includes/navigation.php'); ?>

            <div class="contact-form">
                <h2>Get in touch and talk to us</h2>

                <div class="copy">
                    <p>We believe that there is nothing better than a good old fashioned chat. Email is good but we prefer the personal touch.</p>
                    <p>So call us or visit if you are in the area, and let us know how we can help you or drop us a quick note opposite to introduce yourself:</p>
                    <p>Tel:  <a href="tel:+02072401813" class="telephone"><span>+44(0)207</span>&nbsp;<span>240</span>&nbsp;<span>1813</span></a><br />
                        Fax:  <span>+44(0)20</span>&nbsp;<span>7836</span>&nbsp;<span>5068</span><br />
                        Info Email:  <a href="mailto:hello@hattyblue.co.uk">hello@hattyblue.co.uk</a><br />
                        Perm Email:  <a href="mailto:name@hattyblue.co.uk">name@hattyblue.co.uk</a><br />
                        Temp Email:  <a href="mailto:name@hattyblue.co.uk">name@hattyblue.co.uk</a></p>
                </div>

                <div class="form-box">

                    <form method="post" id="contact-form" class="form" action="index.php" novalidate>
                        <div class="row">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="text-input" placeholder="Name" />
                            <span class="error">Invalid entry</span>
                        </div>
                        <div class="row">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="text-input" placeholder="Email address" />
                            <span class="error">Invalid email address</span>
                        </div>
                        <div class="row">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" class="text-input" placeholder="Message"></textarea>
                        </div>
                        <div class="row desktop-only">
                            <label for="cv">CV</label>
                            <div class="file-upload btn btn-primary">
                                <span class="fake-upload-button">Attach CV</span>
                                <input type="file" id="cv" name="cv" class="upload" />
                            </div>
                            <input class="cv-upload" id="cv-file-display" placeholder="Choose File" disabled="disabled" />
                            <div class="cboth"></div>
                        </div>
                        <div class="row submit">
                            <input type="submit" value="SUBMIT">
                        </div>
                    </form>
                </div>

                <div class="cboth"></div>
            </div>
        </div><!-- .header -->

        <div class="body">

            <div class="map-content">

                <div class="address">
                    <h3>Hatty Blue Address:</h3>
                    <p>
                        2nd Floor<br />
                        2 Percy Street<br />
                        London<br />
                        W1T 1DD
                    </p>

                    <a href="https://www.google.co.uk/maps/place/London+W1T+1DD,+UK/data=!4m2!3m1!1s0x48761b2c63fb80c1:0x1d1fc17b79d4396a?sa=X&ei=pL2DVKC8JrKy7QbMoIAQ&ved=0CF0Q8gEwCg" target="_blank" class="circle purple">
                        <span class="title">Click here<br />to view on<br />Google<br />maps</span>
                    </a>
                    <div class="cboth"></div>
                </div>

                <div class="map-box">
                    <div id="map" class="map"></div>
                </div>

                <div class="cboth"></div>
            </div>
        </div><!-- .body -->

        <?php include_once('includes/footer.php'); ?>

    </div>

    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="js/vendors/jquery-1.9.1.min.js"></script>
    <script src="js/hattyblue.js"></script>
    <script>
        function initialize() {
            var mapCanvas = document.getElementById('map'),
                myLatLong = new google.maps.LatLng(51.517912, -0.134039),
                mapOptions = {
                    center: myLatLong,
                    zoom: 16,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                },
                map = new google.maps.Map(mapCanvas, mapOptions),
                marker = new google.maps.Marker({
                    position: myLatLong,
                    map: map,
                    title: 'Hatty Blue'
                });
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</body>
</html>
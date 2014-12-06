<!doctype html>
<html>
<head>
    <title>Hatty Blue - Permanent roles</title>
    <?php include_once('includes/resources.php'); ?>
</head>
<body>
    <div class="page">

        <div class="header">

            <?php include_once('includes/navigation.php'); ?>

            <div class="search-form">
                <h2>Searching for the right permanent role?</h2>

                <div class="copy">
                    <p>We are ambitious for you. We look further than your CV and are just as interested in your personality, attitude and your future aspirations as your experience and skill set.</p>
                    <p>Search through our live vacancies opposite to find the prefect role for you. Simply select either your desired salary or the sector you prefer and let us do the rest.</p>
                    <p>When you have found the right role for you please contact us via telephone or email and we'll set up a time to discuss the brief further to make sure it's the best job for you!</p>
                </div>

                <div class="form-box">

                    <form method="post" id="search-form" class="form" action="perm-list.php">
                        <div class="row">
                            <label for="salaries">Salaries</label>
                            <select id="salaries" name="salaries">
                                <option value="null" selected="selected">All salaries</option>
                                <option value="salary8">&pound;8,000</option>
                                <option value="salary9">&pound;9,000</option>
                                <option value="salary10">&pound;10,000</option>
                                <option value="salary11">&pound;11,000</option>
                            </select>
                        </div>
                        <div class="row">
                            <span class="circle purple"><span>or</span></span>
                        </div>
                        <div class="row">
                            <label for="sectors">Sectors</label>
                            <select id="sectors" name="sectors">
                                <option value="null" selected="selected">All sectors</option>
                                <option value="sector1">Health Services</option>
                                <option value="sector2">Finances</option>
                                <option value="sector3">Agriculture</option>
                            </select>
                        </div>
                        <div class="row submit">
                            <input type="submit" value="SEARCH">
                        </div>
                    </form>
                </div>

                <div class="cboth"></div>
            </div>
        </div><!-- .header -->

        <div class="body">

            <div class="body-content">

                <div class="highlight">
                    <p>Search through our live vacancies to find the perfect role for you. Simply select either your desired salary or sector you prefer and let us do the rest. When you have found the right role for you please contact us via telephone or email and we'll set up a time to discuss the brief further to make sure it's the best job for you!</p>
                </div>

                <div class="image">
                    <div class="photo-frame">
                        <img src="images/gallery/gallery-sample-long.png" width="165" height="245" alt="Aku:The shape shifting prince of evil" />
                    </div>
                </div>

                <div class="copy">
                    <p>As a one of our candidates you can expect to be listened to. Together we will decide what your work goals are and help you look at what you will need to do to achieve them.</p>
                    <p>We will offer sound advice on your CV and work with you to develop the confidence to build on your strengths and work on any weaknesses.</p>
                    <p>We will then thoroughly brief you prior to your interviews, feedback to you in an honest, constructive way and guide you through to offer stage and beyond.</p>
                    <p>We operate a <a href="#">'Refer A Friend'</a> scheme. We love meeting your friends! To thank you for referring someone who finds a permanent job through us, we will give you a <strong>&pound;50.00 Selfridges voucher</strong>.</p>
                    <p>To enquire about our current permanent vacancies please call us on <a href="tel:+02072401813" class="telephone"><span>0207</span>&nbsp;<span>240</span>&nbsp;<span>1813</span></a>.</p>
                </div>

                <div class="cboth"></div>
            </div>
        </div><!-- .body -->

        <?php include_once('includes/footer.php'); ?>

    </div>

    <script src="js/vendors/jquery-1.9.1.min.js"></script>
    <script src="js/hattyblue.js"></script>
</body>
</html>
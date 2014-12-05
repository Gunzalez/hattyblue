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

                    <form method="post" id="search-form" class="form" action="">
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
            </div>
            <div class="cboth"></div>
        </div><!-- .header -->

        <div class="body">



            <div class="text-links" style="opacity: 0">
                <ul>
                    <li class="text-links-title">
                        <h2>Jobs of the week</h2>
                        <span class="subtitle">Click here to get connect with the right full time position for you...</span>
                    </li>
                    <li>
                        <span class="job-title" title="PA for CEO">PA for CEO</span>
                        <span class="job-location" title="Wales">Wales</span>
                        <span class="job-details">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Brazil nec gam.</span>
                        <a href="#" class="read-more">Read more...</a>
                    </li>
                    <li>
                        <span class="job-title" title="Executive. Assistant">Executive. Assistant</span>
                        <span class="job-location" title="Jamaica">Jamaica</span>
                        <span class="job-details">Lorem ipsum dolor sit amet, conor sit amet, consecte isse ctetur adi piscing elit. Integer odio nec.</span>
                        <a href="#" class="read-more">Read more...</a>
                    </li>
                    <li>
                        <span class="job-title" title="Football Coach">Football Coach</span>
                        <span class="job-location" title="London">London</span>
                        <span class="job-details">Stl ipsme sport direct lor sit aipisor sit amet. Integer nec odio consecte tur adipiscing elit.</span>
                        <a href="#" class="read-more">Read more...</a>
                    </li>
                    <li>
                        <span class="job-title" title="TV Presenter">TV Presenter</span>
                        <span class="job-location" title="Sydney">Sydney</span>
                        <span class="job-details">Integer nec odio. Lorem ipsum dolor sit aet, Konsec moo moo moo welback scores, consectetur adipiscing elit.</span>
                        <a href="#" class="read-more">Read more...</a>
                    </li>
                    <li>
                        <span class="job-title" title="Corporate Litigator">Corporate Litigator</span>
                        <span class="job-location" title="San Fransisco, USA">San Fransisco, USA</span>
                        <span class="job-details">Lorem ipsum dolor sit amet, con sectetteger nec our adipi scteger nec oing elit. Integer nec odio.</span>
                        <a href="#" class="read-more">Read more...</a>
                    </li>
                </ul>
                <div class="cleft"></div>
            </div>
        </div><!-- .body -->

        <?php include_once('includes/footer.php'); ?>

    </div>

    <script src="js/vendors/jquery-1.9.1.min.js"></script>
    <script src="js/hattyblue.js"></script>
</body>
</html>
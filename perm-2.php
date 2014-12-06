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

                <div class="cboth"></div>
            </div>
        </div><!-- .header -->

        <div class="body">

            <div class="body-content">

                <div class="list">
                    <ul>
                        <li>
                            <span class="job-title" title="PA for CEO">PA for CEO</span>
                            <span class="job-location" title="Wales">Wales</span>
                            <span class="job-salary" title="&pound;9,000">&pound;9,000</span>
                            <span class="job-details">Lorem ipsectetur adipiscinectetur adipisectetur adipiscing elit. Braseccing eli dream leave take him sectetur adipiscing elig eectetur adipiscing elit. Braseclectetur adipiscing elit. Brasecit. Brasum dolosectetur adipiscing elit. Brasectetur adipiscing elit. Brar sit amet, consectetur adipiscing elit. Brazil nec gam.</span>
                            <a href="perm-3.php?jobId=0" class="read-more light-box">Read more...</a>
                        </li>
                        <li>
                            <span class="job-title" title="Executive. Assistant">Executive Assistant</span>
                            <span class="job-location" title="Jamaica">Jamaica</span>
                            <span class="job-salary" title="&pound;11,000">&pound;11,000</span>
                            <span class="job-details">Lorem ipsum dolor sit amet, conor sit amet, cons the king demands your presence, and there he comes, here she xcomes to wreck the day, looks like we're not getting paid , I think I have been lied to , do not presume to judge ecte isse ctetur adi piscing elit. Integer odio nec.</span>
                            <a href="perm-3.php?jobId=1" class="read-more light-box">Read more...</a>
                        </li>
                        <li>
                            <span class="job-title" title="Football Coach">Football Coach</span>
                            <span class="job-location" title="London">London</span>
                            <span class="job-salary" title="&pound;14,000">&pound;14,000</span>
                            <span class="job-details">Stl ipsort direct lor sit aipme sport dirort direct lor sit aipect lor sit aiort direct lor sit aippisor sit amet. Integer nec odio consecte tur adipiscing elit.</span>
                            <a href="perm-3.php?jobId=2" class="read-more light-box">Read more...</a>
                        </li>
                        <li>
                            <span class="job-title" title="TV Presenter">TV Presenter</span>
                            <span class="job-location" title="Sydney">Sydney</span>
                            <span class="job-salary" title="&pound;22,000">&pound;22,000</span>
                            <span class="job-details">Integer nec odor sit aet, Konio. Lorem ipsum dolor sit aet, Konsec moo moo moo welback scores, consectetur adipiscing elit.</span>
                            <a href="perm-3.php?jobId=3" class="read-more light-box">Read more...</a>
                        </li>
                        <li>
                            <span class="job-title" title="Corporate Litigator">Corporate Litigator</span>
                            <span class="job-location" title="San Fransisco, USA">San Fransisco, USA</span>
                            <span class="job-salary" title="&pound;110,000">&pound;110,000</span>
                            <span class="job-details">Lorem ipsum dolor sit amet, con sectetteger nec our adipi scteger nec oing elit. Integer nec odio.</span>
                            <a href="perm-3.php?jobId=4" class="read-more light-box">Read more...</a>
                        </li>
                    </ul>
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
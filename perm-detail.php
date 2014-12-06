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

            <div class="job-specs">

                <?php
                $jobTitleArray = array('PA for CEO', 'Executive Assistant', 'Football Coach', 'TV Presenter', 'Corporate Litigator');
                $id = $_GET['jobId'];
                $jobTitle = $jobTitleArray[$id];
                ?>
                <h2><?php echo $jobTitle; ?></h2>
                <div class="job-summary">
                    <h3>The Client</h3>
                    <p>Duis sagittis ipsum. Praesent mauris fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nonaeos. Curabistra, per incepnaeos. Curabitos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor.</p>
                    <h3>The Role</h3>
                    <p>Vestibulum lacinia arcu eget nulla class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quamt dolor hta ecena.</p>
                    <h3>Role requirements</h3>
                    <ul>
                        <li>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</li>
                        <li>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</li>
                        <li>Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.</li>
                        <li>Pellentesque fermentum dolor. Aliquam quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.</li>
                    </ul>
                    <p>If you are interested in this role and believe it reflects your experience
                        and skills, please contact <a href="mailto:name@hattyblue.co.uk">name@hattyblue.co.uk</a> for more information</p>
                </div>
                <div class="job-meta">
                    <h3>Job Posted</h3>
                    <p>17th March 2014</p>
                    <h3>Job Type</h3>
                    <p>Permanent</p>
                    <h3>Salary</h3>
                    <p>&pound;51,000</p>
                    <h3>Job Reference</h3>
                    <p>HEX-244-207-9</p>
                    <h3>Contact</h3>
                    <p>Ronan DeAcusser<br />
                    <a href="mailto:ronan.deacusser@hattyblue.co.uk">ronan@hattyblue.co.uk</a><br />
                    <a href="tel:+02072401813" class="telephone"><span>+44(0)207</span>&nbsp;<span>240</span>&nbsp;<span>1813</span></a></p>
                    <div class="share">
                        <h4>Share This Job</h4>
                        <div class="share-links">
                            facebook and co.
                        </div>
                    </div>

                </div>
                <div class="cboth"></div>
            </div>

        </div>
    </div><!-- .body -->

    <?php include_once('includes/footer.php'); ?>

</div>

<script src="js/vendors/jquery-1.9.1.min.js"></script>
<script src="js/hattyblue.js"></script>
</body>
</html>
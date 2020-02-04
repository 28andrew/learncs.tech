<?php
include($_SERVER["DOCUMENT_ROOT"] . '/common.php');
?>
<!doctype html>
<html lang="en">
    <head>
        <?php
        import('head.php');
        title('LearnCS!');
        ?>
    </head>
    <body>
        <?php
            $active = 'home';
            import('navbar.php')
        ?>
        <div class="container">
            <div class="jumbotron">
                <h1 class="display-3 d-lg-none d-xl-none">Learn Computer Science!</h1>
                <h1 class="display-1 d-none d-lg-block">Learn Computer Science!</h1>
                <p class="lead">Computer science is a growing college major and career field. Learn more about it on this website.</p>
            </div>
            <div class="jumbotron bg">
                <h2>Interesting Facts</h2>
                <hr class="mr-4">
                <div class="row">
                    <?php
                    // TODO : ADD FOOTNOTES
                    /*
                     *
                     * TEMPLATE:
                     * <div class="col-sm-12 col-md-6 col-lg-4 mb-5">
                        <div class="card text-white bg-primary">
                            <div class="card-header"><h4 class="card-title text-center"></h4></div>
                            <div class="card-body">
                                <blockquote class="blockquote">
                                    <p class="mb-0">
                                        “”
                                    </p>
                                </blockquote>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                     */
                    ?>
                    <div class="col-sm-12 col-md-6 col-lg-4 mb-5">
                        <div class="blurb-card card text-white ls-orange">
                            <div class="card-header"><h4 class="card-title text-center">STEM Jobs</h4></div>
                            <div class="card-body">
                                <blockquote class="blockquote">
                                    <p class="mb-0">
                                        “Computing makes up 2/3 of projected new jobs in STEM (Science, Technology,
                                        Engineering, and Math).”
                                    </p>
                                </blockquote>
                                <p class="card-text">Computing is a huge field and constitutes the biggest proportion of STEM careers.</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 mb-5">
                        <div class="blurb-card card text-white ls-red">
                            <div class="card-header"><h4 class="card-title text-center">Parents' CS Desires and High School</h4></div>
                            <div class="card-body">
                                <blockquote class="blockquote">
                                    <p class="mb-0">
                                        “Nine in ten parents want their child to study computer science, but only one in
                                        four schools teach computer programming.”
                                    </p>
                                </blockquote>
                                <p class="card-text">Parents have a great demand for computer science education in schools that is not fully met by them. This gap can be partially bridged with online educational resources such as this website.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 mb-5">
                        <div class="blurb-card card text-white ls-yellow">
                            <div class="card-header"><h4 class="card-title text-center">Untapped Potential</h4></div>
                            <div class="card-body">
                                <blockquote class="blockquote">
                                    <p class="mb-0">
                                        “Computing occupations are among the highest-paying jobs for new graduates. Yet
                                        fewer than 3% of college students graduate with a degree in computer science,
                                        and only 8% of STEM graduates are in computer science.”
                                    </p>
                                </blockquote>
                                <p class="card-text">More STEM graduates should go into computer science, or just college students in general.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 mb-5">
                        <div class="blurb-card card text-white ls-purple">
                            <div class="card-header"><h4 class="card-title text-center">High School Credit</h4></div>
                            <div class="card-body">
                                <blockquote class="blockquote">
                                    <p class="mb-0">
                                        “In 22 states, computer science classes don’t count toward math or science high
                                        school graduation requirements.”
                                    </p>
                                </blockquote>
                                <p class="card-text">It's the 21st century, computer science is just as relevant as a material science is.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 mb-5">
                        <div class="blurb-card card text-white ls-cyan">
                            <div class="card-header"><h4 class="card-title text-center">Relevant Education in a New Era</h4></div>
                            <div class="card-body">
                                <blockquote class="blockquote">
                                    <p class="mb-0">
                                        "Every 21st century child should have a chance to learn about algorithms, how to
                                        make an app, or how the internet works. Just like how they learn about
                                        photosynthesis, the digestive system, or electricity."
                                    </p>
                                </blockquote>
                                <p class="card-text">Computer science education is relevant to 21st century children with technology becoming ever so omnipresent in society.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 mb-5">
                        <div class="blurb-card card text-white ls-green">
                            <div class="card-header"><h4 class="card-title text-center">Biggest Job Wage Source</h4></div>
                            <div class="card-body">
                                <blockquote class="blockquote">
                                    <p class="mb-0">
                                        “Computing jobs are the #1 source of new wages in the US.”
                                    </p>
                                </blockquote>
                                <p class="card-text">There is simply no other type of job that constitutes more of the new wages in the US.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 mb-5">
                        <div class="blurb-card card text-white ls-orange">
                            <div class="card-header"><h4 class="card-title text-center">Technology is Changing Everything</h4>
                            </div>
                            <div class="card-body">
                                <blockquote class="blockquote">
                                    <p class="mb-0">
                                        “Computing is changing every part of our lives, from how we interact with each
                                        other to how we do our jobs," according to a report from the Code.org Advocacy
                                        Coalition and the Computer Science Teachers Association.”
                                    </p>
                                </blockquote>
                                <p class="card-text">Try to think of one industry that has not been touched by computing. Almost every single industry has been touched by computing whether directly or indirectly whether it is obvious or not.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 mb-5">
                        <div class="blurb-card card text-white ls-red">
                            <div class="card-header"><h4 class="card-title text-center">Racial Inequality</h4>
                            </div>
                            <div class="card-body">
                                <blockquote class="blockquote">
                                    <p class="mb-0">
                                        “Code.org and CSTA also found that black, Hispanic, poor, and rural students are
                                        less likely than their peers to attend a high school that provides access to
                                        computer science courses.”
                                    </p>
                                </blockquote>
                                <p class="card-text">Underrepresented minorities are even underrepresented in terms of computer science education in high schools.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 mb-5">
                        <div class="blurb-card card text-white ls-yellow">
                            <div class="card-header"><h4 class="card-title text-center">States Taking Initiative</h4>
                            </div>
                            <div class="card-body">
                                <blockquote class="blockquote">
                                    <p class="mb-0">
                                        “Fifteen states now require all high schools to offer computer science, up from
                                        four last year. Several states, including Florida, Indiana, New Hampshire, and
                                        Wyoming, now also require that schools offer some computer science instruction
                                        prior to high school.”
                                    </p>
                                </blockquote>
                                <p class="card-text">States are taking initiative in implementing computer science education, given its significance.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php import('footer.php') ?>
    </body>
</html>
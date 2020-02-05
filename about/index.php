<?php
    include($_SERVER["DOCUMENT_ROOT"] . '/common.php');
?>
<!doctype html>
<html lang="en">
    <head>
        <?php
            import('head.php');
            title('About - LearnCS!');
        ?>
    </head>
    <body>
        <?php
            $active = 'about';
            import('navbar.php')
        ?>
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">
                        About
                    </h1>
                    <p>
                        Site by Andrew Tran. Written with a backend of PHP with a MySQL database.
                    </p>
                    <p>
                        Source code on <a href="https://github.com/28andrew/learncs.tech">GitHub</a>
                    </p>
                    <p>
                        This website is an IBMYP Personal Project.
                    </p>
                </div>
            </div>
            <br/>
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">
                        Site Statistics
                        <?php
                        $completions = 0;
                        $users = 0;
                        $views = 0;
                        $stats = DB::query("SELECT * FROM `statistics`");
                        foreach ($stats as $stat) {
                            $name = $stat['name'];
                            $value = $stat['value'];
                            switch ($name) {
                                case 'completions':
                                    $completions = $value;
                                    break;
                                case 'users':
                                    $users = $value;
                                    break;
                                case 'views':
                                    $views = $value;
                                    break;
                            }
                        }
                        ?>
                    </h1>
                    <p>Registered Users: <?= $users ?></p>
                    <p>Total Site Views: <?= $views ?></p>
                    <p>Tutorial Completions: <?= $completions ?></p>
                </div>
            </div>
        </div>
        <?php import('footer.php') ?>
    </body>
</html>
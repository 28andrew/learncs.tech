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
                <p>Users:  <?=$users?></p>
                <p>Views: <?= $views ?></p>
                <p>Tutorial Completions: <?= $completions ?></p>
            </div>
        </div>
        <?php import('footer.php') ?>
    </body>
</html>
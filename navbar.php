<?php
global $active;
if (!isset($active)) {
    $active = "home";
}

function activeCSSIf($page) {
    global $active;
    return $active == $page ? " active" : "";
}

function activeSRIf($page) {
    global $active;
    return $active == $page ? " <span class=\"sr-only\">(current)</span>" : "";
}
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/"><div class="d-lg-none d-xl-none">LearnCS!</div><div class="d-none d-lg-block">Learn Computer Science!</div></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="container">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item<?=activeCSSIf("home")?>">
                    <a class="nav-link" href="/">Home<?=activeSRIf("home")?></a>
                </li>
                <li class="nav-item<?= activeCSSIf("resources") ?>">
                    <a class="nav-link" href="/resources">Resources<?= activeSRIf("resources") ?></a>
                </li>
                <li class="nav-item<?= activeCSSIf("articles") ?>">
                    <a class="nav-link" href="/articles">Articles<?= activeSRIf("articles") ?></a>
                </li>
                <li class="nav-item<?= activeCSSIf("tutorials") ?>">
                    <a class="nav-link" href="/tutorials">Tutorials<?= activeSRIf("tutorials") ?></a>
                </li>
                <li class="nav-item<?=activeCSSIf("about")?>">
                    <a class="nav-link" href="/about">About<?=activeSRIf("about")?></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item<?= activeCSSIf("bibliography") ?>">
                    <a class="nav-link text-danger" href="/sources">MLA
                        Bibliography<?= activeSRIf("bibliography") ?></a>
                </li>
            </ul>
            <?php
            if ($active != "search") {
                ?>
                <form target="_blank" class="form-inline my-2 my-lg-0"
                      onsubmit="window.location.href='search'; return false; ">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit"
                            onclick="window.location.href='search'; return false; ">Search
                    </button>
                </form>
                <?php
            }
            ?>
        </div>
    </div>
</nav>
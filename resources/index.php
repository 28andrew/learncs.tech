<?php
include($_SERVER["DOCUMENT_ROOT"] . '/common.php');
?>
<!doctype html>
<html lang="en">
<head>
    <?php
    import('head.php');
    title('Resources - LearnCS!');
    ?>
</head>
<body>
<?php
$active = 'resources';
import('navbar.php')
?>
    <div class="container">
        <h1>Resources</h1>
        <p>Browse and filter through this curated list of resources that can help with learning and understanding computer science.</p>
        <div class="row">
            <div class="col-sm-12 col-lg-3">
                <div class="jumbotron">
                    <form id="filter-form">
                        <div class="form-group">
                            <label for="formSelectSortBy">Sort By</label>
                            <select class="form-control" id="formSelectSortBy">
                                <option value="name">Name</option>
                                <option value="grade_level_d">Grade Level (descending)</option>
                                <option value="grade_level_a">Grade Level (ascending)</option>
                                <option value="random">Random</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="formSelectTarget">Target Demographic</label>
                            <select multiple class="form-control" id="formSelectTarget" style="min-height: 125px; overflow: auto;">
                                <option selected value="pre_k_school">Pre-K</option>
                                <option selected value="elementary_school">Elementary (K-5)</option>
                                <option selected value="middle_school">Middle (6-8)</option>
                                <option selected value="high_school">High (9-12)</option>
                                <option selected value="advanced">Advanced/Other</option>
                            </select>
                        </div>
                        <button id="updateButton" class="btn btn-primary d-md-none d-lg-none d-xl-none">Update</button>
                    </form>
                </div>
            </div>
            <div class="col-sm-12 col-lg-9">
                <div class="jumbotron" id="card-holder">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Name</h5>
                            <h6 class="card-subtitle mb-2 text-muted">(mla last)</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="card-link">http://Card link</a>
                            <br>
                            <span class="badge badge-primary">Primary</span>
                            <span class="badge badge-dark">Dark</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php import('footer.php') ?>
<script>

    var selectMultiple = $("#formSelectTarget");
    var cardHolder = $("#card-holder");

    function addCard(data, index) {
        var resource = data[index];
        // Open card + card body
        var html = '<div class="card"><div class="card-body">';
        // START BODY

        // title
        html += '<h5 class="card-title">' + resource['title'] + '</h5>';
        // source
        var source = resource['source'];
        if (source) {
            html += '<h6 class="card-subtitle mb-2 text-muted">' +
                '<a href="' + source['url'] + '" style="color: inherit; text-decoration: inherit;">' + source['mla'] +
                '</a></h6>';
        }
        // description
        html += '<p class="card-text">' + resource['description'] + '</p>';
        // link
        html += '<a target="_blank" rel="noopener noreferrer" href="' + resource['url'] + '" class="card-link">' + resource['url'] + '</a>';
        // tags
        html += '<br>';
        $.each(resource['tags'], function (i, tag) {
            html += '<span class="badge badge-' + tag['color'] + '" style="margin-right: 5px;">' + tag['display_name'] + '</span>';
        });

        // END BODY bod
        // Close card + cardy
        html += '</div></div>';
        html += '<br>';
        cardHolder.append(html);
        var nextIndex = index + 1;
        var maxIndex = data.length - 1;
        if (nextIndex <= maxIndex) {
            setTimeout(function(){ addCard(data, nextIndex)}, 10);
        } else {
            $("#loading-icon").remove();
        }
    }

    function highestTargetTagId(tagArray) {
        var highestId = -1;
        for (var i = 0; i < tagArray.length; i++) {
            var tag = tagArray[i];
            var id = tag['id'];
            if (tag['target'] == 1 && id > highestId) {
                highestId = id;
            }
        }
        console.log(highestId);
        return highestId * 10 + tagArray.length;
    }

    // From : https://stackoverflow.com/questions/6274339/how-can-i-shuffle-an-array
    /**
     * Shuffles array in place.
     * @param {Array} a items An array containing the items.
     */
    function shuffle(a) {
        var j, x, i;
        for (i = a.length - 1; i > 0; i--) {
            j = Math.floor(Math.random() * (i + 1));
            x = a[i];
            a[i] = a[j];
            a[j] = x;
        }
        return a;
    }

    function sortData(data) {
        var mode = $("#formSelectSortBy").val();
        if (mode === "name") {
            data.sort((a, b) => (a.title > b.title) ? 1 : -1);
        } else if (mode === "grade_level_d" || mode === "grade_level_a") {
            data.sort(function(a, b) {
               var aId = highestTargetTagId(a['tags']);
               var bId = highestTargetTagId(b['tags']);
               if (aId === bId) {
                   return 0
               } else {
                   if (mode === "grade_level_a") {
                       return aId > bId ? 1 : -1;
                   } else {
                       return bId > aId ? 1 : -1;
                   }
               }
            });
        } else if (mode === "random") {
            data = shuffle(data);
        }

        return data;
    }

    function updateCards() {
        // Find selected tags
        var tags = selectMultiple.val() || [];
        console.log(tags);
        // Clear jumbotron & add loading icon
        cardHolder.html("<div class=\"d-flex justify-content-center\" id=\"loading-icon\"> <div class=\"spinner-border\" role=\"status\"> <span class=\"sr-only\">Loading...</span> </div> </div><br>");
        // Find cards
        $.getJSON("data.php?tags=" + tags, function (data) {
            data = sortData(data);
            addCard(data, 0);
        });
    }

    updateCards();

    $("#formSelectSortBy").change(function() {
       setTimeout(updateCards, 250);
    });
    // Adapted from https://stackoverflow.com/questions/2096259/how-to-toggle-selection-of-an-option-in-a-multi-select-with-jquery
    $("select[multiple] option").bind('mousedown touchstart touchend', function () {
        var $self = $(this);
        if ($self.prop("selected"))
            $self.prop("selected", false);
        else
            $self.prop("selected", true);
        setTimeout(updateCards, 250);
        return false;
    });

    $("#updateButton").click(function() {
        setTimeout(updateCards, 250);
        return false;
    });
</script>
</body>
</html>
<?php

function create_checkbox($userId, $tutorialId){
    if (!is_int($tutorialId)) {
        return;
    }
    $result = DB::queryFirstRow("SELECT * FROM `tutorial_completions` WHERE `user`=%s AND `tutorial`=%s", $userId, $tutorialId);
    $completed = $result != null && !empty($result);
    ?>
    <div class="container">
        <br/>
        <div class="alert alert-success" role="alert">
            <p>
                Look out for these checkboxes to mark when you are completed with tutorials
            </p>
            <div style="padding: 20px;">
                <input class="form-check-input big-checkbox" type="checkbox"
                       id="completedCheckbox" <?= $completed ? "checked" : "" ?>>
                <label for="completedCheckbox">Completed</label>
            </div>
        </div>
    </div>
    <script>
        $("#completedCheckbox").on('change', function() {
           var checked = this.checked;
           $.ajax({
            type: "POST",
            url: "completed.php",
            data: {checked: checked, tutorial: <?=$tutorialId?>,token: getCookie("token")}
           });
        });

        // From w3 schools
        function getCookie(cname) {
            var name = cname + "=";
            var decodedCookie = decodeURIComponent(document.cookie);
            var ca = decodedCookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }
    </script>
    <?php
}
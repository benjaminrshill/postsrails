<!DOCTYPE html>
<html>
<head>
    <title>Posts &amp; Railings</title>
</head>
<body>

<?php require 'postsrails.php'; ?>

<form method="post">

    <h4>How many posts and railings do you have?</h4>

    <label for="posts">Posts:</label>
    <input id="posts" type="number" name="postCount" min="2" required="required" />

    <label for="posts">Railings:</label>
    <input id="railings" type="number" name="railCount" min="1" required="required" />

    <input type="submit" name="submitCount" />

</form>

<p><?php
    if (isset($_POST['submitCount'])) {
        $postCount = $_POST['postCount'];
        $railCount = $_POST['railCount'];
        echo fenceCount($postCount, $railCount, $post, $rail);
    }
    ?></p>

<br />

<form method="post">

    <h4>How long would you like your fence to be?</h4>

    <label for="length">Length (metres):</label>
    <input id="length" type="number" name="desiredLength" min="1.7" step="0.1" required="required" />

    <input type="submit" name="submitLength" />

</form>

<p><?php
    if (isset($_POST['submitLength'])) {
        $desiredLength = $_POST['desiredLength'];
        echo fenceLength($desiredLength, $post, $rail);
    }
    ?></p>

</body>
</html>
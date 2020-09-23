<!DOCTYPE html>
<html>
<head>
    <title>Posts &amp; Railings</title>
</head>
<body>

<?php require 'postsrails.php' ?>

<form action="" method="post">
    <h4>How many posts and railings do you have?</h4>
    Posts: <input type="text" name="postCount" />
    Railings: <input type="text" name="railCount" />
    <input type="submit" name="submitCount" />
</form>

<p><?php
    if (isset($_POST['submitCount'])) {
        $postCount = $_POST['postCount'];
        $railCount = $_POST['railCount'];
        echo fenceCount($postCount, $railCount);
    }
    ?></p>

<br />

<form action="" method="post">
    <h4>How long would you like your fence to be?</h4>
    Length (metres): <input type="text" name="desiredLength" />
    <input type="submit" name="submitLength" />
</form>

<p><?php
    if (isset($_POST['submitLength'])) {
        $desiredLength = $_POST['desiredLength'];
        echo fenceLength($desiredLength);
    }
    ?></p>

</body>
</html>
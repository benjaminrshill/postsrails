<!DOCTYPE html>
<html>
<head>
    <title>Posts &amp; Railings</title>
</head>
<body>
<body>
    <?php
    $post = 10;
    $rail = 150;
    ?>
    <form action="" method="post">
        <h4>How many posts and railings do you have?</h4>
        Posts: <input type="text" name="postCount" />
        Railings: <input type="text" name="railCount" />
        <input type="submit" name="submitCount" />
    </form>
    <p>
        <?php
        if (isset($_POST['submitCount'])) {
            $postCount = $_POST['postCount'];
            $railCount = $_POST['railCount'];
            if (is_numeric($postCount) && is_numeric($railCount)) {
                if ($postCount > 1 && $railCount > 0) {
                    if ($postCount > $railCount) {
                        $usedPostCount = $railCount;
                        $usedPostCount++;
                        $totalLength = (($post * $usedPostCount) + ($rail * $railCount)) / 100;
                        echo "<p>You can build a fence $totalLength metres long!</p>";
                    } elseif ($postCount <= $railCount) {
                        $usedRailCount = --$postCount;
                        $totalLength = (($rail * $usedRailCount) + ($post * $postCount)) / 100;
                        echo "<p>You can build a fence $totalLength metres long!</p>";
                    }
                } else {
                    echo 'You need at least 2 posts and 1 railing!';
                }
            } else {
                echo 'Please input two numbers!';
            }
        }
        ?>
    </p>
    <br />
    <form action="" method="post">
        <h4>How long would you like your fence to be?</h4>
        Length (metres): <input type="text" name="desiredLength" />
        <input type="submit" name="submitLength" />
    </form>
    <p>
        <?php
        if (isset($_POST['submitLength'])) {
            if ($_POST['desiredLength'] < 0) {
                echo 'Your fence can\'t be a negative length!';
            } elseif (is_numeric($_POST['desiredLength'])) {
                $desiredLength = $_POST['desiredLength'] * 100;
                if ($desiredLength >= 330) {
                    $neededPosts = 2;
                    $neededRails = 1;
                    while (($post * $neededPosts) + ($rail * $neededRails) < $desiredLength) {
                        $neededPosts++;
                        $neededRails++;
                    }
                    echo "<p>You will need $neededPosts posts and $neededRails railings!</p>";
                } else {
                    echo '<p>The minimum length of fence possible is 3.3m.</p><p>You\'ll need at least 2 posts and 1 railing!</p>';
                }
            } else {
                echo 'Please input a number!';
            }
        }
        ?>
    </p>
</body>
</html>
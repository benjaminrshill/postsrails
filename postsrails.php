<?php

function fenceCount(int $postCount, int $railCount) : string {
    $post = 10;
    $rail = 150;
    if (is_numeric($postCount) && is_numeric($railCount)) {
        if ($postCount > 1 && $railCount > 0) {
            if ($postCount > $railCount) {
                $usedPostCount = $railCount;
                $usedPostCount++;
                $totalLength = (($post * $usedPostCount) + ($rail * $railCount)) / 100;
                return "<p>You can build a fence $totalLength metres long!</p>";
            } elseif ($postCount <= $railCount) {
                $usedRailCount = --$postCount;
                $totalLength = (($rail * $usedRailCount) + ($post * $postCount)) / 100;
                return "<p>You can build a fence $totalLength metres long!</p>";
            }
        } else {
            return 'You need at least 2 posts and 1 railing!';
        }
    } else {
        return 'Please input two numbers!';
    }
}

function fenceLength($desiredLength) : string {
    $post = 10;
    $rail = 150;
    if ($desiredLength < 0) {
        return 'Your fence can\'t be a negative length!';
    } elseif (is_numeric($desiredLength)) {
        $metreDesiredLength = $desiredLength * 100;
        if ($metreDesiredLength >= 330) {
            $neededPosts = 2;
            $neededRails = 1;
            while (($post * $neededPosts) + ($rail * $neededRails) < $metreDesiredLength) {
                $neededPosts++;
                $neededRails++;
            }
            return "<p>You will need $neededPosts posts and $neededRails railings!</p>";
        } else {
            return '<p>The minimum length of fence possible is 3.3m.</p><p>You\'ll need at least 2 posts and 1 railing!</p>';
        }
    } else {
        return 'Please input a number!';
    }
}

?>
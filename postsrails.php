<?php

$post = 10;
$rail = 150;

/**
 * Take user input posts and rails, plus default post length and railing length, and calculate closest length possible
 *
 * @param   int   postCount
 * @param   int   railCount
 * @param   int   post
 * @param   int   rail
 *
 * @return  string
 */

function fenceCount(int $postCount, int $railCount, int $post, int $rail) : string {
    if ($postCount > $railCount) {
        $usedPostCount = $railCount;
        $usedPostCount++;
        $totalLength = (($post * $usedPostCount) + ($rail * $railCount)) / 100;
    } else {
        $usedRailCount = --$postCount;
        $totalLength = (($rail * $usedRailCount) + ($post * $postCount)) / 100;
    }
    return "You can build a fence $totalLength metres long!";
}

/**
 * Take user input length, plus default post length and railing length, and calculate minimum posts and railings needed
 *
 * @param   int   desiredLength
 * @param   int   post
 * @param   int   rail
 *
 * @return  string
 */
function fenceLength(int $desiredLength, int $post, int $rail) : string {
    $cmDesiredLength = $desiredLength * 100;
    $neededPosts = 2;
    $neededRails = 1;
    while (($post * $neededPosts) + ($rail * $neededRails) < $cmDesiredLength) {
        $neededPosts++;
        $neededRails++;
    }
    return "You will need $neededPosts posts and $neededRails railings!";
}

?>
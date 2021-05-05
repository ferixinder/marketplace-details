<?php
    $projectID = "YOUR_PROJECT_ID";
    $project = "https://www.minecraft.net/bin/minecraft/productmanagement.productdetails.json?id=" . $projectID;
    $source = file_get_contents($project);
    $data = json_decode($source, true);

    $title = $data['title']['en-US'];
    $totalRating = $data['rating']['totalRatingsCount'];
    $avgRating = $data['rating']['averageRating'];
    $fiveStars = $data['rating']['star5Count'];
    $fourStars = $data['rating']['star4Count'];
    $threeStars = $data['rating']['star3Count'];
    $twoStars = $data['rating']['star2Count'];
    $oneStars = $data['rating']['star1Count'];
    $price = $data['displayProperties']['price'] . " MineCoin";
    $details = $data['description']['neutral'];

    print_r($data);
?>

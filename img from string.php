<?php
/**
 * Created by hh.
 * User: hakhagmon
 * Date: 21.02.2018
 * Time: 2:20
 */


$html = "<div class=\"page_post_sized_thumbs clear_fix\" style=\"width: 537px; height: 130px;\"><a href=\"/photo-32041317_405187427\" onclick=\"return showPhoto('-32041317_405187427', 'feed1_-32041317_1457877045', {&quot;temp&quot;:{&quot;base&quot;:&quot;https://pp.vk.me/c543106/v543106645/&quot;,&quot;x_&quot;:[&quot;e8ef/fIRYlK5M_xY&quot;,600,491]},queue: 1}, event);\" style=\"width: 130px; height: 130px;\" class=\"page_post_thumb_wrap  page_post_thumb_last_row fl_l\"><img src=\"https://pp.vk.me/c543106/v543106645/e8f1/ec0WSrvcQXA.jpg\" width=\"158\" height=\"130\" style=\"margin-left: -9px;\" class=\"page_post_thumb_sized_photo\"></a><a href=\"/photo-32041317_405187422\" onclick=\"return showPhoto('-32041317_405187422', 'feed1_-32041317_1457877045', {&quot;temp&quot;:{&quot;base&quot;:&quot;https://pp.vk.me/c543106/v543106645/&quot;,&quot;x_&quot;:[&quot;e8e5/CLy8YmIwmwg&quot;,340,604],&quot;y_&quot;:[&quot;e8e6/I0rlFnifzUY&quot;,454,807],&quot;z_&quot;:[&quot;e8e7/5xFvGL5xs_4&quot;,608,1080]},queue: 1}, event);\" style=\"width: 73px; height: 130px;\" class=\"page_post_thumb_wrap  page_post_thumb_last_row fl_l\"><img src=\"https://pp.vk.me/c543106/v543106645/e8e9/OARjAXoXTOY.jpg\" width=\"73\" height=\"130\" style=\"margin-left: 0px;\" class=\"page_post_thumb_sized_photo\"></a><a href=\"/photo-32041317_405187418\" onclick=\"return showPhoto('-32041317_405187418', 'feed1_-32041317_1457877045', {&quot;temp&quot;:{&quot;base&quot;:&quot;https://pp.vk.me/c543106/v543106645/&quot;,&quot;x_&quot;:[&quot;e8dc/ZcEJtjHx86s&quot;,399,604],&quot;y_&quot;:[&quot;e8dd/zv9a3V-NUNc&quot;,533,807],&quot;z_&quot;:[&quot;e8de/x1qUJKh58GI&quot;,580,878]},queue: 1}, event);\" style=\"width: 86px; height: 130px;\" class=\"page_post_thumb_wrap  page_post_thumb_last_row fl_l\"><img src=\"https://pp.vk.me/c543106/v543106645/e8df/EAx6APuN3O8.jpg\" width=\"86\" height=\"130\" style=\"margin-top: 0px;\" class=\"page_post_thumb_sized_photo\"></a><a href=\"/photo-32041317_405187409\" onclick=\"return showPhoto('-32041317_405187409', 'feed1_-32041317_1457877045', {&quot;temp&quot;:{&quot;base&quot;:&quot;https://pp.vk.me/c543106/v543106645/&quot;,&quot;x_&quot;:[&quot;e8d3/r4MAxMHNerk&quot;,431,604],&quot;y_&quot;:[&quot;e8d4/elv_Pi6VFXU&quot;,576,807],&quot;z_&quot;:[&quot;e8d5/lmwxBrx1Ah8&quot;,700,981]},queue: 1}, event);\" style=\"width: 92px; height: 130px;\" class=\"page_post_thumb_wrap  page_post_thumb_last_row fl_l\"><img src=\"https://pp.vk.me/c543106/v543106645/e8d6/-6FpJi5qJ3o.jpg\" width=\"93\" height=\"130\" style=\"margin-left: 0px;\" class=\"page_post_thumb_sized_photo\"></a><a href=\"/photo-32041317_405187398\" onclick=\"return showPhoto('-32041317_405187398', 'feed1_-32041317_1457877045', {&quot;temp&quot;:{&quot;base&quot;:&quot;https://pp.vk.me/c543106/v543106645/&quot;,&quot;x_&quot;:[&quot;e8cc/UnaUid9QwKU&quot;,599,381]},queue: 1}, event);\" style=\"width: 132px; height: 130px;\" class=\"page_post_thumb_wrap  page_post_thumb_last_column page_post_thumb_last_row fl_l\"><img src=\"https://pp.vk.me/c543106/v543106645/e8ce/buzMxY7wO9g.jpg\" width=\"195\" height=\"130\" style=\"margin-left: -21px;\" class=\"page_post_thumb_sized_photo\"></a></div>";

$dom = new DOMDocument();
$dom->loadHTML($html); // Have tried stripping all tags but <img>, still generates warning
$nodes = $dom->getElementsByTagName('img');
foreach ($nodes as $img) {
    $images[] = $img->getAttribute('src');
}


print_r($images);
<?php
$meta = array(
    'title' => setting('title'),
    'description' => setting('description'),
    'keywords' => setting('keywords')
);
$query2 = $db->from('tags')
    ->select('tags.*')
    ->all();

$totalRecord = $db->from('posts')
    ->select('count(post_id) as total')
    ->join('categories', 'FIND_IN_SET(categories.category_id, posts.post_categories)')
    ->where('post_status', 1)
    ->groupby('posts.post_id')
    ->total();

$pageLimit = 10;
$pageParam = 'sayfa';
$pagination = $db->pagination($totalRecord, $pageLimit, $pageParam);

$query = $db->from('posts')
    ->select('posts.*, GROUP_CONCAT(category_name SEPARATOR ", ") as category_name, GROUP_CONCAT(category_url SEPARATOR ", ") as category_url')
    ->join('categories', 'FIND_IN_SET(categories.category_id, posts.post_categories)')
    ->where('post_status', 1)
    ->groupby('posts.post_id')
    ->orderby('post_id', 'DESC')
    ->limit($pagination['start'], $pagination['limit'])
    ->all();

require view('index');
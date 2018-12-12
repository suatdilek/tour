<?php
$category_url = route(2);


if (!$category_url) {
    header('Location:' . site_url('404'));
    exit;
}
$query2 = $db->from('tags')
    ->select('tags.*')
    ->all();

$category2 = $db->from('categories')
    ->where('category_url', $category_url)
    ->first();
if (!$category2) {
    header('Location:' . site_url('404'));
    exit;
}


$seo = json_decode($category2['category_seo'], true);

$meta = [
    'title' => $seo['title'] ? $seo['title'] : $category2['category_name'],
    'description' => $seo['description'] ? $seo['description'] : null
];

$totalRecord = $db->from('posts')
    ->select('count(DISTINCT post_id) as total')
    ->join('categories', 'FIND_IN_SET(categories.category_id, posts.post_categories)')
    ->where('post_status', 1)
    ->find_in_set('post_categories', $category2['category_id'])
    ->total();

$pageLimit = 10;
$pageParam = 'sayfa';
$pagination = $db->pagination($totalRecord, $pageLimit, $pageParam);

$query = $db->from('posts')
    ->select('posts.*, GROUP_CONCAT(category_name SEPARATOR ", ") as category_name, GROUP_CONCAT(category_url SEPARATOR ", ") as category_url')
    ->join('categories', 'FIND_IN_SET(categories.category_id, posts.post_categories)')
    ->where('post_status', 1)
    ->find_in_set('post_categories', $category2['category_id'])
    ->groupby('posts.post_id')
    ->orderby('post_id', 'DESC')
    ->limit($pagination['start'], $pagination['limit'])
    ->all();



require view('blog-category');

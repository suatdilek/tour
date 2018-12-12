<?php
$page_url = route(1);
if(!$page_url){
    header('Location'. site_url('404'));
    exit();
}

$row = $db->from('pages')
    ->where('page_url',$page_url)
    ->first();

if(!$row){
    header('Location'. site_url('404'));
    exit();

}

$seo= json_decode($row['page_seo'], true);

$meta = array(
    'title' => $seo['title'] ? $seo['title'] : $row['page_title'],
    'description' => $seo['description'] ? $seo['description'] : cut_text($row['page_content'], 180)
);

require view('page');
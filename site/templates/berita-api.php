<?php

// if(!r::is_ajax()) notFound();

header('Content-type: application/json; charset=utf-8');

$data = $pages
        ->find('berita')
        ->children()
        ->visible()
        ->flip()
        ->paginate(10);
$json = array();

foreach($data as $article) {

    $json[] = array(
        'url'   => (string)$article->url(),
        'title' => (string)$article->title(),
        'text'  => (string)$article->text(),
        'date'  => (string)$article->date(),
        'images' => (string)$article->images()
    );

}

// echo "<pre>";
// print_r($json);
echo json_encode($json);

?>
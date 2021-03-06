<?php

$href = elgg_extract('href', $vars);
$iframe = elgg_extract('iframe', $vars) || elgg_is_xhr();

$data = hypeapps_scrape($url);
if (!$data) {
	return;
}
$title = $data['title'];

if ($iframe) {
	$layout = elgg_view('output/player', [
		'href' => $href,
	]);
} else {

	$content = elgg_view('output/card', [
		'href' => $href,
		'full_view' => true,
	]);

	$layout = elgg_view_layout('content', [
		'filter' => false,
		'title' => $title,
		'content' => $content,
	]);
}

$shell = ($iframe) ? 'iframe' : 'default';
echo elgg_view_page($title, $layout, $shell);

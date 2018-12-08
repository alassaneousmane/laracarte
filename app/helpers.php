<?php 

use App\Models\Message;


if(!function_exists('page_title')) {
	function page_title($title) {
		$base_title = config('app.name'). ' - List of artisans';

		return empty($title) ? $base_title : sprintf('%s | %s', $title, $base_title);
		
	}
}

if(!function_exists('set_active_route')) {
	function set_active_route($route) {
		return Route::is($route) ? 'active' : '';
	}
}

if(!function_exists('number_of_messages')) {
	function number_of_messages() {
		$count = Message::count();
		if($count == 1) {
			return $count. ' message envoyé';
		}
		return $count != 0 ? $count. ' messages envoyés' : 'Pas de messages';
	}
}
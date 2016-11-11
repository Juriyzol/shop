<?php

return array (
	
	'/news/([0-9]+)' => 'news/view/$1',	
	'/news' => 'news/index',
	
	'/catalog/([0-9]+)' => 'catalog/category/$1',	
	'/catalog' => 'catalog/index',
	
	'/products/([0-9]+)' => 'products/view/$1',
	'' => 'site/index',
	
);

/*

*/
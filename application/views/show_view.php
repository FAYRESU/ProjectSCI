<?php
echo doctype('html5');
echo heading('Software Engineering', 1, 'id="headername"');
echo br(5);

$image_properties = array('src' => 'https://www.popticles.com/wp-content/uploads/2023/12/Starbucks_Corporation_Logo_2011.png', 'width' => '200', 'height' => '200', 'alt' => 'starbuck images',);

echo img($image_properties);

$list = array(
	'red',
	'blue',
	'green',
	'yellow'
);

echo ol($list);

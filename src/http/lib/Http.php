<?php
namespace httpTool\http;

class Http
{

	public static function requestByGet($url)
	{
		$content = file_get_contents($url);
		return $content;

	}

}

?>

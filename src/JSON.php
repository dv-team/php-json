<?php
namespace DvTeam\JSON;

use JsonException;
use RuntimeException;

abstract class JSON {
	/**
	 * @param mixed|null $input
	 * @param bool $pretty
	 * @return string
	 */
	public static function stringify($input, bool $pretty = false): string {
		$options = JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_THROW_ON_ERROR;
		if($pretty) {
			$options |= JSON_PRETTY_PRINT;
		}
		return json_encode($input, $options);
	}
	
	/**
	 * @param string $input
	 * @return mixed|null
	 */
	public static function parse(string $input) {
		try {
			return json_decode($input, false, 512, JSON_THROW_ON_ERROR);
		} catch (JsonException $e) {
			throw new RuntimeException($e->getMessage(), $e->getCode(), $e);
		}
	}
}

<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6de5904d02adcc89a80e07529827df6b {

	public static $prefixLengthsPsr4 = array(
		'C' =>
		array(
			'CCFW\\' => 5,
		),
	);

	public static $prefixDirsPsr4 = array(
		'CCFW\\' =>
		array(
			0 => __DIR__ . '/../..' . '/inc',
		),
	);

	public static function getInitializer( ClassLoader $loader ) {
		return \Closure::bind(
			function () use ( $loader ) {
				$loader->prefixLengthsPsr4 = ComposerStaticInit6de5904d02adcc89a80e07529827df6b::$prefixLengthsPsr4;
				$loader->prefixDirsPsr4    = ComposerStaticInit6de5904d02adcc89a80e07529827df6b::$prefixDirsPsr4;

			},
			null,
			ClassLoader::class
		);
	}
}

<?php declare(strict_types = 1);

return new \PHPStan\Reflection\Native\NativeFunctionReflection(
	'mysql_set_charset',
	[
       new \PHPStan\Reflection\Native\NativeParameterReflection(
			'charset',
			false,
			PHPStan\Type\StringType::__set_state(array()),
			false,
			false
		),
       new \PHPStan\Reflection\Native\NativeParameterReflection(
			'link_identifier',
			true,
			PHPStan\Type\MixedType::__set_state(array(    'isExplicitMixed' => false, )),
			false,
			false
		),

	],
	false,
	PHPStan\Type\BooleanType::__set_state(array())
);

<?php declare(strict_types = 1);

return new \PHPStan\Reflection\Native\NativeFunctionReflection(
	'http_match_modified',
	[
       new \PHPStan\Reflection\Native\NativeParameterReflection(
			'timestamp',
			true,
			PHPStan\Type\IntegerType::__set_state(array()),
			false,
			false
		),
       new \PHPStan\Reflection\Native\NativeParameterReflection(
			'for_range',
			true,
			PHPStan\Type\BooleanType::__set_state(array()),
			false,
			false
		),

	],
	false,
	PHPStan\Type\BooleanType::__set_state(array())
);

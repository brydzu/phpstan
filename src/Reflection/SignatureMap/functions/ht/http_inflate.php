<?php declare(strict_types = 1);

return new \PHPStan\Reflection\Native\NativeFunctionReflection(
	'http_inflate',
	[
       new \PHPStan\Reflection\Native\NativeParameterReflection(
			'data',
			false,
			PHPStan\Type\StringType::__set_state(array()),
			false,
			false
		),

	],
	false,
	PHPStan\Type\StringType::__set_state(array())
);

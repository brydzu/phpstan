<?php declare(strict_types = 1);

return new \PHPStan\Reflection\Native\NativeFunctionReflection(
	'iis_get_server_by_comment',
	[
       new \PHPStan\Reflection\Native\NativeParameterReflection(
			'comment',
			false,
			PHPStan\Type\StringType::__set_state(array()),
			false,
			false
		),

	],
	false,
	PHPStan\Type\IntegerType::__set_state(array())
);

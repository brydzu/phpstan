<?php declare(strict_types = 1);

return new \PHPStan\Reflection\Native\NativeFunctionReflection(
	'is_uploaded_file',
	[
       new \PHPStan\Reflection\Native\NativeParameterReflection(
			'path',
			false,
			PHPStan\Type\StringType::__set_state(array()),
			false,
			false
		),

	],
	false,
	PHPStan\Type\BooleanType::__set_state(array())
);

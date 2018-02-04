<?php declare(strict_types = 1);

return new \PHPStan\Reflection\Native\NativeFunctionReflection(
	'imagecreatefromstring',
	[
       new \PHPStan\Reflection\Native\NativeParameterReflection(
			'image',
			false,
			PHPStan\Type\StringType::__set_state(array()),
			false,
			false
		),

	],
	false,
	PHPStan\Type\ResourceType::__set_state(array())
);

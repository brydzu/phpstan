<?php declare(strict_types = 1);

return new \PHPStan\Reflection\Native\NativeFunctionReflection(
	'fann_get_cascade_max_out_epochs',
	[
       new \PHPStan\Reflection\Native\NativeParameterReflection(
			'ann',
			false,
			PHPStan\Type\ResourceType::__set_state(array()),
			false,
			false
		),

	],
	false,
	PHPStan\Type\IntegerType::__set_state(array())
);

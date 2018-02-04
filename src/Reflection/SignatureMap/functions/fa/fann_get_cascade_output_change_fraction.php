<?php declare(strict_types = 1);

return new \PHPStan\Reflection\Native\NativeFunctionReflection(
	'fann_get_cascade_output_change_fraction',
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
	PHPStan\Type\FloatType::__set_state(array())
);

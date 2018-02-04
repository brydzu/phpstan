<?php declare(strict_types = 1);

return new \PHPStan\Reflection\Native\NativeFunctionReflection(
	'datefmt_set_pattern',
	[
       new \PHPStan\Reflection\Native\NativeParameterReflection(
			'fmt',
			false,
			PHPStan\Type\ObjectType::__set_state(array(    'className' => 'IntlDateFormatter', )),
			false,
			false
		),
       new \PHPStan\Reflection\Native\NativeParameterReflection(
			'pattern',
			false,
			PHPStan\Type\StringType::__set_state(array()),
			false,
			false
		),

	],
	false,
	PHPStan\Type\BooleanType::__set_state(array())
);

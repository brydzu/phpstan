<?php declare(strict_types = 1);

return new \PHPStan\Reflection\Native\NativeFunctionReflection(
	'uopz_function',
	[
       new \PHPStan\Reflection\Native\NativeParameterReflection(
			'class',
			false,
			PHPStan\Type\StringType::__set_state(array()),
			false,
			false
		),
       new \PHPStan\Reflection\Native\NativeParameterReflection(
			'function',
			false,
			PHPStan\Type\StringType::__set_state(array()),
			false,
			false
		),
       new \PHPStan\Reflection\Native\NativeParameterReflection(
			'handler',
			false,
			PHPStan\Type\ObjectType::__set_state(array(    'className' => 'Closure', )),
			false,
			false
		),
       new \PHPStan\Reflection\Native\NativeParameterReflection(
			'modifiers',
			true,
			PHPStan\Type\IntegerType::__set_state(array()),
			false,
			false
		),

	],
	false,
	PHPStan\Type\VoidType::__set_state(array())
);

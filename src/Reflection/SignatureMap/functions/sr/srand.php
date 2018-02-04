<?php declare(strict_types = 1);

return new \PHPStan\Reflection\Native\NativeFunctionReflection(
	'srand',
	[
       new \PHPStan\Reflection\Native\NativeParameterReflection(
			'seed',
			true,
			PHPStan\Type\IntegerType::__set_state(array()),
			false,
			false
		),
       new \PHPStan\Reflection\Native\NativeParameterReflection(
			'mode',
			true,
			PHPStan\Type\IntegerType::__set_state(array()),
			false,
			false
		),

	],
	false,
	PHPStan\Type\MixedType::__set_state(array(    'isExplicitMixed' => false, ))
);

<?php declare(strict_types = 1);

return new \PHPStan\Reflection\Native\NativeFunctionReflection(
	'ps_setlinecap',
	[
       new \PHPStan\Reflection\Native\NativeParameterReflection(
			'psdoc',
			false,
			PHPStan\Type\MixedType::__set_state(array(    'isExplicitMixed' => false, )),
			false,
			false
		),
       new \PHPStan\Reflection\Native\NativeParameterReflection(
			'type',
			false,
			PHPStan\Type\IntegerType::__set_state(array()),
			false,
			false
		),

	],
	false,
	PHPStan\Type\BooleanType::__set_state(array())
);

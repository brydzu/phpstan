<?php declare(strict_types = 1);

return new \PHPStan\Reflection\Native\NativeFunctionReflection(
	'ssh2_fingerprint',
	[
       new \PHPStan\Reflection\Native\NativeParameterReflection(
			'session',
			false,
			PHPStan\Type\MixedType::__set_state(array(    'isExplicitMixed' => false, )),
			false,
			false
		),
       new \PHPStan\Reflection\Native\NativeParameterReflection(
			'flags',
			true,
			PHPStan\Type\IntegerType::__set_state(array()),
			false,
			false
		),

	],
	false,
	PHPStan\Type\StringType::__set_state(array())
);

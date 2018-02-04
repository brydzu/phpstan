<?php declare(strict_types = 1);

return new \PHPStan\Reflection\Native\NativeFunctionReflection(
	'gupnp_root_device_start',
	[
       new \PHPStan\Reflection\Native\NativeParameterReflection(
			'root_device',
			false,
			PHPStan\Type\MixedType::__set_state(array(    'isExplicitMixed' => false, )),
			false,
			false
		),

	],
	false,
	PHPStan\Type\BooleanType::__set_state(array())
);

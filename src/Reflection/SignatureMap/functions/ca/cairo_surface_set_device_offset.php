<?php declare(strict_types = 1);

return new \PHPStan\Reflection\Native\NativeFunctionReflection(
	'cairo_surface_set_device_offset',
	[
       new \PHPStan\Reflection\Native\NativeParameterReflection(
			'surface',
			false,
			PHPStan\Type\ObjectType::__set_state(array(    'className' => 'cairosurface', )),
			false,
			false
		),
       new \PHPStan\Reflection\Native\NativeParameterReflection(
			'x',
			false,
			PHPStan\Type\FloatType::__set_state(array()),
			false,
			false
		),
       new \PHPStan\Reflection\Native\NativeParameterReflection(
			'y',
			false,
			PHPStan\Type\FloatType::__set_state(array()),
			false,
			false
		),

	],
	false,
	PHPStan\Type\MixedType::__set_state(array(    'isExplicitMixed' => false, ))
);

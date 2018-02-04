<?php declare(strict_types = 1);

return new \PHPStan\Reflection\Native\NativeFunctionReflection(
	'cairo_get_tolerance',
	[
       new \PHPStan\Reflection\Native\NativeParameterReflection(
			'context',
			false,
			PHPStan\Type\ObjectType::__set_state(array(    'className' => 'cairocontext', )),
			false,
			false
		),

	],
	false,
	PHPStan\Type\FloatType::__set_state(array())
);

<?php declare(strict_types = 1);

return new \PHPStan\Reflection\Native\NativeFunctionReflection(
	'collator_get_attribute',
	[
       new \PHPStan\Reflection\Native\NativeParameterReflection(
			'coll',
			false,
			PHPStan\Type\ObjectType::__set_state(array(    'className' => 'collator', )),
			false,
			false
		),
       new \PHPStan\Reflection\Native\NativeParameterReflection(
			'attr',
			false,
			PHPStan\Type\IntegerType::__set_state(array()),
			false,
			false
		),

	],
	false,
	PHPStan\Type\IntegerType::__set_state(array())
);

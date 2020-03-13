<?php

namespace Doctrine\Tests\Common\Annotations\Fixtures;

use Doctrine\Tests\Common\Annotations\Fixtures\Annotation\QueryParam;

class ClassWithMethodParameterAnnotation
{
	public function testFunction(/** @QueryParam("filter") */$filter, /** @QueryParam("start") */ $offset, /** @QueryParam("limit") */ $maxResults) {

	}
}

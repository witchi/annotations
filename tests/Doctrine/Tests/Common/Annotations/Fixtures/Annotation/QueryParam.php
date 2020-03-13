<?php
namespace Doctrine\Tests\Common\Annotations\Fixtures\Annotation;

/**
 * @Annotation
 * @Target({"PARAMETER"})
 */
final class QueryParam {

        /** @var string @Required */
        public $value;
}
?>


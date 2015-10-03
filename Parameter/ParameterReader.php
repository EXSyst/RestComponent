<?php

namespace EXSyst\Component\Rest\Parameter;

use Doctrine\Common\Annotations\Reader;
use EXSyst\Component\Rest\Annotation\AbstractParameter;

class ParameterReader
{
    /**
     * @var Reader
     */
    private $annotationReader;

    /**
     * @param Reader $annotationReader
     */
    public function __construct(Reader $annotationReader)
    {
        $this->annotationReader = $annotationReader;
    }

    /**
     * @param \ReflectionMethod $reflectionMethod
     *
     * @return AbstractParameter[]
     */
    public function read(\ReflectionMethod $reflectionMethod)
    {
        $parameters = [];
        foreach ($this->annotationReader->getMethodAnnotations($reflectionMethod) as $annotation) {
            if ($annotation instanceof AbstractParameter) {
                $parameters[] = $annotation;
            }
        }

        return $parameters;
    }
}

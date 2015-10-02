<?php

namespace EXSyst\Component\Rest\Exception;

/**
 * Exception thrown if an error which can only be found on runtime occurs. 
 *
 * @author Ener-Getick <egetick@gmail.com>
 */
class RuntimeException extends \RuntimeException implements ExceptionInterface
{
}
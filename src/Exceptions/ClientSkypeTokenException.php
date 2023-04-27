<?php

namespace Akbv\PhpSkype\Exceptions;

/**
 * Class ClientSkypeTokenException
 *
 * @license https://opensource.org/licenses/BSD-3-Clause  BSD 3-Clause License
 * @author Atanas Korabov
 */
class ClientSkypeTokenException extends \Exception
{
    public const MESSAGE = 'Unable to login to Skype [%s]';

    public function __construct(mixed $reason)
    {
        parent::__construct(sprintf(self::MESSAGE, $reason));
    }
}

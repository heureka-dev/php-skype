<?php

namespace Akbv\PhpSkype\Models\Events;

/**
 * The base message event, when a message is received in a conversation.
 *
 * @license https://opensource.org/licenses/BSD-3-Clause  BSD 3-Clause License
 * @author Atanas Korabov
 */
class EditMessageEvent
{
    /**
     * Skype Name of User or Group.
     *
     * @var string
     */
    private $message;

    /**
     * construct message event.
     */
    public function __construct(array $raw)
    {
        $this->message = $raw['resource']['content'];
    }

    /**
     * @return  string
     */
    public function getMessage()
    {
        return $this->message;
    }
}

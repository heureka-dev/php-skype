<?php

namespace Akbv\PhpSkype\Models\Events;

use Akbv\PhpSkype\Models\Message;

/**
 * The base message event, when a message is received in a conversation.
 *
 * @license http://www.opensource.org/licenses/mit-license.html  MIT License
 * @author Atanas Korabov
 */
class NewMessage extends Event
{
    /**
     * Skype Name of User or Group.
     *
     * @var Message
     */
    private $message;

    /**
     * construct message event.
     */
    public function __construct(array $raw)
    {
        parent::__construct($raw);
        $this->message = new Message($raw['resource']);
    }

    /**
     * @return  Message
     */
    public function getMessage()
    {
        return $this->message;
    }
}

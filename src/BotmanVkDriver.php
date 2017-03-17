<?php

namespace BotmanVkDriver;


use Mpociot\BotMan\Answer;
use Mpociot\BotMan\Drivers\Driver;
use Mpociot\BotMan\Interfaces\DriverInterface;
use Mpociot\BotMan\Interfaces\UserInterface;
use Mpociot\BotMan\Message;
use Mpociot\BotMan\Question;
use Symfony\Component\HttpFoundation\Request;

class BotmanVkDriver extends Driver
{

    const DRIVER_NAME = 'BotFramework';

    /**
     * @param Request $request
     * @return void
     */
    public function buildPayload(Request $request)
    {

    }

    /**
     * Determine if the request is for this driver.
     *
     * @return bool
     */
    public function matchesRequest()
    {
        // TODO: Implement matchesRequest() method.
    }

    /**
     * Retrieve the chat message(s).
     *
     * @return array
     */
    public function getMessages()
    {
        // TODO: Implement getMessages() method.
    }

    /**
     * @return bool
     */
    public function isBot()
    {
        // TODO: Implement isBot() method.
    }

    /**
     * @return bool
     */
    public function isConfigured()
    {
        // TODO: Implement isConfigured() method.
    }

    /**
     * Retrieve User information.
     * @param Message $matchingMessage
     * @return UserInterface
     */
    public function getUser(Message $matchingMessage)
    {
        // TODO: Implement getUser() method.
    }

    /**
     * @param Message $message
     * @return Answer
     */
    public function getConversationAnswer(Message $message)
    {
        // TODO: Implement getConversationAnswer() method.
    }

    /**
     * @param string|Question $message
     * @param Message $matchingMessage
     * @param array $additionalParameters
     * @return $this
     */
    public function reply($message, $matchingMessage, $additionalParameters = [])
    {
        // TODO: Implement reply() method.
    }

    /**
     * Return the driver name.
     *
     * @return string
     */
    public function getName()
    {
        return static::DRIVER_NAME;
    }
}
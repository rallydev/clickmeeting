<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ClickMeeting\Entity;

/**
 * Description of EntityAbstract
 *
 * @author Alexis J. Rosa Rivera <alexisjrosarivera@gmail.com>
 */
abstract class EntityAbstract
{

    /**
     * @var \ClickMeeting\Client
     */
    protected $client;
    protected $room_id;
    protected $api_key;

    public function __construct($api_key, $room_id = null)
    {

        $this->api_key = $api_key;

        $this->checkApiKey();

        $this->setRoomId($room_id);

        $this->client = new \ClickMeeting\Client(['api_key' => $api_key]);
    }

    public function setRoomId($room_id)
    {
        if (!empty($room_id)) {
            $this->room_id = $room_id;
            return $this;
        }
    }

    public function checkApiKey()
    {
        if (empty($this->api_key)) {
            throw new Exception('Please initialize this class using the api key');
        }
    }

    public function checkRoomId()
    {
        if (empty($this->room_id)) {
            throw new Exception('Please initialize the room id.');
        }
    }

    public function checkSessionId()
    {
        if (empty($this->session_id)) {
            throw new Exception('Please initialize the session id.');
        }
    }

}

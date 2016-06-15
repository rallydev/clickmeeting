<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ClickMeeting\Entity;

/**
 * Description of EntityAbstract.
 *
 * @author Alexis J. Rosa Rivera <alexisjrosarivera@gmail.com>
 */
abstract class EntityAbstract
{
    /**
     * @var \ClickMeeting\Client
     */
    protected $client;

    /**
     * [$room_id description].
     *
     * @var [type]
     */
    protected $room_id;

    /**
     * [$api_key description].
     *
     * @var [type]
     */
    protected $api_key;

    /**
     * [__construct description].
     *
     * @param [type] $api_key [description]
     * @param [type] $room_id [description]
     */
    public function __construct(String $api_key, Int $room_id = null)
    {
        $this->api_key = $api_key;
        $this->checkApiKey();
        $this->setRoomId($room_id);
        $this->client = new \ClickMeeting\Client(['api_key' => $api_key]);
    }

    /**
     * [setRoomId description].
     *
     * @param [type] $room_id [description]
     */
    public function setRoomId(Int $room_id)
    {
        if (!empty($room_id)) {
            $this->room_id = $room_id;

            return $this;
        }
    }

    /**
     * [checkApiKey description].
     *
     * @return [type] [description]
     */
    public function checkApiKey()
    {
        if (empty($this->api_key)) {
            throw new Exception('Please initialize this class using the api key');
        }
    }

    /**
     * [checkRoomId description].
     *
     * @return [type] [description]
     */
    public function checkRoomId()
    {
        if (empty($this->room_id)) {
            throw new Exception('Please initialize the room id.');
        }
    }

    /**
     * [checkSessionId description].
     *
     * @return [type] [description]
     */
    public function checkSessionId()
    {
        if (empty($this->session_id)) {
            throw new Exception('Please initialize the session id.');
        }
    }

    /**
     * [toArray description].
     *
     * @param [type] $response [description]
     *
     * @return [type] [description]
     */
    public function toArray($response)
    {
        return json_decode(json_encode($response), true);
    }
}

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ClickMeeting\Entity;

/**
 * Description of Participants
 *
 * @author Alexis J. Rosa Rivera <alexisjrosarivera@gmail.com>
 */
class Participants extends EntityAbstract
{

    public function __construct($api_key, $room_id)
    {
        parent::__construct($api_key, $room_id);

    }

    /**
     * Add new contact
     * @param array $params
     */
    public function addContact($params)
    {
        return $this->client->addContact($params);
    }

    /**
     * Conference generate tokens
     * @param int $room_id
     * @param array $params
     */
    public function generateConferenceTokens(array $params)
    {
        $this->checkRoomId();
        return $this->client->generateConferenceTokens($this->room_id, $params);
    }
    /**
     * Get coference tokens
     * @param int $room_id
     */
    public function conferenceTokens($room_id)
    {
        $this->checkRoomId();
        return $this->client->conferenceTokens($room_id);
    }

    /**
     * Conference autologin hash
     * @param unknown $room_id
     * @param array $params
     */
    public function conferenceAutologinHash(array $params)
    {
        $this->checkRoomId();
        return $this->client->conferenceAutologinHash($this->room_id, $params);
    }

    /**
     * Send invitation mail
     * @param int $room_id
     * @param string $lang
     * @param array $params
     * @return Ambigous <string, multitype:, mixed>
     */
    public function sendConferenceEmailInvitations($lang, $params)
    {
        $this->checkRoomId();
        return $this->client->sendConferenceEmailInvitations($this->room_id, $lang, $params);
    }

    /**
     * Add conference registration
     * @param int $room_id
     * @param array $params
     */
    public function addConferenceRegistration($params)
    {
        return $this->client->addConferenceRegistration($this->room_id, $params);
    }

    /**
     * Get conference registrants
     * @param int $room_id
     * @param string $status
     */
    public function conferenceRegistrations($status)
    {
        return $this->client->conferenceRegistrations($this->room_id, $status);
    }

}

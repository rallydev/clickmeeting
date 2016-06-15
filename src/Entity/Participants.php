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
    /**
     * Add new contact
     * @param array $params
     */
    public function addContact(array $params)
    {
        return $this->client->addContact($params);
    }

    /**
     * Conference generate tokens
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
    public function conferenceTokens(Int $room_id)
    {
        $this->checkRoomId();
        return $this->client->conferenceTokens($room_id);
    }

    /**
     * Conference autologin hash
     * @param array $params
     */
    public function conferenceAutologinHash(array $params)
    {
        $this->checkRoomId();
        return $this->client->conferenceAutologinHash($this->room_id, $params);
    }

    /**
     * Send invitation mail
     * @param string $lang
     * @param array $params
     * @return Ambigous <string, multitype:, mixed>
     */
    public function sendConferenceEmailInvitations(String $lang, Array $params)
    {
        $this->checkRoomId();
        return $this->client->sendConferenceEmailInvitations($this->room_id, $lang, $params);
    }

    /**
     * Add conference registration
     * @param array $params
     */
    public function addConferenceRegistration(Array $params)
    {
        return $this->client->addConferenceRegistration($this->room_id, $params);
    }

    /**
     * Get conference registrants
     * @param string $status
     */
    public function conferenceRegistrations($status)
    {
        return $this->client->conferenceRegistrations($this->room_id, $status);
    }

}

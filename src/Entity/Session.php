<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ClickMeeting\Entity;

/**
 * Description of Session
 *
 * @author Alexis J. Rosa Rivera <alexisjrosarivera@gmail.com>
 */
class Session extends EntityAbstract
{
    protected $session_id;

    public function __construct($api_key, $room_id, $session_id = null)
    {
        parent::__construct($api_key, $room_id);
        $this->checkRoomId();
        $this->setSessionId($session_id);
    }

    public function setSessionId($session_id)
    {
        if (!empty($session_id)) {
            $this->session_id = $session_id;
            return $this;
        }
        $this->checkSessionId();
    }

    /**
     * Get conference sessions
     * @param unknown $room_id
     */
    public function conferenceSessions()
    {
        return $this->client->conferenceSessions($this->room_id);
    }
    /**
     * Get conference session
     * @param int $room_id
     * @param int $session_id
     */
    public function conferenceSession()
    {
        return $this->conferenceSession($this->room_id, $this->session_id);
    }
    /**
     * Get conference session attendees
     * @param int $room_id
     * @param int $session_id
     */
    public function conferenceSessionAttendees()
    {
        return $this->client->conferenceSessionAttendees($this->room_id, $this->session_id);
    }
    /**
     * Generate pdf report
     * @param int $room_id
     * @param int $session_id
     * @param string $lang
     */
    public function generateConferenceSessionPDF($lang = 'en')
    {
        return $this->client->generateConferenceSessionPDF($this->room_id, $this->session_id, $lang);
    }

    /**
     * Get conference session registants
     * @param int $room_id
     * @param int $session_id
     * @param string $status
     */
    public function conferenceSessionRegistrations($status)
    {
        return $this->client->conferenceSessionRegistrations($this->room_id, $this->session_id, $status);
    }

}

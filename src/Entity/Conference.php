<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ClickMeeting\Entity;

/**
 * Description of Conference
 *
 * @author Alexis J. Rosa Rivera <alexisjrosarivera@gmail.com>
 */
class Conference extends EntityAbstract
{
    /**
     * Get Conference
     * @param  integer $room_id [description]
     * @return [type]          [description]
     */
    public function getConference($room_id)
    {

        return $this->client->conference($room_id);

    }

    /**
     * Get Conferences
     * @param  string  $status [description]
     * @param  integer $page   [description]
     * @return [type]          [description]
     */
    public function getConferences($status = 'active', $page = 1)
    {

        return $this->client->conferences($status, $page);

    }

    /**
     * Create Conference
     * @param  array  $params [description]
     * @return [type]         [description]
     */
    public function createConference(array $params)
    {
        return $this->client->addConference($params);
    }

    /**
     * Edit conference
     * @param int $room_id
     * @param array $params
     */
    public function editConference($room_id, array $params)
    {
        return $this->client->editConference($room_id, $params);
    }

    /**
     * Delete conference
     * @param int $room_id
     */
    public function deleteConference($room_id)
    {
        return $this->client->deleteConferenceRecordings($room_id);
    }

    /**
     * Conference skins
     * @param int $room_id
     * @param string $lang
     * @param array $params
     * @return Ambigous <string, multitype:, mixed>
     */
    public function conferenceSkins()
    {
        return $this->client->conferenceSkins();
    }

}

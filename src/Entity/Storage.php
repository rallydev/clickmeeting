<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ClickMeeting\Entity;

/**
 * Description of Storage
 *
 * @author Alexis J. Rosa Rivera <alexisjrosarivera@gmail.com>
 */
class Storage extends EntityAbstract
{
	/**
	 * [getFileLibrary description]
	 * @return [type] [description]
	 */
    public function getFileLibrary()
    {
		return $this->client->fileLibrary();
	}

	/**
	 * [getConferenceFileLibrary description]
	 * @param  Int    $room_id [description]
	 * @return [type]          [description]
	 */
	public function getConferenceFileLibrary()
	{
		return $this->client->conferenceFileLibrary($this->$room_id);
	}

	/**
	 * [getfileLibraryFile description]
	 * @param  Int    $file_id [description]
	 * @return [type]          [description]
	 */
    public function getfileLibraryFile(Int $file_id)
    {
    	return $this->client->fileLibraryFile($file_id);
   	}

   	/**
   	 * [postFileLibraryFile description]
   	 * @param  String $file_path [description]
   	 * @return [type]            [description]
   	 */
   	public function postFileLibraryFile(String $file_path)
   	{
	   	return $this->client->addFileLibraryFile($file_path);
   	}

   	/**
   	 * [downloadfileLibraryContent description]
   	 * @param  Int    $file_id [description]
   	 * @return [type]          [description]
   	 */
   	public function downloadfileLibraryContent(Int $file_id)
   	{
   		return $this->client->fileLibraryContent($file_id);
   	}

   	/**
   	 * [removeFileLibraryFile description]
   	 * @param  Int    $file_id [description]
   	 * @return [type]          [description]
   	 */
   	public function removeFileLibraryFile(Int $file_id)
   	{
   		return $this->client->deleteFileLibraryFile($file_id);
   	}

   	/**
   	 * [getConferenceRecordings description]
   	 * @param  Int    $room_id [description]
   	 * @return [type]          [description]
   	 */
   	public function getConferenceRecordings()
   	{
   		return $this->client->conferenceRecordings($this->$room_id);
   	}

   	/**
   	 * [removeConferenceRecordings description]
   	 * @param  Int    $room_id [description]
   	 * @return [type]          [description]
   	 */
   	public function removeConferenceRecordings()
   	{
   		return $this->client->deleteConferenceRecordings($this->$room_id);
   	}

   	/**
   	 * [removeConferenceRecording description]
   	 * @param  Int    $room_id      [description]
   	 * @param  Int    $recording_id [description]
   	 * @return [type]               [description]
   	 */
   	public function removeConferenceRecording(Int $recording_id)
   	{
   		return $this->client->deleteConferenceRecording($this->$room_id, $recording_id);
   	}

   	/**
   	 * [getChats description]
   	 * @return [type] [description]
   	 */
   	public function getChats()
   	{
   		return $this->client->chats();
   	}

   	/**
   	 * [getConferenceSessionChats description]
   	 * @param  Int    $session_id [description]
   	 * @return [type]             [description]
   	 */
	public function getConferenceSessionChats(Int $session_id)
	{
   		return $this->client->conferenceSessionChats($session_id);
	}
}
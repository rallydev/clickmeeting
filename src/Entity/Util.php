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
class Util extends EntityAbstract
{
	/**
	 * [getTimeZoneList description]
	 * @return [type] [description]
	 */
	public function getTimeZoneList()
	{
		return $this->timeZoneList();
	}

	/**
	 * [getCountryTimeZoneList description]
	 * @param  String $country [description]
	 * @return [type]          [description]
	 */
    public function getCountryTimeZoneList(String $country)
    {
    	return $this->countryTimeZoneList($country);
    }

    /**
     * [getPhoneGatewayList description]
     * @return [type] [description]
     */
    public function getPhoneGatewayList()
    {
		return $this->phoneGatewayList();
	}
}
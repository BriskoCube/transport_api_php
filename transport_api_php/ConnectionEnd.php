<?php
/**
 * Copyright 2018 Julien Quartier
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * By: Julien Quartier
 * On: 18 oct. 2018 20:13
 */

namespace transportApiPhp;


abstract class ConnectionEnd
{
    protected $arrival, $arrivalTimestamp, $departure, $departureTimestamp, $platform, $prognosis, $station;

    function __construct($arrival, $arrivalTimestamp, $departure, $departureTimestamp, $platform, $prognosis, $station)
    {
        $this->setArrival($arrival);
        $this->setArrivalTimestamp($arrivalTimestamp);
        $this->setDeparture($departure);
        $this->setDepartureTimestamp($departureTimestamp);
        $this->setPlatform($platform);
        $this->setPrognosis($prognosis);
        $this->setStation($station);
    }


    /**
     * @return mixed
     */
    public function getArrival()
    {
        return $this->arrival;
    }

    /**
     * @param mixed $arrival
     */
    public function setArrival($arrival)
    {
        $this->arrival = $arrival;
    }

    /**
     * @return mixed
     */
    public function getArrivalTimestamp()
    {
        return $this->arrivalTimestamp;
    }

    /**
     * @param mixed $arrivalTimestamp
     */
    public function setArrivalTimestamp($arrivalTimestamp)
    {
        $this->arrivalTimestamp = $arrivalTimestamp;
    }

    /**
     * @return mixed
     */
    public function getDeparture()
    {
        return $this->departure;
    }

    /**
     * @param mixed $departure
     */
    public function setDeparture($departure)
    {
        $this->departure = $departure;
    }

    /**
     * @return mixed
     */
    public function getDepartureTimestamp()
    {
        return $this->departureTimestamp;
    }

    /**
     * @param mixed $departureTimestamp
     */
    public function setDepartureTimestamp($departureTimestamp)
    {
        $this->departureTimestamp = $departureTimestamp;
    }

    /**
     * @return mixed
     */
    public function getPlatform()
    {
        return $this->platform;
    }

    /**
     * @param mixed $platform
     */
    public function setPlatform($platform)
    {
        $this->platform = $platform;
    }

    /**
     * @return mixed
     */
    public function getPrognosis()
    {
        return $this->prognosis;
    }

    /**
     * @param mixed $prognosis
     */
    public function setPrognosis($prognosis)
    {
        $this->prognosis = $prognosis;
    }

    /**
     * @return mixed
     */
    public function getStation()
    {
        return $this->station;
    }

    /**
     * @param mixed $station
     */
    public function setStation($station)
    {
        $this->station = $station;
    }


}
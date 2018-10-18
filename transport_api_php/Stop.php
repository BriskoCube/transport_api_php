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
 * On: 18 oct. 2018 20:45
 */

namespace transportApiPhp;

/**
 * A checkpoint represents an arrival or a departure point (in time and space) of a connection.
 * @package transportApiPhp
 */
class Stop
{
    private $station, $arrival, $departure, $delay, $platform, $prognosis;

    function __construct($station, $arrival, $departure, $delay, $platform, $prognosis)
    {
        $this->setStation($station);
        $this->setArrival($arrival);
        $this->setDeparture($departure);
        $this->setDelay($delay);
        $this->setPlatform($platform);
        $this->setPrognosis($prognosis);
    }

    /**
     * A location object showing this line's stop at the requested station.
     * @return mixed
     */
    public function getStation()
    {
        return $this->station;
    }

    /**
     * A location object showing this line's stop at the requested station.
     * @param mixed $station
     */
    public function setStation($station)
    {
        $this->station = $station;
    }

    /**
     * The arrival time to the checkpoint
     * @return mixed
     */
    public function getArrival()
    {
        return $this->arrival;
    }

    /**
     * The arrival time to the checkpoint
     * @param mixed $arrival
     */
    public function setArrival($arrival)
    {
        $this->arrival = $arrival;
    }

    /**
     * The departure time from the checkpoint
     * @return mixed
     */
    public function getDeparture()
    {
        return $this->departure;
    }

    /**
     * The departure time from the checkpoint
     * @param mixed $departure
     */
    public function setDeparture($departure)
    {
        $this->departure = $departure;
    }

    /**
     * The delay at this checkpoint, can be null if no prognosis is available.
     * @return mixed
     */
    public function getDelay()
    {
        return $this->delay;
    }

    /**
     * The delay at this checkpoint, can be null if no prognosis is available.
     * @param mixed $delay
     */
    public function setDelay($delay)
    {
        $this->delay = $delay;
    }

    /**
     * The arrival/departure platform
     * @return mixed
     */
    public function getPlatform()
    {
        return $this->platform;
    }

    /**
     * The arrival/departure platform
     * @param mixed $platform
     */
    public function setPlatform($platform)
    {
        $this->platform = $platform;
    }

    /**
     * The checkpoint prognosis
     * @return mixed
     */
    public function getPrognosis()
    {
        return $this->prognosis;
    }

    /**
     * The checkpoint prognosis
     * @param mixed $prognosis
     */
    public function setPrognosis($prognosis)
    {
        $this->prognosis = $prognosis;
    }
}
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
 * On: 18 oct. 2018 20:11
 */

namespace transportApiPhp;

/**
 * A prognosis contains "realtime" informations on the status of a connection checkpoint.
 * @package transportApiPhp
 */
class Prognosis
{
    private $platform, $arrival, $departure, $capacity1st, $capacity2nd;

    function __construct($platform, $arrival, $departure, $capacity1st, $capacity2nd)
    {
        $this->setPlatform($platform);
        $this->setArrival($arrival);
        $this->setDeparture($departure);
        $this->setCapacity1st($capacity1st);
        $this->setCapacity2nd($capacity2nd);
    }

    /**
     * The estimated arrival/departure platform
     * @return mixed
     */
    public function getPlatform()
    {
        return $this->platform;
    }

    /**
     * The estimated arrival/departure platform
     * @param mixed $platform
     */
    public function setPlatform($platform)
    {
        $this->platform = $platform;
    }

    /**
     * The arrival time prognosis to the checkpointDate format: ISO 8601
     * @return mixed
     */
    public function getArrival()
    {
        return $this->arrival;
    }

    /**
     * The arrival time prognosis to the checkpointDate format: ISO 8601
     * @param mixed $arrival
     */
    public function setArrival($arrival)
    {
        $this->arrival = $arrival;
    }

    /**
     * The departure time prognosis to the checkpoint Date format: ISO 8601
     * @return mixed
     */
    public function getDeparture()
    {
        return $this->departure;
    }

    /**
     * The departure time prognosis to the checkpoint Date format: ISO 8601
     * @param mixed $departure
     */
    public function setDeparture($departure)
    {
        $this->departure = $departure;
    }

    /**
     * The estimated occupation load of 1st class coaches
     * @return mixed
     */
    public function getCapacity1st()
    {
        return $this->capacity1st;
    }

    /**
     * The estimated occupation load of 1st class coaches
     * @param mixed $capacity1st
     */
    public function setCapacity1st($capacity1st)
    {
        $this->capacity1st = $capacity1st;
    }

    /**
     * The estimated occupation load of 2nd class coaches
     * @return mixed
     */
    public function getCapacity2nd()
    {
        return $this->capacity2nd;
    }

    /**
     * The estimated occupation load of 2nd class coaches
     * @param mixed $capacity2nd
     */
    public function setCapacity2nd($capacity2nd)
    {
        $this->capacity2nd = $capacity2nd;
    }


}
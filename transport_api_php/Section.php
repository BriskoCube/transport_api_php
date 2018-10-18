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
 * On: 18 oct. 2018 20:58
 */

namespace transportApiPhp;

/**
 * A connection consists of one or multiple sections.
 * @package transportApiPhp
 */
class Section
{
    private $journey, $walk, $departure, $arrival;

    function __construct($journey, $walk, $departure, $arrival)
    {
        $this->setJourney($journey);
        $this->setWalk($walk);
        $this->setDeparture($departure);
        $this->setArrival($arrival);
    }

    /**
     * A journey, the transportation used by this section. Can be null
     * @return mixed
     */
    public function getJourney()
    {
        return $this->journey;
    }

    /**
     * A journey, the transportation used by this section. Can be null
     * @param mixed $journey
     */
    public function setJourney($journey)
    {
        $this->journey = $journey;
    }

    /**
     * Information about walking distance, if available
     * @return mixed
     */
    public function getWalk()
    {
        return $this->walk;
    }

    /**
     * Information about walking distance, if available
     * @param mixed $walk
     */
    public function setWalk($walk)
    {
        $this->walk = $walk;
    }

    /**
     * The departure checkpoint of the connection
     * @return mixed
     */
    public function getDeparture()
    {
        return $this->departure;
    }

    /**
     * The departure checkpoint of the connection
     * @param mixed $departure
     */
    public function setDeparture($departure)
    {
        $this->departure = $departure;
    }

    /**
     * The arrival checkpoint of the connection
     * @return mixed
     */
    public function getArrival()
    {
        return $this->arrival;
    }

    /**
     * The arrival checkpoint of the connection
     * @param mixed $arrival
     */
    public function setArrival($arrival)
    {
        $this->arrival = $arrival;
    }


}
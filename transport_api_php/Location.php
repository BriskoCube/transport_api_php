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
 * On: 18 oct. 2018 20:31
 */

namespace transportApiPhp;

/**
 * API responses are composites of the following objects:
 * @package transportApiPhp
 */
class Location
{
    private $id, $type, $name, $score, $coordinates, $distance;

    function __construct($id, $type, $name, $score, $coordinates, $distance)
    {
        $this->setId($id);
        $this->setType($type);
        $this->setName($name);
        $this->setScore($score);
        $this->setCoordinates($coordinates);
        $this->setDistance($distance);
    }

    /**
     * The id of the location
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * The id of the location
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Type of the location, can contain:
     *       station: Location is a train station, bus station
     *       poi: Location is a point of interest (Clock tower, China garden)
     *       address: Location is an address
     *       refine: Location is not defined, the user has to relocate
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Type of the location, can contain:
     *       station: Location is a train station, bus station
     *       poi: Location is a point of interest (Clock tower, China garden)
     *       address: Location is an address
     *       refine: Location is not defined, the user has to relocate
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * The location name
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The location name
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * The accuracy of the result
     * @return mixed
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * The accuracy of the result
     * @param mixed $score
     */
    public function setScore($score)
    {
        $this->score = $score;
    }

    /**
     * The location coordinates
     * @return mixed
     */
    public function getCoordinates()
    {
        return $this->coordinates;
    }

    /**
     * The location coordinates
     * @param mixed $coordinates
     */
    public function setCoordinates($coordinates)
    {
        $this->coordinates = $coordinates;
    }

    /**
     * If search has been with coordinates, distance to original point in meters
     * @return mixed
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * If search has been with coordinates, distance to original point in meters
     * @param mixed $distance
     */
    public function setDistance($distance)
    {
        $this->distance = $distance;
    }


}
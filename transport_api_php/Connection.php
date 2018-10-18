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
 * On: 18 oct. 2018 20:35
 */

namespace transportApiPhp;

/**
 * A connection represents a possible journey between two locations.
 * @package transportApiPhp
 */
class Connection
{
    private $from, $to, $duration, $service, $products, $capacity1st, $capacity2nd, $sections;

    function __construct($from, $to, $duration, $service, $products, $capacity1st, $capacity2nd, $sections)
    {
        $this->setFrom($from);
        $this->setTo($to);
        $this->setDuration($duration);
        $this->setService($service);
        $this->setProducts($products);
        $this->setCapacity1st($capacity1st);
        $this->setCapacity2nd($capacity2nd);
        $this->setSections($sections);
    }

    /**
     * The departure checkpoint of the connection
     * @return mixed
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * The departure checkpoint of the connection
     * @param mixed $from
     */
    public function setFrom($from)
    {
        $this->from = $from;
    }

    /**
     * The arrival checkpoint of the connection
     * @return mixed
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * The arrival checkpoint of the connection
     * @param mixed $to
     */
    public function setTo($to)
    {
        $this->to = $to;
    }

    /**
     * Duration of the journey
     * @return mixed
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Duration of the journey
     * @param mixed $duration
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
    }

    /**
     * @return mixed
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Service information about how regular the connection operates
     * @param mixed $service
     */
    public function setService($service)
    {
        $this->service = $service;
    }

    /**
     * Array with transport products
     * @return mixed
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Array with transport products
     * @param mixed $products
     */
    public function setProducts($products)
    {
        $this->products = $products;
    }

    /**
     * The maximum estimated occupation load of 1st class coaches
     * @return mixed
     */
    public function getCapacity1st()
    {
        return $this->capacity1st;
    }

    /**
     * The maximum estimated occupation load of 1st class coaches
     * @param mixed $capacity1st
     */
    public function setCapacity1st($capacity1st)
    {
        $this->capacity1st = $capacity1st;
    }

    /**
     * The maximum estimated occupation load of 2nd class coaches
     * @return mixed
     */
    public function getCapacity2nd()
    {
        return $this->capacity2nd;
    }

    /**
     * The maximum estimated occupation load of 2nd class coaches
     * @param mixed $capacity2nd
     */
    public function setCapacity2nd($capacity2nd)
    {
        $this->capacity2nd = $capacity2nd;
    }

    /**
     * A list of sections
     * @return mixed
     */
    public function getSections()
    {
        return $this->sections;
    }

    /**
     * A list of sections
     * @param mixed $sections
     */
    public function setSections($sections)
    {
        $this->sections = $sections;
    }
}
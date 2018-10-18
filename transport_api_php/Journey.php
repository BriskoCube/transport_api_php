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
 * On: 18 oct. 2018 21:00
 */

namespace transportApiPhp;

/**
 * The actual transportation of a section, e.g. a bus or a train between two stations.
 * @package transportApiPhp
 */
class Journey
{
    private $name, $category, $categoryCode, $number, $operator, $to, $passList, $capacity1st, $capacity2nd;

    function __construct($name, $category, $categoryCode, $number, $operator, $to, $passList, $capacity1st, $capacity2nd)
    {
        $this->setName($name);
        $this->setCategory($category);
        $this->setNumber($number);
        $this->setOperator($operator);
        $this->setTo($to);
        $this->setPassList($passList);
        $this->setCapacity1st($capacity1st);
        $this->setCapacity2nd($capacity2nd);
    }

    /**
     * The name of the transportation
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the transportation
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Category of the transportation
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Category of the transportation
     * @param mixed $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * An internal category code of the transportation
     * @return mixed
     */
    public function getCategoryCode()
    {
        return $this->categoryCode;
    }

    /**
     * An internal category code of the transportation
     * @param mixed $categoryCode
     */
    public function setCategoryCode($categoryCode)
    {
        $this->categoryCode = $categoryCode;
    }

    /**
     * The number of the transportation line
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * The number of the transportation line
     * @param mixed $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * 	The company performing the transportation
     * @return mixed
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * 	The company performing the transportation
     * @param mixed $operator
     */
    public function setOperator($operator)
    {
        $this->operator = $operator;
    }

    /**
     * Final destination of the train
     * @return mixed
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * Final destination of the train
     * @param mixed $to
     */
    public function setTo($to)
    {
        $this->to = $to;
    }

    /**
     * Checkpoints the train passed on the journey
     * @return mixed
     */
    public function getPassList()
    {
        return $this->passList;
    }

    /**
     * 	Checkpoints the train passed on the journey
     * @param mixed $passList
     */
    public function setPassList($passList)
    {
        $this->passList = $passList;
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
}
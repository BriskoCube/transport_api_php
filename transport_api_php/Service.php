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
 * On: 18 oct. 2018 20:40
 */

namespace transportApiPhp;

/**
 * Operation information for a connection.
 * @package transportApiPhp
 */
class Service
{
    private $regular, $irregular;

    function __construct($regular, $irregular)
    {
        $this->setRegular($regular);
        $this->setIrregular($irregular);
    }


    /**
     * Information about how regular a connection operates.
     * @return mixed
     */
    public function getRegular()
    {
        return $this->regular;
    }

    /**
     * Information about how regular a connection operates.
     * @param mixed $regular
     */
    public function setRegular($regular)
    {
        $this->regular = $regular;
    }

    /**
     * Additional information about irregular operation dates.
     * @return mixed
     */
    public function getIrregular()
    {
        return $this->irregular;
    }

    /**
     * Additional information about irregular operation dates.
     * @param mixed $irregular
     */
    public function setIrregular($irregular)
    {
        $this->irregular = $irregular;
    }


}
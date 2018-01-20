<?php
/**
 *
 *  Copyright 2018 Matteo Dalmasso <dev@open.sltc.hk>
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *  http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 *
 *  Created by OSLTC Team
 *  Last Modified: 1/21/18 12:31 AM
 *
 *
 */


/** Brick and Mortar Serial Number Generator - PHP Serial Number Generator and management class.
 *
 * @author  Matteo Dalmasso <dev@open.sltc.hk>
 *
 * @link    https://github.com/osltc/Brick-and-Mortar-SNG
 */
namespace osltc\bamgenerator;

/**
 * Class Generator
 * @package osltc\bamgenerator
 */
/**
 * Class Generator
 * @package osltc\bamgenerator
 */
class Generator
{
    /**
     * What kind of serial you want
     * Default is 'generic'
     * @var string
     */
    public $type = '';

    /**
     * What is the length of random number
     * Default is 12
     * @var int
    */
    public $length;

    /**
     * serial_length set the length of random part of the serial number
     * if is set to 12 or 16 will set 10^6 integers, otherwise will set 10^9
     * @function
     * */
    protected function serialLength(){

    }
    /**
     *
     */
    protected function dig2num(){
        if(empty($this->length)) $this->length = 6;
        return pow(10,$this->length);
    }

    public function randomize($min,$max){
        echo random_int($min,$max);
        $this->thetype();
        echo "\n\n".$this->dig2num();
    }

    public function theType(){
        if(empty($this->type)) $this->type = 'generic';
        echo $this->type;
    }
}
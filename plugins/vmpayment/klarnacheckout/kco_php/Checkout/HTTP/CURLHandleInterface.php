<?php
/**
 * Copyright 2015 Klarna AB
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * File containing the Klarna_Checkout_HTTP_CURLHeaders class
 *
 * PHP version 5.3
 *
 * @category   Payment
 * @package    Payment_Klarna
 * @subpackage HTTP
 * @author     Klarna <support@klarna.com>
 * @copyright  2015 Klarna AB
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache license v2.0
 * @link       http://developers.klarna.com/
 */

/**
 * Defines a cURL handle interface
 *
 * @category   Payment
 * @package    Payment_Klarna
 * @subpackage HTTP
 * @author     David K. <david.keijser@klarna.com>
 * @copyright  2015 Klarna AB
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache license v2.0
 * @link       http://developers.klarna.com/
 */
interface Klarna_Checkout_HTTP_CURLHandleInterface
{
    /**
     * Set an option for the cURL transfer
     *
     * @param int   $name  option the set
     * @param mixed $value the value to be set on option
     *
     * @return void
     */
    public function setOption($name, $value);

    /**
     * Perform the cURL session
     *
     * @return mixed response
     */
    public function execute();

    /**
     * Get information regarding this transfer
     *
     * @return array
     */
    public function getInfo();

    /**
     * Get error message regarding this transfer
     *
     * @return string Error message
     */
    public function getError();

    /**
     * Close the cURL session
     *
     * @return void
     */
    public function close();
}

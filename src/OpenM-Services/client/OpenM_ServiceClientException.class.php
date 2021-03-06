<?php

Import::php("util.OpenM_Log");

/**
 * OpenM_ServiceClientException is un exception throws by OpenM_ServiceClient and used for error out of HTTP error.
 * @package OpenM 
 * @subpackage OpenM\OpenM-Services\client
 * @copyright (c) 2013, www.open-miage.org
 * @license http://www.apache.org/licenses/LICENSE-2.0 Licensed under the Apache License, Version 2.0 (the "License");
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
 * @link http://www.open-miage.org
 * @author Gaël Saunier
 */
class OpenM_ServiceClientException extends Exception {
    
    public function __construct($message) {
        OpenM_Log::error($message, __CLASS__, __METHOD__, __LINE__);
        parent::__construct($message);
    }
}

?>

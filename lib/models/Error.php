<?php
/**
 *  Copyright 2015 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */

/**
 * 
 *
 * NOTE: This class is auto generated by the swagger code generator program. Do not edit the class manually.
 *
 */

namespace SwaggerClient\models;

use \ArrayAccess;

class Error implements ArrayAccess {
  static $swaggerTypes = array(
      'code' => 'int',
      'message' => 'string',
      'errors' => 'object'
  );

  static $attributeMap = array(
      'code' => 'code',
      'message' => 'message',
      'errors' => 'errors'
  );

  
  public $code; /* int */
  public $message; /* string */
  public $errors; /* object */

  public function __construct(array $data = null) {
    $this->code = $data["code"];
    $this->message = $data["message"];
    $this->errors = $data["errors"];
  }

  public function offsetExists($offset) {
    return isset($this->$offset);
  }

  public function offsetGet($offset) {
    return $this->$offset;
  }

  public function offsetSet($offset, $value) {
    $this->$offset = $value;
  }

  public function offsetUnset($offset) {
    unset($this->$offset);
  }
}

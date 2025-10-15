<?php
/**
 * wallee SDK
 *
 * This library allows to interact with the wallee payment service.
 *
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
 */


namespace Wallee\Sdk\Model;
use \Wallee\Sdk\ObjectSerializer;

/**
 * PanType model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      wallee AG
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 */
class PanType
{
    /**
     * Possible values of this enum
     */
    const PLAIN = 'PLAIN';
    const PLAIN_GOOGLE_PAY = 'PLAIN_GOOGLE_PAY';
    const SCHEME_TOKEN = 'SCHEME_TOKEN';
    const SCHEME_TOKEN_CLICK_TO_PAY = 'SCHEME_TOKEN_CLICK_TO_PAY';
    const DEVICE_TOKEN_APPLE_PAY = 'DEVICE_TOKEN_APPLE_PAY';
    const DEVICE_TOKEN_GOOGLE_PAY = 'DEVICE_TOKEN_GOOGLE_PAY';
    const DEVICE_TOKEN_SAMSUNG_PAY = 'DEVICE_TOKEN_SAMSUNG_PAY';
    const DEVICE_TOKEN_ANDROID_PAY = 'DEVICE_TOKEN_ANDROID_PAY';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PLAIN,
            self::PLAIN_GOOGLE_PAY,
            self::SCHEME_TOKEN,
            self::SCHEME_TOKEN_CLICK_TO_PAY,
            self::DEVICE_TOKEN_APPLE_PAY,
            self::DEVICE_TOKEN_GOOGLE_PAY,
            self::DEVICE_TOKEN_SAMSUNG_PAY,
            self::DEVICE_TOKEN_ANDROID_PAY,
        ];
    }
}



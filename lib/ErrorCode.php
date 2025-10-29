<?php
/**
 * Wallee AG Php SDK
 *
 * This library allows to interact with the Wallee AG payment service.
 *
 * Copyright owner: Wallee AG
 * Website: https://en.wallee.com
 * Developer email: ecosystem-team@wallee.com
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

namespace Wallee\Sdk;

/**
 * The error code represents a potential error which may be thrown by Wallee SDK.
 * <p><b>Error Code Ranges:</b></p>
 * <ul>
 *   <li><b>1000–1999</b>: Client-side errors - typically due to invalid input (e.g., malformed headers, bad keys).</li>
 *   <li><b>2000–2999</b>: Server-side errors - typically due to incorrect data provided by the server.</li>
 *   <li><b>404</b>: Not Found - used when endpoint return an empty response.</li>
 * </ul>
 */
enum ErrorCode: int
{
    // 404
    case UNKNOWN_WEBHOOK_ENCRYPTION_PUBLIC_KEY = 404;

    // 1000–1999
    case WEBHOOK_ENCRYPTION_GENERAL_ERROR = 1000;
    case INVALID_WEBHOOK_ENCRYPTION_PUBLIC_KEY = 1001;
    case INVALID_WEBHOOK_ENCRYPTION_HEADER_FORMAT = 1002;
    case UNSUPPORTED_WEBHOOK_ENCRYPTION_ALGORYTHM = 1003;
    case UNKNOWN_WEBHOOK_ENCRYPTION_PROVIDER = 1004;
    case WEBHOOK_ENCRYPTION_VERIFIER_INIT_ERROR = 1005;
    case WEBHOOK_ENCRYPTION_VERIFIER_CONTENT_UPDATE_ERROR = 1006;
    case WEBHOOK_ENCRYPTION_SIGNATURE_VERIFICATION_FAILED = 1007;
    case INVALID_WEBHOOK_ENCRYPTION_CONTENT_SIGNATURE = 1008;
    case LANGUAGES_JSON_FILE_ERROR = 1009;

    // 2000–2999
    case MISSING_WEBHOOK_ENCRYPTION_ALGORYTHM = 2000;

    public function getDescription(): string
    {
        return match($this) {
            self::UNKNOWN_WEBHOOK_ENCRYPTION_PUBLIC_KEY => 'Unknown webhook signature public key',
            self::WEBHOOK_ENCRYPTION_GENERAL_ERROR => 'General webhook encryption error',
            self::INVALID_WEBHOOK_ENCRYPTION_PUBLIC_KEY => 'Invalid webhook signature public key',
            self::INVALID_WEBHOOK_ENCRYPTION_HEADER_FORMAT => 'Invalid webhook signature header',
            self::UNSUPPORTED_WEBHOOK_ENCRYPTION_ALGORYTHM => 'Unsupported webhook signature algorithm',
            self::UNKNOWN_WEBHOOK_ENCRYPTION_PROVIDER => 'Unknown webhook encryption provider',
            self::WEBHOOK_ENCRYPTION_VERIFIER_INIT_ERROR => 'Encryption verifier initialization error',
            self::WEBHOOK_ENCRYPTION_VERIFIER_CONTENT_UPDATE_ERROR => 'Error during content update in encryption verifier',
            self::WEBHOOK_ENCRYPTION_SIGNATURE_VERIFICATION_FAILED => 'Encryption signature verification failed',
            self::INVALID_WEBHOOK_ENCRYPTION_CONTENT_SIGNATURE => 'Invalid webhook content signature',
            self::LANGUAGES_JSON_FILE_ERROR => 'Unable to read languages.json file',
            self::MISSING_WEBHOOK_ENCRYPTION_ALGORYTHM => 'Missing webhook signature algorithm value',
        };
    }

    public function toString(): string
    {
        return $this->value . ': ' . $this->getDescription();
    }
}

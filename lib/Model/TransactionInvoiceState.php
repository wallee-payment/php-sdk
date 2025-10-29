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

namespace Wallee\Sdk\Model;
use \Wallee\Sdk\ObjectSerializer;

/**
 * TransactionInvoiceState model
 *
 * @category    Class
 * @package     Wallee\Sdk
 * @author      wallee AG
 * @license     Apache-2.0
 * The Apache License, Version 2.0
 * See the full license at https://www.apache.org/licenses/LICENSE-2.0.txt
 * @version     5.0.0
 */
class TransactionInvoiceState
{
    /**
     * Possible values of this enum
     */
    public const CREATE = 'CREATE';

    public const OPEN = 'OPEN';

    public const OVERDUE = 'OVERDUE';

    public const CANCELED = 'CANCELED';

    public const PAID = 'PAID';

    public const DERECOGNIZED = 'DERECOGNIZED';

    public const NOT_APPLICABLE = 'NOT_APPLICABLE';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CREATE,
            self::OPEN,
            self::OVERDUE,
            self::CANCELED,
            self::PAID,
            self::DERECOGNIZED,
            self::NOT_APPLICABLE
        ];
    }
}



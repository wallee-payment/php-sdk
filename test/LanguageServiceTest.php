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

namespace Wallee\Sdk\Test;

use PHPUnit\Framework\TestCase;
use Wallee\Sdk\ApiClient;
use Wallee\Sdk\Service\LanguagesService;

final class LanguageServiceTest extends TestCase
{

    private static ?LanguagesService $languagesService = null;

    public static function setUpBeforeClass(): void
    {
        $configuration = Constants::getConfigurationInstance();
        self::$languagesService = new LanguagesService($configuration);
    }


    /**
     * Test case for getLanguagesFromJson
     */
    public function testGetLanguagesFromJson()
    {
        $languagesResponse = self::$languagesService->getLanguagesFromJson();

        $languages = $languagesResponse->getData();

        $this->assertNotEmpty($languages, "Languages list should not be empty");

        $this->assertInstanceOf(
            \Wallee\Sdk\Model\RestLanguage::class,
            $languages[56]
        );

        $this->assertEquals(
            'en',
            $languages[56]->getIso2Code(),
            "Expected ISO2 code at index 56 to be 'en'"
        );
    }
}
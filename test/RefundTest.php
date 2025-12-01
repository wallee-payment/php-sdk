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
use Wallee\Sdk\ApiException;
use Wallee\Sdk\Model\RefundCreate;
use Wallee\Sdk\Model\RefundState;
use Wallee\Sdk\Model\RefundType;
use Wallee\Sdk\Model\Transaction;
use Wallee\Sdk\Model\TransactionCompletionState;
use Wallee\Sdk\Model\TransactionState;
use Wallee\Sdk\Service\RefundsService;
use Wallee\Sdk\Service\TransactionsService;
use Wallee\Sdk\Test\Constants;
use Wallee\Sdk\Test\TestUtils;

class RefundTest extends TestCase
{
    private static ?RefundsService $refundService = null;
    private static ?TransactionsService $transactionService = null;

    public static function setUpBeforeClass(): void
    {
        $configuration = Constants::getConfigurationInstance();
        self::$refundService = new RefundsService($configuration);
        self::$transactionService = new TransactionsService($configuration);
    }


    /**
     * Refund of fulfilled transaction should be created successfully.
     */
    public function testRefundOfCompletedTransactionShouldWork(): void
    {
        $transaction = $this->create(TestUtils::getTransactionCreatePayload());

        $processedTransaction = self::$transactionService->postPaymentTransactionsIdProcessCardDetails(
            $transaction->getId(),
            Constants::$spaceId,
            Constants::getMockCardData()
        );

        $transactionCompletion = self::$transactionService->postPaymentTransactionsIdCompleteOffline(
            
            $transaction->getId(),
            Constants::$spaceId
        );

        $this->assertEquals(
            TransactionCompletionState::SUCCESSFUL,
            $transactionCompletion->getState(),
            "Transaction completion state must be SUCCESSFUL"
        );

        $readTransaction = self::$transactionService->getPaymentTransactionsId(
            $transaction->getId(),
            Constants::$spaceId
        );

        $this->assertEquals(
            TransactionState::FULFILL,
            $readTransaction->getState(),
            "Transaction state must be FULFILL"
        );

        $refundCreate = $this->getRefundCreate($transaction);
        $refund = self::$refundService->postPaymentRefunds(
            Constants::$spaceId,
            $refundCreate
        );

        $this->assertEquals(
            RefundState::SUCCESSFUL,
            $refund->getState(),
            "Refund state must be SUCCESSFUL"
        );
    }

    /**
     * Refund read should return valid data.
     */
    public function testReadShouldReturnRefundData(): void
    {
        $transaction = $this->create(TestUtils::getTransactionCreatePayload());

        $processedTransaction = self::$transactionService->postPaymentTransactionsIdProcessCardDetails(
            $transaction->getId(),
            Constants::$spaceId,
            Constants::getMockCardData()
        );

        $transactionCompletion = self::$transactionService->postPaymentTransactionsIdCompleteOffline(
            $transaction->getId(),
            Constants::$spaceId
        );

        $this->assertEquals(
            TransactionCompletionState::SUCCESSFUL,
            $transactionCompletion->getState(),
            "Transaction completion state must be SUCCESSFUL"
        );

        $refundCreate = $this->getRefundCreate($transaction);
        $refund = self::$refundService->postPaymentRefunds(
            Constants::$spaceId,
            $refundCreate
        );

        $this->assertEquals(
            RefundState::SUCCESSFUL,
            $refund->getState(),
            "Refund state must be SUCCESSFUL"
        );

        $readRefund = self::$refundService->getPaymentRefundsId(
            $refund->getId(),
            Constants::$spaceId
        );

        $this->assertEquals(
            $refund->getId(),
            $readRefund->getId(),
            "Refund IDs should match"
        );
    }

    private function getRefundCreate(Transaction $transaction): RefundCreate
    {
        return (new RefundCreate())
            ->setTransaction($transaction->getId())
            ->setType(RefundType::MERCHANT_INITIATED_ONLINE)
            ->setExternalId(uniqid('', false))
            ->setAmount(29.95);
    }

    private function create($transactionCreate): Transaction
    {
        return self::$transactionService->postPaymentTransactions(
            Constants::$spaceId,
            $transactionCreate
        );
    }
}

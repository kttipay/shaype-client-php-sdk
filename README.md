# OpenAPIClient-php

This application will be used by HaaS customers as an integration point with HAY Bank


## Installation & Usage

### Requirements

PHP 8.1 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Shaype\Client\Api\AccountsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_id = 'account_id_example'; // string | Unique identifier (UUID) of the Account
$external_add_transaction_rule_request = new \Shaype\Client\Model\ExternalAddTransactionRuleRequest(); // \Shaype\Client\Model\ExternalAddTransactionRuleRequest

try {
    $result = $apiInstance->addAccountRule($account_id, $external_add_transaction_rule_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsAPIApi->addAccountRule: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *http://localhost:8080*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountsAPIApi* | [**addAccountRule**](docs/Api/AccountsAPIApi.md#addaccountrule) | **POST** /v1/accounts/{accountId}/rules | Create Rule for Account
*AccountsAPIApi* | [**blockAccount**](docs/Api/AccountsAPIApi.md#blockaccount) | **POST** /v0/accounts/{accountId}/block | Block Account and Customer
*AccountsAPIApi* | [**changeAccountRiskLevel**](docs/Api/AccountsAPIApi.md#changeaccountrisklevel) | **PATCH** /v0/accounts/{accountId}/riskLevel | Update Account Risk Level
*AccountsAPIApi* | [**closeAccount**](docs/Api/AccountsAPIApi.md#closeaccount) | **POST** /v0/accounts/{accountId}/close | Closes an account
*AccountsAPIApi* | [**createAccount**](docs/Api/AccountsAPIApi.md#createaccount) | **POST** /v1/accounts | Creates an Account
*AccountsAPIApi* | [**createAccountCustomData**](docs/Api/AccountsAPIApi.md#createaccountcustomdata) | **POST** /v1/accounts/{accountId}/custom-data | Create Custom Data for Account
*AccountsAPIApi* | [**deleteAccountCustomData**](docs/Api/AccountsAPIApi.md#deleteaccountcustomdata) | **DELETE** /v1/accounts/{accountId}/custom-data | Delete Custom Data from Account
*AccountsAPIApi* | [**deleteAccountLimit**](docs/Api/AccountsAPIApi.md#deleteaccountlimit) | **DELETE** /v1/accounts/{accountId}/limits/{limitType} | Delete limit from Account
*AccountsAPIApi* | [**disableRule**](docs/Api/AccountsAPIApi.md#disablerule) | **DELETE** /v1/accounts/{accountId}/rules/{ruleId} | Delete Rule from Account
*AccountsAPIApi* | [**getAccountLimits**](docs/Api/AccountsAPIApi.md#getaccountlimits) | **GET** /v1/accounts/{accountId}/limits | Get all limits by Account ID
*AccountsAPIApi* | [**getAccountRiskLevel**](docs/Api/AccountsAPIApi.md#getaccountrisklevel) | **GET** /v0/accounts/{accountId}/riskLevel | Get Risk Level by Account ID
*AccountsAPIApi* | [**getAccountRuleById**](docs/Api/AccountsAPIApi.md#getaccountrulebyid) | **GET** /v1/accounts/{accountId}/rules/{ruleId} | Get Rule for Account by Rule ID
*AccountsAPIApi* | [**getAccountRules**](docs/Api/AccountsAPIApi.md#getaccountrules) | **GET** /v1/accounts/{accountId}/rules | Get all Rules by Account ID
*AccountsAPIApi* | [**getCardsForAccountId**](docs/Api/AccountsAPIApi.md#getcardsforaccountid) | **GET** /v0/accounts/{accountId}/cards | Get all Cards by Account ID
*AccountsAPIApi* | [**getHayAccount**](docs/Api/AccountsAPIApi.md#gethayaccount) | **GET** /v0/accounts/{accountId} | Get Account by ID
*AccountsAPIApi* | [**getPendingHolds**](docs/Api/AccountsAPIApi.md#getpendingholds) | **GET** /v0/accounts/{accountId}/holds | Get all Authorisation Holds by Account ID
*AccountsAPIApi* | [**makeTransferV0**](docs/Api/AccountsAPIApi.md#maketransferv0) | **POST** /v0/accounts/{accountId}/transfer | Initiate Cash Transfer (DEPRECATED)
*AccountsAPIApi* | [**makeTransferV1**](docs/Api/AccountsAPIApi.md#maketransferv1) | **POST** /v1/accounts/{accountId}/transfer | Initiate Cash Transfer
*AccountsAPIApi* | [**searchAccounts**](docs/Api/AccountsAPIApi.md#searchaccounts) | **POST** /v1/accounts/search | Search accounts
*AccountsAPIApi* | [**setAccountLimit**](docs/Api/AccountsAPIApi.md#setaccountlimit) | **PUT** /v1/accounts/{accountId}/limits/{limitType} | Set limit for Account
*AccountsAPIApi* | [**unblockAccount**](docs/Api/AccountsAPIApi.md#unblockaccount) | **POST** /v0/accounts/{accountId}/unblock | Unblock Account
*AccountsAPIApi* | [**updateMaxBalanceLimit**](docs/Api/AccountsAPIApi.md#updatemaxbalancelimit) | **PATCH** /v0/accounts/{accountId}/max-balance | Update Account max balance
*AccountsAPIApi* | [**updateOverdraftLimit**](docs/Api/AccountsAPIApi.md#updateoverdraftlimit) | **PATCH** /v0/accounts/{accountId}/overdraft | Update Account overdraft limit
*BPAYAPIApi* | [**createBPayBiller**](docs/Api/BPAYAPIApi.md#createbpaybiller) | **POST** /v1/accounts/{accountId}/bpay-billers | Create BPAY Biller for Account ID
*BPAYAPIApi* | [**makeBpayPayment**](docs/Api/BPAYAPIApi.md#makebpaypayment) | **POST** /v1/accounts/{accountId}/payments/bpay | Initiate BPAY payment
*BPAYAPIApi* | [**retrieveBillers**](docs/Api/BPAYAPIApi.md#retrievebillers) | **GET** /v1/accounts/{accountId}/bpay-billers | BPAY billers for account
*BPAYAPIApi* | [**retrieveBpayBiller**](docs/Api/BPAYAPIApi.md#retrievebpaybiller) | **GET** /v1/bpay-billers/{billerId} | Retrieve BPAY Biller
*BPAYAPIApi* | [**updateBpayBiller**](docs/Api/BPAYAPIApi.md#updatebpaybiller) | **PATCH** /v1/bpay-billers/{billerId} | Update BPAY Biller
*BPAYAPIApi* | [**validateBpay**](docs/Api/BPAYAPIApi.md#validatebpay) | **POST** /v1/bpay-billers/validate | Validate BPAY
*CardsAPIApi* | [**activateCard**](docs/Api/CardsAPIApi.md#activatecard) | **POST** /v0/cards/{cardId}/activate | Activate Card
*CardsAPIApi* | [**blockCard**](docs/Api/CardsAPIApi.md#blockcard) | **POST** /v0/cards/{cardId}/block | Block Card
*CardsAPIApi* | [**cancelCard**](docs/Api/CardsAPIApi.md#cancelcard) | **POST** /v0/cards/{cardId}/cancel | Cancel Card
*CardsAPIApi* | [**changeCardPin**](docs/Api/CardsAPIApi.md#changecardpin) | **PUT** /v0/cards/{cardId}/pin | Change Card PIN
*CardsAPIApi* | [**convertCard**](docs/Api/CardsAPIApi.md#convertcard) | **POST** /v0/cards/{cardId}/convert | Convert Card
*CardsAPIApi* | [**createHayCard**](docs/Api/CardsAPIApi.md#createhaycard) | **POST** /v0/cards/create | Create Card for Customer
*CardsAPIApi* | [**getCard**](docs/Api/CardsAPIApi.md#getcard) | **GET** /v0/cards/{cardId} | Get Card by ID
*CardsAPIApi* | [**getCardPinStatus**](docs/Api/CardsAPIApi.md#getcardpinstatus) | **GET** /v0/cards/{cardId}/pin/status | Get Card PIN status
*CardsAPIApi* | [**getDigitalWalletDetails**](docs/Api/CardsAPIApi.md#getdigitalwalletdetails) | **GET** /v0/cards/{cardId}/digital-wallets | Get wallets by Card ID
*CardsAPIApi* | [**getOemProvisioningData**](docs/Api/CardsAPIApi.md#getoemprovisioningdata) | **GET** /v0/cards/{cardId}/oem-provisioning-data | Get provisioning data by Card ID
*CardsAPIApi* | [**getPaymentPreferences**](docs/Api/CardsAPIApi.md#getpaymentpreferences) | **GET** /v0/cards/{cardId}/payment-preferences | Get preferences by Card ID
*CardsAPIApi* | [**reissueHayCard**](docs/Api/CardsAPIApi.md#reissuehaycard) | **POST** /v0/cards/{cardId}/re-issue | Replace Card
*CardsAPIApi* | [**renewCard**](docs/Api/CardsAPIApi.md#renewcard) | **POST** /v0/cards/{cardId}/renew | Renew Card
*CardsAPIApi* | [**rewards**](docs/Api/CardsAPIApi.md#rewards) | **POST** /v0/cards/{cardId}/rewards | Enrol card to rewards
*CardsAPIApi* | [**unblockCard**](docs/Api/CardsAPIApi.md#unblockcard) | **POST** /v0/cards/{cardId}/unblock | Unblock Card
*CardsAPIApi* | [**unblockCardPin**](docs/Api/CardsAPIApi.md#unblockcardpin) | **POST** /v0/cards/{cardId}/pin/unblock | Unblock Card PIN
*CardsAPIApi* | [**updatePaymentPreferences**](docs/Api/CardsAPIApi.md#updatepaymentpreferences) | **PATCH** /v0/cards/{cardId}/payment-preferences | Update Card preferences
*CustomersAPIApi* | [**blockCustomer**](docs/Api/CustomersAPIApi.md#blockcustomer) | **POST** /v0/customers/{customerId}/block | Block Customer
*CustomersAPIApi* | [**changeHayCustomerStatus**](docs/Api/CustomersAPIApi.md#changehaycustomerstatus) | **PATCH** /v0/customers/{customerId}/status | Update Customer status
*CustomersAPIApi* | [**createHayAccount**](docs/Api/CustomersAPIApi.md#createhayaccount) | **POST** /v0/customers/{customerHayId}/account | Create Account for Customer - (To be DEPRECATED - Use POST /v1/accounts instead)
*CustomersAPIApi* | [**createHayCustomer**](docs/Api/CustomersAPIApi.md#createhaycustomer) | **POST** /v0/customers/create | Create Customer
*CustomersAPIApi* | [**getAccountsForCustomerId**](docs/Api/CustomersAPIApi.md#getaccountsforcustomerid) | **GET** /v0/customers/{customerHayId}/accounts | Get Account by Customer ID
*CustomersAPIApi* | [**getAllCustomers**](docs/Api/CustomersAPIApi.md#getallcustomers) | **GET** /v0/customers | Get all Customers
*CustomersAPIApi* | [**getCardsForCustomerId**](docs/Api/CustomersAPIApi.md#getcardsforcustomerid) | **GET** /v0/customers/{customerHayId}/cards | Get Cards by Customer ID
*CustomersAPIApi* | [**getHayCustomerById**](docs/Api/CustomersAPIApi.md#gethaycustomerbyid) | **GET** /v0/customers/{customerId} | Get Customer by ID
*CustomersAPIApi* | [**searchCustomers**](docs/Api/CustomersAPIApi.md#searchcustomers) | **POST** /v0/customers/search | Search Customers
*CustomersAPIApi* | [**unblockCustomer**](docs/Api/CustomersAPIApi.md#unblockcustomer) | **POST** /v0/customers/{customerId}/unblock | Unblock Customer
*CustomersAPIApi* | [**updateCustomer**](docs/Api/CustomersAPIApi.md#updatecustomer) | **PATCH** /v0/customers/{customerId} | Update Customer details
*DirectDebitsAPIApi* | [**createDirectDebitV0**](docs/Api/DirectDebitsAPIApi.md#createdirectdebitv0) | **POST** /v0/direct-debits | Create outbound Direct Debit
*DirectDebitsAPIApi* | [**createDirectDebitV1**](docs/Api/DirectDebitsAPIApi.md#createdirectdebitv1) | **POST** /v1/direct-debits | Create outbound Direct Debit
*DirectDebitsAPIApi* | [**getDirectDebitV0**](docs/Api/DirectDebitsAPIApi.md#getdirectdebitv0) | **GET** /v0/direct-debits/{transactionId} | Get outbound Direct Debit by ID
*DirectDebitsAPIApi* | [**getDirectDebitV1**](docs/Api/DirectDebitsAPIApi.md#getdirectdebitv1) | **GET** /v1/direct-debits/{transactionId} | Get outbound Direct Debit by ID
*DirectDebitsAPIApi* | [**getDirectDebitsV0**](docs/Api/DirectDebitsAPIApi.md#getdirectdebitsv0) | **GET** /v0/direct-debits | Get outbound Direct Debits by date
*DirectDebitsAPIApi* | [**getDirectDebitsV1**](docs/Api/DirectDebitsAPIApi.md#getdirectdebitsv1) | **GET** /v1/direct-debits | Get outbound Direct Debits by date
*GroupsAPIApi* | [**addCustomersToGroup**](docs/Api/GroupsAPIApi.md#addcustomerstogroup) | **POST** /v0/groups/{groupHayId}/addCustomers | Add Customers to Group
*GroupsAPIApi* | [**createHayAccountForGroup**](docs/Api/GroupsAPIApi.md#createhayaccountforgroup) | **POST** /v0/groups/{groupHayId}/account | Create Account for Group - (To be DEPRECATED - Use POST /v1/accounts instead)
*GroupsAPIApi* | [**createHayGroup**](docs/Api/GroupsAPIApi.md#createhaygroup) | **POST** /v0/groups/create | Create Group
*GroupsAPIApi* | [**getHayJointAccountByGroupHayId**](docs/Api/GroupsAPIApi.md#gethayjointaccountbygrouphayid) | **GET** /v0/groups/{groupHayId} | Get Account by Group ID
*GroupsAPIApi* | [**removeCustomerFromGroup**](docs/Api/GroupsAPIApi.md#removecustomerfromgroup) | **POST** /v0/groups/{groupHayId}/removeCustomer | Remove a Customer from a Group
*GroupsAPIApi* | [**updateGroup**](docs/Api/GroupsAPIApi.md#updategroup) | **PATCH** /v0/groups/{groupHayId} | Update Group details
*HoldsAPIApi* | [**getAuthorisationHold**](docs/Api/HoldsAPIApi.md#getauthorisationhold) | **GET** /v1/holds/{holdId} | Get Authorisation Hold by ID
*KYCAPIApi* | [**approveAmlKycCheck**](docs/Api/KYCAPIApi.md#approveamlkyccheck) | **POST** /v1/kyc/{customerId}/onboarding/amlKycCheck/approval | Approve AML Check
*KYCAPIApi* | [**approveDocumentCheck**](docs/Api/KYCAPIApi.md#approvedocumentcheck) | **POST** /v1/kyc/{customerId}/onboarding/documentCheck/approval | Approve Document Check
*KYCAPIApi* | [**approveSanctionCheck**](docs/Api/KYCAPIApi.md#approvesanctioncheck) | **POST** /v1/kyc/{customerId}/onboarding/sanctionCheck/approval | Approve Sanctions Check
*KYCAPIApi* | [**createCase**](docs/Api/KYCAPIApi.md#createcase) | **POST** /v1/kyc/identity-verification/cases | Create new identity verification case and first submission
*LiquidityAPIApi* | [**createLiquidityThreshold**](docs/Api/LiquidityAPIApi.md#createliquiditythreshold) | **POST** /v1/liquidity/thresholds | Create liquidity alerting Threshold
*LiquidityAPIApi* | [**getClientLiquidity**](docs/Api/LiquidityAPIApi.md#getclientliquidity) | **GET** /v1/liquidity | Get client Liquidity
*LiquidityAPIApi* | [**getClientLiquidityThresholds**](docs/Api/LiquidityAPIApi.md#getclientliquiditythresholds) | **GET** /v1/liquidity/thresholds | Get all liquidity alerting Thresholds
*LiquidityAPIApi* | [**updateLiquidityThreshold**](docs/Api/LiquidityAPIApi.md#updateliquiditythreshold) | **PUT** /v1/liquidity/thresholds/{thresholdId} | Update liquidity alerting Threshold
*MerchantCategoryCodesAPIApi* | [**getAllMerchantCategoryCodes**](docs/Api/MerchantCategoryCodesAPIApi.md#getallmerchantcategorycodes) | **GET** /v0/mccs | Get all Merchant Category Codes
*PayIDAPIApi* | [**getPayId**](docs/Api/PayIDAPIApi.md#getpayid) | **GET** /v0/payids/{payId} | Get PayID details
*PayIDAPIApi* | [**getPayIdAvailability**](docs/Api/PayIDAPIApi.md#getpayidavailability) | **GET** /v0/payids/{payId}/availability | Check PayID availability
*PayIDAPIApi* | [**getPayIdDeregisterHistory**](docs/Api/PayIDAPIApi.md#getpayidderegisterhistory) | **GET** /v0/payids/{payId}/deregister-history | Get PayID de-register history
*PayIDAPIApi* | [**getPayIdsForAccount**](docs/Api/PayIDAPIApi.md#getpayidsforaccount) | **GET** /v1/accounts/{accountId}/payids | Get PayIDs by Account ID
*PayIDAPIApi* | [**postPayIdRegister**](docs/Api/PayIDAPIApi.md#postpayidregister) | **POST** /v1/accounts/{accountId}/payids/{payId}/register | Register PayID
*PayIDAPIApi* | [**resolvePayId**](docs/Api/PayIDAPIApi.md#resolvepayid) | **GET** /v0/payids/{payId}/resolve | Resolve PayID to bank account
*PayIDAPIApi* | [**updatePayIdDetails**](docs/Api/PayIDAPIApi.md#updatepayiddetails) | **POST** /v0/payids/{payId}/details | Update PayID details
*PayIDAPIApi* | [**updatePayIdStatus**](docs/Api/PayIDAPIApi.md#updatepayidstatus) | **PATCH** /v0/payids/{payId}/status | Update PayID status
*PayToAPIApi* | [**amendMandateByInitiator**](docs/Api/PayToAPIApi.md#amendmandatebyinitiator) | **PUT** /v1/payto/initiator/mandates/{mandateId} | Amend Mandate by Initiator
*PayToAPIApi* | [**amendMandateByPayer**](docs/Api/PayToAPIApi.md#amendmandatebypayer) | **PUT** /v1/payto/payer/mandates/{mandateId} | Amend Mandate by Payer
*PayToAPIApi* | [**amendMandatePaymentTerms**](docs/Api/PayToAPIApi.md#amendmandatepaymentterms) | **PATCH** /v1/payto/initiator/mandates/{mandateId}/payment_terms | Amend Mandate payment terms
*PayToAPIApi* | [**cancelMandateByInitiator**](docs/Api/PayToAPIApi.md#cancelmandatebyinitiator) | **PATCH** /v1/payto/initiator/mandates/{mandateId}/cancel | Cancel Mandate by Initiator
*PayToAPIApi* | [**cancelMandateByPayer**](docs/Api/PayToAPIApi.md#cancelmandatebypayer) | **PATCH** /v1/payto/payer/mandates/{mandateId}/cancel | Cancel Mandate by Payer
*PayToAPIApi* | [**checkBsbIsSupportedByPayTo**](docs/Api/PayToAPIApi.md#checkbsbissupportedbypayto) | **GET** /v1/payto/supported-bsbs/{bsbNumber} | Check if BSB supports PayTo
*PayToAPIApi* | [**createMandate**](docs/Api/PayToAPIApi.md#createmandate) | **POST** /v1/payto/initiator/mandates | Create Mandate
*PayToAPIApi* | [**getMandate**](docs/Api/PayToAPIApi.md#getmandate) | **GET** /v1/payto/mandates/{mandateId} | Get Mandate by ID
*PayToAPIApi* | [**getMandateActionsByInitiator**](docs/Api/PayToAPIApi.md#getmandateactionsbyinitiator) | **GET** /v1/payto/initiator/mandates/{mandateId}/actions | Get Mandate Actions by Initiator
*PayToAPIApi* | [**getMandateActionsByPayer**](docs/Api/PayToAPIApi.md#getmandateactionsbypayer) | **GET** /v1/payto/payer/mandates/{mandateId}/actions | Get Mandate Actions by Payer
*PayToAPIApi* | [**getMandateIdsByInitiator**](docs/Api/PayToAPIApi.md#getmandateidsbyinitiator) | **GET** /v1/payto/initiator/mandates | Returns all Mandate IDs for a Shaype Account ID.
*PayToAPIApi* | [**getMandatePaymentStatus**](docs/Api/PayToAPIApi.md#getmandatepaymentstatus) | **GET** /v1/payto/initiator/mandates/{mandateId}/instructions/{instructionId}/status | Get Payment instruction status by Mandate ID and Payment instruction ID
*PayToAPIApi* | [**getMandates**](docs/Api/PayToAPIApi.md#getmandates) | **GET** /v1/payto/mandates | Get Mandates by debtor account numbers
*PayToAPIApi* | [**makeAdhocPayment**](docs/Api/PayToAPIApi.md#makeadhocpayment) | **POST** /v1/payto/payments/adhoc | Make Adhoc Payment
*PayToAPIApi* | [**releaseMandateByInitiator**](docs/Api/PayToAPIApi.md#releasemandatebyinitiator) | **PATCH** /v1/payto/initiator/mandates/{mandateId}/release | Release Mandate by Initiator
*PayToAPIApi* | [**releaseMandateByPayer**](docs/Api/PayToAPIApi.md#releasemandatebypayer) | **PATCH** /v1/payto/payer/mandates/{mandateId}/release | Release Mandate by Payer
*PayToAPIApi* | [**resolveMandateByInitiator**](docs/Api/PayToAPIApi.md#resolvemandatebyinitiator) | **PATCH** /v1/payto/initiator/mandates/{mandateId}/resolve | Resolve Mandate by Initiator
*PayToAPIApi* | [**resolveMandateByPayer**](docs/Api/PayToAPIApi.md#resolvemandatebypayer) | **PATCH** /v1/payto/payer/mandates/{mandateId}/resolve | Resolve Mandate pending action by Payer
*PayToAPIApi* | [**searchPaymentsInstructions**](docs/Api/PayToAPIApi.md#searchpaymentsinstructions) | **GET** /v1/payto/initiator/mandates/{mandateId}/search | Search payments instructions by Mandate ID
*PayToAPIApi* | [**setScheduledPaymentInitiationRequestAmount**](docs/Api/PayToAPIApi.md#setscheduledpaymentinitiationrequestamount) | **PATCH** /v1/payto/initiator/mandates/{mandateId}/payments/amount | Set amount of Scheduled Payment Initiation Request by Initiator
*PayToAPIApi* | [**suspendMandateByInitiator**](docs/Api/PayToAPIApi.md#suspendmandatebyinitiator) | **PATCH** /v1/payto/initiator/mandates/{mandateId}/suspend | Suspend Mandate by Initiator
*PayToAPIApi* | [**suspendMandateByPayer**](docs/Api/PayToAPIApi.md#suspendmandatebypayer) | **PATCH** /v1/payto/payer/mandates/{mandateId}/suspend | Suspend Mandate by Payer
*ProductsAPIApi* | [**getAllProducts**](docs/Api/ProductsAPIApi.md#getallproducts) | **GET** /v1/products | Gets all products
*ScheduledPaymentsAPIApi* | [**cancelScheduledPayment**](docs/Api/ScheduledPaymentsAPIApi.md#cancelscheduledpayment) | **POST** /v0/accounts/{accountId}/scheduledPayments/{paymentId}/cancel | Cancel Scheduled Payment
*ScheduledPaymentsAPIApi* | [**getScheduledPaymentById**](docs/Api/ScheduledPaymentsAPIApi.md#getscheduledpaymentbyid) | **GET** /v0/accounts/{accountId}/scheduledPayments/{paymentId} | Get Scheduled Payment by Payment ID for an Account
*ScheduledPaymentsAPIApi* | [**getScheduledPayments**](docs/Api/ScheduledPaymentsAPIApi.md#getscheduledpayments) | **GET** /v0/accounts/{accountId}/scheduledPayments | Get Scheduled Payments by Account ID
*StacksAPIApi* | [**accountToStackTransfer**](docs/Api/StacksAPIApi.md#accounttostacktransfer) | **POST** /v0/accounts/{accountId}/stacks/{stackId}/transfer-in | Transfer funds from Account to Stack
*StacksAPIApi* | [**closeStack**](docs/Api/StacksAPIApi.md#closestack) | **POST** /v0/accounts/{accountId}/stacks/{stackId}/close | Close Stack
*StacksAPIApi* | [**createStack**](docs/Api/StacksAPIApi.md#createstack) | **POST** /v0/accounts/{accountId}/stacks | Create new stack
*StacksAPIApi* | [**getAllStackTransactions**](docs/Api/StacksAPIApi.md#getallstacktransactions) | **GET** /v0/accounts/{accountId}/stacks/transactions | Get all Stack Transactions by Account ID
*StacksAPIApi* | [**getAllStacks**](docs/Api/StacksAPIApi.md#getallstacks) | **GET** /v0/accounts/{accountId}/stacks | Get all Stacks by Account ID
*StacksAPIApi* | [**getTransactionsForStack**](docs/Api/StacksAPIApi.md#gettransactionsforstack) | **GET** /v0/accounts/{accountId}/stacks/{stackId}/transactions | Get all Stack Transactions by Stack ID
*StacksAPIApi* | [**stackToAccountTransfer**](docs/Api/StacksAPIApi.md#stacktoaccounttransfer) | **POST** /v0/accounts/{accountId}/stacks/{stackId}/transfer-out | Transfer funds from Stack to Account
*StacksAPIApi* | [**stackToStackTransfer**](docs/Api/StacksAPIApi.md#stacktostacktransfer) | **POST** /v0/accounts/{accountId}/stacks/transactions | Transfer funds from Stack to Stack of an Account
*StacksAPIApi* | [**updateStack**](docs/Api/StacksAPIApi.md#updatestack) | **PUT** /v0/accounts/{accountId}/stacks/{stackId} | Update Stack
*TokensAPIApi* | [**elevateExternalToken**](docs/Api/TokensAPIApi.md#elevateexternaltoken) | **POST** /v0/tokens/elevate | Retrieve an elevation header to be used for GraphQL APIs that require step up access
*TokensAPIApi* | [**exchangeExternalToken**](docs/Api/TokensAPIApi.md#exchangeexternaltoken) | **POST** /v0/tokens/exchange | Exchange External Token for a Shaype token to be used when calling our GraphQL APIs
*TransactionsAPIApi* | [**createCreditTransactionV0**](docs/Api/TransactionsAPIApi.md#createcredittransactionv0) | **POST** /v0/transactions/credit/create | Create Credit Transaction for Account (DEPRECATED)
*TransactionsAPIApi* | [**createCreditTransactionV1**](docs/Api/TransactionsAPIApi.md#createcredittransactionv1) | **POST** /v1/transactions/credit | Create Credit Transaction for Account
*TransactionsAPIApi* | [**createDebitTransactionV0**](docs/Api/TransactionsAPIApi.md#createdebittransactionv0) | **POST** /v0/transactions/debit/create | Create Debit Transaction for Account (DEPRECATED)
*TransactionsAPIApi* | [**createDebitTransactionV1**](docs/Api/TransactionsAPIApi.md#createdebittransactionv1) | **POST** /v1/transactions/debit | Create Debit Transaction for Account
*TransactionsAPIApi* | [**getTransactionById**](docs/Api/TransactionsAPIApi.md#gettransactionbyid) | **GET** /v1/transactions/{transactionHayId} | Get Transaction by ID
*TransactionsAPIApi* | [**searchTransactions**](docs/Api/TransactionsAPIApi.md#searchtransactions) | **POST** /v0/transactions/search | Search Transactions
*UtilitiesAPIApi* | [**createStubForMandateSearchPaymentInstructions**](docs/Api/UtilitiesAPIApi.md#createstubformandatesearchpaymentinstructions) | **POST** /v0/utils/create-stub-search-payment-instructions | Create stub for search payment instructions for a mandate.
*UtilitiesAPIApi* | [**generateAtmTransaction**](docs/Api/UtilitiesAPIApi.md#generateatmtransaction) | **POST** /v0/utils/generate-atm-transaction | Trigger mock ATM card transaction
*UtilitiesAPIApi* | [**generateAuthHold**](docs/Api/UtilitiesAPIApi.md#generateauthhold) | **POST** /v0/utils/generate-auth-hold | Trigger mock card Hold
*UtilitiesAPIApi* | [**generateCardTransaction**](docs/Api/UtilitiesAPIApi.md#generatecardtransaction) | **POST** /v0/utils/generate-card-transaction | Trigger mock card Hold and Settlement
*UtilitiesAPIApi* | [**generateInboundNppTransaction**](docs/Api/UtilitiesAPIApi.md#generateinboundnpptransaction) | **POST** /v0/utils/generate-npp-inbound | Generate mock NPP inbound transaction.
*UtilitiesAPIApi* | [**generateInboundNppTransactionV2**](docs/Api/UtilitiesAPIApi.md#generateinboundnpptransactionv2) | **POST** /v0/utils/generate-inbound-npp-transaction-v2 | Generate mock NPP inbound transaction v2.
*UtilitiesAPIApi* | [**generateMandateNotificationForInitiator**](docs/Api/UtilitiesAPIApi.md#generatemandatenotificationforinitiator) | **POST** /v0/utils/generate-mandate-notification-initiator | Generate mock Mandate notification for Initiator.
*UtilitiesAPIApi* | [**generateMandateNotificationForPayer**](docs/Api/UtilitiesAPIApi.md#generatemandatenotificationforpayer) | **POST** /v0/utils/generate-mandate-notification-payer | Generate mock Mandate notification for Payer.
*UtilitiesAPIApi* | [**generateReceiveAPaymentInstruction**](docs/Api/UtilitiesAPIApi.md#generatereceiveapaymentinstruction) | **POST** /v0/utils/generate-receive-a-payment-instruction | Generate mock Receive A Payment Instruction (RAPAIN).

## Models

- [AccountToStackTransferRequestBody](docs/Model/AccountToStackTransferRequestBody.md)
- [AccountTransfer](docs/Model/AccountTransfer.md)
- [AddCustomersToGroupRequestBody](docs/Model/AddCustomersToGroupRequestBody.md)
- [Address](docs/Model/Address.md)
- [AmendMandateByInitiatorRequestBody](docs/Model/AmendMandateByInitiatorRequestBody.md)
- [AmendMandateByPayerRequestBody](docs/Model/AmendMandateByPayerRequestBody.md)
- [AmendMandatePaymentTermsRequestBody](docs/Model/AmendMandatePaymentTermsRequestBody.md)
- [ApiDigitalWallet](docs/Model/ApiDigitalWallet.md)
- [AuthorisationHold](docs/Model/AuthorisationHold.md)
- [BPayBillerAddRequestBody](docs/Model/BPayBillerAddRequestBody.md)
- [BPayBillerDetails](docs/Model/BPayBillerDetails.md)
- [BPayBillerRequestBody](docs/Model/BPayBillerRequestBody.md)
- [BPayBillerResponse](docs/Model/BPayBillerResponse.md)
- [BPayBillerUpdateRequestBody](docs/Model/BPayBillerUpdateRequestBody.md)
- [BPayLiquidity](docs/Model/BPayLiquidity.md)
- [BPayPaymentRequestBody](docs/Model/BPayPaymentRequestBody.md)
- [BasicAccountNumber](docs/Model/BasicAccountNumber.md)
- [BlockAccountRequestBody](docs/Model/BlockAccountRequestBody.md)
- [BlockCardRequestBody](docs/Model/BlockCardRequestBody.md)
- [BlockCustomerRequestBody](docs/Model/BlockCustomerRequestBody.md)
- [BpayDetails](docs/Model/BpayDetails.md)
- [BpayPaymentResponseBody](docs/Model/BpayPaymentResponseBody.md)
- [BusinessIdentifiers](docs/Model/BusinessIdentifiers.md)
- [CancelMandateRequestBody](docs/Model/CancelMandateRequestBody.md)
- [CardPaymentPreferences](docs/Model/CardPaymentPreferences.md)
- [CardPinStatus](docs/Model/CardPinStatus.md)
- [CardRewardsStatusBody](docs/Model/CardRewardsStatusBody.md)
- [ChangeCardPinRequestBody](docs/Model/ChangeCardPinRequestBody.md)
- [ChangeHayAccountRiskLevelRequestBody](docs/Model/ChangeHayAccountRiskLevelRequestBody.md)
- [ChangeHayCustomerStatusRequestBody](docs/Model/ChangeHayCustomerStatusRequestBody.md)
- [CheckPayToBsbSupportResponseBody](docs/Model/CheckPayToBsbSupportResponseBody.md)
- [ClientLiquidity](docs/Model/ClientLiquidity.md)
- [CloseAccountRequestBody](docs/Model/CloseAccountRequestBody.md)
- [CloseAccountResponse](docs/Model/CloseAccountResponse.md)
- [ClosureCheckerError](docs/Model/ClosureCheckerError.md)
- [ConfirmationResponse](docs/Model/ConfirmationResponse.md)
- [CreateAccountCustomDataRequestBody](docs/Model/CreateAccountCustomDataRequestBody.md)
- [CreateAccountRequestBody](docs/Model/CreateAccountRequestBody.md)
- [CreateCaseExternalResponse](docs/Model/CreateCaseExternalResponse.md)
- [CreateCreditorDetailsDto](docs/Model/CreateCreditorDetailsDto.md)
- [CreateDebtorDetailsDto](docs/Model/CreateDebtorDetailsDto.md)
- [CreateDirectDebitRequestBody](docs/Model/CreateDirectDebitRequestBody.md)
- [CreateHayAccountForGroupRequestBody](docs/Model/CreateHayAccountForGroupRequestBody.md)
- [CreateHayAccountRequest](docs/Model/CreateHayAccountRequest.md)
- [CreateHayCardRequestBody](docs/Model/CreateHayCardRequestBody.md)
- [CreateHayCustomerRequestBody](docs/Model/CreateHayCustomerRequestBody.md)
- [CreateHayGroupRequestBody](docs/Model/CreateHayGroupRequestBody.md)
- [CreateHayStackRequestBody](docs/Model/CreateHayStackRequestBody.md)
- [CreateMandateRequestBody](docs/Model/CreateMandateRequestBody.md)
- [CreateMandateResponseBody](docs/Model/CreateMandateResponseBody.md)
- [CreatePaymentTermsDto](docs/Model/CreatePaymentTermsDto.md)
- [CreateStubForMandateSearchPaymentInstructionsRequestBody](docs/Model/CreateStubForMandateSearchPaymentInstructionsRequestBody.md)
- [CreateThresholdRequestBody](docs/Model/CreateThresholdRequestBody.md)
- [CreateTransactionRequestBody](docs/Model/CreateTransactionRequestBody.md)
- [CurrencyAmount](docs/Model/CurrencyAmount.md)
- [CurrencyAmountDto](docs/Model/CurrencyAmountDto.md)
- [CustomerDetails](docs/Model/CustomerDetails.md)
- [DeTransactionDetails](docs/Model/DeTransactionDetails.md)
- [DeTransactionDetailsV1](docs/Model/DeTransactionDetailsV1.md)
- [DeleteAccountLimitResponse](docs/Model/DeleteAccountLimitResponse.md)
- [DigitalWalletDetails](docs/Model/DigitalWalletDetails.md)
- [DirectCreditLiquidity](docs/Model/DirectCreditLiquidity.md)
- [DirectDebitLiquidity](docs/Model/DirectDebitLiquidity.md)
- [DirectDebitResponse](docs/Model/DirectDebitResponse.md)
- [DirectDebitResponseV1](docs/Model/DirectDebitResponseV1.md)
- [DirectEntryLiquidity](docs/Model/DirectEntryLiquidity.md)
- [DisableRuleResponse](docs/Model/DisableRuleResponse.md)
- [DocumentData](docs/Model/DocumentData.md)
- [ElevateExternalTokenRequestBody](docs/Model/ElevateExternalTokenRequestBody.md)
- [ElevateExternalTokenResponse](docs/Model/ElevateExternalTokenResponse.md)
- [ErrorResponse](docs/Model/ErrorResponse.md)
- [ExchangeExternalTokenRequestBody](docs/Model/ExchangeExternalTokenRequestBody.md)
- [ExchangeExternalTokenResponse](docs/Model/ExchangeExternalTokenResponse.md)
- [ExternalAddTransactionRuleRequest](docs/Model/ExternalAddTransactionRuleRequest.md)
- [ExternalCase](docs/Model/ExternalCase.md)
- [ExternalCounterpartDetails](docs/Model/ExternalCounterpartDetails.md)
- [ExternalLimitAmounts](docs/Model/ExternalLimitAmounts.md)
- [ExternalMandatePaymentDetails](docs/Model/ExternalMandatePaymentDetails.md)
- [ExternalMerchantDetails](docs/Model/ExternalMerchantDetails.md)
- [ExternalSetAccountLimitRequestBody](docs/Model/ExternalSetAccountLimitRequestBody.md)
- [ExternalSetAccountLimitResponse](docs/Model/ExternalSetAccountLimitResponse.md)
- [ExternalTransactionRuleResponse](docs/Model/ExternalTransactionRuleResponse.md)
- [FinancialTransaction](docs/Model/FinancialTransaction.md)
- [GenerateCardTransactionRequestBody](docs/Model/GenerateCardTransactionRequestBody.md)
- [GenerateHoldAndCardTransactionRequestBody](docs/Model/GenerateHoldAndCardTransactionRequestBody.md)
- [GenerateInboundNppTransactionRequestBody](docs/Model/GenerateInboundNppTransactionRequestBody.md)
- [GenerateInitiatorMandateNotificationRequestBody](docs/Model/GenerateInitiatorMandateNotificationRequestBody.md)
- [GenerateMandateNotificationActionDetailsDto](docs/Model/GenerateMandateNotificationActionDetailsDto.md)
- [GenerateMandateNotificationCreditorInformationDto](docs/Model/GenerateMandateNotificationCreditorInformationDto.md)
- [GenerateMandateNotificationDebtorInformationDto](docs/Model/GenerateMandateNotificationDebtorInformationDto.md)
- [GenerateMandateNotificationMandateDetailsDto](docs/Model/GenerateMandateNotificationMandateDetailsDto.md)
- [GenerateMandateNotificationPaymentInformationDto](docs/Model/GenerateMandateNotificationPaymentInformationDto.md)
- [GeneratePayerMandateNotificationRequestBody](docs/Model/GeneratePayerMandateNotificationRequestBody.md)
- [GenerateRapCreditorInformation](docs/Model/GenerateRapCreditorInformation.md)
- [GenerateRapDebtorInformation](docs/Model/GenerateRapDebtorInformation.md)
- [GenerateRapMandateInformation](docs/Model/GenerateRapMandateInformation.md)
- [GenerateRapPaymentInformation](docs/Model/GenerateRapPaymentInformation.md)
- [GenerateRapPaymentReturnInformation](docs/Model/GenerateRapPaymentReturnInformation.md)
- [GenerateRapRequestBody](docs/Model/GenerateRapRequestBody.md)
- [GenerateRapainCreditorInformation](docs/Model/GenerateRapainCreditorInformation.md)
- [GenerateRapainDebtorInformation](docs/Model/GenerateRapainDebtorInformation.md)
- [GenerateRapainMandateInformation](docs/Model/GenerateRapainMandateInformation.md)
- [GenerateRapainPaymentInformation](docs/Model/GenerateRapainPaymentInformation.md)
- [GenerateRapainRequestBody](docs/Model/GenerateRapainRequestBody.md)
- [GenerateRapainTransactionStatusInformation](docs/Model/GenerateRapainTransactionStatusInformation.md)
- [GenericMessage](docs/Model/GenericMessage.md)
- [GetMandateActionsActionDto](docs/Model/GetMandateActionsActionDto.md)
- [GetMandateActionsCreationEventDto](docs/Model/GetMandateActionsCreationEventDto.md)
- [GetMandateActionsDetailsAmendmentCreditorInformationDto](docs/Model/GetMandateActionsDetailsAmendmentCreditorInformationDto.md)
- [GetMandateActionsDetailsAmendmentDebtorInformationDto](docs/Model/GetMandateActionsDetailsAmendmentDebtorInformationDto.md)
- [GetMandateActionsDetailsAmendmentDto](docs/Model/GetMandateActionsDetailsAmendmentDto.md)
- [GetMandateActionsDetailsAmendmentMandateDetailsCxExtensionDto](docs/Model/GetMandateActionsDetailsAmendmentMandateDetailsCxExtensionDto.md)
- [GetMandateActionsDetailsAmendmentPaymentInformationDto](docs/Model/GetMandateActionsDetailsAmendmentPaymentInformationDto.md)
- [GetMandateActionsDetailsAmendmentPaymentInitiatorInformationDto](docs/Model/GetMandateActionsDetailsAmendmentPaymentInitiatorInformationDto.md)
- [GetMandateActionsDetailsCreationCreditorInformationDto](docs/Model/GetMandateActionsDetailsCreationCreditorInformationDto.md)
- [GetMandateActionsDetailsCreationDebtorInformationDto](docs/Model/GetMandateActionsDetailsCreationDebtorInformationDto.md)
- [GetMandateActionsDetailsCreationDto](docs/Model/GetMandateActionsDetailsCreationDto.md)
- [GetMandateActionsDetailsCreationPaymentInformationDto](docs/Model/GetMandateActionsDetailsCreationPaymentInformationDto.md)
- [GetMandateActionsDetailsCreationPaymentInitiatorInformationDto](docs/Model/GetMandateActionsDetailsCreationPaymentInitiatorInformationDto.md)
- [GetMandateActionsDetailsDto](docs/Model/GetMandateActionsDetailsDto.md)
- [GetMandateActionsDetailsPortingCreditorInformationDto](docs/Model/GetMandateActionsDetailsPortingCreditorInformationDto.md)
- [GetMandateActionsDetailsPortingDebtorInformationDto](docs/Model/GetMandateActionsDetailsPortingDebtorInformationDto.md)
- [GetMandateActionsDetailsPortingDto](docs/Model/GetMandateActionsDetailsPortingDto.md)
- [GetMandateActionsDetailsPortingPaymentInitiatorInformationDto](docs/Model/GetMandateActionsDetailsPortingPaymentInitiatorInformationDto.md)
- [GetMandateActionsDetailsStatusChangeDto](docs/Model/GetMandateActionsDetailsStatusChangeDto.md)
- [GetMandateActionsResolutionEventDto](docs/Model/GetMandateActionsResolutionEventDto.md)
- [GetMandateActionsResponseBody](docs/Model/GetMandateActionsResponseBody.md)
- [GetMandateCreditorDetailsDto](docs/Model/GetMandateCreditorDetailsDto.md)
- [GetMandateDebtorDetailsDto](docs/Model/GetMandateDebtorDetailsDto.md)
- [GetMandatePaymentStatusResponseBody](docs/Model/GetMandatePaymentStatusResponseBody.md)
- [GetMandateResponseBody](docs/Model/GetMandateResponseBody.md)
- [GetMandateSummaryDto](docs/Model/GetMandateSummaryDto.md)
- [GetMandatesResponseBody](docs/Model/GetMandatesResponseBody.md)
- [GetPaymentTermsDto](docs/Model/GetPaymentTermsDto.md)
- [GetPaymentTermsSummaryDto](docs/Model/GetPaymentTermsSummaryDto.md)
- [HaasLiquidity](docs/Model/HaasLiquidity.md)
- [HayAccount](docs/Model/HayAccount.md)
- [HayArchivedScheduledPayment](docs/Model/HayArchivedScheduledPayment.md)
- [HayCard](docs/Model/HayCard.md)
- [HayCustomer](docs/Model/HayCustomer.md)
- [HayGroup](docs/Model/HayGroup.md)
- [HayJointAccount](docs/Model/HayJointAccount.md)
- [HayMerchantCategoryCode](docs/Model/HayMerchantCategoryCode.md)
- [HayScheduledPayment](docs/Model/HayScheduledPayment.md)
- [HayStack](docs/Model/HayStack.md)
- [HayStackTransaction](docs/Model/HayStackTransaction.md)
- [InternalTransfer](docs/Model/InternalTransfer.md)
- [LiquidityThreshold](docs/Model/LiquidityThreshold.md)
- [MakeAdhocPaymentRequestBody](docs/Model/MakeAdhocPaymentRequestBody.md)
- [MakeAdhocPaymentResponseBody](docs/Model/MakeAdhocPaymentResponseBody.md)
- [MerchantAddress](docs/Model/MerchantAddress.md)
- [NonSchemeLiquidity](docs/Model/NonSchemeLiquidity.md)
- [NppLiquidity](docs/Model/NppLiquidity.md)
- [OemProvisioningData](docs/Model/OemProvisioningData.md)
- [OnboardingStageApprovalBody](docs/Model/OnboardingStageApprovalBody.md)
- [PayIdAccountDetails](docs/Model/PayIdAccountDetails.md)
- [PayIdAvailabilityDetailsResponse](docs/Model/PayIdAvailabilityDetailsResponse.md)
- [PayIdDeregisterDetailsResponse](docs/Model/PayIdDeregisterDetailsResponse.md)
- [PayIdDetailsResponse](docs/Model/PayIdDetailsResponse.md)
- [PayIdRegisterRequestBody](docs/Model/PayIdRegisterRequestBody.md)
- [PayIdResponse](docs/Model/PayIdResponse.md)
- [PayIdTransfer](docs/Model/PayIdTransfer.md)
- [PaymentDto](docs/Model/PaymentDto.md)
- [PaymentInstruction](docs/Model/PaymentInstruction.md)
- [PaymentInstructionSummary](docs/Model/PaymentInstructionSummary.md)
- [PaymentInstructionsSummaryResponseBody](docs/Model/PaymentInstructionsSummaryResponseBody.md)
- [PhoneNumber](docs/Model/PhoneNumber.md)
- [ProductSummary](docs/Model/ProductSummary.md)
- [ReissueHayCardRequestBody](docs/Model/ReissueHayCardRequestBody.md)
- [RemoveCustomerFromGroupRequestBody](docs/Model/RemoveCustomerFromGroupRequestBody.md)
- [RenewCardRequestBody](docs/Model/RenewCardRequestBody.md)
- [RiskLevelResponse](docs/Model/RiskLevelResponse.md)
- [RuleDetails](docs/Model/RuleDetails.md)
- [ScheduledPaymentRecipient](docs/Model/ScheduledPaymentRecipient.md)
- [SchemeLiquidity](docs/Model/SchemeLiquidity.md)
- [SearchAccountsRequestBody](docs/Model/SearchAccountsRequestBody.md)
- [SearchCustomersRequestBody](docs/Model/SearchCustomersRequestBody.md)
- [SearchTransactionsRequestBody](docs/Model/SearchTransactionsRequestBody.md)
- [SetScheduledPaymentInitiationAmountRequestBody](docs/Model/SetScheduledPaymentInitiationAmountRequestBody.md)
- [Stack](docs/Model/Stack.md)
- [StackToAccountTransferRequestBody](docs/Model/StackToAccountTransferRequestBody.md)
- [StackToStackTransferRequestBody](docs/Model/StackToStackTransferRequestBody.md)
- [SuspendMandateRequestBody](docs/Model/SuspendMandateRequestBody.md)
- [TaxObligation](docs/Model/TaxObligation.md)
- [TransactionOutcome](docs/Model/TransactionOutcome.md)
- [TransferOutRequestBody](docs/Model/TransferOutRequestBody.md)
- [UnblockAccountRequestBody](docs/Model/UnblockAccountRequestBody.md)
- [UnblockCardRequestBody](docs/Model/UnblockCardRequestBody.md)
- [UnblockCustomerRequestBody](docs/Model/UnblockCustomerRequestBody.md)
- [UpdateCustomerRequestBody](docs/Model/UpdateCustomerRequestBody.md)
- [UpdateGroupRequestBody](docs/Model/UpdateGroupRequestBody.md)
- [UpdateMaxBalanceLimitRequestBody](docs/Model/UpdateMaxBalanceLimitRequestBody.md)
- [UpdateOverdraftLimitRequestBody](docs/Model/UpdateOverdraftLimitRequestBody.md)
- [UpdatePayIdDetailsRequestBody](docs/Model/UpdatePayIdDetailsRequestBody.md)
- [UpdatePayIdStatusRequestBody](docs/Model/UpdatePayIdStatusRequestBody.md)
- [UpdatePaymentPreferencesRequestBody](docs/Model/UpdatePaymentPreferencesRequestBody.md)
- [UpdateStackRequestBody](docs/Model/UpdateStackRequestBody.md)
- [UpdateStackResponse](docs/Model/UpdateStackResponse.md)
- [UpdateThresholdRequestBody](docs/Model/UpdateThresholdRequestBody.md)
- [UserConsentRequestBody](docs/Model/UserConsentRequestBody.md)

## Authorization

### bearer-key

- **Type**: Bearer authentication (JWT)

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `0.0.1`
    - Generator version: `7.9.0`
- Build package: `org.openapitools.codegen.languages.PhpNextgenClientCodegen`

# Swagger\Client\SubscriptionsApi

All URIs are relative to */api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**subscriptionsGet**](SubscriptionsApi.md#subscriptionsget) | **GET** /subscriptions | Return a list of subscriptions
[**subscriptionsPost**](SubscriptionsApi.md#subscriptionspost) | **POST** /subscriptions | Create a subscription
[**subscriptionsSampleApiUpdatedGet**](SubscriptionsApi.md#subscriptionssampleapiupdatedget) | **GET** /subscriptions/sample/api.updated | Receive a notification when this API is updated
[**subscriptionsSampleLeadCreatedGet**](SubscriptionsApi.md#subscriptionssampleleadcreatedget) | **GET** /subscriptions/sample/lead.created | Receive a notification when a lead is created in this CRM, with the option to only receive a notification when a lead is in the status(es) specified here
[**subscriptionsSampleLeadDeletedGet**](SubscriptionsApi.md#subscriptionssampleleaddeletedget) | **GET** /subscriptions/sample/lead.deleted | Receive a notification when a lead in this CRM is deleted
[**subscriptionsSampleLeadDocumentUploadedGet**](SubscriptionsApi.md#subscriptionssampleleaddocumentuploadedget) | **GET** /subscriptions/sample/lead.document.uploaded | Receive a notification when a lead document is uploaded
[**subscriptionsSampleLeadEmailReceivedGet**](SubscriptionsApi.md#subscriptionssampleleademailreceivedget) | **GET** /subscriptions/sample/lead.email.received | Receive a notification when an email message is received on a lead in this CRM, with the option to only receive a notification when a lead is in the status(es) specified here
[**subscriptionsSampleLeadNoteAddedGet**](SubscriptionsApi.md#subscriptionssampleleadnoteaddedget) | **GET** /subscriptions/sample/lead.note.added | Receive a notification when a lead in this CRM has a note posted, with the option to only receive a notification when a lead is in the status(es) specified here
[**subscriptionsSampleLeadRestoredGet**](SubscriptionsApi.md#subscriptionssampleleadrestoredget) | **GET** /subscriptions/sample/lead.restored | Receive a notification when a deleted lead is restored in this CRM
[**subscriptionsSampleLeadSignatureGeneratedGet**](SubscriptionsApi.md#subscriptionssampleleadsignaturegeneratedget) | **GET** /subscriptions/sample/lead.signature.generated | Receive a notification when a lead&#x27;s e-signature document is generated
[**subscriptionsSampleLeadSignatureOpenedGet**](SubscriptionsApi.md#subscriptionssampleleadsignatureopenedget) | **GET** /subscriptions/sample/lead.signature.opened | Receive a notification when a lead&#x27;s e-signature document is opened by the recipient
[**subscriptionsSampleLeadSignatureSignedGet**](SubscriptionsApi.md#subscriptionssampleleadsignaturesignedget) | **GET** /subscriptions/sample/lead.signature.signed | Receive a notification when a lead&#x27;s e-signature document is signed by the recipient
[**subscriptionsSampleLeadStatusUpdatedGet**](SubscriptionsApi.md#subscriptionssampleleadstatusupdatedget) | **GET** /subscriptions/sample/lead.status.updated | Receive a notification when a lead&#x27;s status is updated in this CRM, with the option to only receive a notification when a lead is moved to or from the status(es) specified here
[**subscriptionsSampleLeadUpdatedGet**](SubscriptionsApi.md#subscriptionssampleleadupdatedget) | **GET** /subscriptions/sample/lead.updated | Receive a notification when a lead&#x27;s campaign, status, group, or field values are updated in this CRM, with the option to only receive a notification when a lead is in the status(es) specified here
[**subscriptionsSampleResidualsLineitemAddedGet**](SubscriptionsApi.md#subscriptionssampleresidualslineitemaddedget) | **GET** /subscriptions/sample/residuals.lineitem.added | Receive a notification when a residuals line item is added
[**subscriptionsSampleResidualsReportPublishedGet**](SubscriptionsApi.md#subscriptionssampleresidualsreportpublishedget) | **GET** /subscriptions/sample/residuals.report.published | Receive a notification when a residuals report is published
[**subscriptionsSampleSubscriptionTestGet**](SubscriptionsApi.md#subscriptionssamplesubscriptiontestget) | **GET** /subscriptions/sample/subscription.test | Test payload for checking server response
[**subscriptionsSampleTicketChecklistUpdatedGet**](SubscriptionsApi.md#subscriptionssampleticketchecklistupdatedget) | **GET** /subscriptions/sample/ticket.checklist.updated | Receive a notification when a ticket&#x27;s checklist is updated
[**subscriptionsSampleTicketCommentEditedGet**](SubscriptionsApi.md#subscriptionssampleticketcommenteditedget) | **GET** /subscriptions/sample/ticket.comment.edited | Receive a notification when a ticket comment is edited
[**subscriptionsSampleTicketCommentedGet**](SubscriptionsApi.md#subscriptionssampleticketcommentedget) | **GET** /subscriptions/sample/ticket.commented | Receive a notification when a ticket comment is added
[**subscriptionsSampleTicketCreatedGet**](SubscriptionsApi.md#subscriptionssampleticketcreatedget) | **GET** /subscriptions/sample/ticket.created | Receive a notification when a ticket is created
[**subscriptionsSampleTicketResolvedGet**](SubscriptionsApi.md#subscriptionssampleticketresolvedget) | **GET** /subscriptions/sample/ticket.resolved | Receive a notification when a ticket is resolved
[**subscriptionsSampleTicketUpdatedGet**](SubscriptionsApi.md#subscriptionssampleticketupdatedget) | **GET** /subscriptions/sample/ticket.updated | Receive a notification when a ticket is updated
[**subscriptionsSampleTurboappApprovedGet**](SubscriptionsApi.md#subscriptionssampleturboappapprovedget) | **GET** /subscriptions/sample/turboapp.approved | Receive a notification when a merchant is approved
[**subscriptionsSampleTurboappDeclinedGet**](SubscriptionsApi.md#subscriptionssampleturboappdeclinedget) | **GET** /subscriptions/sample/turboapp.declined | Receive a notification when a merchant is declined
[**subscriptionsSampleTurboappSubmittedGet**](SubscriptionsApi.md#subscriptionssampleturboappsubmittedget) | **GET** /subscriptions/sample/turboapp.submitted | Receive a notification when a TurboApp is submitted to a processor
[**subscriptionsSampleTurboappUpdatedGet**](SubscriptionsApi.md#subscriptionssampleturboappupdatedget) | **GET** /subscriptions/sample/turboapp.updated | Receive a notification when the underwriting status is updated
[**subscriptionsSubscriptionIdDelete**](SubscriptionsApi.md#subscriptionssubscriptioniddelete) | **DELETE** /subscriptions/{subscriptionId} | Delete a subscription
[**subscriptionsSubscriptionIdGet**](SubscriptionsApi.md#subscriptionssubscriptionidget) | **GET** /subscriptions/{subscriptionId} | Return a subscription by its id
[**subscriptionsSubscriptionIdPatch**](SubscriptionsApi.md#subscriptionssubscriptionidpatch) | **PATCH** /subscriptions/{subscriptionId} | Update a subscription

# **subscriptionsGet**
> \Swagger\Client\Model\InlineResponse20053 subscriptionsGet($page, $per_page)

Return a list of subscriptions

Return a list of subscriptions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | Page Number
$per_page = 56; // int | Count of records per page

try {
    $result = $apiInstance->subscriptionsGet($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page Number | [optional]
 **per_page** | **int**| Count of records per page | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20053**](../Model/InlineResponse20053.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionsPost**
> \Swagger\Client\Model\BriefSubscriptionInfo subscriptionsPost($body)

Create a subscription

Create a subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\BriefSubscriptionInfo(); // \Swagger\Client\Model\BriefSubscriptionInfo | Subscription details

try {
    $result = $apiInstance->subscriptionsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\BriefSubscriptionInfo**](../Model/BriefSubscriptionInfo.md)| Subscription details |

### Return type

[**\Swagger\Client\Model\BriefSubscriptionInfo**](../Model/BriefSubscriptionInfo.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionsSampleApiUpdatedGet**
> \Swagger\Client\Model\ApiUpdated subscriptionsSampleApiUpdatedGet()

Receive a notification when this API is updated

Example use: stay aware of changes and additions to the API.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->subscriptionsSampleApiUpdatedGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsSampleApiUpdatedGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ApiUpdated**](../Model/ApiUpdated.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionsSampleLeadCreatedGet**
> \Swagger\Client\Model\LeadCreatedEventInfo subscriptionsSampleLeadCreatedGet()

Receive a notification when a lead is created in this CRM, with the option to only receive a notification when a lead is in the status(es) specified here

Example use: create a record in an external system when a lead is created in this CRM.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->subscriptionsSampleLeadCreatedGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsSampleLeadCreatedGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\LeadCreatedEventInfo**](../Model/LeadCreatedEventInfo.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionsSampleLeadDeletedGet**
> \Swagger\Client\Model\LeadDeletedEventInfo subscriptionsSampleLeadDeletedGet()

Receive a notification when a lead in this CRM is deleted

Example use: update the status, post a note, or delete a record in an external system when a lead is deleted in this CRM.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->subscriptionsSampleLeadDeletedGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsSampleLeadDeletedGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\LeadDeletedEventInfo**](../Model/LeadDeletedEventInfo.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionsSampleLeadDocumentUploadedGet**
> \Swagger\Client\Model\LeadDocumentUploadedEventInfo subscriptionsSampleLeadDocumentUploadedGet()

Receive a notification when a lead document is uploaded

Example use: update the record in an external system after the lead's uploaded document in this CRM.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->subscriptionsSampleLeadDocumentUploadedGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsSampleLeadDocumentUploadedGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\LeadDocumentUploadedEventInfo**](../Model/LeadDocumentUploadedEventInfo.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionsSampleLeadEmailReceivedGet**
> \Swagger\Client\Model\LeadEmailReceivedEventInfo subscriptionsSampleLeadEmailReceivedGet()

Receive a notification when an email message is received on a lead in this CRM, with the option to only receive a notification when a lead is in the status(es) specified here

Example use: update the status of a lead when an email is received if it's in a certain status.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->subscriptionsSampleLeadEmailReceivedGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsSampleLeadEmailReceivedGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\LeadEmailReceivedEventInfo**](../Model/LeadEmailReceivedEventInfo.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionsSampleLeadNoteAddedGet**
> \Swagger\Client\Model\LeadNoteAddedEventInfo subscriptionsSampleLeadNoteAddedGet()

Receive a notification when a lead in this CRM has a note posted, with the option to only receive a notification when a lead is in the status(es) specified here

Example use: add a note to a record in an external system when a note is posted on a lead in this CRM.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->subscriptionsSampleLeadNoteAddedGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsSampleLeadNoteAddedGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\LeadNoteAddedEventInfo**](../Model/LeadNoteAddedEventInfo.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionsSampleLeadRestoredGet**
> \Swagger\Client\Model\LeadRestoredEventInfo subscriptionsSampleLeadRestoredGet()

Receive a notification when a deleted lead is restored in this CRM

Example use: update the status, post a note, or restore a record in an external system when a deleted lead is restored in this CRM.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->subscriptionsSampleLeadRestoredGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsSampleLeadRestoredGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\LeadRestoredEventInfo**](../Model/LeadRestoredEventInfo.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionsSampleLeadSignatureGeneratedGet**
> \Swagger\Client\Model\SignatureGenerated subscriptionsSampleLeadSignatureGeneratedGet()

Receive a notification when a lead's e-signature document is generated

Example use: update an external system when a user generates an electronic signature document.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->subscriptionsSampleLeadSignatureGeneratedGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsSampleLeadSignatureGeneratedGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\SignatureGenerated**](../Model/SignatureGenerated.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionsSampleLeadSignatureOpenedGet**
> \Swagger\Client\Model\SignatureOpened subscriptionsSampleLeadSignatureOpenedGet()

Receive a notification when a lead's e-signature document is opened by the recipient

Example use: update an external system when a recepient clicks a link to open an electronic signature document.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->subscriptionsSampleLeadSignatureOpenedGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsSampleLeadSignatureOpenedGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\SignatureOpened**](../Model/SignatureOpened.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionsSampleLeadSignatureSignedGet**
> \Swagger\Client\Model\SignatureSigned subscriptionsSampleLeadSignatureSignedGet()

Receive a notification when a lead's e-signature document is signed by the recipient

Example use: update an external system when one or all recepients signed an electronic signature document.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->subscriptionsSampleLeadSignatureSignedGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsSampleLeadSignatureSignedGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\SignatureSigned**](../Model/SignatureSigned.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionsSampleLeadStatusUpdatedGet**
> \Swagger\Client\Model\LeadStatusUpdatedEventInfo subscriptionsSampleLeadStatusUpdatedGet()

Receive a notification when a lead's status is updated in this CRM, with the option to only receive a notification when a lead is moved to or from the status(es) specified here

Example use: update the status of a record in an external system after the lead's status is updated in this CRM.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->subscriptionsSampleLeadStatusUpdatedGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsSampleLeadStatusUpdatedGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\LeadStatusUpdatedEventInfo**](../Model/LeadStatusUpdatedEventInfo.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionsSampleLeadUpdatedGet**
> \Swagger\Client\Model\LeadUpdatedEventInfo subscriptionsSampleLeadUpdatedGet()

Receive a notification when a lead's campaign, status, group, or field values are updated in this CRM, with the option to only receive a notification when a lead is in the status(es) specified here

Example use: update field information for a record in an external system when the corresponding information is updated in this CRM.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->subscriptionsSampleLeadUpdatedGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsSampleLeadUpdatedGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\LeadUpdatedEventInfo**](../Model/LeadUpdatedEventInfo.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionsSampleResidualsLineitemAddedGet**
> \Swagger\Client\Model\LineItemAdded subscriptionsSampleResidualsLineitemAddedGet()

Receive a notification when a residuals line item is added

Example use: Trigger a workflow as soon as a line item is added

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->subscriptionsSampleResidualsLineitemAddedGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsSampleResidualsLineitemAddedGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\LineItemAdded**](../Model/LineItemAdded.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionsSampleResidualsReportPublishedGet**
> \Swagger\Client\Model\ReportPublished subscriptionsSampleResidualsReportPublishedGet()

Receive a notification when a residuals report is published

Example use: update the status of a record in your system when a residuals report is published

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->subscriptionsSampleResidualsReportPublishedGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsSampleResidualsReportPublishedGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ReportPublished**](../Model/ReportPublished.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionsSampleSubscriptionTestGet**
> \Swagger\Client\Model\TestSubscription subscriptionsSampleSubscriptionTestGet()

Test payload for checking server response

Example use: stay aware of changes and additions to the API.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->subscriptionsSampleSubscriptionTestGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsSampleSubscriptionTestGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\TestSubscription**](../Model/TestSubscription.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionsSampleTicketChecklistUpdatedGet**
> \Swagger\Client\Model\ChecklistUpdated subscriptionsSampleTicketChecklistUpdatedGet()

Receive a notification when a ticket's checklist is updated

Example use: receive an alert when a checklist item is updated on a ticket.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->subscriptionsSampleTicketChecklistUpdatedGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsSampleTicketChecklistUpdatedGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ChecklistUpdated**](../Model/ChecklistUpdated.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionsSampleTicketCommentEditedGet**
> \Swagger\Client\Model\SubscriptionCommentEdited subscriptionsSampleTicketCommentEditedGet()

Receive a notification when a ticket comment is edited

Example use: receive an alert when a user edited a comment in a ticket.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->subscriptionsSampleTicketCommentEditedGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsSampleTicketCommentEditedGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\SubscriptionCommentEdited**](../Model/SubscriptionCommentEdited.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionsSampleTicketCommentedGet**
> \Swagger\Client\Model\TicketCommented subscriptionsSampleTicketCommentedGet()

Receive a notification when a ticket comment is added

Example use: receive an alert when a user adds a comment to a ticket.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->subscriptionsSampleTicketCommentedGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsSampleTicketCommentedGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\TicketCommented**](../Model/TicketCommented.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionsSampleTicketCreatedGet**
> \Swagger\Client\Model\TicketCreated subscriptionsSampleTicketCreatedGet()

Receive a notification when a ticket is created

Example use: receive an alert with ticket details every time a new ticket is created.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->subscriptionsSampleTicketCreatedGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsSampleTicketCreatedGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\TicketCreated**](../Model/TicketCreated.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionsSampleTicketResolvedGet**
> \Swagger\Client\Model\TicketResolved subscriptionsSampleTicketResolvedGet()

Receive a notification when a ticket is resolved

Example use: receive an alert with ticket details every time a ticket is resolved.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->subscriptionsSampleTicketResolvedGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsSampleTicketResolvedGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\TicketResolved**](../Model/TicketResolved.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionsSampleTicketUpdatedGet**
> \Swagger\Client\Model\TicketUpdated subscriptionsSampleTicketUpdatedGet()

Receive a notification when a ticket is updated

Example use: receive an alert with ticket details every time a ticket is updated.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->subscriptionsSampleTicketUpdatedGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsSampleTicketUpdatedGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\TicketUpdated**](../Model/TicketUpdated.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionsSampleTurboappApprovedGet**
> \Swagger\Client\Model\TurboAppApproved subscriptionsSampleTurboappApprovedGet()

Receive a notification when a merchant is approved

Example use: update the status of a record in your system when TurboApp receives an approval status from the processor.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->subscriptionsSampleTurboappApprovedGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsSampleTurboappApprovedGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\TurboAppApproved**](../Model/TurboAppApproved.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionsSampleTurboappDeclinedGet**
> \Swagger\Client\Model\TurboAppDeclined subscriptionsSampleTurboappDeclinedGet()

Receive a notification when a merchant is declined

Example use: update the status of a record in your system when TurboApp receives a declined status by the processor.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->subscriptionsSampleTurboappDeclinedGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsSampleTurboappDeclinedGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\TurboAppDeclined**](../Model/TurboAppDeclined.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionsSampleTurboappSubmittedGet**
> \Swagger\Client\Model\TurboAppSubmited subscriptionsSampleTurboappSubmittedGet()

Receive a notification when a TurboApp is submitted to a processor

Example use: create a record in an external system when a TurboApp is submitted.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->subscriptionsSampleTurboappSubmittedGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsSampleTurboappSubmittedGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\TurboAppSubmited**](../Model/TurboAppSubmited.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionsSampleTurboappUpdatedGet**
> \Swagger\Client\Model\TurboAppUpdated subscriptionsSampleTurboappUpdatedGet()

Receive a notification when the underwriting status is updated

Example use: update the status of a merchant record in your system when TurboApp receives an underwriting update from the processor.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->subscriptionsSampleTurboappUpdatedGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsSampleTurboappUpdatedGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\TurboAppUpdated**](../Model/TurboAppUpdated.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionsSubscriptionIdDelete**
> \Swagger\Client\Model\InlineResponse20054 subscriptionsSubscriptionIdDelete($subscription_id)

Delete a subscription

Delete a subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = 56; // int | Subscription Id

try {
    $result = $apiInstance->subscriptionsSubscriptionIdDelete($subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsSubscriptionIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **int**| Subscription Id |

### Return type

[**\Swagger\Client\Model\InlineResponse20054**](../Model/InlineResponse20054.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionsSubscriptionIdGet**
> \Swagger\Client\Model\BriefSubscriptionInfo subscriptionsSubscriptionIdGet($subscription_id)

Return a subscription by its id

Return a subscription details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = 56; // int | Subscription Id

try {
    $result = $apiInstance->subscriptionsSubscriptionIdGet($subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsSubscriptionIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **int**| Subscription Id |

### Return type

[**\Swagger\Client\Model\BriefSubscriptionInfo**](../Model/BriefSubscriptionInfo.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionsSubscriptionIdPatch**
> \Swagger\Client\Model\BriefSubscriptionInfo subscriptionsSubscriptionIdPatch($body, $subscription_id)

Update a subscription

Update a subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\BriefSubscriptionInfo(); // \Swagger\Client\Model\BriefSubscriptionInfo | Subscription details
$subscription_id = 56; // int | Subscription Id

try {
    $result = $apiInstance->subscriptionsSubscriptionIdPatch($body, $subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsSubscriptionIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\BriefSubscriptionInfo**](../Model/BriefSubscriptionInfo.md)| Subscription details |
 **subscription_id** | **int**| Subscription Id |

### Return type

[**\Swagger\Client\Model\BriefSubscriptionInfo**](../Model/BriefSubscriptionInfo.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


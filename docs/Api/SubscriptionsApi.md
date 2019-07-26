# Swagger\Client\SubscriptionsApi

All URIs are relative to *https://iriscrm.com/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**subscriptionsGet**](SubscriptionsApi.md#subscriptionsget) | **GET** /subscriptions | Return a list of subscriptions
[**subscriptionsPost**](SubscriptionsApi.md#subscriptionspost) | **POST** /subscriptions | Create a subscription
[**subscriptionsSampleApiUpdatedGet**](SubscriptionsApi.md#subscriptionssampleapiupdatedget) | **GET** /subscriptions/sample/api.updated | Data sample for the \&quot;api.updated\&quot; event
[**subscriptionsSampleApplicationCreatedGet**](SubscriptionsApi.md#subscriptionssampleapplicationcreatedget) | **GET** /subscriptions/sample/application.created | Data sample for the \&quot;application.created\&quot; event
[**subscriptionsSampleApplicationUpdatedGet**](SubscriptionsApi.md#subscriptionssampleapplicationupdatedget) | **GET** /subscriptions/sample/application.updated | Data sample for the \&quot;application.updated\&quot; event
[**subscriptionsSampleLeadCreatedGet**](SubscriptionsApi.md#subscriptionssampleleadcreatedget) | **GET** /subscriptions/sample/lead.created | Data sample for the \&quot;lead.created\&quot; event
[**subscriptionsSampleLeadDeletedGet**](SubscriptionsApi.md#subscriptionssampleleaddeletedget) | **GET** /subscriptions/sample/lead.deleted | Data sample for the \&quot;lead.deleted\&quot; event
[**subscriptionsSampleLeadDocumentUploadedGet**](SubscriptionsApi.md#subscriptionssampleleaddocumentuploadedget) | **GET** /subscriptions/sample/lead.document.uploaded | Data sample for the \&quot;lead.document.uploaded\&quot; event
[**subscriptionsSampleLeadEmailReceivedGet**](SubscriptionsApi.md#subscriptionssampleleademailreceivedget) | **GET** /subscriptions/sample/lead.email.received | Data sample for the \&quot;lead.email.received\&quot; event
[**subscriptionsSampleLeadNoteAddedGet**](SubscriptionsApi.md#subscriptionssampleleadnoteaddedget) | **GET** /subscriptions/sample/lead.note.added | Data sample for the \&quot;lead.note.added\&quot; event
[**subscriptionsSampleLeadRestoredGet**](SubscriptionsApi.md#subscriptionssampleleadrestoredget) | **GET** /subscriptions/sample/lead.restored | Data sample for the \&quot;lead.restored\&quot; event
[**subscriptionsSampleLeadStatusUpdatedGet**](SubscriptionsApi.md#subscriptionssampleleadstatusupdatedget) | **GET** /subscriptions/sample/lead.status.updated | Data sample for the \&quot;lead.status.updated\&quot; event
[**subscriptionsSampleLeadUpdatedGet**](SubscriptionsApi.md#subscriptionssampleleadupdatedget) | **GET** /subscriptions/sample/lead.updated | Data sample for the \&quot;lead.updated\&quot; event
[**subscriptionsSubscriptionIdDelete**](SubscriptionsApi.md#subscriptionssubscriptioniddelete) | **DELETE** /subscriptions/{subscriptionId} | Delete a subscription
[**subscriptionsSubscriptionIdGet**](SubscriptionsApi.md#subscriptionssubscriptionidget) | **GET** /subscriptions/{subscriptionId} | Return a subscription by its id
[**subscriptionsSubscriptionIdPatch**](SubscriptionsApi.md#subscriptionssubscriptionidpatch) | **PATCH** /subscriptions/{subscriptionId} | Update a subscription

# **subscriptionsGet**
> \Swagger\Client\Model\InlineResponse20044 subscriptionsGet($page)

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

try {
    $result = $apiInstance->subscriptionsGet($page);
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

### Return type

[**\Swagger\Client\Model\InlineResponse20044**](../Model/InlineResponse20044.md)

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

Data sample for the \"api.updated\" event

Receive a notification when a API is updated.

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

# **subscriptionsSampleApplicationCreatedGet**
> \Swagger\Client\Model\ApplicationCreated subscriptionsSampleApplicationCreatedGet()

Data sample for the \"application.created\" event

Receive a notification when application is submited.

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
    $result = $apiInstance->subscriptionsSampleApplicationCreatedGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsSampleApplicationCreatedGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ApplicationCreated**](../Model/ApplicationCreated.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionsSampleApplicationUpdatedGet**
> \Swagger\Client\Model\ApplicationUpdated subscriptionsSampleApplicationUpdatedGet()

Data sample for the \"application.updated\" event

Receive a notification when application account is updated.

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
    $result = $apiInstance->subscriptionsSampleApplicationUpdatedGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->subscriptionsSampleApplicationUpdatedGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ApplicationUpdated**](../Model/ApplicationUpdated.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionsSampleLeadCreatedGet**
> \Swagger\Client\Model\LeadCreatedEventInfo subscriptionsSampleLeadCreatedGet()

Data sample for the \"lead.created\" event

Receive a notification when a new lead is created.

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

Data sample for the \"lead.deleted\" event

Receive a notification when a lead is deleted.

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

Data sample for the \"lead.document.uploaded\" event

Receive a notification when a lead document is uploaded.

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

Data sample for the \"lead.email.received\" event

Receive a notification when a lead email is received.

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

Data sample for the \"lead.note.added\" event

Receive a notification when a lead note is added.

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

Data sample for the \"lead.restored\" event

Receive a notification when a lead is restored.

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

# **subscriptionsSampleLeadStatusUpdatedGet**
> \Swagger\Client\Model\LeadStatusUpdatedEventInfo subscriptionsSampleLeadStatusUpdatedGet()

Data sample for the \"lead.status.updated\" event

Receive a notification when a lead status changes.

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

Data sample for the \"lead.updated\" event

Receive a notification when a lead is updated.

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

# **subscriptionsSubscriptionIdDelete**
> \Swagger\Client\Model\InlineResponse20045 subscriptionsSubscriptionIdDelete($subscription_id)

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

[**\Swagger\Client\Model\InlineResponse20045**](../Model/InlineResponse20045.md)

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


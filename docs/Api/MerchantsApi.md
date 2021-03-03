# Swagger\Client\MerchantsApi

All URIs are relative to */api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**merchantsGet**](MerchantsApi.md#merchantsget) | **GET** /merchants | Get a list of merchants
[**merchantsMerchantNumberChargebacksGet**](MerchantsApi.md#merchantsmerchantnumberchargebacksget) | **GET** /merchants/{merchantNumber}/chargebacks | Get a list of chargebacks
[**merchantsMerchantNumberDepositsYearMonthGet**](MerchantsApi.md#merchantsmerchantnumberdepositsyearmonthget) | **GET** /merchants/{merchantNumber}/deposits/{year}/{month} | Get a list of deposits records and totals
[**merchantsMerchantNumberGet**](MerchantsApi.md#merchantsmerchantnumberget) | **GET** /merchants/{merchantNumber} | Get detailed merchant information
[**merchantsMerchantNumberPatch**](MerchantsApi.md#merchantsmerchantnumberpatch) | **PATCH** /merchants/{merchantNumber} | Update an existing merchant
[**merchantsMerchantNumberRetrievalsGet**](MerchantsApi.md#merchantsmerchantnumberretrievalsget) | **GET** /merchants/{merchantNumber}/retrievals | Get a list of retrievals
[**merchantsMerchantNumberStatementsGet**](MerchantsApi.md#merchantsmerchantnumberstatementsget) | **GET** /merchants/{merchantNumber}/statements | Get a list of statements
[**merchantsMerchantNumberStatementsStatementIdGet**](MerchantsApi.md#merchantsmerchantnumberstatementsstatementidget) | **GET** /merchants/{merchantNumber}/statements/{statementId} | Download a statement
[**merchantsMerchantNumberTransactionsGet**](MerchantsApi.md#merchantsmerchantnumbertransactionsget) | **GET** /merchants/{merchantNumber}/transactions | Get a list of batches and transactions

# **merchantsGet**
> \Swagger\Client\Model\InlineResponse200 merchantsGet($page, $per_page, $sort_by, $sort_dir, $group, $processor, $datasource, $mid, $name, $vim, $active, $status, $date_filter, $start_date, $end_date)

Get a list of merchants

Return a list of merchants

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\MerchantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | Page number
$per_page = 56; // int | Count of records per page
$sort_by = "sort_by_example"; // string | Sorting of merchants by the field value
$sort_dir = "asc"; // string | Direction of sorting
$group = "group_example"; // string | Filter merchants by a group name
$processor = "processor_example"; // string | Filter merchants by a processor name
$datasource = "datasource_example"; // string | Filter merchants by a data source name
$mid = "mid_example"; // string | Filter merchants by a partial merchant number
$name = "name_example"; // string | Filter merchants by a partial merchant name
$vim = "vim_example"; // string | Filter merchants by a merchant vim field
$active = "active_example"; // string | Filter merchants by a merchant active field
$status = "status_example"; // string | Filter merchants by a merchant status field
$date_filter = "date_filter_example"; // string | Filter merchants by a merchant specific date field
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date for date_filter filter in format ISO 8601 for created and modified properties (**Please note that `+` sign should be encoded to `%2B`**), for others properties you should use simple date format (Y-m-d).
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End date for date_filter filter in format ISO 8601 for created and modified properties (**Please note that `+` sign should be encoded to `%2B`**), for others properties you should use simple date format (Y-m-d)

try {
    $result = $apiInstance->merchantsGet($page, $per_page, $sort_by, $sort_dir, $group, $processor, $datasource, $mid, $name, $vim, $active, $status, $date_filter, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantsApi->merchantsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page number | [optional]
 **per_page** | **int**| Count of records per page | [optional]
 **sort_by** | **string**| Sorting of merchants by the field value | [optional]
 **sort_dir** | **string**| Direction of sorting | [optional] [default to asc]
 **group** | **string**| Filter merchants by a group name | [optional]
 **processor** | **string**| Filter merchants by a processor name | [optional]
 **datasource** | **string**| Filter merchants by a data source name | [optional]
 **mid** | **string**| Filter merchants by a partial merchant number | [optional]
 **name** | **string**| Filter merchants by a partial merchant name | [optional]
 **vim** | **string**| Filter merchants by a merchant vim field | [optional]
 **active** | **string**| Filter merchants by a merchant active field | [optional]
 **status** | **string**| Filter merchants by a merchant status field | [optional]
 **date_filter** | **string**| Filter merchants by a merchant specific date field | [optional]
 **start_date** | **\DateTime**| Start date for date_filter filter in format ISO 8601 for created and modified properties (**Please note that &#x60;+&#x60; sign should be encoded to &#x60;%2B&#x60;**), for others properties you should use simple date format (Y-m-d). | [optional]
 **end_date** | **\DateTime**| End date for date_filter filter in format ISO 8601 for created and modified properties (**Please note that &#x60;+&#x60; sign should be encoded to &#x60;%2B&#x60;**), for others properties you should use simple date format (Y-m-d) | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **merchantsMerchantNumberChargebacksGet**
> \Swagger\Client\Model\InlineResponse2005 merchantsMerchantNumberChargebacksGet($merchant_number, $page, $per_page, $start_date, $end_date)

Get a list of chargebacks

Find all chargebacks by merchant number

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\MerchantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_number = 56; // int | Merchant number
$page = 56; // int | Page number
$per_page = 56; // int | Count of records per page
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter batches by a date (Y-m-d)
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter batches by a date (Y-m-d)

try {
    $result = $apiInstance->merchantsMerchantNumberChargebacksGet($merchant_number, $page, $per_page, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantsApi->merchantsMerchantNumberChargebacksGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_number** | **int**| Merchant number |
 **page** | **int**| Page number | [optional]
 **per_page** | **int**| Count of records per page | [optional]
 **start_date** | **\DateTime**| Filter batches by a date (Y-m-d) | [optional]
 **end_date** | **\DateTime**| Filter batches by a date (Y-m-d) | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **merchantsMerchantNumberDepositsYearMonthGet**
> \Swagger\Client\Model\InlineResponse2003 merchantsMerchantNumberDepositsYearMonthGet($merchant_number, $year, $month)

Get a list of deposits records and totals

Find all  deposits records and totals by year and date

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\MerchantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_number = 56; // int | Merchant number
$year = 56; // int | Deposits year
$month = 56; // int | Deposits month

try {
    $result = $apiInstance->merchantsMerchantNumberDepositsYearMonthGet($merchant_number, $year, $month);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantsApi->merchantsMerchantNumberDepositsYearMonthGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_number** | **int**| Merchant number |
 **year** | **int**| Deposits year |
 **month** | **int**| Deposits month |

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **merchantsMerchantNumberGet**
> \Swagger\Client\Model\InlineResponse2001 merchantsMerchantNumberGet($merchant_number)

Get detailed merchant information

Finds a merchant by its number and returns merchant and account demographics from the processor

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\MerchantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_number = 56; // int | Merchant number

try {
    $result = $apiInstance->merchantsMerchantNumberGet($merchant_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantsApi->merchantsMerchantNumberGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_number** | **int**| Merchant number |

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **merchantsMerchantNumberPatch**
> \Swagger\Client\Model\InlineResponse2002 merchantsMerchantNumberPatch($body, $merchant_number)

Update an existing merchant

Update an existing merchant

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\MerchantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body(); // \Swagger\Client\Model\Body | Merchant changes (send only fields you want to change)
$merchant_number = 56; // int | Merchant number

try {
    $result = $apiInstance->merchantsMerchantNumberPatch($body, $merchant_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantsApi->merchantsMerchantNumberPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body**](../Model/Body.md)| Merchant changes (send only fields you want to change) |
 **merchant_number** | **int**| Merchant number |

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **merchantsMerchantNumberRetrievalsGet**
> \Swagger\Client\Model\InlineResponse2006 merchantsMerchantNumberRetrievalsGet($merchant_number, $page, $per_page, $start_date, $end_date)

Get a list of retrievals

Find all retrievals by merchant number

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\MerchantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_number = 56; // int | Merchant number
$page = 56; // int | Page number
$per_page = 56; // int | Count of records per page
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter batches by a date (Y-m-d)
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter batches by a date (Y-m-d)

try {
    $result = $apiInstance->merchantsMerchantNumberRetrievalsGet($merchant_number, $page, $per_page, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantsApi->merchantsMerchantNumberRetrievalsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_number** | **int**| Merchant number |
 **page** | **int**| Page number | [optional]
 **per_page** | **int**| Count of records per page | [optional]
 **start_date** | **\DateTime**| Filter batches by a date (Y-m-d) | [optional]
 **end_date** | **\DateTime**| Filter batches by a date (Y-m-d) | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **merchantsMerchantNumberStatementsGet**
> \Swagger\Client\Model\InlineResponse2007 merchantsMerchantNumberStatementsGet($merchant_number, $page, $per_page)

Get a list of statements

Return all statements by merchant number

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\MerchantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_number = 56; // int | Merchant number
$page = 56; // int | Page number
$per_page = 56; // int | Count of records per page

try {
    $result = $apiInstance->merchantsMerchantNumberStatementsGet($merchant_number, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantsApi->merchantsMerchantNumberStatementsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_number** | **int**| Merchant number |
 **page** | **int**| Page number | [optional]
 **per_page** | **int**| Count of records per page | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **merchantsMerchantNumberStatementsStatementIdGet**
> string merchantsMerchantNumberStatementsStatementIdGet($merchant_number, $statement_id)

Download a statement

Download a statement

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\MerchantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_number = 56; // int | Merchant number
$statement_id = 56; // int | Statement Id

try {
    $result = $apiInstance->merchantsMerchantNumberStatementsStatementIdGet($merchant_number, $statement_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantsApi->merchantsMerchantNumberStatementsStatementIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_number** | **int**| Merchant number |
 **statement_id** | **int**| Statement Id |

### Return type

**string**

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **merchantsMerchantNumberTransactionsGet**
> \Swagger\Client\Model\InlineResponse2004 merchantsMerchantNumberTransactionsGet($merchant_number, $page, $per_page, $start_date, $end_date)

Get a list of batches and transactions

Find all batches by merchant number

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\MerchantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchant_number = 56; // int | Merchant number
$page = 56; // int | Page number
$per_page = 56; // int | Count of records per page
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter batches by a date (Y-m-d)
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter batches by a date (Y-m-d)

try {
    $result = $apiInstance->merchantsMerchantNumberTransactionsGet($merchant_number, $page, $per_page, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MerchantsApi->merchantsMerchantNumberTransactionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_number** | **int**| Merchant number |
 **page** | **int**| Page number | [optional]
 **per_page** | **int**| Count of records per page | [optional]
 **start_date** | **\DateTime**| Filter batches by a date (Y-m-d) | [optional]
 **end_date** | **\DateTime**| Filter batches by a date (Y-m-d) | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# Swagger\Client\ResidualsApi

All URIs are relative to */api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**residualsLineitemsYearMonthGet**](ResidualsApi.md#residualslineitemsyearmonthget) | **GET** /residuals/lineitems/{year}/{month} | Get residuals line items
[**residualsReportsDetailsProcessorIdYearMonthGet**](ResidualsApi.md#residualsreportsdetailsprocessoridyearmonthget) | **GET** /residuals/reports/details/{processor_id}/{year}/{month} | Get residuals details with merchant rows
[**residualsReportsSummaryRowsProcessorIdYearMonthGet**](ResidualsApi.md#residualsreportssummaryrowsprocessoridyearmonthget) | **GET** /residuals/reports/summary/rows/{processor_id}/{year}/{month} | Get residuals summary with merchant rows
[**residualsReportsSummaryYearMonthGet**](ResidualsApi.md#residualsreportssummaryyearmonthget) | **GET** /residuals/reports/summary/{year}/{month} | Get residuals summary data
[**residualsTemplatesAssignedYearMonthGet**](ResidualsApi.md#residualstemplatesassignedyearmonthget) | **GET** /residuals/templates/assigned/{year}/{month} | Get a list of users with assigned residuals templates
[**residualsTemplatesGet**](ResidualsApi.md#residualstemplatesget) | **GET** /residuals/templates/ | Get residuals templates

# **residualsLineitemsYearMonthGet**
> \Swagger\Client\Model\InlineResponse20011 residualsLineitemsYearMonthGet($year, $month, $created, $dba, $username, $user_id, $description, $page, $per_page)

Get residuals line items

Get residuals line items by month and year

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\ResidualsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$year = 56; // int | Line Item year
$month = 56; // int | Line Item month
$created = new \DateTime("2013-10-20"); // \DateTime | Filter line items by a date (Y-m-d)
$dba = "dba_example"; // string | 
$username = "username_example"; // string | 
$user_id = 56; // int | 
$description = "description_example"; // string | 
$page = 56; // int | Page number
$per_page = 56; // int | Count of records per page

try {
    $result = $apiInstance->residualsLineitemsYearMonthGet($year, $month, $created, $dba, $username, $user_id, $description, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResidualsApi->residualsLineitemsYearMonthGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **year** | **int**| Line Item year |
 **month** | **int**| Line Item month |
 **created** | **\DateTime**| Filter line items by a date (Y-m-d) | [optional]
 **dba** | **string**|  | [optional]
 **username** | **string**|  | [optional]
 **user_id** | **int**|  | [optional]
 **description** | **string**|  | [optional]
 **page** | **int**| Page number | [optional]
 **per_page** | **int**| Count of records per page | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **residualsReportsDetailsProcessorIdYearMonthGet**
> \Swagger\Client\Model\InlineResponse20010 residualsReportsDetailsProcessorIdYearMonthGet($processor_id, $year, $month, $group, $agent, $search, $hide_null_merchants, $page, $per_page)

Get residuals details with merchant rows

Get residuals reports calculation details for the processor by year and month

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\ResidualsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$processor_id = 56; // int | Processor ID
$year = 56; // int | Residuals year
$month = 56; // int | Residuals month
$group = 56; // int | Get residuals summary only for specific group
$agent = 56; // int | Get residuals summary only for specific user agent
$search = "search_example"; // string | Search query
$hide_null_merchants = true; // bool | Flag for hiding inactive merchants (true by default)
$page = 56; // int | Page number
$per_page = 56; // int | Count of records per page

try {
    $result = $apiInstance->residualsReportsDetailsProcessorIdYearMonthGet($processor_id, $year, $month, $group, $agent, $search, $hide_null_merchants, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResidualsApi->residualsReportsDetailsProcessorIdYearMonthGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **processor_id** | **int**| Processor ID |
 **year** | **int**| Residuals year |
 **month** | **int**| Residuals month |
 **group** | **int**| Get residuals summary only for specific group | [optional]
 **agent** | **int**| Get residuals summary only for specific user agent | [optional]
 **search** | **string**| Search query | [optional]
 **hide_null_merchants** | **bool**| Flag for hiding inactive merchants (true by default) | [optional]
 **page** | **int**| Page number | [optional]
 **per_page** | **int**| Count of records per page | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **residualsReportsSummaryRowsProcessorIdYearMonthGet**
> \Swagger\Client\Model\InlineResponse2009 residualsReportsSummaryRowsProcessorIdYearMonthGet($processor_id, $year, $month, $group, $agent, $search, $hide_null_merchants, $template, $page, $per_page)

Get residuals summary with merchant rows

Get residuals reports summary data with merchant rows for the processor by year and month

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\ResidualsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$processor_id = 56; // int | Processor ID
$year = 56; // int | Residuals year
$month = 56; // int | Residuals month
$group = 56; // int | Get residuals summary only for specific group
$agent = 56; // int | Get residuals summary only for specific user agent
$search = "search_example"; // string | Search query
$hide_null_merchants = true; // bool | Flag for hiding inactive merchants (true by default)
$template = true; // bool | Flag for applying user templates (true by default)
$page = 56; // int | Page number
$per_page = 56; // int | Count of records per page

try {
    $result = $apiInstance->residualsReportsSummaryRowsProcessorIdYearMonthGet($processor_id, $year, $month, $group, $agent, $search, $hide_null_merchants, $template, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResidualsApi->residualsReportsSummaryRowsProcessorIdYearMonthGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **processor_id** | **int**| Processor ID |
 **year** | **int**| Residuals year |
 **month** | **int**| Residuals month |
 **group** | **int**| Get residuals summary only for specific group | [optional]
 **agent** | **int**| Get residuals summary only for specific user agent | [optional]
 **search** | **string**| Search query | [optional]
 **hide_null_merchants** | **bool**| Flag for hiding inactive merchants (true by default) | [optional]
 **template** | **bool**| Flag for applying user templates (true by default) | [optional]
 **page** | **int**| Page number | [optional]
 **per_page** | **int**| Count of records per page | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **residualsReportsSummaryYearMonthGet**
> \Swagger\Client\Model\InlineResponse2008 residualsReportsSummaryYearMonthGet($year, $month, $processor, $group, $agent, $search, $hide_null_merchants, $page, $per_page)

Get residuals summary data

Get residuals summary data by year and month

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\ResidualsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$year = 56; // int | Residuals year
$month = 56; // int | Residuals month
$processor = 56; // int | Get residuals summary only for specific processor
$group = 56; // int | Get residuals summary only for specific group
$agent = 56; // int | Get residuals summary only for specific user agent
$search = "search_example"; // string | Search query
$hide_null_merchants = true; // bool | Flag for hiding inactive merchants (true by default)
$page = 56; // int | Page number
$per_page = 56; // int | Count of records per page

try {
    $result = $apiInstance->residualsReportsSummaryYearMonthGet($year, $month, $processor, $group, $agent, $search, $hide_null_merchants, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResidualsApi->residualsReportsSummaryYearMonthGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **year** | **int**| Residuals year |
 **month** | **int**| Residuals month |
 **processor** | **int**| Get residuals summary only for specific processor | [optional]
 **group** | **int**| Get residuals summary only for specific group | [optional]
 **agent** | **int**| Get residuals summary only for specific user agent | [optional]
 **search** | **string**| Search query | [optional]
 **hide_null_merchants** | **bool**| Flag for hiding inactive merchants (true by default) | [optional]
 **page** | **int**| Page number | [optional]
 **per_page** | **int**| Count of records per page | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **residualsTemplatesAssignedYearMonthGet**
> \Swagger\Client\Model\InlineResponse20013 residualsTemplatesAssignedYearMonthGet($year, $month, $user, $processor, $group, $class, $page, $per_page)

Get a list of users with assigned residuals templates

Get a list of users with assigned residuals templates by month and year

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\ResidualsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$year = 56; // int | Residuals year
$month = 56; // int | Residuals month
$user = 56; // int | Filter templates by user
$processor = 56; // int | Filter templates by processor
$group = 56; // int | Filter templates by group
$class = 56; // int | Filter templates by user class
$page = 56; // int | Page number
$per_page = 56; // int | Count of records per page

try {
    $result = $apiInstance->residualsTemplatesAssignedYearMonthGet($year, $month, $user, $processor, $group, $class, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResidualsApi->residualsTemplatesAssignedYearMonthGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **year** | **int**| Residuals year |
 **month** | **int**| Residuals month |
 **user** | **int**| Filter templates by user | [optional]
 **processor** | **int**| Filter templates by processor | [optional]
 **group** | **int**| Filter templates by group | [optional]
 **class** | **int**| Filter templates by user class | [optional]
 **page** | **int**| Page number | [optional]
 **per_page** | **int**| Count of records per page | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **residualsTemplatesGet**
> \Swagger\Client\Model\InlineResponse20012 residualsTemplatesGet($name, $revision, $creator, $page, $per_page)

Get residuals templates

Get a list of residuals templates with their respective rules

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\ResidualsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | Filter templates by name
$revision = "revision_example"; // string | Filter templates by revision
$creator = 56; // int | Filter templates by creator
$page = 56; // int | Page number
$per_page = 56; // int | Count of records per page

try {
    $result = $apiInstance->residualsTemplatesGet($name, $revision, $creator, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResidualsApi->residualsTemplatesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Filter templates by name | [optional]
 **revision** | **string**| Filter templates by revision | [optional]
 **creator** | **int**| Filter templates by creator | [optional]
 **page** | **int**| Page number | [optional]
 **per_page** | **int**| Count of records per page | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


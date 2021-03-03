# Swagger\Client\ESignatureApi

All URIs are relative to */api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**leadsApplicationsAppIdMappingsGet**](ESignatureApi.md#leadsapplicationsappidmappingsget) | **GET** /leads/applications/{appId}/mappings | Get a list of available application field mappings
[**leadsApplicationsAppIdMappingsMapIdDelete**](ESignatureApi.md#leadsapplicationsappidmappingsmapiddelete) | **DELETE** /leads/applications/{appId}/mappings/{mapId} | Delete an application field mapping
[**leadsApplicationsAppIdMappingsMapIdGet**](ESignatureApi.md#leadsapplicationsappidmappingsmapidget) | **GET** /leads/applications/{appId}/mappings/{mapId} | Get an application field mapping list
[**leadsApplicationsAppIdMappingsMapIdPatch**](ESignatureApi.md#leadsapplicationsappidmappingsmapidpatch) | **PATCH** /leads/applications/{appId}/mappings/{mapId} | Update an application field mapping
[**leadsApplicationsAppIdMappingsPost**](ESignatureApi.md#leadsapplicationsappidmappingspost) | **POST** /leads/applications/{appId}/mappings | Create a new application field mapping
[**leadsApplicationsGet**](ESignatureApi.md#leadsapplicationsget) | **GET** /leads/applications | Get a list of available applications
[**leadsLeadIdSignaturesApplicationIdGeneratePost**](ESignatureApi.md#leadsleadidsignaturesapplicationidgeneratepost) | **POST** /leads/{leadId}/signatures/{applicationId}/generate | Generate an e-signature document
[**leadsLeadIdSignaturesApplicationIdSendPost**](ESignatureApi.md#leadsleadidsignaturesapplicationidsendpost) | **POST** /leads/{leadId}/signatures/{applicationId}/send | Send an e-signature document
[**leadsLeadIdSignaturesGet**](ESignatureApi.md#leadsleadidsignaturesget) | **GET** /leads/{leadId}/signatures | Get a list of all lead e-signatures documents
[**leadsSignaturesApplicationIdDownloadGet**](ESignatureApi.md#leadssignaturesapplicationiddownloadget) | **GET** /leads/signatures/{applicationId}/download | Download an e-signature document

# **leadsApplicationsAppIdMappingsGet**
> \Swagger\Client\Model\InlineResponse20047 leadsApplicationsAppIdMappingsGet($app_id, $page, $per_page)

Get a list of available application field mappings

Get a list of available application field mappings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\ESignatureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 56; // int | Application Id
$page = 56; // int | Page number
$per_page = 56; // int | Count of records per page

try {
    $result = $apiInstance->leadsApplicationsAppIdMappingsGet($app_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ESignatureApi->leadsApplicationsAppIdMappingsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **int**| Application Id |
 **page** | **int**| Page number | [optional]
 **per_page** | **int**| Count of records per page | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20047**](../Model/InlineResponse20047.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsApplicationsAppIdMappingsMapIdDelete**
> \Swagger\Client\Model\InlineResponse20048 leadsApplicationsAppIdMappingsMapIdDelete($app_id, $map_id)

Delete an application field mapping

Deletion of application field mapping

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\ESignatureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 56; // int | Application Id
$map_id = 56; // int | Mapping Id

try {
    $result = $apiInstance->leadsApplicationsAppIdMappingsMapIdDelete($app_id, $map_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ESignatureApi->leadsApplicationsAppIdMappingsMapIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **int**| Application Id |
 **map_id** | **int**| Mapping Id |

### Return type

[**\Swagger\Client\Model\InlineResponse20048**](../Model/InlineResponse20048.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsApplicationsAppIdMappingsMapIdGet**
> \Swagger\Client\Model\ApplicationField leadsApplicationsAppIdMappingsMapIdGet($app_id, $map_id)

Get an application field mapping list

Get an application field mapping list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\ESignatureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 56; // int | Application Id
$map_id = 56; // int | Mapping Id

try {
    $result = $apiInstance->leadsApplicationsAppIdMappingsMapIdGet($app_id, $map_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ESignatureApi->leadsApplicationsAppIdMappingsMapIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **int**| Application Id |
 **map_id** | **int**| Mapping Id |

### Return type

[**\Swagger\Client\Model\ApplicationField**](../Model/ApplicationField.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsApplicationsAppIdMappingsMapIdPatch**
> \Swagger\Client\Model\ApplicationField leadsApplicationsAppIdMappingsMapIdPatch($app_id, $map_id, $body)

Update an application field mapping

Update an application field mapping

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\ESignatureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 56; // int | Application Id
$map_id = 56; // int | Mapping Id
$body = new \Swagger\Client\Model\ApplicationField(); // \Swagger\Client\Model\ApplicationField | 

try {
    $result = $apiInstance->leadsApplicationsAppIdMappingsMapIdPatch($app_id, $map_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ESignatureApi->leadsApplicationsAppIdMappingsMapIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **int**| Application Id |
 **map_id** | **int**| Mapping Id |
 **body** | [**\Swagger\Client\Model\ApplicationField**](../Model/ApplicationField.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ApplicationField**](../Model/ApplicationField.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsApplicationsAppIdMappingsPost**
> \Swagger\Client\Model\ApplicationField leadsApplicationsAppIdMappingsPost($app_id, $body)

Create a new application field mapping

Creation of new application field mapping

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\ESignatureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 56; // int | Application Id
$body = new \Swagger\Client\Model\ApplicationField(); // \Swagger\Client\Model\ApplicationField | 

try {
    $result = $apiInstance->leadsApplicationsAppIdMappingsPost($app_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ESignatureApi->leadsApplicationsAppIdMappingsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **int**| Application Id |
 **body** | [**\Swagger\Client\Model\ApplicationField**](../Model/ApplicationField.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ApplicationField**](../Model/ApplicationField.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsApplicationsGet**
> \Swagger\Client\Model\BriefApplicationInfo[] leadsApplicationsGet()

Get a list of available applications

Get a list of available applications

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\ESignatureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->leadsApplicationsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ESignatureApi->leadsApplicationsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\BriefApplicationInfo[]**](../Model/BriefApplicationInfo.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsLeadIdSignaturesApplicationIdGeneratePost**
> \Swagger\Client\Model\InlineResponse20034 leadsLeadIdSignaturesApplicationIdGeneratePost($lead_id, $application_id, $body)

Generate an e-signature document

Generate a new electronic signature document and receive a signature-ready application URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\ESignatureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lead_id = 56; // int | Lead Id
$application_id = 56; // int | Application Id
$body = new \Swagger\Client\Model\Body9(); // \Swagger\Client\Model\Body9 | 

try {
    $result = $apiInstance->leadsLeadIdSignaturesApplicationIdGeneratePost($lead_id, $application_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ESignatureApi->leadsLeadIdSignaturesApplicationIdGeneratePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **int**| Lead Id |
 **application_id** | **int**| Application Id |
 **body** | [**\Swagger\Client\Model\Body9**](../Model/Body9.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20034**](../Model/InlineResponse20034.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsLeadIdSignaturesApplicationIdSendPost**
> \Swagger\Client\Model\InlineResponse20035 leadsLeadIdSignaturesApplicationIdSendPost($lead_id, $application_id, $body)

Send an e-signature document

Send an e-signature document using an email template for signature.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\ESignatureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lead_id = 56; // int | Lead Id
$application_id = 56; // int | Application Id
$body = new \Swagger\Client\Model\Body10(); // \Swagger\Client\Model\Body10 | 

try {
    $result = $apiInstance->leadsLeadIdSignaturesApplicationIdSendPost($lead_id, $application_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ESignatureApi->leadsLeadIdSignaturesApplicationIdSendPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **int**| Lead Id |
 **application_id** | **int**| Application Id |
 **body** | [**\Swagger\Client\Model\Body10**](../Model/Body10.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20035**](../Model/InlineResponse20035.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsLeadIdSignaturesGet**
> \Swagger\Client\Model\InlineResponse20036 leadsLeadIdSignaturesGet($lead_id, $page, $per_page)

Get a list of all lead e-signatures documents

Get a list of all lead e-signatures documents

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\ESignatureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lead_id = 56; // int | Lead Id
$page = 56; // int | Page number
$per_page = 56; // int | Count of records per page

try {
    $result = $apiInstance->leadsLeadIdSignaturesGet($lead_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ESignatureApi->leadsLeadIdSignaturesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **int**| Lead Id |
 **page** | **int**| Page number | [optional]
 **per_page** | **int**| Count of records per page | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20036**](../Model/InlineResponse20036.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsSignaturesApplicationIdDownloadGet**
> string leadsSignaturesApplicationIdDownloadGet($application_id)

Download an e-signature document

Download an e-signature document.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\ESignatureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_id = 56; // int | Application Id

try {
    $result = $apiInstance->leadsSignaturesApplicationIdDownloadGet($application_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ESignatureApi->leadsSignaturesApplicationIdDownloadGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_id** | **int**| Application Id |

### Return type

**string**

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


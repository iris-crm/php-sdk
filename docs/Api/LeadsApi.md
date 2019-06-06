# Swagger\Client\LeadsApi

All URIs are relative to *https://iriscrm.com/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**leadsApplicationsAppIdMappingsGet**](LeadsApi.md#leadsApplicationsAppIdMappingsGet) | **GET** /leads/applications/{appId}/mappings | Get a list of available application field mappings
[**leadsApplicationsAppIdMappingsMapIdDelete**](LeadsApi.md#leadsApplicationsAppIdMappingsMapIdDelete) | **DELETE** /leads/applications/{appId}/mappings/{mapId} | Delete an application field mapping
[**leadsApplicationsAppIdMappingsMapIdGet**](LeadsApi.md#leadsApplicationsAppIdMappingsMapIdGet) | **GET** /leads/applications/{appId}/mappings/{mapId} | Get a application field mapping
[**leadsApplicationsAppIdMappingsMapIdPatch**](LeadsApi.md#leadsApplicationsAppIdMappingsMapIdPatch) | **PATCH** /leads/applications/{appId}/mappings/{mapId} | Update an application field mapping
[**leadsApplicationsAppIdMappingsPost**](LeadsApi.md#leadsApplicationsAppIdMappingsPost) | **POST** /leads/applications/{appId}/mappings | Create a new application field mapping
[**leadsApplicationsGet**](LeadsApi.md#leadsApplicationsGet) | **GET** /leads/applications | Get a list of available applications
[**leadsCampaignsGet**](LeadsApi.md#leadsCampaignsGet) | **GET** /leads/campaigns | Get a list of available campaigns
[**leadsDynamicFieldsSchemaGet**](LeadsApi.md#leadsDynamicFieldsSchemaGet) | **GET** /leads/dynamic-fields-schema | Get a schema of lead fields
[**leadsEmailsTemplatesGet**](LeadsApi.md#leadsEmailsTemplatesGet) | **GET** /leads/emails/templates | Get list of email templates
[**leadsFieldsFieldIdGet**](LeadsApi.md#leadsFieldsFieldIdGet) | **GET** /leads/fields/{fieldId} | Get a lead field
[**leadsFieldsFieldIdOrderPatch**](LeadsApi.md#leadsFieldsFieldIdOrderPatch) | **PATCH** /leads/fields/{fieldId}/order | Update a lead field order position
[**leadsFieldsFieldIdPatch**](LeadsApi.md#leadsFieldsFieldIdPatch) | **PATCH** /leads/fields/{fieldId} | Update a lead field
[**leadsFieldsGet**](LeadsApi.md#leadsFieldsGet) | **GET** /leads/fields | Get a list of available lead fields
[**leadsFieldsPost**](LeadsApi.md#leadsFieldsPost) | **POST** /leads/fields | Create a new lead field
[**leadsFieldsTabsGet**](LeadsApi.md#leadsFieldsTabsGet) | **GET** /leads/fields/tabs | Get a list of all lead field tabs
[**leadsFieldsTabsPost**](LeadsApi.md#leadsFieldsTabsPost) | **POST** /leads/fields/tabs | Create a lead field tab
[**leadsFieldsTabsTabIdGet**](LeadsApi.md#leadsFieldsTabsTabIdGet) | **GET** /leads/fields/tabs/{tabId} | Get a lead field tab
[**leadsFieldsTabsTabIdPatch**](LeadsApi.md#leadsFieldsTabsTabIdPatch) | **PATCH** /leads/fields/tabs/{tabId} | Update a lead field tab
[**leadsGet**](LeadsApi.md#leadsGet) | **GET** /leads | Get a list of leads
[**leadsGroupsGet**](LeadsApi.md#leadsGroupsGet) | **GET** /leads/groups | Get a list of available groups
[**leadsLeadIdActivityCampaignGet**](LeadsApi.md#leadsLeadIdActivityCampaignGet) | **GET** /leads/{leadId}/activity/campaign | Get a list of all lead campaign activity
[**leadsLeadIdActivityDeletionGet**](LeadsApi.md#leadsLeadIdActivityDeletionGet) | **GET** /leads/{leadId}/activity/deletion | Get a list of all lead deletion activity
[**leadsLeadIdActivityDuplicatesGet**](LeadsApi.md#leadsLeadIdActivityDuplicatesGet) | **GET** /leads/{leadId}/activity/duplicates | Get a list of all lead duplicate activity
[**leadsLeadIdActivityLinksGet**](LeadsApi.md#leadsLeadIdActivityLinksGet) | **GET** /leads/{leadId}/activity/links | Get a list of all lead links activity
[**leadsLeadIdActivitySourceGet**](LeadsApi.md#leadsLeadIdActivitySourceGet) | **GET** /leads/{leadId}/activity/source | Get a list of all lead source activity
[**leadsLeadIdActivityStatusGet**](LeadsApi.md#leadsLeadIdActivityStatusGet) | **GET** /leads/{leadId}/activity/status | Get a list of all lead status activity
[**leadsLeadIdApplicationsApplicationIdPopulatePost**](LeadsApi.md#leadsLeadIdApplicationsApplicationIdPopulatePost) | **POST** /leads/{leadId}/applications/{applicationId}/populate | Populate PDF Document
[**leadsLeadIdAppointmentsGet**](LeadsApi.md#leadsLeadIdAppointmentsGet) | **GET** /leads/{leadId}/appointments | Get lead appointments
[**leadsLeadIdAppointmentsPost**](LeadsApi.md#leadsLeadIdAppointmentsPost) | **POST** /leads/{leadId}/appointments | Create a lead appointment
[**leadsLeadIdDocumentsDocumentIdGet**](LeadsApi.md#leadsLeadIdDocumentsDocumentIdGet) | **GET** /leads/{leadId}/documents/{documentId} | Download a document
[**leadsLeadIdDocumentsGet**](LeadsApi.md#leadsLeadIdDocumentsGet) | **GET** /leads/{leadId}/documents | Get a list of available documents
[**leadsLeadIdDocumentsPost**](LeadsApi.md#leadsLeadIdDocumentsPost) | **POST** /leads/{leadId}/documents | Upload a document
[**leadsLeadIdEmailsTemplateIdPost**](LeadsApi.md#leadsLeadIdEmailsTemplateIdPost) | **POST** /leads/{leadId}/emails/{templateId} | Send an email to lead with template
[**leadsLeadIdGet**](LeadsApi.md#leadsLeadIdGet) | **GET** /leads/{leadId} | Get detailed lead information
[**leadsLeadIdMailboxEmailIdAttachmentAttachmentIdGet**](LeadsApi.md#leadsLeadIdMailboxEmailIdAttachmentAttachmentIdGet) | **GET** /leads/{leadId}/mailbox/{emailId}/attachment/{attachmentId} | Download a mailbox email attachment
[**leadsLeadIdNotesGet**](LeadsApi.md#leadsLeadIdNotesGet) | **GET** /leads/{leadId}/notes | Get lead notes
[**leadsLeadIdNotesPost**](LeadsApi.md#leadsLeadIdNotesPost) | **POST** /leads/{leadId}/notes | Create a lead note
[**leadsLeadIdPatch**](LeadsApi.md#leadsLeadIdPatch) | **PATCH** /leads/{leadId} | Update a lead
[**leadsLeadIdSignaturesApplicationIdGeneratePost**](LeadsApi.md#leadsLeadIdSignaturesApplicationIdGeneratePost) | **POST** /leads/{leadId}/signatures/{applicationId}/generate | Generate an e-signature document
[**leadsLeadIdSignaturesApplicationIdSendPost**](LeadsApi.md#leadsLeadIdSignaturesApplicationIdSendPost) | **POST** /leads/{leadId}/signatures/{applicationId}/send | Send an e-signature document
[**leadsLeadIdSignaturesGet**](LeadsApi.md#leadsLeadIdSignaturesGet) | **GET** /leads/{leadId}/signatures | Get a list of all lead e-signatures documents
[**leadsLeadIdSmsTemplateIdPost**](LeadsApi.md#leadsLeadIdSmsTemplateIdPost) | **POST** /leads/{leadId}/sms/{templateId} | Send an sms to lead with selected sms template
[**leadsLeadIdTasksGet**](LeadsApi.md#leadsLeadIdTasksGet) | **GET** /leads/{leadId}/tasks | Get lead tasks
[**leadsLeadIdTasksPost**](LeadsApi.md#leadsLeadIdTasksPost) | **POST** /leads/{leadId}/tasks | Create a lead task
[**leadsLeadIdUsersGet**](LeadsApi.md#leadsLeadIdUsersGet) | **GET** /leads/{leadId}/users | Get a list of assigned users
[**leadsLeadIdUsersPost**](LeadsApi.md#leadsLeadIdUsersPost) | **POST** /leads/{leadId}/users | Assign a user
[**leadsLeadIdUsersUserIdDelete**](LeadsApi.md#leadsLeadIdUsersUserIdDelete) | **DELETE** /leads/{leadId}/users/{userId} | Unassign a user from a lead
[**leadsPost**](LeadsApi.md#leadsPost) | **POST** /leads | Create a lead
[**leadsSignaturesApplicationIdDownloadGet**](LeadsApi.md#leadsSignaturesApplicationIdDownloadGet) | **GET** /leads/signatures/{applicationId}/download | Download an e-signature document
[**leadsSourcesGet**](LeadsApi.md#leadsSourcesGet) | **GET** /leads/sources | Get a list of available sources
[**leadsStatusesGet**](LeadsApi.md#leadsStatusesGet) | **GET** /leads/statuses | Get a list of available statuses
[**leadsUsersGet**](LeadsApi.md#leadsUsersGet) | **GET** /leads/users | Get a list of available users

# **leadsApplicationsAppIdMappingsGet**
> \Swagger\Client\Model\InlineResponse20037 leadsApplicationsAppIdMappingsGet($app_id)

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

$apiInstance = new Swagger\Client\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = 56; // int | Application Id

try {
    $result = $apiInstance->leadsApplicationsAppIdMappingsGet($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsApplicationsAppIdMappingsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **int**| Application Id |

### Return type

[**\Swagger\Client\Model\InlineResponse20037**](../Model/InlineResponse20037.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsApplicationsAppIdMappingsMapIdDelete**
> \Swagger\Client\Model\InlineResponse20038 leadsApplicationsAppIdMappingsMapIdDelete($app_id, $map_id)

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

$apiInstance = new Swagger\Client\Api\LeadsApi(
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
    echo 'Exception when calling LeadsApi->leadsApplicationsAppIdMappingsMapIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **int**| Application Id |
 **map_id** | **int**| Mapping Id |

### Return type

[**\Swagger\Client\Model\InlineResponse20038**](../Model/InlineResponse20038.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsApplicationsAppIdMappingsMapIdGet**
> \Swagger\Client\Model\ApplicationField leadsApplicationsAppIdMappingsMapIdGet($app_id, $map_id)

Get a application field mapping

Get a application field mapping

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\LeadsApi(
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
    echo 'Exception when calling LeadsApi->leadsApplicationsAppIdMappingsMapIdGet: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Swagger\Client\Api\LeadsApi(
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
    echo 'Exception when calling LeadsApi->leadsApplicationsAppIdMappingsMapIdPatch: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Swagger\Client\Api\LeadsApi(
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
    echo 'Exception when calling LeadsApi->leadsApplicationsAppIdMappingsPost: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Swagger\Client\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->leadsApplicationsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsApplicationsGet: ', $e->getMessage(), PHP_EOL;
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

# **leadsCampaignsGet**
> \Swagger\Client\Model\InlineResponse20039 leadsCampaignsGet()

Get a list of available campaigns

Get a list of available campaigns

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->leadsCampaignsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsCampaignsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\InlineResponse20039**](../Model/InlineResponse20039.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsDynamicFieldsSchemaGet**
> \Swagger\Client\Model\DynamicFieldsSchema leadsDynamicFieldsSchemaGet()

Get a schema of lead fields

Get a schema that describes lead fields and tabs they belong to

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->leadsDynamicFieldsSchemaGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsDynamicFieldsSchemaGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\DynamicFieldsSchema**](../Model/DynamicFieldsSchema.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsEmailsTemplatesGet**
> \Swagger\Client\Model\InlineResponse20026 leadsEmailsTemplatesGet()

Get list of email templates

Get list of available email templates for a lead email

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->leadsEmailsTemplatesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsEmailsTemplatesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\InlineResponse20026**](../Model/InlineResponse20026.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsFieldsFieldIdGet**
> \Swagger\Client\Model\LeadField leadsFieldsFieldIdGet($field_id)

Get a lead field

Get a lead field

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$field_id = 56; // int | Field Id

try {
    $result = $apiInstance->leadsFieldsFieldIdGet($field_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsFieldsFieldIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **field_id** | **int**| Field Id |

### Return type

[**\Swagger\Client\Model\LeadField**](../Model/LeadField.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsFieldsFieldIdOrderPatch**
> \Swagger\Client\Model\InlineResponse20035 leadsFieldsFieldIdOrderPatch($field_id, $body)

Update a lead field order position

Update a lead field order position for the current Lead. You can send value equal to 0 and type 'increment' or 'decrement' to set the field as first or last in the field list.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$field_id = 56; // int | Field Id
$body = new \Swagger\Client\Model\LeadFieldOrder(); // \Swagger\Client\Model\LeadFieldOrder | 

try {
    $result = $apiInstance->leadsFieldsFieldIdOrderPatch($field_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsFieldsFieldIdOrderPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **field_id** | **int**| Field Id |
 **body** | [**\Swagger\Client\Model\LeadFieldOrder**](../Model/LeadFieldOrder.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20035**](../Model/InlineResponse20035.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsFieldsFieldIdPatch**
> \Swagger\Client\Model\LeadField leadsFieldsFieldIdPatch($field_id, $body)

Update a lead field

Updation an lead field for current Lead

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$field_id = 56; // int | Field Id
$body = new \Swagger\Client\Model\null(); //  | 

try {
    $result = $apiInstance->leadsFieldsFieldIdPatch($field_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsFieldsFieldIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **field_id** | **int**| Field Id |
 **body** | [****](../Model/.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\LeadField**](../Model/LeadField.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsFieldsGet**
> \Swagger\Client\Model\InlineResponse20034 leadsFieldsGet()

Get a list of available lead fields

Get a list of available lead fields

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->leadsFieldsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsFieldsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\InlineResponse20034**](../Model/InlineResponse20034.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsFieldsPost**
> \Swagger\Client\Model\LeadField leadsFieldsPost($body)

Create a new lead field

Create a new lead field

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\null(); //  | 

try {
    $result = $apiInstance->leadsFieldsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsFieldsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [****](../Model/.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\LeadField**](../Model/LeadField.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsFieldsTabsGet**
> \Swagger\Client\Model\InlineResponse20036 leadsFieldsTabsGet()

Get a list of all lead field tabs

Get a list of all lead field tabs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->leadsFieldsTabsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsFieldsTabsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\InlineResponse20036**](../Model/InlineResponse20036.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsFieldsTabsPost**
> \Swagger\Client\Model\LeadFieldTab leadsFieldsTabsPost($body)

Create a lead field tab

Create a lead field tab

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\LeadFieldTab(); // \Swagger\Client\Model\LeadFieldTab | 

try {
    $result = $apiInstance->leadsFieldsTabsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsFieldsTabsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LeadFieldTab**](../Model/LeadFieldTab.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\LeadFieldTab**](../Model/LeadFieldTab.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsFieldsTabsTabIdGet**
> \Swagger\Client\Model\LeadFieldTab leadsFieldsTabsTabIdGet($tab_id)

Get a lead field tab

Get a lead field tab

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tab_id = 56; // int | Lead field tab Id

try {
    $result = $apiInstance->leadsFieldsTabsTabIdGet($tab_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsFieldsTabsTabIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tab_id** | **int**| Lead field tab Id |

### Return type

[**\Swagger\Client\Model\LeadFieldTab**](../Model/LeadFieldTab.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsFieldsTabsTabIdPatch**
> \Swagger\Client\Model\LeadFieldTab leadsFieldsTabsTabIdPatch($tab_id, $body)

Update a lead field tab

Update a lead field tab

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tab_id = 56; // int | Lead field tab Id
$body = new \Swagger\Client\Model\LeadFieldTab(); // \Swagger\Client\Model\LeadFieldTab | 

try {
    $result = $apiInstance->leadsFieldsTabsTabIdPatch($tab_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsFieldsTabsTabIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tab_id** | **int**| Lead field tab Id |
 **body** | [**\Swagger\Client\Model\LeadFieldTab**](../Model/LeadFieldTab.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\LeadFieldTab**](../Model/LeadFieldTab.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsGet**
> \Swagger\Client\Model\InlineResponse2007 leadsGet($page, $sort_by, $sort_dir, $group, $mid, $campaign, $source, $status, $category, $user, $date_filter, $start_date, $end_date, $email)

Get a list of leads

Get a list of leads

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | Page number
$sort_by = "sort_by_example"; // string | Sorting of leads by the field value
$sort_dir = "sort_dir_example"; // string | Direction of sorting
$group = 56; // int | Filter leads by a group id
$mid = 56; // int | Filter leads by a merchant id
$campaign = 56; // int | Filter leads by a campaign id
$source = 56; // int | Filter leads by a source id
$status = 56; // int | Filter leads by a status id
$category = 56; // int | Filter leads by a status category id
$user = 56; // int | Filter leads by a user id
$date_filter = "date_filter_example"; // string | Filtering leads by a date range depends on this filter
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter leads by a date in ISO 8601 format (Y-m-d\\TH:i:sP)
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter leads by a date in ISO 8601 format (Y-m-d\\TH:i:sP)
$email = "email_example"; // string | Filter leads by a email

try {
    $result = $apiInstance->leadsGet($page, $sort_by, $sort_dir, $group, $mid, $campaign, $source, $status, $category, $user, $date_filter, $start_date, $end_date, $email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page number | [optional]
 **sort_by** | **string**| Sorting of leads by the field value | [optional]
 **sort_dir** | **string**| Direction of sorting | [optional]
 **group** | **int**| Filter leads by a group id | [optional]
 **mid** | **int**| Filter leads by a merchant id | [optional]
 **campaign** | **int**| Filter leads by a campaign id | [optional]
 **source** | **int**| Filter leads by a source id | [optional]
 **status** | **int**| Filter leads by a status id | [optional]
 **category** | **int**| Filter leads by a status category id | [optional]
 **user** | **int**| Filter leads by a user id | [optional]
 **date_filter** | **string**| Filtering leads by a date range depends on this filter | [optional]
 **start_date** | **\DateTime**| Filter leads by a date in ISO 8601 format (Y-m-d\\TH:i:sP) | [optional]
 **end_date** | **\DateTime**| Filter leads by a date in ISO 8601 format (Y-m-d\\TH:i:sP) | [optional]
 **email** | **string**| Filter leads by a email | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsGroupsGet**
> \Swagger\Client\Model\InlineResponse20040 leadsGroupsGet()

Get a list of available groups

Get a list of available groups

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->leadsGroupsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsGroupsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\InlineResponse20040**](../Model/InlineResponse20040.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsLeadIdActivityCampaignGet**
> \Swagger\Client\Model\InlineResponse20028 leadsLeadIdActivityCampaignGet($lead_id)

Get a list of all lead campaign activity

Get a list of all lead campaign activity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lead_id = 56; // int | Lead Id

try {
    $result = $apiInstance->leadsLeadIdActivityCampaignGet($lead_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsLeadIdActivityCampaignGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **int**| Lead Id |

### Return type

[**\Swagger\Client\Model\InlineResponse20028**](../Model/InlineResponse20028.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsLeadIdActivityDeletionGet**
> \Swagger\Client\Model\InlineResponse20029 leadsLeadIdActivityDeletionGet($lead_id)

Get a list of all lead deletion activity

Get a list of all lead deletion activity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lead_id = 56; // int | Lead Id

try {
    $result = $apiInstance->leadsLeadIdActivityDeletionGet($lead_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsLeadIdActivityDeletionGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **int**| Lead Id |

### Return type

[**\Swagger\Client\Model\InlineResponse20029**](../Model/InlineResponse20029.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsLeadIdActivityDuplicatesGet**
> \Swagger\Client\Model\InlineResponse20030 leadsLeadIdActivityDuplicatesGet($lead_id)

Get a list of all lead duplicate activity

Get a list of all lead duplicate activity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lead_id = 56; // int | Lead Id

try {
    $result = $apiInstance->leadsLeadIdActivityDuplicatesGet($lead_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsLeadIdActivityDuplicatesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **int**| Lead Id |

### Return type

[**\Swagger\Client\Model\InlineResponse20030**](../Model/InlineResponse20030.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsLeadIdActivityLinksGet**
> \Swagger\Client\Model\InlineResponse20031 leadsLeadIdActivityLinksGet($lead_id)

Get a list of all lead links activity

Get a list of all lead links activity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lead_id = 56; // int | Lead Id

try {
    $result = $apiInstance->leadsLeadIdActivityLinksGet($lead_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsLeadIdActivityLinksGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **int**| Lead Id |

### Return type

[**\Swagger\Client\Model\InlineResponse20031**](../Model/InlineResponse20031.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsLeadIdActivitySourceGet**
> \Swagger\Client\Model\InlineResponse20032 leadsLeadIdActivitySourceGet($lead_id)

Get a list of all lead source activity

Get a list of all lead source activity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lead_id = 56; // int | Lead Id

try {
    $result = $apiInstance->leadsLeadIdActivitySourceGet($lead_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsLeadIdActivitySourceGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **int**| Lead Id |

### Return type

[**\Swagger\Client\Model\InlineResponse20032**](../Model/InlineResponse20032.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsLeadIdActivityStatusGet**
> \Swagger\Client\Model\InlineResponse20033 leadsLeadIdActivityStatusGet($lead_id)

Get a list of all lead status activity

Get a list of all lead status activity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lead_id = 56; // int | Lead Id

try {
    $result = $apiInstance->leadsLeadIdActivityStatusGet($lead_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsLeadIdActivityStatusGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **int**| Lead Id |

### Return type

[**\Swagger\Client\Model\InlineResponse20033**](../Model/InlineResponse20033.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsLeadIdApplicationsApplicationIdPopulatePost**
> \Swagger\Client\Model\InlineResponse20015 leadsLeadIdApplicationsApplicationIdPopulatePost($lead_id, $application_id)

Populate PDF Document

Populate a PDF document from a lead.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lead_id = 56; // int | Lead Id
$application_id = 56; // int | Application Id

try {
    $result = $apiInstance->leadsLeadIdApplicationsApplicationIdPopulatePost($lead_id, $application_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsLeadIdApplicationsApplicationIdPopulatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **int**| Lead Id |
 **application_id** | **int**| Application Id |

### Return type

[**\Swagger\Client\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsLeadIdAppointmentsGet**
> \Swagger\Client\Model\InlineResponse20013 leadsLeadIdAppointmentsGet($lead_id)

Get lead appointments

Get lead appointments

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lead_id = 56; // int | Lead Id

try {
    $result = $apiInstance->leadsLeadIdAppointmentsGet($lead_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsLeadIdAppointmentsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **int**| Lead Id |

### Return type

[**\Swagger\Client\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsLeadIdAppointmentsPost**
> \Swagger\Client\Model\InlineResponse20014 leadsLeadIdAppointmentsPost($body, $lead_id)

Create a lead appointment

Create a lead appointment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body4(); // \Swagger\Client\Model\Body4 | Create a lead appointment
$lead_id = 56; // int | Lead Id

try {
    $result = $apiInstance->leadsLeadIdAppointmentsPost($body, $lead_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsLeadIdAppointmentsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body4**](../Model/Body4.md)| Create a lead appointment |
 **lead_id** | **int**| Lead Id |

### Return type

[**\Swagger\Client\Model\InlineResponse20014**](../Model/InlineResponse20014.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsLeadIdDocumentsDocumentIdGet**
> string leadsLeadIdDocumentsDocumentIdGet($lead_id, $document_id)

Download a document

Download a document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lead_id = 56; // int | Lead Id
$document_id = 56; // int | Document Id

try {
    $result = $apiInstance->leadsLeadIdDocumentsDocumentIdGet($lead_id, $document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsLeadIdDocumentsDocumentIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **int**| Lead Id |
 **document_id** | **int**| Document Id |

### Return type

**string**

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsLeadIdDocumentsGet**
> \Swagger\Client\Model\InlineResponse20021 leadsLeadIdDocumentsGet($lead_id)

Get a list of available documents

Get a list of available documents

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lead_id = 56; // int | Lead Id

try {
    $result = $apiInstance->leadsLeadIdDocumentsGet($lead_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsLeadIdDocumentsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **int**| Lead Id |

### Return type

[**\Swagger\Client\Model\InlineResponse20021**](../Model/InlineResponse20021.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsLeadIdDocumentsPost**
> string leadsLeadIdDocumentsPost($tab, $label, $filename, $lead_id, $body)

Upload a document

Upload a document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tab = 56; // int | Tab Id
$label = 56; // int | Label Id
$filename = "filename_example"; // string | File name
$lead_id = 56; // int | Lead Id
$body = new \Swagger\Client\Model\Object(); // Object | 

try {
    $result = $apiInstance->leadsLeadIdDocumentsPost($tab, $label, $filename, $lead_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsLeadIdDocumentsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tab** | **int**| Tab Id |
 **label** | **int**| Label Id |
 **filename** | **string**| File name |
 **lead_id** | **int**| Lead Id |
 **body** | [**Object**](../Model/Object.md)|  | [optional]

### Return type

**string**

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/octet-stream
 - **Accept**: text/plain, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsLeadIdEmailsTemplateIdPost**
> \Swagger\Client\Model\InlineResponse20025 leadsLeadIdEmailsTemplateIdPost($lead_id, $template_id, $body)

Send an email to lead with template

Send an email to lead with template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lead_id = 56; // int | Lead Id
$template_id = 56; // int | Template Id
$body = new \Swagger\Client\Model\Body7(); // \Swagger\Client\Model\Body7 | 

try {
    $result = $apiInstance->leadsLeadIdEmailsTemplateIdPost($lead_id, $template_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsLeadIdEmailsTemplateIdPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **int**| Lead Id |
 **template_id** | **int**| Template Id |
 **body** | [**\Swagger\Client\Model\Body7**](../Model/Body7.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20025**](../Model/InlineResponse20025.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsLeadIdGet**
> \Swagger\Client\Model\InlineResponse2009 leadsLeadIdGet($lead_id)

Get detailed lead information

Get detailed lead information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lead_id = 56; // int | Lead Id

try {
    $result = $apiInstance->leadsLeadIdGet($lead_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsLeadIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **int**| Lead Id |

### Return type

[**\Swagger\Client\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsLeadIdMailboxEmailIdAttachmentAttachmentIdGet**
> string leadsLeadIdMailboxEmailIdAttachmentAttachmentIdGet($lead_id, $email_id, $attachment_id)

Download a mailbox email attachment

Download a mailbox email attachment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lead_id = 56; // int | Lead Id
$email_id = 56; // int | Email Id
$attachment_id = 56; // int | Attachment Id

try {
    $result = $apiInstance->leadsLeadIdMailboxEmailIdAttachmentAttachmentIdGet($lead_id, $email_id, $attachment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsLeadIdMailboxEmailIdAttachmentAttachmentIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **int**| Lead Id |
 **email_id** | **int**| Email Id |
 **attachment_id** | **int**| Attachment Id |

### Return type

**string**

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsLeadIdNotesGet**
> \Swagger\Client\Model\InlineResponse20011 leadsLeadIdNotesGet($lead_id)

Get lead notes

Get lead notes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lead_id = 56; // int | Lead Id

try {
    $result = $apiInstance->leadsLeadIdNotesGet($lead_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsLeadIdNotesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **int**| Lead Id |

### Return type

[**\Swagger\Client\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsLeadIdNotesPost**
> \Swagger\Client\Model\InlineResponse20012 leadsLeadIdNotesPost($body, $lead_id)

Create a lead note

Create a lead note

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body3(); // \Swagger\Client\Model\Body3 | Create a lead note
$lead_id = 56; // int | Lead Id

try {
    $result = $apiInstance->leadsLeadIdNotesPost($body, $lead_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsLeadIdNotesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body3**](../Model/Body3.md)| Create a lead note |
 **lead_id** | **int**| Lead Id |

### Return type

[**\Swagger\Client\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsLeadIdPatch**
> \Swagger\Client\Model\InlineResponse20010 leadsLeadIdPatch($body, $lead_id)

Update a lead

Update a lead

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body2(); // \Swagger\Client\Model\Body2 | Lead changes (send only fields you want to change)
$lead_id = 56; // int | Lead Id

try {
    $result = $apiInstance->leadsLeadIdPatch($body, $lead_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsLeadIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body2**](../Model/Body2.md)| Lead changes (send only fields you want to change) |
 **lead_id** | **int**| Lead Id |

### Return type

[**\Swagger\Client\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsLeadIdSignaturesApplicationIdGeneratePost**
> \Swagger\Client\Model\InlineResponse20022 leadsLeadIdSignaturesApplicationIdGeneratePost($lead_id, $application_id)

Generate an e-signature document

Generate an new e-signature document.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lead_id = 56; // int | Lead Id
$application_id = 56; // int | Application Id

try {
    $result = $apiInstance->leadsLeadIdSignaturesApplicationIdGeneratePost($lead_id, $application_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsLeadIdSignaturesApplicationIdGeneratePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **int**| Lead Id |
 **application_id** | **int**| Application Id |

### Return type

[**\Swagger\Client\Model\InlineResponse20022**](../Model/InlineResponse20022.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsLeadIdSignaturesApplicationIdSendPost**
> \Swagger\Client\Model\InlineResponse20024 leadsLeadIdSignaturesApplicationIdSendPost($lead_id, $application_id, $body)

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

$apiInstance = new Swagger\Client\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lead_id = 56; // int | Lead Id
$application_id = 56; // int | Application Id
$body = new \Swagger\Client\Model\null(); //  | 

try {
    $result = $apiInstance->leadsLeadIdSignaturesApplicationIdSendPost($lead_id, $application_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsLeadIdSignaturesApplicationIdSendPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **int**| Lead Id |
 **application_id** | **int**| Application Id |
 **body** | [****](../Model/.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20024**](../Model/InlineResponse20024.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsLeadIdSignaturesGet**
> \Swagger\Client\Model\InlineResponse20023 leadsLeadIdSignaturesGet($lead_id)

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

$apiInstance = new Swagger\Client\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lead_id = 56; // int | Lead Id

try {
    $result = $apiInstance->leadsLeadIdSignaturesGet($lead_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsLeadIdSignaturesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **int**| Lead Id |

### Return type

[**\Swagger\Client\Model\InlineResponse20023**](../Model/InlineResponse20023.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsLeadIdSmsTemplateIdPost**
> \Swagger\Client\Model\InlineResponse20027 leadsLeadIdSmsTemplateIdPost($lead_id, $template_id, $body)

Send an sms to lead with selected sms template

Send an sms to lead with selected sms template.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lead_id = 56; // int | Lead Id
$template_id = 56; // int | Template Id
$body = new \Swagger\Client\Model\Body8(); // \Swagger\Client\Model\Body8 | 

try {
    $result = $apiInstance->leadsLeadIdSmsTemplateIdPost($lead_id, $template_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsLeadIdSmsTemplateIdPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **int**| Lead Id |
 **template_id** | **int**| Template Id |
 **body** | [**\Swagger\Client\Model\Body8**](../Model/Body8.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20027**](../Model/InlineResponse20027.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsLeadIdTasksGet**
> \Swagger\Client\Model\InlineResponse20016 leadsLeadIdTasksGet($lead_id)

Get lead tasks

Get lead tasks

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lead_id = 56; // int | Lead Id

try {
    $result = $apiInstance->leadsLeadIdTasksGet($lead_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsLeadIdTasksGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **int**| Lead Id |

### Return type

[**\Swagger\Client\Model\InlineResponse20016**](../Model/InlineResponse20016.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsLeadIdTasksPost**
> \Swagger\Client\Model\InlineResponse20017 leadsLeadIdTasksPost($body, $lead_id)

Create a lead task

Create a lead task

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body5(); // \Swagger\Client\Model\Body5 | Create a lead task
$lead_id = 56; // int | Lead Id

try {
    $result = $apiInstance->leadsLeadIdTasksPost($body, $lead_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsLeadIdTasksPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body5**](../Model/Body5.md)| Create a lead task |
 **lead_id** | **int**| Lead Id |

### Return type

[**\Swagger\Client\Model\InlineResponse20017**](../Model/InlineResponse20017.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsLeadIdUsersGet**
> \Swagger\Client\Model\InlineResponse20018 leadsLeadIdUsersGet($lead_id)

Get a list of assigned users

Get a list of assigned users

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lead_id = 56; // int | Lead Id

try {
    $result = $apiInstance->leadsLeadIdUsersGet($lead_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsLeadIdUsersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **int**| Lead Id |

### Return type

[**\Swagger\Client\Model\InlineResponse20018**](../Model/InlineResponse20018.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsLeadIdUsersPost**
> \Swagger\Client\Model\InlineResponse20019 leadsLeadIdUsersPost($body, $lead_id)

Assign a user

Assign a user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body6(); // \Swagger\Client\Model\Body6 | Create a lead task
$lead_id = 56; // int | Lead Id

try {
    $result = $apiInstance->leadsLeadIdUsersPost($body, $lead_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsLeadIdUsersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body6**](../Model/Body6.md)| Create a lead task |
 **lead_id** | **int**| Lead Id |

### Return type

[**\Swagger\Client\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsLeadIdUsersUserIdDelete**
> \Swagger\Client\Model\InlineResponse20020 leadsLeadIdUsersUserIdDelete($lead_id, $user_id)

Unassign a user from a lead

Unassign a user from a lead

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lead_id = 56; // int | Lead Id
$user_id = 56; // int | User Id

try {
    $result = $apiInstance->leadsLeadIdUsersUserIdDelete($lead_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsLeadIdUsersUserIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **int**| Lead Id |
 **user_id** | **int**| User Id |

### Return type

[**\Swagger\Client\Model\InlineResponse20020**](../Model/InlineResponse20020.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsPost**
> \Swagger\Client\Model\InlineResponse2008 leadsPost($body)

Create a lead

Create a lead

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body1(); // \Swagger\Client\Model\Body1 | Lead details

try {
    $result = $apiInstance->leadsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body1**](../Model/Body1.md)| Lead details |

### Return type

[**\Swagger\Client\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
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

$apiInstance = new Swagger\Client\Api\LeadsApi(
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
    echo 'Exception when calling LeadsApi->leadsSignaturesApplicationIdDownloadGet: ', $e->getMessage(), PHP_EOL;
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

# **leadsSourcesGet**
> \Swagger\Client\Model\InlineResponse20041 leadsSourcesGet()

Get a list of available sources

Get a list of available sources

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->leadsSourcesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsSourcesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\InlineResponse20041**](../Model/InlineResponse20041.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsStatusesGet**
> \Swagger\Client\Model\InlineResponse20042 leadsStatusesGet()

Get a list of available statuses

Get a list of available statuses

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->leadsStatusesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsStatusesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\InlineResponse20042**](../Model/InlineResponse20042.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **leadsUsersGet**
> \Swagger\Client\Model\InlineResponse20018 leadsUsersGet()

Get a list of available users

Get a list of available users for assigning

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->leadsUsersGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->leadsUsersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\InlineResponse20018**](../Model/InlineResponse20018.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


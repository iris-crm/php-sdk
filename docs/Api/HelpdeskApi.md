# Swagger\Client\HelpdeskApi

All URIs are relative to */api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**helpdeskFilePost**](HelpdeskApi.md#helpdeskfilepost) | **POST** /helpdesk/file | Upload an attachment to a ticket, comment, checklist, or ticket type
[**helpdeskGet**](HelpdeskApi.md#helpdeskget) | **GET** /helpdesk | Get a list of helpdesk tickets
[**helpdeskPost**](HelpdeskApi.md#helpdeskpost) | **POST** /helpdesk | Create a new ticket
[**helpdeskTicketIdAssignmentsGet**](HelpdeskApi.md#helpdeskticketidassignmentsget) | **GET** /helpdesk/{ticketId}/assignments | Get ticked assignment logs
[**helpdeskTicketIdCommentPost**](HelpdeskApi.md#helpdeskticketidcommentpost) | **POST** /helpdesk/{ticketId}/comment | Add a ticket comment
[**helpdeskTicketIdDelete**](HelpdeskApi.md#helpdeskticketiddelete) | **DELETE** /helpdesk/{ticketId} | Delete a ticket
[**helpdeskTicketIdDownloadAttachmentIdGet**](HelpdeskApi.md#helpdeskticketiddownloadattachmentidget) | **GET** /helpdesk/{ticketId}/download/{attachmentId} | Download an attachment from a ticket
[**helpdeskTicketIdGet**](HelpdeskApi.md#helpdeskticketidget) | **GET** /helpdesk/{ticketId} | Get detailed ticked information
[**helpdeskTicketIdPatch**](HelpdeskApi.md#helpdeskticketidpatch) | **PATCH** /helpdesk/{ticketId} | Update a ticket
[**helpdeskTypesGet**](HelpdeskApi.md#helpdesktypesget) | **GET** /helpdesk/types | Get a list of helpdesk ticket types
[**helpdeskTypesPost**](HelpdeskApi.md#helpdesktypespost) | **POST** /helpdesk/types | Create a new helpdesk ticket type
[**helpdeskTypesTypeIdDelete**](HelpdeskApi.md#helpdesktypestypeiddelete) | **DELETE** /helpdesk/types/{typeId} | Delete a ticket type
[**helpdeskTypesTypeIdDownloadAttachmentIdGet**](HelpdeskApi.md#helpdesktypestypeiddownloadattachmentidget) | **GET** /helpdesk/types/{typeId}/download/{attachmentId} | Download an attachment from a ticket type
[**helpdeskTypesTypeIdGet**](HelpdeskApi.md#helpdesktypestypeidget) | **GET** /helpdesk/types/{typeId} | Get details for a helpdesk ticket type
[**helpdeskTypesTypeIdPatch**](HelpdeskApi.md#helpdesktypestypeidpatch) | **PATCH** /helpdesk/types/{typeId} | Update a helpdesk ticket type
[**helpdeskUsersGet**](HelpdeskApi.md#helpdeskusersget) | **GET** /helpdesk/users | Get a list of available users to notify and assign

# **helpdeskFilePost**
> \Swagger\Client\Model\InlineResponse20058 helpdeskFilePost($extension, $name, $body)

Upload an attachment to a ticket, comment, checklist, or ticket type

Upload an attachment to a ticket, comment, checklist, or ticket type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\HelpdeskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$extension = "extension_example"; // string | File extension for validation
$name = "name_example"; // string | File name for validation
$body = new \Swagger\Client\Model\Object(); // Object | 

try {
    $result = $apiInstance->helpdeskFilePost($extension, $name, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpdeskApi->helpdeskFilePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **extension** | **string**| File extension for validation |
 **name** | **string**| File name for validation |
 **body** | **Object**|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20058**](../Model/InlineResponse20058.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/octet-stream
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **helpdeskGet**
> \Swagger\Client\Model\InlineResponse20055 helpdeskGet($page, $per_page, $sort_by, $sort_dir, $date_filter, $start_date, $end_date, $group, $type, $creator, $modifier, $search, $search_by, $resolver, $lid, $mid, $hide_resolved, $assigned_to)

Get a list of helpdesk tickets

Return a list of helpdesk tickets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\HelpdeskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | Page number
$per_page = 56; // int | Count of records per page
$sort_by = "sort_by_example"; // string | Sorting of helpdesk tickets by the field value
$sort_dir = "asc"; // string | Direction of sorting
$date_filter = "date_filter_example"; // string | Filter tickets by the specific date field
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date for date_filter filter in format ISO 8601 (**Please note that `+` sign should be encoded to `%2B`**)
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End date for date_filter filter in format ISO 8601 (**Please note that `+` sign should be encoded to `%2B`**)
$group = "group_example"; // string | Filter tickets by the specific ticket groups
$type = "type_example"; // string | Filter tickets by the specific ticket types
$creator = 1.2; // float | Filter tickets by the ticket creator
$modifier = 1.2; // float | Filter tickets by the ticket modifier
$search = "search_example"; // string | Search tickets by some criteria
$search_by = "search_by_example"; // string | Search tickets by some specific field
$resolver = 1.2; // float | Filter tickets by the ticket resolver
$lid = 1.2; // float | Filter tickets by the Lead ID
$mid = "mid_example"; // string | Filter tickets by the Merchant ID
$hide_resolved = true; // bool | Hide resolved ticket
$assigned_to = "assigned_to_example"; // string | Filter tickets by the assigned users. For sending multiple users please send them in comma seperated format

try {
    $result = $apiInstance->helpdeskGet($page, $per_page, $sort_by, $sort_dir, $date_filter, $start_date, $end_date, $group, $type, $creator, $modifier, $search, $search_by, $resolver, $lid, $mid, $hide_resolved, $assigned_to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpdeskApi->helpdeskGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page number | [optional]
 **per_page** | **int**| Count of records per page | [optional]
 **sort_by** | **string**| Sorting of helpdesk tickets by the field value | [optional]
 **sort_dir** | **string**| Direction of sorting | [optional] [default to asc]
 **date_filter** | **string**| Filter tickets by the specific date field | [optional]
 **start_date** | **\DateTime**| Start date for date_filter filter in format ISO 8601 (**Please note that &#x60;+&#x60; sign should be encoded to &#x60;%2B&#x60;**) | [optional]
 **end_date** | **\DateTime**| End date for date_filter filter in format ISO 8601 (**Please note that &#x60;+&#x60; sign should be encoded to &#x60;%2B&#x60;**) | [optional]
 **group** | **string**| Filter tickets by the specific ticket groups | [optional]
 **type** | **string**| Filter tickets by the specific ticket types | [optional]
 **creator** | **float**| Filter tickets by the ticket creator | [optional]
 **modifier** | **float**| Filter tickets by the ticket modifier | [optional]
 **search** | **string**| Search tickets by some criteria | [optional]
 **search_by** | **string**| Search tickets by some specific field | [optional]
 **resolver** | **float**| Filter tickets by the ticket resolver | [optional]
 **lid** | **float**| Filter tickets by the Lead ID | [optional]
 **mid** | **string**| Filter tickets by the Merchant ID | [optional]
 **hide_resolved** | **bool**| Hide resolved ticket | [optional]
 **assigned_to** | **string**| Filter tickets by the assigned users. For sending multiple users please send them in comma seperated format | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20055**](../Model/InlineResponse20055.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **helpdeskPost**
> \Swagger\Client\Model\TicketDetail helpdeskPost($body)

Create a new ticket

Create a new ticket

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\HelpdeskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body13(); // \Swagger\Client\Model\Body13 | Ticket details

try {
    $result = $apiInstance->helpdeskPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpdeskApi->helpdeskPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body13**](../Model/Body13.md)| Ticket details |

### Return type

[**\Swagger\Client\Model\TicketDetail**](../Model/TicketDetail.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **helpdeskTicketIdAssignmentsGet**
> \Swagger\Client\Model\InlineResponse20057[] helpdeskTicketIdAssignmentsGet($ticket_id)

Get ticked assignment logs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\HelpdeskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ticket_id = 56; // int | Ticket Id

try {
    $result = $apiInstance->helpdeskTicketIdAssignmentsGet($ticket_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpdeskApi->helpdeskTicketIdAssignmentsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ticket_id** | **int**| Ticket Id |

### Return type

[**\Swagger\Client\Model\InlineResponse20057[]**](../Model/InlineResponse20057.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **helpdeskTicketIdCommentPost**
> \Swagger\Client\Model\BriefTicketComments helpdeskTicketIdCommentPost($body, $ticket_id)

Add a ticket comment

Post a comment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\HelpdeskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body14(); // \Swagger\Client\Model\Body14 | Comment details
$ticket_id = 56; // int | Ticket Id

try {
    $result = $apiInstance->helpdeskTicketIdCommentPost($body, $ticket_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpdeskApi->helpdeskTicketIdCommentPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body14**](../Model/Body14.md)| Comment details |
 **ticket_id** | **int**| Ticket Id |

### Return type

[**\Swagger\Client\Model\BriefTicketComments**](../Model/BriefTicketComments.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **helpdeskTicketIdDelete**
> \Swagger\Client\Model\InlineResponse20056 helpdeskTicketIdDelete($ticket_id)

Delete a ticket

Delete a ticket

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\HelpdeskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ticket_id = 56; // int | Ticket Id

try {
    $result = $apiInstance->helpdeskTicketIdDelete($ticket_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpdeskApi->helpdeskTicketIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ticket_id** | **int**| Ticket Id |

### Return type

[**\Swagger\Client\Model\InlineResponse20056**](../Model/InlineResponse20056.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **helpdeskTicketIdDownloadAttachmentIdGet**
> string helpdeskTicketIdDownloadAttachmentIdGet($ticket_id, $attachment_id)

Download an attachment from a ticket

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\HelpdeskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ticket_id = 56; // int | Ticket Id
$attachment_id = 56; // int | Attachment Id

try {
    $result = $apiInstance->helpdeskTicketIdDownloadAttachmentIdGet($ticket_id, $attachment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpdeskApi->helpdeskTicketIdDownloadAttachmentIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ticket_id** | **int**| Ticket Id |
 **attachment_id** | **int**| Attachment Id |

### Return type

**string**

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **helpdeskTicketIdGet**
> \Swagger\Client\Model\TicketDetail helpdeskTicketIdGet($ticket_id)

Get detailed ticked information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\HelpdeskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ticket_id = 56; // int | Ticket Id

try {
    $result = $apiInstance->helpdeskTicketIdGet($ticket_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpdeskApi->helpdeskTicketIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ticket_id** | **int**| Ticket Id |

### Return type

[**\Swagger\Client\Model\TicketDetail**](../Model/TicketDetail.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **helpdeskTicketIdPatch**
> \Swagger\Client\Model\TicketDetail helpdeskTicketIdPatch($body, $ticket_id)

Update a ticket

Update a ticket

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\HelpdeskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body15(); // \Swagger\Client\Model\Body15 | Ticket details
$ticket_id = 56; // int | Ticket Id

try {
    $result = $apiInstance->helpdeskTicketIdPatch($body, $ticket_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpdeskApi->helpdeskTicketIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body15**](../Model/Body15.md)| Ticket details |
 **ticket_id** | **int**| Ticket Id |

### Return type

[**\Swagger\Client\Model\TicketDetail**](../Model/TicketDetail.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **helpdeskTypesGet**
> \Swagger\Client\Model\InlineResponse20059 helpdeskTypesGet($page, $per_page, $sort_by, $sort_dir, $date_filter, $start_date, $end_date, $status, $priority, $days_to_resolve, $creator, $modifier)

Get a list of helpdesk ticket types

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\HelpdeskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | Page number
$per_page = 56; // int | Count of records per page
$sort_by = "sort_by_example"; // string | Sorting of helpdesk ticket types by the field value
$sort_dir = "asc"; // string | Direction of sorting
$date_filter = "date_filter_example"; // string | Filter ticket types by the specific date field
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date for date_filter filter in format ISO 8601 (**Please note that `+` sign should be encoded to `%2B`**)
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End date for date_filter filter in format ISO 8601 (**Please note that `+` sign should be encoded to `%2B`**)
$status = "status_example"; // string | 
$priority = 56; // int | 0 - Normal, 1 - Medium, 2 - Rush
$days_to_resolve = 1.2; // float | 
$creator = 1.2; // float | 
$modifier = 1.2; // float | Filter ticket types by the ticket modifier

try {
    $result = $apiInstance->helpdeskTypesGet($page, $per_page, $sort_by, $sort_dir, $date_filter, $start_date, $end_date, $status, $priority, $days_to_resolve, $creator, $modifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpdeskApi->helpdeskTypesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page number | [optional]
 **per_page** | **int**| Count of records per page | [optional]
 **sort_by** | **string**| Sorting of helpdesk ticket types by the field value | [optional]
 **sort_dir** | **string**| Direction of sorting | [optional] [default to asc]
 **date_filter** | **string**| Filter ticket types by the specific date field | [optional]
 **start_date** | **\DateTime**| Start date for date_filter filter in format ISO 8601 (**Please note that &#x60;+&#x60; sign should be encoded to &#x60;%2B&#x60;**) | [optional]
 **end_date** | **\DateTime**| End date for date_filter filter in format ISO 8601 (**Please note that &#x60;+&#x60; sign should be encoded to &#x60;%2B&#x60;**) | [optional]
 **status** | **string**|  | [optional]
 **priority** | **int**| 0 - Normal, 1 - Medium, 2 - Rush | [optional]
 **days_to_resolve** | **float**|  | [optional]
 **creator** | **float**|  | [optional]
 **modifier** | **float**| Filter ticket types by the ticket modifier | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20059**](../Model/InlineResponse20059.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **helpdeskTypesPost**
> \Swagger\Client\Model\TypeDetail helpdeskTypesPost($body)

Create a new helpdesk ticket type

Create a new helpdesk ticket type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\HelpdeskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body16(); // \Swagger\Client\Model\Body16 | Comment details

try {
    $result = $apiInstance->helpdeskTypesPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpdeskApi->helpdeskTypesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body16**](../Model/Body16.md)| Comment details |

### Return type

[**\Swagger\Client\Model\TypeDetail**](../Model/TypeDetail.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **helpdeskTypesTypeIdDelete**
> \Swagger\Client\Model\InlineResponse20060 helpdeskTypesTypeIdDelete($type_id, $body)

Delete a ticket type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\HelpdeskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type_id = 56; // int | Ticket Type Id
$body = new \Swagger\Client\Model\Body17(); // \Swagger\Client\Model\Body17 | Ticket data

try {
    $result = $apiInstance->helpdeskTypesTypeIdDelete($type_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpdeskApi->helpdeskTypesTypeIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type_id** | **int**| Ticket Type Id |
 **body** | [**\Swagger\Client\Model\Body17**](../Model/Body17.md)| Ticket data | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20060**](../Model/InlineResponse20060.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **helpdeskTypesTypeIdDownloadAttachmentIdGet**
> string helpdeskTypesTypeIdDownloadAttachmentIdGet($type_id, $attachment_id)

Download an attachment from a ticket type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\HelpdeskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type_id = 56; // int | Ticket Type Id
$attachment_id = 56; // int | Attachment Id

try {
    $result = $apiInstance->helpdeskTypesTypeIdDownloadAttachmentIdGet($type_id, $attachment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpdeskApi->helpdeskTypesTypeIdDownloadAttachmentIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type_id** | **int**| Ticket Type Id |
 **attachment_id** | **int**| Attachment Id |

### Return type

**string**

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **helpdeskTypesTypeIdGet**
> \Swagger\Client\Model\TypeDetail helpdeskTypesTypeIdGet($type_id)

Get details for a helpdesk ticket type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\HelpdeskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type_id = 56; // int | Ticket Type Id

try {
    $result = $apiInstance->helpdeskTypesTypeIdGet($type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpdeskApi->helpdeskTypesTypeIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type_id** | **int**| Ticket Type Id |

### Return type

[**\Swagger\Client\Model\TypeDetail**](../Model/TypeDetail.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **helpdeskTypesTypeIdPatch**
> \Swagger\Client\Model\TypeDetail helpdeskTypesTypeIdPatch($body, $type_id)

Update a helpdesk ticket type

Update a helpdesk ticket type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\HelpdeskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Body18(); // \Swagger\Client\Model\Body18 | Ticket data
$type_id = 56; // int | Ticket Type Id

try {
    $result = $apiInstance->helpdeskTypesTypeIdPatch($body, $type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpdeskApi->helpdeskTypesTypeIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body18**](../Model/Body18.md)| Ticket data |
 **type_id** | **int**| Ticket Type Id |

### Return type

[**\Swagger\Client\Model\TypeDetail**](../Model/TypeDetail.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **helpdeskUsersGet**
> \Swagger\Client\Model\InlineResponse20029 helpdeskUsersGet($page, $per_page, $role)

Get a list of available users to notify and assign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Api\HelpdeskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | Page number
$per_page = 56; // int | Count of records per page
$role = "role_example"; // string | ID of user class

try {
    $result = $apiInstance->helpdeskUsersGet($page, $per_page, $role);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpdeskApi->helpdeskUsersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Page number | [optional]
 **per_page** | **int**| Count of records per page | [optional]
 **role** | **string**| ID of user class | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20029**](../Model/InlineResponse20029.md)

### Authorization

[Token](../../README.md#Token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


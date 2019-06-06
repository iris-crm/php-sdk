# Introduction

Welcome to IRIS’s API!


The API is organized around `REST`.
All requests should be made over `SSL`.


All request and response bodies, including errors, are encoded in `JSON`.

# Open API

The Open API provides numerous functions to access or to update your CRM lead and merchant data using simple REST calls.

### You can use the Lead API to:

- Get a list of leads with field data, notes, appointments, tasks, users and, documents

- Get a list of available campaigns, groups, sources, and statuses

- Create a new lead, lead note, task, or an appointment

- Assign and un-assign users to a lead

- Upload or download documents

- Update field data, status, campaign, group, and source

- Generate an e-signature application and get a list of available apps


### You can use the Merchant API to:

- Get daily merchant deposits and transactions

- Get daily chargebacks and retrievals

- Get monthly merchant PDF statements

- Get a list of merchants by demographics such as processor or group

- Get merchant demographic profile information using the merchant id

- Make updates to merchant profiles in real-time


# Generate an API token

When you send an API request, you will need to include an API token in your request in order to authenticate your account.


The tokens are generated in the CRM by each user individually, and each user may create one or more tokens.


To generate a new API Token, open your user settings page by clicking on your username in the top-right corner, and clicking on the ** Settings ** link or you can use the <a href="https://iriscrm.com/settings">link</a>.


Then open the ** API Settings ** tab, click ** Create New API Token **, configure your token’s settings as needed, and click ** Add New Token **:


<img src='/images/mapi001.png'/>


Your new token will now be created and displayed in a popup window:


<img src='/images/mapi002.png'/>


Once the token is created, it will be shown in the list of available API Tokens where you can copy the token, update its settings, or delete it once it’s no longer needed:


<img src='/images/mapi003.png'/>


** Note: ** The created tokens will inherit the user’s permissions to assigned merchants, leads, groups and processors.

# Using the API

Authentication to the API is performed via `X-API-KEY` header. Requests not properly authenticated will return a `401` error code.


`curl -X GET "https://iriscrm.com/api/v1/merchants/[MID HERE]" -H "accept: application/json" -H "X-API-KEY: [YOURKEY]"`


Note that all requests should be made over `SSL`. All request and response bodies, including errors, are encoded in JSON.


The API returns standard HTTP success or error status codes. In case of errors, additional information about what went wrong will be encoded in the response as JSON.


By default, you can make `120` requests per minute. Check the returned HTTP headers of any API request to see your current rate limit status.

# Using the Subscription API

API Subscriptions are used to send information about an event to a URL and trigger an API call. This is more efficient than doing scheduled API calls.


To create a subscription, use the API Settings page or send a request using the instructions in the Subscriptions section below.


All you need to know is the events you want to be subscribed for and the url to which the updates need to be sent.


To create subscriptions using our GUI open tab ** API Settings ** at ** https://iriscrm.com/settings **:


<img src='/images/new-subscription.png'/>

# Authentication

Authenticate your account by including your secret key in API requests.
Do not share your secret API keys in publicly accessible areas, client-side code, and so forth.
Authentication to the API is performed via `X-API-KEY` header.
Requests not properly authenticated will return a `401` error code.

# Errors

Our API returns standard `HTTP` success or error status codes.
For errors, we will also include extra information about what went wrong encoded in the response as `JSON`.

# Limiting

You can make `120` requests per minute.
If you will reach a limit you will get a `429: Too Many Attempts.` response from the server.
Check the returned `HTTP` headers of any API request to see your current rate limit status.

Headers description:

* `X-RateLimit-Limit` tells you the max number of requests you're allowed to make within this application's time period

* `X-RateLimit-Remaining` tells you how many requests you have left within this current time period

* `Retry-After` tells you how many seconds to wait until you try again. (you'll only get `Retry-After` if you've hit the limit).


# Change Log

### 1.0.0 (2019-06-15)

#### Created:

* Added change log.

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), please run:

```
composer require iris-crm/php-sdk
``` 

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY')->setHost('https://iriscrm.com/api/v1/');
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

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY')->setHost('https://iriscrm.com/api/v1/');
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

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY')->setHost('https://iriscrm.com/api/v1/');
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

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY')->setHost('https://iriscrm.com/api/v1/');
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

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY')->setHost('https://iriscrm.com/api/v1/');
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

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY')->setHost('https://iriscrm.com/api/v1/');
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

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY')->setHost('https://iriscrm.com/api/v1/');
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

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY')->setHost('https://iriscrm.com/api/v1/');
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

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY')->setHost('https://iriscrm.com/api/v1/');
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

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY')->setHost('https://iriscrm.com/api/v1/');
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

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY')->setHost('https://iriscrm.com/api/v1/');
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

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY')->setHost('https://iriscrm.com/api/v1/');
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

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY')->setHost('https://iriscrm.com/api/v1/');
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

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY')->setHost('https://iriscrm.com/api/v1/');
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

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY')->setHost('https://iriscrm.com/api/v1/');
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

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY')->setHost('https://iriscrm.com/api/v1/');
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

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY')->setHost('https://iriscrm.com/api/v1/');
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

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY')->setHost('https://iriscrm.com/api/v1/');
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

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY')->setHost('https://iriscrm.com/api/v1/');
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

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY')->setHost('https://iriscrm.com/api/v1/');
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

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY')->setHost('https://iriscrm.com/api/v1/');
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

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY')->setHost('https://iriscrm.com/api/v1/');
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

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY')->setHost('https://iriscrm.com/api/v1/');
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

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY')->setHost('https://iriscrm.com/api/v1/');
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

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY')->setHost('https://iriscrm.com/api/v1/');
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

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY')->setHost('https://iriscrm.com/api/v1/');
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

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY')->setHost('https://iriscrm.com/api/v1/');
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

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY')->setHost('https://iriscrm.com/api/v1/');
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

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY')->setHost('https://iriscrm.com/api/v1/');
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

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY')->setHost('https://iriscrm.com/api/v1/');
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

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY')->setHost('https://iriscrm.com/api/v1/');
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

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY')->setHost('https://iriscrm.com/api/v1/');
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

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY')->setHost('https://iriscrm.com/api/v1/');
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

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY')->setHost('https://iriscrm.com/api/v1/');
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

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY')->setHost('https://iriscrm.com/api/v1/');
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

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY')->setHost('https://iriscrm.com/api/v1/');
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

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY')->setHost('https://iriscrm.com/api/v1/');
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

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY')->setHost('https://iriscrm.com/api/v1/');
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

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY')->setHost('https://iriscrm.com/api/v1/');
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

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY')->setHost('https://iriscrm.com/api/v1/');
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

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY')->setHost('https://iriscrm.com/api/v1/');
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

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY')->setHost('https://iriscrm.com/api/v1/');
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

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY')->setHost('https://iriscrm.com/api/v1/');
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

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY')->setHost('https://iriscrm.com/api/v1/');
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

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY')->setHost('https://iriscrm.com/api/v1/');
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

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY')->setHost('https://iriscrm.com/api/v1/');
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

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY')->setHost('https://iriscrm.com/api/v1/');
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

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY')->setHost('https://iriscrm.com/api/v1/');
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

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY')->setHost('https://iriscrm.com/api/v1/');
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

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY')->setHost('https://iriscrm.com/api/v1/');
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

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY')->setHost('https://iriscrm.com/api/v1/');
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

// Configure API key authorization: Token
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY')->setHost('https://iriscrm.com/api/v1/');
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

## Documentation for API Endpoints

All URIs are relative to *https://iriscrm.com/api/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*LeadsApi* | [**leadsApplicationsAppIdMappingsGet**](docs/Api/LeadsApi.md#leadsapplicationsappidmappingsget) | **GET** /leads/applications/{appId}/mappings | Get a list of available application field mappings
*LeadsApi* | [**leadsApplicationsAppIdMappingsMapIdDelete**](docs/Api/LeadsApi.md#leadsapplicationsappidmappingsmapiddelete) | **DELETE** /leads/applications/{appId}/mappings/{mapId} | Delete an application field mapping
*LeadsApi* | [**leadsApplicationsAppIdMappingsMapIdGet**](docs/Api/LeadsApi.md#leadsapplicationsappidmappingsmapidget) | **GET** /leads/applications/{appId}/mappings/{mapId} | Get a application field mapping
*LeadsApi* | [**leadsApplicationsAppIdMappingsMapIdPatch**](docs/Api/LeadsApi.md#leadsapplicationsappidmappingsmapidpatch) | **PATCH** /leads/applications/{appId}/mappings/{mapId} | Update an application field mapping
*LeadsApi* | [**leadsApplicationsAppIdMappingsPost**](docs/Api/LeadsApi.md#leadsapplicationsappidmappingspost) | **POST** /leads/applications/{appId}/mappings | Create a new application field mapping
*LeadsApi* | [**leadsApplicationsGet**](docs/Api/LeadsApi.md#leadsapplicationsget) | **GET** /leads/applications | Get a list of available applications
*LeadsApi* | [**leadsCampaignsGet**](docs/Api/LeadsApi.md#leadscampaignsget) | **GET** /leads/campaigns | Get a list of available campaigns
*LeadsApi* | [**leadsDynamicFieldsSchemaGet**](docs/Api/LeadsApi.md#leadsdynamicfieldsschemaget) | **GET** /leads/dynamic-fields-schema | Get a schema of lead fields
*LeadsApi* | [**leadsEmailsTemplatesGet**](docs/Api/LeadsApi.md#leadsemailstemplatesget) | **GET** /leads/emails/templates | Get list of email templates
*LeadsApi* | [**leadsFieldsFieldIdGet**](docs/Api/LeadsApi.md#leadsfieldsfieldidget) | **GET** /leads/fields/{fieldId} | Get a lead field
*LeadsApi* | [**leadsFieldsFieldIdOrderPatch**](docs/Api/LeadsApi.md#leadsfieldsfieldidorderpatch) | **PATCH** /leads/fields/{fieldId}/order | Update a lead field order position
*LeadsApi* | [**leadsFieldsFieldIdPatch**](docs/Api/LeadsApi.md#leadsfieldsfieldidpatch) | **PATCH** /leads/fields/{fieldId} | Update a lead field
*LeadsApi* | [**leadsFieldsGet**](docs/Api/LeadsApi.md#leadsfieldsget) | **GET** /leads/fields | Get a list of available lead fields
*LeadsApi* | [**leadsFieldsPost**](docs/Api/LeadsApi.md#leadsfieldspost) | **POST** /leads/fields | Create a new lead field
*LeadsApi* | [**leadsFieldsTabsGet**](docs/Api/LeadsApi.md#leadsfieldstabsget) | **GET** /leads/fields/tabs | Get a list of all lead field tabs
*LeadsApi* | [**leadsFieldsTabsPost**](docs/Api/LeadsApi.md#leadsfieldstabspost) | **POST** /leads/fields/tabs | Create a lead field tab
*LeadsApi* | [**leadsFieldsTabsTabIdGet**](docs/Api/LeadsApi.md#leadsfieldstabstabidget) | **GET** /leads/fields/tabs/{tabId} | Get a lead field tab
*LeadsApi* | [**leadsFieldsTabsTabIdPatch**](docs/Api/LeadsApi.md#leadsfieldstabstabidpatch) | **PATCH** /leads/fields/tabs/{tabId} | Update a lead field tab
*LeadsApi* | [**leadsGet**](docs/Api/LeadsApi.md#leadsget) | **GET** /leads | Get a list of leads
*LeadsApi* | [**leadsGroupsGet**](docs/Api/LeadsApi.md#leadsgroupsget) | **GET** /leads/groups | Get a list of available groups
*LeadsApi* | [**leadsLeadIdActivityCampaignGet**](docs/Api/LeadsApi.md#leadsleadidactivitycampaignget) | **GET** /leads/{leadId}/activity/campaign | Get a list of all lead campaign activity
*LeadsApi* | [**leadsLeadIdActivityDeletionGet**](docs/Api/LeadsApi.md#leadsleadidactivitydeletionget) | **GET** /leads/{leadId}/activity/deletion | Get a list of all lead deletion activity
*LeadsApi* | [**leadsLeadIdActivityDuplicatesGet**](docs/Api/LeadsApi.md#leadsleadidactivityduplicatesget) | **GET** /leads/{leadId}/activity/duplicates | Get a list of all lead duplicate activity
*LeadsApi* | [**leadsLeadIdActivityLinksGet**](docs/Api/LeadsApi.md#leadsleadidactivitylinksget) | **GET** /leads/{leadId}/activity/links | Get a list of all lead links activity
*LeadsApi* | [**leadsLeadIdActivitySourceGet**](docs/Api/LeadsApi.md#leadsleadidactivitysourceget) | **GET** /leads/{leadId}/activity/source | Get a list of all lead source activity
*LeadsApi* | [**leadsLeadIdActivityStatusGet**](docs/Api/LeadsApi.md#leadsleadidactivitystatusget) | **GET** /leads/{leadId}/activity/status | Get a list of all lead status activity
*LeadsApi* | [**leadsLeadIdApplicationsApplicationIdPopulatePost**](docs/Api/LeadsApi.md#leadsleadidapplicationsapplicationidpopulatepost) | **POST** /leads/{leadId}/applications/{applicationId}/populate | Populate PDF Document
*LeadsApi* | [**leadsLeadIdAppointmentsGet**](docs/Api/LeadsApi.md#leadsleadidappointmentsget) | **GET** /leads/{leadId}/appointments | Get lead appointments
*LeadsApi* | [**leadsLeadIdAppointmentsPost**](docs/Api/LeadsApi.md#leadsleadidappointmentspost) | **POST** /leads/{leadId}/appointments | Create a lead appointment
*LeadsApi* | [**leadsLeadIdDocumentsDocumentIdGet**](docs/Api/LeadsApi.md#leadsleadiddocumentsdocumentidget) | **GET** /leads/{leadId}/documents/{documentId} | Download a document
*LeadsApi* | [**leadsLeadIdDocumentsGet**](docs/Api/LeadsApi.md#leadsleadiddocumentsget) | **GET** /leads/{leadId}/documents | Get a list of available documents
*LeadsApi* | [**leadsLeadIdDocumentsPost**](docs/Api/LeadsApi.md#leadsleadiddocumentspost) | **POST** /leads/{leadId}/documents | Upload a document
*LeadsApi* | [**leadsLeadIdEmailsTemplateIdPost**](docs/Api/LeadsApi.md#leadsleadidemailstemplateidpost) | **POST** /leads/{leadId}/emails/{templateId} | Send an email to lead with template
*LeadsApi* | [**leadsLeadIdGet**](docs/Api/LeadsApi.md#leadsleadidget) | **GET** /leads/{leadId} | Get detailed lead information
*LeadsApi* | [**leadsLeadIdMailboxEmailIdAttachmentAttachmentIdGet**](docs/Api/LeadsApi.md#leadsleadidmailboxemailidattachmentattachmentidget) | **GET** /leads/{leadId}/mailbox/{emailId}/attachment/{attachmentId} | Download a mailbox email attachment
*LeadsApi* | [**leadsLeadIdNotesGet**](docs/Api/LeadsApi.md#leadsleadidnotesget) | **GET** /leads/{leadId}/notes | Get lead notes
*LeadsApi* | [**leadsLeadIdNotesPost**](docs/Api/LeadsApi.md#leadsleadidnotespost) | **POST** /leads/{leadId}/notes | Create a lead note
*LeadsApi* | [**leadsLeadIdPatch**](docs/Api/LeadsApi.md#leadsleadidpatch) | **PATCH** /leads/{leadId} | Update a lead
*LeadsApi* | [**leadsLeadIdSignaturesApplicationIdGeneratePost**](docs/Api/LeadsApi.md#leadsleadidsignaturesapplicationidgeneratepost) | **POST** /leads/{leadId}/signatures/{applicationId}/generate | Generate an e-signature document
*LeadsApi* | [**leadsLeadIdSignaturesApplicationIdSendPost**](docs/Api/LeadsApi.md#leadsleadidsignaturesapplicationidsendpost) | **POST** /leads/{leadId}/signatures/{applicationId}/send | Send an e-signature document
*LeadsApi* | [**leadsLeadIdSignaturesGet**](docs/Api/LeadsApi.md#leadsleadidsignaturesget) | **GET** /leads/{leadId}/signatures | Get a list of all lead e-signatures documents
*LeadsApi* | [**leadsLeadIdSmsTemplateIdPost**](docs/Api/LeadsApi.md#leadsleadidsmstemplateidpost) | **POST** /leads/{leadId}/sms/{templateId} | Send an sms to lead with selected sms template
*LeadsApi* | [**leadsLeadIdTasksGet**](docs/Api/LeadsApi.md#leadsleadidtasksget) | **GET** /leads/{leadId}/tasks | Get lead tasks
*LeadsApi* | [**leadsLeadIdTasksPost**](docs/Api/LeadsApi.md#leadsleadidtaskspost) | **POST** /leads/{leadId}/tasks | Create a lead task
*LeadsApi* | [**leadsLeadIdUsersGet**](docs/Api/LeadsApi.md#leadsleadidusersget) | **GET** /leads/{leadId}/users | Get a list of assigned users
*LeadsApi* | [**leadsLeadIdUsersPost**](docs/Api/LeadsApi.md#leadsleadiduserspost) | **POST** /leads/{leadId}/users | Assign a user
*LeadsApi* | [**leadsLeadIdUsersUserIdDelete**](docs/Api/LeadsApi.md#leadsleadidusersuseriddelete) | **DELETE** /leads/{leadId}/users/{userId} | Unassign a user from a lead
*LeadsApi* | [**leadsPost**](docs/Api/LeadsApi.md#leadspost) | **POST** /leads | Create a lead
*LeadsApi* | [**leadsSignaturesApplicationIdDownloadGet**](docs/Api/LeadsApi.md#leadssignaturesapplicationiddownloadget) | **GET** /leads/signatures/{applicationId}/download | Download an e-signature document
*LeadsApi* | [**leadsSourcesGet**](docs/Api/LeadsApi.md#leadssourcesget) | **GET** /leads/sources | Get a list of available sources
*LeadsApi* | [**leadsStatusesGet**](docs/Api/LeadsApi.md#leadsstatusesget) | **GET** /leads/statuses | Get a list of available statuses
*LeadsApi* | [**leadsUsersGet**](docs/Api/LeadsApi.md#leadsusersget) | **GET** /leads/users | Get a list of available users
*MerchantsApi* | [**merchantsGet**](docs/Api/MerchantsApi.md#merchantsget) | **GET** /merchants | Get a list of merchants
*MerchantsApi* | [**merchantsMerchantNumberChargebacksGet**](docs/Api/MerchantsApi.md#merchantsmerchantnumberchargebacksget) | **GET** /merchants/{merchantNumber}/chargebacks | Get a list of chargebacks
*MerchantsApi* | [**merchantsMerchantNumberGet**](docs/Api/MerchantsApi.md#merchantsmerchantnumberget) | **GET** /merchants/{merchantNumber} | Get detailed merchant information
*MerchantsApi* | [**merchantsMerchantNumberPatch**](docs/Api/MerchantsApi.md#merchantsmerchantnumberpatch) | **PATCH** /merchants/{merchantNumber} | Update an existing merchant
*MerchantsApi* | [**merchantsMerchantNumberRetrievalsGet**](docs/Api/MerchantsApi.md#merchantsmerchantnumberretrievalsget) | **GET** /merchants/{merchantNumber}/retrievals | Get a list of retrievals
*MerchantsApi* | [**merchantsMerchantNumberStatementsGet**](docs/Api/MerchantsApi.md#merchantsmerchantnumberstatementsget) | **GET** /merchants/{merchantNumber}/statements | Get a list of statements
*MerchantsApi* | [**merchantsMerchantNumberStatementsStatementIdGet**](docs/Api/MerchantsApi.md#merchantsmerchantnumberstatementsstatementidget) | **GET** /merchants/{merchantNumber}/statements/{statementId} | Download a statement
*MerchantsApi* | [**merchantsMerchantNumberTransactionsGet**](docs/Api/MerchantsApi.md#merchantsmerchantnumbertransactionsget) | **GET** /merchants/{merchantNumber}/transactions | Get a list of batches and transactions
*SubscriptionsApi* | [**subscriptionsGet**](docs/Api/SubscriptionsApi.md#subscriptionsget) | **GET** /subscriptions | Return a list of subscriptions
*SubscriptionsApi* | [**subscriptionsPost**](docs/Api/SubscriptionsApi.md#subscriptionspost) | **POST** /subscriptions | Create a subscription
*SubscriptionsApi* | [**subscriptionsSampleLeadCreatedGet**](docs/Api/SubscriptionsApi.md#subscriptionssampleleadcreatedget) | **GET** /subscriptions/sample/lead.created | Data sample for the \&quot;lead.created\&quot; event
*SubscriptionsApi* | [**subscriptionsSampleLeadDeletedGet**](docs/Api/SubscriptionsApi.md#subscriptionssampleleaddeletedget) | **GET** /subscriptions/sample/lead.deleted | Data sample for the \&quot;lead.deleted\&quot; event
*SubscriptionsApi* | [**subscriptionsSampleLeadDocumentUploadedGet**](docs/Api/SubscriptionsApi.md#subscriptionssampleleaddocumentuploadedget) | **GET** /subscriptions/sample/lead.document.uploaded | Data sample for the \&quot;lead.document.uploaded\&quot; event
*SubscriptionsApi* | [**subscriptionsSampleLeadEmailReceivedGet**](docs/Api/SubscriptionsApi.md#subscriptionssampleleademailreceivedget) | **GET** /subscriptions/sample/lead.email.received | Data sample for the \&quot;lead.email.received\&quot; event
*SubscriptionsApi* | [**subscriptionsSampleLeadNoteAddedGet**](docs/Api/SubscriptionsApi.md#subscriptionssampleleadnoteaddedget) | **GET** /subscriptions/sample/lead.note.added | Data sample for the \&quot;lead.note.added\&quot; event
*SubscriptionsApi* | [**subscriptionsSampleLeadRestoredGet**](docs/Api/SubscriptionsApi.md#subscriptionssampleleadrestoredget) | **GET** /subscriptions/sample/lead.restored | Data sample for the \&quot;lead.restored\&quot; event
*SubscriptionsApi* | [**subscriptionsSampleLeadStatusUpdatedGet**](docs/Api/SubscriptionsApi.md#subscriptionssampleleadstatusupdatedget) | **GET** /subscriptions/sample/lead.status.updated | Data sample for the \&quot;lead.status.updated\&quot; event
*SubscriptionsApi* | [**subscriptionsSampleLeadUpdatedGet**](docs/Api/SubscriptionsApi.md#subscriptionssampleleadupdatedget) | **GET** /subscriptions/sample/lead.updated | Data sample for the \&quot;lead.updated\&quot; event
*SubscriptionsApi* | [**subscriptionsSubscriptionIdDelete**](docs/Api/SubscriptionsApi.md#subscriptionssubscriptioniddelete) | **DELETE** /subscriptions/{subscriptionId} | Delete a subscription
*SubscriptionsApi* | [**subscriptionsSubscriptionIdGet**](docs/Api/SubscriptionsApi.md#subscriptionssubscriptionidget) | **GET** /subscriptions/{subscriptionId} | Return a subscription by its id
*SubscriptionsApi* | [**subscriptionsSubscriptionIdPatch**](docs/Api/SubscriptionsApi.md#subscriptionssubscriptionidpatch) | **PATCH** /subscriptions/{subscriptionId} | Update a subscription

## Documentation For Models

 - [ApplicationField](docs/Model/ApplicationField.md)
 - [ApplicationFieldDuplicates](docs/Model/ApplicationFieldDuplicates.md)
 - [ApplicationFieldInfo](docs/Model/ApplicationFieldInfo.md)
 - [Body](docs/Model/Body.md)
 - [Body1](docs/Model/Body1.md)
 - [Body10](docs/Model/Body10.md)
 - [Body2](docs/Model/Body2.md)
 - [Body3](docs/Model/Body3.md)
 - [Body4](docs/Model/Body4.md)
 - [Body5](docs/Model/Body5.md)
 - [Body6](docs/Model/Body6.md)
 - [Body7](docs/Model/Body7.md)
 - [Body8](docs/Model/Body8.md)
 - [Body9](docs/Model/Body9.md)
 - [BriefApplicationInfo](docs/Model/BriefApplicationInfo.md)
 - [BriefCampaignInfo](docs/Model/BriefCampaignInfo.md)
 - [BriefCategoryInfo](docs/Model/BriefCategoryInfo.md)
 - [BriefEmailTemplate](docs/Model/BriefEmailTemplate.md)
 - [BriefGroupInfo](docs/Model/BriefGroupInfo.md)
 - [BriefLeadInfo](docs/Model/BriefLeadInfo.md)
 - [BriefMerchantInfo](docs/Model/BriefMerchantInfo.md)
 - [BriefSourceInfo](docs/Model/BriefSourceInfo.md)
 - [BriefStatusInfo](docs/Model/BriefStatusInfo.md)
 - [BriefSubscriptionInfo](docs/Model/BriefSubscriptionInfo.md)
 - [BriefTabInfo](docs/Model/BriefTabInfo.md)
 - [BriefUserInfo](docs/Model/BriefUserInfo.md)
 - [BriefUserInfoWithClass](docs/Model/BriefUserInfoWithClass.md)
 - [CampaignActivity](docs/Model/CampaignActivity.md)
 - [CategoryWithStatuses](docs/Model/CategoryWithStatuses.md)
 - [Chargeback](docs/Model/Chargeback.md)
 - [DeletionActivity](docs/Model/DeletionActivity.md)
 - [DuplicateActivity](docs/Model/DuplicateActivity.md)
 - [DynamicFieldsSchema](docs/Model/DynamicFieldsSchema.md)
 - [DynamicFieldsSchemaFields](docs/Model/DynamicFieldsSchemaFields.md)
 - [DynamicFieldsSchemaTabs](docs/Model/DynamicFieldsSchemaTabs.md)
 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [InlineResponse2001](docs/Model/InlineResponse2001.md)
 - [InlineResponse20010](docs/Model/InlineResponse20010.md)
 - [InlineResponse20011](docs/Model/InlineResponse20011.md)
 - [InlineResponse20011Data](docs/Model/InlineResponse20011Data.md)
 - [InlineResponse20012](docs/Model/InlineResponse20012.md)
 - [InlineResponse20013](docs/Model/InlineResponse20013.md)
 - [InlineResponse20013Data](docs/Model/InlineResponse20013Data.md)
 - [InlineResponse20014](docs/Model/InlineResponse20014.md)
 - [InlineResponse20015](docs/Model/InlineResponse20015.md)
 - [InlineResponse20016](docs/Model/InlineResponse20016.md)
 - [InlineResponse20016Data](docs/Model/InlineResponse20016Data.md)
 - [InlineResponse20017](docs/Model/InlineResponse20017.md)
 - [InlineResponse20018](docs/Model/InlineResponse20018.md)
 - [InlineResponse20019](docs/Model/InlineResponse20019.md)
 - [InlineResponse2002](docs/Model/InlineResponse2002.md)
 - [InlineResponse20020](docs/Model/InlineResponse20020.md)
 - [InlineResponse20021](docs/Model/InlineResponse20021.md)
 - [InlineResponse20021Data](docs/Model/InlineResponse20021Data.md)
 - [InlineResponse20021Label](docs/Model/InlineResponse20021Label.md)
 - [InlineResponse20021Tab](docs/Model/InlineResponse20021Tab.md)
 - [InlineResponse20022](docs/Model/InlineResponse20022.md)
 - [InlineResponse20023](docs/Model/InlineResponse20023.md)
 - [InlineResponse20023Data](docs/Model/InlineResponse20023Data.md)
 - [InlineResponse20024](docs/Model/InlineResponse20024.md)
 - [InlineResponse20025](docs/Model/InlineResponse20025.md)
 - [InlineResponse20026](docs/Model/InlineResponse20026.md)
 - [InlineResponse20027](docs/Model/InlineResponse20027.md)
 - [InlineResponse20028](docs/Model/InlineResponse20028.md)
 - [InlineResponse20029](docs/Model/InlineResponse20029.md)
 - [InlineResponse2003](docs/Model/InlineResponse2003.md)
 - [InlineResponse20030](docs/Model/InlineResponse20030.md)
 - [InlineResponse20031](docs/Model/InlineResponse20031.md)
 - [InlineResponse20032](docs/Model/InlineResponse20032.md)
 - [InlineResponse20033](docs/Model/InlineResponse20033.md)
 - [InlineResponse20034](docs/Model/InlineResponse20034.md)
 - [InlineResponse20035](docs/Model/InlineResponse20035.md)
 - [InlineResponse20036](docs/Model/InlineResponse20036.md)
 - [InlineResponse20037](docs/Model/InlineResponse20037.md)
 - [InlineResponse20038](docs/Model/InlineResponse20038.md)
 - [InlineResponse20039](docs/Model/InlineResponse20039.md)
 - [InlineResponse2004](docs/Model/InlineResponse2004.md)
 - [InlineResponse20040](docs/Model/InlineResponse20040.md)
 - [InlineResponse20041](docs/Model/InlineResponse20041.md)
 - [InlineResponse20042](docs/Model/InlineResponse20042.md)
 - [InlineResponse20043](docs/Model/InlineResponse20043.md)
 - [InlineResponse20044](docs/Model/InlineResponse20044.md)
 - [InlineResponse2005](docs/Model/InlineResponse2005.md)
 - [InlineResponse2006](docs/Model/InlineResponse2006.md)
 - [InlineResponse2006Data](docs/Model/InlineResponse2006Data.md)
 - [InlineResponse2007](docs/Model/InlineResponse2007.md)
 - [InlineResponse2008](docs/Model/InlineResponse2008.md)
 - [InlineResponse2009](docs/Model/InlineResponse2009.md)
 - [InlineResponse2009Details](docs/Model/InlineResponse2009Details.md)
 - [InlineResponse2009Fields](docs/Model/InlineResponse2009Fields.md)
 - [InlineResponse401](docs/Model/InlineResponse401.md)
 - [InlineResponse403](docs/Model/InlineResponse403.md)
 - [InlineResponse404](docs/Model/InlineResponse404.md)
 - [InlineResponse405](docs/Model/InlineResponse405.md)
 - [InlineResponse500](docs/Model/InlineResponse500.md)
 - [LeadCreatedEventInfo](docs/Model/LeadCreatedEventInfo.md)
 - [LeadCreatedEventInfoData](docs/Model/LeadCreatedEventInfoData.md)
 - [LeadCreatedEventInfoDataLead](docs/Model/LeadCreatedEventInfoDataLead.md)
 - [LeadCreatedEventInfoDataLeadCreatedBy](docs/Model/LeadCreatedEventInfoDataLeadCreatedBy.md)
 - [LeadCreatedEventInfoHook](docs/Model/LeadCreatedEventInfoHook.md)
 - [LeadDeletedEventInfo](docs/Model/LeadDeletedEventInfo.md)
 - [LeadDeletedEventInfoData](docs/Model/LeadDeletedEventInfoData.md)
 - [LeadDeletedEventInfoDataLead](docs/Model/LeadDeletedEventInfoDataLead.md)
 - [LeadDeletedEventInfoHook](docs/Model/LeadDeletedEventInfoHook.md)
 - [LeadDocumentUploadedEventInfo](docs/Model/LeadDocumentUploadedEventInfo.md)
 - [LeadDocumentUploadedEventInfoData](docs/Model/LeadDocumentUploadedEventInfoData.md)
 - [LeadDocumentUploadedEventInfoDataLead](docs/Model/LeadDocumentUploadedEventInfoDataLead.md)
 - [LeadDocumentUploadedEventInfoDataLeadDocument](docs/Model/LeadDocumentUploadedEventInfoDataLeadDocument.md)
 - [LeadDocumentUploadedEventInfoHook](docs/Model/LeadDocumentUploadedEventInfoHook.md)
 - [LeadEmailReceivedEventInfo](docs/Model/LeadEmailReceivedEventInfo.md)
 - [LeadEmailReceivedEventInfoData](docs/Model/LeadEmailReceivedEventInfoData.md)
 - [LeadEmailReceivedEventInfoDataLead](docs/Model/LeadEmailReceivedEventInfoDataLead.md)
 - [LeadEmailReceivedEventInfoDataLeadEmail](docs/Model/LeadEmailReceivedEventInfoDataLeadEmail.md)
 - [LeadEmailReceivedEventInfoHook](docs/Model/LeadEmailReceivedEventInfoHook.md)
 - [LeadField](docs/Model/LeadField.md)
 - [LeadFieldOptions](docs/Model/LeadFieldOptions.md)
 - [LeadFieldOptionsCopy](docs/Model/LeadFieldOptionsCopy.md)
 - [LeadFieldOptionsDropdown](docs/Model/LeadFieldOptionsDropdown.md)
 - [LeadFieldOptionsZipcodeAutocomplete](docs/Model/LeadFieldOptionsZipcodeAutocomplete.md)
 - [LeadFieldOrder](docs/Model/LeadFieldOrder.md)
 - [LeadFieldTab](docs/Model/LeadFieldTab.md)
 - [LeadNoteAddedEventInfo](docs/Model/LeadNoteAddedEventInfo.md)
 - [LeadNoteAddedEventInfoData](docs/Model/LeadNoteAddedEventInfoData.md)
 - [LeadNoteAddedEventInfoDataLead](docs/Model/LeadNoteAddedEventInfoDataLead.md)
 - [LeadNoteAddedEventInfoDataLeadNote](docs/Model/LeadNoteAddedEventInfoDataLeadNote.md)
 - [LeadNoteAddedEventInfoHook](docs/Model/LeadNoteAddedEventInfoHook.md)
 - [LeadRestoredEventInfo](docs/Model/LeadRestoredEventInfo.md)
 - [LeadRestoredEventInfoData](docs/Model/LeadRestoredEventInfoData.md)
 - [LeadRestoredEventInfoDataLead](docs/Model/LeadRestoredEventInfoDataLead.md)
 - [LeadRestoredEventInfoHook](docs/Model/LeadRestoredEventInfoHook.md)
 - [LeadStatusUpdatedEventInfo](docs/Model/LeadStatusUpdatedEventInfo.md)
 - [LeadStatusUpdatedEventInfoData](docs/Model/LeadStatusUpdatedEventInfoData.md)
 - [LeadStatusUpdatedEventInfoDataLead](docs/Model/LeadStatusUpdatedEventInfoDataLead.md)
 - [LeadStatusUpdatedEventInfoDataLeadNewStatus](docs/Model/LeadStatusUpdatedEventInfoDataLeadNewStatus.md)
 - [LeadStatusUpdatedEventInfoDataLeadPreviousStatus](docs/Model/LeadStatusUpdatedEventInfoDataLeadPreviousStatus.md)
 - [LeadStatusUpdatedEventInfoHook](docs/Model/LeadStatusUpdatedEventInfoHook.md)
 - [LeadUpdatedEventInfo](docs/Model/LeadUpdatedEventInfo.md)
 - [LeadUpdatedEventInfoData](docs/Model/LeadUpdatedEventInfoData.md)
 - [LeadUpdatedEventInfoDataLead](docs/Model/LeadUpdatedEventInfoDataLead.md)
 - [LeadUpdatedEventInfoHook](docs/Model/LeadUpdatedEventInfoHook.md)
 - [LeadsFields](docs/Model/LeadsFields.md)
 - [Links](docs/Model/Links.md)
 - [LinksActivity](docs/Model/LinksActivity.md)
 - [Meta](docs/Model/Meta.md)
 - [MonetaryBatch](docs/Model/MonetaryBatch.md)
 - [MonetaryBatchTransactions](docs/Model/MonetaryBatchTransactions.md)
 - [Retrieval](docs/Model/Retrieval.md)
 - [SourceActivity](docs/Model/SourceActivity.md)
 - [StatusActivity](docs/Model/StatusActivity.md)

## Documentation For Authorization


## Token

- **Type**: API key
- **API key parameter name**: X-API-KEY
- **Location**: HTTP header


## Author

support@iriscrm.com


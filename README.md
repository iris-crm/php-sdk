# Introduction

Welcome to IRIS’s API!


The API is organized around `REST`.
All requests should be made over `SSL`.


All request and response bodies, including errors, are encoded in `JSON`.

# Open API

The Open API provides numerous functions to access or to update your CRM lead and merchant data using simple REST calls.


### You can use the E-Signature API to:

- Generate an e-signature document

- Send an e-signature document

- Download an e-signature document

- Get a list of all lead e-signatures documents

- Get a list of available applications

- Create a new application field mapping

- Get a list of available application field mappings

- Get an application field mapping list

- Update an application field mapping

- Delete an application field mapping

### You can use the Helpdesk API to:

- Create a new ticket

- Get a list of helpdesk tickets

- Add a ticket comment

- Get detailed ticked information

- Update a ticket

- Delete a ticket

- Upload an attachment to a ticket, comment, checklist, or ticket type

- Download an attachment from a ticket

- Create a new helpdesk ticket type

- Get a list of helpdesk ticket types

- Get details for a helpdesk ticket type

- Update a helpdesk ticket type

- Delete a ticket type

- Download an attachment from a ticket type

- Get a list of available users to notify and assign

### You can use the Lead API to:

- Create a lead

- Get a list of leads

- Get detailed lead information

- Update a lead

- Create a new lead field

- Get a list of available lead fields

- Get a lead field

- Update a lead field

- Update a lead field order position

- Create a lead field tab

- Get a list of all lead field tabs

- Get a lead field tab

- Update a lead field tab

- Create a lead note

- Get lead notes

- Create a lead appointment

- Get lead appointments

- Populate PDF Document

- Create a lead task

- Get lead tasks

- Assign a user

- Get a list of assigned users

- Unassign a user from a lead

- Upload a document

- Get a list of available documents

- Get a list of available document labels

- Download a document

- Send an email to lead with template

- Get a list of email templates

- Download a mailbox email attachment

- Send an SMS to lead with selected SMS template

- Get list of SMS templates

- Get a list of all lead campaign activity

- Get a list of all lead deletion activity

- Get a list of all lead duplicate activity

- Get a list of all lead links activity

- Get a list of all lead source activity

- Get a list of all lead status activity

- Get a list of available campaigns

- Get a list of available groups

- Get a list of available sources

- Get a list of available statuses

- Get a list of available users

### You can use the Merchant API to:

- Get a list of merchants

- Get detailed merchant information

- Update an existing merchant

- Get a list of batches and transactions

- Get a list of chargebacks

- Get a list of retrievals

- Get a list of statements

- Download a statement

### You can use the Residuals API to:

- Get residuals summary data

- Get residuals summary with merchant rows

- Get residuals details with merchant rows

- Get residuals line items

- Get residuals templates

- Get a list of users with assigned residuals templates


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

 ### 1.6.0 (2021-03-02)

 #### Created:

 * Added `Get pricing templates` endpoint


 ### 1.5.20 (2021-02-12)

 #### Updated:

 * Added `filename` property to the `lead.document.uploaded` subscription response


 ### 1.5.19 (2021-02-17)

 #### Updated:

 * Added deposits endpoint

 * Added `authorization_code` property to the chargeback response


 ### 1.5.18 (2021-01-14)

 #### Updated:

 * Added `id` and `invoice_number` properties to the `transactions` section of the transactions response


 ### 1.5.16 (2020-12-11)

 #### Updated:

 * Renamed task priority from "Low" to "Normal"


 ### 1.5.15 (2021-01-18)

 #### Updated:

 * Added `due` value for `sort_by` and `date_filter` parameters on the get a list of Tickets endpoint

 * Added `due` parameter on the get a list of Tickets endpoint

 * Added `due` parameter on the get detailed information of Tickets endpoint

 * Added `only_business_days` parameter on the get a list of Tickets endpoint

 * Added `only_business_days` parameter on the get detailed information of Tickets endpoint

 * Added `only_business_days` property to the Ticket on the Ticket create endpoint

 * Added `only_business_days` property to the Ticket on the Ticket update endpoint

 * Added `only_business_days` property to the Ticket Type on the get a list of Ticket Type endpoint

 * Added `only_business_days` parameter on the get detailed information of Ticket Type endpoint

 * Added `only_business_days` property to the Ticket Type on the Ticket Type create endpoint

 * Added `only_business_days` property to the Ticket Type on the Ticket Type update endpoint

 * Added `attached_files` property to the Ticket on the Ticket create endpoint

 * Added `attached_files` property to the Ticket Checklist on the Ticket create endpoint

 * Added `attached_files` property to the Ticket Checklist on the Ticket update endpoint

 * Added `attached_files` property to the Ticket Comment on the Comment create endpoint


 ### 1.5.14 (2020-11-26)

 #### Updated:

 * Added `template_id`, `completed_by`, and `completed_at` properties to the `checklist` section of the ticket create response

 * Added `template_id`, `completed_by`, and `completed_at` properties to the `checklist` section of ticket details response

 * Added `template_id`, `completed_by`, and `completed_at` properties to the `checklist` section of ticket update response

 * Added `template_id`, `completed_by`, and `completed_at` properties to the `checklist` section of ticket's checklist updated subscription response


 ### 1.5.13 (2020-11-20)

 #### Updated:

 * Added `priority` property to the Ticket Type on the Ticket Type create endpoint

 * Added `priority` property to the Ticket Type on the Ticket Type update endpoint


 ### 1.5.12 (2020-11-02)

 #### Updated:

 * Changed `due_date` property to the datetime format on the ticket create endpoint

 * Changed `due_date` property to the datetime format on the ticket update endpoint


 ### 1.5.11 (2020-10-20)

 #### Updated:

 * Added `notify_assigned_users` property for ticket creation payload.


 ### 1.5.10 (2020-10-19)

 #### Updated:

 * Added `group_id` property for ticket creation payload.

 * Added `group_id` property for ticket update payload.


 ### 1.5.9 (2020-11-02)

 #### Updated:

 * Added `new_files` property for ticket update payload.

 * Added `new_files` property for ticket type update payload.


 ### 1.5.8 (2020-10-20)

 #### Updated:

 * Added `preview_images` property for ticket request and response data.

 * Added `preview_images` property for ticket comment request and response data.

 * Added `preview_images` property for ticket and ticket comment properties.

 * Added `preview_images` property for ticket request and response data.


 ### 1.5.7 (2020-10-05)

 #### Updated:

 * Added `notify_assigned_users` property for ticket creation payload.


 ### 1.5.5 (2020-07-23)

 #### Updated:

 * Added endpoint with file labels what can be used for document upload.


 ### 1.5.5 (2020-10-20)

 #### Updated:

 * Added endpoint with file labels what can be used for document upload.


 ### 1.5.4 (2020-07-13)

 #### Updated:

 * Added `files_count` property to the ticket create endpoint response.

 * Added `files_count` property to the response of ticket list endpoint.

 * Added `files_count` property to the response of ticket detailed information endpoint.

 * Added `files_count` property to the ticket update endpoint response.

 * Added `files_count` property to the ticket.created subscription data.

 * Added `files_count` property to the ticket.updated subscription data.

 * Added `files_count` property to the ticket.resolved subscription data.

 * Added `files_count` property to the ticket.checklist.updated subscription data.


 ### 1.5.3 (2020-07-06)

 #### Updated:

 * Added `search` filter to the tickets list endpoint.


 ### 1.5.2 (2020-07-10)

 #### Updated:

 * Added `due_date` property to the ticket create endpoint request and response.

 * Added `due_date` property to the response of ticket list endpoint.

 * Added `due_date` property to the response of ticket detailed information endpoint.

 * Added `due_date` property to the ticket update endpoint request and response.

 * Added `due_date` property to the ticket.created subscription data.

 * Added `due_date` property to the ticket.updated subscription data.

 * Added `due_date` property to the ticket.resolved subscription data.

 * Added `due_date` property to the ticket.checklist.updated subscription data.


 ### 1.5.1 (2020-08-10)

 #### Created:

 * Added a Residuals API to work with your residuals reports.


 ### 1.4.9 (2020-06-26)

 #### Updated:

 * Added `hide_resolved` filter to the tickets list endpoint.


 ### 1.4.8 (2020-06-12)

 #### Updated:

 * Added `set_for`, `set_at`, `set_by`, `modified`, `modified_by`, `date_end`, `confirmed_by`, `seen_by`, `rescheduled`, `rescheduled_by`, and `rescheduled_count` properties to the lead appointments endpoint response.

 * Added `set_for`, `set_by`, `modified_by`, `confirmed_by`, `seen_by`, `rescheduled_by`, `rescheduled_count`,  `date_filter`, `start_date`, `end_date`, and `done` filters to the lead appointments endpoint.

 * Added sorting to the lead appointments endpoint.

 * Marked `user` property as deprecated on the lead appointments endpoint response.


 ### 1.4.7 (2020-05-13)

 #### Updated:

 * Added `old_status_id` to lead status activity endpoint.

 * Added `new_status_id` to lead status activity endpoint.


 ### 1.4.6 (2020-05-01)

 #### Created:

 * Added `lead.signature.generated` subscription endpoint.

 * Added `lead.signature.opened` subscription endpoint

 * Added `lead.signature.signed` subscription endpoint

 #### Updated:

 * Added `createdAt` and `createdBy` properties to the `lead.updated` subscription endpoint

 * Added `email`, `contact`, `phone` and `address` properties to the `lead.deleted` subscription endpoint

 * Added `email`, `contact`, `phone` and `address` properties to the `lead.restored` subscription endpoint

 * Added `createdAt` and `createdBy` properties to the `lead.status.updated` subscription endpoint


 ### 1.4.5 (2020-04-21)

 #### Updated:

 * Added `files` property to the ticket creation details endpoint response.

 * Added `file` property for each checklist item in the ticket creation details endpoint response.

 * Added `files` property to the Helpdesk tickets details endpoint.

 * Added `files` property for each comment in the Helpdesk tickets details endpoint.

 * Added `file` property for each checklist item in the Helpdesk tickets details endpoint.

 * Added `files` property to the Helpdesk ticket update endpoint.

 * Added `files` property for each comment in the Helpdesk ticket update endpoint.

 * Added `file` property for each checklist item in the Helpdesk ticket update endpoint

 * Added `file` property for each checklist item in the ticket type creation details endpoint response.

 * Added `file` property for each checklist item on the ticket type endpoint.

 * Added `file` property for each checklist item on the ticket type update endpoint.

 * Added `files` property for ticket created subscription.

 * Added `files` property for ticket updated subscription.

 * Added `files` property for ticket resolved subscription.

 * Added `files` property for ticket commented subscription.

 * Added `files` property for ticket checklist updated subscription.

 * Added `file` property for each checklist item on checklist updated subscription.


 #### Created:

 * Added endpoint for download attachments from Ticket Type


 ### 1.4.4 (2020-04-02)

 #### Updated:

 * Added `resolver` filter to the Helpdesk tickets endpoint.


 ### 1.4.3 (2020-04-01)

 #### Updated:

 * Added `status_updated` option for `date_filter` filter to the Helpdesk tickets endpoint.


 ### 1.4.2 (2020-03-27)

 #### Updated:

 * Added `lid` filter to the Helpdesk tickets endpoint.

 * Added `mid` filter to the Helpdesk tickets endpoint.


 ### 1.4.1 (2020-03-20)

 #### Updated:

 * Added `hash` and `url` properties to the 'Send an e-signature document' endpoint.


 ### 1.4.0 (2020-03-05)

 #### Updated:

 * Added `assigned_users`, `lead_url` properties to the subscriptions response for the `lead.created` subscription.

 * Added `assigned_users`, `lead_url` properties to the subscriptions response for the `lead.updated` subscription.

 * Added `assigned_users`, `lead_url` properties to the subscriptions response for the `lead.deleted` subscription.

 * Added `assigned_users`, `lead_url` properties to the subscriptions response for the `lead.restored` subscription.

 * Added `assigned_users`, `lead_url` properties to the subscriptions response for the `lead.status.updated` subscription.

 * Added `assigned_users`, `lead_url` properties to the subscriptions response for the `lead.note.added` subscription.

 * Added `assigned_users`, `lead_url` properties to the subscriptions response for the `lead.document.uploaded` subscription.

 * Added `assigned_users`, `lead_url` properties to the subscriptions response for the `lead.email.received` subscription.

 * Added `ticket_url` and `assigned_users` properties to the subscriptions response for the `ticket.created` subscription.

 * Added `ticket_url` and `assigned_users` properties to the subscriptions response for the `ticket.updated` subscription.

 * Added `ticket_url` and `assigned_users` properties to the subscriptions response for the `ticket.resolved` subscription.

 * Added `ticket_url` and `assigned_users` properties to the subscriptions response for the `ticket.commented` subscription.

 * Added `ticket_url` and `assigned_users` properties to the subscriptions response for the `ticket.checklist.updated` subscription.

 * Added `application_url`, `identifier` and `lid` properties to the subscriptions response for the `turboapp.submitted` subscription.

 * Added `application_url`, `identifier` and `lid` properties to the subscriptions response for the `turboapp.updated` subscription.

 * Added `application_url`, `identifier` and `lid` properties to the subscriptions response for the `turboapp.approved` subscription.

 * Added `application_url`, `identifier` and `lid` properties to the subscriptions response for the `turboapp.declined` subscription.

 * Changed all subscriptions dates properties to the snake case


 ### 1.3.5 (2020-02-26)

 #### Created:

 * Added a Helpdesk API to work with your helpdesk data.


 ### 1.3.4 (2020-02-25)

 #### Updated:

 * Added a `lid` property to the "turboapp.submitted" subscription.


 ### 1.3.3 (2020-02-24)

 #### Updated:

 * Added a `salesRep` parameter to 'lead.status.updated' subscription.


 ### 1.3.2 (2019-11-21)

 #### Updated:

 * Added a `expire` parameter to 'Generate an e-signature document' endpoint.

 * Added the ability to add multiple signers to the document and added an `expire` parameter to 'Send an e-signature document' endpoint.


 ### 1.3.1 (2019-11-18)

 #### Updated:

 * Rename subscriptions from "application.created" to "turboapp.submitted" and "application.updated" to "turboapp.updated".

 #### Created:

 * Added new subscriptions for "turboapp.approved" event.

 * Added new subscriptions for "turboapp.declined" event.


 ### 1.2.2 (2019-09-03)

 #### Updated:

 * Added a `per_page` property to all list endpoints.


 ### 1.2.1 (2019-08-26)

 #### Updated:

 * Added a `leads` property to merchants endpoint.


 ### 1.2.0 (2019-07-26)

 #### Updated:

 * The endpoint for creating API subscriptions has been updated. Status based options have been added to some events.

 * The endpoint for updating API subscriptions has been updated. Status based options have been added to some events.


 ### 1.1.0 (2019-07-24)

 #### Created:

 * Added an endpoint for getting SMS templates.

 * Added new subscriptions for `application.created` event

 * Added new subscriptions for `application.updated` event

 #### Updated:

 * Added a `sic_code` property to merchants endpoint


 ### 1.0.0 (2019-06-20)

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

## Documentation for API Endpoints

All URIs are relative to *https://iriscrm.com/api/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ESignatureApi* | [**leadsApplicationsAppIdMappingsGet**](docs/Api/ESignatureApi.md#leadsapplicationsappidmappingsget) | **GET** /leads/applications/{appId}/mappings | Get a list of available application field mappings
*ESignatureApi* | [**leadsApplicationsAppIdMappingsMapIdDelete**](docs/Api/ESignatureApi.md#leadsapplicationsappidmappingsmapiddelete) | **DELETE** /leads/applications/{appId}/mappings/{mapId} | Delete an application field mapping
*ESignatureApi* | [**leadsApplicationsAppIdMappingsMapIdGet**](docs/Api/ESignatureApi.md#leadsapplicationsappidmappingsmapidget) | **GET** /leads/applications/{appId}/mappings/{mapId} | Get an application field mapping list
*ESignatureApi* | [**leadsApplicationsAppIdMappingsMapIdPatch**](docs/Api/ESignatureApi.md#leadsapplicationsappidmappingsmapidpatch) | **PATCH** /leads/applications/{appId}/mappings/{mapId} | Update an application field mapping
*ESignatureApi* | [**leadsApplicationsAppIdMappingsPost**](docs/Api/ESignatureApi.md#leadsapplicationsappidmappingspost) | **POST** /leads/applications/{appId}/mappings | Create a new application field mapping
*ESignatureApi* | [**leadsApplicationsGet**](docs/Api/ESignatureApi.md#leadsapplicationsget) | **GET** /leads/applications | Get a list of available applications
*ESignatureApi* | [**leadsLeadIdSignaturesApplicationIdGeneratePost**](docs/Api/ESignatureApi.md#leadsleadidsignaturesapplicationidgeneratepost) | **POST** /leads/{leadId}/signatures/{applicationId}/generate | Generate an e-signature document
*ESignatureApi* | [**leadsLeadIdSignaturesApplicationIdSendPost**](docs/Api/ESignatureApi.md#leadsleadidsignaturesapplicationidsendpost) | **POST** /leads/{leadId}/signatures/{applicationId}/send | Send an e-signature document
*ESignatureApi* | [**leadsLeadIdSignaturesGet**](docs/Api/ESignatureApi.md#leadsleadidsignaturesget) | **GET** /leads/{leadId}/signatures | Get a list of all lead e-signatures documents
*ESignatureApi* | [**leadsSignaturesApplicationIdDownloadGet**](docs/Api/ESignatureApi.md#leadssignaturesapplicationiddownloadget) | **GET** /leads/signatures/{applicationId}/download | Download an e-signature document
*HelpdeskApi* | [**helpdeskFilePost**](docs/Api/HelpdeskApi.md#helpdeskfilepost) | **POST** /helpdesk/file | Upload an attachment to a ticket, comment, checklist, or ticket type
*HelpdeskApi* | [**helpdeskGet**](docs/Api/HelpdeskApi.md#helpdeskget) | **GET** /helpdesk | Get a list of helpdesk tickets
*HelpdeskApi* | [**helpdeskPost**](docs/Api/HelpdeskApi.md#helpdeskpost) | **POST** /helpdesk | Create a new ticket
*HelpdeskApi* | [**helpdeskTicketIdAssignmentsGet**](docs/Api/HelpdeskApi.md#helpdeskticketidassignmentsget) | **GET** /helpdesk/{ticketId}/assignments | Get ticked assignment logs
*HelpdeskApi* | [**helpdeskTicketIdCommentPost**](docs/Api/HelpdeskApi.md#helpdeskticketidcommentpost) | **POST** /helpdesk/{ticketId}/comment | Add a ticket comment
*HelpdeskApi* | [**helpdeskTicketIdDelete**](docs/Api/HelpdeskApi.md#helpdeskticketiddelete) | **DELETE** /helpdesk/{ticketId} | Delete a ticket
*HelpdeskApi* | [**helpdeskTicketIdDownloadAttachmentIdGet**](docs/Api/HelpdeskApi.md#helpdeskticketiddownloadattachmentidget) | **GET** /helpdesk/{ticketId}/download/{attachmentId} | Download an attachment from a ticket
*HelpdeskApi* | [**helpdeskTicketIdGet**](docs/Api/HelpdeskApi.md#helpdeskticketidget) | **GET** /helpdesk/{ticketId} | Get detailed ticked information
*HelpdeskApi* | [**helpdeskTicketIdPatch**](docs/Api/HelpdeskApi.md#helpdeskticketidpatch) | **PATCH** /helpdesk/{ticketId} | Update a ticket
*HelpdeskApi* | [**helpdeskTypesGet**](docs/Api/HelpdeskApi.md#helpdesktypesget) | **GET** /helpdesk/types | Get a list of helpdesk ticket types
*HelpdeskApi* | [**helpdeskTypesPost**](docs/Api/HelpdeskApi.md#helpdesktypespost) | **POST** /helpdesk/types | Create a new helpdesk ticket type
*HelpdeskApi* | [**helpdeskTypesTypeIdDelete**](docs/Api/HelpdeskApi.md#helpdesktypestypeiddelete) | **DELETE** /helpdesk/types/{typeId} | Delete a ticket type
*HelpdeskApi* | [**helpdeskTypesTypeIdDownloadAttachmentIdGet**](docs/Api/HelpdeskApi.md#helpdesktypestypeiddownloadattachmentidget) | **GET** /helpdesk/types/{typeId}/download/{attachmentId} | Download an attachment from a ticket type
*HelpdeskApi* | [**helpdeskTypesTypeIdGet**](docs/Api/HelpdeskApi.md#helpdesktypestypeidget) | **GET** /helpdesk/types/{typeId} | Get details for a helpdesk ticket type
*HelpdeskApi* | [**helpdeskTypesTypeIdPatch**](docs/Api/HelpdeskApi.md#helpdesktypestypeidpatch) | **PATCH** /helpdesk/types/{typeId} | Update a helpdesk ticket type
*HelpdeskApi* | [**helpdeskUsersGet**](docs/Api/HelpdeskApi.md#helpdeskusersget) | **GET** /helpdesk/users | Get a list of available users to notify and assign
*LeadsApi* | [**leadsCampaignsGet**](docs/Api/LeadsApi.md#leadscampaignsget) | **GET** /leads/campaigns | Get a list of available campaigns
*LeadsApi* | [**leadsEmailsTemplatesGet**](docs/Api/LeadsApi.md#leadsemailstemplatesget) | **GET** /leads/emails/templates | Get a list of email templates
*LeadsApi* | [**leadsFieldsFieldIdGet**](docs/Api/LeadsApi.md#leadsfieldsfieldidget) | **GET** /leads/fields/{fieldId} | Get a lead field
*LeadsApi* | [**leadsFieldsFieldIdOrderPatch**](docs/Api/LeadsApi.md#leadsfieldsfieldidorderpatch) | **PATCH** /leads/fields/{fieldId}/order | Update a lead field order position
*LeadsApi* | [**leadsFieldsFieldIdPatch**](docs/Api/LeadsApi.md#leadsfieldsfieldidpatch) | **PATCH** /leads/fields/{fieldId} | Update a lead field
*LeadsApi* | [**leadsFieldsGet**](docs/Api/LeadsApi.md#leadsfieldsget) | **GET** /leads/fields | Get a list of available lead fields
*LeadsApi* | [**leadsFieldsPost**](docs/Api/LeadsApi.md#leadsfieldspost) | **POST** /leads/fields | Create a new lead field
*LeadsApi* | [**leadsFieldsTabsGet**](docs/Api/LeadsApi.md#leadsfieldstabsget) | **GET** /leads/fields/tabs | Get a list of all lead field tabs
*LeadsApi* | [**leadsFieldsTabsPost**](docs/Api/LeadsApi.md#leadsfieldstabspost) | **POST** /leads/fields/tabs | Create a lead field tab
*LeadsApi* | [**leadsFieldsTabsTabIdGet**](docs/Api/LeadsApi.md#leadsfieldstabstabidget) | **GET** /leads/fields/tabs/{tabId} | Get a lead field tab
*LeadsApi* | [**leadsFieldsTabsTabIdPatch**](docs/Api/LeadsApi.md#leadsfieldstabstabidpatch) | **PATCH** /leads/fields/tabs/{tabId} | Update a lead field tab
*LeadsApi* | [**leadsFileLabelsGet**](docs/Api/LeadsApi.md#leadsfilelabelsget) | **GET** /leads/file_labels | Get a list of available document labels
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
*LeadsApi* | [**leadsLeadIdSmsTemplateIdPost**](docs/Api/LeadsApi.md#leadsleadidsmstemplateidpost) | **POST** /leads/{leadId}/sms/{templateId} | Send an SMS to lead with selected SMS template
*LeadsApi* | [**leadsLeadIdTasksGet**](docs/Api/LeadsApi.md#leadsleadidtasksget) | **GET** /leads/{leadId}/tasks | Get lead tasks
*LeadsApi* | [**leadsLeadIdTasksPost**](docs/Api/LeadsApi.md#leadsleadidtaskspost) | **POST** /leads/{leadId}/tasks | Create a lead task
*LeadsApi* | [**leadsLeadIdUsersGet**](docs/Api/LeadsApi.md#leadsleadidusersget) | **GET** /leads/{leadId}/users | Get a list of assigned users
*LeadsApi* | [**leadsLeadIdUsersPost**](docs/Api/LeadsApi.md#leadsleadiduserspost) | **POST** /leads/{leadId}/users | Assign a user
*LeadsApi* | [**leadsLeadIdUsersUserIdDelete**](docs/Api/LeadsApi.md#leadsleadidusersuseriddelete) | **DELETE** /leads/{leadId}/users/{userId} | Unassign a user from a lead
*LeadsApi* | [**leadsPost**](docs/Api/LeadsApi.md#leadspost) | **POST** /leads | Create a lead
*LeadsApi* | [**leadsPricingTemplatesGet**](docs/Api/LeadsApi.md#leadspricingtemplatesget) | **GET** /leads/pricing_templates | Get pricing templates
*LeadsApi* | [**leadsSmsTemplatesGet**](docs/Api/LeadsApi.md#leadssmstemplatesget) | **GET** /leads/sms/templates | Get list of SMS templates
*LeadsApi* | [**leadsSourcesGet**](docs/Api/LeadsApi.md#leadssourcesget) | **GET** /leads/sources | Get a list of available sources
*LeadsApi* | [**leadsStatusesGet**](docs/Api/LeadsApi.md#leadsstatusesget) | **GET** /leads/statuses | Get a list of available statuses
*LeadsApi* | [**leadsUsersGet**](docs/Api/LeadsApi.md#leadsusersget) | **GET** /leads/users | Get a list of available users
*MerchantsApi* | [**merchantsGet**](docs/Api/MerchantsApi.md#merchantsget) | **GET** /merchants | Get a list of merchants
*MerchantsApi* | [**merchantsMerchantNumberChargebacksGet**](docs/Api/MerchantsApi.md#merchantsmerchantnumberchargebacksget) | **GET** /merchants/{merchantNumber}/chargebacks | Get a list of chargebacks
*MerchantsApi* | [**merchantsMerchantNumberDepositsYearMonthGet**](docs/Api/MerchantsApi.md#merchantsmerchantnumberdepositsyearmonthget) | **GET** /merchants/{merchantNumber}/deposits/{year}/{month} | Get a list of deposits records and totals
*MerchantsApi* | [**merchantsMerchantNumberGet**](docs/Api/MerchantsApi.md#merchantsmerchantnumberget) | **GET** /merchants/{merchantNumber} | Get detailed merchant information
*MerchantsApi* | [**merchantsMerchantNumberPatch**](docs/Api/MerchantsApi.md#merchantsmerchantnumberpatch) | **PATCH** /merchants/{merchantNumber} | Update an existing merchant
*MerchantsApi* | [**merchantsMerchantNumberRetrievalsGet**](docs/Api/MerchantsApi.md#merchantsmerchantnumberretrievalsget) | **GET** /merchants/{merchantNumber}/retrievals | Get a list of retrievals
*MerchantsApi* | [**merchantsMerchantNumberStatementsGet**](docs/Api/MerchantsApi.md#merchantsmerchantnumberstatementsget) | **GET** /merchants/{merchantNumber}/statements | Get a list of statements
*MerchantsApi* | [**merchantsMerchantNumberStatementsStatementIdGet**](docs/Api/MerchantsApi.md#merchantsmerchantnumberstatementsstatementidget) | **GET** /merchants/{merchantNumber}/statements/{statementId} | Download a statement
*MerchantsApi* | [**merchantsMerchantNumberTransactionsGet**](docs/Api/MerchantsApi.md#merchantsmerchantnumbertransactionsget) | **GET** /merchants/{merchantNumber}/transactions | Get a list of batches and transactions
*ResidualsApi* | [**residualsLineitemsYearMonthGet**](docs/Api/ResidualsApi.md#residualslineitemsyearmonthget) | **GET** /residuals/lineitems/{year}/{month} | Get residuals line items
*ResidualsApi* | [**residualsReportsDetailsProcessorIdYearMonthGet**](docs/Api/ResidualsApi.md#residualsreportsdetailsprocessoridyearmonthget) | **GET** /residuals/reports/details/{processor_id}/{year}/{month} | Get residuals details with merchant rows
*ResidualsApi* | [**residualsReportsSummaryRowsProcessorIdYearMonthGet**](docs/Api/ResidualsApi.md#residualsreportssummaryrowsprocessoridyearmonthget) | **GET** /residuals/reports/summary/rows/{processor_id}/{year}/{month} | Get residuals summary with merchant rows
*ResidualsApi* | [**residualsReportsSummaryYearMonthGet**](docs/Api/ResidualsApi.md#residualsreportssummaryyearmonthget) | **GET** /residuals/reports/summary/{year}/{month} | Get residuals summary data
*ResidualsApi* | [**residualsTemplatesAssignedYearMonthGet**](docs/Api/ResidualsApi.md#residualstemplatesassignedyearmonthget) | **GET** /residuals/templates/assigned/{year}/{month} | Get a list of users with assigned residuals templates
*ResidualsApi* | [**residualsTemplatesGet**](docs/Api/ResidualsApi.md#residualstemplatesget) | **GET** /residuals/templates/ | Get residuals templates
*SubscriptionsApi* | [**subscriptionsGet**](docs/Api/SubscriptionsApi.md#subscriptionsget) | **GET** /subscriptions | Return a list of subscriptions
*SubscriptionsApi* | [**subscriptionsPost**](docs/Api/SubscriptionsApi.md#subscriptionspost) | **POST** /subscriptions | Create a subscription
*SubscriptionsApi* | [**subscriptionsSampleApiUpdatedGet**](docs/Api/SubscriptionsApi.md#subscriptionssampleapiupdatedget) | **GET** /subscriptions/sample/api.updated | Receive a notification when this API is updated
*SubscriptionsApi* | [**subscriptionsSampleLeadCreatedGet**](docs/Api/SubscriptionsApi.md#subscriptionssampleleadcreatedget) | **GET** /subscriptions/sample/lead.created | Receive a notification when a lead is created in this CRM, with the option to only receive a notification when a lead is in the status(es) specified here
*SubscriptionsApi* | [**subscriptionsSampleLeadDeletedGet**](docs/Api/SubscriptionsApi.md#subscriptionssampleleaddeletedget) | **GET** /subscriptions/sample/lead.deleted | Receive a notification when a lead in this CRM is deleted
*SubscriptionsApi* | [**subscriptionsSampleLeadDocumentUploadedGet**](docs/Api/SubscriptionsApi.md#subscriptionssampleleaddocumentuploadedget) | **GET** /subscriptions/sample/lead.document.uploaded | Receive a notification when a lead document is uploaded
*SubscriptionsApi* | [**subscriptionsSampleLeadEmailReceivedGet**](docs/Api/SubscriptionsApi.md#subscriptionssampleleademailreceivedget) | **GET** /subscriptions/sample/lead.email.received | Receive a notification when an email message is received on a lead in this CRM, with the option to only receive a notification when a lead is in the status(es) specified here
*SubscriptionsApi* | [**subscriptionsSampleLeadNoteAddedGet**](docs/Api/SubscriptionsApi.md#subscriptionssampleleadnoteaddedget) | **GET** /subscriptions/sample/lead.note.added | Receive a notification when a lead in this CRM has a note posted, with the option to only receive a notification when a lead is in the status(es) specified here
*SubscriptionsApi* | [**subscriptionsSampleLeadRestoredGet**](docs/Api/SubscriptionsApi.md#subscriptionssampleleadrestoredget) | **GET** /subscriptions/sample/lead.restored | Receive a notification when a deleted lead is restored in this CRM
*SubscriptionsApi* | [**subscriptionsSampleLeadSignatureGeneratedGet**](docs/Api/SubscriptionsApi.md#subscriptionssampleleadsignaturegeneratedget) | **GET** /subscriptions/sample/lead.signature.generated | Receive a notification when a lead&#x27;s e-signature document is generated
*SubscriptionsApi* | [**subscriptionsSampleLeadSignatureOpenedGet**](docs/Api/SubscriptionsApi.md#subscriptionssampleleadsignatureopenedget) | **GET** /subscriptions/sample/lead.signature.opened | Receive a notification when a lead&#x27;s e-signature document is opened by the recipient
*SubscriptionsApi* | [**subscriptionsSampleLeadSignatureSignedGet**](docs/Api/SubscriptionsApi.md#subscriptionssampleleadsignaturesignedget) | **GET** /subscriptions/sample/lead.signature.signed | Receive a notification when a lead&#x27;s e-signature document is signed by the recipient
*SubscriptionsApi* | [**subscriptionsSampleLeadStatusUpdatedGet**](docs/Api/SubscriptionsApi.md#subscriptionssampleleadstatusupdatedget) | **GET** /subscriptions/sample/lead.status.updated | Receive a notification when a lead&#x27;s status is updated in this CRM, with the option to only receive a notification when a lead is moved to or from the status(es) specified here
*SubscriptionsApi* | [**subscriptionsSampleLeadUpdatedGet**](docs/Api/SubscriptionsApi.md#subscriptionssampleleadupdatedget) | **GET** /subscriptions/sample/lead.updated | Receive a notification when a lead&#x27;s campaign, status, group, or field values are updated in this CRM, with the option to only receive a notification when a lead is in the status(es) specified here
*SubscriptionsApi* | [**subscriptionsSampleResidualsLineitemAddedGet**](docs/Api/SubscriptionsApi.md#subscriptionssampleresidualslineitemaddedget) | **GET** /subscriptions/sample/residuals.lineitem.added | Receive a notification when a residuals line item is added
*SubscriptionsApi* | [**subscriptionsSampleResidualsReportPublishedGet**](docs/Api/SubscriptionsApi.md#subscriptionssampleresidualsreportpublishedget) | **GET** /subscriptions/sample/residuals.report.published | Receive a notification when a residuals report is published
*SubscriptionsApi* | [**subscriptionsSampleSubscriptionTestGet**](docs/Api/SubscriptionsApi.md#subscriptionssamplesubscriptiontestget) | **GET** /subscriptions/sample/subscription.test | Test payload for checking server response
*SubscriptionsApi* | [**subscriptionsSampleTicketChecklistUpdatedGet**](docs/Api/SubscriptionsApi.md#subscriptionssampleticketchecklistupdatedget) | **GET** /subscriptions/sample/ticket.checklist.updated | Receive a notification when a ticket&#x27;s checklist is updated
*SubscriptionsApi* | [**subscriptionsSampleTicketCommentEditedGet**](docs/Api/SubscriptionsApi.md#subscriptionssampleticketcommenteditedget) | **GET** /subscriptions/sample/ticket.comment.edited | Receive a notification when a ticket comment is edited
*SubscriptionsApi* | [**subscriptionsSampleTicketCommentedGet**](docs/Api/SubscriptionsApi.md#subscriptionssampleticketcommentedget) | **GET** /subscriptions/sample/ticket.commented | Receive a notification when a ticket comment is added
*SubscriptionsApi* | [**subscriptionsSampleTicketCreatedGet**](docs/Api/SubscriptionsApi.md#subscriptionssampleticketcreatedget) | **GET** /subscriptions/sample/ticket.created | Receive a notification when a ticket is created
*SubscriptionsApi* | [**subscriptionsSampleTicketResolvedGet**](docs/Api/SubscriptionsApi.md#subscriptionssampleticketresolvedget) | **GET** /subscriptions/sample/ticket.resolved | Receive a notification when a ticket is resolved
*SubscriptionsApi* | [**subscriptionsSampleTicketUpdatedGet**](docs/Api/SubscriptionsApi.md#subscriptionssampleticketupdatedget) | **GET** /subscriptions/sample/ticket.updated | Receive a notification when a ticket is updated
*SubscriptionsApi* | [**subscriptionsSampleTurboappApprovedGet**](docs/Api/SubscriptionsApi.md#subscriptionssampleturboappapprovedget) | **GET** /subscriptions/sample/turboapp.approved | Receive a notification when a merchant is approved
*SubscriptionsApi* | [**subscriptionsSampleTurboappDeclinedGet**](docs/Api/SubscriptionsApi.md#subscriptionssampleturboappdeclinedget) | **GET** /subscriptions/sample/turboapp.declined | Receive a notification when a merchant is declined
*SubscriptionsApi* | [**subscriptionsSampleTurboappSubmittedGet**](docs/Api/SubscriptionsApi.md#subscriptionssampleturboappsubmittedget) | **GET** /subscriptions/sample/turboapp.submitted | Receive a notification when a TurboApp is submitted to a processor
*SubscriptionsApi* | [**subscriptionsSampleTurboappUpdatedGet**](docs/Api/SubscriptionsApi.md#subscriptionssampleturboappupdatedget) | **GET** /subscriptions/sample/turboapp.updated | Receive a notification when the underwriting status is updated
*SubscriptionsApi* | [**subscriptionsSubscriptionIdDelete**](docs/Api/SubscriptionsApi.md#subscriptionssubscriptioniddelete) | **DELETE** /subscriptions/{subscriptionId} | Delete a subscription
*SubscriptionsApi* | [**subscriptionsSubscriptionIdGet**](docs/Api/SubscriptionsApi.md#subscriptionssubscriptionidget) | **GET** /subscriptions/{subscriptionId} | Return a subscription by its id
*SubscriptionsApi* | [**subscriptionsSubscriptionIdPatch**](docs/Api/SubscriptionsApi.md#subscriptionssubscriptionidpatch) | **PATCH** /subscriptions/{subscriptionId} | Update a subscription

## Documentation For Models

 - [Adjustments](docs/Model/Adjustments.md)
 - [AdjustmentsInner](docs/Model/AdjustmentsInner.md)
 - [AllOfChecklistUpdatedDataTicketsChecklistItems](docs/Model/AllOfChecklistUpdatedDataTicketsChecklistItems.md)
 - [AllOfChecklistUpdatedDataTicketsTicket](docs/Model/AllOfChecklistUpdatedDataTicketsTicket.md)
 - [AllOfLeadDeletedEventInfoDataLead](docs/Model/AllOfLeadDeletedEventInfoDataLead.md)
 - [AllOfLeadDeletedEventInfoDataLeadsItems](docs/Model/AllOfLeadDeletedEventInfoDataLeadsItems.md)
 - [AllOfLeadDocumentUploadedEventInfoDataLead](docs/Model/AllOfLeadDocumentUploadedEventInfoDataLead.md)
 - [AllOfLeadDocumentUploadedEventInfoDataLeadsItems](docs/Model/AllOfLeadDocumentUploadedEventInfoDataLeadsItems.md)
 - [AllOfLeadNoteAddedEventInfoDataLead](docs/Model/AllOfLeadNoteAddedEventInfoDataLead.md)
 - [AllOfLeadNoteAddedEventInfoDataLeadsItems](docs/Model/AllOfLeadNoteAddedEventInfoDataLeadsItems.md)
 - [AllOfLeadRestoredEventInfoDataLead](docs/Model/AllOfLeadRestoredEventInfoDataLead.md)
 - [AllOfLeadRestoredEventInfoDataLeadsItems](docs/Model/AllOfLeadRestoredEventInfoDataLeadsItems.md)
 - [AllOfLeadStatusUpdatedEventInfoDataLead](docs/Model/AllOfLeadStatusUpdatedEventInfoDataLead.md)
 - [AllOfLeadStatusUpdatedEventInfoDataLeadsItems](docs/Model/AllOfLeadStatusUpdatedEventInfoDataLeadsItems.md)
 - [AllOfLeadUpdatedEventInfoDataLead](docs/Model/AllOfLeadUpdatedEventInfoDataLead.md)
 - [AllOfLeadUpdatedEventInfoDataLeadsItems](docs/Model/AllOfLeadUpdatedEventInfoDataLeadsItems.md)
 - [AllOfTicketCommentedDataCommentsItems](docs/Model/AllOfTicketCommentedDataCommentsItems.md)
 - [AllOfTicketCreatedDataTicketsItems](docs/Model/AllOfTicketCreatedDataTicketsItems.md)
 - [AllOfTicketResolvedDataTicketsItems](docs/Model/AllOfTicketResolvedDataTicketsItems.md)
 - [AllOfTicketUpdatedDataTicketsItems](docs/Model/AllOfTicketUpdatedDataTicketsItems.md)
 - [AllOfbody15ChecklistItems](docs/Model/AllOfbody15ChecklistItems.md)
 - [AllOfinlineResponse200DataItems](docs/Model/AllOfinlineResponse200DataItems.md)
 - [ApiUpdated](docs/Model/ApiUpdated.md)
 - [ApiUpdatedData](docs/Model/ApiUpdatedData.md)
 - [ApiUpdatedDataDetails](docs/Model/ApiUpdatedDataDetails.md)
 - [ApiUpdatedHook](docs/Model/ApiUpdatedHook.md)
 - [ApplicationField](docs/Model/ApplicationField.md)
 - [ApplicationFieldDuplicates](docs/Model/ApplicationFieldDuplicates.md)
 - [ApplicationFieldInfo](docs/Model/ApplicationFieldInfo.md)
 - [ApplicationSubscription](docs/Model/ApplicationSubscription.md)
 - [Body](docs/Model/Body.md)
 - [Body1](docs/Model/Body1.md)
 - [Body10](docs/Model/Body10.md)
 - [Body11](docs/Model/Body11.md)
 - [Body12](docs/Model/Body12.md)
 - [Body13](docs/Model/Body13.md)
 - [Body14](docs/Model/Body14.md)
 - [Body15](docs/Model/Body15.md)
 - [Body16](docs/Model/Body16.md)
 - [Body17](docs/Model/Body17.md)
 - [Body18](docs/Model/Body18.md)
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
 - [BriefSmsTemplate](docs/Model/BriefSmsTemplate.md)
 - [BriefSourceInfo](docs/Model/BriefSourceInfo.md)
 - [BriefStatusInfo](docs/Model/BriefStatusInfo.md)
 - [BriefSubscriptionInfo](docs/Model/BriefSubscriptionInfo.md)
 - [BriefSubscriptionInfoOptions](docs/Model/BriefSubscriptionInfoOptions.md)
 - [BriefSubscriptionInfoOptionsLeadCreated](docs/Model/BriefSubscriptionInfoOptionsLeadCreated.md)
 - [BriefSubscriptionInfoOptionsLeadDocumentUploaded](docs/Model/BriefSubscriptionInfoOptionsLeadDocumentUploaded.md)
 - [BriefSubscriptionInfoOptionsLeadEmailReceived](docs/Model/BriefSubscriptionInfoOptionsLeadEmailReceived.md)
 - [BriefSubscriptionInfoOptionsLeadNoteAdded](docs/Model/BriefSubscriptionInfoOptionsLeadNoteAdded.md)
 - [BriefSubscriptionInfoOptionsLeadStatusUpdated](docs/Model/BriefSubscriptionInfoOptionsLeadStatusUpdated.md)
 - [BriefTabInfo](docs/Model/BriefTabInfo.md)
 - [BriefTicketChecklistInfo](docs/Model/BriefTicketChecklistInfo.md)
 - [BriefTicketComments](docs/Model/BriefTicketComments.md)
 - [BriefTicketInfo](docs/Model/BriefTicketInfo.md)
 - [BriefTicketTypeInfo](docs/Model/BriefTicketTypeInfo.md)
 - [BriefTicketTypeInfoAssignees](docs/Model/BriefTicketTypeInfoAssignees.md)
 - [BriefTicketUsersInfo](docs/Model/BriefTicketUsersInfo.md)
 - [BriefUserInfo](docs/Model/BriefUserInfo.md)
 - [BriefUserInfoWithClass](docs/Model/BriefUserInfoWithClass.md)
 - [CampaignActivity](docs/Model/CampaignActivity.md)
 - [CategoryWithStatuses](docs/Model/CategoryWithStatuses.md)
 - [Chargeback](docs/Model/Chargeback.md)
 - [CheckListRequest](docs/Model/CheckListRequest.md)
 - [ChecklistFullInfo](docs/Model/ChecklistFullInfo.md)
 - [ChecklistUpdated](docs/Model/ChecklistUpdated.md)
 - [ChecklistUpdatedData](docs/Model/ChecklistUpdatedData.md)
 - [ChecklistUpdatedDataTickets](docs/Model/ChecklistUpdatedDataTickets.md)
 - [ChecklistUpdatedHook](docs/Model/ChecklistUpdatedHook.md)
 - [CommentSubscriptionData](docs/Model/CommentSubscriptionData.md)
 - [DeletionActivity](docs/Model/DeletionActivity.md)
 - [Deposits](docs/Model/Deposits.md)
 - [DepositsInner](docs/Model/DepositsInner.md)
 - [DuplicateActivity](docs/Model/DuplicateActivity.md)
 - [File](docs/Model/File.md)
 - [FileLabel](docs/Model/FileLabel.md)
 - [FullLeadSubscription](docs/Model/FullLeadSubscription.md)
 - [FullLeadSubscriptionCampaign](docs/Model/FullLeadSubscriptionCampaign.md)
 - [FullLeadSubscriptionCategory](docs/Model/FullLeadSubscriptionCategory.md)
 - [FullLeadSubscriptionGroup](docs/Model/FullLeadSubscriptionGroup.md)
 - [FullLeadSubscriptionSource](docs/Model/FullLeadSubscriptionSource.md)
 - [FullLeadSubscriptionStatus](docs/Model/FullLeadSubscriptionStatus.md)
 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [InlineResponse2001](docs/Model/InlineResponse2001.md)
 - [InlineResponse20010](docs/Model/InlineResponse20010.md)
 - [InlineResponse20011](docs/Model/InlineResponse20011.md)
 - [InlineResponse20012](docs/Model/InlineResponse20012.md)
 - [InlineResponse20013](docs/Model/InlineResponse20013.md)
 - [InlineResponse20014](docs/Model/InlineResponse20014.md)
 - [InlineResponse20015](docs/Model/InlineResponse20015.md)
 - [InlineResponse20016](docs/Model/InlineResponse20016.md)
 - [InlineResponse20016Details](docs/Model/InlineResponse20016Details.md)
 - [InlineResponse20016Fields](docs/Model/InlineResponse20016Fields.md)
 - [InlineResponse20017](docs/Model/InlineResponse20017.md)
 - [InlineResponse20018](docs/Model/InlineResponse20018.md)
 - [InlineResponse20019](docs/Model/InlineResponse20019.md)
 - [InlineResponse2002](docs/Model/InlineResponse2002.md)
 - [InlineResponse20020](docs/Model/InlineResponse20020.md)
 - [InlineResponse20021](docs/Model/InlineResponse20021.md)
 - [InlineResponse20021Data](docs/Model/InlineResponse20021Data.md)
 - [InlineResponse20021Values](docs/Model/InlineResponse20021Values.md)
 - [InlineResponse20022](docs/Model/InlineResponse20022.md)
 - [InlineResponse20022Data](docs/Model/InlineResponse20022Data.md)
 - [InlineResponse20023](docs/Model/InlineResponse20023.md)
 - [InlineResponse20024](docs/Model/InlineResponse20024.md)
 - [InlineResponse20025](docs/Model/InlineResponse20025.md)
 - [InlineResponse20026](docs/Model/InlineResponse20026.md)
 - [InlineResponse20027](docs/Model/InlineResponse20027.md)
 - [InlineResponse20027Data](docs/Model/InlineResponse20027Data.md)
 - [InlineResponse20028](docs/Model/InlineResponse20028.md)
 - [InlineResponse20029](docs/Model/InlineResponse20029.md)
 - [InlineResponse2003](docs/Model/InlineResponse2003.md)
 - [InlineResponse20030](docs/Model/InlineResponse20030.md)
 - [InlineResponse20031](docs/Model/InlineResponse20031.md)
 - [InlineResponse20032](docs/Model/InlineResponse20032.md)
 - [InlineResponse20032Data](docs/Model/InlineResponse20032Data.md)
 - [InlineResponse20032Label](docs/Model/InlineResponse20032Label.md)
 - [InlineResponse20032Tab](docs/Model/InlineResponse20032Tab.md)
 - [InlineResponse20033](docs/Model/InlineResponse20033.md)
 - [InlineResponse20034](docs/Model/InlineResponse20034.md)
 - [InlineResponse20035](docs/Model/InlineResponse20035.md)
 - [InlineResponse20036](docs/Model/InlineResponse20036.md)
 - [InlineResponse20036Data](docs/Model/InlineResponse20036Data.md)
 - [InlineResponse20037](docs/Model/InlineResponse20037.md)
 - [InlineResponse20038](docs/Model/InlineResponse20038.md)
 - [InlineResponse20039](docs/Model/InlineResponse20039.md)
 - [InlineResponse2003Totals](docs/Model/InlineResponse2003Totals.md)
 - [InlineResponse2003TotalsAdjustments](docs/Model/InlineResponse2003TotalsAdjustments.md)
 - [InlineResponse2003TotalsDeposits](docs/Model/InlineResponse2003TotalsDeposits.md)
 - [InlineResponse2003TotalsPerCardType](docs/Model/InlineResponse2003TotalsPerCardType.md)
 - [InlineResponse2004](docs/Model/InlineResponse2004.md)
 - [InlineResponse20040](docs/Model/InlineResponse20040.md)
 - [InlineResponse20041](docs/Model/InlineResponse20041.md)
 - [InlineResponse20042](docs/Model/InlineResponse20042.md)
 - [InlineResponse20043](docs/Model/InlineResponse20043.md)
 - [InlineResponse20044](docs/Model/InlineResponse20044.md)
 - [InlineResponse20045](docs/Model/InlineResponse20045.md)
 - [InlineResponse20046](docs/Model/InlineResponse20046.md)
 - [InlineResponse20047](docs/Model/InlineResponse20047.md)
 - [InlineResponse20048](docs/Model/InlineResponse20048.md)
 - [InlineResponse20049](docs/Model/InlineResponse20049.md)
 - [InlineResponse2005](docs/Model/InlineResponse2005.md)
 - [InlineResponse20050](docs/Model/InlineResponse20050.md)
 - [InlineResponse20051](docs/Model/InlineResponse20051.md)
 - [InlineResponse20052](docs/Model/InlineResponse20052.md)
 - [InlineResponse20053](docs/Model/InlineResponse20053.md)
 - [InlineResponse20054](docs/Model/InlineResponse20054.md)
 - [InlineResponse20055](docs/Model/InlineResponse20055.md)
 - [InlineResponse20056](docs/Model/InlineResponse20056.md)
 - [InlineResponse20057](docs/Model/InlineResponse20057.md)
 - [InlineResponse20058](docs/Model/InlineResponse20058.md)
 - [InlineResponse20059](docs/Model/InlineResponse20059.md)
 - [InlineResponse2006](docs/Model/InlineResponse2006.md)
 - [InlineResponse20060](docs/Model/InlineResponse20060.md)
 - [InlineResponse2007](docs/Model/InlineResponse2007.md)
 - [InlineResponse2007Data](docs/Model/InlineResponse2007Data.md)
 - [InlineResponse2008](docs/Model/InlineResponse2008.md)
 - [InlineResponse2009](docs/Model/InlineResponse2009.md)
 - [InlineResponse401](docs/Model/InlineResponse401.md)
 - [InlineResponse403](docs/Model/InlineResponse403.md)
 - [InlineResponse404](docs/Model/InlineResponse404.md)
 - [InlineResponse405](docs/Model/InlineResponse405.md)
 - [InlineResponse500](docs/Model/InlineResponse500.md)
 - [LeadAppointment](docs/Model/LeadAppointment.md)
 - [LeadCreatedEventInfo](docs/Model/LeadCreatedEventInfo.md)
 - [LeadCreatedEventInfoData](docs/Model/LeadCreatedEventInfoData.md)
 - [LeadCreatedEventInfoHook](docs/Model/LeadCreatedEventInfoHook.md)
 - [LeadDeletedEventInfo](docs/Model/LeadDeletedEventInfo.md)
 - [LeadDeletedEventInfoData](docs/Model/LeadDeletedEventInfoData.md)
 - [LeadDeletedEventInfoHook](docs/Model/LeadDeletedEventInfoHook.md)
 - [LeadDocumentUploadedEventInfo](docs/Model/LeadDocumentUploadedEventInfo.md)
 - [LeadDocumentUploadedEventInfoData](docs/Model/LeadDocumentUploadedEventInfoData.md)
 - [LeadDocumentUploadedEventInfoHook](docs/Model/LeadDocumentUploadedEventInfoHook.md)
 - [LeadEmailReceivedEventInfo](docs/Model/LeadEmailReceivedEventInfo.md)
 - [LeadEmailReceivedEventInfoData](docs/Model/LeadEmailReceivedEventInfoData.md)
 - [LeadEmailReceivedEventInfoDataLead](docs/Model/LeadEmailReceivedEventInfoDataLead.md)
 - [LeadEmailReceivedEventInfoDataLeadAddress](docs/Model/LeadEmailReceivedEventInfoDataLeadAddress.md)
 - [LeadEmailReceivedEventInfoDataLeadEmail](docs/Model/LeadEmailReceivedEventInfoDataLeadEmail.md)
 - [LeadEmailReceivedEventInfoDataLeads](docs/Model/LeadEmailReceivedEventInfoDataLeads.md)
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
 - [LeadNoteAddedEventInfoHook](docs/Model/LeadNoteAddedEventInfoHook.md)
 - [LeadRestoredEventInfo](docs/Model/LeadRestoredEventInfo.md)
 - [LeadRestoredEventInfoData](docs/Model/LeadRestoredEventInfoData.md)
 - [LeadRestoredEventInfoHook](docs/Model/LeadRestoredEventInfoHook.md)
 - [LeadStatusUpdatedEventInfo](docs/Model/LeadStatusUpdatedEventInfo.md)
 - [LeadStatusUpdatedEventInfoData](docs/Model/LeadStatusUpdatedEventInfoData.md)
 - [LeadStatusUpdatedEventInfoHook](docs/Model/LeadStatusUpdatedEventInfoHook.md)
 - [LeadUpdatedEventInfo](docs/Model/LeadUpdatedEventInfo.md)
 - [LeadUpdatedEventInfoData](docs/Model/LeadUpdatedEventInfoData.md)
 - [LeadUpdatedEventInfoHook](docs/Model/LeadUpdatedEventInfoHook.md)
 - [LeadsFields](docs/Model/LeadsFields.md)
 - [LineItemAdded](docs/Model/LineItemAdded.md)
 - [LineItemAddedData](docs/Model/LineItemAddedData.md)
 - [LineItemAddedHook](docs/Model/LineItemAddedHook.md)
 - [LineItems](docs/Model/LineItems.md)
 - [LineItemsAgents](docs/Model/LineItemsAgents.md)
 - [LineItemsMerchant](docs/Model/LineItemsMerchant.md)
 - [LineItemsUser](docs/Model/LineItemsUser.md)
 - [Links](docs/Model/Links.md)
 - [LinksActivity](docs/Model/LinksActivity.md)
 - [MerchantRow](docs/Model/MerchantRow.md)
 - [Meta](docs/Model/Meta.md)
 - [MonetaryBatch](docs/Model/MonetaryBatch.md)
 - [MonetaryBatchTransactions](docs/Model/MonetaryBatchTransactions.md)
 - [OneOfbody11](docs/Model/OneOfbody11.md)
 - [OneOfbody12](docs/Model/OneOfbody12.md)
 - [ReportPublished](docs/Model/ReportPublished.md)
 - [ReportPublishedData](docs/Model/ReportPublishedData.md)
 - [ReportPublishedDataReports](docs/Model/ReportPublishedDataReports.md)
 - [ReportPublishedHook](docs/Model/ReportPublishedHook.md)
 - [ResidualTemplate](docs/Model/ResidualTemplate.md)
 - [ResidualTemplateAssigned](docs/Model/ResidualTemplateAssigned.md)
 - [ResidualTemplateAssignedTemplates](docs/Model/ResidualTemplateAssignedTemplates.md)
 - [ResidualsDetails](docs/Model/ResidualsDetails.md)
 - [Retrieval](docs/Model/Retrieval.md)
 - [ShortLeadSubscription](docs/Model/ShortLeadSubscription.md)
 - [SignatureGenerated](docs/Model/SignatureGenerated.md)
 - [SignatureGeneratedData](docs/Model/SignatureGeneratedData.md)
 - [SignatureGeneratedDataSignatures](docs/Model/SignatureGeneratedDataSignatures.md)
 - [SignatureGeneratedHook](docs/Model/SignatureGeneratedHook.md)
 - [SignatureOpened](docs/Model/SignatureOpened.md)
 - [SignatureOpenedHook](docs/Model/SignatureOpenedHook.md)
 - [SignatureSigned](docs/Model/SignatureSigned.md)
 - [SignatureSignedHook](docs/Model/SignatureSignedHook.md)
 - [SignatureSubscription](docs/Model/SignatureSubscription.md)
 - [SignatureSubscriptionSigners](docs/Model/SignatureSubscriptionSigners.md)
 - [SourceActivity](docs/Model/SourceActivity.md)
 - [StatusActivity](docs/Model/StatusActivity.md)
 - [SubscriptionCommentEdited](docs/Model/SubscriptionCommentEdited.md)
 - [SubscriptionCommentEditedHook](docs/Model/SubscriptionCommentEditedHook.md)
 - [SummaryResponse](docs/Model/SummaryResponse.md)
 - [TemplateRules](docs/Model/TemplateRules.md)
 - [TestSubscription](docs/Model/TestSubscription.md)
 - [TestSubscriptionData](docs/Model/TestSubscriptionData.md)
 - [TestSubscriptionHook](docs/Model/TestSubscriptionHook.md)
 - [Ticket](docs/Model/Ticket.md)
 - [TicketCommented](docs/Model/TicketCommented.md)
 - [TicketCommentedData](docs/Model/TicketCommentedData.md)
 - [TicketCommentedHook](docs/Model/TicketCommentedHook.md)
 - [TicketCreated](docs/Model/TicketCreated.md)
 - [TicketCreatedBlock](docs/Model/TicketCreatedBlock.md)
 - [TicketCreatedData](docs/Model/TicketCreatedData.md)
 - [TicketCreatedHook](docs/Model/TicketCreatedHook.md)
 - [TicketDetail](docs/Model/TicketDetail.md)
 - [TicketGroup](docs/Model/TicketGroup.md)
 - [TicketPriority](docs/Model/TicketPriority.md)
 - [TicketResolved](docs/Model/TicketResolved.md)
 - [TicketResolvedData](docs/Model/TicketResolvedData.md)
 - [TicketResolvedHook](docs/Model/TicketResolvedHook.md)
 - [TicketStatus](docs/Model/TicketStatus.md)
 - [TicketSubscriptionData](docs/Model/TicketSubscriptionData.md)
 - [TicketType](docs/Model/TicketType.md)
 - [TicketTypeRequest](docs/Model/TicketTypeRequest.md)
 - [TicketUpdated](docs/Model/TicketUpdated.md)
 - [TicketUpdatedData](docs/Model/TicketUpdatedData.md)
 - [TicketUpdatedHook](docs/Model/TicketUpdatedHook.md)
 - [TurboAppApproved](docs/Model/TurboAppApproved.md)
 - [TurboAppApprovedData](docs/Model/TurboAppApprovedData.md)
 - [TurboAppApprovedDataAccounts](docs/Model/TurboAppApprovedDataAccounts.md)
 - [TurboAppApprovedDataEntitlements](docs/Model/TurboAppApprovedDataEntitlements.md)
 - [TurboAppApprovedHook](docs/Model/TurboAppApprovedHook.md)
 - [TurboAppDeclined](docs/Model/TurboAppDeclined.md)
 - [TurboAppDeclinedData](docs/Model/TurboAppDeclinedData.md)
 - [TurboAppDeclinedDataAccounts](docs/Model/TurboAppDeclinedDataAccounts.md)
 - [TurboAppDeclinedDataActivationStatus](docs/Model/TurboAppDeclinedDataActivationStatus.md)
 - [TurboAppDeclinedDataComments](docs/Model/TurboAppDeclinedDataComments.md)
 - [TurboAppDeclinedHook](docs/Model/TurboAppDeclinedHook.md)
 - [TurboAppSubmited](docs/Model/TurboAppSubmited.md)
 - [TurboAppSubmitedData](docs/Model/TurboAppSubmitedData.md)
 - [TurboAppSubmitedDataApplications](docs/Model/TurboAppSubmitedDataApplications.md)
 - [TurboAppSubmitedHook](docs/Model/TurboAppSubmitedHook.md)
 - [TurboAppUpdated](docs/Model/TurboAppUpdated.md)
 - [TurboAppUpdatedData](docs/Model/TurboAppUpdatedData.md)
 - [TurboAppUpdatedDataAccounts](docs/Model/TurboAppUpdatedDataAccounts.md)
 - [TurboAppUpdatedDataActivationStatus](docs/Model/TurboAppUpdatedDataActivationStatus.md)
 - [TurboAppUpdatedDataComments](docs/Model/TurboAppUpdatedDataComments.md)
 - [TurboAppUpdatedHook](docs/Model/TurboAppUpdatedHook.md)
 - [TypeDetail](docs/Model/TypeDetail.md)
 - [UserListStructure](docs/Model/UserListStructure.md)
 - [UserStructure](docs/Model/UserStructure.md)

## Documentation For Authorization


## Token

- **Type**: API key
- **API key parameter name**: X-API-KEY
- **Location**: HTTP header


## Author

support@iriscrm.com


<?php
/**
 * LeadsApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * IRIS API
 *
 * # Introduction Welcome to IRIS’s API!  The API is organized around `REST`. All requests should be made over `SSL`.  All request and response bodies, including errors, are encoded in `JSON`. # Open API The Open API provides numerous functions to access or to update your CRM lead  and merchant  data using simple REST calls. ### You can use the E-Signature API to: - [Generate an e-signature document](https://iriscrm.com/api#/paths/~1leads~1{leadId}~1signatures~1{applicationId}~1generate/post) - [Send an e-signature document](https://iriscrm.com/api#/paths/~1leads~1{leadId}~1signatures~1{applicationId}~1send/post) - [Download an e-signature document](https://iriscrm.com/api#/paths/~1leads~1signatures~1{applicationId}~1download/get) - [Get a list of all lead e-signatures documents](https://iriscrm.com/api#/paths/~1leads~1{leadId}~1signatures/get) - [Get a list of available applications](https://iriscrm.com/api#/paths/~1leads~1applications/get) - [Create a new application field mapping](https://iriscrm.com/api#/paths/~1leads~1applications~1{appId}~1mappings/post) - [Get a list of available application field mappings](https://iriscrm.com/api#/paths/~1leads~1applications~1{appId}~1mappings/get) - [Get an application field mapping list](https://iriscrm.com/api#/paths/~1leads~1applications~1{appId}~1mappings~1{mapId}/get) - [Update an application field mapping](https://iriscrm.com/api#/paths/~1leads~1applications~1{appId}~1mappings~1{mapId}/patch) - [Delete an application field mapping](https://iriscrm.com/api#/paths/~1leads~1applications~1{appId}~1mappings~1{mapId}/delete) ### You can use the Helpdesk API to: - [Create a new ticket](https://iriscrm.com/api#/paths/~1helpdesk/post) - [Get a list of helpdesk tickets](https://iriscrm.com/api#/paths/~1helpdesk/get) - [Add a ticket comment](https://iriscrm.com/api#/paths/~1helpdesk~1{ticketId}~1comment/post) - [Get detailed ticked information](https://iriscrm.com/api#/paths/~1helpdesk~1{ticketId}/get) - [Update a ticket](https://iriscrm.com/api#/paths/~1helpdesk~1{ticketId}/patch) - [Delete a ticket](https://iriscrm.com/api#/paths/~1helpdesk~1{ticketId}/delete) - [Upload an attachment to a ticket, comment, checklist, or ticket type](https://iriscrm.com/api#/paths/~1helpdesk~1file/post) - [Download an attachment from a ticket](https://iriscrm.com/api#/paths/~1helpdesk~1{ticketId}~1download~1{attachmentId}/get) - [Create a new helpdesk ticket type](https://iriscrm.com/api#/paths/~1helpdesk~1types/post) - [Get a list of helpdesk ticket types](https://iriscrm.com/api#/paths/~1helpdesk~1types/get) - [Get details for a helpdesk ticket type](https://iriscrm.com/api#/paths/~1helpdesk~1types~1{typeId}/get) - [Update a helpdesk ticket type](https://iriscrm.com/api#/paths/~1helpdesk~1types~1{typeId}/patch) - [Delete a ticket type](https://iriscrm.com/api#/paths/~1helpdesk~1types~1{typeId}/delete) - [Download an attachment from a ticket type](https://iriscrm.com/api#/paths/~1helpdesk~1types~1{typeId}~1download~1{attachmentId}/get) - [Get a list of available users to notify and assign](https://iriscrm.com/api#/paths/~1helpdesk~1users/get) ### You can use the Lead API to: - [Create a lead](https://iriscrm.com/api#/paths/~1leads/post) - [Get a list of leads](https://iriscrm.com/api#/paths/~1leads/get) - [Get detailed lead information](https://iriscrm.com/api#/paths/~1leads~1{leadId}/get) - [Update a lead](https://iriscrm.com/api#/paths/~1leads~1{leadId}/patch) - [Create a new lead field](https://iriscrm.com/api#/paths/~1leads~1fields/post) - [Get a list of available lead fields](https://iriscrm.com/api#/paths/~1leads~1fields/get) - [Get a lead field](https://iriscrm.com/api#/paths/~1leads~1fields~1{fieldId}/get) - [Update a lead field](https://iriscrm.com/api#/paths/~1leads~1fields~1{fieldId}/patch) - [Update a lead field order position](https://iriscrm.com/api#/paths/~1leads~1fields~1{fieldId}~1order/patch) - [Create a lead field tab](https://iriscrm.com/api#/paths/~1leads~1fields~1tabs/post) - [Get a list of all lead field tabs](https://iriscrm.com/api#/paths/~1leads~1fields~1tabs/get) - [Get a lead field tab](https://iriscrm.com/api#/paths/~1leads~1fields~1tabs~1{tabId}/get) - [Update a lead field tab](https://iriscrm.com/api#/paths/~1leads~1fields~1tabs~1{tabId}/patch) - [Create a lead note](https://iriscrm.com/api#/paths/~1leads~1{leadId}~1notes/post) - [Get lead notes](https://iriscrm.com/api#/paths/~1leads~1{leadId}~1notes/get) - [Create a lead appointment](https://iriscrm.com/api#/paths/~1leads~1{leadId}~1appointments/post) - [Get lead appointments](https://iriscrm.com/api#/paths/~1leads~1{leadId}~1appointments/get) - [Populate PDF Document](https://iriscrm.com/api#/paths/~1leads~1{leadId}~1applications~1{applicationId}~1populate/post) - [Create a lead task](https://iriscrm.com/api#/paths/~1leads~1{leadId}~1tasks/post) - [Get lead tasks](https://iriscrm.com/api#/paths/~1leads~1{leadId}~1tasks/get) - [Assign a user](https://iriscrm.com/api#/paths/~1leads~1{leadId}~1users/post) - [Get a list of assigned users](https://iriscrm.com/api#/paths/~1leads~1{leadId}~1users/get) - [Unassign a user from a lead](https://iriscrm.com/api#/paths/~1leads~1{leadId}~1users~1{userId}/delete) - [Upload a document](https://iriscrm.com/api#/paths/~1leads~1{leadId}~1documents/post) - [Get a list of available documents](https://iriscrm.com/api#/paths/~1leads~1{leadId}~1documents/get) - [Get a list of available document labels](https://iriscrm.com/api#/paths/~1leads~1file_labels/get) - [Download a document](https://iriscrm.com/api#/paths/~1leads~1{leadId}~1documents~1{documentId}/get) - [Send an email to lead with template](https://iriscrm.com/api#/paths/~1leads~1{leadId}~1emails~1{templateId}/post) - [Get a list of email templates](https://iriscrm.com/api#/paths/~1leads~1emails~1templates/get) - [Download a mailbox email attachment](https://iriscrm.com/api#/paths/~1leads~1{leadId}~1mailbox~1{emailId}~1attachment~1{attachmentId}/get) - [Send an SMS to lead with selected SMS template](https://iriscrm.com/api#/paths/~1leads~1{leadId}~1sms~1{templateId}/post) - [Get list of SMS templates](https://iriscrm.com/api#/paths/~1leads~1sms~1templates/get) - [Get a list of all lead campaign activity](https://iriscrm.com/api#/paths/~1leads~1{leadId}~1activity~1campaign/get) - [Get a list of all lead deletion activity](https://iriscrm.com/api#/paths/~1leads~1{leadId}~1activity~1deletion/get) - [Get a list of all lead duplicate activity](https://iriscrm.com/api#/paths/~1leads~1{leadId}~1activity~1duplicates/get) - [Get a list of all lead links activity](https://iriscrm.com/api#/paths/~1leads~1{leadId}~1activity~1links/get) - [Get a list of all lead source activity](https://iriscrm.com/api#/paths/~1leads~1{leadId}~1activity~1source/get) - [Get a list of all lead status activity](https://iriscrm.com/api#/paths/~1leads~1{leadId}~1activity~1status/get) - [Get a list of available campaigns](https://iriscrm.com/api#/paths/~1leads~1campaigns/get) - [Get a list of available groups](https://iriscrm.com/api#/paths/~1leads~1groups/get) - [Get a list of available sources](https://iriscrm.com/api#/paths/~1leads~1sources/get) - [Get a list of available statuses](https://iriscrm.com/api#/paths/~1leads~1statuses/get) - [Get a list of available users](https://iriscrm.com/api#/paths/~1leads~1users/get)  ### You can use the Merchant API to: - [Get a list of merchants](https://iriscrm.com/api#/paths/~1merchants/get) - [Get detailed merchant information](https://iriscrm.com/api#/paths/~1merchants~1{merchantNumber}/get) - [Update an existing merchant](https://iriscrm.com/api#/paths/~1merchants~1{merchantNumber}/patch) - [Get a list of batches and transactions](https://iriscrm.com/api#/paths/~1merchants~1{merchantNumber}~1transactions/get) - [Get a list of chargebacks](https://iriscrm.com/api#/paths/~1merchants~1{merchantNumber}~1chargebacks/get) - [Get a list of retrievals](https://iriscrm.com/api#/paths/~1merchants~1{merchantNumber}~1retrievals/get) - [Get a list of statements](https://iriscrm.com/api#/paths/~1merchants~1{merchantNumber}~1statements/get) - [Download a statement](https://iriscrm.com/api#/paths/~1merchants~1{merchantNumber}~1statements~1{statementId}/get) ### You can use the Residuals API to: - [Get residuals summary data](https://iriscrm.com/api#/paths/~1residuals~1reports~1summary~1{year}~1{month}/get) - [Get residuals summary with merchant rows](https://iriscrm.com/api#/paths/~1residuals~1reports~1summary~1rows~1{processor_id}~1{year}~1{month}/get) - [Get residuals details with merchant rows](https://iriscrm.com/api#/paths/~1residuals~1reports~1details~1{processor_id}~1{year}~1{month}/get) - [Get residuals line items](https://iriscrm.com/api#/paths/~1residuals~1lineitems~1{year}~1{month}/get) - [Get residuals templates](https://iriscrm.com/api#/paths/~1residuals~1templates~1/get) - [Get a list of users with assigned residuals templates](https://iriscrm.com/api#/paths/~1residuals~1templates~1assigned~1{year}~1{month}/get)   # Generate an API token When you send an API request, you will need to include an API token in your request in order to authenticate your account.  The tokens are generated in the CRM by each user individually, and each user may create one or more tokens.  To generate a new API Token, open your user settings page by clicking on your username in the top-right corner, and clicking on the ** Settings ** link or you can use the link.  `[CLIENT URL HERE]/settings`  Then open the ** API Settings ** tab, click ** Create New API Token **, configure your token’s settings as needed, and click ** Add New Token **:  <img src='images/docs/mapi001.png'/>  Your new token will now be created and displayed in a popup window:  <img src='images/docs/mapi002.png'/>  Once the token is created, it will be shown in the list of available API Tokens where you can copy the token, update its settings, or delete it once it’s no longer needed:  <img src='images/docs/mapi003.png'/>  ** Note: ** The created tokens will inherit the user’s permissions to assigned merchants, leads, groups and processors. # Using the API Authentication to the API is performed via `X-API-KEY` header. Requests not properly authenticated will return a `401` error code.  `curl -X GET \"[CLIENT URL HERE]/api/v1/leads\" -H \"accept: application/json\" -H \"X-API-KEY: [YOURKEY]\"`  Note that all requests should be made over `SSL`. All request and response bodies, including errors, are encoded in JSON.  The API returns standard HTTP success or error status codes. In case of errors, additional information about what went wrong will be encoded in the response as JSON.  By default, you can make `120` requests per minute. Check the returned HTTP headers of any API request to see your current rate limit status.  Each GET \"List\" request will return 1,000 matching results.  A maximum of 120,000 results can be returned per minute using a pagination parameter in these requests. # Using the Subscription API API Subscriptions are used to send information about an event to a URL and trigger an API call. This is more efficient than doing scheduled API calls.  To create a subscription, use the API Settings page or send a request using the instructions in the Subscriptions section below.  All you need to know is the events you want to be subscribed for and the url to which the updates need to be sent.  To create subscriptions using our GUI open tab ** API Settings ** at ** `[CLIENT URL HERE]/settings` **:  <img src='images/docs/new-subscription.png'/> # Authentication Authenticate your account by including your secret key in API requests. Do not share your secret API keys in publicly accessible areas, client-side code, and so forth. Authentication to the API is performed via `X-API-KEY` header. Requests not properly authenticated will return a `401` error code. # Errors Our API returns standard `HTTP` success or error status codes. For errors, we will also include extra information about what went wrong encoded in the response as `JSON`. # Limiting You can make `120` requests per minute. If you will reach a limit you will get a `429: Too Many Attempts.` response from the server. Check the returned `HTTP` headers of any API request to see your current rate limit status. Headers description: * `X-RateLimit-Limit` tells you the max number of requests you're allowed to make within this application's time period * `X-RateLimit-Remaining` tells you how many requests you have left within this current time period * `Retry-After` tells you how many seconds to wait until you try again. (you'll only get `Retry-After` if you've hit the limit).   # PHP SDK  ### Installation and Usage  #### Availability  The IRIS CRM PHP SDK requires PHP version 5.5 or higher and the PHP cURL extension.  #### Composer  To install the bindings via [Composer](http://getcomposer.org/), please run:  ```bash  composer require iris-crm/php-sdk      ```   In your code, configure the environment and API credentials:  ```php require_once(__DIR__ . '/vendor/autoload.php');  use Swagger\\Client\\Configuration; use Swagger\\Client\\Api\\LeadsApi;  // Configure API key authorization $config = Configuration::getDefaultConfiguration() ->setApiKey('X-API-KEY', 'YOUR_API_KEY') ->setHost('https://iriscrm.com/api/v1/'); ``` Here’s an example of how to get a list of leads using an SDK. Swagger\\Client\\Api\\LeadsApi it's a SDK Class for Lead endpoints. ```php $apiInstance = new LeadsApi(null, $config);  $page        = 1; // int | Page number $sort_by     = \"created\"; // string | Sorting of leads by the field value $sort_dir    = \"asc\"; // string | Direction of sorting $group       = 2; // int | Filter leads by a group id $campaign    = 3; // int | Filter leads by a campaign id $source      = 4; // int | Filter leads by a source id $status      = 1; // int | Filter leads by a status id $category    = 1; // int | Filter leads by a status category id $user        = 12; // int | Filter leads by a user id $date_filter = \"created\"; // string | Filtering leads by a date range depends on this filter $start_date  = new \\DateTime(\"2018-10-20T19:20:30+01:00\"); // \\DateTime | Filter leads by a date in ISO 8601 format (Y-m-d\\\\TH:i:sP) $end_date    = new \\DateTime(\"2019-10-20T19:20:30+01:00\"); // \\DateTime | Filter leads by a date in ISO 8601 format (Y-m-d\\\\TH:i:sP) $email       = \"test@mail.com\"; // string | Filter leads by a email try {     $result = $apiInstance->leadsGet($page, $sort_by, $sort_dir, $group, $campaign, $source, $status, $category, $user, $date_filter, $start_date, $end_date, $email);     print_r($result); } catch (Exception $e) {     echo 'Exception when calling LeadsApi->leadsGet: ', $e->getMessage(), PHP_EOL; } ``` All parameters for leadsGet method is optional and can be skipped.  If you want skip some parameters - you need to set parameter to `null`  All available classes and methods you can get in \"API Endpoints\" section below. ### API Endpoints All URIs are relative to *https://iriscrm.com/api/v1*  Class | Method | HTTP Request | Description ------------ | ------------- | ------------- | ------------- *LeadsApi* | **leadsApplicationsAppIdMappingsGet** | **GET** /leads/applications/{appId}/mappings | Get a list of available application field mappings *LeadsApi* | **leadsApplicationsAppIdMappingsMapIdDelete** | **DELETE** /leads/applications/{appId}/mappings/{mapId} | Delete an application field mapping *LeadsApi* | **leadsApplicationsAppIdMappingsMapIdGet** | **GET** /leads/applications/{appId}/mappings/{mapId} | Get an application field mapping list *LeadsApi* | **leadsApplicationsAppIdMappingsMapIdPatch** | **PATCH** /leads/applications/{appId}/mappings/{mapId} | Update an application field mapping *LeadsApi* | **leadsApplicationsAppIdMappingsPost** | **POST** /leads/applications/{appId}/mappings | Create a new application field mapping *LeadsApi* | **leadsApplicationsGet** | **GET** /leads/applications | Get a list of available applications *LeadsApi* | **leadsCampaignsGet** | **GET** /leads/campaigns | Get a list of available campaigns *LeadsApi* | **leadsDynamicFieldsSchemaGet** | **GET** /leads/dynamic-fields-schema | Get a schema of lead fields *LeadsApi* | **leadsEmailsTemplatesGet** | **GET** /leads/emails/templates | Get a list of email templates *LeadsApi* | **leadsFieldsFieldIdGet** | **GET** /leads/fields/{fieldId} | Get a lead field *LeadsApi* | **leadsFieldsFieldIdOrderPatch** | **PATCH** /leads/fields/{fieldId}/order | Update a lead field order position *LeadsApi* | **leadsFieldsFieldIdPatch** | **PATCH** /leads/fields/{fieldId} | Update a lead field *LeadsApi* | **leadsFieldsGet** | **GET** /leads/fields | Get a list of available lead fields *LeadsApi* | **leadsFieldsPost** | **POST** /leads/fields | Create a new lead field *LeadsApi* | **leadsFieldsTabsGet** | **GET** /leads/fields/tabs | Get a list of all lead field tabs *LeadsApi* | **leadsFieldsTabsPost** | **POST** /leads/fields/tabs | Create a lead field tab *LeadsApi* | **leadsFieldsTabsTabIdGet** | **GET** /leads/fields/tabs/{tabId} | Get a lead field tab *LeadsApi* | **leadsFieldsTabsTabIdPatch** | **PATCH** /leads/fields/tabs/{tabId} | Update a lead field tab *LeadsApi* | **leadsGet** | **GET** /leads | Get a list of leads *LeadsApi* | **leadsGroupsGet** | **GET** /leads/groups | Get a list of available groups *LeadsApi* | **leadsLeadIdActivityCampaignGet** | **GET** /leads/{leadId}/activity/campaign | Get a list of all lead campaign activity *LeadsApi* | **leadsLeadIdActivityDeletionGet** | **GET** /leads/{leadId}/activity/deletion | Get a list of all lead deletion activity *LeadsApi* | **leadsLeadIdActivityDuplicatesGet** | **GET** /leads/{leadId}/activity/duplicates | Get a list of all lead duplicate activity *LeadsApi* | **leadsLeadIdActivityLinksGet** | **GET** /leads/{leadId}/activity/links | Get a list of all lead links activity *LeadsApi* | **leadsLeadIdActivitySourceGet** | **GET** /leads/{leadId}/activity/source | Get a list of all lead source activity *LeadsApi* | **leadsLeadIdActivityStatusGet** | **GET** /leads/{leadId}/activity/status | Get a list of all lead status activity *LeadsApi* | **leadsLeadIdApplicationsApplicationIdPopulatePost** | **POST** /leads/{leadId}/applications/{applicationId}/populate | Populate PDF Document *LeadsApi* | **leadsLeadIdAppointmentsGet** | **GET** /leads/{leadId}/appointments | Get lead appointments *LeadsApi* | **leadsLeadIdAppointmentsPost** | **POST** /leads/{leadId}/appointments | Create a lead appointment *LeadsApi* | **leadsLeadIdDocumentsDocumentIdGet** | **GET** /leads/{leadId}/documents/{documentId} | Download a document *LeadsApi* | **leadsLeadIdDocumentsGet** | **GET** /leads/{leadId}/documents | Get a list of available documents *LeadsApi* | **leadsLeadIdDocumentsPost** | **POST** /leads/{leadId}/documents | Upload a document *LeadsApi* | **leadsLeadIdEmailsTemplateIdPost** | **POST** /leads/{leadId}/emails/{templateId} | Send an email to lead with template *LeadsApi* | **leadsLeadIdGet** | **GET** /leads/{leadId} | Get detailed lead information *LeadsApi* | **leadsLeadIdMailboxEmailIdAttachmentAttachmentIdGet** | **GET** /leads/{leadId}/mailbox/{emailId}/attachment/{attachmentId} | Download a mailbox email attachment *LeadsApi* | **leadsLeadIdNotesGet** | **GET** /leads/{leadId}/notes | Get lead notes *LeadsApi* | **leadsLeadIdNotesPost** | **POST** /leads/{leadId}/notes | Create a lead note *LeadsApi* | **leadsLeadIdPatch** | **PATCH** /leads/{leadId} | Update a lead *LeadsApi* | **leadsLeadIdSignaturesApplicationIdGeneratePost** | **POST** /leads/{leadId}/signatures/{applicationId}/generate | Generate an e-signature document *LeadsApi* | **leadsLeadIdSignaturesApplicationIdSendPost** | **POST** /leads/{leadId}/signatures/{applicationId}/send | Send an e-signature document *LeadsApi* | **leadsLeadIdSignaturesGet** | **GET** /leads/{leadId}/signatures | Get a list of all lead e-signatures documents *LeadsApi* | **leadsLeadIdSmsTemplateIdPost** | **POST** /leads/{leadId}/sms/{templateId} | Send an SMS to lead with selected SMS template *LeadsApi* | **leadsLeadIdTasksGet** | **POST** /leads/{leadId}/tasks | Create a lead task *LeadsApi* | **leadsLeadIdUsersGet** | **GET** /leads/{leadId}/users | Get a list of assigned users *LeadsApi* | **leadsLeadIdUsersPost** | **POST** /leads/{leadId}/users | Assign a user *LeadsApi* | **leadsLeadIdUsersUserIdDelete** | **DELETE** /leads/{leadId}/users/{userId} | Unassign a user from a lead *LeadsApi* | **leadsPost** | **POST** /leads | Create a lead *LeadsApi* | **leadsSignaturesApplicationIdDownloadGet** | **GET** /leads/signatures/{applicationId}/download | Download an e-signature document *LeadsApi* | **leadsSmsTemplatesGet** | **GET** /leads/sms/templates | Get list of SMS templates *LeadsApi* | **leadsSourcesGet** | **GET** /leads/sources | Get a list of available sources *LeadsApi* | **leadsStatusesGet** | **GET** /leads/statuses | Get a list of available statuses *LeadsApi* | **leadsUsersGet** | **GET** /leads/users | Get a list of available users *MerchantsApi* | **merchantsGet** | **GET** /merchants | Get a list of merchants *MerchantsApi* | **merchantsMerchantNumberChargebacksGet** | **GET** /merchants/{merchantNumber}/chargebacks | Get a list of chargebacks *MerchantsApi* | **merchantsMerchantNumberGet** | **GET** /merchants/{merchantNumber} | Get detailed merchant information *MerchantsApi* | **merchantsMerchantNumberPatch** | **PATCH** /merchants/{merchantNumber} | Update an existing merchant *MerchantsApi* | **merchantsMerchantNumberRetrievalsGet** | **GET** /merchants/{merchantNumber}/retrievals | Get a list of retrievals *MerchantsApi* | **merchantsMerchantNumberStatementsGet** | **GET** /merchants/{merchantNumber}/statements | Get a list of statements *MerchantsApi* | **merchantsMerchantNumberStatementsStatementIdGet** | **GET** /merchants/{merchantNumber}/statements/{statementId} | Download a statement *MerchantsApi* | **merchantsMerchantNumberTransactionsGet** | **GET** /merchants/{merchantNumber}/transactions | Get a list of batches and transactions *SubscriptionsApi* | **subscriptionsGet** | **GET** /subscriptions | Return a list of subscriptions *SubscriptionsApi* | **subscriptionsPost** | **POST** /subscriptions | Create a subscription *SubscriptionsApi* | **subscriptionsSampleApiUpdatedGet** | **GET** /subscriptions/sample/api.updated | Data sample for the \\&quot;api.updated\\&quot; event *SubscriptionsApi* | **subscriptionsSampleApplicationCreatedGet** | **GET** /subscriptions/sample/turboapp.submitted | Data sample for the \\&quot;turboapp.submitted\\&quot; event *SubscriptionsApi* | **subscriptionsSampleApplicationUpdatedGet** | **GET** /subscriptions/sample/turboapp.updated | Data sample for the \\&quot;turboapp.updated\\&quot; event *SubscriptionsApi* | **subscriptionsSampleLeadCreatedGet** | **GET** /subscriptions/sample/lead.created | Data sample for the \\&quot;lead.created\\&quot; event *SubscriptionsApi* | **subscriptionsSampleLeadDeletedGet** | **GET** /subscriptions/sample/lead.deleted | Data sample for the \\&quot;lead.deleted\\&quot; event *SubscriptionsApi* | **subscriptionsSampleLeadDocumentUploadedGet** | **GET** /subscriptions/sample/lead.document.uploaded | Data sample for the \\&quot;lead.document.uploaded\\&quot; event *SubscriptionsApi* | **subscriptionsSampleLeadEmailReceivedGet** | **GET** /subscriptions/sample/lead.email.received | Data sample for the \\&quot;lead.email.received\\&quot; event *SubscriptionsApi* | **subscriptionsSampleLeadNoteAddedGet** | **GET** /subscriptions/sample/lead.note.added | Data sample for the \\&quot;lead.note.added\\&quot; event *SubscriptionsApi* | **subscriptionsSampleLeadRestoredGet** | **GET** /subscriptions/sample/lead.restored | Data sample for the \\&quot;lead.restored\\&quot; event *SubscriptionsApi* | **subscriptionsSampleLeadStatusUpdatedGet** | **GET** /subscriptions/sample/lead.status.updated | Data sample for the \\&quot;lead.status.updated\\&quot; event *SubscriptionsApi* | **subscriptionsSampleLeadUpdatedGet** | **GET** /subscriptions/sample/lead.updated | Data sample for the \\&quot;lead.updated\\&quot; event *SubscriptionsApi* | **subscriptionsSubscriptionIdDelete** | **DELETE** /subscriptions/{subscriptionId} | Delete a subscription *SubscriptionsApi* | **subscriptionsSubscriptionIdGet** | **GET** /subscriptions/{subscriptionId} | Return a subscription by its id *SubscriptionsApi* | **subscriptionsSubscriptionIdPatch** | **PATCH** /subscriptions/{subscriptionId} | Update a subscription # Change Log   ### 1.6.0 (2021-03-02)   #### Created:   * Added `Get pricing templates` endpoint **Link:** [#/paths/~1leads~1pricing_templates/get](https://iriscrm.com/api/#/paths/~1leads~1pricing_templates/get)       ### 1.5.20 (2021-02-12)   #### Updated:   * Added `filename` property to the `lead.document.uploaded` subscription response **Link:** [#/paths/~1subscriptions~1sample~1lead.document.uploaded/get](https://iriscrm.com/api/#/paths/~1subscriptions~1sample~1lead.document.uploaded/get)       ### 1.5.19 (2021-02-17)   #### Updated:   * Added deposits endpoint **Link:** [#/paths/~1merchants~1{merchantNumber}~1deposits~1{year}~1{month}/get](https://iriscrm.com/api/#/paths/~1merchants~1{merchantNumber}~1deposits~1{year}~1{month}/get)   * Added `authorization_code` property to the chargeback response **Link:** [#/paths/~1merchants~1{merchantNumber}~1chargebacks/get](https://iriscrm.com/api/#/paths/~1merchants~1{merchantNumber}~1chargebacks/get)       ### 1.5.18 (2021-01-14)   #### Updated:   * Added `id` and `invoice_number` properties to the `transactions` section of the transactions response **Link:** [#/paths/~1merchants~1{merchantNumber}~1transactions/get](https://iriscrm.com/api/#/paths/~1merchants~1{merchantNumber}~1transactions/get)       ### 1.5.16 (2020-12-11)   #### Updated:   * Renamed task priority from \"Low\" to \"Normal\" **Link:** [#/paths/~1leads~1{leadId}~1tasks/post](https://iriscrm.com/api/#/paths/~1leads~1{leadId}~1tasks/post)       ### 1.5.15 (2021-01-18)   #### Updated:   * Added `due` value for `sort_by` and `date_filter` parameters on the get a list of Tickets endpoint **Link:** [#/paths/~1helpdesk/get](https://iriscrm.com/api/#/paths/~1helpdesk/get)   * Added `due` parameter on the get a list of Tickets endpoint **Link:** [#/paths/~1helpdesk/get](https://iriscrm.com/api/#/paths/~1helpdesk/get)   * Added `due` parameter on the get detailed information of Tickets endpoint **Link:** [#/paths/~1helpdesk~1{ticketId}/get](https://iriscrm.com/api/#/paths/~1helpdesk~1{ticketId}/get)   * Added `only_business_days` parameter on the get a list of Tickets endpoint **Link:** [#/paths/~1helpdesk/get](https://iriscrm.com/api/#/paths/~1helpdesk/get)   * Added `only_business_days` parameter on the get detailed information of Tickets endpoint **Link:** [#/paths/~1helpdesk~1{ticketId}/get](https://iriscrm.com/api/#/paths/~1helpdesk~1{ticketId}/get)   * Added `only_business_days` property to the Ticket on the Ticket create endpoint **Link:** [#/paths/~1helpdesk/post](https://iriscrm.com/api/#/paths/~1helpdesk/post)   * Added `only_business_days` property to the Ticket on the Ticket update endpoint **Link:** [#/paths/~1helpdesk~1{ticketId}/patch](https://iriscrm.com/api/#/paths/~1helpdesk~1{ticketId}/patch)   * Added `only_business_days` property to the Ticket Type on the get a list of Ticket Type endpoint **Link:** [#/paths/~1helpdesk~1types/get](https://iriscrm.com/api/#/paths/~1helpdesk~1types/get)   * Added `only_business_days` parameter on the get detailed information of Ticket Type endpoint **Link:** [#/paths/~1helpdesk~1types~1{typeId}/get](https://iriscrm.com/api/#/paths/~1helpdesk~1types~1{typeId}/get)   * Added `only_business_days` property to the Ticket Type on the Ticket Type create endpoint **Link:** [#/paths/~1helpdesk~1types/post](https://iriscrm.com/api/#/paths/~1helpdesk~1types/post)   * Added `only_business_days` property to the Ticket Type on the Ticket Type update endpoint **Link:** [#/paths/~1helpdesk~1types~1{typeId}/patch](https://iriscrm.com/api/#/paths/~1helpdesk~1types~1{typeId}/patch)   * Added `attached_files` property to the Ticket on the Ticket create endpoint **Link:** [#/paths/~1helpdesk/post](https://iriscrm.com/api/#/paths/~1helpdesk/post)   * Added `attached_files` property to the Ticket Checklist on the Ticket create endpoint **Link:** [#/paths/~1helpdesk/post](https://iriscrm.com/api/#/paths/~1helpdesk/post)   * Added `attached_files` property to the Ticket Checklist on the Ticket update endpoint **Link:** [#/paths/~1helpdesk~1{ticketId}/patch](https://iriscrm.com/api/#/paths/~1helpdesk~1{ticketId}/patch)   * Added `attached_files` property to the Ticket Comment on the Comment create endpoint **Link:** [#/paths/~1helpdesk~1{ticketId}~1comment/post](https://iriscrm.com/api/#/paths/~1helpdesk~1{ticketId}~1comment/post)       ### 1.5.14 (2020-11-26)   #### Updated:   * Added `template_id`, `completed_by`, and `completed_at` properties to the `checklist` section of the ticket create response **Link:** [#/paths/~1helpdesk/post](https://iriscrm.com/api/#/paths/~1helpdesk/post)   * Added `template_id`, `completed_by`, and `completed_at` properties to the `checklist` section of ticket details response **Link:** [#/paths/~1helpdesk~1{ticketId}/get](https://iriscrm.com/api/#/paths/~1helpdesk~1{ticketId}/get)   * Added `template_id`, `completed_by`, and `completed_at` properties to the `checklist` section of ticket update response **Link:** [#/paths/~1helpdesk~1{ticketId}/patch](https://iriscrm.com/api/#/paths/~1helpdesk~1{ticketId}/patch)   * Added `template_id`, `completed_by`, and `completed_at` properties to the `checklist` section of ticket's checklist updated subscription response **Link:** [#/paths/~1subscriptions~1sample~1ticket.checklist.updated/get](https://iriscrm.com/api/#/paths/~1subscriptions~1sample~1ticket.checklist.updated/get)       ### 1.5.13 (2020-11-20)   #### Updated:   * Added `priority` property to the Ticket Type on the Ticket Type create endpoint **Link:** [#/paths/~1helpdesk~1types/post](https://iriscrm.com/api/#/paths/~1helpdesk~1types/post)   * Added `priority` property to the Ticket Type on the Ticket Type update endpoint **Link:** [#/paths/~1helpdesk~1types~1{typeId}/patch](https://iriscrm.com/api/#/paths/~1helpdesk~1types~1{typeId}/patch)       ### 1.5.12 (2020-11-02)   #### Updated:   * Changed `due_date` property to the datetime format on the ticket create endpoint **Link:** [#/paths/~1helpdesk/post](https://iriscrm.com/api/#/paths/~1helpdesk/post)   * Changed `due_date` property to the datetime format on the ticket update endpoint **Link:** [#/paths/~1helpdesk~1{ticketId}/patch](https://iriscrm.com/api/#/paths/~1helpdesk~1{ticketId}/patch)       ### 1.5.11 (2020-10-20)   #### Updated:   * Added `notify_assigned_users` property for ticket creation payload. **Link:** [#/paths/~1helpdesk/post](https://iriscrm.com/api/#/paths/~1helpdesk/post)       ### 1.5.10 (2020-10-19)   #### Updated:   * Added `group_id` property for ticket creation payload. **Link:** [#/paths/~1helpdesk/post](https://iriscrm.com/api/#/paths/~1helpdesk/post)   * Added `group_id` property for ticket update payload. **Link:** [#/paths/~1helpdesk~1{ticketId}/patch](https://iriscrm.com/api/#/paths/~1helpdesk~1{ticketId}/patch)       ### 1.5.9 (2020-11-02)   #### Updated:   * Added `new_files` property for ticket update payload. **Link:** [#/paths/~1helpdesk~1{ticketId}/patch](https://iriscrm.com/api/#/paths/~1helpdesk~1{ticketId}/patch)   * Added `new_files` property for ticket type update payload. **Link:** [#/paths/~1helpdesk~1types~1{typeId}/patch](https://iriscrm.com/api/#/paths/~1helpdesk~1types~1{typeId}/patch)       ### 1.5.8 (2020-10-20)   #### Updated:   * Added `preview_images` property for ticket request and response data. **Link:** [#/paths/~1helpdesk/post](https://iriscrm.com/api/#/paths/~1helpdesk/post)   * Added `preview_images` property for ticket comment request and response data. **Link:** [#/paths/~1helpdesk~1{ticketId}~1comment/post](https://iriscrm.com/api/#/paths/~1helpdesk~1{ticketId}~1comment/post)   * Added `preview_images` property for ticket and ticket comment properties. **Link:** [#/paths/~1helpdesk~1{ticketId}~1comment/post](https://iriscrm.com/api/#/paths/~1helpdesk~1{ticketId}~1comment/post)   * Added `preview_images` property for ticket request and response data. **Link:** [#/paths/~1helpdesk~1{ticketId}/patch](https://iriscrm.com/api/#/paths/~1helpdesk~1{ticketId}/patch)       ### 1.5.7 (2020-10-05)   #### Updated:   * Added `notify_assigned_users` property for ticket creation payload. **Link:** [#/paths/~1helpdesk/post](https://iriscrm.com/api/#/paths/~1helpdesk/post)       ### 1.5.5 (2020-07-23)   #### Updated:   * Added endpoint with file labels what can be used for document upload. **Link:** [#/paths/~1leads~1file_labels/get](https://iriscrm.com/api/#/paths/~1leads~1file_labels/get)       ### 1.5.5 (2020-10-20)   #### Updated:   * Added endpoint with file labels what can be used for document upload. **Link:** [#/paths/~1helpdesk~1{ticketId}~1assignments/get](https://iriscrm.com/api/#/paths/~1helpdesk~1{ticketId}~1assignments/get)       ### 1.5.4 (2020-07-13)   #### Updated:   * Added `files_count` property to the ticket create endpoint response. **Link:** [#/paths/~1helpdesk/post](https://iriscrm.com/api/#/paths/~1helpdesk/post)   * Added `files_count` property to the response of ticket list endpoint. **Link:** [#/paths/~1helpdesk/get](https://iriscrm.com/api/#/paths/~1helpdesk/get)   * Added `files_count` property to the response of ticket detailed information endpoint. **Link:** [#/paths/~1helpdesk~1{ticketId}/get](https://iriscrm.com/api/#/paths/~1helpdesk~1{ticketId}/get)   * Added `files_count` property to the ticket update endpoint response. **Link:** [#/paths/~1helpdesk~1{ticketId}/patch](https://iriscrm.com/api/#/paths/~1helpdesk~1{ticketId}/patch)   * Added `files_count` property to the ticket.created subscription data. **Link:** [#/paths/~1subscriptions~1sample~1ticket.created/get](https://iriscrm.com/api/#/paths/~1subscriptions~1sample~1ticket.created/get)   * Added `files_count` property to the ticket.updated subscription data. **Link:** [#/paths/~1subscriptions~1sample~1ticket.updated/get](https://iriscrm.com/api/#/paths/~1subscriptions~1sample~1ticket.updated/get)   * Added `files_count` property to the ticket.resolved subscription data. **Link:** [#/paths/~1subscriptions~1sample~1ticket.resolved/get](https://iriscrm.com/api/#/paths/~1subscriptions~1sample~1ticket.resolved/get)   * Added `files_count` property to the ticket.checklist.updated subscription data. **Link:** [#/paths/~1subscriptions~1sample~1ticket.checklist.updated/get](https://iriscrm.com/api/#/paths/~1subscriptions~1sample~1ticket.checklist.updated/get)       ### 1.5.3 (2020-07-06)   #### Updated:   * Added `search` filter to the tickets list endpoint. **Link:** [#/paths/~1helpdesk/get](https://iriscrm.com/api/#/paths/~1helpdesk/get)       ### 1.5.2 (2020-07-10)   #### Updated:   * Added `due_date` property to the ticket create endpoint request and response. **Link:** [#/paths/~1helpdesk/post](https://iriscrm.com/api/#/paths/~1helpdesk/post)   * Added `due_date` property to the response of ticket list endpoint. **Link:** [#/paths/~1helpdesk/get](https://iriscrm.com/api/#/paths/~1helpdesk/get)   * Added `due_date` property to the response of ticket detailed information endpoint. **Link:** [#/paths/~1helpdesk~1{ticketId}/get](https://iriscrm.com/api/#/paths/~1helpdesk~1{ticketId}/get)   * Added `due_date` property to the ticket update endpoint request and response. **Link:** [#/paths/~1helpdesk~1{ticketId}/patch](https://iriscrm.com/api/#/paths/~1helpdesk~1{ticketId}/patch)   * Added `due_date` property to the ticket.created subscription data. **Link:** [#/paths/~1subscriptions~1sample~1ticket.created/get](https://iriscrm.com/api/#/paths/~1subscriptions~1sample~1ticket.created/get)   * Added `due_date` property to the ticket.updated subscription data. **Link:** [#/paths/~1subscriptions~1sample~1ticket.updated/get](https://iriscrm.com/api/#/paths/~1subscriptions~1sample~1ticket.updated/get)   * Added `due_date` property to the ticket.resolved subscription data. **Link:** [#/paths/~1subscriptions~1sample~1ticket.resolved/get](https://iriscrm.com/api/#/paths/~1subscriptions~1sample~1ticket.resolved/get)   * Added `due_date` property to the ticket.checklist.updated subscription data. **Link:** [#/paths/~1subscriptions~1sample~1ticket.checklist.updated/get](https://iriscrm.com/api/#/paths/~1subscriptions~1sample~1ticket.checklist.updated/get)       ### 1.5.1 (2020-08-10)   #### Created:   * Added a Residuals API to work with your residuals reports. **Link:** [#tag/Residuals](https://iriscrm.com/api/#tag/Residuals)       ### 1.4.9 (2020-06-26)   #### Updated:   * Added `hide_resolved` filter to the tickets list endpoint. **Link:** [#/paths/~1helpdesk/get](https://iriscrm.com/api/#/paths/~1helpdesk/get)       ### 1.4.8 (2020-06-12)   #### Updated:   * Added `set_for`, `set_at`, `set_by`, `modified`, `modified_by`, `date_end`, `confirmed_by`, `seen_by`, `rescheduled`, `rescheduled_by`, and `rescheduled_count` properties to the lead appointments endpoint response. **Link:** [#/paths/~1leads~1{leadId}~1appointments/get](https://iriscrm.com/api/#/paths/~1leads~1{leadId}~1appointments/get)   * Added `set_for`, `set_by`, `modified_by`, `confirmed_by`, `seen_by`, `rescheduled_by`, `rescheduled_count`,  `date_filter`, `start_date`, `end_date`, and `done` filters to the lead appointments endpoint. **Link:** [#/paths/~1leads~1{leadId}~1appointments/get](https://iriscrm.com/api/#/paths/~1leads~1{leadId}~1appointments/get)   * Added sorting to the lead appointments endpoint. **Link:** [#/paths/~1leads~1{leadId}~1appointments/get](https://iriscrm.com/api/#/paths/~1leads~1{leadId}~1appointments/get)   * Marked `user` property as deprecated on the lead appointments endpoint response. **Link:** [#/paths/~1leads~1{leadId}~1appointments/get](https://iriscrm.com/api/#/paths/~1leads~1{leadId}~1appointments/get)       ### 1.4.7 (2020-05-13)   #### Updated:   * Added `old_status_id` to lead status activity endpoint. **Link:** [#/paths/~1leads~1{leadId}~1activity~1status/get](https://iriscrm.com/api/#/paths/~1leads~1{leadId}~1activity~1status/get)   * Added `new_status_id` to lead status activity endpoint. **Link:** [#/paths/~1leads~1{leadId}~1activity~1status/get](https://iriscrm.com/api/#/paths/~1leads~1{leadId}~1activity~1status/get)       ### 1.4.6 (2020-05-01)   #### Created:   * Added `lead.signature.generated` subscription endpoint. **Link:** [#/paths/~1subscriptions~1sample~1lead.signature.generated/get](https://iriscrm.com/api/#/paths/~1subscriptions~1sample~1lead.signature.generated/get)   * Added `lead.signature.opened` subscription endpoint **Link:** [#/paths/~1subscriptions~1sample~1lead.signature.opened/get](https://iriscrm.com/api/#/paths/~1subscriptions~1sample~1lead.signature.opened/get)   * Added `lead.signature.signed` subscription endpoint **Link:** [#/paths/~1subscriptions~1sample~1lead.signature.signed/get](https://iriscrm.com/api/#/paths/~1subscriptions~1sample~1lead.signature.signed/get)     #### Updated:   * Added `createdAt` and `createdBy` properties to the `lead.updated` subscription endpoint **Link:** [#/paths/~1subscriptions~1sample~1lead.updated/get](https://iriscrm.com/api/#/paths/~1subscriptions~1sample~1lead.updated/get)   * Added `email`, `contact`, `phone` and `address` properties to the `lead.deleted` subscription endpoint **Link:** [#/paths/~1subscriptions~1sample~1lead.deleted/get](https://iriscrm.com/api/#/paths/~1subscriptions~1sample~1lead.deleted/get)   * Added `email`, `contact`, `phone` and `address` properties to the `lead.restored` subscription endpoint **Link:** [#/paths/~1subscriptions~1sample~1lead.restored/get](https://iriscrm.com/api/#/paths/~1subscriptions~1sample~1lead.restored/get)   * Added `createdAt` and `createdBy` properties to the `lead.status.updated` subscription endpoint **Link:** [#/paths/~1subscriptions~1sample~1lead.status.updated/get](https://iriscrm.com/api/#/paths/~1subscriptions~1sample~1lead.status.updated/get)       ### 1.4.5 (2020-04-21)   #### Updated:   * Added `files` property to the ticket creation details endpoint response. **Link:** [#/paths/~1helpdesk/post](https://iriscrm.com/api/#/paths/~1helpdesk/post)   * Added `file` property for each checklist item in the ticket creation details endpoint response. **Link:** [#/paths/~1helpdesk/post](https://iriscrm.com/api/#/paths/~1helpdesk/post)   * Added `files` property to the Helpdesk tickets details endpoint. **Link:** [#/paths/~1helpdesk~1{ticketId}/get](https://iriscrm.com/api/#/paths/~1helpdesk~1{ticketId}/get)   * Added `files` property for each comment in the Helpdesk tickets details endpoint. **Link:** [#/paths/~1helpdesk~1{ticketId}/get](https://iriscrm.com/api/#/paths/~1helpdesk~1{ticketId}/get)   * Added `file` property for each checklist item in the Helpdesk tickets details endpoint. **Link:** [#/paths/~1helpdesk~1{ticketId}/get](https://iriscrm.com/api/#/paths/~1helpdesk~1{ticketId}/get)   * Added `files` property to the Helpdesk ticket update endpoint. **Link:** [#/paths/~1helpdesk~1{ticketId}/patch](https://iriscrm.com/api/#/paths/~1helpdesk~1{ticketId}/patch)   * Added `files` property for each comment in the Helpdesk ticket update endpoint. **Link:** [#/paths/~1helpdesk~1{ticketId}/patch](https://iriscrm.com/api/#/paths/~1helpdesk~1{ticketId}/patch)   * Added `file` property for each checklist item in the Helpdesk ticket update endpoint **Link:** [#/paths/~1helpdesk~1{ticketId}/patch](https://iriscrm.com/api/#/paths/~1helpdesk~1{ticketId}/patch)   * Added `file` property for each checklist item in the ticket type creation details endpoint response. **Link:** [#/paths/~1helpdesk~1types/post](https://iriscrm.com/api/#/paths/~1helpdesk~1types/post)   * Added `file` property for each checklist item on the ticket type endpoint. **Link:** [#/paths/~1helpdesk~1types~1{typeId}/get](https://iriscrm.com/api/#/paths/~1helpdesk~1types~1{typeId}/get)   * Added `file` property for each checklist item on the ticket type update endpoint. **Link:** [#/paths/~1helpdesk~1types~1{typeId}/patch](https://iriscrm.com/api/#/paths/~1helpdesk~1types~1{typeId}/patch)   * Added `files` property for ticket created subscription. **Link:** [#/paths/~1subscriptions~1sample~1ticket.created/get](https://iriscrm.com/api/#/paths/~1subscriptions~1sample~1ticket.created/get)   * Added `files` property for ticket updated subscription. **Link:** [#/paths/~1subscriptions~1sample~1ticket.updated/get](https://iriscrm.com/api/#/paths/~1subscriptions~1sample~1ticket.updated/get)   * Added `files` property for ticket resolved subscription. **Link:** [#/paths/~1subscriptions~1sample~1ticket.resolved/get](https://iriscrm.com/api/#/paths/~1subscriptions~1sample~1ticket.resolved/get)   * Added `files` property for ticket commented subscription. **Link:** [#/paths/~1subscriptions~1sample~1ticket.commented/get](https://iriscrm.com/api/#/paths/~1subscriptions~1sample~1ticket.commented/get)   * Added `files` property for ticket checklist updated subscription. **Link:** [#/paths/~1subscriptions~1sample~1ticket.checklist.updated/get](https://iriscrm.com/api/#/paths/~1subscriptions~1sample~1ticket.checklist.updated/get)   * Added `file` property for each checklist item on checklist updated subscription. **Link:** [#/paths/~1subscriptions~1sample~1ticket.checklist.updated/get](https://iriscrm.com/api/#/paths/~1subscriptions~1sample~1ticket.checklist.updated/get)     #### Created:   * Added endpoint for download attachments from Ticket Type **Link:** [#/paths/~1helpdesk~1types~1{typeId}~1download~1{attachmentId}/get](https://iriscrm.com/api/#/paths/~1helpdesk~1types~1{typeId}~1download~1{attachmentId}/get)       ### 1.4.4 (2020-04-02)   #### Updated:   * Added `resolver` filter to the Helpdesk tickets endpoint. **Link:** [#/paths/~1helpdesk/get](https://iriscrm.com/api/#/paths/~1helpdesk/get)       ### 1.4.3 (2020-04-01)   #### Updated:   * Added `status_updated` option for `date_filter` filter to the Helpdesk tickets endpoint. **Link:** [#/paths/~1helpdesk/get](https://iriscrm.com/api/#/paths/~1helpdesk/get)       ### 1.4.2 (2020-03-27)   #### Updated:   * Added `lid` filter to the Helpdesk tickets endpoint. **Link:** [#/paths/~1helpdesk/get](https://iriscrm.com/api/#/paths/~1helpdesk/get)   * Added `mid` filter to the Helpdesk tickets endpoint. **Link:** [#/paths/~1helpdesk/get](https://iriscrm.com/api/#/paths/~1helpdesk/get)       ### 1.4.1 (2020-03-20)   #### Updated:   * Added `hash` and `url` properties to the 'Send an e-signature document' endpoint. **Link:** [#/paths/~1leads~1{leadId}~1signatures~1{applicationId}~1send/post](https://iriscrm.com/api/#/paths/~1leads~1{leadId}~1signatures~1{applicationId}~1send/post)       ### 1.4.0 (2020-03-05)   #### Updated:   * Added `assigned_users`, `lead_url` properties to the subscriptions response for the `lead.created` subscription. **Link:** [#/paths/~1subscriptions~1sample~1lead.created/get](https://iriscrm.com/api/#/paths/~1subscriptions~1sample~1lead.created/get)   * Added `assigned_users`, `lead_url` properties to the subscriptions response for the `lead.updated` subscription. **Link:** [#/paths/~1subscriptions~1sample~1lead.updated/get](https://iriscrm.com/api/#/paths/~1subscriptions~1sample~1lead.updated/get)   * Added `assigned_users`, `lead_url` properties to the subscriptions response for the `lead.deleted` subscription. **Link:** [#/paths/~1subscriptions~1sample~1lead.deleted/get](https://iriscrm.com/api/#/paths/~1subscriptions~1sample~1lead.deleted/get)   * Added `assigned_users`, `lead_url` properties to the subscriptions response for the `lead.restored` subscription. **Link:** [#/paths/~1subscriptions~1sample~1lead.restored/get](https://iriscrm.com/api/#/paths/~1subscriptions~1sample~1lead.restored/get)   * Added `assigned_users`, `lead_url` properties to the subscriptions response for the `lead.status.updated` subscription. **Link:** [#/paths/~1subscriptions~1sample~1lead.status.updated/get](https://iriscrm.com/api/#/paths/~1subscriptions~1sample~1lead.status.updated/get)   * Added `assigned_users`, `lead_url` properties to the subscriptions response for the `lead.note.added` subscription. **Link:** [#/paths/~1subscriptions~1sample~1lead.note.added/get](https://iriscrm.com/api/#/paths/~1subscriptions~1sample~1lead.note.added/get)   * Added `assigned_users`, `lead_url` properties to the subscriptions response for the `lead.document.uploaded` subscription. **Link:** [#/paths/~1subscriptions~1sample~1lead.document.uploaded/get](https://iriscrm.com/api/#/paths/~1subscriptions~1sample~1lead.document.uploaded/get)   * Added `assigned_users`, `lead_url` properties to the subscriptions response for the `lead.email.received` subscription. **Link:** [#/paths/~1subscriptions~1sample~1lead.email.received/get](https://iriscrm.com/api/#/paths/~1subscriptions~1sample~1lead.email.received/get)   * Added `ticket_url` and `assigned_users` properties to the subscriptions response for the `ticket.created` subscription. **Link:** [#/paths/~1subscriptions~1sample~1ticket.created/get](https://iriscrm.com/api/#/paths/~1subscriptions~1sample~1ticket.created/get)   * Added `ticket_url` and `assigned_users` properties to the subscriptions response for the `ticket.updated` subscription. **Link:** [#/paths/~1subscriptions~1sample~1ticket.updated/get](https://iriscrm.com/api/#/paths/~1subscriptions~1sample~1ticket.updated/get)   * Added `ticket_url` and `assigned_users` properties to the subscriptions response for the `ticket.resolved` subscription. **Link:** [#/paths/~1subscriptions~1sample~1ticket.resolved/get](https://iriscrm.com/api/#/paths/~1subscriptions~1sample~1ticket.resolved/get)   * Added `ticket_url` and `assigned_users` properties to the subscriptions response for the `ticket.commented` subscription. **Link:** [#/paths/~1subscriptions~1sample~1ticket.commented/get](https://iriscrm.com/api/#/paths/~1subscriptions~1sample~1ticket.commented/get)   * Added `ticket_url` and `assigned_users` properties to the subscriptions response for the `ticket.checklist.updated` subscription. **Link:** [#/paths/~1subscriptions~1sample~1ticket.checklist.updated/get](https://iriscrm.com/api/#/paths/~1subscriptions~1sample~1ticket.checklist.updated/get)   * Added `application_url`, `identifier` and `lid` properties to the subscriptions response for the `turboapp.submitted` subscription. **Link:** [#/paths/~1subscriptions~1sample~1turboapp.submitted/get](https://iriscrm.com/api/#/paths/~1subscriptions~1sample~1turboapp.submitted/get)   * Added `application_url`, `identifier` and `lid` properties to the subscriptions response for the `turboapp.updated` subscription. **Link:** [#/paths/~1subscriptions~1sample~1turboapp.updated/get](https://iriscrm.com/api/#/paths/~1subscriptions~1sample~1turboapp.updated/get)   * Added `application_url`, `identifier` and `lid` properties to the subscriptions response for the `turboapp.approved` subscription. **Link:** [#/paths/~1subscriptions~1sample~1turboapp.approved/get](https://iriscrm.com/api/#/paths/~1subscriptions~1sample~1turboapp.approved/get)   * Added `application_url`, `identifier` and `lid` properties to the subscriptions response for the `turboapp.declined` subscription. **Link:** [#/paths/~1subscriptions~1sample~1turboapp.declined/get](https://iriscrm.com/api/#/paths/~1subscriptions~1sample~1turboapp.declined/get)   * Changed all subscriptions dates properties to the snake case **Link:** [#tag/Subscriptions](https://iriscrm.com/api/#tag/Subscriptions)       ### 1.3.5 (2020-02-26)   #### Created:   * Added a Helpdesk API to work with your helpdesk data. **Link:** [#tag/Helpdesk](https://iriscrm.com/api/#tag/Helpdesk)       ### 1.3.4 (2020-02-25)   #### Updated:   * Added a `lid` property to the \"turboapp.submitted\" subscription. **Link:** [#/paths/~1subscriptions~1sample~1turboapp.submitted/get](https://iriscrm.com/api/#/paths/~1subscriptions~1sample~1turboapp.submitted/get)       ### 1.3.3 (2020-02-24)   #### Updated:   * Added a `salesRep` parameter to 'lead.status.updated' subscription. **Link:** [#/paths/~1subscriptions~1sample~1lead.status.updated/get](https://iriscrm.com/api/#/paths/~1subscriptions~1sample~1lead.status.updated/get)       ### 1.3.2 (2019-11-21)   #### Updated:   * Added a `expire` parameter to 'Generate an e-signature document' endpoint. **Link:** [#/paths/~1leads~1{leadId}~1signatures~1{applicationId}~1generate/post](https://iriscrm.com/api/#/paths/~1leads~1{leadId}~1signatures~1{applicationId}~1generate/post)   * Added the ability to add multiple signers to the document and added an `expire` parameter to 'Send an e-signature document' endpoint. **Link:** [#/paths/~1leads~1{leadId}~1signatures~1{applicationId}~1send/post](https://iriscrm.com/api/#/paths/~1leads~1{leadId}~1signatures~1{applicationId}~1send/post)       ### 1.3.1 (2019-11-18)   #### Updated:   * Rename subscriptions from \"application.created\" to \"turboapp.submitted\" and \"application.updated\" to \"turboapp.updated\". **Link:** [#/paths/~1subscriptions~1sample~1turboapp.submitted/get](https://iriscrm.com/api/#/paths/~1subscriptions~1sample~1turboapp.submitted/get)     #### Created:   * Added new subscriptions for \"turboapp.approved\" event. **Link:** [#/paths/~1subscriptions~1sample~1turboapp.approved/get](https://iriscrm.com/api/#/paths/~1subscriptions~1sample~1turboapp.approved/get)   * Added new subscriptions for \"turboapp.declined\" event. **Link:** [#/paths/~1subscriptions~1sample~1turboapp.declined/get](https://iriscrm.com/api/#/paths/~1subscriptions~1sample~1turboapp.declined/get)       ### 1.2.2 (2019-09-03)   #### Updated:   * Added a `per_page` property to all list endpoints.       ### 1.2.1 (2019-08-26)   #### Updated:   * Added a `leads` property to merchants endpoint. **Link:** [#/paths/~1merchants/get](https://iriscrm.com/api/#/paths/~1merchants/get)       ### 1.2.0 (2019-07-26)   #### Updated:   * The endpoint for creating API subscriptions has been updated. Status based options have been added to some events. **Link:** [#/paths/~1subscriptions/post](https://iriscrm.com/api/#/paths/~1subscriptions/post)   * The endpoint for updating API subscriptions has been updated. Status based options have been added to some events. **Link:** [#/paths/~1subscriptions~1{subscriptionId}/patch](https://iriscrm.com/api/#/paths/~1subscriptions~1{subscriptionId}/patch)       ### 1.1.0 (2019-07-24)   #### Created:   * Added an endpoint for getting SMS templates. **Link:** [#/paths/~1leads~1sms~1templates/get](https://iriscrm.com/api/#/paths/~1leads~1sms~1templates/get)   * Added new subscriptions for `application.created` event **Link:** [#/paths/~1subscriptions~1sample~1application.created/get](https://iriscrm.com/api/#/paths/~1subscriptions~1sample~1application.created/get)   * Added new subscriptions for `application.updated` event **Link:** [#/paths/~1subscriptions~1sample~1application.updated/get](https://iriscrm.com/api/#/paths/~1subscriptions~1sample~1application.updated/get)     #### Updated:   * Added a `sic_code` property to merchants endpoint **Link:** [#/paths/~1merchants/get](https://iriscrm.com/api/#/paths/~1merchants/get)       ### 1.0.0 (2019-06-20)   #### Created:   * Added change log.
 *
 * OpenAPI spec version: 1.6.0
 * Contact: support@iriscrm.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.24
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Swagger\Client\ApiException;
use Swagger\Client\Configuration;
use Swagger\Client\HeaderSelector;
use Swagger\Client\ObjectSerializer;

/**
 * LeadsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LeadsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation leadsCampaignsGet
     *
     * Get a list of available campaigns
     *
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse20049
     */
    public function leadsCampaignsGet()
    {
        list($response) = $this->leadsCampaignsGetWithHttpInfo();
        return $response;
    }

    /**
     * Operation leadsCampaignsGetWithHttpInfo
     *
     * Get a list of available campaigns
     *
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse20049, HTTP status code, HTTP response headers (array of strings)
     */
    public function leadsCampaignsGetWithHttpInfo()
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20049';
        $request = $this->leadsCampaignsGetRequest();

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse20049',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation leadsCampaignsGetAsync
     *
     * Get a list of available campaigns
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsCampaignsGetAsync()
    {
        return $this->leadsCampaignsGetAsyncWithHttpInfo()
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation leadsCampaignsGetAsyncWithHttpInfo
     *
     * Get a list of available campaigns
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsCampaignsGetAsyncWithHttpInfo()
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20049';
        $request = $this->leadsCampaignsGetRequest();

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'leadsCampaignsGet'
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function leadsCampaignsGetRequest()
    {

        $resourcePath = '/leads/campaigns';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-API-KEY');
        if ($apiKey !== null) {
            $headers['X-API-KEY'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation leadsEmailsTemplatesGet
     *
     * Get a list of email templates
     *
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse20038
     */
    public function leadsEmailsTemplatesGet()
    {
        list($response) = $this->leadsEmailsTemplatesGetWithHttpInfo();
        return $response;
    }

    /**
     * Operation leadsEmailsTemplatesGetWithHttpInfo
     *
     * Get a list of email templates
     *
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse20038, HTTP status code, HTTP response headers (array of strings)
     */
    public function leadsEmailsTemplatesGetWithHttpInfo()
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20038';
        $request = $this->leadsEmailsTemplatesGetRequest();

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse20038',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 405:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse405',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation leadsEmailsTemplatesGetAsync
     *
     * Get a list of email templates
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsEmailsTemplatesGetAsync()
    {
        return $this->leadsEmailsTemplatesGetAsyncWithHttpInfo()
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation leadsEmailsTemplatesGetAsyncWithHttpInfo
     *
     * Get a list of email templates
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsEmailsTemplatesGetAsyncWithHttpInfo()
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20038';
        $request = $this->leadsEmailsTemplatesGetRequest();

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'leadsEmailsTemplatesGet'
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function leadsEmailsTemplatesGetRequest()
    {

        $resourcePath = '/leads/emails/templates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-API-KEY');
        if ($apiKey !== null) {
            $headers['X-API-KEY'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation leadsFieldsFieldIdGet
     *
     * Get a lead field
     *
     * @param  int $field_id Field Id (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\LeadField
     */
    public function leadsFieldsFieldIdGet($field_id)
    {
        list($response) = $this->leadsFieldsFieldIdGetWithHttpInfo($field_id);
        return $response;
    }

    /**
     * Operation leadsFieldsFieldIdGetWithHttpInfo
     *
     * Get a lead field
     *
     * @param  int $field_id Field Id (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\LeadField, HTTP status code, HTTP response headers (array of strings)
     */
    public function leadsFieldsFieldIdGetWithHttpInfo($field_id)
    {
        $returnType = '\Swagger\Client\Model\LeadField';
        $request = $this->leadsFieldsFieldIdGetRequest($field_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\LeadField',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation leadsFieldsFieldIdGetAsync
     *
     * Get a lead field
     *
     * @param  int $field_id Field Id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsFieldsFieldIdGetAsync($field_id)
    {
        return $this->leadsFieldsFieldIdGetAsyncWithHttpInfo($field_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation leadsFieldsFieldIdGetAsyncWithHttpInfo
     *
     * Get a lead field
     *
     * @param  int $field_id Field Id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsFieldsFieldIdGetAsyncWithHttpInfo($field_id)
    {
        $returnType = '\Swagger\Client\Model\LeadField';
        $request = $this->leadsFieldsFieldIdGetRequest($field_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'leadsFieldsFieldIdGet'
     *
     * @param  int $field_id Field Id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function leadsFieldsFieldIdGetRequest($field_id)
    {
        // verify the required parameter 'field_id' is set
        if ($field_id === null || (is_array($field_id) && count($field_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $field_id when calling leadsFieldsFieldIdGet'
            );
        }

        $resourcePath = '/leads/fields/{fieldId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($field_id !== null) {
            $resourcePath = str_replace(
                '{' . 'fieldId' . '}',
                ObjectSerializer::toPathValue($field_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-API-KEY');
        if ($apiKey !== null) {
            $headers['X-API-KEY'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation leadsFieldsFieldIdOrderPatch
     *
     * Update a lead field order position
     *
     * @param  int $field_id Field Id (required)
     * @param  \Swagger\Client\Model\LeadFieldOrder $body body (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse20019
     */
    public function leadsFieldsFieldIdOrderPatch($field_id, $body = null)
    {
        list($response) = $this->leadsFieldsFieldIdOrderPatchWithHttpInfo($field_id, $body);
        return $response;
    }

    /**
     * Operation leadsFieldsFieldIdOrderPatchWithHttpInfo
     *
     * Update a lead field order position
     *
     * @param  int $field_id Field Id (required)
     * @param  \Swagger\Client\Model\LeadFieldOrder $body (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse20019, HTTP status code, HTTP response headers (array of strings)
     */
    public function leadsFieldsFieldIdOrderPatchWithHttpInfo($field_id, $body = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20019';
        $request = $this->leadsFieldsFieldIdOrderPatchRequest($field_id, $body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse20019',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 405:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse405',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation leadsFieldsFieldIdOrderPatchAsync
     *
     * Update a lead field order position
     *
     * @param  int $field_id Field Id (required)
     * @param  \Swagger\Client\Model\LeadFieldOrder $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsFieldsFieldIdOrderPatchAsync($field_id, $body = null)
    {
        return $this->leadsFieldsFieldIdOrderPatchAsyncWithHttpInfo($field_id, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation leadsFieldsFieldIdOrderPatchAsyncWithHttpInfo
     *
     * Update a lead field order position
     *
     * @param  int $field_id Field Id (required)
     * @param  \Swagger\Client\Model\LeadFieldOrder $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsFieldsFieldIdOrderPatchAsyncWithHttpInfo($field_id, $body = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20019';
        $request = $this->leadsFieldsFieldIdOrderPatchRequest($field_id, $body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'leadsFieldsFieldIdOrderPatch'
     *
     * @param  int $field_id Field Id (required)
     * @param  \Swagger\Client\Model\LeadFieldOrder $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function leadsFieldsFieldIdOrderPatchRequest($field_id, $body = null)
    {
        // verify the required parameter 'field_id' is set
        if ($field_id === null || (is_array($field_id) && count($field_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $field_id when calling leadsFieldsFieldIdOrderPatch'
            );
        }

        $resourcePath = '/leads/fields/{fieldId}/order';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($field_id !== null) {
            $resourcePath = str_replace(
                '{' . 'fieldId' . '}',
                ObjectSerializer::toPathValue($field_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-API-KEY');
        if ($apiKey !== null) {
            $headers['X-API-KEY'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'PATCH',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation leadsFieldsFieldIdPatch
     *
     * Update a lead field
     *
     * @param  int $field_id Field Id (required)
     * @param  \Swagger\Client\Model\Body4 $body body (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\LeadField
     */
    public function leadsFieldsFieldIdPatch($field_id, $body = null)
    {
        list($response) = $this->leadsFieldsFieldIdPatchWithHttpInfo($field_id, $body);
        return $response;
    }

    /**
     * Operation leadsFieldsFieldIdPatchWithHttpInfo
     *
     * Update a lead field
     *
     * @param  int $field_id Field Id (required)
     * @param  \Swagger\Client\Model\Body4 $body (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\LeadField, HTTP status code, HTTP response headers (array of strings)
     */
    public function leadsFieldsFieldIdPatchWithHttpInfo($field_id, $body = null)
    {
        $returnType = '\Swagger\Client\Model\LeadField';
        $request = $this->leadsFieldsFieldIdPatchRequest($field_id, $body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\LeadField',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 405:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse405',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation leadsFieldsFieldIdPatchAsync
     *
     * Update a lead field
     *
     * @param  int $field_id Field Id (required)
     * @param  \Swagger\Client\Model\Body4 $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsFieldsFieldIdPatchAsync($field_id, $body = null)
    {
        return $this->leadsFieldsFieldIdPatchAsyncWithHttpInfo($field_id, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation leadsFieldsFieldIdPatchAsyncWithHttpInfo
     *
     * Update a lead field
     *
     * @param  int $field_id Field Id (required)
     * @param  \Swagger\Client\Model\Body4 $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsFieldsFieldIdPatchAsyncWithHttpInfo($field_id, $body = null)
    {
        $returnType = '\Swagger\Client\Model\LeadField';
        $request = $this->leadsFieldsFieldIdPatchRequest($field_id, $body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'leadsFieldsFieldIdPatch'
     *
     * @param  int $field_id Field Id (required)
     * @param  \Swagger\Client\Model\Body4 $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function leadsFieldsFieldIdPatchRequest($field_id, $body = null)
    {
        // verify the required parameter 'field_id' is set
        if ($field_id === null || (is_array($field_id) && count($field_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $field_id when calling leadsFieldsFieldIdPatch'
            );
        }

        $resourcePath = '/leads/fields/{fieldId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($field_id !== null) {
            $resourcePath = str_replace(
                '{' . 'fieldId' . '}',
                ObjectSerializer::toPathValue($field_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-API-KEY');
        if ($apiKey !== null) {
            $headers['X-API-KEY'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'PATCH',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation leadsFieldsGet
     *
     * Get a list of available lead fields
     *
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse20018
     */
    public function leadsFieldsGet($page = null, $per_page = null)
    {
        list($response) = $this->leadsFieldsGetWithHttpInfo($page, $per_page);
        return $response;
    }

    /**
     * Operation leadsFieldsGetWithHttpInfo
     *
     * Get a list of available lead fields
     *
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse20018, HTTP status code, HTTP response headers (array of strings)
     */
    public function leadsFieldsGetWithHttpInfo($page = null, $per_page = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20018';
        $request = $this->leadsFieldsGetRequest($page, $per_page);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse20018',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation leadsFieldsGetAsync
     *
     * Get a list of available lead fields
     *
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsFieldsGetAsync($page = null, $per_page = null)
    {
        return $this->leadsFieldsGetAsyncWithHttpInfo($page, $per_page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation leadsFieldsGetAsyncWithHttpInfo
     *
     * Get a list of available lead fields
     *
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsFieldsGetAsyncWithHttpInfo($page = null, $per_page = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20018';
        $request = $this->leadsFieldsGetRequest($page, $per_page);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'leadsFieldsGet'
     *
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function leadsFieldsGetRequest($page = null, $per_page = null)
    {

        $resourcePath = '/leads/fields';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page, null);
        }
        // query params
        if ($per_page !== null) {
            $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page, null);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-API-KEY');
        if ($apiKey !== null) {
            $headers['X-API-KEY'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation leadsFieldsPost
     *
     * Create a new lead field
     *
     * @param  \Swagger\Client\Model\Body3 $body body (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\LeadField
     */
    public function leadsFieldsPost($body = null)
    {
        list($response) = $this->leadsFieldsPostWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation leadsFieldsPostWithHttpInfo
     *
     * Create a new lead field
     *
     * @param  \Swagger\Client\Model\Body3 $body (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\LeadField, HTTP status code, HTTP response headers (array of strings)
     */
    public function leadsFieldsPostWithHttpInfo($body = null)
    {
        $returnType = '\Swagger\Client\Model\LeadField';
        $request = $this->leadsFieldsPostRequest($body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\LeadField',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 405:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse405',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation leadsFieldsPostAsync
     *
     * Create a new lead field
     *
     * @param  \Swagger\Client\Model\Body3 $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsFieldsPostAsync($body = null)
    {
        return $this->leadsFieldsPostAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation leadsFieldsPostAsyncWithHttpInfo
     *
     * Create a new lead field
     *
     * @param  \Swagger\Client\Model\Body3 $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsFieldsPostAsyncWithHttpInfo($body = null)
    {
        $returnType = '\Swagger\Client\Model\LeadField';
        $request = $this->leadsFieldsPostRequest($body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'leadsFieldsPost'
     *
     * @param  \Swagger\Client\Model\Body3 $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function leadsFieldsPostRequest($body = null)
    {

        $resourcePath = '/leads/fields';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-API-KEY');
        if ($apiKey !== null) {
            $headers['X-API-KEY'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation leadsFieldsTabsGet
     *
     * Get a list of all lead field tabs
     *
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse20020
     */
    public function leadsFieldsTabsGet($page = null, $per_page = null)
    {
        list($response) = $this->leadsFieldsTabsGetWithHttpInfo($page, $per_page);
        return $response;
    }

    /**
     * Operation leadsFieldsTabsGetWithHttpInfo
     *
     * Get a list of all lead field tabs
     *
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse20020, HTTP status code, HTTP response headers (array of strings)
     */
    public function leadsFieldsTabsGetWithHttpInfo($page = null, $per_page = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20020';
        $request = $this->leadsFieldsTabsGetRequest($page, $per_page);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse20020',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation leadsFieldsTabsGetAsync
     *
     * Get a list of all lead field tabs
     *
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsFieldsTabsGetAsync($page = null, $per_page = null)
    {
        return $this->leadsFieldsTabsGetAsyncWithHttpInfo($page, $per_page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation leadsFieldsTabsGetAsyncWithHttpInfo
     *
     * Get a list of all lead field tabs
     *
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsFieldsTabsGetAsyncWithHttpInfo($page = null, $per_page = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20020';
        $request = $this->leadsFieldsTabsGetRequest($page, $per_page);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'leadsFieldsTabsGet'
     *
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function leadsFieldsTabsGetRequest($page = null, $per_page = null)
    {

        $resourcePath = '/leads/fields/tabs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page, null);
        }
        // query params
        if ($per_page !== null) {
            $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page, null);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-API-KEY');
        if ($apiKey !== null) {
            $headers['X-API-KEY'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation leadsFieldsTabsPost
     *
     * Create a lead field tab
     *
     * @param  \Swagger\Client\Model\LeadFieldTab $body body (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\LeadFieldTab
     */
    public function leadsFieldsTabsPost($body = null)
    {
        list($response) = $this->leadsFieldsTabsPostWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation leadsFieldsTabsPostWithHttpInfo
     *
     * Create a lead field tab
     *
     * @param  \Swagger\Client\Model\LeadFieldTab $body (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\LeadFieldTab, HTTP status code, HTTP response headers (array of strings)
     */
    public function leadsFieldsTabsPostWithHttpInfo($body = null)
    {
        $returnType = '\Swagger\Client\Model\LeadFieldTab';
        $request = $this->leadsFieldsTabsPostRequest($body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\LeadFieldTab',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 405:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse405',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation leadsFieldsTabsPostAsync
     *
     * Create a lead field tab
     *
     * @param  \Swagger\Client\Model\LeadFieldTab $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsFieldsTabsPostAsync($body = null)
    {
        return $this->leadsFieldsTabsPostAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation leadsFieldsTabsPostAsyncWithHttpInfo
     *
     * Create a lead field tab
     *
     * @param  \Swagger\Client\Model\LeadFieldTab $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsFieldsTabsPostAsyncWithHttpInfo($body = null)
    {
        $returnType = '\Swagger\Client\Model\LeadFieldTab';
        $request = $this->leadsFieldsTabsPostRequest($body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'leadsFieldsTabsPost'
     *
     * @param  \Swagger\Client\Model\LeadFieldTab $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function leadsFieldsTabsPostRequest($body = null)
    {

        $resourcePath = '/leads/fields/tabs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-API-KEY');
        if ($apiKey !== null) {
            $headers['X-API-KEY'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation leadsFieldsTabsTabIdGet
     *
     * Get a lead field tab
     *
     * @param  int $tab_id Lead field tab Id (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\LeadFieldTab
     */
    public function leadsFieldsTabsTabIdGet($tab_id)
    {
        list($response) = $this->leadsFieldsTabsTabIdGetWithHttpInfo($tab_id);
        return $response;
    }

    /**
     * Operation leadsFieldsTabsTabIdGetWithHttpInfo
     *
     * Get a lead field tab
     *
     * @param  int $tab_id Lead field tab Id (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\LeadFieldTab, HTTP status code, HTTP response headers (array of strings)
     */
    public function leadsFieldsTabsTabIdGetWithHttpInfo($tab_id)
    {
        $returnType = '\Swagger\Client\Model\LeadFieldTab';
        $request = $this->leadsFieldsTabsTabIdGetRequest($tab_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\LeadFieldTab',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation leadsFieldsTabsTabIdGetAsync
     *
     * Get a lead field tab
     *
     * @param  int $tab_id Lead field tab Id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsFieldsTabsTabIdGetAsync($tab_id)
    {
        return $this->leadsFieldsTabsTabIdGetAsyncWithHttpInfo($tab_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation leadsFieldsTabsTabIdGetAsyncWithHttpInfo
     *
     * Get a lead field tab
     *
     * @param  int $tab_id Lead field tab Id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsFieldsTabsTabIdGetAsyncWithHttpInfo($tab_id)
    {
        $returnType = '\Swagger\Client\Model\LeadFieldTab';
        $request = $this->leadsFieldsTabsTabIdGetRequest($tab_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'leadsFieldsTabsTabIdGet'
     *
     * @param  int $tab_id Lead field tab Id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function leadsFieldsTabsTabIdGetRequest($tab_id)
    {
        // verify the required parameter 'tab_id' is set
        if ($tab_id === null || (is_array($tab_id) && count($tab_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $tab_id when calling leadsFieldsTabsTabIdGet'
            );
        }

        $resourcePath = '/leads/fields/tabs/{tabId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($tab_id !== null) {
            $resourcePath = str_replace(
                '{' . 'tabId' . '}',
                ObjectSerializer::toPathValue($tab_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-API-KEY');
        if ($apiKey !== null) {
            $headers['X-API-KEY'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation leadsFieldsTabsTabIdPatch
     *
     * Update a lead field tab
     *
     * @param  int $tab_id Lead field tab Id (required)
     * @param  \Swagger\Client\Model\LeadFieldTab $body body (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\LeadFieldTab
     */
    public function leadsFieldsTabsTabIdPatch($tab_id, $body = null)
    {
        list($response) = $this->leadsFieldsTabsTabIdPatchWithHttpInfo($tab_id, $body);
        return $response;
    }

    /**
     * Operation leadsFieldsTabsTabIdPatchWithHttpInfo
     *
     * Update a lead field tab
     *
     * @param  int $tab_id Lead field tab Id (required)
     * @param  \Swagger\Client\Model\LeadFieldTab $body (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\LeadFieldTab, HTTP status code, HTTP response headers (array of strings)
     */
    public function leadsFieldsTabsTabIdPatchWithHttpInfo($tab_id, $body = null)
    {
        $returnType = '\Swagger\Client\Model\LeadFieldTab';
        $request = $this->leadsFieldsTabsTabIdPatchRequest($tab_id, $body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\LeadFieldTab',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 405:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse405',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation leadsFieldsTabsTabIdPatchAsync
     *
     * Update a lead field tab
     *
     * @param  int $tab_id Lead field tab Id (required)
     * @param  \Swagger\Client\Model\LeadFieldTab $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsFieldsTabsTabIdPatchAsync($tab_id, $body = null)
    {
        return $this->leadsFieldsTabsTabIdPatchAsyncWithHttpInfo($tab_id, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation leadsFieldsTabsTabIdPatchAsyncWithHttpInfo
     *
     * Update a lead field tab
     *
     * @param  int $tab_id Lead field tab Id (required)
     * @param  \Swagger\Client\Model\LeadFieldTab $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsFieldsTabsTabIdPatchAsyncWithHttpInfo($tab_id, $body = null)
    {
        $returnType = '\Swagger\Client\Model\LeadFieldTab';
        $request = $this->leadsFieldsTabsTabIdPatchRequest($tab_id, $body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'leadsFieldsTabsTabIdPatch'
     *
     * @param  int $tab_id Lead field tab Id (required)
     * @param  \Swagger\Client\Model\LeadFieldTab $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function leadsFieldsTabsTabIdPatchRequest($tab_id, $body = null)
    {
        // verify the required parameter 'tab_id' is set
        if ($tab_id === null || (is_array($tab_id) && count($tab_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $tab_id when calling leadsFieldsTabsTabIdPatch'
            );
        }

        $resourcePath = '/leads/fields/tabs/{tabId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($tab_id !== null) {
            $resourcePath = str_replace(
                '{' . 'tabId' . '}',
                ObjectSerializer::toPathValue($tab_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-API-KEY');
        if ($apiKey !== null) {
            $headers['X-API-KEY'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'PATCH',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation leadsFileLabelsGet
     *
     * Get a list of available document labels
     *
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse20033
     */
    public function leadsFileLabelsGet($page = null, $per_page = null)
    {
        list($response) = $this->leadsFileLabelsGetWithHttpInfo($page, $per_page);
        return $response;
    }

    /**
     * Operation leadsFileLabelsGetWithHttpInfo
     *
     * Get a list of available document labels
     *
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse20033, HTTP status code, HTTP response headers (array of strings)
     */
    public function leadsFileLabelsGetWithHttpInfo($page = null, $per_page = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20033';
        $request = $this->leadsFileLabelsGetRequest($page, $per_page);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse20033',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation leadsFileLabelsGetAsync
     *
     * Get a list of available document labels
     *
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsFileLabelsGetAsync($page = null, $per_page = null)
    {
        return $this->leadsFileLabelsGetAsyncWithHttpInfo($page, $per_page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation leadsFileLabelsGetAsyncWithHttpInfo
     *
     * Get a list of available document labels
     *
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsFileLabelsGetAsyncWithHttpInfo($page = null, $per_page = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20033';
        $request = $this->leadsFileLabelsGetRequest($page, $per_page);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'leadsFileLabelsGet'
     *
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function leadsFileLabelsGetRequest($page = null, $per_page = null)
    {

        $resourcePath = '/leads/file_labels';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page, null);
        }
        // query params
        if ($per_page !== null) {
            $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page, null);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-API-KEY');
        if ($apiKey !== null) {
            $headers['X-API-KEY'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation leadsGet
     *
     * Get a list of leads
     *
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     * @param  string $sort_by Sorting of leads by the field value (optional)
     * @param  string $sort_dir Direction of sorting (optional, default to asc)
     * @param  int $group Filter leads by a group id (optional)
     * @param  int $mid Filter leads by a merchant id (optional)
     * @param  int $campaign Filter leads by a campaign id (optional)
     * @param  int $source Filter leads by a source id (optional)
     * @param  int $status Filter leads by a status id (optional)
     * @param  int $category Filter leads by a status category id (optional)
     * @param  int $user Filter leads by a user id (optional)
     * @param  string $date_filter Filtering leads by a date range depends on this filter (optional)
     * @param  \DateTime $start_date Filter leads by a date in ISO 8601 format (Y-m-d\\TH:i:sP) (**Please note that &#x60;+&#x60; sign should be encoded to &#x60;%2B&#x60;**) (optional)
     * @param  \DateTime $end_date Filter leads by a date in ISO 8601 format (Y-m-d\\TH:i:sP) (**Please note that &#x60;+&#x60; sign should be encoded to &#x60;%2B&#x60;**) (optional)
     * @param  string $email Filter leads by a email (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse20014
     */
    public function leadsGet($page = null, $per_page = null, $sort_by = null, $sort_dir = 'asc', $group = null, $mid = null, $campaign = null, $source = null, $status = null, $category = null, $user = null, $date_filter = null, $start_date = null, $end_date = null, $email = null)
    {
        list($response) = $this->leadsGetWithHttpInfo($page, $per_page, $sort_by, $sort_dir, $group, $mid, $campaign, $source, $status, $category, $user, $date_filter, $start_date, $end_date, $email);
        return $response;
    }

    /**
     * Operation leadsGetWithHttpInfo
     *
     * Get a list of leads
     *
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     * @param  string $sort_by Sorting of leads by the field value (optional)
     * @param  string $sort_dir Direction of sorting (optional, default to asc)
     * @param  int $group Filter leads by a group id (optional)
     * @param  int $mid Filter leads by a merchant id (optional)
     * @param  int $campaign Filter leads by a campaign id (optional)
     * @param  int $source Filter leads by a source id (optional)
     * @param  int $status Filter leads by a status id (optional)
     * @param  int $category Filter leads by a status category id (optional)
     * @param  int $user Filter leads by a user id (optional)
     * @param  string $date_filter Filtering leads by a date range depends on this filter (optional)
     * @param  \DateTime $start_date Filter leads by a date in ISO 8601 format (Y-m-d\\TH:i:sP) (**Please note that &#x60;+&#x60; sign should be encoded to &#x60;%2B&#x60;**) (optional)
     * @param  \DateTime $end_date Filter leads by a date in ISO 8601 format (Y-m-d\\TH:i:sP) (**Please note that &#x60;+&#x60; sign should be encoded to &#x60;%2B&#x60;**) (optional)
     * @param  string $email Filter leads by a email (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse20014, HTTP status code, HTTP response headers (array of strings)
     */
    public function leadsGetWithHttpInfo($page = null, $per_page = null, $sort_by = null, $sort_dir = 'asc', $group = null, $mid = null, $campaign = null, $source = null, $status = null, $category = null, $user = null, $date_filter = null, $start_date = null, $end_date = null, $email = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20014';
        $request = $this->leadsGetRequest($page, $per_page, $sort_by, $sort_dir, $group, $mid, $campaign, $source, $status, $category, $user, $date_filter, $start_date, $end_date, $email);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse20014',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 405:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse405',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation leadsGetAsync
     *
     * Get a list of leads
     *
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     * @param  string $sort_by Sorting of leads by the field value (optional)
     * @param  string $sort_dir Direction of sorting (optional, default to asc)
     * @param  int $group Filter leads by a group id (optional)
     * @param  int $mid Filter leads by a merchant id (optional)
     * @param  int $campaign Filter leads by a campaign id (optional)
     * @param  int $source Filter leads by a source id (optional)
     * @param  int $status Filter leads by a status id (optional)
     * @param  int $category Filter leads by a status category id (optional)
     * @param  int $user Filter leads by a user id (optional)
     * @param  string $date_filter Filtering leads by a date range depends on this filter (optional)
     * @param  \DateTime $start_date Filter leads by a date in ISO 8601 format (Y-m-d\\TH:i:sP) (**Please note that &#x60;+&#x60; sign should be encoded to &#x60;%2B&#x60;**) (optional)
     * @param  \DateTime $end_date Filter leads by a date in ISO 8601 format (Y-m-d\\TH:i:sP) (**Please note that &#x60;+&#x60; sign should be encoded to &#x60;%2B&#x60;**) (optional)
     * @param  string $email Filter leads by a email (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsGetAsync($page = null, $per_page = null, $sort_by = null, $sort_dir = 'asc', $group = null, $mid = null, $campaign = null, $source = null, $status = null, $category = null, $user = null, $date_filter = null, $start_date = null, $end_date = null, $email = null)
    {
        return $this->leadsGetAsyncWithHttpInfo($page, $per_page, $sort_by, $sort_dir, $group, $mid, $campaign, $source, $status, $category, $user, $date_filter, $start_date, $end_date, $email)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation leadsGetAsyncWithHttpInfo
     *
     * Get a list of leads
     *
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     * @param  string $sort_by Sorting of leads by the field value (optional)
     * @param  string $sort_dir Direction of sorting (optional, default to asc)
     * @param  int $group Filter leads by a group id (optional)
     * @param  int $mid Filter leads by a merchant id (optional)
     * @param  int $campaign Filter leads by a campaign id (optional)
     * @param  int $source Filter leads by a source id (optional)
     * @param  int $status Filter leads by a status id (optional)
     * @param  int $category Filter leads by a status category id (optional)
     * @param  int $user Filter leads by a user id (optional)
     * @param  string $date_filter Filtering leads by a date range depends on this filter (optional)
     * @param  \DateTime $start_date Filter leads by a date in ISO 8601 format (Y-m-d\\TH:i:sP) (**Please note that &#x60;+&#x60; sign should be encoded to &#x60;%2B&#x60;**) (optional)
     * @param  \DateTime $end_date Filter leads by a date in ISO 8601 format (Y-m-d\\TH:i:sP) (**Please note that &#x60;+&#x60; sign should be encoded to &#x60;%2B&#x60;**) (optional)
     * @param  string $email Filter leads by a email (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsGetAsyncWithHttpInfo($page = null, $per_page = null, $sort_by = null, $sort_dir = 'asc', $group = null, $mid = null, $campaign = null, $source = null, $status = null, $category = null, $user = null, $date_filter = null, $start_date = null, $end_date = null, $email = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20014';
        $request = $this->leadsGetRequest($page, $per_page, $sort_by, $sort_dir, $group, $mid, $campaign, $source, $status, $category, $user, $date_filter, $start_date, $end_date, $email);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'leadsGet'
     *
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     * @param  string $sort_by Sorting of leads by the field value (optional)
     * @param  string $sort_dir Direction of sorting (optional, default to asc)
     * @param  int $group Filter leads by a group id (optional)
     * @param  int $mid Filter leads by a merchant id (optional)
     * @param  int $campaign Filter leads by a campaign id (optional)
     * @param  int $source Filter leads by a source id (optional)
     * @param  int $status Filter leads by a status id (optional)
     * @param  int $category Filter leads by a status category id (optional)
     * @param  int $user Filter leads by a user id (optional)
     * @param  string $date_filter Filtering leads by a date range depends on this filter (optional)
     * @param  \DateTime $start_date Filter leads by a date in ISO 8601 format (Y-m-d\\TH:i:sP) (**Please note that &#x60;+&#x60; sign should be encoded to &#x60;%2B&#x60;**) (optional)
     * @param  \DateTime $end_date Filter leads by a date in ISO 8601 format (Y-m-d\\TH:i:sP) (**Please note that &#x60;+&#x60; sign should be encoded to &#x60;%2B&#x60;**) (optional)
     * @param  string $email Filter leads by a email (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function leadsGetRequest($page = null, $per_page = null, $sort_by = null, $sort_dir = 'asc', $group = null, $mid = null, $campaign = null, $source = null, $status = null, $category = null, $user = null, $date_filter = null, $start_date = null, $end_date = null, $email = null)
    {

        $resourcePath = '/leads';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page, null);
        }
        // query params
        if ($per_page !== null) {
            $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page, null);
        }
        // query params
        if ($sort_by !== null) {
            $queryParams['sort_by'] = ObjectSerializer::toQueryValue($sort_by, null);
        }
        // query params
        if ($sort_dir !== null) {
            $queryParams['sort_dir'] = ObjectSerializer::toQueryValue($sort_dir, null);
        }
        // query params
        if ($group !== null) {
            $queryParams['group'] = ObjectSerializer::toQueryValue($group, null);
        }
        // query params
        if ($mid !== null) {
            $queryParams['mid'] = ObjectSerializer::toQueryValue($mid, null);
        }
        // query params
        if ($campaign !== null) {
            $queryParams['campaign'] = ObjectSerializer::toQueryValue($campaign, null);
        }
        // query params
        if ($source !== null) {
            $queryParams['source'] = ObjectSerializer::toQueryValue($source, null);
        }
        // query params
        if ($status !== null) {
            $queryParams['status'] = ObjectSerializer::toQueryValue($status, null);
        }
        // query params
        if ($category !== null) {
            $queryParams['category'] = ObjectSerializer::toQueryValue($category, null);
        }
        // query params
        if ($user !== null) {
            $queryParams['user'] = ObjectSerializer::toQueryValue($user, null);
        }
        // query params
        if ($date_filter !== null) {
            $queryParams['date_filter'] = ObjectSerializer::toQueryValue($date_filter, null);
        }
        // query params
        if ($start_date !== null) {
            $queryParams['start_date'] = ObjectSerializer::toQueryValue($start_date, 'date-time');
        }
        // query params
        if ($end_date !== null) {
            $queryParams['end_date'] = ObjectSerializer::toQueryValue($end_date, 'date-time');
        }
        // query params
        if ($email !== null) {
            $queryParams['email'] = ObjectSerializer::toQueryValue($email, null);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-API-KEY');
        if ($apiKey !== null) {
            $headers['X-API-KEY'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation leadsGroupsGet
     *
     * Get a list of available groups
     *
     * @param  int $status Status Id (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse20050
     */
    public function leadsGroupsGet($status = null)
    {
        list($response) = $this->leadsGroupsGetWithHttpInfo($status);
        return $response;
    }

    /**
     * Operation leadsGroupsGetWithHttpInfo
     *
     * Get a list of available groups
     *
     * @param  int $status Status Id (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse20050, HTTP status code, HTTP response headers (array of strings)
     */
    public function leadsGroupsGetWithHttpInfo($status = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20050';
        $request = $this->leadsGroupsGetRequest($status);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse20050',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation leadsGroupsGetAsync
     *
     * Get a list of available groups
     *
     * @param  int $status Status Id (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsGroupsGetAsync($status = null)
    {
        return $this->leadsGroupsGetAsyncWithHttpInfo($status)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation leadsGroupsGetAsyncWithHttpInfo
     *
     * Get a list of available groups
     *
     * @param  int $status Status Id (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsGroupsGetAsyncWithHttpInfo($status = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20050';
        $request = $this->leadsGroupsGetRequest($status);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'leadsGroupsGet'
     *
     * @param  int $status Status Id (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function leadsGroupsGetRequest($status = null)
    {

        $resourcePath = '/leads/groups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($status !== null) {
            $queryParams['status'] = ObjectSerializer::toQueryValue($status, null);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-API-KEY');
        if ($apiKey !== null) {
            $headers['X-API-KEY'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation leadsLeadIdActivityCampaignGet
     *
     * Get a list of all lead campaign activity
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse20041
     */
    public function leadsLeadIdActivityCampaignGet($lead_id, $page = null, $per_page = null)
    {
        list($response) = $this->leadsLeadIdActivityCampaignGetWithHttpInfo($lead_id, $page, $per_page);
        return $response;
    }

    /**
     * Operation leadsLeadIdActivityCampaignGetWithHttpInfo
     *
     * Get a list of all lead campaign activity
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse20041, HTTP status code, HTTP response headers (array of strings)
     */
    public function leadsLeadIdActivityCampaignGetWithHttpInfo($lead_id, $page = null, $per_page = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20041';
        $request = $this->leadsLeadIdActivityCampaignGetRequest($lead_id, $page, $per_page);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse20041',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation leadsLeadIdActivityCampaignGetAsync
     *
     * Get a list of all lead campaign activity
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsLeadIdActivityCampaignGetAsync($lead_id, $page = null, $per_page = null)
    {
        return $this->leadsLeadIdActivityCampaignGetAsyncWithHttpInfo($lead_id, $page, $per_page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation leadsLeadIdActivityCampaignGetAsyncWithHttpInfo
     *
     * Get a list of all lead campaign activity
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsLeadIdActivityCampaignGetAsyncWithHttpInfo($lead_id, $page = null, $per_page = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20041';
        $request = $this->leadsLeadIdActivityCampaignGetRequest($lead_id, $page, $per_page);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'leadsLeadIdActivityCampaignGet'
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function leadsLeadIdActivityCampaignGetRequest($lead_id, $page = null, $per_page = null)
    {
        // verify the required parameter 'lead_id' is set
        if ($lead_id === null || (is_array($lead_id) && count($lead_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $lead_id when calling leadsLeadIdActivityCampaignGet'
            );
        }

        $resourcePath = '/leads/{leadId}/activity/campaign';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page, null);
        }
        // query params
        if ($per_page !== null) {
            $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page, null);
        }

        // path params
        if ($lead_id !== null) {
            $resourcePath = str_replace(
                '{' . 'leadId' . '}',
                ObjectSerializer::toPathValue($lead_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-API-KEY');
        if ($apiKey !== null) {
            $headers['X-API-KEY'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation leadsLeadIdActivityDeletionGet
     *
     * Get a list of all lead deletion activity
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse20042
     */
    public function leadsLeadIdActivityDeletionGet($lead_id, $page = null, $per_page = null)
    {
        list($response) = $this->leadsLeadIdActivityDeletionGetWithHttpInfo($lead_id, $page, $per_page);
        return $response;
    }

    /**
     * Operation leadsLeadIdActivityDeletionGetWithHttpInfo
     *
     * Get a list of all lead deletion activity
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse20042, HTTP status code, HTTP response headers (array of strings)
     */
    public function leadsLeadIdActivityDeletionGetWithHttpInfo($lead_id, $page = null, $per_page = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20042';
        $request = $this->leadsLeadIdActivityDeletionGetRequest($lead_id, $page, $per_page);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse20042',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation leadsLeadIdActivityDeletionGetAsync
     *
     * Get a list of all lead deletion activity
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsLeadIdActivityDeletionGetAsync($lead_id, $page = null, $per_page = null)
    {
        return $this->leadsLeadIdActivityDeletionGetAsyncWithHttpInfo($lead_id, $page, $per_page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation leadsLeadIdActivityDeletionGetAsyncWithHttpInfo
     *
     * Get a list of all lead deletion activity
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsLeadIdActivityDeletionGetAsyncWithHttpInfo($lead_id, $page = null, $per_page = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20042';
        $request = $this->leadsLeadIdActivityDeletionGetRequest($lead_id, $page, $per_page);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'leadsLeadIdActivityDeletionGet'
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function leadsLeadIdActivityDeletionGetRequest($lead_id, $page = null, $per_page = null)
    {
        // verify the required parameter 'lead_id' is set
        if ($lead_id === null || (is_array($lead_id) && count($lead_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $lead_id when calling leadsLeadIdActivityDeletionGet'
            );
        }

        $resourcePath = '/leads/{leadId}/activity/deletion';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page, null);
        }
        // query params
        if ($per_page !== null) {
            $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page, null);
        }

        // path params
        if ($lead_id !== null) {
            $resourcePath = str_replace(
                '{' . 'leadId' . '}',
                ObjectSerializer::toPathValue($lead_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-API-KEY');
        if ($apiKey !== null) {
            $headers['X-API-KEY'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation leadsLeadIdActivityDuplicatesGet
     *
     * Get a list of all lead duplicate activity
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse20043
     */
    public function leadsLeadIdActivityDuplicatesGet($lead_id, $page = null, $per_page = null)
    {
        list($response) = $this->leadsLeadIdActivityDuplicatesGetWithHttpInfo($lead_id, $page, $per_page);
        return $response;
    }

    /**
     * Operation leadsLeadIdActivityDuplicatesGetWithHttpInfo
     *
     * Get a list of all lead duplicate activity
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse20043, HTTP status code, HTTP response headers (array of strings)
     */
    public function leadsLeadIdActivityDuplicatesGetWithHttpInfo($lead_id, $page = null, $per_page = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20043';
        $request = $this->leadsLeadIdActivityDuplicatesGetRequest($lead_id, $page, $per_page);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse20043',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation leadsLeadIdActivityDuplicatesGetAsync
     *
     * Get a list of all lead duplicate activity
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsLeadIdActivityDuplicatesGetAsync($lead_id, $page = null, $per_page = null)
    {
        return $this->leadsLeadIdActivityDuplicatesGetAsyncWithHttpInfo($lead_id, $page, $per_page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation leadsLeadIdActivityDuplicatesGetAsyncWithHttpInfo
     *
     * Get a list of all lead duplicate activity
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsLeadIdActivityDuplicatesGetAsyncWithHttpInfo($lead_id, $page = null, $per_page = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20043';
        $request = $this->leadsLeadIdActivityDuplicatesGetRequest($lead_id, $page, $per_page);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'leadsLeadIdActivityDuplicatesGet'
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function leadsLeadIdActivityDuplicatesGetRequest($lead_id, $page = null, $per_page = null)
    {
        // verify the required parameter 'lead_id' is set
        if ($lead_id === null || (is_array($lead_id) && count($lead_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $lead_id when calling leadsLeadIdActivityDuplicatesGet'
            );
        }

        $resourcePath = '/leads/{leadId}/activity/duplicates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page, null);
        }
        // query params
        if ($per_page !== null) {
            $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page, null);
        }

        // path params
        if ($lead_id !== null) {
            $resourcePath = str_replace(
                '{' . 'leadId' . '}',
                ObjectSerializer::toPathValue($lead_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-API-KEY');
        if ($apiKey !== null) {
            $headers['X-API-KEY'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation leadsLeadIdActivityLinksGet
     *
     * Get a list of all lead links activity
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse20044
     */
    public function leadsLeadIdActivityLinksGet($lead_id, $page = null, $per_page = null)
    {
        list($response) = $this->leadsLeadIdActivityLinksGetWithHttpInfo($lead_id, $page, $per_page);
        return $response;
    }

    /**
     * Operation leadsLeadIdActivityLinksGetWithHttpInfo
     *
     * Get a list of all lead links activity
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse20044, HTTP status code, HTTP response headers (array of strings)
     */
    public function leadsLeadIdActivityLinksGetWithHttpInfo($lead_id, $page = null, $per_page = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20044';
        $request = $this->leadsLeadIdActivityLinksGetRequest($lead_id, $page, $per_page);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse20044',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation leadsLeadIdActivityLinksGetAsync
     *
     * Get a list of all lead links activity
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsLeadIdActivityLinksGetAsync($lead_id, $page = null, $per_page = null)
    {
        return $this->leadsLeadIdActivityLinksGetAsyncWithHttpInfo($lead_id, $page, $per_page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation leadsLeadIdActivityLinksGetAsyncWithHttpInfo
     *
     * Get a list of all lead links activity
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsLeadIdActivityLinksGetAsyncWithHttpInfo($lead_id, $page = null, $per_page = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20044';
        $request = $this->leadsLeadIdActivityLinksGetRequest($lead_id, $page, $per_page);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'leadsLeadIdActivityLinksGet'
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function leadsLeadIdActivityLinksGetRequest($lead_id, $page = null, $per_page = null)
    {
        // verify the required parameter 'lead_id' is set
        if ($lead_id === null || (is_array($lead_id) && count($lead_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $lead_id when calling leadsLeadIdActivityLinksGet'
            );
        }

        $resourcePath = '/leads/{leadId}/activity/links';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page, null);
        }
        // query params
        if ($per_page !== null) {
            $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page, null);
        }

        // path params
        if ($lead_id !== null) {
            $resourcePath = str_replace(
                '{' . 'leadId' . '}',
                ObjectSerializer::toPathValue($lead_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-API-KEY');
        if ($apiKey !== null) {
            $headers['X-API-KEY'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation leadsLeadIdActivitySourceGet
     *
     * Get a list of all lead source activity
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse20045
     */
    public function leadsLeadIdActivitySourceGet($lead_id, $page = null, $per_page = null)
    {
        list($response) = $this->leadsLeadIdActivitySourceGetWithHttpInfo($lead_id, $page, $per_page);
        return $response;
    }

    /**
     * Operation leadsLeadIdActivitySourceGetWithHttpInfo
     *
     * Get a list of all lead source activity
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse20045, HTTP status code, HTTP response headers (array of strings)
     */
    public function leadsLeadIdActivitySourceGetWithHttpInfo($lead_id, $page = null, $per_page = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20045';
        $request = $this->leadsLeadIdActivitySourceGetRequest($lead_id, $page, $per_page);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse20045',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation leadsLeadIdActivitySourceGetAsync
     *
     * Get a list of all lead source activity
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsLeadIdActivitySourceGetAsync($lead_id, $page = null, $per_page = null)
    {
        return $this->leadsLeadIdActivitySourceGetAsyncWithHttpInfo($lead_id, $page, $per_page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation leadsLeadIdActivitySourceGetAsyncWithHttpInfo
     *
     * Get a list of all lead source activity
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsLeadIdActivitySourceGetAsyncWithHttpInfo($lead_id, $page = null, $per_page = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20045';
        $request = $this->leadsLeadIdActivitySourceGetRequest($lead_id, $page, $per_page);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'leadsLeadIdActivitySourceGet'
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function leadsLeadIdActivitySourceGetRequest($lead_id, $page = null, $per_page = null)
    {
        // verify the required parameter 'lead_id' is set
        if ($lead_id === null || (is_array($lead_id) && count($lead_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $lead_id when calling leadsLeadIdActivitySourceGet'
            );
        }

        $resourcePath = '/leads/{leadId}/activity/source';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page, null);
        }
        // query params
        if ($per_page !== null) {
            $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page, null);
        }

        // path params
        if ($lead_id !== null) {
            $resourcePath = str_replace(
                '{' . 'leadId' . '}',
                ObjectSerializer::toPathValue($lead_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-API-KEY');
        if ($apiKey !== null) {
            $headers['X-API-KEY'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation leadsLeadIdActivityStatusGet
     *
     * Get a list of all lead status activity
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse20046
     */
    public function leadsLeadIdActivityStatusGet($lead_id, $page = null, $per_page = null)
    {
        list($response) = $this->leadsLeadIdActivityStatusGetWithHttpInfo($lead_id, $page, $per_page);
        return $response;
    }

    /**
     * Operation leadsLeadIdActivityStatusGetWithHttpInfo
     *
     * Get a list of all lead status activity
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse20046, HTTP status code, HTTP response headers (array of strings)
     */
    public function leadsLeadIdActivityStatusGetWithHttpInfo($lead_id, $page = null, $per_page = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20046';
        $request = $this->leadsLeadIdActivityStatusGetRequest($lead_id, $page, $per_page);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse20046',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation leadsLeadIdActivityStatusGetAsync
     *
     * Get a list of all lead status activity
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsLeadIdActivityStatusGetAsync($lead_id, $page = null, $per_page = null)
    {
        return $this->leadsLeadIdActivityStatusGetAsyncWithHttpInfo($lead_id, $page, $per_page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation leadsLeadIdActivityStatusGetAsyncWithHttpInfo
     *
     * Get a list of all lead status activity
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsLeadIdActivityStatusGetAsyncWithHttpInfo($lead_id, $page = null, $per_page = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20046';
        $request = $this->leadsLeadIdActivityStatusGetRequest($lead_id, $page, $per_page);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'leadsLeadIdActivityStatusGet'
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function leadsLeadIdActivityStatusGetRequest($lead_id, $page = null, $per_page = null)
    {
        // verify the required parameter 'lead_id' is set
        if ($lead_id === null || (is_array($lead_id) && count($lead_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $lead_id when calling leadsLeadIdActivityStatusGet'
            );
        }

        $resourcePath = '/leads/{leadId}/activity/status';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page, null);
        }
        // query params
        if ($per_page !== null) {
            $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page, null);
        }

        // path params
        if ($lead_id !== null) {
            $resourcePath = str_replace(
                '{' . 'leadId' . '}',
                ObjectSerializer::toPathValue($lead_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-API-KEY');
        if ($apiKey !== null) {
            $headers['X-API-KEY'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation leadsLeadIdApplicationsApplicationIdPopulatePost
     *
     * Populate PDF Document
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $application_id Application Id (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse20026
     */
    public function leadsLeadIdApplicationsApplicationIdPopulatePost($lead_id, $application_id)
    {
        list($response) = $this->leadsLeadIdApplicationsApplicationIdPopulatePostWithHttpInfo($lead_id, $application_id);
        return $response;
    }

    /**
     * Operation leadsLeadIdApplicationsApplicationIdPopulatePostWithHttpInfo
     *
     * Populate PDF Document
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $application_id Application Id (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse20026, HTTP status code, HTTP response headers (array of strings)
     */
    public function leadsLeadIdApplicationsApplicationIdPopulatePostWithHttpInfo($lead_id, $application_id)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20026';
        $request = $this->leadsLeadIdApplicationsApplicationIdPopulatePostRequest($lead_id, $application_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse20026',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 405:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse405',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation leadsLeadIdApplicationsApplicationIdPopulatePostAsync
     *
     * Populate PDF Document
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $application_id Application Id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsLeadIdApplicationsApplicationIdPopulatePostAsync($lead_id, $application_id)
    {
        return $this->leadsLeadIdApplicationsApplicationIdPopulatePostAsyncWithHttpInfo($lead_id, $application_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation leadsLeadIdApplicationsApplicationIdPopulatePostAsyncWithHttpInfo
     *
     * Populate PDF Document
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $application_id Application Id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsLeadIdApplicationsApplicationIdPopulatePostAsyncWithHttpInfo($lead_id, $application_id)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20026';
        $request = $this->leadsLeadIdApplicationsApplicationIdPopulatePostRequest($lead_id, $application_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'leadsLeadIdApplicationsApplicationIdPopulatePost'
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $application_id Application Id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function leadsLeadIdApplicationsApplicationIdPopulatePostRequest($lead_id, $application_id)
    {
        // verify the required parameter 'lead_id' is set
        if ($lead_id === null || (is_array($lead_id) && count($lead_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $lead_id when calling leadsLeadIdApplicationsApplicationIdPopulatePost'
            );
        }
        // verify the required parameter 'application_id' is set
        if ($application_id === null || (is_array($application_id) && count($application_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $application_id when calling leadsLeadIdApplicationsApplicationIdPopulatePost'
            );
        }

        $resourcePath = '/leads/{leadId}/applications/{applicationId}/populate';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($lead_id !== null) {
            $resourcePath = str_replace(
                '{' . 'leadId' . '}',
                ObjectSerializer::toPathValue($lead_id),
                $resourcePath
            );
        }
        // path params
        if ($application_id !== null) {
            $resourcePath = str_replace(
                '{' . 'applicationId' . '}',
                ObjectSerializer::toPathValue($application_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-API-KEY');
        if ($apiKey !== null) {
            $headers['X-API-KEY'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation leadsLeadIdAppointmentsGet
     *
     * Get lead appointments
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $page Page number (optional)
     * @param  int $set_for Filter by the user for who appointment was created (optional)
     * @param  int $set_by Filter by the user for who have created an appointment (optional)
     * @param  int $modified_by Filter by the user for who have modified an appointment (optional)
     * @param  int $confirmed_by Filter by the user for who have confirmed an appointment (optional)
     * @param  int $rescheduled_by Filter by the user for who have rescheduled an appointment (optional)
     * @param  int $seen_by Filter by the user for who have mark an appointment as seen (optional)
     * @param  int $rescheduled_count Filter by the count of rescheduling (optional)
     * @param  bool $done Filter by the done flag (optional)
     * @param  int $per_page Count of records per page (optional)
     * @param  string $sort_by Sort appointments by columns (optional)
     * @param  string $sort_dir Sort direction (optional)
     * @param  string $date_filter Filtering appointments by a date range depends on this filter (optional)
     * @param  \DateTime $start_date Filter appointments by a date in format Y-m-d (optional)
     * @param  \DateTime $end_date Filter leads by a date in format Y-m-d (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse20024
     */
    public function leadsLeadIdAppointmentsGet($lead_id, $page = null, $set_for = null, $set_by = null, $modified_by = null, $confirmed_by = null, $rescheduled_by = null, $seen_by = null, $rescheduled_count = null, $done = null, $per_page = null, $sort_by = null, $sort_dir = null, $date_filter = null, $start_date = null, $end_date = null)
    {
        list($response) = $this->leadsLeadIdAppointmentsGetWithHttpInfo($lead_id, $page, $set_for, $set_by, $modified_by, $confirmed_by, $rescheduled_by, $seen_by, $rescheduled_count, $done, $per_page, $sort_by, $sort_dir, $date_filter, $start_date, $end_date);
        return $response;
    }

    /**
     * Operation leadsLeadIdAppointmentsGetWithHttpInfo
     *
     * Get lead appointments
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $page Page number (optional)
     * @param  int $set_for Filter by the user for who appointment was created (optional)
     * @param  int $set_by Filter by the user for who have created an appointment (optional)
     * @param  int $modified_by Filter by the user for who have modified an appointment (optional)
     * @param  int $confirmed_by Filter by the user for who have confirmed an appointment (optional)
     * @param  int $rescheduled_by Filter by the user for who have rescheduled an appointment (optional)
     * @param  int $seen_by Filter by the user for who have mark an appointment as seen (optional)
     * @param  int $rescheduled_count Filter by the count of rescheduling (optional)
     * @param  bool $done Filter by the done flag (optional)
     * @param  int $per_page Count of records per page (optional)
     * @param  string $sort_by Sort appointments by columns (optional)
     * @param  string $sort_dir Sort direction (optional)
     * @param  string $date_filter Filtering appointments by a date range depends on this filter (optional)
     * @param  \DateTime $start_date Filter appointments by a date in format Y-m-d (optional)
     * @param  \DateTime $end_date Filter leads by a date in format Y-m-d (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse20024, HTTP status code, HTTP response headers (array of strings)
     */
    public function leadsLeadIdAppointmentsGetWithHttpInfo($lead_id, $page = null, $set_for = null, $set_by = null, $modified_by = null, $confirmed_by = null, $rescheduled_by = null, $seen_by = null, $rescheduled_count = null, $done = null, $per_page = null, $sort_by = null, $sort_dir = null, $date_filter = null, $start_date = null, $end_date = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20024';
        $request = $this->leadsLeadIdAppointmentsGetRequest($lead_id, $page, $set_for, $set_by, $modified_by, $confirmed_by, $rescheduled_by, $seen_by, $rescheduled_count, $done, $per_page, $sort_by, $sort_dir, $date_filter, $start_date, $end_date);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse20024',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation leadsLeadIdAppointmentsGetAsync
     *
     * Get lead appointments
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $page Page number (optional)
     * @param  int $set_for Filter by the user for who appointment was created (optional)
     * @param  int $set_by Filter by the user for who have created an appointment (optional)
     * @param  int $modified_by Filter by the user for who have modified an appointment (optional)
     * @param  int $confirmed_by Filter by the user for who have confirmed an appointment (optional)
     * @param  int $rescheduled_by Filter by the user for who have rescheduled an appointment (optional)
     * @param  int $seen_by Filter by the user for who have mark an appointment as seen (optional)
     * @param  int $rescheduled_count Filter by the count of rescheduling (optional)
     * @param  bool $done Filter by the done flag (optional)
     * @param  int $per_page Count of records per page (optional)
     * @param  string $sort_by Sort appointments by columns (optional)
     * @param  string $sort_dir Sort direction (optional)
     * @param  string $date_filter Filtering appointments by a date range depends on this filter (optional)
     * @param  \DateTime $start_date Filter appointments by a date in format Y-m-d (optional)
     * @param  \DateTime $end_date Filter leads by a date in format Y-m-d (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsLeadIdAppointmentsGetAsync($lead_id, $page = null, $set_for = null, $set_by = null, $modified_by = null, $confirmed_by = null, $rescheduled_by = null, $seen_by = null, $rescheduled_count = null, $done = null, $per_page = null, $sort_by = null, $sort_dir = null, $date_filter = null, $start_date = null, $end_date = null)
    {
        return $this->leadsLeadIdAppointmentsGetAsyncWithHttpInfo($lead_id, $page, $set_for, $set_by, $modified_by, $confirmed_by, $rescheduled_by, $seen_by, $rescheduled_count, $done, $per_page, $sort_by, $sort_dir, $date_filter, $start_date, $end_date)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation leadsLeadIdAppointmentsGetAsyncWithHttpInfo
     *
     * Get lead appointments
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $page Page number (optional)
     * @param  int $set_for Filter by the user for who appointment was created (optional)
     * @param  int $set_by Filter by the user for who have created an appointment (optional)
     * @param  int $modified_by Filter by the user for who have modified an appointment (optional)
     * @param  int $confirmed_by Filter by the user for who have confirmed an appointment (optional)
     * @param  int $rescheduled_by Filter by the user for who have rescheduled an appointment (optional)
     * @param  int $seen_by Filter by the user for who have mark an appointment as seen (optional)
     * @param  int $rescheduled_count Filter by the count of rescheduling (optional)
     * @param  bool $done Filter by the done flag (optional)
     * @param  int $per_page Count of records per page (optional)
     * @param  string $sort_by Sort appointments by columns (optional)
     * @param  string $sort_dir Sort direction (optional)
     * @param  string $date_filter Filtering appointments by a date range depends on this filter (optional)
     * @param  \DateTime $start_date Filter appointments by a date in format Y-m-d (optional)
     * @param  \DateTime $end_date Filter leads by a date in format Y-m-d (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsLeadIdAppointmentsGetAsyncWithHttpInfo($lead_id, $page = null, $set_for = null, $set_by = null, $modified_by = null, $confirmed_by = null, $rescheduled_by = null, $seen_by = null, $rescheduled_count = null, $done = null, $per_page = null, $sort_by = null, $sort_dir = null, $date_filter = null, $start_date = null, $end_date = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20024';
        $request = $this->leadsLeadIdAppointmentsGetRequest($lead_id, $page, $set_for, $set_by, $modified_by, $confirmed_by, $rescheduled_by, $seen_by, $rescheduled_count, $done, $per_page, $sort_by, $sort_dir, $date_filter, $start_date, $end_date);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'leadsLeadIdAppointmentsGet'
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $page Page number (optional)
     * @param  int $set_for Filter by the user for who appointment was created (optional)
     * @param  int $set_by Filter by the user for who have created an appointment (optional)
     * @param  int $modified_by Filter by the user for who have modified an appointment (optional)
     * @param  int $confirmed_by Filter by the user for who have confirmed an appointment (optional)
     * @param  int $rescheduled_by Filter by the user for who have rescheduled an appointment (optional)
     * @param  int $seen_by Filter by the user for who have mark an appointment as seen (optional)
     * @param  int $rescheduled_count Filter by the count of rescheduling (optional)
     * @param  bool $done Filter by the done flag (optional)
     * @param  int $per_page Count of records per page (optional)
     * @param  string $sort_by Sort appointments by columns (optional)
     * @param  string $sort_dir Sort direction (optional)
     * @param  string $date_filter Filtering appointments by a date range depends on this filter (optional)
     * @param  \DateTime $start_date Filter appointments by a date in format Y-m-d (optional)
     * @param  \DateTime $end_date Filter leads by a date in format Y-m-d (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function leadsLeadIdAppointmentsGetRequest($lead_id, $page = null, $set_for = null, $set_by = null, $modified_by = null, $confirmed_by = null, $rescheduled_by = null, $seen_by = null, $rescheduled_count = null, $done = null, $per_page = null, $sort_by = null, $sort_dir = null, $date_filter = null, $start_date = null, $end_date = null)
    {
        // verify the required parameter 'lead_id' is set
        if ($lead_id === null || (is_array($lead_id) && count($lead_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $lead_id when calling leadsLeadIdAppointmentsGet'
            );
        }

        $resourcePath = '/leads/{leadId}/appointments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page, null);
        }
        // query params
        if ($set_for !== null) {
            $queryParams['set_for'] = ObjectSerializer::toQueryValue($set_for, null);
        }
        // query params
        if ($set_by !== null) {
            $queryParams['set_by'] = ObjectSerializer::toQueryValue($set_by, null);
        }
        // query params
        if ($modified_by !== null) {
            $queryParams['modified_by'] = ObjectSerializer::toQueryValue($modified_by, null);
        }
        // query params
        if ($confirmed_by !== null) {
            $queryParams['confirmed_by'] = ObjectSerializer::toQueryValue($confirmed_by, null);
        }
        // query params
        if ($rescheduled_by !== null) {
            $queryParams['rescheduled_by'] = ObjectSerializer::toQueryValue($rescheduled_by, null);
        }
        // query params
        if ($seen_by !== null) {
            $queryParams['seen_by'] = ObjectSerializer::toQueryValue($seen_by, null);
        }
        // query params
        if ($rescheduled_count !== null) {
            $queryParams['rescheduled_count'] = ObjectSerializer::toQueryValue($rescheduled_count, null);
        }
        // query params
        if ($done !== null) {
            $queryParams['done'] = ObjectSerializer::toQueryValue($done, null);
        }
        // query params
        if ($per_page !== null) {
            $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page, null);
        }
        // query params
        if ($sort_by !== null) {
            $queryParams['sort_by'] = ObjectSerializer::toQueryValue($sort_by, null);
        }
        // query params
        if ($sort_dir !== null) {
            $queryParams['sort_dir'] = ObjectSerializer::toQueryValue($sort_dir, null);
        }
        // query params
        if ($date_filter !== null) {
            $queryParams['date_filter'] = ObjectSerializer::toQueryValue($date_filter, null);
        }
        // query params
        if ($start_date !== null) {
            $queryParams['start_date'] = ObjectSerializer::toQueryValue($start_date, 'date');
        }
        // query params
        if ($end_date !== null) {
            $queryParams['end_date'] = ObjectSerializer::toQueryValue($end_date, 'date');
        }

        // path params
        if ($lead_id !== null) {
            $resourcePath = str_replace(
                '{' . 'leadId' . '}',
                ObjectSerializer::toPathValue($lead_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-API-KEY');
        if ($apiKey !== null) {
            $headers['X-API-KEY'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation leadsLeadIdAppointmentsPost
     *
     * Create a lead appointment
     *
     * @param  \Swagger\Client\Model\Body6 $body Create a lead appointment (required)
     * @param  int $lead_id Lead Id (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse20025
     */
    public function leadsLeadIdAppointmentsPost($body, $lead_id)
    {
        list($response) = $this->leadsLeadIdAppointmentsPostWithHttpInfo($body, $lead_id);
        return $response;
    }

    /**
     * Operation leadsLeadIdAppointmentsPostWithHttpInfo
     *
     * Create a lead appointment
     *
     * @param  \Swagger\Client\Model\Body6 $body Create a lead appointment (required)
     * @param  int $lead_id Lead Id (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse20025, HTTP status code, HTTP response headers (array of strings)
     */
    public function leadsLeadIdAppointmentsPostWithHttpInfo($body, $lead_id)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20025';
        $request = $this->leadsLeadIdAppointmentsPostRequest($body, $lead_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse20025',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 405:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse405',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation leadsLeadIdAppointmentsPostAsync
     *
     * Create a lead appointment
     *
     * @param  \Swagger\Client\Model\Body6 $body Create a lead appointment (required)
     * @param  int $lead_id Lead Id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsLeadIdAppointmentsPostAsync($body, $lead_id)
    {
        return $this->leadsLeadIdAppointmentsPostAsyncWithHttpInfo($body, $lead_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation leadsLeadIdAppointmentsPostAsyncWithHttpInfo
     *
     * Create a lead appointment
     *
     * @param  \Swagger\Client\Model\Body6 $body Create a lead appointment (required)
     * @param  int $lead_id Lead Id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsLeadIdAppointmentsPostAsyncWithHttpInfo($body, $lead_id)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20025';
        $request = $this->leadsLeadIdAppointmentsPostRequest($body, $lead_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'leadsLeadIdAppointmentsPost'
     *
     * @param  \Swagger\Client\Model\Body6 $body Create a lead appointment (required)
     * @param  int $lead_id Lead Id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function leadsLeadIdAppointmentsPostRequest($body, $lead_id)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling leadsLeadIdAppointmentsPost'
            );
        }
        // verify the required parameter 'lead_id' is set
        if ($lead_id === null || (is_array($lead_id) && count($lead_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $lead_id when calling leadsLeadIdAppointmentsPost'
            );
        }

        $resourcePath = '/leads/{leadId}/appointments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($lead_id !== null) {
            $resourcePath = str_replace(
                '{' . 'leadId' . '}',
                ObjectSerializer::toPathValue($lead_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-API-KEY');
        if ($apiKey !== null) {
            $headers['X-API-KEY'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation leadsLeadIdDocumentsDocumentIdGet
     *
     * Download a document
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $document_id Document Id (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return string
     */
    public function leadsLeadIdDocumentsDocumentIdGet($lead_id, $document_id)
    {
        list($response) = $this->leadsLeadIdDocumentsDocumentIdGetWithHttpInfo($lead_id, $document_id);
        return $response;
    }

    /**
     * Operation leadsLeadIdDocumentsDocumentIdGetWithHttpInfo
     *
     * Download a document
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $document_id Document Id (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of string, HTTP status code, HTTP response headers (array of strings)
     */
    public function leadsLeadIdDocumentsDocumentIdGetWithHttpInfo($lead_id, $document_id)
    {
        $returnType = 'string';
        $request = $this->leadsLeadIdDocumentsDocumentIdGetRequest($lead_id, $document_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'string',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Get Archive URL for specific Lead Id and documents identifiers, response mapper
     *
     * @param int $lead_id Lead Id
     * @param int[] $document_ids Document Identifiers
     *
     * @return mixed
     * @throws ApiException
     */
    public function leadsLeadIdDocumentsArchiveGet($lead_id, $document_ids)
    {
        list($response) = $this->leadsLeadIdDocumentsArchiveGetWithHttpInfo($lead_id, $document_ids);
        return $response;
    }

    /**
     * Get Archive URL for specific Lead Id and documents identifiers, response mapper
     *
     * @param int $lead_id Lead Id
     * @param int[] $document_ids
     *
     * @return array
     * @throws ApiException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function leadsLeadIdDocumentsArchiveGetWithHttpInfo($lead_id, $document_ids)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20061';
        $request = $this->leadsDocumentsArchiveRequest($lead_id, $document_ids);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);

                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse20061',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse500',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Preaprare api request and execute to get archived lead files URL
     *
     * @param int $lead_id Lead Identifier
     * @param int[] $document_ids Document identifiers
     *
     * @return Request
     */
    protected function leadsDocumentsArchiveRequest($lead_id, $document_ids)
    {
        $resourcePath = "/leads/{$lead_id}/documents/download-files-archived";
        $formParams = [];
        $queryParams = [
            'files[]' => $document_ids
        ];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-API-KEY');
        if ($apiKey !== null) {
            $headers['X-API-KEY'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation leadsLeadIdDocumentsDocumentIdGetAsync
     *
     * Download a document
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $document_id Document Id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsLeadIdDocumentsDocumentIdGetAsync($lead_id, $document_id)
    {
        return $this->leadsLeadIdDocumentsDocumentIdGetAsyncWithHttpInfo($lead_id, $document_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation leadsLeadIdDocumentsDocumentIdGetAsyncWithHttpInfo
     *
     * Download a document
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $document_id Document Id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsLeadIdDocumentsDocumentIdGetAsyncWithHttpInfo($lead_id, $document_id)
    {
        $returnType = 'string';
        $request = $this->leadsLeadIdDocumentsDocumentIdGetRequest($lead_id, $document_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'leadsLeadIdDocumentsDocumentIdGet'
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $document_id Document Id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function leadsLeadIdDocumentsDocumentIdGetRequest($lead_id, $document_id)
    {
        // verify the required parameter 'lead_id' is set
        if ($lead_id === null || (is_array($lead_id) && count($lead_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $lead_id when calling leadsLeadIdDocumentsDocumentIdGet'
            );
        }
        // verify the required parameter 'document_id' is set
        if ($document_id === null || (is_array($document_id) && count($document_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $document_id when calling leadsLeadIdDocumentsDocumentIdGet'
            );
        }

        $resourcePath = '/leads/{leadId}/documents/{documentId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($lead_id !== null) {
            $resourcePath = str_replace(
                '{' . 'leadId' . '}',
                ObjectSerializer::toPathValue($lead_id),
                $resourcePath
            );
        }
        // path params
        if ($document_id !== null) {
            $resourcePath = str_replace(
                '{' . 'documentId' . '}',
                ObjectSerializer::toPathValue($document_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/octet-stream', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/octet-stream', 'application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-API-KEY');
        if ($apiKey !== null) {
            $headers['X-API-KEY'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation leadsLeadIdDocumentsGet
     *
     * Get a list of available documents
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse20032
     */
    public function leadsLeadIdDocumentsGet($lead_id, $page = null, $per_page = null)
    {
        list($response) = $this->leadsLeadIdDocumentsGetWithHttpInfo($lead_id, $page, $per_page);
        return $response;
    }

    /**
     * Operation leadsLeadIdDocumentsGetWithHttpInfo
     *
     * Get a list of available documents
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse20032, HTTP status code, HTTP response headers (array of strings)
     */
    public function leadsLeadIdDocumentsGetWithHttpInfo($lead_id, $page = null, $per_page = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20032';
        $request = $this->leadsLeadIdDocumentsGetRequest($lead_id, $page, $per_page);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse20032',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation leadsLeadIdDocumentsGetAsync
     *
     * Get a list of available documents
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsLeadIdDocumentsGetAsync($lead_id, $page = null, $per_page = null)
    {
        return $this->leadsLeadIdDocumentsGetAsyncWithHttpInfo($lead_id, $page, $per_page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation leadsLeadIdDocumentsGetAsyncWithHttpInfo
     *
     * Get a list of available documents
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsLeadIdDocumentsGetAsyncWithHttpInfo($lead_id, $page = null, $per_page = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20032';
        $request = $this->leadsLeadIdDocumentsGetRequest($lead_id, $page, $per_page);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'leadsLeadIdDocumentsGet'
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function leadsLeadIdDocumentsGetRequest($lead_id, $page = null, $per_page = null)
    {
        // verify the required parameter 'lead_id' is set
        if ($lead_id === null || (is_array($lead_id) && count($lead_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $lead_id when calling leadsLeadIdDocumentsGet'
            );
        }

        $resourcePath = '/leads/{leadId}/documents';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page, null);
        }
        // query params
        if ($per_page !== null) {
            $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page, null);
        }

        // path params
        if ($lead_id !== null) {
            $resourcePath = str_replace(
                '{' . 'leadId' . '}',
                ObjectSerializer::toPathValue($lead_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-API-KEY');
        if ($apiKey !== null) {
            $headers['X-API-KEY'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation leadsLeadIdDocumentsPost
     *
     * Upload a document
     *
     * @param  int $tab Tab Id (required)
     * @param  int $label Label Id (required)
     * @param  string $filename File name (required)
     * @param  int $lead_id Lead Id (required)
     * @param  Object $body body (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return string
     */
    public function leadsLeadIdDocumentsPost($tab, $label, $filename, $lead_id, $body = null)
    {
        list($response) = $this->leadsLeadIdDocumentsPostWithHttpInfo($tab, $label, $filename, $lead_id, $body);
        return $response;
    }

    /**
     * Operation leadsLeadIdDocumentsPostWithHttpInfo
     *
     * Upload a document
     *
     * @param  int $tab Tab Id (required)
     * @param  int $label Label Id (required)
     * @param  string $filename File name (required)
     * @param  int $lead_id Lead Id (required)
     * @param  Object $body (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of string, HTTP status code, HTTP response headers (array of strings)
     */
    public function leadsLeadIdDocumentsPostWithHttpInfo($tab, $label, $filename, $lead_id, $body = null)
    {
        $returnType = 'string';
        $request = $this->leadsLeadIdDocumentsPostRequest($tab, $label, $filename, $lead_id, $body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'string',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 405:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse405',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation leadsLeadIdDocumentsPostAsync
     *
     * Upload a document
     *
     * @param  int $tab Tab Id (required)
     * @param  int $label Label Id (required)
     * @param  string $filename File name (required)
     * @param  int $lead_id Lead Id (required)
     * @param  Object $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsLeadIdDocumentsPostAsync($tab, $label, $filename, $lead_id, $body = null)
    {
        return $this->leadsLeadIdDocumentsPostAsyncWithHttpInfo($tab, $label, $filename, $lead_id, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation leadsLeadIdDocumentsPostAsyncWithHttpInfo
     *
     * Upload a document
     *
     * @param  int $tab Tab Id (required)
     * @param  int $label Label Id (required)
     * @param  string $filename File name (required)
     * @param  int $lead_id Lead Id (required)
     * @param  Object $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsLeadIdDocumentsPostAsyncWithHttpInfo($tab, $label, $filename, $lead_id, $body = null)
    {
        $returnType = 'string';
        $request = $this->leadsLeadIdDocumentsPostRequest($tab, $label, $filename, $lead_id, $body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'leadsLeadIdDocumentsPost'
     *
     * @param  int $tab Tab Id (required)
     * @param  int $label Label Id (required)
     * @param  string $filename File name (required)
     * @param  int $lead_id Lead Id (required)
     * @param  Object $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function leadsLeadIdDocumentsPostRequest($tab, $label, $filename, $lead_id, $body = null)
    {
        // verify the required parameter 'tab' is set
        if ($tab === null || (is_array($tab) && count($tab) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $tab when calling leadsLeadIdDocumentsPost'
            );
        }
        // verify the required parameter 'label' is set
        if ($label === null || (is_array($label) && count($label) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $label when calling leadsLeadIdDocumentsPost'
            );
        }
        // verify the required parameter 'filename' is set
        if ($filename === null || (is_array($filename) && count($filename) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $filename when calling leadsLeadIdDocumentsPost'
            );
        }
        // verify the required parameter 'lead_id' is set
        if ($lead_id === null || (is_array($lead_id) && count($lead_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $lead_id when calling leadsLeadIdDocumentsPost'
            );
        }

        $resourcePath = '/leads/{leadId}/documents';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($tab !== null) {
            $queryParams['tab'] = ObjectSerializer::toQueryValue($tab, null);
        }
        // query params
        if ($label !== null) {
            $queryParams['label'] = ObjectSerializer::toQueryValue($label, null);
        }
        // query params
        if ($filename !== null) {
            $queryParams['filename'] = ObjectSerializer::toQueryValue($filename, null);
        }

        // path params
        if ($lead_id !== null) {
            $resourcePath = str_replace(
                '{' . 'leadId' . '}',
                ObjectSerializer::toPathValue($lead_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['text/plain', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['text/plain', 'application/json'],
                ['application/octet-stream']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-API-KEY');
        if ($apiKey !== null) {
            $headers['X-API-KEY'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation leadsLeadIdEmailsTemplateIdPost
     *
     * Send an email to lead with template
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $template_id Template Id (required)
     * @param  \Swagger\Client\Model\Body11 $body body (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse20037
     */
    public function leadsLeadIdEmailsTemplateIdPost($lead_id, $template_id, $body = null)
    {
        list($response) = $this->leadsLeadIdEmailsTemplateIdPostWithHttpInfo($lead_id, $template_id, $body);
        return $response;
    }

    /**
     * Operation leadsLeadIdEmailsTemplateIdPostWithHttpInfo
     *
     * Send an email to lead with template
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $template_id Template Id (required)
     * @param  \Swagger\Client\Model\Body11 $body (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse20037, HTTP status code, HTTP response headers (array of strings)
     */
    public function leadsLeadIdEmailsTemplateIdPostWithHttpInfo($lead_id, $template_id, $body = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20037';
        $request = $this->leadsLeadIdEmailsTemplateIdPostRequest($lead_id, $template_id, $body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse20037',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 405:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse405',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation leadsLeadIdEmailsTemplateIdPostAsync
     *
     * Send an email to lead with template
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $template_id Template Id (required)
     * @param  \Swagger\Client\Model\Body11 $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsLeadIdEmailsTemplateIdPostAsync($lead_id, $template_id, $body = null)
    {
        return $this->leadsLeadIdEmailsTemplateIdPostAsyncWithHttpInfo($lead_id, $template_id, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation leadsLeadIdEmailsTemplateIdPostAsyncWithHttpInfo
     *
     * Send an email to lead with template
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $template_id Template Id (required)
     * @param  \Swagger\Client\Model\Body11 $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsLeadIdEmailsTemplateIdPostAsyncWithHttpInfo($lead_id, $template_id, $body = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20037';
        $request = $this->leadsLeadIdEmailsTemplateIdPostRequest($lead_id, $template_id, $body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'leadsLeadIdEmailsTemplateIdPost'
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $template_id Template Id (required)
     * @param  \Swagger\Client\Model\Body11 $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function leadsLeadIdEmailsTemplateIdPostRequest($lead_id, $template_id, $body = null)
    {
        // verify the required parameter 'lead_id' is set
        if ($lead_id === null || (is_array($lead_id) && count($lead_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $lead_id when calling leadsLeadIdEmailsTemplateIdPost'
            );
        }
        // verify the required parameter 'template_id' is set
        if ($template_id === null || (is_array($template_id) && count($template_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $template_id when calling leadsLeadIdEmailsTemplateIdPost'
            );
        }

        $resourcePath = '/leads/{leadId}/emails/{templateId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($lead_id !== null) {
            $resourcePath = str_replace(
                '{' . 'leadId' . '}',
                ObjectSerializer::toPathValue($lead_id),
                $resourcePath
            );
        }
        // path params
        if ($template_id !== null) {
            $resourcePath = str_replace(
                '{' . 'templateId' . '}',
                ObjectSerializer::toPathValue($template_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-API-KEY');
        if ($apiKey !== null) {
            $headers['X-API-KEY'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation leadsLeadIdGet
     *
     * Get detailed lead information
     *
     * @param  int $lead_id Lead Id (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse20016
     */
    public function leadsLeadIdGet($lead_id)
    {
        list($response) = $this->leadsLeadIdGetWithHttpInfo($lead_id);
        return $response;
    }

    /**
     * Operation leadsLeadIdGetWithHttpInfo
     *
     * Get detailed lead information
     *
     * @param  int $lead_id Lead Id (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse20016, HTTP status code, HTTP response headers (array of strings)
     */
    public function leadsLeadIdGetWithHttpInfo($lead_id)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20016';
        $request = $this->leadsLeadIdGetRequest($lead_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse20016',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation leadsLeadIdGetAsync
     *
     * Get detailed lead information
     *
     * @param  int $lead_id Lead Id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsLeadIdGetAsync($lead_id)
    {
        return $this->leadsLeadIdGetAsyncWithHttpInfo($lead_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation leadsLeadIdGetAsyncWithHttpInfo
     *
     * Get detailed lead information
     *
     * @param  int $lead_id Lead Id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsLeadIdGetAsyncWithHttpInfo($lead_id)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20016';
        $request = $this->leadsLeadIdGetRequest($lead_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'leadsLeadIdGet'
     *
     * @param  int $lead_id Lead Id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function leadsLeadIdGetRequest($lead_id)
    {
        // verify the required parameter 'lead_id' is set
        if ($lead_id === null || (is_array($lead_id) && count($lead_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $lead_id when calling leadsLeadIdGet'
            );
        }

        $resourcePath = '/leads/{leadId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($lead_id !== null) {
            $resourcePath = str_replace(
                '{' . 'leadId' . '}',
                ObjectSerializer::toPathValue($lead_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-API-KEY');
        if ($apiKey !== null) {
            $headers['X-API-KEY'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation leadsLeadIdMailboxEmailIdAttachmentAttachmentIdGet
     *
     * Download a mailbox email attachment
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $email_id Email Id (required)
     * @param  int $attachment_id Attachment Id (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return string
     */
    public function leadsLeadIdMailboxEmailIdAttachmentAttachmentIdGet($lead_id, $email_id, $attachment_id)
    {
        list($response) = $this->leadsLeadIdMailboxEmailIdAttachmentAttachmentIdGetWithHttpInfo($lead_id, $email_id, $attachment_id);
        return $response;
    }

    /**
     * Operation leadsLeadIdMailboxEmailIdAttachmentAttachmentIdGetWithHttpInfo
     *
     * Download a mailbox email attachment
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $email_id Email Id (required)
     * @param  int $attachment_id Attachment Id (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of string, HTTP status code, HTTP response headers (array of strings)
     */
    public function leadsLeadIdMailboxEmailIdAttachmentAttachmentIdGetWithHttpInfo($lead_id, $email_id, $attachment_id)
    {
        $returnType = 'string';
        $request = $this->leadsLeadIdMailboxEmailIdAttachmentAttachmentIdGetRequest($lead_id, $email_id, $attachment_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'string',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation leadsLeadIdMailboxEmailIdAttachmentAttachmentIdGetAsync
     *
     * Download a mailbox email attachment
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $email_id Email Id (required)
     * @param  int $attachment_id Attachment Id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsLeadIdMailboxEmailIdAttachmentAttachmentIdGetAsync($lead_id, $email_id, $attachment_id)
    {
        return $this->leadsLeadIdMailboxEmailIdAttachmentAttachmentIdGetAsyncWithHttpInfo($lead_id, $email_id, $attachment_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation leadsLeadIdMailboxEmailIdAttachmentAttachmentIdGetAsyncWithHttpInfo
     *
     * Download a mailbox email attachment
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $email_id Email Id (required)
     * @param  int $attachment_id Attachment Id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsLeadIdMailboxEmailIdAttachmentAttachmentIdGetAsyncWithHttpInfo($lead_id, $email_id, $attachment_id)
    {
        $returnType = 'string';
        $request = $this->leadsLeadIdMailboxEmailIdAttachmentAttachmentIdGetRequest($lead_id, $email_id, $attachment_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'leadsLeadIdMailboxEmailIdAttachmentAttachmentIdGet'
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $email_id Email Id (required)
     * @param  int $attachment_id Attachment Id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function leadsLeadIdMailboxEmailIdAttachmentAttachmentIdGetRequest($lead_id, $email_id, $attachment_id)
    {
        // verify the required parameter 'lead_id' is set
        if ($lead_id === null || (is_array($lead_id) && count($lead_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $lead_id when calling leadsLeadIdMailboxEmailIdAttachmentAttachmentIdGet'
            );
        }
        // verify the required parameter 'email_id' is set
        if ($email_id === null || (is_array($email_id) && count($email_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $email_id when calling leadsLeadIdMailboxEmailIdAttachmentAttachmentIdGet'
            );
        }
        // verify the required parameter 'attachment_id' is set
        if ($attachment_id === null || (is_array($attachment_id) && count($attachment_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $attachment_id when calling leadsLeadIdMailboxEmailIdAttachmentAttachmentIdGet'
            );
        }

        $resourcePath = '/leads/{leadId}/mailbox/{emailId}/attachment/{attachmentId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($lead_id !== null) {
            $resourcePath = str_replace(
                '{' . 'leadId' . '}',
                ObjectSerializer::toPathValue($lead_id),
                $resourcePath
            );
        }
        // path params
        if ($email_id !== null) {
            $resourcePath = str_replace(
                '{' . 'emailId' . '}',
                ObjectSerializer::toPathValue($email_id),
                $resourcePath
            );
        }
        // path params
        if ($attachment_id !== null) {
            $resourcePath = str_replace(
                '{' . 'attachmentId' . '}',
                ObjectSerializer::toPathValue($attachment_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/octet-stream', 'application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/octet-stream', 'application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-API-KEY');
        if ($apiKey !== null) {
            $headers['X-API-KEY'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation leadsLeadIdNotesGet
     *
     * Get lead notes
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse20022
     */
    public function leadsLeadIdNotesGet($lead_id, $page = null, $per_page = null)
    {
        list($response) = $this->leadsLeadIdNotesGetWithHttpInfo($lead_id, $page, $per_page);
        return $response;
    }

    /**
     * Operation leadsLeadIdNotesGetWithHttpInfo
     *
     * Get lead notes
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse20022, HTTP status code, HTTP response headers (array of strings)
     */
    public function leadsLeadIdNotesGetWithHttpInfo($lead_id, $page = null, $per_page = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20022';
        $request = $this->leadsLeadIdNotesGetRequest($lead_id, $page, $per_page);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse20022',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation leadsLeadIdNotesGetAsync
     *
     * Get lead notes
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsLeadIdNotesGetAsync($lead_id, $page = null, $per_page = null)
    {
        return $this->leadsLeadIdNotesGetAsyncWithHttpInfo($lead_id, $page, $per_page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation leadsLeadIdNotesGetAsyncWithHttpInfo
     *
     * Get lead notes
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsLeadIdNotesGetAsyncWithHttpInfo($lead_id, $page = null, $per_page = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20022';
        $request = $this->leadsLeadIdNotesGetRequest($lead_id, $page, $per_page);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'leadsLeadIdNotesGet'
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function leadsLeadIdNotesGetRequest($lead_id, $page = null, $per_page = null)
    {
        // verify the required parameter 'lead_id' is set
        if ($lead_id === null || (is_array($lead_id) && count($lead_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $lead_id when calling leadsLeadIdNotesGet'
            );
        }

        $resourcePath = '/leads/{leadId}/notes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page, null);
        }
        // query params
        if ($per_page !== null) {
            $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page, null);
        }

        // path params
        if ($lead_id !== null) {
            $resourcePath = str_replace(
                '{' . 'leadId' . '}',
                ObjectSerializer::toPathValue($lead_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-API-KEY');
        if ($apiKey !== null) {
            $headers['X-API-KEY'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation leadsLeadIdNotesPost
     *
     * Create a lead note
     *
     * @param  \Swagger\Client\Model\Body5 $body Create a lead note (required)
     * @param  int $lead_id Lead Id (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse20023
     */
    public function leadsLeadIdNotesPost($body, $lead_id)
    {
        list($response) = $this->leadsLeadIdNotesPostWithHttpInfo($body, $lead_id);
        return $response;
    }

    /**
     * Operation leadsLeadIdNotesPostWithHttpInfo
     *
     * Create a lead note
     *
     * @param  \Swagger\Client\Model\Body5 $body Create a lead note (required)
     * @param  int $lead_id Lead Id (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse20023, HTTP status code, HTTP response headers (array of strings)
     */
    public function leadsLeadIdNotesPostWithHttpInfo($body, $lead_id)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20023';
        $request = $this->leadsLeadIdNotesPostRequest($body, $lead_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse20023',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 405:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse405',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation leadsLeadIdNotesPostAsync
     *
     * Create a lead note
     *
     * @param  \Swagger\Client\Model\Body5 $body Create a lead note (required)
     * @param  int $lead_id Lead Id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsLeadIdNotesPostAsync($body, $lead_id)
    {
        return $this->leadsLeadIdNotesPostAsyncWithHttpInfo($body, $lead_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation leadsLeadIdNotesPostAsyncWithHttpInfo
     *
     * Create a lead note
     *
     * @param  \Swagger\Client\Model\Body5 $body Create a lead note (required)
     * @param  int $lead_id Lead Id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsLeadIdNotesPostAsyncWithHttpInfo($body, $lead_id)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20023';
        $request = $this->leadsLeadIdNotesPostRequest($body, $lead_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'leadsLeadIdNotesPost'
     *
     * @param  \Swagger\Client\Model\Body5 $body Create a lead note (required)
     * @param  int $lead_id Lead Id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function leadsLeadIdNotesPostRequest($body, $lead_id)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling leadsLeadIdNotesPost'
            );
        }
        // verify the required parameter 'lead_id' is set
        if ($lead_id === null || (is_array($lead_id) && count($lead_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $lead_id when calling leadsLeadIdNotesPost'
            );
        }

        $resourcePath = '/leads/{leadId}/notes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($lead_id !== null) {
            $resourcePath = str_replace(
                '{' . 'leadId' . '}',
                ObjectSerializer::toPathValue($lead_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-API-KEY');
        if ($apiKey !== null) {
            $headers['X-API-KEY'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation leadsLeadIdPatch
     *
     * Update a lead
     *
     * @param  \Swagger\Client\Model\Body2 $body Lead changes (send only fields you want to change) (required)
     * @param  int $lead_id Lead Id (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse20017
     */
    public function leadsLeadIdPatch($body, $lead_id)
    {
        list($response) = $this->leadsLeadIdPatchWithHttpInfo($body, $lead_id);
        return $response;
    }

    /**
     * Operation leadsLeadIdPatchWithHttpInfo
     *
     * Update a lead
     *
     * @param  \Swagger\Client\Model\Body2 $body Lead changes (send only fields you want to change) (required)
     * @param  int $lead_id Lead Id (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse20017, HTTP status code, HTTP response headers (array of strings)
     */
    public function leadsLeadIdPatchWithHttpInfo($body, $lead_id)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20017';
        $request = $this->leadsLeadIdPatchRequest($body, $lead_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse20017',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 405:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse405',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation leadsLeadIdPatchAsync
     *
     * Update a lead
     *
     * @param  \Swagger\Client\Model\Body2 $body Lead changes (send only fields you want to change) (required)
     * @param  int $lead_id Lead Id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsLeadIdPatchAsync($body, $lead_id)
    {
        return $this->leadsLeadIdPatchAsyncWithHttpInfo($body, $lead_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation leadsLeadIdPatchAsyncWithHttpInfo
     *
     * Update a lead
     *
     * @param  \Swagger\Client\Model\Body2 $body Lead changes (send only fields you want to change) (required)
     * @param  int $lead_id Lead Id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsLeadIdPatchAsyncWithHttpInfo($body, $lead_id)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20017';
        $request = $this->leadsLeadIdPatchRequest($body, $lead_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'leadsLeadIdPatch'
     *
     * @param  \Swagger\Client\Model\Body2 $body Lead changes (send only fields you want to change) (required)
     * @param  int $lead_id Lead Id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function leadsLeadIdPatchRequest($body, $lead_id)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling leadsLeadIdPatch'
            );
        }
        // verify the required parameter 'lead_id' is set
        if ($lead_id === null || (is_array($lead_id) && count($lead_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $lead_id when calling leadsLeadIdPatch'
            );
        }

        $resourcePath = '/leads/{leadId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($lead_id !== null) {
            $resourcePath = str_replace(
                '{' . 'leadId' . '}',
                ObjectSerializer::toPathValue($lead_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-API-KEY');
        if ($apiKey !== null) {
            $headers['X-API-KEY'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'PATCH',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation leadsLeadIdSmsTemplateIdPost
     *
     * Send an SMS to lead with selected SMS template
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $template_id Template Id (required)
     * @param  \Swagger\Client\Model\Body12 $body body (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse20039
     */
    public function leadsLeadIdSmsTemplateIdPost($lead_id, $template_id, $body = null)
    {
        list($response) = $this->leadsLeadIdSmsTemplateIdPostWithHttpInfo($lead_id, $template_id, $body);
        return $response;
    }

    /**
     * Operation leadsLeadIdSmsTemplateIdPostWithHttpInfo
     *
     * Send an SMS to lead with selected SMS template
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $template_id Template Id (required)
     * @param  \Swagger\Client\Model\Body12 $body (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse20039, HTTP status code, HTTP response headers (array of strings)
     */
    public function leadsLeadIdSmsTemplateIdPostWithHttpInfo($lead_id, $template_id, $body = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20039';
        $request = $this->leadsLeadIdSmsTemplateIdPostRequest($lead_id, $template_id, $body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse20039',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 405:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse405',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation leadsLeadIdSmsTemplateIdPostAsync
     *
     * Send an SMS to lead with selected SMS template
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $template_id Template Id (required)
     * @param  \Swagger\Client\Model\Body12 $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsLeadIdSmsTemplateIdPostAsync($lead_id, $template_id, $body = null)
    {
        return $this->leadsLeadIdSmsTemplateIdPostAsyncWithHttpInfo($lead_id, $template_id, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation leadsLeadIdSmsTemplateIdPostAsyncWithHttpInfo
     *
     * Send an SMS to lead with selected SMS template
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $template_id Template Id (required)
     * @param  \Swagger\Client\Model\Body12 $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsLeadIdSmsTemplateIdPostAsyncWithHttpInfo($lead_id, $template_id, $body = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20039';
        $request = $this->leadsLeadIdSmsTemplateIdPostRequest($lead_id, $template_id, $body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'leadsLeadIdSmsTemplateIdPost'
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $template_id Template Id (required)
     * @param  \Swagger\Client\Model\Body12 $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function leadsLeadIdSmsTemplateIdPostRequest($lead_id, $template_id, $body = null)
    {
        // verify the required parameter 'lead_id' is set
        if ($lead_id === null || (is_array($lead_id) && count($lead_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $lead_id when calling leadsLeadIdSmsTemplateIdPost'
            );
        }
        // verify the required parameter 'template_id' is set
        if ($template_id === null || (is_array($template_id) && count($template_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $template_id when calling leadsLeadIdSmsTemplateIdPost'
            );
        }

        $resourcePath = '/leads/{leadId}/sms/{templateId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($lead_id !== null) {
            $resourcePath = str_replace(
                '{' . 'leadId' . '}',
                ObjectSerializer::toPathValue($lead_id),
                $resourcePath
            );
        }
        // path params
        if ($template_id !== null) {
            $resourcePath = str_replace(
                '{' . 'templateId' . '}',
                ObjectSerializer::toPathValue($template_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-API-KEY');
        if ($apiKey !== null) {
            $headers['X-API-KEY'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation leadsLeadIdTasksGet
     *
     * Get lead tasks
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse20027
     */
    public function leadsLeadIdTasksGet($lead_id, $page = null, $per_page = null)
    {
        list($response) = $this->leadsLeadIdTasksGetWithHttpInfo($lead_id, $page, $per_page);
        return $response;
    }

    /**
     * Operation leadsLeadIdTasksGetWithHttpInfo
     *
     * Get lead tasks
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse20027, HTTP status code, HTTP response headers (array of strings)
     */
    public function leadsLeadIdTasksGetWithHttpInfo($lead_id, $page = null, $per_page = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20027';
        $request = $this->leadsLeadIdTasksGetRequest($lead_id, $page, $per_page);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse20027',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation leadsLeadIdTasksGetAsync
     *
     * Get lead tasks
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsLeadIdTasksGetAsync($lead_id, $page = null, $per_page = null)
    {
        return $this->leadsLeadIdTasksGetAsyncWithHttpInfo($lead_id, $page, $per_page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation leadsLeadIdTasksGetAsyncWithHttpInfo
     *
     * Get lead tasks
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsLeadIdTasksGetAsyncWithHttpInfo($lead_id, $page = null, $per_page = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20027';
        $request = $this->leadsLeadIdTasksGetRequest($lead_id, $page, $per_page);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'leadsLeadIdTasksGet'
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function leadsLeadIdTasksGetRequest($lead_id, $page = null, $per_page = null)
    {
        // verify the required parameter 'lead_id' is set
        if ($lead_id === null || (is_array($lead_id) && count($lead_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $lead_id when calling leadsLeadIdTasksGet'
            );
        }

        $resourcePath = '/leads/{leadId}/tasks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page, null);
        }
        // query params
        if ($per_page !== null) {
            $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page, null);
        }

        // path params
        if ($lead_id !== null) {
            $resourcePath = str_replace(
                '{' . 'leadId' . '}',
                ObjectSerializer::toPathValue($lead_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-API-KEY');
        if ($apiKey !== null) {
            $headers['X-API-KEY'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation leadsLeadIdTasksPost
     *
     * Create a lead task
     *
     * @param  \Swagger\Client\Model\Body7 $body Create a lead task (required)
     * @param  int $lead_id Lead Id (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse20028
     */
    public function leadsLeadIdTasksPost($body, $lead_id)
    {
        list($response) = $this->leadsLeadIdTasksPostWithHttpInfo($body, $lead_id);
        return $response;
    }

    /**
     * Operation leadsLeadIdTasksPostWithHttpInfo
     *
     * Create a lead task
     *
     * @param  \Swagger\Client\Model\Body7 $body Create a lead task (required)
     * @param  int $lead_id Lead Id (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse20028, HTTP status code, HTTP response headers (array of strings)
     */
    public function leadsLeadIdTasksPostWithHttpInfo($body, $lead_id)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20028';
        $request = $this->leadsLeadIdTasksPostRequest($body, $lead_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse20028',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 405:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse405',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation leadsLeadIdTasksPostAsync
     *
     * Create a lead task
     *
     * @param  \Swagger\Client\Model\Body7 $body Create a lead task (required)
     * @param  int $lead_id Lead Id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsLeadIdTasksPostAsync($body, $lead_id)
    {
        return $this->leadsLeadIdTasksPostAsyncWithHttpInfo($body, $lead_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation leadsLeadIdTasksPostAsyncWithHttpInfo
     *
     * Create a lead task
     *
     * @param  \Swagger\Client\Model\Body7 $body Create a lead task (required)
     * @param  int $lead_id Lead Id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsLeadIdTasksPostAsyncWithHttpInfo($body, $lead_id)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20028';
        $request = $this->leadsLeadIdTasksPostRequest($body, $lead_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'leadsLeadIdTasksPost'
     *
     * @param  \Swagger\Client\Model\Body7 $body Create a lead task (required)
     * @param  int $lead_id Lead Id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function leadsLeadIdTasksPostRequest($body, $lead_id)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling leadsLeadIdTasksPost'
            );
        }
        // verify the required parameter 'lead_id' is set
        if ($lead_id === null || (is_array($lead_id) && count($lead_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $lead_id when calling leadsLeadIdTasksPost'
            );
        }

        $resourcePath = '/leads/{leadId}/tasks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($lead_id !== null) {
            $resourcePath = str_replace(
                '{' . 'leadId' . '}',
                ObjectSerializer::toPathValue($lead_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-API-KEY');
        if ($apiKey !== null) {
            $headers['X-API-KEY'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation leadsLeadIdUsersGet
     *
     * Get a list of assigned users
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse20029
     */
    public function leadsLeadIdUsersGet($lead_id, $page = null, $per_page = null)
    {
        list($response) = $this->leadsLeadIdUsersGetWithHttpInfo($lead_id, $page, $per_page);
        return $response;
    }

    /**
     * Operation leadsLeadIdUsersGetWithHttpInfo
     *
     * Get a list of assigned users
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse20029, HTTP status code, HTTP response headers (array of strings)
     */
    public function leadsLeadIdUsersGetWithHttpInfo($lead_id, $page = null, $per_page = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20029';
        $request = $this->leadsLeadIdUsersGetRequest($lead_id, $page, $per_page);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse20029',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation leadsLeadIdUsersGetAsync
     *
     * Get a list of assigned users
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsLeadIdUsersGetAsync($lead_id, $page = null, $per_page = null)
    {
        return $this->leadsLeadIdUsersGetAsyncWithHttpInfo($lead_id, $page, $per_page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation leadsLeadIdUsersGetAsyncWithHttpInfo
     *
     * Get a list of assigned users
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsLeadIdUsersGetAsyncWithHttpInfo($lead_id, $page = null, $per_page = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20029';
        $request = $this->leadsLeadIdUsersGetRequest($lead_id, $page, $per_page);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'leadsLeadIdUsersGet'
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function leadsLeadIdUsersGetRequest($lead_id, $page = null, $per_page = null)
    {
        // verify the required parameter 'lead_id' is set
        if ($lead_id === null || (is_array($lead_id) && count($lead_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $lead_id when calling leadsLeadIdUsersGet'
            );
        }

        $resourcePath = '/leads/{leadId}/users';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page, null);
        }
        // query params
        if ($per_page !== null) {
            $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page, null);
        }

        // path params
        if ($lead_id !== null) {
            $resourcePath = str_replace(
                '{' . 'leadId' . '}',
                ObjectSerializer::toPathValue($lead_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-API-KEY');
        if ($apiKey !== null) {
            $headers['X-API-KEY'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation leadsLeadIdUsersPost
     *
     * Assign a user
     *
     * @param  \Swagger\Client\Model\Body8 $body Create a lead task (required)
     * @param  int $lead_id Lead Id (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse20030
     */
    public function leadsLeadIdUsersPost($body, $lead_id)
    {
        list($response) = $this->leadsLeadIdUsersPostWithHttpInfo($body, $lead_id);
        return $response;
    }

    /**
     * Operation leadsLeadIdUsersPostWithHttpInfo
     *
     * Assign a user
     *
     * @param  \Swagger\Client\Model\Body8 $body Create a lead task (required)
     * @param  int $lead_id Lead Id (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse20030, HTTP status code, HTTP response headers (array of strings)
     */
    public function leadsLeadIdUsersPostWithHttpInfo($body, $lead_id)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20030';
        $request = $this->leadsLeadIdUsersPostRequest($body, $lead_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse20030',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 405:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse405',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation leadsLeadIdUsersPostAsync
     *
     * Assign a user
     *
     * @param  \Swagger\Client\Model\Body8 $body Create a lead task (required)
     * @param  int $lead_id Lead Id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsLeadIdUsersPostAsync($body, $lead_id)
    {
        return $this->leadsLeadIdUsersPostAsyncWithHttpInfo($body, $lead_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation leadsLeadIdUsersPostAsyncWithHttpInfo
     *
     * Assign a user
     *
     * @param  \Swagger\Client\Model\Body8 $body Create a lead task (required)
     * @param  int $lead_id Lead Id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsLeadIdUsersPostAsyncWithHttpInfo($body, $lead_id)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20030';
        $request = $this->leadsLeadIdUsersPostRequest($body, $lead_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'leadsLeadIdUsersPost'
     *
     * @param  \Swagger\Client\Model\Body8 $body Create a lead task (required)
     * @param  int $lead_id Lead Id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function leadsLeadIdUsersPostRequest($body, $lead_id)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling leadsLeadIdUsersPost'
            );
        }
        // verify the required parameter 'lead_id' is set
        if ($lead_id === null || (is_array($lead_id) && count($lead_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $lead_id when calling leadsLeadIdUsersPost'
            );
        }

        $resourcePath = '/leads/{leadId}/users';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($lead_id !== null) {
            $resourcePath = str_replace(
                '{' . 'leadId' . '}',
                ObjectSerializer::toPathValue($lead_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-API-KEY');
        if ($apiKey !== null) {
            $headers['X-API-KEY'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation leadsLeadIdUsersUserIdDelete
     *
     * Unassign a user from a lead
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $user_id User Id (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse20031
     */
    public function leadsLeadIdUsersUserIdDelete($lead_id, $user_id)
    {
        list($response) = $this->leadsLeadIdUsersUserIdDeleteWithHttpInfo($lead_id, $user_id);
        return $response;
    }

    /**
     * Operation leadsLeadIdUsersUserIdDeleteWithHttpInfo
     *
     * Unassign a user from a lead
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $user_id User Id (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse20031, HTTP status code, HTTP response headers (array of strings)
     */
    public function leadsLeadIdUsersUserIdDeleteWithHttpInfo($lead_id, $user_id)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20031';
        $request = $this->leadsLeadIdUsersUserIdDeleteRequest($lead_id, $user_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse20031',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 405:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse405',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation leadsLeadIdUsersUserIdDeleteAsync
     *
     * Unassign a user from a lead
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $user_id User Id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsLeadIdUsersUserIdDeleteAsync($lead_id, $user_id)
    {
        return $this->leadsLeadIdUsersUserIdDeleteAsyncWithHttpInfo($lead_id, $user_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation leadsLeadIdUsersUserIdDeleteAsyncWithHttpInfo
     *
     * Unassign a user from a lead
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $user_id User Id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsLeadIdUsersUserIdDeleteAsyncWithHttpInfo($lead_id, $user_id)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20031';
        $request = $this->leadsLeadIdUsersUserIdDeleteRequest($lead_id, $user_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'leadsLeadIdUsersUserIdDelete'
     *
     * @param  int $lead_id Lead Id (required)
     * @param  int $user_id User Id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function leadsLeadIdUsersUserIdDeleteRequest($lead_id, $user_id)
    {
        // verify the required parameter 'lead_id' is set
        if ($lead_id === null || (is_array($lead_id) && count($lead_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $lead_id when calling leadsLeadIdUsersUserIdDelete'
            );
        }
        // verify the required parameter 'user_id' is set
        if ($user_id === null || (is_array($user_id) && count($user_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $user_id when calling leadsLeadIdUsersUserIdDelete'
            );
        }

        $resourcePath = '/leads/{leadId}/users/{userId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($lead_id !== null) {
            $resourcePath = str_replace(
                '{' . 'leadId' . '}',
                ObjectSerializer::toPathValue($lead_id),
                $resourcePath
            );
        }
        // path params
        if ($user_id !== null) {
            $resourcePath = str_replace(
                '{' . 'userId' . '}',
                ObjectSerializer::toPathValue($user_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-API-KEY');
        if ($apiKey !== null) {
            $headers['X-API-KEY'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'DELETE',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation leadsPost
     *
     * Create a lead
     *
     * @param  \Swagger\Client\Model\Body1 $body Lead details (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse20015
     */
    public function leadsPost($body)
    {
        list($response) = $this->leadsPostWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation leadsPostWithHttpInfo
     *
     * Create a lead
     *
     * @param  \Swagger\Client\Model\Body1 $body Lead details (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse20015, HTTP status code, HTTP response headers (array of strings)
     */
    public function leadsPostWithHttpInfo($body)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20015';
        $request = $this->leadsPostRequest($body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse20015',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 405:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse405',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation leadsPostAsync
     *
     * Create a lead
     *
     * @param  \Swagger\Client\Model\Body1 $body Lead details (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsPostAsync($body)
    {
        return $this->leadsPostAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation leadsPostAsyncWithHttpInfo
     *
     * Create a lead
     *
     * @param  \Swagger\Client\Model\Body1 $body Lead details (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsPostAsyncWithHttpInfo($body)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20015';
        $request = $this->leadsPostRequest($body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'leadsPost'
     *
     * @param  \Swagger\Client\Model\Body1 $body Lead details (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function leadsPostRequest($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling leadsPost'
            );
        }

        $resourcePath = '/leads';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-API-KEY');
        if ($apiKey !== null) {
            $headers['X-API-KEY'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation leadsPricingTemplatesGet
     *
     * Get pricing templates
     *
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse20021
     */
    public function leadsPricingTemplatesGet($page = null, $per_page = null)
    {
        list($response) = $this->leadsPricingTemplatesGetWithHttpInfo($page, $per_page);
        return $response;
    }

    /**
     * Operation leadsPricingTemplatesGetWithHttpInfo
     *
     * Get pricing templates
     *
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse20021, HTTP status code, HTTP response headers (array of strings)
     */
    public function leadsPricingTemplatesGetWithHttpInfo($page = null, $per_page = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20021';
        $request = $this->leadsPricingTemplatesGetRequest($page, $per_page);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse20021',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation leadsPricingTemplatesGetAsync
     *
     * Get pricing templates
     *
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsPricingTemplatesGetAsync($page = null, $per_page = null)
    {
        return $this->leadsPricingTemplatesGetAsyncWithHttpInfo($page, $per_page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation leadsPricingTemplatesGetAsyncWithHttpInfo
     *
     * Get pricing templates
     *
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsPricingTemplatesGetAsyncWithHttpInfo($page = null, $per_page = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20021';
        $request = $this->leadsPricingTemplatesGetRequest($page, $per_page);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'leadsPricingTemplatesGet'
     *
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function leadsPricingTemplatesGetRequest($page = null, $per_page = null)
    {

        $resourcePath = '/leads/pricing_templates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page, null);
        }
        // query params
        if ($per_page !== null) {
            $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page, null);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-API-KEY');
        if ($apiKey !== null) {
            $headers['X-API-KEY'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation leadsSmsTemplatesGet
     *
     * Get list of SMS templates
     *
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse20040
     */
    public function leadsSmsTemplatesGet()
    {
        list($response) = $this->leadsSmsTemplatesGetWithHttpInfo();
        return $response;
    }

    /**
     * Operation leadsSmsTemplatesGetWithHttpInfo
     *
     * Get list of SMS templates
     *
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse20040, HTTP status code, HTTP response headers (array of strings)
     */
    public function leadsSmsTemplatesGetWithHttpInfo()
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20040';
        $request = $this->leadsSmsTemplatesGetRequest();

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse20040',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse404',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 405:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse405',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation leadsSmsTemplatesGetAsync
     *
     * Get list of SMS templates
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsSmsTemplatesGetAsync()
    {
        return $this->leadsSmsTemplatesGetAsyncWithHttpInfo()
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation leadsSmsTemplatesGetAsyncWithHttpInfo
     *
     * Get list of SMS templates
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsSmsTemplatesGetAsyncWithHttpInfo()
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20040';
        $request = $this->leadsSmsTemplatesGetRequest();

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'leadsSmsTemplatesGet'
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function leadsSmsTemplatesGetRequest()
    {

        $resourcePath = '/leads/sms/templates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-API-KEY');
        if ($apiKey !== null) {
            $headers['X-API-KEY'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation leadsSourcesGet
     *
     * Get a list of available sources
     *
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse20051
     */
    public function leadsSourcesGet()
    {
        list($response) = $this->leadsSourcesGetWithHttpInfo();
        return $response;
    }

    /**
     * Operation leadsSourcesGetWithHttpInfo
     *
     * Get a list of available sources
     *
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse20051, HTTP status code, HTTP response headers (array of strings)
     */
    public function leadsSourcesGetWithHttpInfo()
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20051';
        $request = $this->leadsSourcesGetRequest();

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse20051',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation leadsSourcesGetAsync
     *
     * Get a list of available sources
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsSourcesGetAsync()
    {
        return $this->leadsSourcesGetAsyncWithHttpInfo()
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation leadsSourcesGetAsyncWithHttpInfo
     *
     * Get a list of available sources
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsSourcesGetAsyncWithHttpInfo()
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20051';
        $request = $this->leadsSourcesGetRequest();

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'leadsSourcesGet'
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function leadsSourcesGetRequest()
    {

        $resourcePath = '/leads/sources';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-API-KEY');
        if ($apiKey !== null) {
            $headers['X-API-KEY'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation leadsStatusesGet
     *
     * Get a list of available statuses
     *
     * @param  int $group Group Id (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse20052
     */
    public function leadsStatusesGet($group = null)
    {
        list($response) = $this->leadsStatusesGetWithHttpInfo($group);
        return $response;
    }

    /**
     * Operation leadsStatusesGetWithHttpInfo
     *
     * Get a list of available statuses
     *
     * @param  int $group Group Id (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse20052, HTTP status code, HTTP response headers (array of strings)
     */
    public function leadsStatusesGetWithHttpInfo($group = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20052';
        $request = $this->leadsStatusesGetRequest($group);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse20052',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation leadsStatusesGetAsync
     *
     * Get a list of available statuses
     *
     * @param  int $group Group Id (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsStatusesGetAsync($group = null)
    {
        return $this->leadsStatusesGetAsyncWithHttpInfo($group)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation leadsStatusesGetAsyncWithHttpInfo
     *
     * Get a list of available statuses
     *
     * @param  int $group Group Id (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsStatusesGetAsyncWithHttpInfo($group = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20052';
        $request = $this->leadsStatusesGetRequest($group);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'leadsStatusesGet'
     *
     * @param  int $group Group Id (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function leadsStatusesGetRequest($group = null)
    {

        $resourcePath = '/leads/statuses';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($group !== null) {
            $queryParams['group'] = ObjectSerializer::toQueryValue($group, null);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-API-KEY');
        if ($apiKey !== null) {
            $headers['X-API-KEY'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation leadsUsersGet
     *
     * Get a list of available users
     *
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse20029
     */
    public function leadsUsersGet($page = null, $per_page = null)
    {
        list($response) = $this->leadsUsersGetWithHttpInfo($page, $per_page);
        return $response;
    }

    /**
     * Operation leadsUsersGetWithHttpInfo
     *
     * Get a list of available users
     *
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse20029, HTTP status code, HTTP response headers (array of strings)
     */
    public function leadsUsersGetWithHttpInfo($page = null, $per_page = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20029';
        $request = $this->leadsUsersGetRequest($page, $per_page);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse20029',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse401',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse403',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation leadsUsersGetAsync
     *
     * Get a list of available users
     *
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsUsersGetAsync($page = null, $per_page = null)
    {
        return $this->leadsUsersGetAsyncWithHttpInfo($page, $per_page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation leadsUsersGetAsyncWithHttpInfo
     *
     * Get a list of available users
     *
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function leadsUsersGetAsyncWithHttpInfo($page = null, $per_page = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20029';
        $request = $this->leadsUsersGetRequest($page, $per_page);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'leadsUsersGet'
     *
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function leadsUsersGetRequest($page = null, $per_page = null)
    {

        $resourcePath = '/leads/users';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page, null);
        }
        // query params
        if ($per_page !== null) {
            $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page, null);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-API-KEY');
        if ($apiKey !== null) {
            $headers['X-API-KEY'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}

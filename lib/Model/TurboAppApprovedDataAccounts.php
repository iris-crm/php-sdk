<?php
/**
 * TurboAppApprovedDataAccounts
 *
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

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * TurboAppApprovedDataAccounts Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TurboAppApprovedDataAccounts implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TurboAppApproved_data_accounts';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'application_url' => 'string',
'identifier' => 'string',
'processor' => 'string',
'dba' => 'string',
'mid' => 'int',
'lid' => 'int',
'activation_status' => '\Swagger\Client\Model\TurboAppUpdatedDataActivationStatus',
'application_status' => '\Swagger\Client\Model\TurboAppUpdatedDataActivationStatus',
'contact_name' => 'string',
'contact_address' => 'string',
'contact_phone' => 'string',
'salesman' => 'string',
'co_name' => 'string',
'approved_at' => '\DateTime',
'legal_name' => 'string',
'comments' => '\Swagger\Client\Model\TurboAppUpdatedDataComments',
'entitlements' => '\Swagger\Client\Model\TurboAppApprovedDataEntitlements',
'users' => 'string[]',
'date_submitted' => '\DateTime',
'date_decision' => '\DateTime',
'mcc_code' => 'string',
'annual_sales' => 'string',
'average_ticket' => 'string',
'tier' => 'string',
'tier_status' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'application_url' => null,
'identifier' => null,
'processor' => null,
'dba' => null,
'mid' => null,
'lid' => null,
'activation_status' => null,
'application_status' => null,
'contact_name' => null,
'contact_address' => null,
'contact_phone' => null,
'salesman' => null,
'co_name' => null,
'approved_at' => 'date-time',
'legal_name' => null,
'comments' => null,
'entitlements' => null,
'users' => null,
'date_submitted' => 'date-time',
'date_decision' => 'date-time',
'mcc_code' => null,
'annual_sales' => null,
'average_ticket' => null,
'tier' => null,
'tier_status' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
'application_url' => 'application_url',
'identifier' => 'identifier',
'processor' => 'processor',
'dba' => 'dba',
'mid' => 'mid',
'lid' => 'lid',
'activation_status' => 'activation_status',
'application_status' => 'application_status',
'contact_name' => 'contact_name',
'contact_address' => 'contact_address',
'contact_phone' => 'contact_phone',
'salesman' => 'salesman',
'co_name' => 'co_name',
'approved_at' => 'approved_at',
'legal_name' => 'legal_name',
'comments' => 'comments',
'entitlements' => 'entitlements',
'users' => 'users',
'date_submitted' => 'date_submitted',
'date_decision' => 'date_decision',
'mcc_code' => 'mcc_code',
'annual_sales' => 'annual_sales',
'average_ticket' => 'average_ticket',
'tier' => 'tier',
'tier_status' => 'tier_status'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'application_url' => 'setApplicationUrl',
'identifier' => 'setIdentifier',
'processor' => 'setProcessor',
'dba' => 'setDba',
'mid' => 'setMid',
'lid' => 'setLid',
'activation_status' => 'setActivationStatus',
'application_status' => 'setApplicationStatus',
'contact_name' => 'setContactName',
'contact_address' => 'setContactAddress',
'contact_phone' => 'setContactPhone',
'salesman' => 'setSalesman',
'co_name' => 'setCoName',
'approved_at' => 'setApprovedAt',
'legal_name' => 'setLegalName',
'comments' => 'setComments',
'entitlements' => 'setEntitlements',
'users' => 'setUsers',
'date_submitted' => 'setDateSubmitted',
'date_decision' => 'setDateDecision',
'mcc_code' => 'setMccCode',
'annual_sales' => 'setAnnualSales',
'average_ticket' => 'setAverageTicket',
'tier' => 'setTier',
'tier_status' => 'setTierStatus'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'application_url' => 'getApplicationUrl',
'identifier' => 'getIdentifier',
'processor' => 'getProcessor',
'dba' => 'getDba',
'mid' => 'getMid',
'lid' => 'getLid',
'activation_status' => 'getActivationStatus',
'application_status' => 'getApplicationStatus',
'contact_name' => 'getContactName',
'contact_address' => 'getContactAddress',
'contact_phone' => 'getContactPhone',
'salesman' => 'getSalesman',
'co_name' => 'getCoName',
'approved_at' => 'getApprovedAt',
'legal_name' => 'getLegalName',
'comments' => 'getComments',
'entitlements' => 'getEntitlements',
'users' => 'getUsers',
'date_submitted' => 'getDateSubmitted',
'date_decision' => 'getDateDecision',
'mcc_code' => 'getMccCode',
'annual_sales' => 'getAnnualSales',
'average_ticket' => 'getAverageTicket',
'tier' => 'getTier',
'tier_status' => 'getTierStatus'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['application_url'] = isset($data['application_url']) ? $data['application_url'] : null;
        $this->container['identifier'] = isset($data['identifier']) ? $data['identifier'] : null;
        $this->container['processor'] = isset($data['processor']) ? $data['processor'] : null;
        $this->container['dba'] = isset($data['dba']) ? $data['dba'] : null;
        $this->container['mid'] = isset($data['mid']) ? $data['mid'] : null;
        $this->container['lid'] = isset($data['lid']) ? $data['lid'] : null;
        $this->container['activation_status'] = isset($data['activation_status']) ? $data['activation_status'] : null;
        $this->container['application_status'] = isset($data['application_status']) ? $data['application_status'] : null;
        $this->container['contact_name'] = isset($data['contact_name']) ? $data['contact_name'] : null;
        $this->container['contact_address'] = isset($data['contact_address']) ? $data['contact_address'] : null;
        $this->container['contact_phone'] = isset($data['contact_phone']) ? $data['contact_phone'] : null;
        $this->container['salesman'] = isset($data['salesman']) ? $data['salesman'] : null;
        $this->container['co_name'] = isset($data['co_name']) ? $data['co_name'] : null;
        $this->container['approved_at'] = isset($data['approved_at']) ? $data['approved_at'] : null;
        $this->container['legal_name'] = isset($data['legal_name']) ? $data['legal_name'] : null;
        $this->container['comments'] = isset($data['comments']) ? $data['comments'] : null;
        $this->container['entitlements'] = isset($data['entitlements']) ? $data['entitlements'] : null;
        $this->container['users'] = isset($data['users']) ? $data['users'] : null;
        $this->container['date_submitted'] = isset($data['date_submitted']) ? $data['date_submitted'] : null;
        $this->container['date_decision'] = isset($data['date_decision']) ? $data['date_decision'] : null;
        $this->container['mcc_code'] = isset($data['mcc_code']) ? $data['mcc_code'] : null;
        $this->container['annual_sales'] = isset($data['annual_sales']) ? $data['annual_sales'] : null;
        $this->container['average_ticket'] = isset($data['average_ticket']) ? $data['average_ticket'] : null;
        $this->container['tier'] = isset($data['tier']) ? $data['tier'] : null;
        $this->container['tier_status'] = isset($data['tier_status']) ? $data['tier_status'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id Account ID
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets application_url
     *
     * @return string
     */
    public function getApplicationUrl()
    {
        return $this->container['application_url'];
    }

    /**
     * Sets application_url
     *
     * @param string $application_url Application URL
     *
     * @return $this
     */
    public function setApplicationUrl($application_url)
    {
        $this->container['application_url'] = $application_url;

        return $this;
    }

    /**
     * Gets identifier
     *
     * @return string
     */
    public function getIdentifier()
    {
        return $this->container['identifier'];
    }

    /**
     * Sets identifier
     *
     * @param string $identifier Application identifier
     *
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->container['identifier'] = $identifier;

        return $this;
    }

    /**
     * Gets processor
     *
     * @return string
     */
    public function getProcessor()
    {
        return $this->container['processor'];
    }

    /**
     * Sets processor
     *
     * @param string $processor Processor name
     *
     * @return $this
     */
    public function setProcessor($processor)
    {
        $this->container['processor'] = $processor;

        return $this;
    }

    /**
     * Gets dba
     *
     * @return string
     */
    public function getDba()
    {
        return $this->container['dba'];
    }

    /**
     * Sets dba
     *
     * @param string $dba Merchant name
     *
     * @return $this
     */
    public function setDba($dba)
    {
        $this->container['dba'] = $dba;

        return $this;
    }

    /**
     * Gets mid
     *
     * @return int
     */
    public function getMid()
    {
        return $this->container['mid'];
    }

    /**
     * Sets mid
     *
     * @param int $mid Merchant ID
     *
     * @return $this
     */
    public function setMid($mid)
    {
        $this->container['mid'] = $mid;

        return $this;
    }

    /**
     * Gets lid
     *
     * @return int
     */
    public function getLid()
    {
        return $this->container['lid'];
    }

    /**
     * Sets lid
     *
     * @param int $lid Lead ID related to the application
     *
     * @return $this
     */
    public function setLid($lid)
    {
        $this->container['lid'] = $lid;

        return $this;
    }

    /**
     * Gets activation_status
     *
     * @return \Swagger\Client\Model\TurboAppUpdatedDataActivationStatus
     */
    public function getActivationStatus()
    {
        return $this->container['activation_status'];
    }

    /**
     * Sets activation_status
     *
     * @param \Swagger\Client\Model\TurboAppUpdatedDataActivationStatus $activation_status activation_status
     *
     * @return $this
     */
    public function setActivationStatus($activation_status)
    {
        $this->container['activation_status'] = $activation_status;

        return $this;
    }

    /**
     * Gets application_status
     *
     * @return \Swagger\Client\Model\TurboAppUpdatedDataActivationStatus
     */
    public function getApplicationStatus()
    {
        return $this->container['application_status'];
    }

    /**
     * Sets application_status
     *
     * @param \Swagger\Client\Model\TurboAppUpdatedDataActivationStatus $application_status application_status
     *
     * @return $this
     */
    public function setApplicationStatus($application_status)
    {
        $this->container['application_status'] = $application_status;

        return $this;
    }

    /**
     * Gets contact_name
     *
     * @return string
     */
    public function getContactName()
    {
        return $this->container['contact_name'];
    }

    /**
     * Sets contact_name
     *
     * @param string $contact_name contact_name
     *
     * @return $this
     */
    public function setContactName($contact_name)
    {
        $this->container['contact_name'] = $contact_name;

        return $this;
    }

    /**
     * Gets contact_address
     *
     * @return string
     */
    public function getContactAddress()
    {
        return $this->container['contact_address'];
    }

    /**
     * Sets contact_address
     *
     * @param string $contact_address contact_address
     *
     * @return $this
     */
    public function setContactAddress($contact_address)
    {
        $this->container['contact_address'] = $contact_address;

        return $this;
    }

    /**
     * Gets contact_phone
     *
     * @return string
     */
    public function getContactPhone()
    {
        return $this->container['contact_phone'];
    }

    /**
     * Sets contact_phone
     *
     * @param string $contact_phone contact_phone
     *
     * @return $this
     */
    public function setContactPhone($contact_phone)
    {
        $this->container['contact_phone'] = $contact_phone;

        return $this;
    }

    /**
     * Gets salesman
     *
     * @return string
     */
    public function getSalesman()
    {
        return $this->container['salesman'];
    }

    /**
     * Sets salesman
     *
     * @param string $salesman salesman
     *
     * @return $this
     */
    public function setSalesman($salesman)
    {
        $this->container['salesman'] = $salesman;

        return $this;
    }

    /**
     * Gets co_name
     *
     * @return string
     */
    public function getCoName()
    {
        return $this->container['co_name'];
    }

    /**
     * Sets co_name
     *
     * @param string $co_name co_name
     *
     * @return $this
     */
    public function setCoName($co_name)
    {
        $this->container['co_name'] = $co_name;

        return $this;
    }

    /**
     * Gets approved_at
     *
     * @return \DateTime
     */
    public function getApprovedAt()
    {
        return $this->container['approved_at'];
    }

    /**
     * Sets approved_at
     *
     * @param \DateTime $approved_at Date and time of account approve (ISO 8601)
     *
     * @return $this
     */
    public function setApprovedAt($approved_at)
    {
        $this->container['approved_at'] = $approved_at;

        return $this;
    }

    /**
     * Gets legal_name
     *
     * @return string
     */
    public function getLegalName()
    {
        return $this->container['legal_name'];
    }

    /**
     * Sets legal_name
     *
     * @param string $legal_name Merchant name
     *
     * @return $this
     */
    public function setLegalName($legal_name)
    {
        $this->container['legal_name'] = $legal_name;

        return $this;
    }

    /**
     * Gets comments
     *
     * @return \Swagger\Client\Model\TurboAppUpdatedDataComments
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
     * Sets comments
     *
     * @param \Swagger\Client\Model\TurboAppUpdatedDataComments $comments comments
     *
     * @return $this
     */
    public function setComments($comments)
    {
        $this->container['comments'] = $comments;

        return $this;
    }

    /**
     * Gets entitlements
     *
     * @return \Swagger\Client\Model\TurboAppApprovedDataEntitlements
     */
    public function getEntitlements()
    {
        return $this->container['entitlements'];
    }

    /**
     * Sets entitlements
     *
     * @param \Swagger\Client\Model\TurboAppApprovedDataEntitlements $entitlements entitlements
     *
     * @return $this
     */
    public function setEntitlements($entitlements)
    {
        $this->container['entitlements'] = $entitlements;

        return $this;
    }

    /**
     * Gets users
     *
     * @return string[]
     */
    public function getUsers()
    {
        return $this->container['users'];
    }

    /**
     * Sets users
     *
     * @param string[] $users users
     *
     * @return $this
     */
    public function setUsers($users)
    {
        $this->container['users'] = $users;

        return $this;
    }

    /**
     * Gets date_submitted
     *
     * @return \DateTime
     */
    public function getDateSubmitted()
    {
        return $this->container['date_submitted'];
    }

    /**
     * Sets date_submitted
     *
     * @param \DateTime $date_submitted Date and time of account submit (ISO 8601)
     *
     * @return $this
     */
    public function setDateSubmitted($date_submitted)
    {
        $this->container['date_submitted'] = $date_submitted;

        return $this;
    }

    /**
     * Gets date_decision
     *
     * @return \DateTime
     */
    public function getDateDecision()
    {
        return $this->container['date_decision'];
    }

    /**
     * Sets date_decision
     *
     * @param \DateTime $date_decision Date and time of decision (ISO 8601)
     *
     * @return $this
     */
    public function setDateDecision($date_decision)
    {
        $this->container['date_decision'] = $date_decision;

        return $this;
    }

    /**
     * Gets mcc_code
     *
     * @return string
     */
    public function getMccCode()
    {
        return $this->container['mcc_code'];
    }

    /**
     * Sets mcc_code
     *
     * @param string $mcc_code MCC code
     *
     * @return $this
     */
    public function setMccCode($mcc_code)
    {
        $this->container['mcc_code'] = $mcc_code;

        return $this;
    }

    /**
     * Gets annual_sales
     *
     * @return string
     */
    public function getAnnualSales()
    {
        return $this->container['annual_sales'];
    }

    /**
     * Sets annual_sales
     *
     * @param string $annual_sales Annual sales
     *
     * @return $this
     */
    public function setAnnualSales($annual_sales)
    {
        $this->container['annual_sales'] = $annual_sales;

        return $this;
    }

    /**
     * Gets average_ticket
     *
     * @return string
     */
    public function getAverageTicket()
    {
        return $this->container['average_ticket'];
    }

    /**
     * Sets average_ticket
     *
     * @param string $average_ticket Average ticket
     *
     * @return $this
     */
    public function setAverageTicket($average_ticket)
    {
        $this->container['average_ticket'] = $average_ticket;

        return $this;
    }

    /**
     * Gets tier
     *
     * @return string
     */
    public function getTier()
    {
        return $this->container['tier'];
    }

    /**
     * Sets tier
     *
     * @param string $tier tier
     *
     * @return $this
     */
    public function setTier($tier)
    {
        $this->container['tier'] = $tier;

        return $this;
    }

    /**
     * Gets tier_status
     *
     * @return string
     */
    public function getTierStatus()
    {
        return $this->container['tier_status'];
    }

    /**
     * Sets tier_status
     *
     * @param string $tier_status tier_status
     *
     * @return $this
     */
    public function setTierStatus($tier_status)
    {
        $this->container['tier_status'] = $tier_status;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

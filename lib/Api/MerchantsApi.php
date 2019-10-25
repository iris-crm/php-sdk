<?php
/**
 * MerchantsApi
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
 * # Introduction Welcome to IRIS’s API!  The API is organized around `REST`. All requests should be made over `SSL`.  All request and response bodies, including errors, are encoded in `JSON`. # Open API The Open API provides numerous functions to access or to update your CRM lead  and merchant  data using simple REST calls. ### You can use the Lead API to: - Get a list of leads with field data, notes, appointments, tasks, users and, documents - Get a list of available campaigns, groups, sources, and statuses - Create a new lead, lead note, task, or an appointment - Assign and un-assign users to a lead - Upload or download documents - Update field data, status, campaign, group, and source - Generate an e-signature application and get a list of available apps  ### You can use the Merchant API to: - Get daily merchant deposits and transactions - Get daily chargebacks and retrievals - Get monthly merchant PDF statements - Get a list of merchants by demographics such as processor or group - Get merchant demographic profile information using the merchant id - Make updates to merchant profiles in real-time  # Generate an API token When you send an API request, you will need to include an API token in your request in order to authenticate your account.  The tokens are generated in the CRM by each user individually, and each user may create one or more tokens.  To generate a new API Token, open your user settings page by clicking on your username in the top-right corner, and clicking on the ** Settings ** link or you can use the <a href=\"https://iriscrm.com/settings\">link</a>.  Then open the ** API Settings ** tab, click ** Create New API Token **, configure your token’s settings as needed, and click ** Add New Token **:  <img src='https://iriscrm.com/images/docs/mapi001.png'/>  Your new token will now be created and displayed in a popup window:  <img src='https://iriscrm.com/images/docs/mapi002.png'/>  Once the token is created, it will be shown in the list of available API Tokens where you can copy the token, update its settings, or delete it once it’s no longer needed:  <img src='https://iriscrm.com/images/docs/mapi003.png'/>  ** Note: ** The created tokens will inherit the user’s permissions to assigned merchants, leads, groups and processors. # Using the API Authentication to the API is performed via `X-API-KEY` header. Requests not properly authenticated will return a `401` error code.  `curl -X GET \"https://iriscrm.com/api/v1/leads\" -H \"accept: application/json\" -H \"X-API-KEY: [YOURKEY]\"`  Note that all requests should be made over `SSL`. All request and response bodies, including errors, are encoded in JSON.  The API returns standard HTTP success or error status codes. In case of errors, additional information about what went wrong will be encoded in the response as JSON.  By default, you can make `120` requests per minute. Check the returned HTTP headers of any API request to see your current rate limit status. # Using the Subscription API API Subscriptions are used to send information about an event to a URL and trigger an API call. This is more efficient than doing scheduled API calls.  To create a subscription, use the API Settings page or send a request using the instructions in the Subscriptions section below.  All you need to know is the events you want to be subscribed for and the url to which the updates need to be sent.  To create subscriptions using our GUI open tab ** API Settings ** at ** https://iriscrm.com/settings **:  <img src='https://iriscrm.com/images/docs/new-subscription.png'/> # Authentication Authenticate your account by including your secret key in API requests. Do not share your secret API keys in publicly accessible areas, client-side code, and so forth. Authentication to the API is performed via `X-API-KEY` header. Requests not properly authenticated will return a `401` error code. # Errors Our API returns standard `HTTP` success or error status codes. For errors, we will also include extra information about what went wrong encoded in the response as `JSON`. # Limiting You can make `120` requests per minute. If you will reach a limit you will get a `429: Too Many Attempts.` response from the server. Check the returned `HTTP` headers of any API request to see your current rate limit status. Headers description: * `X-RateLimit-Limit` tells you the max number of requests you're allowed to make within this application's time period * `X-RateLimit-Remaining` tells you how many requests you have left within this current time period * `Retry-After` tells you how many seconds to wait until you try again. (you'll only get `Retry-After` if you've hit the limit).   # PHP SDK  ### Installation and Usage  #### Availability  The IRIS CRM PHP SDK requires PHP version 5.5 or higher and the PHP cURL extension.  #### Composer  To install the bindings via [Composer](http://getcomposer.org/), please run:  ```bash  composer require iris-crm/php-sdk      ```   In your code, configure the environment and API credentials:  ```php require_once(__DIR__ . '/vendor/autoload.php');  use Swagger\\Client\\Configuration; use Swagger\\Client\\Api\\LeadsApi;  // Configure API key authorization $config = Configuration::getDefaultConfiguration() ->setApiKey('X-API-KEY', 'YOUR_API_KEY') ->setHost('https://iriscrm.com/api/v1/'); ``` Here’s an example of how to get a list of leads using an SDK. Swagger\\Client\\Api\\LeadsApi it's a SDK Class for Lead endpoints. ```php $apiInstance = new LeadsApi(null, $config);  $page        = 1; // int | Page number $sort_by     = \"created\"; // string | Sorting of leads by the field value $sort_dir    = \"asc\"; // string | Direction of sorting $group       = 2; // int | Filter leads by a group id $campaign    = 3; // int | Filter leads by a campaign id $source      = 4; // int | Filter leads by a source id $status      = 1; // int | Filter leads by a status id $category    = 1; // int | Filter leads by a status category id $user        = 12; // int | Filter leads by a user id $date_filter = \"created\"; // string | Filtering leads by a date range depends on this filter $start_date  = new \\DateTime(\"2018-10-20T19:20:30+01:00\"); // \\DateTime | Filter leads by a date in ISO 8601 format (Y-m-d\\\\TH:i:sP) $end_date    = new \\DateTime(\"2019-10-20T19:20:30+01:00\"); // \\DateTime | Filter leads by a date in ISO 8601 format (Y-m-d\\\\TH:i:sP) $email       = \"test@mail.com\"; // string | Filter leads by a email try {     $result = $apiInstance->leadsGet($page, $sort_by, $sort_dir, $group, $campaign, $source, $status, $category, $user, $date_filter, $start_date, $end_date, $email);     print_r($result); } catch (Exception $e) {     echo 'Exception when calling LeadsApi->leadsGet: ', $e->getMessage(), PHP_EOL; } ``` All parameters for leadsGet method is optional and can be skipped.  If you want skip some parameters - you need to set parameter to `null`  All available classes and methods you can get in \"API Endpoints\" section below. ### API Endpoints All URIs are relative to *https://iriscrm.com/api/v1*  Class | Method | HTTP Request | Description ------------ | ------------- | ------------- | ------------- *LeadsApi* | **leadsApplicationsAppIdMappingsGet** | **GET** /leads/applications/{appId}/mappings | Get a list of available application field mappings *LeadsApi* | **leadsApplicationsAppIdMappingsMapIdDelete** | **DELETE** /leads/applications/{appId}/mappings/{mapId} | Delete an application field mapping *LeadsApi* | **leadsApplicationsAppIdMappingsMapIdGet** | **GET** /leads/applications/{appId}/mappings/{mapId} | Get a application field mapping *LeadsApi* | **leadsApplicationsAppIdMappingsMapIdPatch** | **PATCH** /leads/applications/{appId}/mappings/{mapId} | Update an application field mapping *LeadsApi* | **leadsApplicationsAppIdMappingsPost** | **POST** /leads/applications/{appId}/mappings | Create a new application field mapping *LeadsApi* | **leadsApplicationsGet** | **GET** /leads/applications | Get a list of available applications *LeadsApi* | **leadsCampaignsGet** | **GET** /leads/campaigns | Get a list of available campaigns *LeadsApi* | **leadsDynamicFieldsSchemaGet** | **GET** /leads/dynamic-fields-schema | Get a schema of lead fields *LeadsApi* | **leadsEmailsTemplatesGet** | **GET** /leads/emails/templates | Get list of email templates *LeadsApi* | **leadsFieldsFieldIdGet** | **GET** /leads/fields/{fieldId} | Get a lead field *LeadsApi* | **leadsFieldsFieldIdOrderPatch** | **PATCH** /leads/fields/{fieldId}/order | Update a lead field order position *LeadsApi* | **leadsFieldsFieldIdPatch** | **PATCH** /leads/fields/{fieldId} | Update a lead field *LeadsApi* | **leadsFieldsGet** | **GET** /leads/fields | Get a list of available lead fields *LeadsApi* | **leadsFieldsPost** | **POST** /leads/fields | Create a new lead field *LeadsApi* | **leadsFieldsTabsGet** | **GET** /leads/fields/tabs | Get a list of all lead field tabs *LeadsApi* | **leadsFieldsTabsPost** | **POST** /leads/fields/tabs | Create a lead field tab *LeadsApi* | **leadsFieldsTabsTabIdGet** | **GET** /leads/fields/tabs/{tabId} | Get a lead field tab *LeadsApi* | **leadsFieldsTabsTabIdPatch** | **PATCH** /leads/fields/tabs/{tabId} | Update a lead field tab *LeadsApi* | **leadsGet** | **GET** /leads | Get a list of leads *LeadsApi* | **leadsGroupsGet** | **GET** /leads/groups | Get a list of available groups *LeadsApi* | **leadsLeadIdActivityCampaignGet** | **GET** /leads/{leadId}/activity/campaign | Get a list of all lead campaign activity *LeadsApi* | **leadsLeadIdActivityDeletionGet** | **GET** /leads/{leadId}/activity/deletion | Get a list of all lead deletion activity *LeadsApi* | **leadsLeadIdActivityDuplicatesGet** | **GET** /leads/{leadId}/activity/duplicates | Get a list of all lead duplicate activity *LeadsApi* | **leadsLeadIdActivityLinksGet** | **GET** /leads/{leadId}/activity/links | Get a list of all lead links activity *LeadsApi* | **leadsLeadIdActivitySourceGet** | **GET** /leads/{leadId}/activity/source | Get a list of all lead source activity *LeadsApi* | **leadsLeadIdActivityStatusGet** | **GET** /leads/{leadId}/activity/status | Get a list of all lead status activity *LeadsApi* | **leadsLeadIdApplicationsApplicationIdPopulatePost** | **POST** /leads/{leadId}/applications/{applicationId}/populate | Populate PDF Document *LeadsApi* | **leadsLeadIdAppointmentsGet** | **GET** /leads/{leadId}/appointments | Get lead appointments *LeadsApi* | **leadsLeadIdAppointmentsPost** | **POST** /leads/{leadId}/appointments | Create a lead appointment *LeadsApi* | **leadsLeadIdDocumentsDocumentIdGet** | **GET** /leads/{leadId}/documents/{documentId} | Download a document *LeadsApi* | **leadsLeadIdDocumentsGet** | **GET** /leads/{leadId}/documents | Get a list of available documents *LeadsApi* | **leadsLeadIdDocumentsPost** | **POST** /leads/{leadId}/documents | Upload a document *LeadsApi* | **leadsLeadIdEmailsTemplateIdPost** | **POST** /leads/{leadId}/emails/{templateId} | Send an email to lead with template *LeadsApi* | **leadsLeadIdGet** | **GET** /leads/{leadId} | Get detailed lead information *LeadsApi* | **leadsLeadIdMailboxEmailIdAttachmentAttachmentIdGet** | **GET** /leads/{leadId}/mailbox/{emailId}/attachment/{attachmentId} | Download a mailbox email attachment *LeadsApi* | **leadsLeadIdNotesGet** | **GET** /leads/{leadId}/notes | Get lead notes *LeadsApi* | **leadsLeadIdNotesPost** | **POST** /leads/{leadId}/notes | Create a lead note *LeadsApi* | **leadsLeadIdPatch** | **PATCH** /leads/{leadId} | Update a lead *LeadsApi* | **leadsLeadIdSignaturesApplicationIdGeneratePost** | **POST** /leads/{leadId}/signatures/{applicationId}/generate | Generate an e-signature document *LeadsApi* | **leadsLeadIdSignaturesApplicationIdSendPost** | **POST** /leads/{leadId}/signatures/{applicationId}/send | Send an e-signature document *LeadsApi* | **leadsLeadIdSignaturesGet** | **GET** /leads/{leadId}/signatures | Get a list of all lead e-signatures documents *LeadsApi* | **leadsLeadIdSmsTemplateIdPost** | **POST** /leads/{leadId}/sms/{templateId} | Send an sms to lead with selected sms template *LeadsApi* | **leadsLeadIdTasksGet** | **POST** /leads/{leadId}/tasks | Create a lead task *LeadsApi* | **leadsLeadIdUsersGet** | **GET** /leads/{leadId}/users | Get a list of assigned users *LeadsApi* | **leadsLeadIdUsersPost** | **POST** /leads/{leadId}/users | Assign a user *LeadsApi* | **leadsLeadIdUsersUserIdDelete** | **DELETE** /leads/{leadId}/users/{userId} | Unassign a user from a lead *LeadsApi* | **leadsPost** | **POST** /leads | Create a lead *LeadsApi* | **leadsSignaturesApplicationIdDownloadGet** | **GET** /leads/signatures/{applicationId}/download | Download an e-signature document *LeadsApi* | **leadsSmsTemplatesGet** | **GET** /leads/sms/templates | Get list of sms templates *LeadsApi* | **leadsSourcesGet** | **GET** /leads/sources | Get a list of available sources *LeadsApi* | **leadsStatusesGet** | **GET** /leads/statuses | Get a list of available statuses *LeadsApi* | **leadsUsersGet** | **GET** /leads/users | Get a list of available users *MerchantsApi* | **merchantsGet** | **GET** /merchants | Get a list of merchants *MerchantsApi* | **merchantsMerchantNumberChargebacksGet** | **GET** /merchants/{merchantNumber}/chargebacks | Get a list of chargebacks *MerchantsApi* | **merchantsMerchantNumberGet** | **GET** /merchants/{merchantNumber} | Get detailed merchant information *MerchantsApi* | **merchantsMerchantNumberPatch** | **PATCH** /merchants/{merchantNumber} | Update an existing merchant *MerchantsApi* | **merchantsMerchantNumberRetrievalsGet** | **GET** /merchants/{merchantNumber}/retrievals | Get a list of retrievals *MerchantsApi* | **merchantsMerchantNumberStatementsGet** | **GET** /merchants/{merchantNumber}/statements | Get a list of statements *MerchantsApi* | **merchantsMerchantNumberStatementsStatementIdGet** | **GET** /merchants/{merchantNumber}/statements/{statementId} | Download a statement *MerchantsApi* | **merchantsMerchantNumberTransactionsGet** | **GET** /merchants/{merchantNumber}/transactions | Get a list of batches and transactions *SubscriptionsApi* | **subscriptionsGet** | **GET** /subscriptions | Return a list of subscriptions *SubscriptionsApi* | **subscriptionsPost** | **POST** /subscriptions | Create a subscription *SubscriptionsApi* | **subscriptionsSampleApiUpdatedGet** | **GET** /subscriptions/sample/api.updated | Data sample for the \\&quot;api.updated\\&quot; event *SubscriptionsApi* | **subscriptionsSampleApplicationCreatedGet** | **GET** /subscriptions/sample/turboapp.submitted | Data sample for the \\&quot;turboapp.submitted\\&quot; event *SubscriptionsApi* | **subscriptionsSampleApplicationUpdatedGet** | **GET** /subscriptions/sample/turboapp.updated | Data sample for the \\&quot;turboapp.updated\\&quot; event *SubscriptionsApi* | **subscriptionsSampleLeadCreatedGet** | **GET** /subscriptions/sample/lead.created | Data sample for the \\&quot;lead.created\\&quot; event *SubscriptionsApi* | **subscriptionsSampleLeadDeletedGet** | **GET** /subscriptions/sample/lead.deleted | Data sample for the \\&quot;lead.deleted\\&quot; event *SubscriptionsApi* | **subscriptionsSampleLeadDocumentUploadedGet** | **GET** /subscriptions/sample/lead.document.uploaded | Data sample for the \\&quot;lead.document.uploaded\\&quot; event *SubscriptionsApi* | **subscriptionsSampleLeadEmailReceivedGet** | **GET** /subscriptions/sample/lead.email.received | Data sample for the \\&quot;lead.email.received\\&quot; event *SubscriptionsApi* | **subscriptionsSampleLeadNoteAddedGet** | **GET** /subscriptions/sample/lead.note.added | Data sample for the \\&quot;lead.note.added\\&quot; event *SubscriptionsApi* | **subscriptionsSampleLeadRestoredGet** | **GET** /subscriptions/sample/lead.restored | Data sample for the \\&quot;lead.restored\\&quot; event *SubscriptionsApi* | **subscriptionsSampleLeadStatusUpdatedGet** | **GET** /subscriptions/sample/lead.status.updated | Data sample for the \\&quot;lead.status.updated\\&quot; event *SubscriptionsApi* | **subscriptionsSampleLeadUpdatedGet** | **GET** /subscriptions/sample/lead.updated | Data sample for the \\&quot;lead.updated\\&quot; event *SubscriptionsApi* | **subscriptionsSubscriptionIdDelete** | **DELETE** /subscriptions/{subscriptionId} | Delete a subscription *SubscriptionsApi* | **subscriptionsSubscriptionIdGet** | **GET** /subscriptions/{subscriptionId} | Return a subscription by its id *SubscriptionsApi* | **subscriptionsSubscriptionIdPatch** | **PATCH** /subscriptions/{subscriptionId} | Update a subscription # Change Log   ### 1.3.1 (2019-10-25)   #### Updated:   * Rename subscriptions from \"application.created\" to \"turboapp.submitted\" and \"application.updated\" to \"turboapp.updated\". **Link:** [#/paths/~1subscriptions~1sample~1turboapp.submitted/get](https://iriscrm.com/api/#/paths/~1subscriptions~1sample~1turboapp.submitted/get)     #### Created:   * Added new subscriptions for \"turboapp.approved\" event. **Link:** [#/paths/~1subscriptions~1sample~1turboapp.approved/get](https://iriscrm.com/api/#/paths/~1subscriptions~1sample~1turboapp.approved/get)   * Added new subscriptions for \"turboapp.rejected\" event. **Link:** [#/paths/~1subscriptions~1sample~1turboapp.rejected/get](https://iriscrm.com/api/#/paths/~1subscriptions~1sample~1turboapp.rejected/get)       ### 1.3.0 (2019-10-25)   #### Updated:   * Added a `group` parameter to 'lead statuses' endpoint. **Link:** [#/paths/~1leads~1statuses/get](https://iriscrm.com/api/#/paths/~1leads~1statuses/get)   * Added a `status` parameter to 'lead groups' endpoint. **Link:** [#/paths/~1leads~1groups/get](https://iriscrm.com/api/#/paths/~1leads~1groups/get)       ### 1.2.2 (2019-10-25)   #### Updated:   * Added a `per_page` property to all list endpoints.       ### 1.2.1 (2019-10-25)   #### Updated:   * Added a `leads` property to merchants endpoint. **Link:** [#/paths/~1merchants/get](https://iriscrm.com/api/#/paths/~1merchants/get)       ### 1.2.0 (2019-10-23)   #### Updated:   * The endpoint for creating API subscriptions has been updated. Status based options have been added to some events. **Link:** [#/paths/~1subscriptions/post](https://iriscrm.com/api/#/paths/~1subscriptions/post)   * The endpoint for updating API subscriptions has been updated. Status based options have been added to some events. **Link:** [#/paths/~1subscriptions~1{subscriptionId}/patch](https://iriscrm.com/api/#/paths/~1subscriptions~1{subscriptionId}/patch)       ### 1.1.0 (2019-10-23)   #### Created:   * Added an endpoint for getting SMS templates. **Link:** [#/paths/~1leads~1sms~1templates/get](https://iriscrm.com/api/#/paths/~1leads~1sms~1templates/get)   * Added new subscriptions for \"application.created\" event. **Link:** [#/paths/~1subscriptions~1sample~1application.created/get](https://iriscrm.com/api/#/paths/~1subscriptions~1sample~1application.created/get)   * Added new subscriptions for \"application.updated\" event. **Link:** [#/paths/~1subscriptions~1sample~1application.updated/get](https://iriscrm.com/api/#/paths/~1subscriptions~1sample~1application.updated/get)     #### Updated:   * Added a 'sic_code' property to merchants endpoint. **Link:** [#/paths/~1merchants/get](https://iriscrm.com/api/#/paths/~1merchants/get)       ### 1.0.0 (2019-10-23)   #### Created:   * Improving a change log.
 *
 * OpenAPI spec version: 1.3.1
 * Contact: support@iriscrm.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.13
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
 * MerchantsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MerchantsApi
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
     * Operation merchantsGet
     *
     * Get a list of merchants
     *
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     * @param  string $sort_by Sorting of merchants by the field value (optional)
     * @param  string $sort_dir Direction of sorting (optional)
     * @param  string $group Filter merchants by a group name (optional)
     * @param  string $processor Filter merchants by a processor name (optional)
     * @param  string $datasource Filter merchants by a data source name (optional)
     * @param  string $mid Filter merchants by a partial merchant number (optional)
     * @param  string $name Filter merchants by a partial merchant name (optional)
     * @param  string $vim Filter merchants by a merchant vim field (optional)
     * @param  string $active Filter merchants by a merchant active field (optional)
     * @param  string $status Filter merchants by a merchant status field (optional)
     * @param  string $date_filter Filter merchants by a merchant specific date field (optional)
     * @param  \DateTime $start_date Start date for date_filter filter in format ISO 8601 for created and modified properties, for others properties you should use simple date format (Y-m-d). (optional)
     * @param  \DateTime $end_date End date for date_filter filter in format ISO 8601 for created and modified properties, for others properties you should use simple date format (Y-m-d) (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse200
     */
    public function merchantsGet($page = null, $per_page = null, $sort_by = null, $sort_dir = null, $group = null, $processor = null, $datasource = null, $mid = null, $name = null, $vim = null, $active = null, $status = null, $date_filter = null, $start_date = null, $end_date = null)
    {
        list($response) = $this->merchantsGetWithHttpInfo($page, $per_page, $sort_by, $sort_dir, $group, $processor, $datasource, $mid, $name, $vim, $active, $status, $date_filter, $start_date, $end_date);
        return $response;
    }

    /**
     * Operation merchantsGetWithHttpInfo
     *
     * Get a list of merchants
     *
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     * @param  string $sort_by Sorting of merchants by the field value (optional)
     * @param  string $sort_dir Direction of sorting (optional)
     * @param  string $group Filter merchants by a group name (optional)
     * @param  string $processor Filter merchants by a processor name (optional)
     * @param  string $datasource Filter merchants by a data source name (optional)
     * @param  string $mid Filter merchants by a partial merchant number (optional)
     * @param  string $name Filter merchants by a partial merchant name (optional)
     * @param  string $vim Filter merchants by a merchant vim field (optional)
     * @param  string $active Filter merchants by a merchant active field (optional)
     * @param  string $status Filter merchants by a merchant status field (optional)
     * @param  string $date_filter Filter merchants by a merchant specific date field (optional)
     * @param  \DateTime $start_date Start date for date_filter filter in format ISO 8601 for created and modified properties, for others properties you should use simple date format (Y-m-d). (optional)
     * @param  \DateTime $end_date End date for date_filter filter in format ISO 8601 for created and modified properties, for others properties you should use simple date format (Y-m-d) (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse200, HTTP status code, HTTP response headers (array of strings)
     */
    public function merchantsGetWithHttpInfo($page = null, $per_page = null, $sort_by = null, $sort_dir = null, $group = null, $processor = null, $datasource = null, $mid = null, $name = null, $vim = null, $active = null, $status = null, $date_filter = null, $start_date = null, $end_date = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse200';
        $request = $this->merchantsGetRequest($page, $per_page, $sort_by, $sort_dir, $group, $processor, $datasource, $mid, $name, $vim, $active, $status, $date_filter, $start_date, $end_date);

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
                        '\Swagger\Client\Model\InlineResponse200',
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
     * Operation merchantsGetAsync
     *
     * Get a list of merchants
     *
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     * @param  string $sort_by Sorting of merchants by the field value (optional)
     * @param  string $sort_dir Direction of sorting (optional)
     * @param  string $group Filter merchants by a group name (optional)
     * @param  string $processor Filter merchants by a processor name (optional)
     * @param  string $datasource Filter merchants by a data source name (optional)
     * @param  string $mid Filter merchants by a partial merchant number (optional)
     * @param  string $name Filter merchants by a partial merchant name (optional)
     * @param  string $vim Filter merchants by a merchant vim field (optional)
     * @param  string $active Filter merchants by a merchant active field (optional)
     * @param  string $status Filter merchants by a merchant status field (optional)
     * @param  string $date_filter Filter merchants by a merchant specific date field (optional)
     * @param  \DateTime $start_date Start date for date_filter filter in format ISO 8601 for created and modified properties, for others properties you should use simple date format (Y-m-d). (optional)
     * @param  \DateTime $end_date End date for date_filter filter in format ISO 8601 for created and modified properties, for others properties you should use simple date format (Y-m-d) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function merchantsGetAsync($page = null, $per_page = null, $sort_by = null, $sort_dir = null, $group = null, $processor = null, $datasource = null, $mid = null, $name = null, $vim = null, $active = null, $status = null, $date_filter = null, $start_date = null, $end_date = null)
    {
        return $this->merchantsGetAsyncWithHttpInfo($page, $per_page, $sort_by, $sort_dir, $group, $processor, $datasource, $mid, $name, $vim, $active, $status, $date_filter, $start_date, $end_date)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation merchantsGetAsyncWithHttpInfo
     *
     * Get a list of merchants
     *
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     * @param  string $sort_by Sorting of merchants by the field value (optional)
     * @param  string $sort_dir Direction of sorting (optional)
     * @param  string $group Filter merchants by a group name (optional)
     * @param  string $processor Filter merchants by a processor name (optional)
     * @param  string $datasource Filter merchants by a data source name (optional)
     * @param  string $mid Filter merchants by a partial merchant number (optional)
     * @param  string $name Filter merchants by a partial merchant name (optional)
     * @param  string $vim Filter merchants by a merchant vim field (optional)
     * @param  string $active Filter merchants by a merchant active field (optional)
     * @param  string $status Filter merchants by a merchant status field (optional)
     * @param  string $date_filter Filter merchants by a merchant specific date field (optional)
     * @param  \DateTime $start_date Start date for date_filter filter in format ISO 8601 for created and modified properties, for others properties you should use simple date format (Y-m-d). (optional)
     * @param  \DateTime $end_date End date for date_filter filter in format ISO 8601 for created and modified properties, for others properties you should use simple date format (Y-m-d) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function merchantsGetAsyncWithHttpInfo($page = null, $per_page = null, $sort_by = null, $sort_dir = null, $group = null, $processor = null, $datasource = null, $mid = null, $name = null, $vim = null, $active = null, $status = null, $date_filter = null, $start_date = null, $end_date = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse200';
        $request = $this->merchantsGetRequest($page, $per_page, $sort_by, $sort_dir, $group, $processor, $datasource, $mid, $name, $vim, $active, $status, $date_filter, $start_date, $end_date);

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
     * Create request for operation 'merchantsGet'
     *
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     * @param  string $sort_by Sorting of merchants by the field value (optional)
     * @param  string $sort_dir Direction of sorting (optional)
     * @param  string $group Filter merchants by a group name (optional)
     * @param  string $processor Filter merchants by a processor name (optional)
     * @param  string $datasource Filter merchants by a data source name (optional)
     * @param  string $mid Filter merchants by a partial merchant number (optional)
     * @param  string $name Filter merchants by a partial merchant name (optional)
     * @param  string $vim Filter merchants by a merchant vim field (optional)
     * @param  string $active Filter merchants by a merchant active field (optional)
     * @param  string $status Filter merchants by a merchant status field (optional)
     * @param  string $date_filter Filter merchants by a merchant specific date field (optional)
     * @param  \DateTime $start_date Start date for date_filter filter in format ISO 8601 for created and modified properties, for others properties you should use simple date format (Y-m-d). (optional)
     * @param  \DateTime $end_date End date for date_filter filter in format ISO 8601 for created and modified properties, for others properties you should use simple date format (Y-m-d) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function merchantsGetRequest($page = null, $per_page = null, $sort_by = null, $sort_dir = null, $group = null, $processor = null, $datasource = null, $mid = null, $name = null, $vim = null, $active = null, $status = null, $date_filter = null, $start_date = null, $end_date = null)
    {

        $resourcePath = '/merchants';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page);
        }
        // query params
        if ($per_page !== null) {
            $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page);
        }
        // query params
        if ($sort_by !== null) {
            $queryParams['sort_by'] = ObjectSerializer::toQueryValue($sort_by);
        }
        // query params
        if ($sort_dir !== null) {
            $queryParams['sort_dir'] = ObjectSerializer::toQueryValue($sort_dir);
        }
        // query params
        if ($group !== null) {
            $queryParams['group'] = ObjectSerializer::toQueryValue($group);
        }
        // query params
        if ($processor !== null) {
            $queryParams['processor'] = ObjectSerializer::toQueryValue($processor);
        }
        // query params
        if ($datasource !== null) {
            $queryParams['datasource'] = ObjectSerializer::toQueryValue($datasource);
        }
        // query params
        if ($mid !== null) {
            $queryParams['mid'] = ObjectSerializer::toQueryValue($mid);
        }
        // query params
        if ($name !== null) {
            $queryParams['name'] = ObjectSerializer::toQueryValue($name);
        }
        // query params
        if ($vim !== null) {
            $queryParams['vim'] = ObjectSerializer::toQueryValue($vim);
        }
        // query params
        if ($active !== null) {
            $queryParams['active'] = ObjectSerializer::toQueryValue($active);
        }
        // query params
        if ($status !== null) {
            $queryParams['status'] = ObjectSerializer::toQueryValue($status);
        }
        // query params
        if ($date_filter !== null) {
            $queryParams['date_filter'] = ObjectSerializer::toQueryValue($date_filter);
        }
        // query params
        if ($start_date !== null) {
            $queryParams['start_date'] = ObjectSerializer::toQueryValue($start_date);
        }
        // query params
        if ($end_date !== null) {
            $queryParams['end_date'] = ObjectSerializer::toQueryValue($end_date);
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
     * Operation merchantsMerchantNumberChargebacksGet
     *
     * Get a list of chargebacks
     *
     * @param  int $merchant_number Merchant number (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     * @param  \DateTime $start_date Filter batches by a date (Y-m-d) (optional)
     * @param  \DateTime $end_date Filter batches by a date (Y-m-d) (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse2004
     */
    public function merchantsMerchantNumberChargebacksGet($merchant_number, $page = null, $per_page = null, $start_date = null, $end_date = null)
    {
        list($response) = $this->merchantsMerchantNumberChargebacksGetWithHttpInfo($merchant_number, $page, $per_page, $start_date, $end_date);
        return $response;
    }

    /**
     * Operation merchantsMerchantNumberChargebacksGetWithHttpInfo
     *
     * Get a list of chargebacks
     *
     * @param  int $merchant_number Merchant number (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     * @param  \DateTime $start_date Filter batches by a date (Y-m-d) (optional)
     * @param  \DateTime $end_date Filter batches by a date (Y-m-d) (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse2004, HTTP status code, HTTP response headers (array of strings)
     */
    public function merchantsMerchantNumberChargebacksGetWithHttpInfo($merchant_number, $page = null, $per_page = null, $start_date = null, $end_date = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse2004';
        $request = $this->merchantsMerchantNumberChargebacksGetRequest($merchant_number, $page, $per_page, $start_date, $end_date);

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
                        '\Swagger\Client\Model\InlineResponse2004',
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
     * Operation merchantsMerchantNumberChargebacksGetAsync
     *
     * Get a list of chargebacks
     *
     * @param  int $merchant_number Merchant number (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     * @param  \DateTime $start_date Filter batches by a date (Y-m-d) (optional)
     * @param  \DateTime $end_date Filter batches by a date (Y-m-d) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function merchantsMerchantNumberChargebacksGetAsync($merchant_number, $page = null, $per_page = null, $start_date = null, $end_date = null)
    {
        return $this->merchantsMerchantNumberChargebacksGetAsyncWithHttpInfo($merchant_number, $page, $per_page, $start_date, $end_date)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation merchantsMerchantNumberChargebacksGetAsyncWithHttpInfo
     *
     * Get a list of chargebacks
     *
     * @param  int $merchant_number Merchant number (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     * @param  \DateTime $start_date Filter batches by a date (Y-m-d) (optional)
     * @param  \DateTime $end_date Filter batches by a date (Y-m-d) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function merchantsMerchantNumberChargebacksGetAsyncWithHttpInfo($merchant_number, $page = null, $per_page = null, $start_date = null, $end_date = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse2004';
        $request = $this->merchantsMerchantNumberChargebacksGetRequest($merchant_number, $page, $per_page, $start_date, $end_date);

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
     * Create request for operation 'merchantsMerchantNumberChargebacksGet'
     *
     * @param  int $merchant_number Merchant number (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     * @param  \DateTime $start_date Filter batches by a date (Y-m-d) (optional)
     * @param  \DateTime $end_date Filter batches by a date (Y-m-d) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function merchantsMerchantNumberChargebacksGetRequest($merchant_number, $page = null, $per_page = null, $start_date = null, $end_date = null)
    {
        // verify the required parameter 'merchant_number' is set
        if ($merchant_number === null || (is_array($merchant_number) && count($merchant_number) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $merchant_number when calling merchantsMerchantNumberChargebacksGet'
            );
        }

        $resourcePath = '/merchants/{merchantNumber}/chargebacks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page);
        }
        // query params
        if ($per_page !== null) {
            $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page);
        }
        // query params
        if ($start_date !== null) {
            $queryParams['start_date'] = ObjectSerializer::toQueryValue($start_date);
        }
        // query params
        if ($end_date !== null) {
            $queryParams['end_date'] = ObjectSerializer::toQueryValue($end_date);
        }

        // path params
        if ($merchant_number !== null) {
            $resourcePath = str_replace(
                '{' . 'merchantNumber' . '}',
                ObjectSerializer::toPathValue($merchant_number),
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
     * Operation merchantsMerchantNumberGet
     *
     * Get detailed merchant information
     *
     * @param  int $merchant_number Merchant number (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse2001
     */
    public function merchantsMerchantNumberGet($merchant_number)
    {
        list($response) = $this->merchantsMerchantNumberGetWithHttpInfo($merchant_number);
        return $response;
    }

    /**
     * Operation merchantsMerchantNumberGetWithHttpInfo
     *
     * Get detailed merchant information
     *
     * @param  int $merchant_number Merchant number (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse2001, HTTP status code, HTTP response headers (array of strings)
     */
    public function merchantsMerchantNumberGetWithHttpInfo($merchant_number)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse2001';
        $request = $this->merchantsMerchantNumberGetRequest($merchant_number);

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
                        '\Swagger\Client\Model\InlineResponse2001',
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
     * Operation merchantsMerchantNumberGetAsync
     *
     * Get detailed merchant information
     *
     * @param  int $merchant_number Merchant number (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function merchantsMerchantNumberGetAsync($merchant_number)
    {
        return $this->merchantsMerchantNumberGetAsyncWithHttpInfo($merchant_number)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation merchantsMerchantNumberGetAsyncWithHttpInfo
     *
     * Get detailed merchant information
     *
     * @param  int $merchant_number Merchant number (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function merchantsMerchantNumberGetAsyncWithHttpInfo($merchant_number)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse2001';
        $request = $this->merchantsMerchantNumberGetRequest($merchant_number);

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
     * Create request for operation 'merchantsMerchantNumberGet'
     *
     * @param  int $merchant_number Merchant number (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function merchantsMerchantNumberGetRequest($merchant_number)
    {
        // verify the required parameter 'merchant_number' is set
        if ($merchant_number === null || (is_array($merchant_number) && count($merchant_number) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $merchant_number when calling merchantsMerchantNumberGet'
            );
        }

        $resourcePath = '/merchants/{merchantNumber}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($merchant_number !== null) {
            $resourcePath = str_replace(
                '{' . 'merchantNumber' . '}',
                ObjectSerializer::toPathValue($merchant_number),
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
     * Operation merchantsMerchantNumberPatch
     *
     * Update an existing merchant
     *
     * @param  \Swagger\Client\Model\Body $body Merchant changes (send only fields you want to change) (required)
     * @param  int $merchant_number Merchant number (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse2002
     */
    public function merchantsMerchantNumberPatch($body, $merchant_number)
    {
        list($response) = $this->merchantsMerchantNumberPatchWithHttpInfo($body, $merchant_number);
        return $response;
    }

    /**
     * Operation merchantsMerchantNumberPatchWithHttpInfo
     *
     * Update an existing merchant
     *
     * @param  \Swagger\Client\Model\Body $body Merchant changes (send only fields you want to change) (required)
     * @param  int $merchant_number Merchant number (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse2002, HTTP status code, HTTP response headers (array of strings)
     */
    public function merchantsMerchantNumberPatchWithHttpInfo($body, $merchant_number)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse2002';
        $request = $this->merchantsMerchantNumberPatchRequest($body, $merchant_number);

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
                        '\Swagger\Client\Model\InlineResponse2002',
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
     * Operation merchantsMerchantNumberPatchAsync
     *
     * Update an existing merchant
     *
     * @param  \Swagger\Client\Model\Body $body Merchant changes (send only fields you want to change) (required)
     * @param  int $merchant_number Merchant number (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function merchantsMerchantNumberPatchAsync($body, $merchant_number)
    {
        return $this->merchantsMerchantNumberPatchAsyncWithHttpInfo($body, $merchant_number)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation merchantsMerchantNumberPatchAsyncWithHttpInfo
     *
     * Update an existing merchant
     *
     * @param  \Swagger\Client\Model\Body $body Merchant changes (send only fields you want to change) (required)
     * @param  int $merchant_number Merchant number (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function merchantsMerchantNumberPatchAsyncWithHttpInfo($body, $merchant_number)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse2002';
        $request = $this->merchantsMerchantNumberPatchRequest($body, $merchant_number);

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
     * Create request for operation 'merchantsMerchantNumberPatch'
     *
     * @param  \Swagger\Client\Model\Body $body Merchant changes (send only fields you want to change) (required)
     * @param  int $merchant_number Merchant number (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function merchantsMerchantNumberPatchRequest($body, $merchant_number)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling merchantsMerchantNumberPatch'
            );
        }
        // verify the required parameter 'merchant_number' is set
        if ($merchant_number === null || (is_array($merchant_number) && count($merchant_number) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $merchant_number when calling merchantsMerchantNumberPatch'
            );
        }

        $resourcePath = '/merchants/{merchantNumber}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($merchant_number !== null) {
            $resourcePath = str_replace(
                '{' . 'merchantNumber' . '}',
                ObjectSerializer::toPathValue($merchant_number),
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
     * Operation merchantsMerchantNumberRetrievalsGet
     *
     * Get a list of retrievals
     *
     * @param  int $merchant_number Merchant number (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     * @param  \DateTime $start_date Filter batches by a date (Y-m-d) (optional)
     * @param  \DateTime $end_date Filter batches by a date (Y-m-d) (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse2005
     */
    public function merchantsMerchantNumberRetrievalsGet($merchant_number, $page = null, $per_page = null, $start_date = null, $end_date = null)
    {
        list($response) = $this->merchantsMerchantNumberRetrievalsGetWithHttpInfo($merchant_number, $page, $per_page, $start_date, $end_date);
        return $response;
    }

    /**
     * Operation merchantsMerchantNumberRetrievalsGetWithHttpInfo
     *
     * Get a list of retrievals
     *
     * @param  int $merchant_number Merchant number (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     * @param  \DateTime $start_date Filter batches by a date (Y-m-d) (optional)
     * @param  \DateTime $end_date Filter batches by a date (Y-m-d) (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse2005, HTTP status code, HTTP response headers (array of strings)
     */
    public function merchantsMerchantNumberRetrievalsGetWithHttpInfo($merchant_number, $page = null, $per_page = null, $start_date = null, $end_date = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse2005';
        $request = $this->merchantsMerchantNumberRetrievalsGetRequest($merchant_number, $page, $per_page, $start_date, $end_date);

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
                        '\Swagger\Client\Model\InlineResponse2005',
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
     * Operation merchantsMerchantNumberRetrievalsGetAsync
     *
     * Get a list of retrievals
     *
     * @param  int $merchant_number Merchant number (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     * @param  \DateTime $start_date Filter batches by a date (Y-m-d) (optional)
     * @param  \DateTime $end_date Filter batches by a date (Y-m-d) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function merchantsMerchantNumberRetrievalsGetAsync($merchant_number, $page = null, $per_page = null, $start_date = null, $end_date = null)
    {
        return $this->merchantsMerchantNumberRetrievalsGetAsyncWithHttpInfo($merchant_number, $page, $per_page, $start_date, $end_date)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation merchantsMerchantNumberRetrievalsGetAsyncWithHttpInfo
     *
     * Get a list of retrievals
     *
     * @param  int $merchant_number Merchant number (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     * @param  \DateTime $start_date Filter batches by a date (Y-m-d) (optional)
     * @param  \DateTime $end_date Filter batches by a date (Y-m-d) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function merchantsMerchantNumberRetrievalsGetAsyncWithHttpInfo($merchant_number, $page = null, $per_page = null, $start_date = null, $end_date = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse2005';
        $request = $this->merchantsMerchantNumberRetrievalsGetRequest($merchant_number, $page, $per_page, $start_date, $end_date);

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
     * Create request for operation 'merchantsMerchantNumberRetrievalsGet'
     *
     * @param  int $merchant_number Merchant number (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     * @param  \DateTime $start_date Filter batches by a date (Y-m-d) (optional)
     * @param  \DateTime $end_date Filter batches by a date (Y-m-d) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function merchantsMerchantNumberRetrievalsGetRequest($merchant_number, $page = null, $per_page = null, $start_date = null, $end_date = null)
    {
        // verify the required parameter 'merchant_number' is set
        if ($merchant_number === null || (is_array($merchant_number) && count($merchant_number) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $merchant_number when calling merchantsMerchantNumberRetrievalsGet'
            );
        }

        $resourcePath = '/merchants/{merchantNumber}/retrievals';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page);
        }
        // query params
        if ($per_page !== null) {
            $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page);
        }
        // query params
        if ($start_date !== null) {
            $queryParams['start_date'] = ObjectSerializer::toQueryValue($start_date);
        }
        // query params
        if ($end_date !== null) {
            $queryParams['end_date'] = ObjectSerializer::toQueryValue($end_date);
        }

        // path params
        if ($merchant_number !== null) {
            $resourcePath = str_replace(
                '{' . 'merchantNumber' . '}',
                ObjectSerializer::toPathValue($merchant_number),
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
     * Operation merchantsMerchantNumberStatementsGet
     *
     * Get a list of statements
     *
     * @param  int $merchant_number Merchant number (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse2006
     */
    public function merchantsMerchantNumberStatementsGet($merchant_number, $page = null, $per_page = null)
    {
        list($response) = $this->merchantsMerchantNumberStatementsGetWithHttpInfo($merchant_number, $page, $per_page);
        return $response;
    }

    /**
     * Operation merchantsMerchantNumberStatementsGetWithHttpInfo
     *
     * Get a list of statements
     *
     * @param  int $merchant_number Merchant number (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse2006, HTTP status code, HTTP response headers (array of strings)
     */
    public function merchantsMerchantNumberStatementsGetWithHttpInfo($merchant_number, $page = null, $per_page = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse2006';
        $request = $this->merchantsMerchantNumberStatementsGetRequest($merchant_number, $page, $per_page);

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
                        '\Swagger\Client\Model\InlineResponse2006',
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
     * Operation merchantsMerchantNumberStatementsGetAsync
     *
     * Get a list of statements
     *
     * @param  int $merchant_number Merchant number (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function merchantsMerchantNumberStatementsGetAsync($merchant_number, $page = null, $per_page = null)
    {
        return $this->merchantsMerchantNumberStatementsGetAsyncWithHttpInfo($merchant_number, $page, $per_page)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation merchantsMerchantNumberStatementsGetAsyncWithHttpInfo
     *
     * Get a list of statements
     *
     * @param  int $merchant_number Merchant number (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function merchantsMerchantNumberStatementsGetAsyncWithHttpInfo($merchant_number, $page = null, $per_page = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse2006';
        $request = $this->merchantsMerchantNumberStatementsGetRequest($merchant_number, $page, $per_page);

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
     * Create request for operation 'merchantsMerchantNumberStatementsGet'
     *
     * @param  int $merchant_number Merchant number (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function merchantsMerchantNumberStatementsGetRequest($merchant_number, $page = null, $per_page = null)
    {
        // verify the required parameter 'merchant_number' is set
        if ($merchant_number === null || (is_array($merchant_number) && count($merchant_number) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $merchant_number when calling merchantsMerchantNumberStatementsGet'
            );
        }

        $resourcePath = '/merchants/{merchantNumber}/statements';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page);
        }
        // query params
        if ($per_page !== null) {
            $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page);
        }

        // path params
        if ($merchant_number !== null) {
            $resourcePath = str_replace(
                '{' . 'merchantNumber' . '}',
                ObjectSerializer::toPathValue($merchant_number),
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
     * Operation merchantsMerchantNumberStatementsStatementIdGet
     *
     * Download a statement
     *
     * @param  int $merchant_number Merchant number (required)
     * @param  int $statement_id Statement Id (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return string
     */
    public function merchantsMerchantNumberStatementsStatementIdGet($merchant_number, $statement_id)
    {
        list($response) = $this->merchantsMerchantNumberStatementsStatementIdGetWithHttpInfo($merchant_number, $statement_id);
        return $response;
    }

    /**
     * Operation merchantsMerchantNumberStatementsStatementIdGetWithHttpInfo
     *
     * Download a statement
     *
     * @param  int $merchant_number Merchant number (required)
     * @param  int $statement_id Statement Id (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of string, HTTP status code, HTTP response headers (array of strings)
     */
    public function merchantsMerchantNumberStatementsStatementIdGetWithHttpInfo($merchant_number, $statement_id)
    {
        $returnType = 'string';
        $request = $this->merchantsMerchantNumberStatementsStatementIdGetRequest($merchant_number, $statement_id);

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
     * Operation merchantsMerchantNumberStatementsStatementIdGetAsync
     *
     * Download a statement
     *
     * @param  int $merchant_number Merchant number (required)
     * @param  int $statement_id Statement Id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function merchantsMerchantNumberStatementsStatementIdGetAsync($merchant_number, $statement_id)
    {
        return $this->merchantsMerchantNumberStatementsStatementIdGetAsyncWithHttpInfo($merchant_number, $statement_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation merchantsMerchantNumberStatementsStatementIdGetAsyncWithHttpInfo
     *
     * Download a statement
     *
     * @param  int $merchant_number Merchant number (required)
     * @param  int $statement_id Statement Id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function merchantsMerchantNumberStatementsStatementIdGetAsyncWithHttpInfo($merchant_number, $statement_id)
    {
        $returnType = 'string';
        $request = $this->merchantsMerchantNumberStatementsStatementIdGetRequest($merchant_number, $statement_id);

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
     * Create request for operation 'merchantsMerchantNumberStatementsStatementIdGet'
     *
     * @param  int $merchant_number Merchant number (required)
     * @param  int $statement_id Statement Id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function merchantsMerchantNumberStatementsStatementIdGetRequest($merchant_number, $statement_id)
    {
        // verify the required parameter 'merchant_number' is set
        if ($merchant_number === null || (is_array($merchant_number) && count($merchant_number) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $merchant_number when calling merchantsMerchantNumberStatementsStatementIdGet'
            );
        }
        // verify the required parameter 'statement_id' is set
        if ($statement_id === null || (is_array($statement_id) && count($statement_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $statement_id when calling merchantsMerchantNumberStatementsStatementIdGet'
            );
        }

        $resourcePath = '/merchants/{merchantNumber}/statements/{statementId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($merchant_number !== null) {
            $resourcePath = str_replace(
                '{' . 'merchantNumber' . '}',
                ObjectSerializer::toPathValue($merchant_number),
                $resourcePath
            );
        }
        // path params
        if ($statement_id !== null) {
            $resourcePath = str_replace(
                '{' . 'statementId' . '}',
                ObjectSerializer::toPathValue($statement_id),
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
     * Operation merchantsMerchantNumberTransactionsGet
     *
     * Get a list of batches and transactions
     *
     * @param  int $merchant_number Merchant number (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     * @param  \DateTime $start_date Filter batches by a date (Y-m-d) (optional)
     * @param  \DateTime $end_date Filter batches by a date (Y-m-d) (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse2003
     */
    public function merchantsMerchantNumberTransactionsGet($merchant_number, $page = null, $per_page = null, $start_date = null, $end_date = null)
    {
        list($response) = $this->merchantsMerchantNumberTransactionsGetWithHttpInfo($merchant_number, $page, $per_page, $start_date, $end_date);
        return $response;
    }

    /**
     * Operation merchantsMerchantNumberTransactionsGetWithHttpInfo
     *
     * Get a list of batches and transactions
     *
     * @param  int $merchant_number Merchant number (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     * @param  \DateTime $start_date Filter batches by a date (Y-m-d) (optional)
     * @param  \DateTime $end_date Filter batches by a date (Y-m-d) (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse2003, HTTP status code, HTTP response headers (array of strings)
     */
    public function merchantsMerchantNumberTransactionsGetWithHttpInfo($merchant_number, $page = null, $per_page = null, $start_date = null, $end_date = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse2003';
        $request = $this->merchantsMerchantNumberTransactionsGetRequest($merchant_number, $page, $per_page, $start_date, $end_date);

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
                        '\Swagger\Client\Model\InlineResponse2003',
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
     * Operation merchantsMerchantNumberTransactionsGetAsync
     *
     * Get a list of batches and transactions
     *
     * @param  int $merchant_number Merchant number (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     * @param  \DateTime $start_date Filter batches by a date (Y-m-d) (optional)
     * @param  \DateTime $end_date Filter batches by a date (Y-m-d) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function merchantsMerchantNumberTransactionsGetAsync($merchant_number, $page = null, $per_page = null, $start_date = null, $end_date = null)
    {
        return $this->merchantsMerchantNumberTransactionsGetAsyncWithHttpInfo($merchant_number, $page, $per_page, $start_date, $end_date)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation merchantsMerchantNumberTransactionsGetAsyncWithHttpInfo
     *
     * Get a list of batches and transactions
     *
     * @param  int $merchant_number Merchant number (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     * @param  \DateTime $start_date Filter batches by a date (Y-m-d) (optional)
     * @param  \DateTime $end_date Filter batches by a date (Y-m-d) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function merchantsMerchantNumberTransactionsGetAsyncWithHttpInfo($merchant_number, $page = null, $per_page = null, $start_date = null, $end_date = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse2003';
        $request = $this->merchantsMerchantNumberTransactionsGetRequest($merchant_number, $page, $per_page, $start_date, $end_date);

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
     * Create request for operation 'merchantsMerchantNumberTransactionsGet'
     *
     * @param  int $merchant_number Merchant number (required)
     * @param  int $page Page number (optional)
     * @param  int $per_page Count of records per page (optional)
     * @param  \DateTime $start_date Filter batches by a date (Y-m-d) (optional)
     * @param  \DateTime $end_date Filter batches by a date (Y-m-d) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function merchantsMerchantNumberTransactionsGetRequest($merchant_number, $page = null, $per_page = null, $start_date = null, $end_date = null)
    {
        // verify the required parameter 'merchant_number' is set
        if ($merchant_number === null || (is_array($merchant_number) && count($merchant_number) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $merchant_number when calling merchantsMerchantNumberTransactionsGet'
            );
        }

        $resourcePath = '/merchants/{merchantNumber}/transactions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($page !== null) {
            $queryParams['page'] = ObjectSerializer::toQueryValue($page);
        }
        // query params
        if ($per_page !== null) {
            $queryParams['per_page'] = ObjectSerializer::toQueryValue($per_page);
        }
        // query params
        if ($start_date !== null) {
            $queryParams['start_date'] = ObjectSerializer::toQueryValue($start_date);
        }
        // query params
        if ($end_date !== null) {
            $queryParams['end_date'] = ObjectSerializer::toQueryValue($end_date);
        }

        // path params
        if ($merchant_number !== null) {
            $resourcePath = str_replace(
                '{' . 'merchantNumber' . '}',
                ObjectSerializer::toPathValue($merchant_number),
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

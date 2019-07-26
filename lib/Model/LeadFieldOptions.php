<?php
/**
 * LeadFieldOptions
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
 * # Introduction Welcome to IRIS’s API!  The API is organized around `REST`. All requests should be made over `SSL`.  All request and response bodies, including errors, are encoded in `JSON`. # Open API The Open API provides numerous functions to access or to update your CRM lead and merchant data using simple REST calls. ### You can use the Lead API to: - Get a list of leads with field data, notes, appointments, tasks, users and, documents - Get a list of available campaigns, groups, sources, and statuses - Create a new lead, lead note, task, or an appointment - Assign and un-assign users to a lead - Upload or download documents - Update field data, status, campaign, group, and source - Generate an e-signature application and get a list of available apps  ### You can use the Merchant API to: - Get daily merchant deposits and transactions - Get daily chargebacks and retrievals - Get monthly merchant PDF statements - Get a list of merchants by demographics such as processor or group - Get merchant demographic profile information using the merchant id - Make updates to merchant profiles in real-time  # Generate an API token When you send an API request, you will need to include an API token in your request in order to authenticate your account.  The tokens are generated in the CRM by each user individually, and each user may create one or more tokens.  To generate a new API Token, open your user settings page by clicking on your username in the top-right corner, and clicking on the ** Settings ** link or you can use the <a href=\"https://iriscrm.com/settings\">link</a>.  Then open the ** API Settings ** tab, click ** Create New API Token **, configure your token’s settings as needed, and click ** Add New Token **:  <img src='https://iriscrm.com/images/docs/mapi001.png'/>  Your new token will now be created and displayed in a popup window:  <img src='https://iriscrm.com/images/docs/mapi002.png'/>  Once the token is created, it will be shown in the list of available API Tokens where you can copy the token, update its settings, or delete it once it’s no longer needed:  <img src='https://iriscrm.com/images/docs/mapi003.png'/>  ** Note: ** The created tokens will inherit the user’s permissions to assigned merchants, leads, groups and processors. # Using the API Authentication to the API is performed via `X-API-KEY` header. Requests not properly authenticated will return a `401` error code.  `curl -X GET \"https://iriscrm.com/api/v1/merchants/[MID HERE]\" -H \"accept: application/json\" -H \"X-API-KEY: [YOURKEY]\"`  Note that all requests should be made over `SSL`. All request and response bodies, including errors, are encoded in JSON.  The API returns standard HTTP success or error status codes. In case of errors, additional information about what went wrong will be encoded in the response as JSON.  By default, you can make `120` requests per minute. Check the returned HTTP headers of any API request to see your current rate limit status. # Using the Subscription API API Subscriptions are used to send information about an event to a URL and trigger an API call. This is more efficient than doing scheduled API calls.  To create a subscription, use the API Settings page or send a request using the instructions in the Subscriptions section below.  All you need to know is the events you want to be subscribed for and the url to which the updates need to be sent.  To create subscriptions using our GUI open tab ** API Settings ** at ** https://iriscrm.com/settings **:  <img src='https://iriscrm.com/images/docs/new-subscription.png'/> # Authentication Authenticate your account by including your secret key in API requests. Do not share your secret API keys in publicly accessible areas, client-side code, and so forth. Authentication to the API is performed via `X-API-KEY` header. Requests not properly authenticated will return a `401` error code. # Errors Our API returns standard `HTTP` success or error status codes. For errors, we will also include extra information about what went wrong encoded in the response as `JSON`. # Limiting You can make `120` requests per minute. If you will reach a limit you will get a `429: Too Many Attempts.` response from the server. Check the returned `HTTP` headers of any API request to see your current rate limit status. Headers description: * `X-RateLimit-Limit` tells you the max number of requests you're allowed to make within this application's time period * `X-RateLimit-Remaining` tells you how many requests you have left within this current time period * `Retry-After` tells you how many seconds to wait until you try again. (you'll only get `Retry-After` if you've hit the limit).   # PHP SDK  ### Installation and Usage  #### Availability  The IRIS CRM PHP SDK requires PHP version 5.5 or higher and the PHP cURL extension.  #### Composer  To install the bindings via [Composer](http://getcomposer.org/), please run:  ```bash  composer require iris-crm/php-sdk      ```   In your code, configure the environment and API credentials:  ```php require_once(__DIR__ . '/vendor/autoload.php');  use Swagger\\Client\\Configuration; use Swagger\\Client\\Api\\LeadsApi;  // Configure API key authorization $config = Configuration::getDefaultConfiguration() ->setApiKey('X-API-KEY', 'YOUR_API_KEY') ->setHost('https://iriscrm.com/api/v1/'); $apiInstance = new LeadsApi(null, $config);  $page        = 1; // int | Page number $sort_by     = \"created\"; // string | Sorting of leads by the field value $sort_dir    = \"asc\"; // string | Direction of sorting $group       = 2; // int | Filter leads by a group id $campaign    = 3; // int | Filter leads by a campaign id $source      = 4; // int | Filter leads by a source id $status      = 1; // int | Filter leads by a status id $category    = 1; // int | Filter leads by a status category id $user        = 12; // int | Filter leads by a user id $date_filter = \"created\"; // string | Filtering leads by a date range depends on this filter $start_date  = new \\DateTime(\"2018-10-20T19:20:30+01:00\"); // \\DateTime | Filter leads by a date in ISO 8601 format (Y-m-d\\\\TH:i:sP) $end_date    = new \\DateTime(\"2019-10-20T19:20:30+01:00\"); // \\DateTime | Filter leads by a date in ISO 8601 format (Y-m-d\\\\TH:i:sP) $email       = \"test@mail.com\"; // string | Filter leads by a email try {     $result = $apiInstance->leadsGet($page, $sort_by, $sort_dir, $group, $campaign, $source, $status, $category, $user, $date_filter, $start_date, $end_date, $email);     print_r($result); } catch (Exception $e) {     echo 'Exception when calling LeadsApi->leadsGet: ', $e->getMessage(), PHP_EOL; } ``` Swagger\\Client\\Api\\LeadsApi it's a SDK Class for Lead endpoints.  On this example you can see how we can get a list of leads.  All parameters for leadsGet method is optional and can be skipped.  If you want skip some parameters - you need to set parameter to `null`  ### API Endpoints All URIs are relative to *https://iriscrm.com/api/v1*  Class | Method | HTTP request | Description ------------ | ------------- | ------------- | ------------- *LeadsApi* | **leadsApplicationsAppIdMappingsGet** | **GET** /leads/applications/{appId}/mappings | Get a list of available application field mappings *LeadsApi* | **leadsApplicationsAppIdMappingsMapIdDelete** | **DELETE** /leads/applications/{appId}/mappings/{mapId} | Delete an application field mapping *LeadsApi* | **leadsApplicationsAppIdMappingsMapIdGet** | **GET** /leads/applications/{appId}/mappings/{mapId} | Get a application field mapping *LeadsApi* | **leadsApplicationsAppIdMappingsMapIdPatch** | **PATCH** /leads/applications/{appId}/mappings/{mapId} | Update an application field mapping *LeadsApi* | **leadsApplicationsAppIdMappingsPost** | **POST** /leads/applications/{appId}/mappings | Create a new application field mapping *LeadsApi* | **leadsApplicationsGet** | **GET** /leads/applications | Get a list of available applications *LeadsApi* | **leadsCampaignsGet** | **GET** /leads/campaigns | Get a list of available campaigns *LeadsApi* | **leadsDynamicFieldsSchemaGet** | **GET** /leads/dynamic-fields-schema | Get a schema of lead fields *LeadsApi* | **leadsEmailsTemplatesGet** | **GET** /leads/emails/templates | Get list of email templates *LeadsApi* | **leadsFieldsFieldIdGet** | **GET** /leads/fields/{fieldId} | Get a lead field *LeadsApi* | **leadsFieldsFieldIdOrderPatch** | **PATCH** /leads/fields/{fieldId}/order | Update a lead field order position *LeadsApi* | **leadsFieldsFieldIdPatch** | **PATCH** /leads/fields/{fieldId} | Update a lead field *LeadsApi* | **leadsFieldsGet** | **GET** /leads/fields | Get a list of available lead fields *LeadsApi* | **leadsFieldsPost** | **POST** /leads/fields | Create a new lead field *LeadsApi* | **leadsFieldsTabsGet** | **GET** /leads/fields/tabs | Get a list of all lead field tabs *LeadsApi* | **leadsFieldsTabsPost** | **POST** /leads/fields/tabs | Create a lead field tab *LeadsApi* | **leadsFieldsTabsTabIdGet** | **GET** /leads/fields/tabs/{tabId} | Get a lead field tab *LeadsApi* | **leadsFieldsTabsTabIdPatch** | **PATCH** /leads/fields/tabs/{tabId} | Update a lead field tab *LeadsApi* | **leadsGet** | **GET** /leads | Get a list of leads *LeadsApi* | **leadsGroupsGet** | **GET** /leads/groups | Get a list of available groups *LeadsApi* | **leadsLeadIdActivityCampaignGet** | **GET** /leads/{leadId}/activity/campaign | Get a list of all lead campaign activity *LeadsApi* | **leadsLeadIdActivityDeletionGet** | **GET** /leads/{leadId}/activity/deletion | Get a list of all lead deletion activity *LeadsApi* | **leadsLeadIdActivityDuplicatesGet** | **GET** /leads/{leadId}/activity/duplicates | Get a list of all lead duplicate activity *LeadsApi* | **leadsLeadIdActivityLinksGet** | **GET** /leads/{leadId}/activity/links | Get a list of all lead links activity *LeadsApi* | **leadsLeadIdActivitySourceGet** | **GET** /leads/{leadId}/activity/source | Get a list of all lead source activity *LeadsApi* | **leadsLeadIdActivityStatusGet** | **GET** /leads/{leadId}/activity/status | Get a list of all lead status activity *LeadsApi* | **leadsLeadIdApplicationsApplicationIdPopulatePost** | **POST** /leads/{leadId}/applications/{applicationId}/populate | Populate PDF Document *LeadsApi* | **leadsLeadIdAppointmentsGet** | **GET** /leads/{leadId}/appointments | Get lead appointments *LeadsApi* | **leadsLeadIdAppointmentsPost** | **POST** /leads/{leadId}/appointments | Create a lead appointment *LeadsApi* | **leadsLeadIdDocumentsDocumentIdGet** | **GET** /leads/{leadId}/documents/{documentId} | Download a document *LeadsApi* | **leadsLeadIdDocumentsGet** | **GET** /leads/{leadId}/documents | Get a list of available documents *LeadsApi* | **leadsLeadIdDocumentsPost** | **POST** /leads/{leadId}/documents | Upload a document *LeadsApi* | **leadsLeadIdEmailsTemplateIdPost** | **POST** /leads/{leadId}/emails/{templateId} | Send an email to lead with template *LeadsApi* | **leadsLeadIdGet** | **GET** /leads/{leadId} | Get detailed lead information *LeadsApi* | **leadsLeadIdMailboxEmailIdAttachmentAttachmentIdGet** | **GET** /leads/{leadId}/mailbox/{emailId}/attachment/{attachmentId} | Download a mailbox email attachment *LeadsApi* | **leadsLeadIdNotesGet** | **GET** /leads/{leadId}/notes | Get lead notes *LeadsApi* | **leadsLeadIdNotesPost** | **POST** /leads/{leadId}/notes | Create a lead note *LeadsApi* | **leadsLeadIdPatch** | **PATCH** /leads/{leadId} | Update a lead *LeadsApi* | **leadsLeadIdSignaturesApplicationIdGeneratePost** | **POST** /leads/{leadId}/signatures/{applicationId}/generate | Generate an e-signature document *LeadsApi* | **leadsLeadIdSignaturesApplicationIdSendPost** | **POST** /leads/{leadId}/signatures/{applicationId}/send | Send an e-signature document *LeadsApi* | **leadsLeadIdSignaturesGet** | **GET** /leads/{leadId}/signatures | Get a list of all lead e-signatures documents *LeadsApi* | **leadsLeadIdSmsTemplateIdPost** | **POST** /leads/{leadId}/sms/{templateId} | Send an sms to lead with selected sms template *LeadsApi* | **leadsLeadIdTasksGet** | **POST** /leads/{leadId}/tasks | Create a lead task *LeadsApi* | **leadsLeadIdUsersGet** | **GET** /leads/{leadId}/users | Get a list of assigned users *LeadsApi* | **leadsLeadIdUsersPost** | **POST** /leads/{leadId}/users | Assign a user *LeadsApi* | **leadsLeadIdUsersUserIdDelete** | **DELETE** /leads/{leadId}/users/{userId} | Unassign a user from a lead *LeadsApi* | **leadsPost** | **POST** /leads | Create a lead *LeadsApi* | **leadsSignaturesApplicationIdDownloadGet** | **GET** /leads/signatures/{applicationId}/download | Download an e-signature document *LeadsApi* | **leadsSourcesGet** | **GET** /leads/sources | Get a list of available sources *LeadsApi* | **leadsStatusesGet** | **GET** /leads/statuses | Get a list of available statuses *LeadsApi* | **leadsUsersGet** | **GET** /leads/users | Get a list of available users *MerchantsApi* | **merchantsGet** | **GET** /merchants | Get a list of merchants *MerchantsApi* | **merchantsMerchantNumberChargebacksGet** | **GET** /merchants/{merchantNumber}/chargebacks | Get a list of chargebacks *MerchantsApi* | **merchantsMerchantNumberGet** | **GET** /merchants/{merchantNumber} | Get detailed merchant information *MerchantsApi* | **merchantsMerchantNumberPatch** | **PATCH** /merchants/{merchantNumber} | Update an existing merchant *MerchantsApi* | **merchantsMerchantNumberRetrievalsGet** | **GET** /merchants/{merchantNumber}/retrievals | Get a list of retrievals *MerchantsApi* | **merchantsMerchantNumberStatementsGet** | **GET** /merchants/{merchantNumber}/statements | Get a list of statements *MerchantsApi* | **merchantsMerchantNumberStatementsStatementIdGet** | **GET** /merchants/{merchantNumber}/statements/{statementId} | Download a statement *MerchantsApi* | **merchantsMerchantNumberTransactionsGet** | **GET** /merchants/{merchantNumber}/transactions | Get a list of batches and transactions *SubscriptionsApi* | **subscriptionsGet** | **GET** /subscriptions | Return a list of subscriptions *SubscriptionsApi* | **subscriptionsPost** | **POST** /subscriptions | Create a subscription *SubscriptionsApi* | **subscriptionsSampleLeadCreatedGet** | **GET** /subscriptions/sample/lead.created | Data sample for the \\&quot;lead.created\\&quot; event *SubscriptionsApi* | **subscriptionsSampleLeadDeletedGet** | **GET** /subscriptions/sample/lead.deleted | Data sample for the \\&quot;lead.deleted\\&quot; event *SubscriptionsApi* | **subscriptionsSampleLeadDocumentUploadedGet** | **GET** /subscriptions/sample/lead.document.uploaded | Data sample for the \\&quot;lead.document.uploaded\\&quot; event *SubscriptionsApi* | **subscriptionsSampleLeadEmailReceivedGet** | **GET** /subscriptions/sample/lead.email.received | Data sample for the \\&quot;lead.email.received\\&quot; event *SubscriptionsApi* | **subscriptionsSampleLeadNoteAddedGet** | **GET** /subscriptions/sample/lead.note.added | Data sample for the \\&quot;lead.note.added\\&quot; event *SubscriptionsApi* | **subscriptionsSampleLeadRestoredGet** | **GET** /subscriptions/sample/lead.restored | Data sample for the \\&quot;lead.restored\\&quot; event *SubscriptionsApi* | **subscriptionsSampleLeadStatusUpdatedGet** | **GET** /subscriptions/sample/lead.status.updated | Data sample for the \\&quot;lead.status.updated\\&quot; event *SubscriptionsApi* | **subscriptionsSampleLeadUpdatedGet** | **GET** /subscriptions/sample/lead.updated | Data sample for the \\&quot;lead.updated\\&quot; event *SubscriptionsApi* | **subscriptionsSubscriptionIdDelete** | **DELETE** /subscriptions/{subscriptionId} | Delete a subscription *SubscriptionsApi* | **subscriptionsSubscriptionIdGet** | **GET** /subscriptions/{subscriptionId} | Return a subscription by its id *SubscriptionsApi* | **subscriptionsSubscriptionIdPatch** | **PATCH** /subscriptions/{subscriptionId} | Update a subscription # Change Log   ### 1.1.0 (2019-07-23)   #### Created:   * Added an endpoint for getting SMS templates. **Link:** [#/paths/~1leads~1sms~1templates/get](https://iriscrm.com/api/#/paths/~1leads~1sms~1templates/get)   * Added new subscriptions for \"application.created\" event **Link:** [#/paths/~1subscriptions~1sample~1application.created/get](https://iriscrm.com/api/#/paths/~1subscriptions~1sample~1application.created/get)   * Added new subscriptions for \"application.updated\" event **Link:** [#/paths/~1subscriptions~1sample~1application.updated/get](https://iriscrm.com/api/#/paths/~1subscriptions~1sample~1application.updated/get)     #### Updated:   * Added a 'sic_code' property to merchants endpoint **Link:** [#/paths/~1merchants/get](https://iriscrm.com/api/#/paths/~1merchants/get)       ### 1.0.0 (2019-07-23)   #### Created:   * Improving a change log.
 *
 * OpenAPI spec version: 1.0.0
 * Contact: support@iriscrm.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.10
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
 * LeadFieldOptions Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LeadFieldOptions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LeadField_options';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'dropdown' => '\Swagger\Client\Model\LeadFieldOptionsDropdown',
'dupecheck' => 'bool',
'contactid' => 'string',
'mask' => 'string',
'copy' => '\Swagger\Client\Model\LeadFieldOptionsCopy',
'hyperlink' => 'bool',
'sms' => 'bool',
'dialer' => 'bool',
'googlemaps' => 'object',
'zipcode_autocomplete' => '\Swagger\Client\Model\LeadFieldOptionsZipcodeAutocomplete'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'dropdown' => null,
'dupecheck' => null,
'contactid' => null,
'mask' => null,
'copy' => null,
'hyperlink' => null,
'sms' => null,
'dialer' => null,
'googlemaps' => null,
'zipcode_autocomplete' => null    ];

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
        'dropdown' => 'dropdown',
'dupecheck' => 'dupecheck',
'contactid' => 'contactid',
'mask' => 'mask',
'copy' => 'copy',
'hyperlink' => 'hyperlink',
'sms' => 'sms',
'dialer' => 'dialer',
'googlemaps' => 'googlemaps',
'zipcode_autocomplete' => 'zipcode_autocomplete'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dropdown' => 'setDropdown',
'dupecheck' => 'setDupecheck',
'contactid' => 'setContactid',
'mask' => 'setMask',
'copy' => 'setCopy',
'hyperlink' => 'setHyperlink',
'sms' => 'setSms',
'dialer' => 'setDialer',
'googlemaps' => 'setGooglemaps',
'zipcode_autocomplete' => 'setZipcodeAutocomplete'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dropdown' => 'getDropdown',
'dupecheck' => 'getDupecheck',
'contactid' => 'getContactid',
'mask' => 'getMask',
'copy' => 'getCopy',
'hyperlink' => 'getHyperlink',
'sms' => 'getSms',
'dialer' => 'getDialer',
'googlemaps' => 'getGooglemaps',
'zipcode_autocomplete' => 'getZipcodeAutocomplete'    ];

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

    const MASK_VALIDATE_SSN = 'validateSSN';
const MASK_VALIDATE_DATE = 'validateDate';
const MASK_VALIDATE_DATE2 = 'validateDate2';
const MASK_VALIDATE_ZIP5 = 'validateZip5';
const MASK_VALIDATE_ZIP9 = 'validateZip9';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMaskAllowableValues()
    {
        return [
            self::MASK_VALIDATE_SSN,
self::MASK_VALIDATE_DATE,
self::MASK_VALIDATE_DATE2,
self::MASK_VALIDATE_ZIP5,
self::MASK_VALIDATE_ZIP9,        ];
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
        $this->container['dropdown'] = isset($data['dropdown']) ? $data['dropdown'] : null;
        $this->container['dupecheck'] = isset($data['dupecheck']) ? $data['dupecheck'] : null;
        $this->container['contactid'] = isset($data['contactid']) ? $data['contactid'] : null;
        $this->container['mask'] = isset($data['mask']) ? $data['mask'] : null;
        $this->container['copy'] = isset($data['copy']) ? $data['copy'] : null;
        $this->container['hyperlink'] = isset($data['hyperlink']) ? $data['hyperlink'] : null;
        $this->container['sms'] = isset($data['sms']) ? $data['sms'] : null;
        $this->container['dialer'] = isset($data['dialer']) ? $data['dialer'] : null;
        $this->container['googlemaps'] = isset($data['googlemaps']) ? $data['googlemaps'] : null;
        $this->container['zipcode_autocomplete'] = isset($data['zipcode_autocomplete']) ? $data['zipcode_autocomplete'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getMaskAllowableValues();
        if (!is_null($this->container['mask']) && !in_array($this->container['mask'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'mask', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * Gets dropdown
     *
     * @return \Swagger\Client\Model\LeadFieldOptionsDropdown
     */
    public function getDropdown()
    {
        return $this->container['dropdown'];
    }

    /**
     * Sets dropdown
     *
     * @param \Swagger\Client\Model\LeadFieldOptionsDropdown $dropdown dropdown
     *
     * @return $this
     */
    public function setDropdown($dropdown)
    {
        $this->container['dropdown'] = $dropdown;

        return $this;
    }

    /**
     * Gets dupecheck
     *
     * @return bool
     */
    public function getDupecheck()
    {
        return $this->container['dupecheck'];
    }

    /**
     * Sets dupecheck
     *
     * @param bool $dupecheck Enable dupecheck
     *
     * @return $this
     */
    public function setDupecheck($dupecheck)
    {
        $this->container['dupecheck'] = $dupecheck;

        return $this;
    }

    /**
     * Gets contactid
     *
     * @return string
     */
    public function getContactid()
    {
        return $this->container['contactid'];
    }

    /**
     * Sets contactid
     *
     * @param string $contactid Id of contact field
     *
     * @return $this
     */
    public function setContactid($contactid)
    {
        $this->container['contactid'] = $contactid;

        return $this;
    }

    /**
     * Gets mask
     *
     * @return string
     */
    public function getMask()
    {
        return $this->container['mask'];
    }

    /**
     * Sets mask
     *
     * @param string $mask Field mask
     *
     * @return $this
     */
    public function setMask($mask)
    {
        $allowedValues = $this->getMaskAllowableValues();
        if (!is_null($mask) && !in_array($mask, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'mask', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['mask'] = $mask;

        return $this;
    }

    /**
     * Gets copy
     *
     * @return \Swagger\Client\Model\LeadFieldOptionsCopy
     */
    public function getCopy()
    {
        return $this->container['copy'];
    }

    /**
     * Sets copy
     *
     * @param \Swagger\Client\Model\LeadFieldOptionsCopy $copy copy
     *
     * @return $this
     */
    public function setCopy($copy)
    {
        $this->container['copy'] = $copy;

        return $this;
    }

    /**
     * Gets hyperlink
     *
     * @return bool
     */
    public function getHyperlink()
    {
        return $this->container['hyperlink'];
    }

    /**
     * Sets hyperlink
     *
     * @param bool $hyperlink Enable hyperlink
     *
     * @return $this
     */
    public function setHyperlink($hyperlink)
    {
        $this->container['hyperlink'] = $hyperlink;

        return $this;
    }

    /**
     * Gets sms
     *
     * @return bool
     */
    public function getSms()
    {
        return $this->container['sms'];
    }

    /**
     * Sets sms
     *
     * @param bool $sms Enable SMS
     *
     * @return $this
     */
    public function setSms($sms)
    {
        $this->container['sms'] = $sms;

        return $this;
    }

    /**
     * Gets dialer
     *
     * @return bool
     */
    public function getDialer()
    {
        return $this->container['dialer'];
    }

    /**
     * Sets dialer
     *
     * @param bool $dialer Enable dialer
     *
     * @return $this
     */
    public function setDialer($dialer)
    {
        $this->container['dialer'] = $dialer;

        return $this;
    }

    /**
     * Gets googlemaps
     *
     * @return object
     */
    public function getGooglemaps()
    {
        return $this->container['googlemaps'];
    }

    /**
     * Sets googlemaps
     *
     * @param object $googlemaps Google Maps search properties
     *
     * @return $this
     */
    public function setGooglemaps($googlemaps)
    {
        $this->container['googlemaps'] = $googlemaps;

        return $this;
    }

    /**
     * Gets zipcode_autocomplete
     *
     * @return \Swagger\Client\Model\LeadFieldOptionsZipcodeAutocomplete
     */
    public function getZipcodeAutocomplete()
    {
        return $this->container['zipcode_autocomplete'];
    }

    /**
     * Sets zipcode_autocomplete
     *
     * @param \Swagger\Client\Model\LeadFieldOptionsZipcodeAutocomplete $zipcode_autocomplete zipcode_autocomplete
     *
     * @return $this
     */
    public function setZipcodeAutocomplete($zipcode_autocomplete)
    {
        $this->container['zipcode_autocomplete'] = $zipcode_autocomplete;

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

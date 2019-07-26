<?php
/**
 * LeadField
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
 * LeadField Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LeadField implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LeadField';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'tab' => 'int',
'label' => 'string',
'type' => 'string',
'length' => 'int',
'default' => 'string',
'alignment' => 'string',
'searchable' => 'int',
'special' => 'string',
'options' => '\Swagger\Client\Model\LeadFieldOptions',
'order' => 'int',
'read_only' => 'bool',
'required' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'tab' => null,
'label' => null,
'type' => null,
'length' => null,
'default' => null,
'alignment' => null,
'searchable' => null,
'special' => null,
'options' => null,
'order' => null,
'read_only' => null,
'required' => null    ];

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
'tab' => 'tab',
'label' => 'label',
'type' => 'type',
'length' => 'length',
'default' => 'default',
'alignment' => 'alignment',
'searchable' => 'searchable',
'special' => 'special',
'options' => 'options',
'order' => 'order',
'read_only' => 'readOnly',
'required' => 'required'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'tab' => 'setTab',
'label' => 'setLabel',
'type' => 'setType',
'length' => 'setLength',
'default' => 'setDefault',
'alignment' => 'setAlignment',
'searchable' => 'setSearchable',
'special' => 'setSpecial',
'options' => 'setOptions',
'order' => 'setOrder',
'read_only' => 'setReadOnly',
'required' => 'setRequired'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'tab' => 'getTab',
'label' => 'getLabel',
'type' => 'getType',
'length' => 'getLength',
'default' => 'getDefault',
'alignment' => 'getAlignment',
'searchable' => 'getSearchable',
'special' => 'getSpecial',
'options' => 'getOptions',
'order' => 'getOrder',
'read_only' => 'getReadOnly',
'required' => 'getRequired'    ];

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

    const TYPE_DATE_CREATE = 'DateCreate';
const TYPE_GOOGLE_MAPS = 'GoogleMaps';
const TYPE_J_Q_DATE = 'jQDate';
const TYPE_NUMBER = 'Number';
const TYPE_TXT = 'Txt';
const TYPE_TXT_AREA = 'TxtArea';
const TYPE_TXT_DOLLAR = 'TxtDollar';
const TYPE_TXT_SIC = 'TxtSIC';
const TYPE_TXT_PERCENT = 'TxtPercent';
const TYPE_TXT_ROUTING = 'TxtRouting';
const TYPE_TXT_SECURE = 'TxtSecure';
const TYPE_CHECKBOX = 'Checkbox';
const TYPE_SELECT = 'Select';
const TYPE_SELECT_RED = 'SelectRed';
const TYPE_LABEL = 'Label';
const TYPE_PACKAGES = 'Packages';
const TYPE_PHONE_MASK = 'PhoneMask';
const TYPE_PR_FORMATS = 'PrFormats';
const TYPE_QUICK_EMAIL = 'QuickEmail';
const ALIGNMENT_LEFT = 'left';
const ALIGNMENT_MIDDLE = 'middle';
const ALIGNMENT_RIGHT = 'right';
const ALIGNMENT_LEFT_COLUMN = 'left_column';
const ALIGNMENT_RIGHT_COLUMN = 'right_column';
const ALIGNMENT_FLOAT_LEFT_WHOLE_ROW = 'float_left_whole_row';
const ALIGNMENT_FLOAT_LEFT = 'float_left';
const ALIGNMENT_FLOAT_MIDDLE = 'float_middle';
const SEARCHABLE_0 = 0;
const SEARCHABLE_1 = 1;
const SPECIAL_MID = 'mid';
const SPECIAL_DBA = 'dba';
const SPECIAL_SALES_NUMBER = 'sales_number';
const SPECIAL_BUSADDRESS = 'busaddress';
const SPECIAL_BUSCITY = 'buscity';
const SPECIAL_BUSSTATE = 'busstate';
const SPECIAL_BUSZIPCODE = 'buszipcode';
const SPECIAL_BUSTYPE = 'bustype';
const SPECIAL_BUSPRODUCTS = 'busproducts';
const SPECIAL_BUSMARKETTYPE = 'busmarkettype';
const SPECIAL_BUSSTARTDATE = 'busstartdate';
const SPECIAL_SIC = 'sic';
const SPECIAL_TAXID = 'taxid';
const SPECIAL_PROCESSOR = 'processor';
const SPECIAL_OWNER_FNAME = 'owner_fname';
const SPECIAL_OWNER_LNAME = 'owner_lname';
const SPECIAL_OWNER_TITLE = 'owner_title';
const SPECIAL_OWNER_SSN = 'owner_ssn';
const SPECIAL_PHONE = 'phone';
const SPECIAL_CELLPHONE = 'cellphone';
const SPECIAL_EMAIL = 'email';
const SPECIAL_CONTACT = 'contact';
const SPECIAL_CONTACT_1 = 'contact_1';
const SPECIAL_CONTACT_2 = 'contact_2';
const SPECIAL_AVGTCKT = 'avgtckt';
const SPECIAL_VOLUME = 'volume';
const SPECIAL_BANK_NAME_ON_ACCOUNT = 'bank_name_on_account';
const SPECIAL_BANK_ACCOUNT_TYPE = 'bank_account_type';
const SPECIAL_BANK_ACCOUNT_OWNER_TYPE = 'bank_account_owner_type';
const SPECIAL_ABA_CODE = 'aba_code';
const SPECIAL_ACCOUNT_NUMBER = 'account_number';
const SPECIAL_BANK_NAME = 'bank_name';
const SPECIAL_BANK_CITY = 'bank_city';
const SPECIAL_BANK_STATE = 'bank_state';
const SPECIAL_BANK_ZIP = 'bank_zip';
const SPECIAL_LMS_F_SCORE = 'LMS_FScore';
const SPECIAL_LMS_REF_NUM = 'LMS_RefNum';
const SPECIAL_LR_MONTHLY_PAYMENT = 'LR_MONTHLY_PAYMENT';
const SPECIAL_LR_EQUIPMENT = 'LR_EQUIPMENT';
const SPECIAL_LR_WIRE_TRANFER = 'LR_WIRE_TRANFER';
const SPECIAL_LR_PACK_FEE = 'LR_PACK_FEE';
const SPECIAL_LR_CANCELLATION = 'LR_CANCELLATION';
const SPECIAL_LEAD_ID = 'leadID';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_DATE_CREATE,
self::TYPE_GOOGLE_MAPS,
self::TYPE_J_Q_DATE,
self::TYPE_NUMBER,
self::TYPE_TXT,
self::TYPE_TXT_AREA,
self::TYPE_TXT_DOLLAR,
self::TYPE_TXT_SIC,
self::TYPE_TXT_PERCENT,
self::TYPE_TXT_ROUTING,
self::TYPE_TXT_SECURE,
self::TYPE_CHECKBOX,
self::TYPE_SELECT,
self::TYPE_SELECT_RED,
self::TYPE_LABEL,
self::TYPE_PACKAGES,
self::TYPE_PHONE_MASK,
self::TYPE_PR_FORMATS,
self::TYPE_QUICK_EMAIL,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAlignmentAllowableValues()
    {
        return [
            self::ALIGNMENT_LEFT,
self::ALIGNMENT_MIDDLE,
self::ALIGNMENT_RIGHT,
self::ALIGNMENT_LEFT_COLUMN,
self::ALIGNMENT_RIGHT_COLUMN,
self::ALIGNMENT_FLOAT_LEFT_WHOLE_ROW,
self::ALIGNMENT_FLOAT_LEFT,
self::ALIGNMENT_FLOAT_MIDDLE,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSearchableAllowableValues()
    {
        return [
            self::SEARCHABLE_0,
self::SEARCHABLE_1,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSpecialAllowableValues()
    {
        return [
            self::SPECIAL_MID,
self::SPECIAL_DBA,
self::SPECIAL_SALES_NUMBER,
self::SPECIAL_BUSADDRESS,
self::SPECIAL_BUSCITY,
self::SPECIAL_BUSSTATE,
self::SPECIAL_BUSZIPCODE,
self::SPECIAL_BUSTYPE,
self::SPECIAL_BUSPRODUCTS,
self::SPECIAL_BUSMARKETTYPE,
self::SPECIAL_BUSSTARTDATE,
self::SPECIAL_SIC,
self::SPECIAL_TAXID,
self::SPECIAL_PROCESSOR,
self::SPECIAL_OWNER_FNAME,
self::SPECIAL_OWNER_LNAME,
self::SPECIAL_OWNER_TITLE,
self::SPECIAL_OWNER_SSN,
self::SPECIAL_PHONE,
self::SPECIAL_CELLPHONE,
self::SPECIAL_EMAIL,
self::SPECIAL_CONTACT,
self::SPECIAL_CONTACT_1,
self::SPECIAL_CONTACT_2,
self::SPECIAL_AVGTCKT,
self::SPECIAL_VOLUME,
self::SPECIAL_BANK_NAME_ON_ACCOUNT,
self::SPECIAL_BANK_ACCOUNT_TYPE,
self::SPECIAL_BANK_ACCOUNT_OWNER_TYPE,
self::SPECIAL_ABA_CODE,
self::SPECIAL_ACCOUNT_NUMBER,
self::SPECIAL_BANK_NAME,
self::SPECIAL_BANK_CITY,
self::SPECIAL_BANK_STATE,
self::SPECIAL_BANK_ZIP,
self::SPECIAL_LMS_F_SCORE,
self::SPECIAL_LMS_REF_NUM,
self::SPECIAL_LR_MONTHLY_PAYMENT,
self::SPECIAL_LR_EQUIPMENT,
self::SPECIAL_LR_WIRE_TRANFER,
self::SPECIAL_LR_PACK_FEE,
self::SPECIAL_LR_CANCELLATION,
self::SPECIAL_LEAD_ID,        ];
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
        $this->container['tab'] = isset($data['tab']) ? $data['tab'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['length'] = isset($data['length']) ? $data['length'] : null;
        $this->container['default'] = isset($data['default']) ? $data['default'] : null;
        $this->container['alignment'] = isset($data['alignment']) ? $data['alignment'] : null;
        $this->container['searchable'] = isset($data['searchable']) ? $data['searchable'] : null;
        $this->container['special'] = isset($data['special']) ? $data['special'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['read_only'] = isset($data['read_only']) ? $data['read_only'] : null;
        $this->container['required'] = isset($data['required']) ? $data['required'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['tab'] === null) {
            $invalidProperties[] = "'tab' can't be null";
        }
        if ($this->container['label'] === null) {
            $invalidProperties[] = "'label' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getAlignmentAllowableValues();
        if (!is_null($this->container['alignment']) && !in_array($this->container['alignment'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'alignment', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSearchableAllowableValues();
        if (!is_null($this->container['searchable']) && !in_array($this->container['searchable'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'searchable', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSpecialAllowableValues();
        if (!is_null($this->container['special']) && !in_array($this->container['special'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'special', must be one of '%s'",
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
     * @param int $id Field Id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets tab
     *
     * @return int
     */
    public function getTab()
    {
        return $this->container['tab'];
    }

    /**
     * Sets tab
     *
     * @param int $tab Field tab Id
     *
     * @return $this
     */
    public function setTab($tab)
    {
        $this->container['tab'] = $tab;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string $label Field label
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Field type
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets length
     *
     * @return int
     */
    public function getLength()
    {
        return $this->container['length'];
    }

    /**
     * Sets length
     *
     * @param int $length Field size
     *
     * @return $this
     */
    public function setLength($length)
    {
        $this->container['length'] = $length;

        return $this;
    }

    /**
     * Gets default
     *
     * @return string
     */
    public function getDefault()
    {
        return $this->container['default'];
    }

    /**
     * Sets default
     *
     * @param string $default Field default value
     *
     * @return $this
     */
    public function setDefault($default)
    {
        $this->container['default'] = $default;

        return $this;
    }

    /**
     * Gets alignment
     *
     * @return string
     */
    public function getAlignment()
    {
        return $this->container['alignment'];
    }

    /**
     * Sets alignment
     *
     * @param string $alignment Field alignment
     *
     * @return $this
     */
    public function setAlignment($alignment)
    {
        $allowedValues = $this->getAlignmentAllowableValues();
        if (!is_null($alignment) && !in_array($alignment, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'alignment', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['alignment'] = $alignment;

        return $this;
    }

    /**
     * Gets searchable
     *
     * @return int
     */
    public function getSearchable()
    {
        return $this->container['searchable'];
    }

    /**
     * Sets searchable
     *
     * @param int $searchable Searchable field
     *
     * @return $this
     */
    public function setSearchable($searchable)
    {
        $allowedValues = $this->getSearchableAllowableValues();
        if (!is_null($searchable) && !in_array($searchable, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'searchable', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['searchable'] = $searchable;

        return $this;
    }

    /**
     * Gets special
     *
     * @return string
     */
    public function getSpecial()
    {
        return $this->container['special'];
    }

    /**
     * Sets special
     *
     * @param string $special Field special value
     *
     * @return $this
     */
    public function setSpecial($special)
    {
        $allowedValues = $this->getSpecialAllowableValues();
        if (!is_null($special) && !in_array($special, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'special', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['special'] = $special;

        return $this;
    }

    /**
     * Gets options
     *
     * @return \Swagger\Client\Model\LeadFieldOptions
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param \Swagger\Client\Model\LeadFieldOptions $options options
     *
     * @return $this
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets order
     *
     * @return int
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param int $order order
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets read_only
     *
     * @return bool
     */
    public function getReadOnly()
    {
        return $this->container['read_only'];
    }

    /**
     * Sets read_only
     *
     * @param bool $read_only Whether the field is read only
     *
     * @return $this
     */
    public function setReadOnly($read_only)
    {
        $this->container['read_only'] = $read_only;

        return $this;
    }

    /**
     * Gets required
     *
     * @return bool
     */
    public function getRequired()
    {
        return $this->container['required'];
    }

    /**
     * Sets required
     *
     * @param bool $required Whether the field is required
     *
     * @return $this
     */
    public function setRequired($required)
    {
        $this->container['required'] = $required;

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

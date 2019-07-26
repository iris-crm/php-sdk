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
*LeadsApi* | [**leadsSmsTemplatesGet**](docs/Api/LeadsApi.md#leadssmstemplatesget) | **GET** /leads/sms/templates | Get list of sms templates
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
*SubscriptionsApi* | [**subscriptionsSampleApiUpdatedGet**](docs/Api/SubscriptionsApi.md#subscriptionssampleapiupdatedget) | **GET** /subscriptions/sample/api.updated | Data sample for the \&quot;api.updated\&quot; event
*SubscriptionsApi* | [**subscriptionsSampleApplicationCreatedGet**](docs/Api/SubscriptionsApi.md#subscriptionssampleapplicationcreatedget) | **GET** /subscriptions/sample/application.created | Data sample for the \&quot;application.created\&quot; event
*SubscriptionsApi* | [**subscriptionsSampleApplicationUpdatedGet**](docs/Api/SubscriptionsApi.md#subscriptionssampleapplicationupdatedget) | **GET** /subscriptions/sample/application.updated | Data sample for the \&quot;application.updated\&quot; event
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


## Documentation For Authorization


## Token

- **Type**: API key
- **API key parameter name**: X-API-KEY
- **Location**: HTTP header


## Author

support@iriscrm.com


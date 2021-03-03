# AllOfTicketResolvedDataTicketsItems

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Ticket id | [optional] 
**subject** | **string** | Ticket subject | [optional] 
**description** | **string** | Ticket description | [optional] 
**status** | [**\Swagger\Client\Model\TicketStatus**](TicketStatus.md) |  | [optional] 
**type** | [**\Swagger\Client\Model\TicketType**](TicketType.md) |  | [optional] 
**group** | [**\Swagger\Client\Model\TicketGroup**](TicketGroup.md) |  | [optional] 
**priority** | [**\Swagger\Client\Model\TicketPriority**](TicketPriority.md) |  | [optional] 
**lead_id** | **int** | Assigned Lead ID | [optional] 
**mid** | **int** | Assigned Merchant ID | [optional] 
**merchant_visible** | **bool** | Indicates if the ticket is visible to Merchant users | [optional] 
**ticket_url** | **string** |  | [optional] 
**assigned_users** | [**\Swagger\Client\Model\UserListStructure**](UserListStructure.md) |  | [optional] 
**files** | [**\Swagger\Client\Model\File[]**](File.md) |  | [optional] 
**preview_images** | [**\Swagger\Client\Model\File[]**](File.md) |  | [optional] 
**due_date** | [**\DateTime**](\DateTime.md) | Ticket due date | [optional] 
**due** | **string** | Ticket SLA | [optional] 
**only_business_days** | **bool** | Calculate only business days | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


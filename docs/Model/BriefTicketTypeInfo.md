# BriefTicketTypeInfo

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Ticket type id | [optional] 
**name** | **string** | Ticket type name | [optional] 
**description** | **string** | Ticket type description | [optional] 
**days_to_resolve** | **int** | Days to Resolve | [optional] 
**only_business_days** | **bool** | Calculate only business days | [optional] 
**status** | [**\Swagger\Client\Model\TicketStatus**](TicketStatus.md) |  | [optional] 
**priority** | [**\Swagger\Client\Model\TicketPriority**](TicketPriority.md) |  | [optional] 
**created** | [**\DateTime**](\DateTime.md) | Ticket type created date | [optional] 
**created_by** | **int** | Ticket type creator id | [optional] 
**modified** | [**\DateTime**](\DateTime.md) | Ticket type modified date | [optional] 
**modified_by** | **int** | Id of user who made last change | [optional] 
**order** | **int** | Ticket type order | [optional] 
**permissions** | **int[]** |  | [optional] 
**due_date** | [**\DateTime**](\DateTime.md) | Ticket due date | [optional] 
**assignees** | [**\Swagger\Client\Model\BriefTicketTypeInfoAssignees**](BriefTicketTypeInfoAssignees.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


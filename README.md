[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/Reminders/functions?utm_source=RapidAPIGitHub_RemindersFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# Reminders Package
Schedule and manage reminders. Notify your customers about their appointments through SMS, emails or webhooks.
* Domain: [Reminders](http://reminders.company)
* Credentials: apiKey

## How to get credentials: 
0. Browse to [Reminders](https://www.reminders.company)
1. Register or log in 
2. Browse to [Account page](https://www.reminders.company/account) to get your apiKey



## Custom datatypes: 
 |Datatype|Description|Example
 |--------|-----------|----------
 |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
 |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
 |List|Simple array|```["123", "sample"]``` 
 |Select|String with predefined values|```sample```
 |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ```
 
You can use our service as url: 
   ```
   https://webhooks.rapidapi.io/api/message/Reminders/webhookEvent/{projectName}/{projectKey} * see credentials description above
   ```
 
 ## Webhook credentials
  Please use SDK to test this feature.
  
  0. Go to [RapidAPI](http://rapidapi.com)
  1. Log in or create an account
  2. Go to [My apps](https://dashboard.rapidapi.com/projects)
  3. Add new project with projectName to get your project Key
  
  | Field      | Type       | Description
  |------------|------------|----------
  | projectName     | credentials| Your RapidAPI project name
  | projectKey | credentials     | Your RapidAPI project key

## Reminders.listReminders
Retrieves all of your reminders.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Your API key

## Reminders.getSingleReminder
This endpoint retrieves a specific reminder.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Your API key
| reminderId| String     | The ID of the Reminder to retrieve

## Reminders.createEmailReminder
This endpoint allows you to create a new email Reminder. Timezone format follows the naming convention of moment.timezone.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| Your API key
| due         | DatePicker | The date the reminder is due for.
| timezone    | String     | Overrides accounts default timezone for this specific reminder. Timezone format follows the naming convention of [moment.timezone](https://momentjs.com/timezone/).
| force       | Select     | Skips validation of due date to check if it happened in the past.
| emailTo     | String     | To who you're sending the email
| emailFrom     | String     | Who is sending it
| emailSubject| String     | Email subject
| emailBody   | String     | Email body

## Reminders.createSmsReminder
This endpoint allows you to create a new sms Reminder. Timezone format follows the naming convention of moment.timezone.

| Field   | Type       | Description
|---------|------------|----------
| apiKey  | credentials| Your API key
| due     | DatePicker | The date the reminder is due for.
| timezone| String     | Overrides accounts default timezone for this specific reminder. Timezone format follows the naming convention of [moment.timezone](https://momentjs.com/timezone/)
| force   | Select     | Skips validation of due date to check if it happened in the past.
| smsTo   | String     | To who you're sending the sms, include + and area code
| smsBody | String     | Sms body

## Reminders.createWebhookReminder
This endpoint allows you to create a new webhook Reminder. 
You can use our service as webhook: 
   ```
   https://webhooks.rapidapi.io/api/message/Reminders/webhookEvent/{projectName}/{projectKey} * see credentials description above
   ```

| Field   | Type       | Description
|---------|------------|----------
| apiKey  | credentials| Your API key
| due     | DatePicker | The date the reminder is due for.
| timezone| String     | Overrides accounts default timezone for this specific reminder. Timezone format follows the naming convention of [moment.timezone](https://momentjs.com/timezone/)
| force   | Select     | Skips validation of due date to check if it happened in the past.
| webhook | String     | A url that we will make a post call with the reminders body when due

## Reminders.updateReminder
This endpoint updates a specific reminder.
You can use our service as webhook: 
   ```
   https://webhooks.rapidapi.io/api/message/Reminders/webhookEvent/{projectName}/{projectKey} * see credentials description above
   ```

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| Your API key
| reminderId  | String     | The ID of the Reminder
| emailTo     | String     | To who you're sending the email
| emailSubject| String     | Email subject
| emailBody   | String     | Email body
| smsTo       | String     | To who you're sending the sms, include + and area code
| smsBody     | String     | Sms body
| webhook     | String     | A url that we will make a post call with the reminders body when due

## Reminders.deleteReminder
This endpoint deletes a specific reminder.

| Field     | Type       | Description
|-----------|------------|----------
| apiKey    | credentials| Your API key
| reminderId| String     | The ID of the Reminder

## Reminders.getAccountUsage
This endpoint retrieves your current plan and usage of your account for the current period of time. A period of time starts on the first of each month and finishes the next first of the month.

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Your API key


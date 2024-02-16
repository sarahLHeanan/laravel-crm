# Tritility Tech Test

For this test, we'd like you to create a basic mini CRM using Laravel. Please complete this project as you would any other and once completed, mark it as ready to review and request a review from Richard. 

## Authentication
We need the ability to login, so we'd like the CRM to have basic authentication. Use a database seeder to create the user we'd need to login as, with an email of "admin@admin.com" and a password of "password". We don't want the ability to be able to register.

## App Content
We'd like two menu items, one for Companies and one for Employees. We'd also like CRUD (Create / Read / Update / Delete) screens for both of these, with employees sitting under the company. We'd also like resource controllers to be used for these. 

## Database
We'd like the companies table to have the following headers:
* name (required)
* email
* logo
* website

We'd like the employees table to have the following headers:
* first_name (required)
* last_name (required)
* company_id
* email
* phone

We'd like you to use migrations to create these schemas.

## Additional Requirements
The company logo needs to be at least 150px by 150px. This can either be stored in public or s3.
The CRUD screens need to have validation. 
The CRUD screens need to use laravel pagination. 
We don't expect amazing design here, but we do expect the app to look clean. 
Any tests written are a plus.

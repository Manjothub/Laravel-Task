Build a Database:

Create a new database named "School_Db".
Create Tables:

Create a table named "Student Info" with columns such as id, name, email, age, and populate it with data.
Create a table named "Student Login Info" with columns such as id, student_id, username, password, and populate it with data.
Print Records:

Use Laravel's Schema Builder to dynamically retrieve table names and column names.
Use the retrieved information to fetch and display records from the tables without using their names directly in the code.
Here's how you can implement this in Laravel:

Database Migration for Tables:

Create migrations for both tables.
Seeder for Data Population:

Create seeders to populate the tables with sample data.
Controller and View for Display:

Create a controller to handle the logic for fetching and displaying records.
Create a view to display the records in a tabular format.
Routes:

Define routes to access the controller methods.

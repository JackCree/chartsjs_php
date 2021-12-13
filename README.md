# Data Visualisation with Chartjs and PHP
Create a form with dynamic graph when a form is fulfilled thanks to a MySQL database.

## Create the Basic
Into documents with php extension, create : 
- the index for the form and,
- the data for ajax request and injections,

## Create the database
Generate a database of 2 columns with id_survey (auto-increment), language (varchar 255).

## Add the connection 
Connect to the database with PDO function :
```
$connect = new PDO('localhost=...,database=','username','password');
```
## Create the script for chartjs
Into a script, define how the data needs to appear with the options

## Create the logic for the post actions
Into the data.php, add the methods for adding the answers of the form into the mysql database. And fetch all the data into an array (Json format) for the datavisualisation.

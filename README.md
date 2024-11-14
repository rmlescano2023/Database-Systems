# Database-Systems

### This is a repository for Database Systems (CMSC 127) course.

<br>

## LAB 1

Using DIA or any other free software of your choice to create an ERD, draw an ER
diagram which indicates the entities and their attributes (if noted). Identify and label
significant relationships between pairs of entities.

Create a Crow’s Foot ERD for each of the following descriptions. (Note that the
word "many" is meant to mean "more than one" in a database modelling environment.).

*Note. Include all your ERDs in one file.* <br>

**Data Descriptions:**
1. Each of the MegaCo Corporation’s divisions is composed of many departments. Each of the departments has many employees assigned to it, but each employee works for only one department. Each department is managed by one employee, and each of these managers can manage only one department at a time.
2. During some period of time, a customer can rent many videotapes from the BigVid store. Each of the BigVid’s videotapes can be rented to many customers during that period of time.
3. An airline can be assigned to fly many flights, but each flight is flown by only one airline.
4. The KwikTite Corporation operates many factories. Each factory is located in a region. Each region can be "home" to many of KwikTite’s factories. Each factory employs many employees, but each of these employees is employed by only one factory.
5. An employee may have earned many degrees, and each degree may have been earned by many employees.

<br>

## LAB 2

Using DIA or any other free software of your choice to create an ERD, draw an ER diagram which indicates the entities and their attributes (if noted). Identify and label significant relationships between pairs of entities.

Read the descriptions carefully and create a Crow’s Foot ERD for each of the following descriptions. (Note that the word "many" is meant to mean "more than one" in a database
modelling environment.).

*Note. Include all your ERDs in one file.* <br>

**Data Descriptions:**
1. Hospital Database
A local specialized hospital in has decided to digitize its information. Assume you are hired as the DBA and are provided with the following information: 
* Every patient (represented by name, phone numbers, and birth-date) is treated in a single hospital ward (hospital section), each ward with certain specific specialty, and located on ncertain floor of the hospital.
* Several healthcare assistants/nurses may attend to patients at each ward; where each assistant is associated with only one ward and is characterized by his/her education level.
* Several doctors work at the hospital, each characterized by his/her name, specialty and phone number.
* The system must record that each patient in the hospital is assigned to one or more doctors, while each doctor may prescribe certain medicines to each patient. Also, the medicine prescribed by each doctor to each patient has a name and shall follow specific instruction (given by the doctor) about the dosage and the frequency per day.
* The payment policy at the hospital is such that every patient can pay his/her hospital bills in maximum of 3 installments, where every installment has an installment # showing if it is the 1st, 2nd or 3rd installment for the payment, as well as the date and the amount of the payment.

**Create an ER diagram for the hospital database, indicating its elements. For each entity set, define all the attributes specified above, and introduce 2 more new “real life” attributes, including a primary key.** <br>

2. Drug Store Database
Suppose you are given the following information about a database for a chain of drug stores:
* A drugstore sells drugs prescribed by doctors to patients,
* Each drugstore in the chain is identified by a store name, address, and a phone number,
* Patients are identified by a patient id, and their names, addresses, and ages must be recorded,
* Doctors are identified by a doctor id. Each doctor’s name, specialty, and years of experience must be recorded,
* Each drug is made by a pharmaceutical company and sold to the drugstore. The drug’s trade name identifies the drug uniquely from among the products of that company. For each drug, the trade name and formula must be recorded
* Each pharmaceutical company is identified by name and has a phone number,
* Every patient has a primary doctor,
* Every doctor has at least one patient,
* Each drugstore sells several drugs and has a price for each. A drug could be sold at several drugstores, and the price could vary from one drugstore to another.
* Doctors prescribe drugs for patients. A doctor could prescribe one or more drugs for several patients, and a patient could obtain prescriptions from several doctors,
* Each prescription has a date and a quantity associated with it. You can assume that if a doctor prescribes the same drug for the same patient more than once, only the last such prescription needs to be stored,
* Pharmaceutical companies have long-term contracts with drugstores. A pharmaceutical company can contract with several drugstores, and a drugstore can contract with several pharmaceutical companies.
* For each contract, you have to store a start date, an end date, and the text of the contract,
* Drugstores appoint a supervisor for each contract. There must always be a supervisor for each contract, but the contract supervisor can change over the lifetime of the contract,
* If a pharmaceutical company is deleted, you need not keep track of its products any longer.

<br>

## LAB 3

### Lab 3.1

Before we start this lab, download and install XAMPP at https://www.apachefriends.org/download.html in your computer.

Save the University.sql file inside the XAMPP folder located in your local computer C Drive. (Note: we need to save all our sql files inside the XAMMP folder later)

Follow the instructions below to create a database and to use the sql file (University.sql) provided.

1. OPEN XAMMP in your computer.
2. START Apache and MySQL.
3. Open the SHELL.
4. In the Shell or XAMMP Command Prompt, type mysql -u root -p and press ENTER. You will be asked for a password, since we didn’t set any password, just PRESS ENTER again. The command prompt should look like this.
5. Type CREATE DATABASE your_preferred_database name.
6. After creating your database, CLOSE the SHELL.
7. OPEN the shell again just like how you did it in STEP 3.
8. In the shell, type mysql -u root -p your_preferred_database_name < existing_database.sql and press ENTER.
9. Login again just like how you did it in STEP 4. When you successfully logged in, a welcome message will be displayed to you.
10. Type USE your_preferred_database_name and press ENTER.
11. If you want to show the tables inside your database, type SHOW TABLES;

An SQL CHEAT SHEET was uploaded in the LMS, use the CHEAT SHEET to explore more commands in SQL where you will be able to see the contents of your database and answer the questions for this laboratory exercise.

You will have a write up for this laboratory exercise.

If you are done using XAMMP, don’t forget to STOP your APACHE and MySQL.

**Writeup Structure (each answer is worth 10 points, use questions below as answer headers):**
1. What entities/ tables are in your database?
2. What columns does each table have and what data types do the columns hold?
3. Explain what primary and secondary keys are and list which primary and secondary keys exist in your database.
4. Draw an Entity Relationship Diagram (ERD) of your database. You must use either Microsoft Visio or any of the Free Open Source Software (FOSS) alternatives such as Dia. Include a screenshot of your drawing in the final write up file.
5. Give an example of each of the following from your database and describe in detail why your example satisfies the definition:
* One-to-one relationship
* One-to-many relationship
* Many-to-many relationship
* Recursive relationship 

### Lab 3.2
1. Open a Connection to MySQL. Type the code below in your text editor and save as DBConnector.php in C:\xampp\htdocs\sample directory (create the folder sample inside C:\xampp\htdocs\). Before we can access data in the MySQL database, we need to be able to connect to the server.
2. Make sure that you START Apache and MySQL (in XAMPP), then access the DBConnector.php file in a web browser using the url localhost/sample/DBConnector.php. A message Connect Successfully should be displayed in your browser.
3. Type the code below in your text editor and save as display.php in C:\xampp\htdocs\sample directory (it’s the same directory where you saved your DBConnector.php).
4. Access the display.php file in a browser using the url localhost/sample/display.php
display.php displays all the data stored in table employee
5. In your text editor again, type the code below save as addRow.php in C:\xampp\htdocs\sample directory (it’s the same directory where you saved your DBConnector.php and display.php).
6. Access the addRow.php file in a browser using the url localhost/sample/addRow.php
addRow.php will add a row of data in the employee table and show he ID of that new row along with its other attributes.

Take a screenshot of the entire screen of your laptop/desktop (should include the Taskbar of your desktop – do not crop your screenshot) for every output in your browser of DBConnector.php, display.php, and addRow.php.

Put those three (3) screenshots in a document file that you will submit as an output for this Laboratory exercise.

### Lab 3.3
1. Open a Connection to MySQL. Type the code below in your text editor and save as index.php in C:\xampp\htdocs\sample directory (it is the same folder sample inside C:\xampp\htdocs\ that we used from Lab 3.2).
This time, we created a php file with HTML elements. The php code is within the HTML code. The index.php will use the department.php file (you will create this in Step 2).
2. Type the code below in your text editor and save as department.php in C:\xampp\htdocs\sample directory.
3. Access the index.php file in a browser using the url localhost/sample/index.php
Make sure that you START Apache and MySQL (in XAMPP) so that you can access the index.php in your browser.

**TASK:**
Modify/add some code to the index.php file and create another separate php file (like the department.php) to retrieve the list of employees per department:
• List of Employees per department
• (id, employee name, age, salary, hire date)

Take a screenshot of the entire screen of your laptop/desktop (should include the Taskbar of your desktop – do not crop your screenshot) after displaying the output of the modified index.php in your browser.

Put this screenshot in a document file that you will submit as an output for this Laboratory exercise.

Also, apart from the output of index.php, include in your document file the process (with screenshots) of how you were able to get the output and explain the process.

<br>

## LAB 4


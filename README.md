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


<br>

## LAB 4


CREATE TABLE Employees(
ID INT PRIMARY KEY AUTO_INCREMENT,
firstName CHAR(20),
middleName CHAR(20),
lastName CHAR(20),
age INT,
experience CHAR(10),
emailAddress VARCHAR(50),
gender CHAR(10),
nationality VARCHAR(10),
designation VARCHAR(50),
lastQualification VARCHAR(25),
resumePath VARCHAR(10),
joinDate DATE,
coverLetter VARCHAR(100)
)
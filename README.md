# Quiz Web Application
Web application developed using HTML5, CSS3, PHP, and SQL. Additional technologies used: PHPMyAdmin, MySQL, Apache HTTP Server, Adobe XD, Bootstrap framework. 

This application was developed as part of a group project.

Initially, Google Drive was used to share files between group members and this project was worked on from February 2019 through to April 2019. The project is available on GitHub as of 27/04/2019.

ip2.sql must be imported into an appropriate RDBMS.

Start with page: IP2HomePage.php to register/login

Some pre-existing accounts exist and are available for use, this is addressed below.

To access admin functionality initially, use:
Username: "Admin"
Password: "Admin"

To access regular user functionality initially, can use:
Username: "User"
Password: "User"
OR
Username: "Sample"
Password: "Sample"

This can be seen in the 'ip2' database, 'quizuser' table.

5 categories exist at start: Science, Geography, History, Film/TV, Music
Each category has a pool of 20 questions and each quiz will pick a random 10 questions from the respective pool of 20 questions

There is an issue with users taking a quiz for the first time whereby an error will occur upon receiving your score at the end. This error
does not happen any other time apart from when a user takes a quiz for the very first time.

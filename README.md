**To run this app:
import the table located in the database table.sql file into your database.
In the route folder of the project, go to command prompt and type:
php spark serve
This will start a server on localhost:8080.
Go to localhost:8080 and you should be able to view the application.


Developed by Tawanda Mutasa
tawacodes@gmail.com
+26777714159

ABOUT THE APP
This is a polling app. 
It allows users to view the three decades of this century, then vote for one.
After voting, users are taken to a thank you for voting page, where they can choose to view the election results.
On the results page, a user can see:
The total number of votes cast
How many votes each decade received.
The percentage of votes each decade has out of the total.

FILES RELEVANT TO THIS APP
App\config\routes.php
App\Controllers\Poll.php
App\Models\PollModel.php
App\views\index.php
App\views\electionresults.php
App\views\votecast.php
App\views\footer.php
database table.sql
.env

NOTES ON FILES
The sql file is included because codeigniter's migration functionalities were not used.
All the settings needed to run this app are already uncommented in .env.

TECHNOLOGIES AND TOOLS USED
CodeIgniter: 4.0.0
PHP: 7.3.21
MySQL: 5.7.31
Wamp: 3.2.3


CONTACT
Email: tawacodes@gmail.com
Phone: +26777714159
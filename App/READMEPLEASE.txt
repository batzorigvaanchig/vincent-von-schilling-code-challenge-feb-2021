I have made a video of the website and desktop app in action in case installation is unsuccessful. That is located in the Documentation folder, not here in the App folder.

Database:
Currently, I host the SQL database locally, and as such you will unfortunately have to host your own. Luckily I have included a .sql file in the same directory as this readme. This file can be imported into PHP MyAdmin in order for you to have a database with the same setup that you are able to modify. To enter your own database details including password, username, etc. go to App\Website\php\classes\dbh.class.php and modify the fields there to match your own details.
Running the Website:
The website requires that it is run on a webserver. For this you can use a technology like WAMP or XAMP to host it locally. To do this, (in this example for WAMP) copy the files located here in the Website folder to the root folder of your webserver.
Running the Desktop App:
This will likely be the most difficult thing you will ever have the displeasure of doing in your life. Go to App\Desktop and double-click HomeschoolApp.exe. (It may be flagged as a virus by some software because it has only ever been run on a single computer, mine)


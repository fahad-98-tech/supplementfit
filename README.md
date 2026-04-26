SUPPLEMENTFIT WEB APPLICATION - README



1. OVERVIEW

SupplementFit is a web-based application designed for managing and
exploring supplement and fitness-related information. This project is
intended to run on a local server using XAMPP.



2. SYSTEM REQUIREMENTS

Before running the project, make sure your computer has:

-   XAMPP (Apache and MySQL)
-   A web browser (Google Chrome, Microsoft Edge, or Firefox)
-   Basic file extraction software (WinRAR / 7-Zip)



3. INSTALLATION GUIDE

Step 1: Install XAMPP - Go to:
https://www.apachefriends.org/index.html - Download XAMPP for your
operating system - Install it by following the setup instructions

Step 2: Start XAMPP Services - Open XAMPP Control Panel - Click “Start”
next to: • Apache • MySQL - Make sure both are running (green status)

Step 3: Extract Project Files - Locate the file: supplementfit.zip -
Right-click and choose “Extract Here” or “Extract to supplementfit” - A
folder named “supplementfit” will be created

Step 4: Move Project to htdocs - Go to your XAMPP installation folder:
Example: C:
- Copy the “supplementfit” folder - Paste it inside the “htdocs” folder

Final structure: C:

Step 5: Set Up Database - Open your browser - Go to:
http://localhost/phpmyadmin - Click “New” - Create a database (example:
supplementfit_db) - Select the created database - Click “Import” -
Choose the .sql file from the project folder - Click “Go” to import

Step 6: Configure Database Connection - Open the project folder in
htdocs - Find the configuration file (example: config.php) - Edit
database settings:

host = localhost username = root password = (leave empty) database =
supplementfit_db

Step 7: Run the Project - Open your browser - Enter the following URL:
http://localhost/supplementfit - The project should now open



4. TROUBLESHOOTING

If the project does not run:

-   Make sure Apache and MySQL are running
-   Check if the folder is inside htdocs
-   Verify database name and import
-   Check config file settings
-   Ensure no port conflicts (Apache may use another port)



5. NOTES

-   Always start XAMPP before running the project
-   Do not rename the main project folder unless necessary
-   Keep all files inside the project directory







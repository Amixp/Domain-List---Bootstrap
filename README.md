Domain List - Bootstrap
============

Domain List is based off [BlueVM's](http://uptime.bluevm.com/) Uptime Checker script, [original download and information](http://www.lowendtalk.com/discussion/comment/169690#Comment_169690).

It uses Bootstrap for theming.

Installation
============

1. Create a database with a user.
2. Import the servers.sql file in in the /sql/ folder, to populate the database.
3. Configure /includes/config.php with the database and user information.
4. Insert an entry into the database.
  * Domain - The Domain You Want to Add
  * Registrar - The Registrar your Domain is Registered At
  * exdate - Expiration Date for Registration
  * Host - Where's it hosted?

Requirements
============

**Master Server**:
* PHP5 + PHP5_CURL
* Web Server (lighttpd, apache2, nginx, etc.)
* mySQL server unless you choose to use a remote mySQL server.

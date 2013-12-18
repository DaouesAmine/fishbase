FishBase REST API
=================

This project provides a RESTful frontend to the FishBase database.

Requirements
---------------
* PHP 5.2.x+
* Apache HTTP Server (w/ mod_rewrite)
* MySQL

Installation
---------------
Assuming you have successfully installed the database and it is named 'fbapp'...

* Open `/conf/fbapp-conf.php` and edit lines 13 & 14, substituting the correct login credentials for the `fbapp` database instance.
* Point your browser to `/index.php`. Clicking on the displayed links should result in a response from the API displaying DB data.
* Problems? Open an issue.

Directory Structure
-------------------

Not the most intuitive, but here is the current directory layout and what each part means:

```
|-api
|-- .htaccess : Auto-route all requests using mod_rewrite to index.php
|-- index.php : Entry-point to all API calls. 

```
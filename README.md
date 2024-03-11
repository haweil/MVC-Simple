Simple MVC Project
This is a simple MVC (Model-View-Controller) project implemented in PHP. It provides a basic structure for building web applications using the MVC pattern.

Features
MVC Architecture: Follows the MVC pattern for organizing code.
Database Connectivity: Uses PDO for connecting to a MySQL database.
Routing: Routes requests to the appropriate controller based on the URL.
Project Structure
index.php: Entry point of the application.
config.php: Contains configuration settings for the application.
app/
controllers/: Contains controller classes.
models/: Contains model classes for interacting with the database.
views/: Contains view files for rendering HTML output.
core/
Router.php: Handles routing of requests.
Database.php: Manages database connections.
Controller.php: Base controller class.
Model.php: Base model class.
public/
.htaccess: Configures Apache to redirect all requests to index.php (for friendly URLs).
vendor/: Contains Composer dependencies.
Installation
Clone the repository: git clone https://github.com/haweil/MVC-Simple.git
Install dependencies: composer install
Configure your database settings in config.php
Set up your web server to point to the public directory
Usage
Open your web browser and navigate to the project URL.
The router will handle incoming requests and route them to the appropriate controller.

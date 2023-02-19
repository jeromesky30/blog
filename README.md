This Blogpost satisfy all of this requirements:

The blog application
should allow users to create, read, update, and delete blog posts. Specifically, 
- Admin can do all the  actions.
- User can only view all blogpost from descending order and create a new blog with title and content.
- The email and password of the admin was here:
Email: admin@gmail.com
Password: admin@gmail.com
 



This application has the following functionalities:
A homepage that lists all the blog posts, with the most recent post displayed first.
- Admin and user can view all post with the most recent post displayed first.
A page that displays a single blog post, along with its title and content.
- When the user or admin click any link of the post or title, it display in a single post page like displaypost/1
A page that allows users to create a new blog post. This page should have a form
that allows the user to enter the title and content of the post.
- User can click the create blog that navigate to a page for creating blog.
A page that allows users to edit an existing blog post. This page should have a form
that allows the user to update the title and content of the post.
- When the adim navigate to edit buttom it will go to edit page that can edit the title and content and click rhe update and go to the homepage with alert the " new post has been added
A page that allows users to delete an existing blog post.
- When the admin wants to delete some blog it will show a page that alert if the admin is to confirm if he really want to delete.


here are the step-by-step instructions on how to run a Laravel blog project from a GitHub repository:

Clone the repository: Start by cloning the repository by running the following command in your terminal:


https://github.com/jeromesky30/blog.git

Install dependencies: Once you've cloned the repository, navigate to the project directory and install the project dependencies by running the following command:


composer install
This command will install all the required PHP dependencies for the project.

Set up environment variables: Next, you need to set up the environment variables for the project. Laravel uses a file called .env to store environment variables. The repository should include a file called .env.example, which you can copy to create your own .env file.


cp .env.example .env
After creating your own .env file, you need to set up your database credentials and other configuration variables.

Generate application key: Laravel uses an application key to encrypt user sessions and other sensitive data. You can generate a new application key by running the following command:


Copy code:
php artisan key:generate
Migrate the database: Next, you need to migrate the database tables for the project. Laravel uses database migrations to manage database schema changes. To migrate the database, run the following command:

Copy code:
php artisan migrate
This command will create the necessary database tables for the project.

Seed the database (Optional): If the project includes seed data, you can populate the database by running the following command:

Copy code:
php artisan db:seed
This command will insert seed data into the database tables.

Serve the application: Finally, you can serve the application by running the following command:

Copy code:
php artisan serve
This command will start a local development server and provide you with a URL to access the application in your browser.

That's it! You should now be able to access the Laravel blog project and start exploring its features.


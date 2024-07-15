# CodeIgniter 4 Framework

## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](https://codeigniter.com).

This repository holds the distributable version of the framework.
It has been built from the
[development repository](https://github.com/codeigniter4/CodeIgniter4).

More information about the plans for version 4 can be found in [CodeIgniter 4](https://forum.codeigniter.com/forumdisplay.php?fid=28) on the forums.

You can read the [user guide](https://codeigniter.com/user_guide/)
corresponding to the latest version of the framework.

## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!

## Repository Management

We use GitHub issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script.
Problems with it can be raised on our forum, or as issues in the main repository.

## Contributing

We welcome contributions from the community.

Please read the [*Contributing to CodeIgniter*](https://github.com/codeigniter4/CodeIgniter4/blob/develop/CONTRIBUTING.md) section in the development repository.

## Server Requirements

PHP version 8.1 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

> [!WARNING]
> The end of life date for PHP 7.4 was November 28, 2022.
> The end of life date for PHP 8.0 was November 26, 2023.
> If you are still using PHP 7.4 or 8.0, you should upgrade immediately.
> The end of life date for PHP 8.1 will be November 25, 2024.

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library

Details of the project in brief:
//Dashboard
1.Dashboard:
- consists of Dashboard for the users which consists of services of oracle then about the oracle and team of the oracle.
- it consist of login button for login to access services of the website.

2.About us:
-it having information about the oracle for eg.,their services ...

3.Contact us:
-it consist of some contact numbers and email id's and contact form.if user want's to contact to the admin then they have to fill this form otherwise contact on given email id's and phone numbers.

4.Login Page & Register Page:
- Login page consists of username and password.
- if username and password match then it redirect to customer home page otherwise redirect to register page.

//customer(client side)
5.Home Page:
- it consists of the services with their content as oracle cloud infrastructure,cloud application,oracle hardware,oracle software,oracle blockchain,oracle enterprise application.
- all this services consists of their own pages which having information about their specific topics as oracle blockchain page consist of information about blockchain n it also consist's of pdf's and this pdf's is uploaded by the admin.

6.Query form Page:
- it having query form if user have any query then he/she have to fill this form.

7.Team Page:
-it having short information about oracle team members.

//admin(server side)

8.Admin Home page:
-it having button to named as repair which consist of..

9.Repair Page:
- services names and contact, queryform and subscribe view button's to view list of customer's that fill the form as queryform,contactform and subscribe...
- and contactformview and queryformview having buttons for admin to print and delete the record if we click on print button then it print this specific record and if we click on delete button then it delete this specific record.
- And admin have form for each services to add pdf's content for eg when admin fill the form of software service means add any file related to software then it available to client side automatically on their software service page.this functionality is same for all remaining services.

10.Database:
- The database setting is done in .env file which consist of database name,driver,username,password

11. i kept one key when this key is enter by the admin only in that case admin access the server side website otherwise not.

12.Developer Page:
- it consist's of developers who develop this website and this website is fully developed by me but my friend's also help me to develop the website so i also mentioned them in my website.

-This is all information regarding my website which is oracle content library.

Thank You..




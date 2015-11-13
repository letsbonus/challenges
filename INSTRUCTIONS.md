# Instructions

In order to install and run this applications, please follow next
steps:

1. Clone this repository inside the document root of an already
   installed and running web server. For example, if you use Apache,
   clone or move it to `/var/www/html/`. The new directory created
   under this one is called `challenges` (the root directory of this
   app).

2. Make sure that the directory `uploads/` can be written by the web
   server user. Usually the command `chmod a+rwx uploads/` is enough.

3. Edit the file `mysql.conf` and change `username` and `password`,
   and other parameters, if needed. **IMPORTANT:** Please make sure
   that the user you specify can create databases in the server,
   otherwise the database won't be created.

4. Make sure that the computer you are running this app has Internet
   connection, otherwise the user interface will look ugly.

5. That's all! Open your preferred browser and go to the
   app. Following the previous example in (1), the app should be
   available at `http://localhost/challenges/`.

6. After successfully importing a file, please take a look at your
   database to check the import process completed successfully.

7. Try with several files. No matter if the format is correct, the app
   will warn you when errors are detected.

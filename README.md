# COSI 127b PA1

Download and install [XAMPP](https://www.apachefriends.org/download.html). Run and create a database called "COSI127b"
using `phpMyAdmin`.

Connect to MariaDB shell, then create the relations for the database:
```sql
USE COSI127b;
SOURCE tables.sql;
```

Import sample data from csvs into database using `phpMyAdmin`.

For liking a movie, enter a user email and ID of the motion picture to like, and press the "Like" button. You can check
movie ids by clicking the "View all Movies" button. There is no data validation performed for this POC, so make sure to
enter an existing user email and ID. See the sample data for emails, and view all movies for their IDs.

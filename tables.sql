CREATE TABLE MotionPicture (
        id INTEGER,
        name CHAR(20),
        rating REAL,
        production CHAR(20),
        budget INTEGER,
        PRIMARY KEY (id))

CREATE TABLE User (
        email CHAR(100),
        name CHAR(20),
        age INTEGER,
        PRIMARY KEY (email))

CREATE TABLE Likes (
        uemail CHAR(100),
        mpid INTEGER,
        PRIMARY KEY (uemail, mpid),
        FOREIGN KEY (uemail) REFERENCES User(email),
        FOREIGN KEY (mpid) REFERENCES MotionPicture(id))

CREATE TABLE Movie (
        mpid INTEGER NOT NULL,
        boxoffice_collection CHAR(20),
        PRIMARY KEY (mpid),
        FOREIGN KEY (mpid) REFERENCES MotionPicture(id))

CREATE TABLE Series (
        mpid INTEGER NOT NULL,
        season_count INTEGER,
        PRIMARY KEY (mpid),
        FOREIGN KEY (mpid) REFERENCES MotionPicture(id))

CREATE TABLE People (
        id INTEGER,
        name CHAR(20),
        nationality CHAR(20),
        dob DATE,
        gender CHAR(20),
        PRIMARY KEY (id))

CREATE TABLE Role (
        mpid INTEGER,
        pid INTEGER,
        role_name CHAR(20),
        PRIMARY KEY (mpid, pid, role_name),
        FOREIGN KEY (mpid) REFERENCES MotionPicture(id),
        FOREIGN KEY (pid) REFERENCES People(id))

CREATE TABLE Award (
        mpid INTEGER,
        pid INTEGER,
        award_name CHAR(20),
        award_year INTEGER,
        PRIMARY KEY (mpid, pid, award_name, award_year),
        FOREIGN KEY (mpid) REFERENCES MotionPicture(id),
        FOREIGN KEY (pid) REFERENCES People(id))

CREATE TABLE Genre (
        mpid INTEGER,
        genre_name CHAR(20),
        PRIMARY KEY (mpid, genre_name),
        FOREIGN KEY (mpid) REFERENCES MotionPicture(id))

CREATE TABLE Location (
        mpid INTEGER NOT NULL,
        zip CHAR(5),
        city CHAR(20),
        country CHAR(20),
        PRIMARY KEY (mpid, zip),
        FOREIGN KEY (mpid) REFERENCES MotionPicture(id)
        ON DELETE CASCADE)

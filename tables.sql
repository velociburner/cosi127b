CREATE TABLE MotionPicture (
        id CHAR(3),
        name CHAR(50),
        rating REAL,
        production CHAR(50),
        budget BIGINT,
        PRIMARY KEY (id));

CREATE TABLE User (
        email CHAR(100),
        name CHAR(20),
        age INTEGER,
        PRIMARY KEY (email));

CREATE TABLE Likes (
        mpid CHAR(3),
        uemail CHAR(100),
        PRIMARY KEY (uemail, mpid),
        FOREIGN KEY (uemail) REFERENCES User(email),
        FOREIGN KEY (mpid) REFERENCES MotionPicture(id));

CREATE TABLE Movie (
        mpid CHAR(3) NOT NULL,
        boxoffice_collection CHAR(20),
        PRIMARY KEY (mpid),
        FOREIGN KEY (mpid) REFERENCES MotionPicture(id));

CREATE TABLE Series (
        mpid CHAR(3) NOT NULL,
        season_count INTEGER,
        PRIMARY KEY (mpid),
        FOREIGN KEY (mpid) REFERENCES MotionPicture(id));

CREATE TABLE People (
        id CHAR(2),
        name CHAR(50),
        nationality CHAR(50),
        dob DATE,
        gender CHAR(1),
        PRIMARY KEY (id));

CREATE TABLE Role (
        mpid CHAR(3),
        pid CHAR(2),
        role_name CHAR(20),
        PRIMARY KEY (mpid, pid, role_name),
        FOREIGN KEY (mpid) REFERENCES MotionPicture(id),
        FOREIGN KEY (pid) REFERENCES People(id));

CREATE TABLE Award (
        mpid CHAR(3),
        pid CHAR(2),
        award_name CHAR(50),
        award_year INTEGER,
        PRIMARY KEY (mpid, pid, award_name, award_year),
        FOREIGN KEY (mpid) REFERENCES MotionPicture(id),
        FOREIGN KEY (pid) REFERENCES People(id));

CREATE TABLE Genre (
        mpid CHAR(3),
        genre_name CHAR(20),
        PRIMARY KEY (mpid, genre_name),
        FOREIGN KEY (mpid) REFERENCES MotionPicture(id));

CREATE TABLE Location (
        mpid CHAR(3) NOT NULL,
        zip CHAR(10),
        city CHAR(50),
        country CHAR(50),
        PRIMARY KEY (mpid, zip),
        FOREIGN KEY (mpid) REFERENCES MotionPicture(id)
        ON DELETE CASCADE);

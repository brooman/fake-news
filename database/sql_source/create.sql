-- Created by Vertabelo (http://vertabelo.com)
-- Last modification date: 2018-10-18 08:02:26.078

-- tables
-- Table: posts
CREATE TABLE posts (
    id integer NOT NULL CONSTRAINT posts_pk PRIMARY KEY,
    user_id integer NOT NULL,
    title varchar(256) NOT NULL,
    content text NOT NULL,
    likes integer NOT NULL DEFAULT 0,
    creationdate datetime NOT NULL,
    CONSTRAINT posts_user FOREIGN KEY (user_id)
    REFERENCES user (id)
);

-- Table: user
CREATE TABLE user (
    id integer NOT NULL CONSTRAINT user_pk PRIMARY KEY AUTOINCREMENT,
    name varchar(64) NOT NULL,
    username varchar(64) NOT NULL,
    password varchar(256) NOT NULL
);

-- End of file.


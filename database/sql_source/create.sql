CREATE TABLE user (
    id integer NOT NULL CONSTRAINT user_pk PRIMARY KEY AUTOINCREMENT,
    name varchar(64) NOT NULL,
    username varchar(64) NOT NULL,
    password varchar(256) NOT NULL
);

-- Table: posts
CREATE TABLE posts (
    id integer NOT NULL CONSTRAINT posts_pk PRIMARY KEY AUTOINCREMENT,
    user_id integer NOT NULL,
    title varchar(256) NOT NULL,
    content text NOT NULL,
    creationdate date NOT NULL,
    CONSTRAINT posts_author FOREIGN KEY (user_id)
    REFERENCES user (id)
);

-- End of file.


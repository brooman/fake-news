CREATE TABLE author (
    id integer NOT NULL CONSTRAINT author_pk PRIMARY KEY AUTOINCREMENT,
    name varchar(64) NOT NULL
);

-- Table: posts
CREATE TABLE posts (
    id integer NOT NULL CONSTRAINT posts_pk PRIMARY KEY AUTOINCREMENT,
    author_id integer NOT NULL,
    title varchar(256) NOT NULL,
    content text NOT NULL,
    creationdate date NOT NULL,
    CONSTRAINT posts_author FOREIGN KEY (author_id)
    REFERENCES author (id)
);

-- End of file.



-- drop table accounts;
-- drop table posts;
CREATE TABLE accounts (
  id serial PRIMARY KEY,
  username VARCHAR ( 50 ) UNIQUE NOT NULL,
  password VARCHAR ( 50 ) NOT NULL,
  email VARCHAR ( 255 ) UNIQUE NOT NULL,
  created_on TIMESTAMP NOT NULL,
  last_login TIMESTAMP
);

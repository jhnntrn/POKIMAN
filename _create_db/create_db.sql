/*****************************************
* Create the Pokemon_Database database
*****************************************/
-- create and select the database
DROP DATABASE IF EXISTS Pokemon_Database;
CREATE DATABASE Pokemon_Database;
USE Pokemon_Database;

-- create the tables
CREATE TABLE Types (
  typeID       INT(16)       NOT NULL,
  typeName     VARCHAR(20)   NOT NULL,
  PRIMARY KEY (typeName)
);

CREATE TABLE Pokedex (
  id         INT(200)       NOT NULL   AUTO_INCREMENT,
  P_Name     VARCHAR(20)    NOT NULL,
  Form       INT(3)         NULL,
  typeName   VARCHAR(20)    NOT NULL,
  type2      VARCHAR(20)    NULL,
  stat_total INT(700)       NOT NULL,
  HP         INT(700)       NOT NULL,
  Attack     INT(700)       NOT NULL,
  Defense    INT(700)       NOT NULL,
  Sp_Attack  INT(700)       NOT NULL,
  Sp_Defense INT(700)       NOT NULL,
  Speed      INT(700)       NOT NULL,
  Generation INT(10)        NOT NULL,
  PRIMARY KEY (id)
);

-- create the users
CREATE USER IF NOT EXISTS mgs_user@localhost 
IDENTIFIED BY 'pa55word';

CREATE USER IF NOT EXISTS mgs_tester@localhost 
IDENTIFIED BY 'pa55word';

-- grant privleges to the users
GRANT SELECT, INSERT, DELETE, UPDATE
ON * 
TO mgs_user@localhost;

GRANT SELECT 
ON products
TO mgs_tester@localhost;

/*****************************************
* Create the Pokemon_Database database
*****************************************/
-- create and select the database
-- create the tables
CREATE TABLE Types (
  typeID       INT(16)       NOT NULL,
  typeName     VARCHAR(20)   NOT NULL,
  PRIMARY KEY (typeName)
);

CREATE TABLE Pokedex (
  id         INT(255)       NOT NULL,
  P_Name     VARCHAR(20)    NOT NULL   UNIQUE,
  Form       INT(3)         NULL,
  typeName   VARCHAR(20)    NOT NULL,
  type2      VARCHAR(20)    NULL,
  stat_total INT(255)       NOT NULL,
  HP         INT(255)       NOT NULL,
  Attack     INT(255)       NOT NULL,
  Defense    INT(255)       NOT NULL,
  Sp_Attack  INT(255)       NOT NULL,
  Sp_Defense INT(255)       NOT NULL,
  Speed      INT(255)       NOT NULL,
  Generation INT(10)        NOT NULL,
  PRIMARY KEY (id)
);

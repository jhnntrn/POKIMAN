/****************************************************
** Creates the users table on a separate database, **
** detached from the pokedex tables/databse.       **
****************************************************/

CREATE TABLE logbook (
  user_ID     INT (255)     NOT NULL AUTO_INCREMENT,
  userName    VARCHAR(30)   NOT NULL,
  p_Word      VARCHAR(30)   NOT NULL,
  PRIMARY KEY (user_ID)
);
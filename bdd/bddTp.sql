#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Services
#------------------------------------------------------------

CREATE TABLE Services(
        id          Int  Auto_increment  NOT NULL ,
        serviceName Varchar (50) NOT NULL ,
        description Varchar (50) NOT NULL
	,CONSTRAINT Services_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: userLog
#------------------------------------------------------------

CREATE TABLE userLog(
        id          Int  Auto_increment  NOT NULL ,
        lastName    Varchar (50) NOT NULL ,
        firstName   Varchar (50) NOT NULL ,
        birthDate   Date NOT NULL ,
        adress      Varchar (50) NOT NULL ,
        zipCode     Int NOT NULL ,
        phone       Int NOT NULL ,
        id_Services Int NOT NULL
	,CONSTRAINT userLog_PK PRIMARY KEY (id)

	,CONSTRAINT userLog_Services_FK FOREIGN KEY (id_Services) REFERENCES Services(id)
)ENGINE=InnoDB;


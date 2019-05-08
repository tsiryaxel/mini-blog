create table rubrique(
    id int NOT NULL AUTO_INCREMENT,
    nom varchar(50) NOT NULL,
    image varchar(30),
    detail text,
	PRIMARY KEY (id)
);



create table admine(
    id int NOT NULL AUTO_INCREMENT,
    nom varchar(50) NOT NULL,
    mdp varchar(50) NOT NULL,
    gmail varchar(30) NOT NULL,
	PRIMARY KEY (id)
);

create table post(
	id int NOT NULL AUTO_INCREMENT,
    idadmine int NOT NULL,
    idrubrique int NOT NULL,
    titre varchar(50) NOT NULL,
    datepost timestamp,
	detail text NOT NULL,
	tag varchar(50),
	image varchar(50),
    PRIMARY KEY (id),
	foreign key(idadmine) references admine(id),
	foreign key(idrubrique) references rubrique(id)
);


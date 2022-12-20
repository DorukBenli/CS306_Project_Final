CREATE TABLE city(
cityID INTEGER NOT NULL UNIQUE, 
Name VARCHAR(50) NOT NULL, 
Population INTEGER, 
PRIMARY KEY(cityID) 
);

CREATE TABLE political_parties(
Pid INTEGER NOT NULL,
Name VARCHAR(50) NOT NULL,
CONSTRAINT PK_political_parties PRIMARY KEY(pid)
);

CREATE TABLE candidates( 
Cid INTEGER PRIMARY KEY,
Name VARCHAR(50) NOT NULL,
Pid INTEGER NOT NULL,
Surname VARCHAR(50) NOT NULL, 
FOREIGN KEY (Pid ) REFERENCES political_parties(Pid)
);

CREATE TABLE Voters( 
Vid INTEGER NOT NULL PRIMARY KEY, 
Uname VARCHAR(50) NOT NULL, 
Surname VARCHAR(50) NOT NULL, 
Age INTEGER NOT NULL,
Cid INTEGER NOT NULL,
FOREIGN KEY (Cid) REFERENCES candidates(Cid)
);

CREATE TABLE coalitions( 
Coal_id INTEGER NOT NULL UNIQUE, 
Name VARCHAR(50) NOT NULL UNIQUE, 
PRIMARY KEY(Coal_id) 
);

CREATE TABLE elections(
Eid INTEGER NOT NULL UNIQUE,
Description VARCHAR(100),
Date DATE NOT NULL,
PRIMARY KEY(Eid)
);


CREATE TABLE votes_in( 
Vid INTEGER NOT NULL UNIQUE, 
cityID INTEGER NOT NULL UNIQUE, 
PRIMARY KEY(Vid, cityID),
FOREIGN KEY (Vid) 
REFERENCES Voters(Vid),
FOREIGN KEY(cityID) REFERENCES city(cityID) 
);

CREATE TABLE forms( 
Pid INTEGER NOT NULL UNIQUE,
coal_id  INTEGER NOT NULL UNIQUE,
Form_date DATE NOT NULL, 
PRIMARY KEY(Pid, coal_id), 
FOREIGN KEY(Pid) REFERENCES political_parties(Pid),
FOREIGN KEY(coal_id) REFERENCES coalitions(coal_id) 
); 

CREATE TABLE participates( 
Coal_id INTEGER NOT NULL UNIQUE, 
Eid INTEGER NOT NULL UNIQUE, 
PRIMARY KEY(Coal_id, Eid), 
FOREIGN KEY(Coal_id) REFERENCES coalitions(Coal_id), 
FOREIGN KEY(Eid) REFERENCES elections(Eid) 
);

CREATE TABLE joins( Pid INTEGER NOT NULL UNIQUE,
Eid INTEGER NOT NULL UNIQUE, 
PRIMARY KEY(Pid, Eid), 
FOREIGN KEY(Pid ) REFERENCES political_parties(Pid), 
FOREIGN KEY(Eid) REFERENCES elections(Eid) 
);

INSERT INTO political_parties(Pid, Name) VALUES(0, "Dummy Party");
INSERT INTO political_parties(Pid, Name) VALUES(1100, "Pirates");
INSERT INTO political_parties(Pid, Name) VALUES(1200, "Toys");
INSERT INTO political_parties(Pid, Name) VALUES(1300, "Jedis");
INSERT INTO political_parties(Pid, Name) VALUES(1400, "Sith Lords");
INSERT INTO political_parties(Pid, Name) VALUES(1500, "Princesses");


INSERT INTO city(cityID, Name,Population) VALUES(10, "İstanbul",15460000);
INSERT INTO city(cityID, Name,Population) VALUES(20,"Ankara",5663000);
INSERT INTO city(cityID, Name,Population) VALUES(30, "İzmir",4321000);
INSERT INTO city(cityID, Name,Population) VALUES(40, "Bursa",3147818);
INSERT INTO city(cityID, Name,Population) VALUES(50, "Antalya",2619832);

INSERT INTO candidates(Cid,Name,Pid,Surname) VALUES(-1, "Dummy",0,"Candidate");
INSERT INTO candidates(Cid,Name,Pid,Surname) VALUES(3000, "Buzz",1200,"Lightyear");
INSERT INTO candidates(Cid,Name,Pid,Surname) VALUES(3100, "Jack",1100,"Sparrow");
INSERT INTO candidates(Cid,Name,Pid,Surname) VALUES(3200, "Luke",1300,"Skywalker");
INSERT INTO candidates(Cid,Name,Pid,Surname) VALUES(3300, "Darth",1400,"Vader");
INSERT INTO candidates(Cid,Name,Pid,Surname) VALUES(3400, "Snow",1500,"White");

INSERT INTO voters(Vid,Uname,Surname,Age,Cid) VALUES(1001, "Ege","Öztaş",20, 3100);
INSERT INTO voters(Vid,Uname,Surname,Age,Cid) VALUES(1002, "Doruk","Benli",20, 3100);
INSERT INTO voters(Vid,Uname,Surname,Age,Cid) VALUES(1003, "Arca","Köybaşıoğlu",21, 3100);
INSERT INTO voters(Vid,Uname,Surname,Age,Cid) VALUES(1004, "İlbars","korkmaz",19, 3100);
INSERT INTO voters(Vid,Uname,Surname,Age,Cid) VALUES(1005, "Çağlar","Uysal",20, 3100);

INSERT INTO coalitions(Coal_id,Name) VALUES(4001, "Sith Lords");
INSERT INTO coalitions(Coal_id,Name) VALUES(4002, "Jedi Counsil");
INSERT INTO coalitions(Coal_id,Name) VALUES(4003, "One Piece");
INSERT INTO coalitions(Coal_id,Name) VALUES(4004, "IRDC");
INSERT INTO coalitions(Coal_id,Name) VALUES(4005, "FUNi");

INSERT INTO elections(Eid,Description,Date) VALUES(5001, "General Election 1", "2015-10-23");
INSERT INTO elections(Eid,Description,Date) VALUES(5002, "General Election 2", "2016-04-22");
INSERT INTO elections(Eid,Description,Date) VALUES(5003, "General Election 3", "2017-01-24");
INSERT INTO elections(Eid,Description,Date) VALUES(5004, "Local Election", "2018-01-01");
INSERT INTO elections(Eid,Description,Date) VALUES(5005, "Presidential Election", "2019-09-18");


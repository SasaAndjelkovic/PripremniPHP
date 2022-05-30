SELECT * FROM baza_filmova.actor;

INSERT INTO baza_filmova.actor ( surname, forename )
VALUES 
-- iz nekog razloga lakse nam je da unesemo prvo prezime pa onda ime
	   ( "Milosevic", "Slobodan" ),
       ( "Kraljevic", "Marko")
;
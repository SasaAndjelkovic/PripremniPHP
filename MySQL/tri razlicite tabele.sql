SELECT
	zivotinja.ime,
    zivotinja.tezina,
    zivotinja.starost,
    zivotinja.pol,
    rasa.naziv AS rasa_zivotinje,
    vrsta.naziv AS vrsta_zivotinje
FROM
	zivotinja, 
    rasa,
    vrsta
WHERE 
	rasa.rasa_id = zivotinja.rasa_id
    AND vrsta.vrsta_id = rasa.vrsta_id
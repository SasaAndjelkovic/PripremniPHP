SELECT
	zivotinja.ime,
    zivotinja.tezina,
    zivotinja.starost,
    zivotinja.pol,
    rasa.naziv AS rasa_zivotinje,
    vrsta.naziv AS vrsta_zivotinje,
    (
		SELECT 
			COUNT(vakcinacija.vakcinacija_id)
		FROM 
			vakcinacija
		WHERE 
			vakcinacija.zivotinja_id = zivotinja.zivotinja_id
    ) AS broj_vakcinacija
FROM
	zivotinja, 
    rasa,
    vrsta
WHERE 
	rasa.rasa_id = zivotinja.rasa_id
    AND vrsta.vrsta_id = rasa.vrsta_id
SELECT
	zivotinja.ime,  
    vrsta.naziv AS vrsta_zivotinja
FROM
	zivotinja,
    vrsta
WHERE	
	zivotinja.zivotinja_id = 3
    AND vrsta.vrsta_id = zivotinja.vrsta_id
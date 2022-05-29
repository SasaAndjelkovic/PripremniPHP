SELECT 
	MAX(starost)
FROM 
	domace_zivotinje.zivotinja
WHERE
	vrsta = 'Canis lupus familiaris'
	AND pol = 'muski'
SELECT
    salles.nom AS 'Biggest Room',
    etage.nom,
    MAX(capacite)
FROM
    `salles`
INNER JOIN etage ON salles.id_etage = etage.id
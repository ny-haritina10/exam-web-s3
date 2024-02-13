
CREATE OR  REPLACE VIEW getPoidsRestantsParcelles as
SELECT
    t.nom_variete,
    t.occupation,
    p.surface,
    t.rendement,
    t.id AS id_tea,
    p.id AS parcelle,
    c.id_cueilleur as cueilleur,
    ((((p.surface * 10000.0) / t.occupation) * t.rendement) - SUM(c.poids_cueillette)) AS poidsRestants,
    date_cueillette,
    SUM(c.poids_cueillette) OVER (PARTITION BY YEAR(date_cueillette), MONTH(date_cueillette), p.id ORDER BY date_cueillette) AS poids_cueillette_total
FROM
    Parcelle AS p
JOIN
    Tea AS t ON p.id_tea = t.id
JOIN
    Cueillette AS c ON c.id_parcelle = p.id
GROUP BY
    p.id, date_cueillette;
CREATE OR REPLACE VIEW getPoidsRestantsParcelles as
WITH CTE AS (
    SELECT
        t.nom_variete,
        t.occupation,
        p.surface,
        t.rendement,
        c.poids_cueillette,
        t.prix_de_vente,
        t.id AS id_tea,
        p.id AS parcelle,
        c.id_cueilleur as cueilleur,
        (p.surface*1000) / t.occupation * t.rendement - c.poids_cueillette AS poidsRestants,
        date_cueillette,
        SUM(c.poids_cueillette) OVER (PARTITION BY YEAR(date_cueillette), MONTH(date_cueillette), p.id ORDER BY date_cueillette) AS poids_cueillette_total,
        s.salaire as salaireCeuilleur,
        ROW_NUMBER() OVER (PARTITION BY p.id, date_cueillette ORDER BY c.id) AS rn
    FROM
        Parcelle AS p
    JOIN
        Tea AS t ON p.id_tea = t.id
    JOIN
        Cueillette AS c ON c.id_parcelle = p.id
    JOIN
        SalaireCueilleur as s ON s.id_cueilleur = c.id_cueilleur
)
SELECT
    nom_variete,
    occupation,
    surface,
    rendement,
    id_tea,
    parcelle,
    cueilleur,
    poidsRestants,
    date_cueillette,
    poids_cueillette_total,
    salaireCeuilleur,
    poids_cueillette,
    prix_de_vente
FROM
    CTE
WHERE
    rn = 1;




CREATE OR REPLACE VIEW v_paiement AS
SELECT
    c.id_cueilleur AS cueilleur,
    cr.nom,
    c.date_cueillette,
    SUM(c.poids_cueillette) OVER (PARTITION BY YEAR(c.date_cueillette), MONTH(c.date_cueillette), p.id ORDER BY c.date_cueillette) AS poids,
    cr.bonus,
    cr.malus,
    s.salaire,
    CASE 
        WHEN SUM(c.poids_cueillette) OVER (PARTITION BY YEAR(c.date_cueillette), MONTH(c.date_cueillette), p.id ORDER BY c.date_cueillette) = cr.poids_min_journalier THEN s.salaire * SUM(c.poids_cueillette) OVER (PARTITION BY YEAR(c.date_cueillette), MONTH(c.date_cueillette), p.id ORDER BY c.date_cueillette)
        WHEN SUM(c.poids_cueillette) OVER (PARTITION BY YEAR(c.date_cueillette), MONTH(c.date_cueillette), p.id ORDER BY c.date_cueillette) > cr.poids_min_journalier THEN (s.salaire * SUM(c.poids_cueillette) OVER (PARTITION BY YEAR(c.date_cueillette), MONTH(c.date_cueillette), p.id ORDER BY c.date_cueillette)) + ((s.salaire * SUM(c.poids_cueillette) OVER (PARTITION BY YEAR(c.date_cueillette), MONTH(c.date_cueillette), p.id ORDER BY c.date_cueillette)) * cr.bonus / 100)
        WHEN SUM(c.poids_cueillette) OVER (PARTITION BY YEAR(c.date_cueillette), MONTH(c.date_cueillette), p.id ORDER BY c.date_cueillette) < cr.poids_min_journalier THEN (s.salaire * SUM(c.poids_cueillette) OVER (PARTITION BY YEAR(c.date_cueillette), MONTH(c.date_cueillette), p.id ORDER BY c.date_cueillette)) - ((s.salaire * SUM(c.poids_cueillette) OVER (PARTITION BY YEAR(c.date_cueillette), MONTH(c.date_cueillette), p.id ORDER BY c.date_cueillette)) * cr.malus / 100)
    END AS montant_paiement
FROM
    Parcelle AS p
JOIN
    Tea AS t ON p.id_tea = t.id
JOIN
    Cueillette AS c ON c.id_parcelle = p.id
JOIN
    SalaireCueilleur AS s ON s.id_cueilleur = c.id_cueilleur
JOIN 
    Cueilleur AS cr ON cr.id = c.id_cueilleur;




CREATE OR REPLACE VIEW v_prevision AS 
SELECT
    (p.surface * 1000) / t.occupation AS nbr_pied,
    p.surface,
    t.nom_variete AS nom_variete,
    p.id AS parcelle,
    ((p.surface * 1000) / t.occupation * t.rendement) - c.poids_cueillette AS poidsRestants,
    c.date_cueillette,
    SUM(c.poids_cueillette) OVER (PARTITION BY YEAR(c.date_cueillette), MONTH(c.date_cueillette), p.id ORDER BY c.date_cueillette) AS poids_cueillette_total
FROM
    Parcelle AS p
JOIN
    Tea AS t ON p.id_tea = t.id
JOIN
    Cueillette AS c ON c.id_parcelle = p.id
JOIN
    SalaireCueilleur AS s ON s.id_cueilleur = c.id_cueilleur;
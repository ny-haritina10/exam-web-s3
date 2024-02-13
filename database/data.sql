INSERT INTO Admin VALUES (DEFAULT, 'admin@gmail.com', 'admin');
INSERT INTO Client VALUES (DEFAULT, 'Koto', 'koto', '2000-01-01', 'koto@gmail.com');


INSERT INTO Tea (nom_variete, occupation, rendement, prix_de_vente) VALUES ('Green Tea', 200, 15.50, 100);
INSERT INTO Tea (nom_variete, occupation, rendement, prix_de_vente) VALUES ('Black Tea', 150, 18.75, 99);
INSERT INTO Tea (nom_variete, occupation, rendement, prix_de_vente) VALUES ('Oolong Tea', 180, 20.25, 110);
INSERT INTO Tea (nom_variete, occupation, rendement, prix_de_vente) VALUES ('White Tea', 120, 14.80, 115);
INSERT INTO Tea (nom_variete, occupation, rendement, prix_de_vente) VALUES ('Herbal Tea', 100, 12.60, 85);
INSERT INTO Tea (nom_variete, occupation, rendement, prix_de_vente) VALUES ('Earl Grey Tea', 160, 17.25, 100);
INSERT INTO Tea (nom_variete, occupation, rendement, prix_de_vente) VALUES ('Jasmine Tea', 140, 16.00, 200);
INSERT INTO Tea (nom_variete, occupation, rendement, prix_de_vente) VALUES ('Chai Tea', 220, 22.50, 140);
INSERT INTO Tea (nom_variete, occupation, rendement, prix_de_vente) VALUES ('Darjeeling Tea', 190, 21.00, 75);
INSERT INTO Tea (nom_variete, occupation, rendement, prix_de_vente) VALUES ('Matcha Tea', 210, 23.75, 210);


INSERT INTO Parcelle (id_tea, num_parcelle, surface) VALUES (1, 101, 50.75);
INSERT INTO Parcelle (id_tea, num_parcelle, surface) VALUES (2, 102, 48.60);
INSERT INTO Parcelle (id_tea, num_parcelle, surface) VALUES (3, 103, 55.30);
INSERT INTO Parcelle (id_tea, num_parcelle, surface) VALUES (4, 104, 60.20);
INSERT INTO Parcelle (id_tea, num_parcelle, surface) VALUES (5, 105, 45.90);
INSERT INTO Parcelle (id_tea, num_parcelle, surface) VALUES (6, 106, 52.40);
INSERT INTO Parcelle (id_tea, num_parcelle, surface) VALUES (7, 107, 58.80);
INSERT INTO Parcelle (id_tea, num_parcelle, surface) VALUES (8, 108, 42.10);
INSERT INTO Parcelle (id_tea, num_parcelle, surface) VALUES (9, 109, 47.30);
INSERT INTO Parcelle (id_tea, num_parcelle, surface) VALUES (10, 110, 54.20);


INSERT INTO Cueilleur (nom, genre, date_naissance, poids_min_journalier, bonus, malus) VALUES ('Jean Dupont', 'Homme', '1990-05-15', 45, 10, 5);
INSERT INTO Cueilleur (nom, genre, date_naissance, poids_min_journalier, bonus, malus) VALUES ('Marie Dubois', 'Femme', '1985-10-20', 20, 10, 5);
INSERT INTO Cueilleur (nom, genre, date_naissance, poids_min_journalier, bonus, malus) VALUES ('Pierre Durand', 'Homme', '1993-03-28', 32, 10, 5);
INSERT INTO Cueilleur (nom, genre, date_naissance, poids_min_journalier, bonus, malus) VALUES ('Sophie Martin', 'Femme', '1997-08-12', 41, 10, 5);
INSERT INTO Cueilleur (nom, genre, date_naissance, poids_min_journalier, bonus, malus) VALUES ('Lucie Leroy', 'Femme', '1992-12-03', 84, 10, 5);


INSERT INTO CategorieDepense (type_depense) VALUES ('Alimentation');
INSERT INTO CategorieDepense (type_depense) VALUES ('Logement');
INSERT INTO CategorieDepense (type_depense) VALUES ('Transport');
INSERT INTO CategorieDepense (type_depense) VALUES ('Loisirs');
INSERT INTO CategorieDepense (type_depense) VALUES ('Santé');


INSERT INTO SalaireCueilleur (id_cueilleur, salaire) VALUES (1, 1500.00);
INSERT INTO SalaireCueilleur (id_cueilleur, salaire) VALUES (2, 1600.50);
INSERT INTO SalaireCueilleur (id_cueilleur, salaire) VALUES (3, 1450.75);
INSERT INTO SalaireCueilleur (id_cueilleur, salaire) VALUES (4, 1550.25);
INSERT INTO SalaireCueilleur (id_cueilleur, salaire) VALUES (5, 1625.00);


INSERT INTO Depense (id_categorie_depense, date_depense, montant) VALUES (1, '2023-01-01', 200.00);
INSERT INTO Depense (id_categorie_depense, date_depense, montant) VALUES (2, '2023-05-07', 750.50);
INSERT INTO Depense (id_categorie_depense, date_depense, montant) VALUES (3, '2023-10-10', 100.00);
INSERT INTO Depense (id_categorie_depense, date_depense, montant) VALUES (4, '2023-02-12', 50.25);
INSERT INTO Depense (id_categorie_depense, date_depense, montant) VALUES (5, '2023-03-15', 300.00);


INSERT INTO Cueillette (date_cueillette, id_cueilleur, id_parcelle, poids_cueillette) VALUES
('2023-01-01', 1, 1, 10.5),
('2023-01-05', 2, 2, 8.2),
('2023-02-10', 3, 3, 12.3),
('2023-03-15', 4, 4, 9.8),
('2023-04-20', 5, 5, 11.1),
('2023-05-25', 1, 1, 7.5),
('2023-06-30', 2, 2, 14.2),
('2023-07-10', 3, 3, 6.3),
('2023-08-15', 4, 4, 13.7),
('2023-09-20', 5, 5, 10.9);
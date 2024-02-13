CREATE TABLE Admin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    mail VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE Client (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_name VARCHAR (255) NOT NULL,
    password VARCHAR (255) NOT NULL,
    date_naissance DATE NOT NULL,
    email VARCHAR (255) NOT NULL
);

CREATE TABLE Tea (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom_variete VARCHAR(255) NOT NULL,
    occupation INT NOT NULL,
    rendement DECIMAL(10,2) NOT NULL,
    prix_de_vente DECIMAL(10, 2) NOT NULL 
);

CREATE TABLE Parcelle (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_tea INT NOT NULL,
    num_parcelle INT NOT NULL,
    surface DECIMAL (10,2) NOT NULL,

    FOREIGN KEY (id_tea) REFERENCES Tea (id) ON DELETE CASCADE
);

CREATE TABLE Cueilleur (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR (255) NOT NULL,
    genre VARCHAR (255) NOT NULL,
    date_naissance DATE NOT NULL,
    poids_min_journalier DECIMAL(10,2) NOT NULL,
    bonus INT NOT NULL,
    malus INT NOT NULL
); 

CREATE TABLE CategorieDepense (
    id INT AUTO_INCREMENT PRIMARY KEY,
    type_depense VARCHAR(255) NOT NULL
);

CREATE TABLE SalaireCueilleur (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_cueilleur INT NOT NULL,
    salaire DECIMAL(10, 2) NOT NULL,

    FOREIGN KEY (id_cueilleur) REFERENCES Cueilleur (id) ON DELETE CASCADE
);

CREATE TABLE Cueillette (
    id INT AUTO_INCREMENT PRIMARY KEY,
    date_cueillette DATE NOT NULL,
    id_cueilleur INT NOT NULL,
    id_parcelle INT NOT NULL,
    poids_cueillette DECIMAL(10,2) NOT NULL,

    FOREIGN KEY (id_cueilleur) REFERENCES Cueilleur (id) ON DELETE CASCADE,
    FOREIGN KEY (id_parcelle) REFERENCES Parcelle (id) ON DELETE CASCADE
);

CREATE TABLE Depense (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_categorie_depense INT NOT NULL,
    date_depense DATE NOT NULL,
    montant DECIMAL (10, 2),

    FOREIGN KEY (id_categorie_depense) REFERENCES CategorieDepense (id) ON DELETE CASCADE
);
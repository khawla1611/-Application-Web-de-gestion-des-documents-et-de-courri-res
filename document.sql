CREATE TABLE documents (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cycle VARCHAR(255),
    niveau_scolaire VARCHAR(255),
    branche VARCHAR(255),
    matiere VARCHAR(255),
    theme_domaine VARCHAR(255),
    type_document VARCHAR(255),
    type_extension VARCHAR(255),
    semestre VARCHAR(255),
    fichier VARCHAR(255),
    date_ajout TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

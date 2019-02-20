-- Un commentaire en SQL
-- CECI EST UN SUPPORT POUR LE COURS
-- Inserer des catégories de films
-- Action,horreer,Films de gangster,Science-fiction,Thriller
-- Copier/coller la requete SQL dans PHPmyadmin (onglet SQL)
-- on peut mettre les colonnes entre `` (backtick =>alt gr +7)
-- et les valeurs entre '' (quote)

    INSERT INTO catégorie(`name`) VALUES ('Action');

    -- On insère plusieurs catégories
    INSERT INTO catégori(`name`) VALUES 
    ('horreur'),
    ('Film de Ganster'),
    ('Sci fi'),
    ('animation');

    -- recuperer toutes les categories
    SELECT * FROM categorie;

    -- Supprimer la catégorie qui a l'id 5
    DELETE FROM categorie WHERE id =5;
    
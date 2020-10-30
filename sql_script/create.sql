CREATE TABLE users(
    ID_users int NOT NULL,
    nom nvarchar(255) NOT NULL,
    prenom nvarchar(255),
    username nvarchar (255) NOT NULL,
    mdp nvarchar (255) NOT NULL,
    PRIMARY KEY (ID_users)
);

CREATE TABLE categorys(
    ID_cat int NOT NULL,
    nom_cat nvarchar(255) NOT NULL,
    PRIMARY KEY (ID_cat)
);

CREATE TABLE carts(
    ID_cart int NOT NULL,
    ID_users int,
    ID_prod int,
    PRIMARY KEY (ID_cart)
    FOREIGN KEY (ID_prod) REFERENCES produits(ID_prod),
    FOREIGN KEY (ID_users) REFERENCES users(ID_users)
);
CREATE TABLE produits(
    ID_prod int NOT NULL,
    ID_cart int,
    nom_prod nvarchar(255) NOT NULL,
    prix float,
    img nvarchar(255) NOT NULL,
    descri nvarchar(255) NOT NULL
    PRIMARY KEY (ID_prod)
    FOREIGN KEY (ID_cart) REFERENCES carts(ID_cart)
);

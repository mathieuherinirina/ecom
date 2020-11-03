CREATE TABLE users(
    ID_users int NOT NULL,
    name varchar(255) NOT NULL,
    prenom varchar(255),
    username varchar (255) NOT NULL,
    password varchar (255) NOT NULL,
    email varchar (255) NOT NULL,
    PRIMARY KEY (ID_users)
);

CREATE TABLE categories(
    ID_cat int NOT NULL,
    nom_cat varchar(255) NOT NULL,
    PRIMARY KEY (ID_cat)
);

CREATE TABLE carts(
    ID_cart int NOT NULL,
    ID_users int,
    ID_prod int,
    status_payer boolean, 
    PRIMARY KEY (ID_cart),
    FOREIGN KEY (ID_prod) REFERENCES produits(ID_prod),
    FOREIGN KEY (ID_users) REFERENCES users(ID_users)
);
CREATE TABLE produits(
    ID_prod int NOT NULL,
    ID_cat int,
    nom_prod varchar(255) NOT NULL,
    prix float,
    img varchar(255) NOT NULL,
    descri varchar(255) NOT NULL,
    PRIMARY KEY (ID_prod),
    FOREIGN KEY (ID_cat) REFERENCES categories(ID_cat)
);

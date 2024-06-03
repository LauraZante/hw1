CREATE DATABASE hmw1;
USE hmw1;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)Engine = InnoDB;

INSERT INTO users (username, email, password) VALUES
('Laura', 'laurazante@icloud.com', 'Lauretta14!'),
('Marco', 'marcocosta2309@gmail.com', 'Marco23!');

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    price DECIMAL(10, 2),
    image_url VARCHAR(255)
);

INSERT INTO products (name, description, price, image_url) VALUES 
('Les Petits Enfants SASHA','Abito in organza. Made in Italy rifinito nei minimi dettagli','249.90','SASHA.jpeg'),
('Les Etolies VITTORIO','Abito in mikado. Made in Italy rifinito nei minimi dettagli','299.90','VITTORIO.jpeg'),
('Les Petits Enfants EMMA','Abito in organza. Made in Italy rifinito nei minimi dettagli','249.90','EMMA.jpeg'),
('Les Etolies GIANMARCO','Abito in mikado. Made in Italy rifinito nei minimi dettagli','199.90','GIANMARCO.jpeg'),
('Les Petits Enfants ESTELA','Abito in seta. Made in Italy rifinito nei minimi dettagli','219.90','ESTELA.jpeg'),
('Les Petits Enfants DIEGO','Abito in lino. Made in Italy rifinito nei minimi dettagli','239.90','DIEGO.jpeg');

select * from products;
select * from favorites;

CREATE TABLE favorites (
    user_id INT,
    product_id INT,
    PRIMARY KEY (user_id, product_id),
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (product_id) REFERENCES products(id)
);

CREATE TABLE newsletter (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    cognome VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO newsletter (nome, cognome, email) VALUES
('laura', 'zante', 'laurazante@icloud,com'),
('marco','costa','marcocosta@icloud.com');

CREATE TABLE reviews (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    rating INT NOT NULL,
    subject VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
ALTER TABLE reviews ADD COLUMN user_id INT NOT NULL;


CREATE TABLE appointments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    date DATE NOT NULL,
    time TIME NOT NULL,
    gender ENUM('bimbo', 'bimba') NOT NULL,
    location VARCHAR(255) NOT NULL
);

CREATE TABLE corredino (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    descrizione TEXT,
    prezzo DECIMAL(10, 2) NOT NULL,
    immagine VARCHAR(255) NOT NULL
);

INSERT INTO corredino (nome, descrizione, prezzo, immagine) VALUES
('Petit Rosa','Fascetta color bianco e rosa. Made in Italy rifinito nei minimi dettagli.', 29.90, 'fascetta.jpeg'),
('Petit Rosa','Tutina color bianco e rosa. Made in Italy rifinito nei minimi dettagli.', 118.00, 'tutinarosa.jpeg'),
('Petit Rosa','Completino color bianco e rosa. Made in Italy rifinito nei minimi dettagli.', 125.00, 'completino.jpeg'),
('Petit Blu','Bavetta color bianco e blu. Made in Italy rifinito nei minimi dettagli.',39.90, 'bavetta.jpeg'),
('Petit Blu','Tutina color bianco e blu. Made in Italy rifinito nei minimi dettagli.',118.00,'tutinablu.jpeg'),
('Petit Blu','Copertina bianca e blu. Made in Italy rifinito nei minimi dettagli.',169.00,'copertina.jpeg');

CREATE TABLE battesimo (
	id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    descrizione TEXT,
    prezzo DECIMAL(10, 2) NOT NULL,
    immagine VARCHAR(255) NOT NULL
);

INSERT INTO battesimo (nome, descrizione, prezzo, immagine) VALUES
('Les Petits Enfants SASHA','Abito in organza. Made in Italy rifinito nei minimi dettagli','249.90','SASHA.jpeg'),
('Les Etolies VITTORIO','Abito in mikado. Made in Italy rifinito nei minimi dettagli','299.90','VITTORIO.jpeg'),
('Les Petits Enfants EMMA','Abito in organza. Made in Italy rifinito nei minimi dettagli','249.90','EMMA.jpeg'),
('Les Etolies GIANMARCO','Abito in mikado. Made in Italy rifinito nei minimi dettagli','199.90','GIANMARCO.jpeg'),
('Les Petits Enfants ESTELA','Abito in seta. Made in Italy rifinito nei minimi dettagli','219.90','ESTELA.jpeg'),
('Les Petits Enfants DIEGO','Abito in lino. Made in Italy rifinito nei minimi dettagli','239.90','DIEGO.jpeg');

CREATE TABLE cerimonia (
	id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    descrizione TEXT,
    prezzo DECIMAL(10, 2) NOT NULL,
    immagine VARCHAR(255) NOT NULL
);

INSERT INTO cerimonia (nome, descrizione, prezzo, immagine) VALUES
('Les Petits Enfants VERA','Abito in organza. Made in Italy rifinito nei minimi dettagli','299.90','VERA.jpeg'),
('Les Etolies BONNIE','Abito in mikado. Made in Italy rifinito nei minimi dettagli','299.90','BONNIE.jpeg'),
('Les Petits NANCY','Abito in organza. Made in Italy rifinito nei minimi dettagli','329.90','NANCY.jpeg'),
('Les Etolies CLAUDIO','Abito in mikado. Made in Italy rifinito nei minimi dettagli','290.90','CLAUDIO.jpeg'),
('Les Petits Enfants ALESSIO','Abito in cotone. Made in Italy rifinito nei minimi dettagli','299.90','ALESSIO.jpeg'),
('Les Petits Enfants GABRIEL','Abito in lino. Made in Italy rifinito nei minimi dettagli','239.90','GABRIEL.jpeg');

CREATE TABLE outlet (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    descrizione TEXT NOT NULL,
    prezzo DECIMAL(10, 2) NOT NULL,
    immagine VARCHAR(255) NOT NULL,
    sconto INT NOT NULL DEFAULT 0
);

INSERT INTO outlet (nome, descrizione, prezzo, immagine, sconto) VALUES
('Les Petits Enfants VERA','Abito in organza. Made in Italy rifinito nei minimi dettagli',299.90,'VERA.jpeg', 30),
('Les Etolies BONNIE','Abito in mikado. Made in Italy rifinito nei minimi dettagli',299.90,'BONNIE.jpeg', 10),
('Les Petits NANCY','Abito in organza. Made in Italy rifinito nei minimi dettagli',329.90,'NANCY.jpeg', 20),
('Les Etolies CLAUDIO','Abito in mikado. Made in Italy rifinito nei minimi dettagli',290.90,'CLAUDIO.jpeg', 20),
('Les Petits Enfants ALESSIO','Abito in cotone. Made in Italy rifinito nei minimi dettagli',299.90,'ALESSIO.jpeg', 10),
('Les Petits Enfants GABRIEL','Abito in lino. Made in Italy rifinito nei minimi dettagli',239.90,'GABRIEL.jpeg', 20);

CREATE TABLE scarpe (
	id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    descrizione TEXT,
    prezzo DECIMAL(10, 2) NOT NULL,
    immagine VARCHAR(255) NOT NULL
);

INSERT INTO scarpe (nome, descrizione, prezzo, immagine) VALUES
('Amato 1','Scarpette in tessuto, color bianco. Made in Italy rifinite nei minimi dettagli',89.90,'1.JPG'),
('Amato 2','Scarpette in tessuto, color bianco. Made in Italy rifinite nei minimi dettagli',89.90,'2.JPG'),
('Amato 3','Scarpette in tessuto, color blu. Made in Italy rifinite nei minimi dettagli',89.90,'4.JPG'),
('Amato 4','Scarpette in tessuto, color rosa. Made in Italy rifinite nei minimi dettagli',89.90,'3.JPG'),
('Amato 5','Scarpette in vera pelle, color blu. Made in Italy rifinite nei minimi dettagli',99.90,'5.JPG'),
('Amato 6','Scarpette in vera pelle, color rosa. Made in Italy rifinite nei minimi dettagli',99.90,'6.JPG');

CREATE TABLE capispalla (
	id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    descrizione TEXT,
    prezzo DECIMAL(10, 2) NOT NULL,
    immagine VARCHAR(255) NOT NULL
);

INSERT INTO capispalla (nome, descrizione, prezzo, immagine) VALUES
('Les Etolies Bianco','Pellicciotto corto, color bianco. Made in Italy rifinite nei minimi dettagli',119.90,'8.JPG'),
('Les Etolies Blu','Cappottino, color blu. Made in Italy rifinite nei minimi dettagli',139.90,'7.JPG'),
('Les Etolies Bianco','Pellicciotto lungo, color bianco. Made in Italy rifinite nei minimi dettagli',149.90,'9.JPG'),
('Les etolies Blu','cappottino doppiopetto, color blu. Made in Italy rifinite nei minimi dettagli',189.90,'10.JPG');


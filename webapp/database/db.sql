CREATE TABLE doctors (
    id int PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(20),
    prenom VARCHAR(20),
    naissance DATE,
    speciality VARCHAR(20)
);
CREATE TABLE patients (
    id int PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(20),
    prenom VARCHAR(20),
    naissance DATE,
    tel INT(30),
    email VARCHAR(50),
    maladie VARCHAR(30)
);
CREATE TABLE appointments (
    id int PRIMARY KEY AUTO_INCREMENT,
    patientID INT NOT NULL,
    doctorID INT NOT NULL,
    FOREIGN KEY (doctorID) REFERENCES doctors(id) ON DELETE CASCADE,
    FOREIGN KEY (patientID) REFERENCES patients(id) ON DELETE CASCADE,
    date DATE,
    status VARCHAR(20)
);
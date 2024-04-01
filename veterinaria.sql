DROP DATABASE veterinaria;

create database veterinaria;
use veterinaria;

CREATE TABLE Clientes (
    ClienteID INT PRIMARY KEY,
    Nombre VARCHAR(50),
    Apellido VARCHAR(50),
    Telefono VARCHAR(20),
    Email VARCHAR(100),
    Direccion VARCHAR(200)
);

CREATE TABLE Mascotas (
    MascotaID INT PRIMARY KEY,
    Nombre VARCHAR(50),
    Especie VARCHAR(50),
    Raza VARCHAR(50),
    Edad INT,
    ClienteID INT,
    FOREIGN KEY (ClienteID) REFERENCES Clientes(ClienteID)
);

CREATE TABLE Veterinarios (
    VeterinarioID INT PRIMARY KEY,
    Nombre VARCHAR(50),
    Apellido VARCHAR(50),
    Especialidad VARCHAR(100),
    Celular VARCHAR(20),
    Email VARCHAR(100),
    Direccion VARCHAR(200)
);

CREATE TABLE Consultas (
    ConsultaID INT PRIMARY KEY,
    FechaConsulta DATE,
    HoraInicio TIME,
    HoraFin TIME,
    VeterinarioID INT,
    MascotaID INT,
    FOREIGN KEY (VeterinarioID) REFERENCES Veterinarios(VeterinarioID),
    FOREIGN KEY (MascotaID) REFERENCES Mascotas(MascotaID)
);

CREATE TABLE Diagnosticos (
    DiagnosticoID INT PRIMARY KEY,
    ConsultaID INT,
    Enfermedad VARCHAR(200),
    Tratamiento VARCHAR(500),
    FOREIGN KEY (ConsultaID) REFERENCES Consultas(ConsultaID)
);

INSERT INTO Clientes (ClienteID, Nombre, Apellido, Telefono, Email, Direccion) VALUES
(1, 'Pablo', 'Fernandez', '70738930', 'pablo@.com', 'Calle 123, Ciudad'),
(2, 'Ariana', 'Martinez', '987654321', 'ariana@google.com', 'Av. Principal 456'),
(3, 'Jose', 'Rojas', '987654321', 'jose@google.com', 'Av. Principal 456');

INSERT INTO Mascotas (MascotaID, Nombre, Especie, Raza, Edad, ClienteID) VALUES
(1, 'Luna', 'Perro', 'Labrador', 3, 1),
(2, 'Simba', 'Gato', 'Siames', 2, 2),
(3, 'Matias', 'Loro', 'Amazona vittata', 1, 2),
(4, 'Rex', 'Perro', 'Pastor Alemán', 5, 1),
(5, 'Luka', 'Tortuga', 'Tortuga Laúd', 4, 3);



INSERT INTO Veterinarios (VeterinarioID, Nombre, Apellido, Especialidad, Celular, Email, Direccion) VALUES
(1, 'Dr. Carlos', 'Martínez', 'Cirugía', '78954826', 'carlos@google.com', 'Av. Principal 789'),
(2, 'Dra. Laura', 'López', 'Medicina Interna', '74558916', 'laura@google.com', 'Calle Secundaria 321'),
(3, 'Dra. Ximena', 'Fernandez', 'Cirugía', '25448946', 'ximena@google.com', 'Av. Heroinas 589'),
(4, 'Dr. Lenka', 'Medina', 'Auxiliar', '95448624', 'lenka@google.com', 'Calle Venezuela');


-- INSERT INTO Consultas (ConsultaID, FechaConsulta, HoraInicio, HoraFin, VeterinarioID, MascotaID) VALUES
-- (1, '2024-03-15', '09:00:00', '10:00:00', 1, 1),
-- (2, '2024-03-16', '10:30:00', '11:30:00', 2, 2),
-- (3, '2024-03-17', '11:00:00', '12:00:00', 1, 3);

-- INSERT INTO Diagnosticos (DiagnosticoID, ConsultaID, Enfermedad, Tratamiento) VALUES
-- (1, 1, 'Fractura en pata trasera', 'Inmovilización y reposo'),
-- (2, 2, 'Gastroenteritis', 'Dieta especial y medicación'),
-- (3, 3, 'Problemas de cadera', 'Ejercicios de rehabilitación');

                


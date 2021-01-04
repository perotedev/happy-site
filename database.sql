USE devtest;

CREATE TABLE orcamento(
    idPedido INT NOT NULL,
    clientName VARCHAR(50) NOT NULL,
    clientEmail VARCHAR(50) NOT NULL,
    typeMDF VARCHAR(10) NOT NULL,
    qtdMDF INT NOT NULL,
    qtdFitaRolo INT NOT NULL,
    qtdDobradica INT NOT NULL,
    qtdPuxador INT NOT NULL,
    qtdHDF INT NOT NULL,
    qtdThiner INT NOT NULL,
    qtdEstopa INT NOT NULL,
    qtdCola INT NOT NULL,
    qtdRodinha INT NOT NULL,
    qtdCantoneira INT NOT NULL,
    valorParafuso FLOAT NOT NULL,

    PRIMARY KEY(idPedido)
)

CREATE TABLE materials(
    typeMDF VARCHAR(10) NOT NULL,
    valorMDF FLOAT NOT NULL,
    valorFitaRolo FLOAT NOT NULL,
    valorDobradica FLOAT NOT NULL,
    valorPuxador FLOAT NOT NULL,
    valorHDF FLOAT NOT NULL,
    valorThiner FLOAT NOT NULL,
    valorEstopa FLOAT NOT NULL,
    valorCola FLOAT NOT NULL,
    valorRodinha FLOAT NOT NULL,
    valorCantoneira FLOAT NOT NULL,

    PRIMARY KEY(typeMDF)
)
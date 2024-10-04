CREATE TABLE Utilisateur (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE
);

CREATE TABLE Message (
    id INT PRIMARY KEY AUTO_INCREMENT,
    contenu TEXT NOT NULL,
    dateEnvoi DATETIME DEFAULT CURRENT_TIMESTAMP,
    expediteur_id INT,
    FOREIGN KEY (expediteur_id) REFERENCES Utilisateur(id)
);

CREATE TABLE Conversation (
    id INT PRIMARY KEY AUTO_INCREMENT,
    titre VARCHAR(255) NOT NULL
);

CREATE TABLE Conversation_Utilisateur (
    conversation_id INT,
    utilisateur_id INT,
    PRIMARY KEY (conversation_id, utilisateur_id),
    FOREIGN KEY (conversation_id) REFERENCES Conversation(id),
    FOREIGN KEY (utilisateur_id) REFERENCES Utilisateur(id)
);

CREATE TABLE Conversation_Message (
    conversation_id INT,
    message_id INT,
    PRIMARY KEY (conversation_id, message_id),
    FOREIGN KEY (conversation_id) REFERENCES Conversation(id),
    FOREIGN KEY (message_id) REFERENCES Message(id)
);
-- Renommer la table Utilisateur en Users
ALTER TABLE Utilisateur RENAME TO Users;

-- Mettre à jour les clés étrangères qui référencent la table Utilisateur
ALTER TABLE Message
DROP FOREIGN KEY message_ibfk_1,
ADD CONSTRAINT message_ibfk_1
FOREIGN KEY (expediteur_id) REFERENCES Users(id);

ALTER TABLE Conversation_Utilisateur
DROP FOREIGN KEY conversation_utilisateur_ibfk_2,
ADD CONSTRAINT conversation_utilisateur_ibfk_2
FOREIGN KEY (utilisateur_id) REFERENCES Users(id);

-- Renommer la table Conversation_Utilisateur pour refléter le changement
ALTER TABLE Conversation_Utilisateur RENAME TO Conversation_User;




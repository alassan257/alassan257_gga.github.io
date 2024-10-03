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

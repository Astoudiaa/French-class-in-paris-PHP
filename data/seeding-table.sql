BEGIN;
-- Réinitialisation des tables
TRUNCATE TABLE "contact" RESTART IDENTITY CASCADE;

INSERT INTO "contact" ("fullname", "email", "phone", "message", "subject") VALUES
('Jean Dupont', 'jean.dupont@example.com', '0601020304', 'Bonjour, je suis intéressé par vos cours.', 'Demande de renseignements'),
('Alice Martin', 'alice.martin@example.com', '0612345678', 'Pouvez-vous me donner plus de détails ?', 'Cours particuliers');



COMMIT;
# Modul 150 Projekt
Ziel dieses Projekts ist es die Aspekte einer kleinen, exemplarischen Businessanwendung zu betrachten.

## Konzept
In meiner Applikation geht es um Inserate. Folgende Funktionen sollen möglich sein:
* Sich registrieren sowie anmelden
* Inserate erstellen, löschen und anschauen können
* Inserate sortieren nach Kategorie

Für diese Applikation benutze ich Bootsstrap als Template und arbeite mit PHP/XAMPP im Backend.

## Dokumentation
### Datenbank
In der Datenbank arbeite ich mit zwei Tabellen. Eine für die User Daten, und die andere für die Inserate.

#### SQL
CREATE TABLE user (
userID int NOT NULL AUTO_INCREMENT,
username varchar(255),
firstname varchar(255),
lastnme varchar(255),
adress varchar(255),
email varchar(255),
PRIMARY KEY (userID)
);

CREATE TABLE product (
imageID int NOT NULL AUTO_INCREMENT,
name varchar(255),
description varchar(255),
image varchar(255),
userID int,
PRIMARY KEY (imageID),
FOREIGN KEY (userID) REFERENCES user(userID)
);

#### Diagramm
m150/diagramm.png

#### Migrationsstrategie
Im Falle dass die Datenbank migriert werden muss, würde ich die Strategie "Database First" benutzen, um zu garantieren, dass die Benutzeroberfläche nach der Migration auch sicher funktioniert und keine Beinträchtigungen verursacht.

### Datenschutz
Datenschutz ist in meinem Falle sehr wichtig; es geht um sehr persönliche Daten welche ich speichere (voller Name, Adresse, E-Mail)
Ich würde es dem Kunden in den Geschäftsbedingungen klar machen dass sie kontaktiert werden können via E-Mail + voller Name sobald jemand Interesse an ihrem Inserat hat. Ich zeige jedoch nicht die Adresse an; dass können sich Kunden untereinander absprechen.

Als gutes Beispiel der AGB's einer ähnlichen Webseite habe ich anibis.ch benutzt.
https://www.anibis.ch/uploads/content/files/user_terms/DE/AGB_20161114_de.pdf

### Sicherheit
#### Token Authentisierung
Die Bearer Token Authentisierung wäre in meinem Projekt die Login Sessions.

#### Passwörter
Bevor Passwörter in die Datenbamk geschrieben werden, werden sie zuerst gehasht und zu vermeiden, dass man Passwörter in Klartext in der DB sieht.

#### Sicherheitslücken
* Zurzeit wird nicht geprüft ob der eingegebene Username in der Datenbank existiert.
* Login zurzeit nicht möglich

#### Information
Kunden müssen Informationen über den Webseiten Anbieter bekommen.
Dazu gehören allgemein Kontaktmöglichkeiten (Adressen, Telefonnummern) und Informationen zum Datenschutz.

#### Kommunikation
Damit Kunden direkt mit dem Anbieter in Kontakt treten können, braucht es Kommunikationsmöglichkeiten. Varianten dafür wären Kontaktformulare und Hotlines.

#### Transaktionsprozess
Für meine Webseite würde ich PayPal als Transaktionsmöglichkeit einbauen. In meinen Augen macht das am meisten Sinn für eine Inseratwebseite.

Zwar nicht so beliebt wie Kreditkarten, dafür hohe Sicherheit. Paypal wird Jahr zu Jahr öfters benutzt und Menschen werden vertrauter mit der Zahlungsmöglichkeit.

### Registrierung und Login
Die Erstellung von neuen Accounts erfolgt über den in der Button "Registrierung" in der Navbar. (register.php)
Es wird folgendes geprüft:
* Ob das Passwort und Username Feld gefüllt ist
* Ob die Passwörter übereinstimmen
* Ob das Passwort mindestens 6 Zeichen enthält

Wenn die Prüfung erfolgreich ist, wird das Passwort gehasht, und mit den anderen Daten in die Datenbank geschrieben als neuer User.

### Inserate
Auf der Homepage sind alle Inserate der Datenbank ersichtlich. Um ein neues Inserat zu erstellen, drückt man in der Navbar auf "Inserat erstellen". (form.php)
Dabei kann man den Titel des Inserates, die Beschreibung und ein Bild auswählen. Für das Bild muss der Pfad angegeben werden und das File abgelegt im "img" Folder.

### Fazit
Ich konnte das Erstellen und Anzeigen der Inserate gut umsetzen. Was jedoch fehlt ist eine funktionierende Login Logik (man kann sich registrieren jedoch konnte ich keine Logik für Login Session implementieren).




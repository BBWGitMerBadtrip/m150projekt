# Modul 150 Projekt

Ziel dieses Projekts ist es die Aspekte einer kleinen, exemplarischen Businessanwendung zu betrachten.

## Konzept

In meiner Applikation geht es um Inserate. Folgende Funktionen sollen möglich sein:
* Sich registrieren sowie anmelden
* Inserate erstellen, löschen und anschauen können
* Inserate sortieren nach Kategorie

Für diese Applikation benutze ich Bootsstrap als Template und arbeite mit PHP im Backend.

## Dokumentation

### Datenbank
In der Datenbank arbeite ich mit zwei Tabellen. Eine für die User Daten, und die andere für die Inserate.

### Registrierung und Login

Die Erstellung von neuen Accounts erfolgt über den in der Button "Registrierung" in der Navbar. (register.php)
Es wird folgendes geprüft:
* Ob das Passwort und Username Feld gefüllt ist
* Ob die Passwörter übereinstimmen
* Ob das Passwort mindestens 6 Zeichen enthält

Wenn die Prüfung erfolgreich ist, wird das Passwort gehasht, und mit den anderen Daten in die Datenbank geschrieben als neuer User.

#### Sicherheitslücken, Verbesserungsmöglichkeiten
* Zurzeit wird nicht geprüft ob der eingegebene Username in der Datenbank existiert.
* Login zurzeit nicht möglich

### Inserate

Auf der Homepage sind alle Inserate der Datenbank ersichtlich. Um ein neues Inserat zu erstellen, drückt man in der Navbar auf "Inserat erstellen". (form.php)
Dabei kann man den Titel des Inserates, die Beschreibung und ein Bild auswählen. Für das Bild muss der Pfad angegeben werden und das File abgelegt im "img" Folder.




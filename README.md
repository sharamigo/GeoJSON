## Setup

Dieses Projekt enthält eine lauffähige docker-compose Konfiguration mit einem PostrgreSQL, einem django und einem MapComponents Container.
In der Datenbank befinden sich zwei Tabellen mit Geodaten. 


Docker compose config mit:

- PostgreSQL (Port: 55432)
- Django backend (Port: 8000)
- Symfony backend (Port: 8001)
- MapComponents client (Port: 8080)

## Aufgabe

1. Das django oder symfony backend soll für die beiden Tabellen je einen Endpunkt zum Abruf der Tabellen im GeoJSON Format bereitstellen. 
2. Im MapComponents Client sollen die Daten aus den zwei Tabellen dargestellt werden. Die Daten sollen über die, in Schritt 1 erstellten, Endpunkte abgerufen werden.

## Benutzung

- Run `docker compose up --build` to build & start the containers
- [once] django only: Run `docker compose exec django python pip install -r requirements.txt` to install django requirements
- [once] django only: Run `docker compose exec django python backend/manage.py migrate` to initialize the django db
- [once] symfony only: Run `docker compose exec symfony composer install` to install composer dependencies
- Access the websites via `localhost:8000` & `localhost:8080` in your browser

## Hinweise zum MapComponents Teil

Repo: https://github.com/mapcomponents/react-map-components-maplibre

Storybook: https://mapcomponents.github.io/react-map-components-maplibre/

MlGeoJsonLayer (storybook): https://mapcomponents.github.io/react-map-components-maplibre/?path=/story/mapcomponents-mlgeojsonlayer--circle

Leider ist momentan nur die "code" Ansicht von dem "Label" Beispiel zu gebrauchen. Die Daten könnten zB. in einem Initialisierungs-Effekt per fetch vom Backend abgerufen, in eine State-Variable geschrieben und so dem MlGeoJsonLayer Component übergeben werden.

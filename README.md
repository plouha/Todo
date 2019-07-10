Application ToDoList
====================

projet #8 : Améliorez un projet existant

Application écrite avec Symfony 3.4


## Installation du repository

- Créer un répertoire "Todolist" et se placer dedans.
- Ouvrir votre IDE (ou un Terminal en étant dans le bon répertoire) et taper en ligne de commande :
```
git clone git@github.com:plouha/Todo.git
```

## Installation de l'environnement

- Installer composer en tapant en ligne de commande :
```
composer install
```
- Configurer la variable d'environnement `DATABASE_URL` dans le fichier `parameters.yml`.
```
parameters:
    database_host: 127.0.0.1
    database_port: null
    database_name: todo
    database_user: root
    database_password: root
```
- Créer la base de données snowtricks puis ses tables. Taper en ligne de commande :
```
php bin/console doctrine:database:create todo
php bin/console doctrine:schema:update --force
```
- Création des fixtures dans la base de données
```
php bin/console doctrine:fixtures:load
```

## Lancement du serveur de dévellopement

- Lancer le serveur de dévellopement en tapant en ligne de commande
```
php bin/console server:run
```

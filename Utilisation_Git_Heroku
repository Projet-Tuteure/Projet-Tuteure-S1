# Projet-Tuteure-S1
Projet Tuteuré du Semestre 1, Tristan DURET, Léo CARREZ, Laurent NGETH, Henry MONT

## Lien(s) utile(s) 

- Heroku app : https://projet-tutore-bourse.herokuapp.com/

# Utiliser Github et Heroku

## Github :

### 	Installation :

Debian-based distribution :

```console
$ sudo apt install git-all
```

RPM-based distribution :

```console
$ sudo dnf install git-all
```

### 	Configuration :

Configurer nom d'utilisateur et mail :

```console
$ git config --global user.name "John Doe"
$ git config --global user.email johndoe@example.com
```

### 	Utilisation :

Créer un repertoire github depuis le fichier courant :

```console
$ git init
```

Importer les modifications faîtes par d'autres personnes (important avant de push) : 

```console
$ git pull
```

Vérifier quels fichiers ont été modifié avant de push :

```console
$ git status
```

Ajouter un fichier à la liste de fichiers à push :

```console
$ git add "chemin du fichier"
```

Créer un commit avec les fichiers précédemment ajoutés :

```console
$ git commit -m "titre du commit"
```

Push le commit créé :

```console
$ git push
```



## Heroku :

### 	Installation :

Installation snap :

```term
$ sudo snap install --classic heroku
```

### 	Configuration : 

Connexion (se connecter ensuite depuis le navigateur) :

```term
$ heroku login
```

### 	Utilisation :

Création d'une nouvelle app Heroku :

```term
$ cd "chemin de votre répertoire local"
$ heroku create [name-of-your-app]
```

Vérification qu'un répertoire distant Heroku a bien été créé :

```term
$ git remote -v
heroku  https://git.heroku.com/nomAppHeroku.git (fetch)
heroku  https://git.heroku.com/nomAppHeroku.git (push)
```

Ajout d'une app Heroku existante à votre répertoire Github :

```term
$ cd "chemin de votre répertoire local"
$ heroku git:remote -a "nom d'app Heroku"
set git remote heroku to https://git.heroku.com/nomAppHeroku.git
```

Déployer du code (créer un commit avant) :

```term
$ git push heroku master
```


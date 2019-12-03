# MyMim

Site de supervision des environnements hors-production

## Installation

Utiliser le manager de paquets [NPM](https://www.npmjs.com/) pour installer MyMim

```bash
npm install
```

Lancer le client [Angular](https://angular.io)

```bash
ng serve
```

Se rendre sur son navigateur à l'adresse [localhost:4200](127.0.0.1:4200)

## Architecture

L'architecture de l'application Angular MyMim repose sur deux pilliers

Les pages | Les components
--------- | --------------
C'est une vue, une page affiche un ou plusieurs components, une route permet d'y accéder | C'est un module défini qui possède une fonction précise, qui n'est pas intégré à la table de routage

Par exemple la page **environnement** comporte les composants ci-dessous

* barre-navigation
* totem-principal
* actualite-bandeau
* tuile-environnement

Le composant `tuile-environnement` est lui même composé du composant `menu-contextuel`

## Récupération des données

L'utilisation du client http est centralisé dans les fichiers du dossier `services`

N'oubliez pas d'injecter le client http dans le constructeur !

```javascript
constructor(private http: HttpClient) { }
```

Ensuite créez un observable

```javascript
 public getArticles(): Observable<Any> {
    return this.http.get('http://localhost:3000/cartographie/')
    );
  }
```

## Compatibilité Internet Explorer

Il est possible de rendre l'application compatible avec internet explorer

> Pour celà il vous faudra décommenter certaines lignes dans le fichier **polyfill.ts**



## Construit avec

* [Angular](https://angular.io)
* [Bootstrap](https://getbootstrap.com/)
* [Angular Material](https://material.angular.io/)
* [Chart JS](https://www.chartjs.org/)
* [RxJS](https://rxjs-dev.firebaseapp.com/)


## Fait par

@leminouxloic :shipit:


Ma phrase simple *Exemple*
**doublestar**
_foo_
~~toto~~
[lien](http://wwwgoogle.com)



1. Un
2. Deux

> citation

et ça fait `boom` hahaha

```javascript
var a = 10;

var f=function() {}
```


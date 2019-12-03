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

> Ci-dessous un example d'arborescence des _components_

1. _page-sonde_
 2. _tuile-sonde_
  3. _menu-contextuel_
   4. _historique-sonde_

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

## Rafrachissement forcé

Le fichier `refresh.service.ts` permet à un composant de demander un rafraichissement générale des données

> Il est préférable de procéder à du lazy loading

L'utilisation d'un **Subject** est nécessaire

```javascript
let rafraichissement = new Subject<string>();

// On souscrit
rafraichissement.subscribe((data) => {
  console.log("Rafraichissement >>>>> "+ data);
});

// On émet
rafraichissement.next("Page Sonde");
```

## Compatibilité  IE

Il est possible de rendre l'application compatible avec internet explorer

> Pour celà il vous faudra décommenter certaines lignes dans le fichier **polyfill.ts**

Pour en savoir plus, voir le site [Angular](https://angular.io/guide/browser-support)

## Construit avec

* [Angular](https://angular.io)
* [Bootstrap](https://getbootstrap.com/)
* [Angular Material](https://material.angular.io/)
* [Chart JS](https://www.chartjs.org/)
* [RxJS](https://rxjs-dev.firebaseapp.com/)


## Fait par

Loïc Le Minoux :shipit:

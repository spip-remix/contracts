# Métas

Les métas sont les paramètres généraux d'un site SPIP.

## Axiomes, postulats et hypothèses

- une méta (Meta) représente un paramètre général auquel il est assigné une *valeur* quelconque (`value`)
- elle est identifiée par un *nom* (`name`), une chaîne de caractères unique et non-vide
  afin de pouvoir la retrouver dans une liste (`table`).
- elle est "*importable*" par défaut ou ne l'est pas si cela est programmé explicitement
- il lui est associé un indicateur, ou tampon ?, temporel "*maj*" (`timestamp`) de création ou de mise à jour
- hypothèse: a priori que cet indicateur est mis à jour automatiquement là où l'information est enrigistrée.

La notion d'importabilité est liée aux restaurations de sauvegarde de base de données.

## Obervations

- une méta est présente en base, en cache ou en mémoire
- une liste de métas contient des valeurs hétérogènes,
  non typées en PHP (`mixed`)
- l'importabilité est représentée par les chaînes de caractères `oui` ou `non`,
  un `enum` SQL, mais c'est une information booléenne
- *maj* est un timestamp UNIX en base
  et ne semble pas exploité dans le code historique de SPIP
- une table par défaut *meta* est définie par un gestionnaire dans
  la séquence de démarrage de SPIP (bootstrap)

### Accésseurs

- lecture de globales
- lecture de fichier
- lecture en base

### Mutateurs

- affectation de globales
- création/mise à jour de fichier
- transactions en base

### Cache

- fichier
- sérialisation/encodage/decodage
- sécurisation: protection contre l'accès via HTTP si le fichier est stocké dans l'espace web du site.

### Persistance

- Abstraction SQL

## Contrat d'interface (PHP)

- psr/log: LoggerInterface
  - l'implémentation actuelle fait appel à la fonction `spip_logger()` directement au démarrage du gestionnaire
  - elle fait appel indirectement à `spip_logger()` dans d'autres cas
- psr/container: Un gestionnaire pourrait être [un container PSR-11](https://www.php-fig.org/psr/psr-11/) dans une implémentation
  - attention aux méthodes `get(string $id)` et `has(string $id): bool`, voire set() si l'implémentation
    s'appuie sur une lib tierce définissant une méthode `set(string $id, ...)`
  - l'implémentation actuelle n'est pas un container PSR-11 dans la mesure où :
    - elle n'émet pas d'exception
    - la fourniture d'une valeur par défaut pour une méta, si elle n'existe pas (encore) dans une liste, est possible
    - les fonctions s'appellent `lire_meta()`, `ecrire_meta()` et `effacer_meta()`

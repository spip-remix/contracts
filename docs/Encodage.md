# Encodage/Décodage

Encodage/Décodage de valeurs vers ou depuis une chaîne de caractères.

Sérialisation/Normalisation basée sur différents formats selon l'implémentation.
Exemples de formats exploités dans SPIP <= 4.x :

- PHP (sérialisation native avec les fonctions `serialize()` et `unserialize()`)
  - format par défaut très particulier, "endémique" parmi les langages de programmation.
  - des techniques existent pour changer le format par défaut traité par ces 2 fonctions avec les classes d'objet
  - aussi dans de très rares cas d'usage (sessions HTTP notamment).
  - (TODO doc et sources)
- JSON (sérialisation native de l'extension PHP `ext-json` avec les fonctions `json_encode()` et `json_decode()`)
  - [format normalisé](http://www.faqs.org/rfcs/rfc7159.html)
  - À noter que cette extension est embarquée systématiquement, mais désactivable lors de la compilation de l'interpréteur
    depuis PHP5.2 (nov. 2006) et ne peut plus, normalement, être désactivée depuis PHP8 (nov. 2020)
- XML
- CSV? (si c'est natif dans SPIP, à vérifier)

Mais aussi d'autres comme:

- YAML
- Neon
- La "Binarisation" ...
- ...

Pour expérimenter l'uniformisation des techniques d'encodage à travers des méthodes communes.
C'est un peu "réinventer la roue" ...
La solution définive sera peut-être d'utiliser directement
[symfony/serializer](https://symfony.com/doc/current/components/serializer.html)
et/ou d'autres lib[^1], comme, par exemple, [league/csv](https://csv.thephpleague.com/).

## Contrat d'interface

- `encode(mixed $decoded): ?string`  Renvoie une chaîne de caractères représentant la valeur passée en paramètre ou `null` si l'encodage n'est pas possible
  - On peut remplacer le retour `null` par le lancement d'une Exception ...
- `decode(string $encoded): mixed` Renvoie une valeur décodée depuis une chaîne de caractères passée en paramètre

## Notes

[^1]: Composants PHP tiers, externes, maintenues par d'autres communautés, intégrables avec `composer`.

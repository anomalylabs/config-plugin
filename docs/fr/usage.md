# Utilisation

La classe config permet un accès restreint à la classe `Repository` utilisée pour la _config_.

### Lire une valeur de configuration

Pour lire une valeur de configuration utilisez `config`_ou_ `config_get`.

    {% verbatim %}
    {{ config('app.debug') }} // false
    {{ config_get('streams::distribution.name', 'Sans-titre') }} // PyroCMS
    {% endverbatim %}

### Vérifier l'existance d'une valeur de configuration

Utilisez `has` afin de vérifier qu'une valeur existe.

    {% verbatim %}{{ config_has('exemple') }}{% endverbatim %} // false

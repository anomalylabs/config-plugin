# Usage

The config class provides restricted access to Laravel's `Repository` class often for _config_.

### Getting configuration values

To retrieve a config value you can use `config` _or_ `config_get`.

    {% verbatim %}
    {{ config('app.debug') }} // false
    {{ config_get('streams::distribution.name', 'Un-named') }} // PyroCMS
    {% endverbatim %}

### Checking if a config value exists

Use the `has` method to check if a config value exists.

    {% verbatim %}{{ config_has('dummy') }}{% endverbatim %} // false

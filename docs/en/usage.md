# Usage

The config class provides restricted access to Laravel's `Guard` class often referred to as _Config_.

### Checking if a user is logged in.

To check if a user is logged in or a guest use _check_ and _guest_ methods.

    {% verbatim %}{{ config_check() }}{% endverbatim %} // true or false

    {% verbatim %}{{ config_guest() }}{% endverbatim %} // true or false

### Returning the logged in user

The user method returns the decorated instance of the logged in user or _null_ if none.

    {% verbatim %}{{ config_user() }}{% endverbatim %} // The user presenter

    {% verbatim %}{{ config_user().display_name }}{% endverbatim %} // Ryan Thompson

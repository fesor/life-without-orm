# Selecting dependencies

It turns out that there are no bundles to use just doctrine/dbal, so we will have
dependency from doctrine/orm, while we are not going to use it. doctrine/migrations also uses it, just as fixtures bundle.

For tests we will use phpunit + for API it's worth to use snapshot testing.

And we will also use psalm for static analysis. Along with php-cs-fixer for code stlye.



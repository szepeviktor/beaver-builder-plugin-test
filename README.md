# beaver-builder-plugin-test

Static Analysis for Beaver Builder.

### Usage

First unpack BB in the git repo.

```bash
# Remove class instantiation
grep -rl '^FL\S\+::init()' classes/ extensions/ includes/ modules/|xargs -t -L1 sed -e 's#^FL\S\+::init()#true || &#' -i
grep -rl '^FL\S\+::\S\+(' classes/ extensions/ includes/ modules/|xargs -t -L1 sed -e 's#^FL\S\+::\S\+(#true || &#' -i
# Install packages
composer install
# Start
vendor/bin/phpstan analyze
```

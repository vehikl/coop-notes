# PHP

## Table of contents

### Snapshots
- How to set up snapshot testing (from scratch) with phpunit.
    - initialize composer with `composer init`
    - install `phpunit` with `composer require --dev phpunit/phpunit`
    - install [phpunit-snapshot-assertions](https://github.com/spatie/phpunit-snapshot-assertions)
    - have your test case use the `MatchesSnapshots` trait
    - notice how `$this->` now contains `MatchesSnapshots` methods
    - the first time the test is being ran the snapshot will be created and the test will be skipped
    - every other time the test will use the generated snapshot to match the output of the tested code
    
### Homestead
- Setting up Homestead
    - run `composer require --dev laravel/homestead`
    - run `./vendor/bin/homestead make`
    - configure your /etc/hosts to map the ip and site defined in the homestead.yaml
    - run `vagrant up` to serve the project
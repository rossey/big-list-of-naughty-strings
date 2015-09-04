# Big List of Naughty Strings
This is my PHP wrapper around Max Woolf's [Big List of Naughty Strings](https://github.com/minimaxir/big-list-of-naughty-strings). Thanks Max!

## Setup
The big list of naughty strings repository can be included as a git submodule that lives in resources.
Composer is configured to run `./bin/install.sh` on post-install which will call `git submodule update`.

If you don't want to use the git submodule you can manually pass a file to the `NaughtyStringsFactory` constructor.

## Examples

    composer require rossey/big-list-of-naughty-strings

    $factory = new \Rossey\Blns\NaughtyStringsFactory;

    foreach($factory->getNaughtyStrings() as $naughtyString) {
        echo $naughtyString;
    }

The factory will return an array of `NaughtyString` objects. The `NaughtyString` has a `__toString` method so you'll need to cast it to a string.
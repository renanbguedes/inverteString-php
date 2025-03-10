#!/bin/sh
set -e
docker build -t phpunit .
docker run --rm --interactive --tty phpunit InverteStringTest.php
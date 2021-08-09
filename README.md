# php-test
A PHPUnit exercise 

## The Challenge

According to the test, what string should be returned by the Motto class?

## Explanation

The aim of this exercise is simply to explore a typical PHP testing setup with an optional bit of Docker thrown in.  There are no trick questions! At interview, we will discuss how you went about the solution.

## Set up

You'll need either a recent version of [Docker](https://www.docker.com/get-started) installed on your machine (tested on PC and Mac) __or__ PHPUnit (recommended version 9) and PHP (recommended version 7.4) available on your command line/prompt/shell.

1. Clone the code from Github: `git clone git@github.com:SheffieldUni/php-test.git`
2. Change directory to the code folder: `cd php-test`
3. Run __phpunit__ in Docker: `docker compose run phpunit phpunit`
4. __OR__ Run with your locally installed PHP/PHPUnit: `phpunit`

If you're using Docker, it will first download the PHPUnit Docker image, then run the command.

When the command has finished, you'll see some test output which indicates that a class method is returning an incorrect string. What should that text be and where would you change it?

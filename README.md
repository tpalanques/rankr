# 0. Welcome to rankr 

Rankr is service to store and evaluate user scores and rankings.

# 1. Architecture

Rankr built based in docker. Four containers are created for different purposes,
you can find them explained in here:
* **Apache:** Our web server. It's used as proxy for php requests.
* **PHP:** based in php-fpm. It's used to execute our scripts.
* **PHPUnit:** used to run tests. It's usually stopped until tests need to run
* **Composer** used to build dependencies. It's usually stopped until we add dependencies

## 1.1 Dependencies
Third party libraries have been used:
* **autoload:** Allows automatic load of php classes based in namespaces.
* **digitalnature/php-ref:** Easy debugging for php
* **phpstan:** Code inspection framework
* **phpunit:** Unit test framework


# 2. Installation

Rankr is built based in docker. That's you need to install docker first, this
may need elevated permission, so you should probably run some commands
with `sudo` in front of it. Before you do so keep in mind that "with a great
power comes a great responsibility".

To install rankr go to the scripts folder

```user@server# cd scripts```

And execute the installer

```user@server:~/scripts# . install.sh ```

Once installation is done you need to rebuild our containers, to do so just type:

```user@server:~/scripts# . docker.sh rebuild```

And you're ready to go. This should leave your containers working and accessibe via
web browser under [http://localhost](http://localhost)

# 3. Usage
Once [installation](#) is successfully run you can use the following commands to
control the service.

All of this commands need to be run directly on the script folder, so you'll need
to change directory:

```user@server# cd scripts```

## 3.1 Start
```user@server:~/scripts# . docker.sh start```

Builds the docker machine and starts the service

## 3.2 Stop
```user@server:~/scripts# . docker.sh stop```

Stops the docker machine and stops the service. This will result in loosing
all of your scores.

## 3.3 Restart
```user@server:~/scripts# . docker.sh restart```

It's just stops and starts as explained before.

# 4 API Documentation

By now no authentication is required. All responses are JSON formatted and 
include 2 parameters:

* **error:** true|false stating if Rankr found any problem processing the request
* **msg:** mixed this can contain either information (array formatted) or a text
message when suitable.

## 4.1 [GET] - score/add?user=userId&score=score
Adds `score` points to user with `userId`

## 4.2 [GET] - score/set?user=userId&score=score
Sets `score` points to user with `userId`

## 4.3 [GET] - ranking/absolute
Gets the absolute ranking

## 4.4 [GET] - ranking/relative?position=position
Gets the ranking in the desired position

# 5 Development API calls
Some extra API calls have been enabled to easy developing

## 5.2 home

Just checks services are running properly

## 5.1 [GET] - dump

Prints database content 

# 6 Test

Rankr includes some test tools to check funcionality and code quality. Both
tools are run in the scripts folder so you need to go there:

```user@server# cd scripts```

## 6.1. Phpstan
Checks code quality. Currently Rankr is level 5 compliant. Level can be changed
in the `phpstan.neon` file. To execute the test just type:

```user@server:~/scripts# . tests.sh phpstan```

## 6.2 Phpunit
Some functionalities are covered by Phpunit. To avoid regressions this test should
run with no errors before submitting any code.

```user@server:~/scripts# . tests.sh phpunit```

# Roadmap

* **[SECURITY]** Add missing unit tests for current features
* **[FEATURE]** Add relative ranking surroundings
* **[SECURITY]** Add integration tests
* **[SECURITY]** Move from $_GET to $_POST for parameters
* **[PROJECT]** Develop CD/CI cycle
* **[FEATURE]** Add cache for web service

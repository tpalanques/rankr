# 0. Welcome to rankr 

Rankr is service to store and evaluate user scores and rankings.

# 1. Architecture
# 2. Installation

Rankr is built based in docker. That's you need to install docker first, this
may need elevated permission, so you should probably run some commands
with `sudo` in front of it. Before you do so keep in mind that "with a great
power comes a great responsibility".

To install rankr go to the scripts folder

```user@server# cd scripts```

And execute the installer

```user@server:~/scripts# . install.sh ```

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


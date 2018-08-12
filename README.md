#Local Docker environemnt: PHP + MYSQL + Mongo + Redis


A local dockerized environment running:
* PHP 7.1
* MySQL 5.7
* MongoDB 3.6
* Redis 4.0

(Setup instructions for Mac users)

## Require

Install [Docker](https://www.docker.com/products/docker-desktop)

## Setup   
### Step 1 - clone environment

Clone the envormaent into a folder of your choice {MY_ENV}:

```bash
git clone https://github.com/pdphilip/docker-LAMP-MR.git MY_ENV
```
### Step 2 - set up hosts  
For example:  

* www.domain.local
* api.domain.local

### Step 2.1 - edit sites-enabled
in env/php/sites-enabled/   

* www.domain.local.conf
* api.domain.local.conf

Edit domain_name variable on first line:  

```bash
Define domain_name www.domain.local
```

```bash
Define domain_name api.domain.local
```

### Step 2.2 - edit Mac host file
Via Terminal:  

```bash
sudo nano /etc/hosts
```	 

Then add in:  

```bash
0.0.0.0 localhost
0.0.0.0 www.domain.local
0.0.0.0 api.domain.local
```	 

### Step 3 - docker-compose build

In repo root, run:   

```bash
docker-compose build
```	 

## Running: 
In repo root, run:   

```bash
docker-compose up
```	 	
	
## Notes:   

* Local site files root in ./sites/{domain}/html
* Add ENV vars under the PHP container in docker-compose.yml
* Data is persisted locally in: ./data/{engine}/



Simples

Local only please, nothing is secure

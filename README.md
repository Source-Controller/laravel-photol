### Step #1
Copy files to your working directory:

### Step #2
#### Configuration
Next make sure to create a new database and add your database credentials to your .env file, you will also want to add your application URL in the APP_URL variable:
```
APP_URL=http://localhost
DB_HOST=localhost
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret
```

### Step #3
Install PhotoLife with [composer](https://getcomposer.org/doc/00-intro.md):
Go to the project directory and run the command below:
Installation by one command:
```
$ composer app-install
```

## Useful Commands
#### Create the superadmin account
```
php artisan photolife:superadmin
```

#### Running Demo Data Seeder
If you want to insert sample data into your application, run the command below:
```
php artisan db:seed --class=DemoDataSeeder
```

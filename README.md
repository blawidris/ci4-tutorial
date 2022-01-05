# CodeIgniter 4 Application Starter

## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](http://codeigniter.com).

This repository holds a composer-installable app starter.
It has been built from the
[development repository](https://github.com/codeigniter4/CodeIgniter4).

More information about the plans for version 4 can be found in [the announcement](http://forum.codeigniter.com/thread-62615.html) on the forums.

The user guide corresponding to this version of the framework can be found
[here](https://codeigniter4.github.io/userguide/).

## Installation & updates

`composer create-project codeigniter4/appstarter` then `composer update` whenever
there is a new release of the framework.

When updating, check the release notes to see if there are any changes you might need to apply
to your `app` folder. The affected files can be copied or merged from
`vendor/codeigniter4/framework/app`.

## Setup

Copy `env` to `.env` and tailor for your app, specifically the baseURL
and any database settings.

## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the _public_ folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's _public_ folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter _public/..._, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!

## Repository Management

We use GitHub issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script.
Problems with it can be raised on our forum, or as issues in the main repository.

## Server Requirements

PHP version 7.3 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php)
- xml (enabled by default - don't turn it off)

## Database Configuration

CodeIgniter 4 has everything structured in a way to make things very easy for users. To setup your db simple open .env file locate database line and uncomment the default databse configuration.

- change database name to your database name
- change database hostname and others depending on what configuration you're using

### Seting up database model

- Locate Models folder in config folder
- create new model file e.g CustomModel.php
- you can use existing database config setting provided by ci4 or you can create your custom model

##### Provided CI4 model looks like

```
<?php

namespace App\Models;


use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

   // protected $returnType     = 'array';
    //protected $useSoftDeletes = true;

    protected $allowedFields = ['name', 'email'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // protected $deletedField  = 'deleted_at';

    // protected $validationRules    = [];
    // protected $validationMessages = [];
    // protected $skipValidation     = false;
}
```

##### CustomModel should have below;

```
<?php

namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;

class CustomModel{

    protected $db;
    protected $connect_table;

    public function __construct(ConnectionInterface &$db){
        $this->db = &$db;
        $this->connect_table = $this->db->table('blog');
    }

    function functionName(){
        //code ...
    }
}
```

## Database Query Selection

- getResult(): this is used to fetch all data in a table
  e.g

```
    function all()
    {
        return $this->connect_table->get->getResult();
    }
```

- getRow(): this is use mostly when you want to fetch a single row data from a table

```
    function getPost($id)
    {
        return $this->connect_table
                    ->where('blog_id',$id)
                    ->get
                    ->getResult();
    }
```

- like: let assume you want to display data of a same value from the database table. for example, you want to display a product of same price.

```
    function getProduct()
    {
        return $this->connect_table
                    ->like('product_price','4000')
                    ->get
                    ->getResult();
    }

    //it takes an additional param to specify where '%' would be located which are before, both and after

    function getProduct()
    {
        return $this->connect_table
                    ->like('product_price','4000', 'after')
                    ->get
                    ->getResult();
    }
```

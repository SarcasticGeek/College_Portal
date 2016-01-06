# College Portal
Native PHP project based on database course.
## Before anything You should follow that instructions 
##### open new PHP file in main folder and rename it to `env.php`
##### write in it  
 ```
<?php
putenv("DB_DRIVER=mysql");
putenv("DB_HOST=localhost");
putenv("DB_NAME=college_portal");
putenv("DB_USERNAME=root");
putenv("DB_PASSWORD=root"); ?>
```

*you need to change any variables that related to your machine config.*
##### install the composer [https://getcomposer.org/download/](https://getcomposer.org/download/) and update it `$ composer update`
##### run it :D `$ php index.php`

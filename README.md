# College Portal
Native PHP project based on database course.
## Before anything You should follow that instructions 
1. open new PHP file in main folder and rename it to `env.php`
2. write in it `<?php
putenv("DB_DRIVER=mysql");
putenv("DB_HOST=localhost");
putenv("DB_NAME=test");
putenv("DB_USERNAME=root");
putenv("DB_PASSWORD=root"); ?>`you need to change any variables that related to your machine config.
3. install the composer [https://getcomposer.org/download/](https://getcomposer.org/download/) and update it `$ composer update`
3. run it :D `$ php index.php`
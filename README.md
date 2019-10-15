# RabbitMQ Study

### Docker Statements

To up the **RabbitMQ** containers, run: 

```
docker-compose up -d
```

### Run example

1 - Enter in the example path (e.g `hello-world`), open 2 or more terminals to receivers or workers:

```php
/usr/bin/php hello-world/receive.php

// Output: [*] Waiting for messages. To exit press CTRL + C
```

2 - Throw message(s) as below:

```php
/usr/bin/php hello-world/send.php

// Output: [x] Sent 'Hello World!
```
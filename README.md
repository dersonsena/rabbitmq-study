# RabbitMQ Study

### Docker Statements

To up the **RabbitMQ** container, run: 

```
docker run -d -p 5672:5672 --hostname rabbitmq --name rabbitmq rabbitmq:3
```

To up the **RabbitMQ Management** container, run: 

```
docker run -d -p 15672:15672 --hostname rabbitmq-admin --name rabbitmq-admin rabbitmq:3-management
```

### Run example

1 - Run the Consumer script:

```php
/usr/bin/php receive.php

// Output: [*] Waiting for messages. To exit press CTRL + C
```

2 - Throw message(s) to broker:

```php
/usr/bin/php sender.php

// Output: [x] Sent 'Hello World!
```
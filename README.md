
# Local для Bitrix

[Как подготовить Веб-окружение под Windows для Bitrix с помощью Local](https://zen.yandex.ru/media/id/5b1a58b8eb269500a877dd6c/kak-podgotovit-vebokrujenie-pod-windows-dlia-bitrix-s-pomosciu-local-5f266321f818c06866348cb3)

## Настройки Bitrix и версии компонентов окружения

- OC Windows
- кодировка UTF-8
- веб-сервер Apache
- PHP 8.1
- сервер БД MySQL 8

## фикс ошибки для SSL (при установке через bitrixsetup.php)

Скопировать файл https://curl.haxx.se/ca/cacert.pem в C:\Users\user\bin\cacert.pem или поменять на свой путь в конфиге conf/php/php.ini.hbs

## фикс ошибки при установке "...bitrix\modules\main\lib\security\random.php on line 297 Fatal error: Allowed memory size of ..."

Если выдает данную ошибку при установке - заменить в файле /bitrix/modules/main/classes/general/main.php:3407 на

```
$uniq = md5(uniqid(rand(), true));
```

## Services path

`C:\Program Files (x86)\Local\resources\extraResources\lightning-services`

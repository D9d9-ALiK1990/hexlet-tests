<?php

require("vendor/autoload.php");
require("src/StringUtils.php");

use Webmozart\Assert\Assert;

Assert::eq('Hello', 'Hello', 'Функция работает неверно!');
Assert::notEq('Hello', 'hello', 'Функция работает неверно 2!');

echo 'Все тесты пройдены!';
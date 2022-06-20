# sites/yii2-boilerplate

---
 master
 
[![pipeline status](https://gitlab.maxim-team.ru/sites/yii2-boilerplate/badges/master/pipeline.svg)](https://gitlab.maxim-team.ru/sites/yii2-boilerplate/commits/master)
[![coverage report](https://gitlab.maxim-team.ru/sites/yii2-boilerplate/badges/master/coverage.svg)](https://gitlab.maxim-team.ru/sites/yii2-boilerplate/commits/master)

---

# Установка шаблона

```bash
composer create-project --remove-vcs \
    --prefer-dist --repository-url=https://repo.infranet.co/ \
    technology/yii2-boilerplate path_to_app
                                                                        
```

# Локальная установка проекта

* `git clone REPOSITORY`
* Добавить файл `/app/environment`, написать в него название окружения, например `gonimar_sd`
* Добавить файл настройки окружения, например `/app/config/env.gonimar_sd.php`
* Добавить файл приватных данных `cp /app/config/secret.sample.php /app/config/secret.php`
* Дать доступ на запись для каталогов `/app/runtime` и `/app/web/assets`

# Внесение изменений

Созаем свою ветку из ветки `dev` называем своим логином, напрмиер `gonimar_sd`

Комментарий к коммиту должен содержать краткое описание изменений, желательно на английском,
если работа ведется по заявке, то так же желательно указать номер заявки в комментарии.

Например `git commit -am "My best change #000000"`

Когда все необходимые изменения внесены и проверены локально, делаем `push` на сервер.

Создаем `merge-реквест` из своей ветки в ветку `dev`, еще раз просматриваем и назначаем на ответственного.

После того как `merge-реквест` будет принят и изменения попадут в `dev-ветку` автоматически будет собрана `dev` версия проекта.

Для того чтобы изменения попали в продакшен версию, необходимо смерджить `dev` в `master`



----


```bash
docker-compose build

docker-compose run --rm -v ${HOME}/.composer/cache:/tmp/cache composer

docker-compose run --rm \
    	-e BROKER_CONTEXT="6db39e1f-29d8-4d29-b69e-76fcebba1531" \
        codecept run \
        --html="report.html" \
        --xml="report.xml" \
        --tap="report.tap.log" \
        --json="report.json" \
        --no-interaction \
        --coverage-html \
        --coverage-xml \
        --coverage-text \
        --coverage-crap4j \
        --no-interaction
```

---

## Check code style

```bash
./src/vendor/bin/phpcs --error-severity=1 --warning-severity=8 --extensions=php
```

## PMD

```bash
./src/vendor/bin/phpmd . text codesize --suffixes php --exclude vendor
```

## Tests

```bash
./tests/bin/yii migrate --interactive=0
./tests/bin/yii cache/flush-all
./src/vendor/bin/codecept run unit,functional --debug --coverage-html
```


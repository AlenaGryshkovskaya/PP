#!/usr/bin/env bash

chmod 777 ./src/runtime
chmod 777 ./src/web/assets

echo test > ./src/environment
cp ./src/config/secret.test.php ./src/config/secret.php
sed -i 's@BROKER_CONTEXT@'"$BROKER_CONTEXT"'@g' ./config/secret.php

#./tests/bin/yii migrate --interactive=0 --migrationPath=@yii/rbac/migrations
#./tests/bin/yii migrate --interactive=0

#./tests/bin/yii fixture/generate-all --interactive=0 --count 10

exec codecept "$@"

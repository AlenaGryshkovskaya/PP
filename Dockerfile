FROM repo.infranet.co:5000/base-php:8.0

ADD --chown=jenkins:jenkins . /app

WORKDIR /app

# Build assets
RUN touch /app/src/config/secret.php && \
    mkdir -p /app/build/tools && \
    mv /opt/assets-tools/*.jar /app/build/tools && \
    /app/src/yii asset src/config/assets.php src/config/assets-prod.php

# Make dist
RUN mkdir -p /dist
RUN cp -r /app/src/* /dist/

ENTRYPOINT ["/bin/bash"]

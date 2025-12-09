FROM docker.io/wardenenv/php-fpm:7.4-magento2-xdebug3
USER www-data
ENV NVM_DIR /home/www-data/.nvm
ENV NODE_VERSION 14.18.2

# Install nvm with node and npm
RUN curl https://raw.githubusercontent.com/creationix/nvm/master/install.sh | bash \
    && . $NVM_DIR/nvm.sh \
    && nvm install $NODE_VERSION \
    && nvm alias default $NODE_VERSION \
    && nvm use default \
    && npm i -g scandipwa-cli

ENV NODE_PATH $NVM_DIR/v$NODE_VERSION/lib/node_modules
ENV PATH      $NVM_DIR/v$NODE_VERSION/bin:$PATH
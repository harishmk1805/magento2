FROM docker.io/wardenenv/php-fpm:7.4-magento2
USER www-data
ENV GENERATE_SOURCEMAP=false
ENV NODE_OPTIONS=--max_old_space_size=8192
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

RUN sudo yum update -y
RUN sudo yum install -y gcc openssl-devel bzip2-devel
RUN cd /usr/src; \
    sudo wget https://www.python.org/ftp/python/2.7.18/Python-2.7.18.tgz; \
    sudo tar xzf Python-2.7.18.tgz; \
    cd ./Python-2.7.18; \
    sudo ./configure --enable-optimizations; \
    sudo make altinstall;
RUN sudo npm config set python python2.7
ENV PYTHON $(which python2.7)
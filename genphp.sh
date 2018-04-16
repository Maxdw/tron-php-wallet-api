#!/bin/sh

#
# Run this script to generate the PHP GRPC client and proto data objects
#
# 1. Checks if protoc is installed
# 2. Checks if grpc submodule needs initialisation
# 3. Checks if the protoc grpc_php_plugin needs to be built using make
# 4. Runs protoc and generates PHP GRPC client and proto data objects
#

command -v protoc >/dev/null 2>&1 || {
    echo >&2 "I require bin protoc @ https://github.com/google/protobuf but it is not installed, aborting"; exit 1;
}

cwd=$(pwd)

if [ ! -d "./modules/grpc/objs/opt" ]
then
    cd ./modules/grpc
    git submodule update --init
fi

cd $cwd

if [ ! -f "./modules/grpc/bins/opt/grpc_php_plugin" ]
then
    cd ./modules/grpc
    make grpc_php_plugin
fi

cd $cwd

protoc \
    --proto_path=modules/protocol \
    --grpc_out=src \
    --plugin=protoc-gen-grpc=./modules/grpc/bins/opt/grpc_php_plugin \
    --php_out=src \
    ./modules/protocol/api/api.proto
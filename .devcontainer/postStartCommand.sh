#!/bin/bash

// start webserver without cache on port 8080 and leave it running in background
nohup bash -c 'php -S localhost:8000 > .nohup_phpserver.out 2>&1 & rm nohup.out &' 

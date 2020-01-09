#!/bin/bash
for (( ; ; ))
do
    curl -sL -w "%{http_code}\n" "https://www.semi.org/en/semi-50th-anniversary" -o /dev/null   
done

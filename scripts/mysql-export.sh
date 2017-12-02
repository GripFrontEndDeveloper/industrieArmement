#!/usr/bin/env bash
mysqldump -uroot -hlocalhost -P3306 industrie_armement > "db/industrie_armement.sql"
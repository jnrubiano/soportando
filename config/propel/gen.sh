#!/bin/bash
propel-gen . reverse
#sed -i 's/phpName="Tb/phpName="/' schema.xml
propel-gen
mysqldump -u qantica --password=ambiok soportando > ../../app/models/sql/soportando.sql

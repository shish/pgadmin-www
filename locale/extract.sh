xgettext    -s --keyword=_ --language=php --output=pgadmin3_website.pot ../*.php
xgettext -j -s --keyword=_ --language=php --output=pgadmin3_website.pot ../advocacy/*.php
xgettext -j -s --keyword=_ --language=php --output=pgadmin3_website.pot ../development/*.php
xgettext -j -s --keyword=_ --language=php --output=pgadmin3_website.pot ../docs/*.php
xgettext -j -s --keyword=_ --language=php --output=pgadmin3_website.pot ../download/*.php
xgettext -j -s --keyword=_ --language=php --output=pgadmin3_website.pot ../include/*.php
xgettext -j -s --keyword=_ --language=php --output=pgadmin3_website.pot ../screenshots/*.php
xgettext -j -s --keyword=_ --language=php --output=pgadmin3_website.pot ../support/*.php
xgettext -j -s --keyword=_ --language=php --output=pgadmin3_website.pot ../translation/*.php

recode latin1..u8 pgadmin3_website.pot
sed -e "s/=CHARSET/=UTF-8/g" pgadmin3_website.pot > temp.pot
mv -f temp.pot pgadmin3_website.pot

xgettext    -s --keyword=_ --language=C --output=pgadmin3_website.pot ../cnt/cnt_advocacy.php
xgettext -j -s --keyword=_ --language=C --output=pgadmin3_website.pot ../cnt/cnt_development.php
xgettext -j -s --keyword=_ --language=C --output=pgadmin3_website.pot ../cnt/cnt_download.php
xgettext -j -s --keyword=_ --language=C --output=pgadmin3_website.pot ../cnt/cnt_index.php
xgettext -j -s --keyword=_ --language=C --output=pgadmin3_website.pot ../cnt/cnt_mirrors.php
xgettext -j -s --keyword=_ --language=C --output=pgadmin3_website.pot ../cnt/cnt_screenshots.php
xgettext -j -s --keyword=_ --language=C --output=pgadmin3_website.pot ../cnt/cnt_support.php
xgettext -j -s --keyword=_ --language=C --output=pgadmin3_website.pot ../cnt/cnt_translation.php

xgettext -j -s --keyword=_ --language=C --output=pgadmin3_website.pot ../tpl/menu.php
xgettext -j -s --keyword=_ --language=C --output=pgadmin3_website.pot ../class/pgadmin_po.php
recode latin1..u8 pgadmin3_website.pot
sed -e "s/=CHARSET/=UTF-8/g" pgadmin3_website.pot > temp.pot
mv -f temp.pot pgadmin3_website.pot
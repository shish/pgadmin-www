#######################################################################
#
# pgAdmin III - PostgreSQL Tools
# Copyright (C) 2002 - 2003, The pgAdmin Development Team
# This software is released under the Artistic Licence
#
# stringmerge - merge pgadmin3.pot template file into existing pgadmin3.po
# translated files, compile and publish them on CVS.
#
# Same as 'Update from .pot' feature of poEdit.
#
#######################################################################

cd /home/jmpoure/project/pgadmin/www/pgadmin3
cvs update -C -P -d
cd locale
if test -f pgadmin3_website.pot; then

  for GETTEXTDIR in *_*/LC_MESSAGES/ ; do
    echo "Entering $GETTEXTDIR."
    cd $GETTEXTDIR
    echo "Merging pgadmin3_website.pot into pgadmin3_website.po"
    msgmerge --update pgadmin3_website.po ../../pgadmin3_website.pot
    echo "Compiling pgadmin3.mo"
    msgfmt -o pgadmin3_website.mo pgadmin3_website.po
    echo "Committing changes to CVS."
    cvs commit -m "Automatic merge using stringmerge script." pgadmin3_website.po
    cvs commit -m "Automatic merge using stringmerge script." pgadmin3_website.mo
    cd ../..
  done
fi

rm -rf tmp
mkdir tmp

git clone $2 tmp

rm -rf content/kurser/$1

mv tmp/content content/kurser/$1

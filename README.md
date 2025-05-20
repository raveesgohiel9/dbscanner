# DB Scanner V1.0
A Laravel Pacakge to help developers scan their MySQL DB to get a list of tables, all the columns, total row counts. This could be helppul for developers to not have to wrtie
a lot fo queries and get it all by just using a simple package.

# USAGE
```
use Raveesgohiel\Dbscanner\Facades\DbScanner;
```
You must add the DbScanner class to your controller. Then just use the scan(). The usage is shown below

```
$db_report = DbScanner::scan();
```

This will return an array of all the tables, with fields, primary keys and even totoal row count. 

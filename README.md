# error_reporting_php
function to set error reporting based on the mode :null , min , max , dev , custom 
# inspired from question at http://open-source-customization.com/question/error-reporting-in-php/102


# Null mode :
```
set_error_reporting(0); or set_error_reporting("null") or set_error_reporting("none") or set_error_reporting(); 
```
will disable error reporting .

# Min mode :
```
set_error_reporting("min"); 
```
will show only Error , Warning and Parse Error. alternative initialization set_error_reporting(1);

# Max mode :
```
set_error_reporting("max"); 
```
will show all errors , alternative initialization set_error_reporting(2);

# Dev Mode :
```
set_error_reporting("dev"); 
```
same as max show you all error , alternative initialization set_error_reporting(3);

# Custom Mode : 
```
set_error_reporting("custom",E_STRICT);
```
in this case you can pass second argument what type error reporting you need , alternative initialization set_error_reporting(4); 

#HOPE IT USEFULL TO SOMEONE

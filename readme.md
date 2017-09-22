# Codeigniter with Login, Session, Cookies and Migration
This project is focus on codeigniter frame work and their libraries like Database, Migration etc. as well as in this php frameworks we developed Login module with session and cookies with Migration of database table also included.

## Database and Migration
Source code directories included user.sql file of database backup so you just need to import into your datbase client thats it and more advanced if you want to learn database migration just follow below steps to generate sql table directly in database.
###### NOTE : You need basic knowledge of PHP Interpreter and aware about how to run in BASH or cmd.

* First step go to current main root directory and open bash or cmd (Shift + Right click ->Open command window here) ```$ php index.php migrate latest```Hit this command, now database get populated with table but you have to fill table (Don't modify migrations table for first time version in migrations table is 0).

* Reset Migration ```$ php index.php migrate reset``` this command reset migration database to Version 0.

* To control custom version user ```$ php index.php migrate version 1``` migrate to version 1.

* Migration modification: To modify migration go to controllers/migrate controller where it redirect to the application/migrations so you can add your table fields in ```up``` function.

DEVELOPER	: Vrushal Raut
EMAIL		: vrushalrt@gmail.com


██╗   ██╗██████╗ ██╗   ██╗███████╗██╗  ██╗ █████╗ ██╗         ██████╗  █████╗ ██╗   ██╗████████╗    
██║   ██║██╔══██╗██║   ██║██╔════╝██║  ██║██╔══██╗██║         ██╔══██╗██╔══██╗██║   ██║╚══██╔══╝    
██║   ██║██████╔╝██║   ██║███████╗███████║███████║██║         ██████╔╝███████║██║   ██║   ██║       
╚██╗ ██╔╝██╔══██╗██║   ██║╚════██║██╔══██║██╔══██║██║         ██╔══██╗██╔══██║██║   ██║   ██║       
 ╚████╔╝ ██║  ██║╚██████╔╝███████║██║  ██║██║  ██║███████╗    ██║  ██║██║  ██║╚██████╔╝   ██║       
  ╚═══╝  ╚═╝  ╚═╝ ╚═════╝ ╚══════╝╚═╝  ╚═╝╚═╝  ╚═╝╚══════╝    ╚═╝  ╚═╝╚═╝  ╚═╝ ╚═════╝    ╚═╝       
                                                                                                    
		
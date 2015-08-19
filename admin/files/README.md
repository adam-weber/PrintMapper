PrintMapper - User Files
-------------------------

User files are made up of a registry file and an executable - combined to be about 5kB.

Both files must be deployed to each computer that wants to install through PrintMapper. If the files are not installed,
PrintMapper will still work, but in a non user-friendly manner.*

1. addPrinter.reg - This is a file that modifies the registry to add in a custom protocol handler. That handler is "add-printer".

2. addPrinter.exe - Executable file that can take in arguments to the location of the printer. Ex. 
     ' addPrinter.exe "\\print\EngineeringPrinter1"

     The executable can also take the argument /u to uninstall the given printer.

     In a general install of PrintMapper, you would not manually pass arguments to the file.

*The fallback - while effective is not the preffered method to install printers. Instead of a user clicking a link and having 
the printer be automagically installed, a batch file is downloaded to their computer which must be run by the user. 
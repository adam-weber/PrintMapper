Work in Progress
===

PrintMapper - Enterprise ready printer installation
-------------------------
The goal of PrintMapper is to facilitate simple end-user printer installation. The end-user will navigate a floor plan and click the printer nearest to them to install.

**Roadmap**

The above task will be accomplished with the use of many technologies; including C#, MySQL, PHP, JS, HTML5, and CSS. The web interface for end-users will consist of an easily navigable floor plan interface. From the Administration side, an Admin must be able to easily move, resize, and remove printers. This will be accomplished with Canvas, JS, and HTML Image Maps.

From the user side, clicking to install a printer (or anything) is not a simple task. It will be assumed the end-user does not have administrative privileges. There are two *tiny* files that need to be remotely (or manually) pushed out to any computers that would like to use PrintMapper.

     1) A registry file that registers a custom protocol handler. This will handle custom links, such as -

          add-printer://BreakRoomPrinter

     2) A very small (4kB) C# application that will "install" the printer. The link above will point to this application and        pass the printer name as a parameter.

**Screen Shots**
![Administration Panel - Adding a new printer](http://i.imgur.com/9Cmc7T0.png)

![Administration Panel - File modification and download](http://i.imgur.com/I40EP8c.png)


**To Do**

1) End-user interface

2) Admin Map Interface

3) Admin Files Interface **X**

4) C# Application **X**

5) Custom Protocol Handler Registry script **X**

6) Database design and integration

As this is currently in development, feel free to give it a try. Fork this or [download](https://github.com/adam-weber/PrintMapper/archive/master.zip) the zip. Start a PHP server with:

     php -S localhost:8000

     Access from - localhost:8000/admin/map


# Countdown Plugin for Statamic

1. Download the zip file (or clone via git) into /_add-ons/.
2. Ensure the folder name is "countdown" (Github makes a mess of folder names).
3. Use it and stuff.

## Usage
This is a tiny little itty bitty plugin that will show you the number of days, hours, minutes, and yes, even seconds until any specified date and time. It uses PHP's [strtotime()](http://php.net/manual/en/function.strtotime.php) function so you can use most "natural language" date formats. Example:

```
{{ countdown date="December 24 2013 18:00" }}
  It's {{ days }} days, {{ hours }} hours until NEXT Christmas!
{{ /countdown}}
```

The only **parameter** is `date`. You can pass entry dates in like so:

```
{{ countdown date="{date}" }}
  This even is {{ days }} days away. Start planning!
{{ /countdown}}
```

Do whatever you want with this plugin.
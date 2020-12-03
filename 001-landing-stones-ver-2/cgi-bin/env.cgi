#!/usr/bin/perl

print "Content-Type: text/html; charset=window-1251\n\n";

##use Device::SerialPort;
##use Net::SMS::Clickatell; ## http://search.cpan.org/~ralamosm/Net-SMS-Clickatell-0.05/lib/Net/SMS/Clickatell.pm

foreach $key(keys %ENV) {
  print $key." = ".$ENV{$key}."<br>\n";
}

print "<br>GATEWAY_INTERFACE: ".$ENV{'GATEWAY_INTERFACE'}."";

<?php

## Have a look in includes/defaults.inc.php for examples of settings you can set here. DO NOT EDIT defaults.inc.php!

$config['update'] = 0;

# Webui settings

$config['site_style']       = "mono";

# General settings
$config['php_memory_limit'] = 1024;

$config['rrdtool_version'] = '1.5.5';

$config['distributed_poller'] = true;
$config['distributed_poller_name'] = "xxxxx";
$config['distributed_poller_group'] = '3';
$config['distributed_poller_memcached_host'] = "1.1.1.1";
$config['distributed_poller_memcached_port'] = 11211;

$config['install_dir']  = "/opt/librenms";

### Database config
$config['db_host'] = '1.1.1.1';
$config['db_user'] = 'librenms';
$config['db_pass'] = 'xxxxxxxx';
$config['db_name'] = 'librenms';

// This is the user LibreNMS will run as
//Please ensure this user is created and has the correct permissions to your install
$config['user'] = 'librenms';

### This should *only* be set if you want to *force* a particular hostname/port
### It will prevent the web interface being usable form any other hostname
$config['base_url']        = "/";

### Default community
$config['snmp']['community'] = array('sdfsadfsaf');

### Authentication Model
$config['auth_mechanism'] = "mysql"; # default, other options: ldap, http-auth
#$config['http_auth_guest'] = "guest"; # remember to configure this user if you use http-auth

# Number in days of how long to keep old rrd files. 0 disables this feature
$config['rrd_purge'] = 0;

# Enable the in-built billing extension
$config['enable_billing'] = 1;

# Enable the in-built services support (Nagios plugins)
$config['show_services'] = 1;

$config['memcached']['enable']  = TRUE;
$config['memcached']['host']    = "1.1.1.1";
$config['memcached']['port']    = 11211;

$config['rrdcached']    = "1.1.1.1:42217";

$config['fping_options']['timeout'] = 500;
$config['fping_options']['count']   = 5;
$config['fping_options']['interval'] = 500;

$config['poller_modules']['unix-agent']                   = 0;
$config['poller_modules']['os']                           = 1;
$config['poller_modules']['ipmi']                         = 0;
$config['poller_modules']['sensors']                      = 1;
$config['poller_modules']['processors']                   = 1;
$config['poller_modules']['mempools']                     = 1;
$config['poller_modules']['storage']                      = 1;
$config['poller_modules']['netstats']                     = 1;
$config['poller_modules']['hr-mib']                       = 1;
$config['poller_modules']['ucd-mib']                      = 1;
$config['poller_modules']['ipSystemStats']                = 1;
$config['poller_modules']['ports']                        = 1;
$config['poller_modules']['bgp-peers']                    = 1;
$config['poller_modules']['junose-atm-vp']                = 0;
$config['poller_modules']['toner']                        = 0;
$config['poller_modules']['ucd-diskio']                   = 1;
$config['poller_modules']['wifi']                         = 1;
$config['poller_modules']['ospf']                         = 1;
$config['poller_modules']['cisco-ipsec-flow-monitor']     = 1;
$config['poller_modules']['cisco-remote-access-monitor']  = 1;
$config['poller_modules']['cisco-cef']                    = 1;
$config['poller_modules']['cisco-sla']                    = 1;
$config['poller_modules']['cisco-mac-accounting']         = 1;
$config['poller_modules']['cipsec-tunnels']               = 1;
$config['poller_modules']['cisco-ace-loadbalancer']       = 0;
$config['poller_modules']['cisco-ace-serverfarms']        = 0;
$config['poller_modules']['netscaler-vsvr']               = 0;
$config['poller_modules']['aruba-controller']             = 0;
$config['poller_modules']['entity-physical']              = 1;
$config['poller_modules']['applications']                 = 1;
$config['poller_modules']['cisco-asa-firewall']           = 1;
$config['poller_modules']['mib']                          = 0;

$config['autodiscovery']['xdp']            = FALSE;
$config['autodiscovery']['ospf']           = FALSE;
$config['autodiscovery']['bgp']            = FALSE;
$config['autodiscovery']['snmpscan']       = FALSE;
$config['discover_services']               = FALSE;
$config['discovery_by_ip']                 = FALSE;

# custom types for description parsing
$config['custom_descr'][]       =       "mgmt";
$config['custom_descr'][]       =       "server";
$config['custom_descr'][]       =       "oob";
$config['custom_descr'][]       =       "sip";
$config['custom_descr'][]       =       "env";

$config['eventlog_purge']                                 = 30;
$config['authlog_purge']                                  = 30;
$config['perf_times_purge']                               = 30;
$config['syslog_purge']                                   = 30;
$config['device_perf_purge']                              = 30;

# Various things to ignore

$config['ignore_mount_removable']  = 1;
$config['ignore_mount_network']    = 1;
$config['ignore_mount_optical']    = 1;

$config['ignore_mount'][] = "/kern";
$config['ignore_mount'][] = "/mnt/cdrom";
$config['ignore_mount'][] = "/proc";
$config['ignore_mount'][] = "/dev";

$config['ignore_mount_string'][] = "packages";
$config['ignore_mount_string'][] = "devfs";
$config['ignore_mount_string'][] = "procfs";
$config['ignore_mount_string'][] = "UMA";
$config['ignore_mount_string'][] = "MALLOC";

$config['ignore_mount_regexp'][] = "/on: \/packages/";
$config['ignore_mount_regexp'][] = "/on: \/dev/";
$config['ignore_mount_regexp'][] = "/on: \/proc/";
$config['ignore_mount_regexp'][] = "/on: \/junos^/";
$config['ignore_mount_regexp'][] = "/on: \/junos\/dev/";
$config['ignore_mount_regexp'][] = "/on: \/jail\/dev/";
$config['ignore_mount_regexp'][] = "/^(dev|proc)fs/";
$config['ignore_mount_regexp'][] = "/^\/dev\/md0/";
$config['ignore_mount_regexp'][] = "/^\/var\/dhcpd\/dev,/";
$config['ignore_mount_regexp'][] = "/UMA/";

# Bad Interfaces
$config['bad_iftype'][]= 'propVirtual';
$config['good_if'][] = 'irb';
$config['good_if'][] = 'ms-';
$config['good_if'][] = 'st';

$config['bad_if_regexp'][] = '/^bme[0-9].*/';
$config['bad_if_regexp'][] = '/^vcp.*/';
$config['bad_if_regexp'][] = '/^pfe.*/';
$config['bad_if_regexp'][] = '//[0-9]{1,}.[0]/';

$config['bad_if_regexp'][] = '/^fxp[0-9]/';     // management interface
$config['bad_if_regexp'][] = '/^cbp[0-9]/';     // no idea
$config['bad_if_regexp'][] = '/^dsc/';          // discard interface
$config['bad_if_regexp'][] = '/^lo[0-9].*/';    // loopback
$config['bad_if_regexp'][] = '/^tap/';          // multicast tunnel
$config['bad_if_regexp'][] = '/^gre/';          // gre interfaces
$config['bad_if_regexp'][] = '/^ipip/';         // ip-in-ip interfaces
$config['bad_if_regexp'][] = '/^pim[a-z]/';     // multicast
$config['bad_if_regexp'][] = '/^mtun/';         // multicast tunnel
$config['bad_if_regexp'][] = '/^em[0-9].*/';    // ethernet management interface
$config['bad_if_regexp'][] = '/^cpb[0-9]/';     // collector interface
$config['bad_if_regexp'][] = '/^demux[0-9]/';   // demux interface
$config['bad_if_regexp'][] = '/^irb/';          // routing and bridging interface
$config['bad_if_regexp'][] = '/^pip[0-9]/';     // no idea
$config['bad_if_regexp'][] = '/^pp[0-9]/';      // no idea
$config['bad_if_regexp'][] = '/^.*\.[0-9]{5}/'; // auto generated interfaces, e.g. pfd-0/0/0.32567
$config['bad_if_regexp'][] = '/^lc.*/';         // local interface
$config['bad_if_regexp'][] = '/^lsi.*/';        // Internally generated interface
$config['bad_if_regexp'][] = '/^pf[a-z].*/';    // no idea

$config['bad_if_regexp'][] = '/^jsrv.*/';        // Internal sFlow collector
$config['bad_if_regexp'][] = '/^vme.*/';        // Virtual Chassis management interface
$config['bad_if_regexp'][] = '/^bme.*/';        // Virtual Chassis management interface

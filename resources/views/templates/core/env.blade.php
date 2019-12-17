# Generated by {{ config('app.name') }}
APP_ENV={{ $env ?? 'production' }}
APP_KEY=
APP_DEBUG={{ $debug ?? 'false' }}
APP_URL=http://{{ $hostname }}:{{ $port }}

LOG_CHANNEL=daily
DB_CONNECTION={{ $connectionName }}
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE={{ $db }}
DB_USERNAME={{ $username }}
DB_PASSWORD="{{ $password }}"

BROADCAST_DRIVER=pusher
CACHE_DRIVER=file
QUEUE_CONNECTION=database
SESSION_DRIVER=file
SESSION_LIFETIME=120
RR_FORCE_HTTPS=false

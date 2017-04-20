# config valid only for current version of Capistrano
lock "3.8.0"

set :application, "switchjob"
set :repo_url, "git@gitlab.com:superirale/switchjob.git"

# Default branch is :master
# ask :branch, `git rev-parse --abbrev-ref HEAD`.chomp
#set :branch, "developer-dashboard"


# Default deploy_to directory is /var/www/my_app_name
# set :deploy_to, "/var/www/my_app_name"
set :deploy_to, '/var/www/html/collins/getdev'

#  vDefaultalue for :format is :airbrussh.
# set :format, :airbrussh
set :scm, :git
# You can configure the Airbrussh format using :format_options.
# These are the defaults.
# set :format_options, command_output: true, log_file: "log/capistrano.log", color: :auto, truncate: :auto
set :format, :pretty 

# Default value for :pty is false
# set :pty, true
set :pty, true
# Default value for :linked_files is []
# append :linked_files, "config/database.yml", "config/secrets.yml"
set :use_sudo, false
# Default value for linked_dirs is []
# append :linked_dirs, "log", "tmp/pids", "tmp/cache", "tmp/sockets", "public/system"

# Default value for default_env is {}
# set :default_env, { path: "/opt/ruby/bin:$PATH" }

# Default value for keep_releases is 5
# set :keep_releases, 5

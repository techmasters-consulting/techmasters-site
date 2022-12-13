spec:
  name: techmasters-site
  services:
  - environment_slug: php
    git:
      branch: main
      repo_clone_url: https://github.com/techmasters-consulting/techmasters-site.git
    envs:
    - key: APP_KEY
      value: "base64:Kjmcm1mgeW7nwIpZ7hqE4lthVUVzvoNbSX01JcaeipU"
    name: techmasters-site
    run_command: heroku-php-apache2 public/
module.exports = {
    apps : [{
      name:'ms-dev-sso',
      script: 'app.js',
      watch: '.',
      ignore_watch: ['api/logapi','tmp','upload']
    }],
  
    deploy : {
      production : {
        user : 'SSH_USERNAME',
        host : 'SSH_HOSTMACHINE',
        ref  : 'origin/master',
        repo : 'GIT_REPOSITORY',
        path : 'DESTINATION_PATH',
        'pre-deploy-local': '',
        'post-deploy' : 'npm install && pm2 reload ecosystem.config.js --env production',
        'pre-setup': ''
      }
    }
  };
  

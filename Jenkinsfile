pipeline{
  agent any
  stages{
    stage('Build'){
      steps{
        bat "composer install --no-interaction"
        bat "composer require --dev symfony/phpunit-bridge --no-interaction"
        bat "zip -9 -r target/project.zip ./*"
      }
    }
    stage('Test'){
      steps{
        bat "php bin/phpunit"
      }
    }
  }
}

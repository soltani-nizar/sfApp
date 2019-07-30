pipeline{
  agent any
  stages{
    stage('Build'){
      steps{
         bat 'composer install --no-interaction
              composer require --dev symfony/phpunit-bridge '
      }
    }
    stage('Test'){
      steps{
         bat "phpunit"
      }
    }
  }
}

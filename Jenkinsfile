pipeline{
  agent any
  stages{
    stage('Build'){
      steps{
        bat "composer install --no-interaction"
        bat "composer require --dev symfony/phpunit-bridge"
      }
    }
    stage('Test'){
      steps{
        bat "cd bin"
        bat "phpunit"
      }
    }
  }
}

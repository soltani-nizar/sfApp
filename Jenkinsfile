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
        bat "php bin/phpunit"
      }
    }
    stage('SonarQube'){
      steps{
        echo "=== Starting SonarQube Analysis ==="
        sonar-scanner
        echo "=== Ending SonarQube Analysis ==="
      }
    }
  }
}

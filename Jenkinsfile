pipeline{
  agent any
  tools {
    sonar-scanner 'SonarQube'
  }
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
        bat "sonar-scanner"
        echo "=== Ending SonarQube Analysis ==="
      }
    }
  }
}
